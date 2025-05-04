<?php

namespace App\Http\Controllers;

use App\Models\Investment;
use Illuminate\Http\Request;

class EarningHistoryController extends Controller
{
    public static function add_earnings($investments)
    {
        $sum = 0;
        foreach ($investments as $investment) {
            $earning = $investment->running_balance - $investment->amount;
            $sum += $earning;
        }
        return $sum;
    }

    public function index() {
        $matured_investments = Investment::where('user_id', auth()->user()->id)->where('matured', true)->where('paid', true)->get();
        $total_earnings = $this->add_earnings($matured_investments);
        return view('earning-history.index', [
            'total_earnings' => $total_earnings,
            'matured_investments' => $matured_investments
        ]);
    }
}
