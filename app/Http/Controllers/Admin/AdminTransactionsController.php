<?php

namespace App\Http\Controllers\Admin;

use App\Models\Deposit;
use App\Models\Transfer;
use App\Http\Controllers\Controller;

class AdminTransactionsController extends Controller
{
    public function index()
    {
        $deposits = Deposit::all();
        $transfers = Transfer::all();
        return view('admin.transactions.index', [
            'deposits' => $deposits,
            'transfers' => $transfers,
        ]);
    }
}
