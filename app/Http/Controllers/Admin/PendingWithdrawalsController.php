<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use App\Mail\WithdrawalApproved;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class PendingWithdrawalsController extends Controller
{
    public function index() {
        $pending_withdrawals = Withdrawal::where('confirmation_status', 'pending')->get();
        return view('admin.pending-withdrawals.index', [
            'pending_withdrawals' => $pending_withdrawals
        ]);
    }

    public function approve(Request $request) {
        $id = $request->id;
        $withdrawal = Withdrawal::where('id', $id)->first();
        $withdrawal->confirmation_status = 'confirmed';
        $withdrawal->save();

        $user = User::where('id', $withdrawal->user_id)->first();
        $new_balance = $user->balance - $withdrawal->amount;
        $user->balance = round($new_balance, 2);
        $user->save();

        Mail::to($user->email)->send(new WithdrawalApproved($user->username, $withdrawal->hash, $withdrawal->amount, $withdrawal->payment_method, $withdrawal->wallet_address, $withdrawal->confirmation_status));
        return back();
    }

    public function edit(Request $request) {
        $withdrawal_id = $request->id;
        $withdrawal = Withdrawal::where('id', $withdrawal_id)->first();
        return view('admin.pending-withdrawals.edit', [
            'withdrawal' => $withdrawal
        ]);
    }
}
