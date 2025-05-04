<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\Transfer;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    public function index() {
        $deposits = Deposit::where('user_id', auth()->user()->id)->get();
        $transfers = Transfer::where('user_id', auth()->user()->id)->get();
        return view('transaction.index', [
            'deposits' => $deposits,
            'transfers' => $transfers,
        ]);
    }

    public function show($hash) {
        $deposit = Deposit::where('hash', $hash)->first();
        if (! is_null($deposit)) {
            return view('transaction.show', [
                'data' => $deposit
            ]);
        } else {
            $transfer = Transfer::where('hash', $hash)->first();
            return view('transaction.show', [
                'data' => $transfer
            ]);
        }
    }

    public function generateReceipt(Request $request) {
        return view('receipts.index', [
            'data' => json_decode($request->query('data'), true),
            'total_debit' => auth()->user()->total_withdrawn,
            'total_credit' => auth()->user()->total_deposited,
        ]);
    }
}
