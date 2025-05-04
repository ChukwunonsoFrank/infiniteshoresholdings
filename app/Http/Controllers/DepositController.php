<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use Illuminate\Support\Str;
use App\Mail\DepositCreated;
use Illuminate\Http\Request;
use App\Models\WalletAddress;
use App\Mail\AdminNotification;
use Illuminate\Support\Facades\Mail;

class DepositController extends Controller
{
    public function index() {
        $pending_deposits = Deposit::where('user_id', auth()->user()->id)->where('confirmation_status', 'pending')->get();
        return view('deposit.index', [
            'pending_deposits' => $pending_deposits
        ]);
    }

    public function create(Request $request) {
        $amount = $request->amount;
        $payment_method = $request->payment_method;
        $wallet_address = WalletAddress::where('method', $payment_method)->first(['wallet_address'])->wallet_address;
        return view('deposit.create', [
            'amount' => $amount,
            'payment_method' => $payment_method,
            'wallet_address' => $wallet_address
        ]);
    }

    public function store(Request $request) {
        $amount = $request->amount;
        $payment_method = $request->payment_method;
        $payment_hash = $request->payment_hash;

        $deposit = Deposit::create([
            'user_id' => auth()->user()->id,
            'hash' => Str::ulid(),
            'payment_hash' => $payment_hash,
            'payment_method' => $payment_method,
            'amount' => (double)$amount * 100,
            'description' => 'Deposit of $'.$amount,
            'confirmation_status' => 'pending'
        ]);

        Mail::to(auth()->user()->email)->send(new DepositCreated(auth()->user()->fullname, $deposit->amount, $deposit->payment_method, $deposit->payment_hash, $deposit->hash, $deposit->confirmation_status));

        Mail::to('support@infiniteshoresholdings.com')->send(new AdminNotification(auth()->user()->fullname, $deposit->amount, 'Deposit', $deposit->hash));

        return redirect('/deposit')->with('message', 'Deposit initiated successfully. You will receive an email when your transaction has been confirmed.');
    }
}
