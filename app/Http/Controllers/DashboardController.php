<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request) {
        
        if (auth()->user()->restricted == 1) {
            Auth::guard('web')->logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect('/login')->with('message', 'Your account has been suspended due to an issue! Please reach out support to resolve this.');
        }
        
        $deposits = Deposit::where('user_id', auth()->user()->id)->get();
        $transfers = Transfer::where('user_id', auth()->user()->id)->get();
        
        return view('dashboard', [
            'deposits' => $deposits,
            'transfers' => $transfers,
        ]);
    }
}
