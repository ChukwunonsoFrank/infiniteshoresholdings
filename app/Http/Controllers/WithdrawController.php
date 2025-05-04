<?php

namespace App\Http\Controllers;

use App\Models\Withdrawal;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\WithdrawalCreated;
use Illuminate\Support\Facades\Mail;

class WithdrawController extends Controller
{
    public function index()
    {
        return view('withdraw.index', [
            'balance' => auth()->user()->balance
        ]);
    }

    public function create(Request $request) {
        $amount = $request->amount;
        $payment_method = $request->payment_method;
        return view('withdraw.create', [
            'amount' => $amount,
            'payment_method' => $payment_method
        ]);
    }

    public function store(Request $request) {
        $amount = $request->amount;
        $payment_method = $request->payment_method;
        $wallet_address = $request->wallet_address;

        $withdrawal = Withdrawal::create([
            'user_id' => auth()->user()->id,
            'hash' => Str::ulid(),
            'amount' => $amount,
            'wallet_address' => $wallet_address,
            'payment_method' => $payment_method,
            'confirmation_status' => 'pending'
        ]);

        // Mail::to(auth()->user()->email)->send(new WithdrawalCreated(auth()->user()->username, $withdrawal->amount, $withdrawal->payment_method, $withdrawal->wallet_address, $withdrawal->hash, $withdrawal->confirmation_status));

        return redirect('/withdraw')->with('message', 'Withdrawal initiated successfully. You will receive an email when your transaction has been confirmed.');
    }
}
