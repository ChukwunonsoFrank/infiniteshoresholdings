<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Mail\SendLoginOTPToken;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $recaptcha = $request->input('g-recaptcha-response');

        if (is_null($recaptcha)) {
            $request->session()->flash('message', "Please confirm you are not a robot");
            return redirect()->back();
        }

        $response = Http::get("https://www.google.com/recaptcha/api/siteverify", [
            'secret' => config('services.recaptcha.secret'),
            'response' => $recaptcha
        ]);

        $result = $response->json();

        if ($response->successful() && $result['success'] == true) {
            try {
                $otp = strval(rand(100000, 999999));

                User::where('account_number', $request->account_number)->update([
                    'otp_token' => $otp
                ]);

                $recipientAddress = User::where('account_number', $request->account_number)->pluck('email');

                Mail::to($recipientAddress)->send(new SendLoginOTPToken($otp));

                return view('auth.otp', [
                    'account_number' => $request->account_number,
                    'password' => $request->password,
                ]);
            } catch (\Exception $e) {
                return back()->with('message', $e->getMessage());
            }
        } else {
            $request->session()->flash('message', "Please confirm you are not a robot");
            return redirect()->back();
        }
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
