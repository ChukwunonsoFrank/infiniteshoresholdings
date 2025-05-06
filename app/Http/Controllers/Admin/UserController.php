<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules;
use App\Models\AccountNumber;
use App\Models\Deposit;
use Illuminate\Support\Str;
use App\Models\Transfer;
use Illuminate\Support\Arr;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', [
            'users' => $users
        ]);
    }

    public function edit(Request $request)
    {
        $user_id = $request->id;
        $user = User::where('id', $user_id)->first();
        return view('admin.user.edit', [
            'user' => $user
        ]);
    }

    public function delete(Request $request)
    {
        $user_id = $request->id;
        User::destroy($user_id);
        $users = User::all();
        return view('admin.user.index', [
            'users' => $users
        ]);
    }

    public function suspend(Request $request)
    {
        $user_id = $request->id;
        $user = User::find($user_id);
        $user->restricted = !$user->restricted;
        $user->save();

        $users = User::all();
        return view('admin.user.index', [
            'users' => $users
        ]);
    }

    public function store(Request $request)
    {
        $user_id = $request->id;
        User::where('id', $user_id)->update([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'address' => $request->address,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'marital_status' => $request->marital_status,
            'account_type' => $request->account_type,
            'country' => $request->country,
            'phone' => $request->phone,
            'balance' => $request->balance * 100,
            'total_deposited' => $request->total_deposited * 100,
            'total_withdrawn' => $request->total_withdrawn * 100
        ]);
        $user = User::where('id', $user_id)->first();
        return view('admin.user.edit', ['user' => $user]);
    }

    public function create_debit_or_credit(Request $request)
    {
        $user_id = $request->id;
        return view('admin.user.debit-or-credit', ['user_id' => $user_id]);
    }

    public function store_debit_or_credit(Request $request)
    {
        $user_id = $request->user_id;
        $user = User::find($user_id);

        $amount = floatval($request->amount);
        $transaction_type = $request->transaction_type;
        $description = $request->description;

        if ($transaction_type === "credit") {
            $new_user_balance = ($user->balance / 100) + $amount;
            $user->balance = ($new_user_balance * 100);
            $new_total_deposited = ($user->total_deposited / 100) + $amount;
            $user->total_deposited = ($new_total_deposited * 100);
            $user->save();

            Deposit::create([
                'user_id' => auth()->user()->id,
                'hash' => Str::ulid(),
                'payment_hash' => Str::ulid(),
                'payment_method' => 'Auto',
                'amount' => (float)$amount * 100,
                'description' => $description,
                'confirmation_status' => 'confirmed'
            ]);

            session()->flash('message', 'Amount credited to user balance successfully!');
            return view('admin.user.debit-or-credit', ['user_id' => $user_id]);
        }

        if ($transaction_type === "debit") {
            $new_user_balance = ($user->balance / 100) - $amount;
            $user->balance = ($new_user_balance * 100);
            $new_total_withdrawn = ($user->total_withdrawn / 100) + $amount;
            $user->total_withdrawn = ($new_total_withdrawn * 100);
            $user->save();

            Transfer::create([
                'user_id' => $user->id,
                'hash' => Str::ulid(),
                'transaction_type' => 'Transfer(Debit)',
                'transfer_type' => 'Local',
                'account_number' => $user->account_number,
                'receipient_name' => $user->fullname,
                'receipient_bank' => 'Auto',
                'amount' => $amount * 100,
                'description' => $description,
                'status' => 'confirmed'
            ]);

            session()->flash('message', 'Amount debited from user balance successfully!');
            return view('admin.user.debit-or-credit', ['user_id' => $user_id]);
        }
    }

    public function show_create_account(Request $request)
    {
        return view('admin.user.create-account');
    }

    public function generate_account_number()
    {
        $new_account_number = random_int(1111111111, 9999999999);
        $existing_account_number = AccountNumber::where('account_number', $new_account_number);
        if ($existing_account_number) {
            $new_account_number = random_int(1111111111, 9999999999);
        }
        return $new_account_number;
    }

    public function create_account(Request $request)
    {
        $account_number = $this->generate_account_number();

        try {
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
                'password' => ['required', Rules\Password::defaults(), 'confirmed'],
            ]);

            $validated_data = Arr::add($validated_data, 'account_number', $account_number);
            $validated_data = Arr::add($validated_data, 'unhashed_password', $request->password);

            $user = User::create($validated_data);

            AccountNumber::create([
                'user_id' => $user->id,
                'account_number' => $account_number
            ]);
        } catch (\Exception $e) {
            session()->flash('message', $e->getMessage());

            return view('admin.user.create-account');
        }

        session()->flash('message', 'User account created successfully.');

        $users = User::all();

        return view('admin.user.index', [
            'users' => $users
        ]);
    }
}
