<?php

namespace App\Http\Controllers;

use App\Models\Referral;
use Illuminate\Http\Request;

class ReferralController extends Controller
{
    public function index() {
        $referrals = Referral::where('code', auth()->user()->referral_code)->get();
        return view('referral.index', [
            'referrals' => $referrals,
            'referral_balance' => auth()->user()->referral_balance
        ]);
    }
}
