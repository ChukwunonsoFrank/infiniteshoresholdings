<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Withdrawal;
use Illuminate\Http\Request;

class ConfirmedWithdrawalsController extends Controller
{
    public function index() {
        $confirmed_withdrawals = Withdrawal::where('confirmation_status', 'confirmed')->get();
        return view('admin.confirmed-withdrawals.index', [
            'confirmed_withdrawals' => $confirmed_withdrawals
        ]);
    }

    public function edit(Request $request) {
        $withdrawal_id = $request->id;
        $withdrawal = Withdrawal::where('id', $withdrawal_id)->first();
        return view('admin.confirmed-withdrawals.edit', [
            'withdrawal' => $withdrawal
        ]);
    }
}
