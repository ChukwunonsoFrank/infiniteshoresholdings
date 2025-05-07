<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request) {
        $deposits = Deposit::where('user_id', auth()->user()->id)->latest()->get();
        $transfers = Transfer::where('user_id', auth()->user()->id)->latest()->get();

        return view('dashboard', [
            'deposits' => $deposits,
            'transfers' => $transfers,
        ]);
    }
}
