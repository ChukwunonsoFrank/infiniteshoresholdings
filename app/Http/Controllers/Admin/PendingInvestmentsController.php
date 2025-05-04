<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Investment;
use Illuminate\Http\Request;
use App\Mail\InvestmentApproved;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class PendingInvestmentsController extends Controller
{
    public function index() {
        $pending_investments = Investment::where('confirmation_status', 'pending')->get();
        return view('admin.pending-investments.index', [
            'pending_investments' => $pending_investments
        ]);
    }

    public function approve(Request $request) {
        $id = $request->id;
        $investment = Investment::where('id', $id)->first();
        $investment->confirmation_status = 'confirmed';
        $investment->save();

        $user = User::where('id', $investment->user_id)->first();
        $new_balance = $user->balance - $investment->amount;
        $user->balance = round($new_balance, 2);
        $user->total_invested = $user->total_invested + $investment->amount;
        $user->save();

        Mail::to($user->email)->send(new InvestmentApproved($user->username, $investment->amount, $investment->hash,$investment->confirmation_status));
        return back();
    }

    public function edit(Request $request) {
        $investment_id = $request->id;
        $investment = Investment::where('id', $investment_id)->first();
        return view('admin.pending-investments.edit', [
            'investment' => $investment
        ]);
    }
}
