<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Deposit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\DepositApproved;
use Illuminate\Support\Facades\Mail;

class PendingDepositsController extends Controller
{
    public function index() {
        $pending_deposits = Deposit::where('confirmation_status', 'pending')->get();
        return view('admin.pending-deposits.index', [
            'pending_deposits' => $pending_deposits
        ]);
    }

    public function approve(Request $request) {
        $id = $request->id;
        $deposit = Deposit::where('id', $id)->first();
        $deposit->confirmation_status = 'confirmed';
        $deposit->save();

        $user = User::where('id', $deposit->user_id)->first();
        $new_balance = ($user->balance / 100) + ($deposit->amount / 100);
        $user->balance = $new_balance * 100;
        $new_total_deposited = ($user->total_deposited / 100) + ($deposit->amount / 100);
        $user->total_deposited = $new_total_deposited * 100;
        $user->save();

        Mail::to($user->email)->send(new DepositApproved($user->fullname, $deposit->amount, $deposit->payment_method, $deposit->payment_hash, $deposit->hash, $deposit->confirmation_status));
        return back();
    }

    public function edit(Request $request) {
        $deposit_id = $request->id;
        $deposit = Deposit::where('id', $deposit_id)->first();
        return view('admin.pending-deposits.edit', [
            'deposit' => $deposit
        ]);
    }

    public function store(Request $request) {
        $deposit_id = $request->id;
        Deposit::where('id', $deposit_id)->update([
            'hash' => $request->hash,
            'payment_hash' => $request->payment_hash,
            'payment_method' => $request->payment_method,
            'description' => $request->description,
            'amount' => (double)$request->amount * 100,
            'confirmation_status' => $request->confirmation_status,
            'created_at' => $request->created_at
        ]);
        $deposit = Deposit::where('id', $deposit_id)->first();
        return view('admin.pending-deposits.edit', [
            'deposit' => $deposit
        ]);
    }
}
