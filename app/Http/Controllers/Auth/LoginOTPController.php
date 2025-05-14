<?php

namespace App\Http\Controllers\Auth;

use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;

class LoginOTPController extends Controller
{
    public function index()
    {
        return view('auth.otp');
    }

    public function verify(LoginRequest $request)
    {
        $token = $request->token;

        $user = User::where('account_number', $request->account_number)->first();

        if ($token === $user['otp_token']) {
            $request->authenticate();

            $request->session()->regenerate();

            if (auth()->user()->is_admin == 1) {
                return redirect('/admin/users');
            }

            return redirect()->intended(RouteServiceProvider::HOME);
        } else {
            return back()->with('message', 'Invalid OTP Token');
        }
    }
}
