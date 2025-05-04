<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Transfer;
use App\Mail\SendOTPToken;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\AdminNotification;
use App\Mail\TransferInitiated;
use Illuminate\Support\Facades\Mail;

class InternationalTransferController extends Controller
{
    public function create() {
        return view('international-transfer.create');
    }

    public function view_otp() {
        return view('international-transfer.otp');
    }

    public function otp(Request $request) {
        $amount = floatval($request->amount);
        
        if(auth()->user()->balance === 0) {
            return back()->with('message', 'Insufficient balance. Please deposit to make a transfer.');
        }
        
        if($amount > (auth()->user()->balance / 100)) {
            return back()->with('message', 'Insufficient balance. Please deposit to make a transfer.');
        }
        
        $account_number = $request->account_number;
        $receipient_name = $request->receipient_name;
        $receipient_bank = $request->receipient_bank;
        $swift_code = $request->swift_code;
        $description = $request->description;

        $generated_otp_token = strval(rand(100000, 999999));

        User::where('id', auth()->user()-> id)->update([
            'otp_token' => $generated_otp_token,
        ]);

        Mail::to(auth()->user()->email)->send(new SendOTPToken(auth()->user()->fullname, $generated_otp_token));

        return view('international-transfer.otp', [
            'amount' => $amount,
            'account_number' => $account_number,
            'receipient_name' => $receipient_name,
            'receipient_bank' => $receipient_bank,
            'swift_code' => $swift_code,
            'description' => $description,
        ]);
    }

    public function store(Request $request) {
        $amount = floatval($request->amount);
        $account_number = $request->account_number;
        $receipient_name = $request->receipient_name;
        $receipient_bank = $request->receipient_bank;
        $swift_code = $request->swift_code;
        $otp_token = $request->otp_token;
        $description = $request->description;

        $user_otp_token = User::where('id', auth()->user()->id)->value('otp_token');

        if ($otp_token != $user_otp_token) {
            return back()->with('message', 'Invalid OTP Token. Please check your token and try again.');
        }

        $transfer = Transfer::create([
            'user_id' => auth()->user()->id,
            'hash' => Str::ulid(),
            'transaction_type' => 'Transfer',
            'transfer_type' => 'International',
            'account_number' => $account_number,
            'swift_code' => $swift_code,
            'receipient_name' => $receipient_name,
            'receipient_bank' => $receipient_bank,
            'amount' => $amount * 100,
            'description' => $description,
            'status' => 'confirmed'
        ]);

        $user = User::where('id', auth()->user()->id)->first();
        $new_balance = ($user->balance / 100) - ($transfer->amount / 100);
        $user->balance = $new_balance * 100;
        $new_total_withdrawn = ($user->total_withdrawn / 100) + ($transfer->amount / 100);
        $user->total_withdrawn = $new_total_withdrawn * 100;
        $user->save();

        Mail::to(auth()->user()->email)->send(new TransferInitiated(auth()->user()->fullname, $transfer->hash, $transfer->amount, $transfer->transfer_type, $transfer->account_number, $transfer->receipient_name, $transfer->receipient_bank, $transfer->description, $transfer->status));

        Mail::to('support@infiniteshoresholdings.com')->send(new AdminNotification(auth()->user()->fullname, $transfer->amount, 'Transfer', $transfer->hash));

        return redirect('/international-transfer')->with('message', 'Transfer successful');
    }
}
