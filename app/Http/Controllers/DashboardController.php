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

            return redirect('/login')->with('message', 'Your account has been suspended! Kindly reach out to the support teamtran for further resolutions.');
        }
        
        $deposits = Deposit::where('user_id', auth()->user()->id)->latest()->get();
        $transfers = Transfer::where('user_id', auth()->user()->id)->latest()->get();

        return view('dashboard', [
            'deposits' => $deposits,
            'transfers' => $transfers,
        ]);
    }
}
