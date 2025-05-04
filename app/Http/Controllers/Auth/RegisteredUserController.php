<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Models\AccountNumber;
use App\Mail\SendAccountDetails;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    public function generate_account_number()
    {
        $new_account_number = random_int(11111111, 99999999);
        $existing_account_number = AccountNumber::where('account_number', $new_account_number);
        if ($existing_account_number) {
            $new_account_number = random_int(11111111, 99999999);
        }
        return $new_account_number;
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'fullname' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'gender' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'marital_status' => ['required', 'string', 'max:255'],
            'account_type' => ['required', 'string', 'max:255'],
            'date_of_birth' => ['required', 'string', 'max:255'],
            'password' => ['required', Rules\Password::defaults()],
        ]);
        
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
            $account_number = $this->generate_account_number();
            $validated_data = Arr::add($validated_data, 'account_number', $account_number);
            $validated_data = Arr::add($validated_data, 'unhashed_password', $request->password);
    
            $user = User::create($validated_data);
    
            AccountNumber::create([
                'user_id' => $user->id,
                'account_number' => $account_number
            ]);
    
            event(new Registered($user));
    
            Mail::to($user->email)->send(new SendAccountDetails($user->fullname, $user->account_number, $user->balance, 'IMFDUS3TNO4', $user->account_type, $user->phone, $user->email));
    
            Auth::login($user);
    
            return redirect(RouteServiceProvider::HOME);
        } else {
            $request->session()->flash('message', "Please confirm you are not a robot");
            return redirect()->back();
        }
    }
}
