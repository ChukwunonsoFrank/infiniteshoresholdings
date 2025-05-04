<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
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
        
        $pending_deposits = Deposit::where('user_id', auth()->user()->id)->where('confirmation_status', 'pending')->get();
        return view('dashboard', [
            'pending_deposits' => $pending_deposits
        ]);
    }
}
