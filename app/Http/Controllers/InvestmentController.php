<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Referral;
use App\Models\Investment;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\InvestmentCreated;
use Illuminate\Support\Facades\Mail;

class InvestmentController extends Controller
{
    public static function check_min_and_max($amount, $plan)
    {
        if ($amount < $plan['minimum']) {
            $error_message = 'The minimum amount for this plan is ' . $plan['minimum'];
            return [
                'error' => true,
                'msg' => $error_message
            ];
        }
        if ($amount > $plan['maximum']) {
            $error_message = 'The maximum amount for this plan is ' . $plan['maximum'];
            return [
                'error' => true,
                'msg' => $error_message
            ];
        }
        return [
            'error' => false
        ];
    }

    public static function check_balance_sufficiency($amount)
    {
        $user = User::where('id', auth()->user()->id)->first();
        $balance = $user->balance;
        if ($amount > $balance) {
            $error_message = 'Insufficient funds...';
            return [
                'error' => true,
                'msg' => $error_message
            ];
        }
        return [
            'error' => false
        ];
    }

    public static function convert_hours_to_days($hours) {
        return round($hours / 24, 2);
    }

    public static function convert_hours_to_seconds($hours) {
        return $hours * 3600;
    }

    public function index()
    {
        $plans_data = json_decode(file_get_contents(storage_path() . "/plans.json"), true);
        return view('investment.index', [
            "plans" => $plans_data['plans']
        ]);
    }

    public function create()
    {
        return view('investment.create');
    }

    public function store(Request $request)
    {
        $amount = floatval($request->amount);
        $plan = $request->plan;

        $plans_data = json_decode(file_get_contents(storage_path() . "/plans.json"), true)['plans'];
        $plan_arr = array_filter($plans_data, fn($data) => $data["name"] === $plan);

        $min_max = $this->check_min_and_max($amount, array_values($plan_arr)[0]);
        $balance_sufficiency = $this->check_balance_sufficiency($amount);

        if($min_max['error'] === true) {
            return back()->with('message', $min_max['msg']);
        } elseif ($balance_sufficiency['error'] === true) {
            return back()->with('message', $balance_sufficiency['msg']);
        } else {
            /**
             * Calculation of the total profit will vary depending on whether the ROI is a total ROI or a daily ROI.
             * If it's a total ROI, we don't multiply with the duration but we do so if it's a daily ROI kinda
             * situation. 
             */
            $total_profit = $amount * array_values($plan_arr)[0]['roi'];
            $duration_in_days = $this->convert_hours_to_days(array_values($plan_arr)[0]['duration']);
            $daily_profit = $total_profit / $duration_in_days;

            $investment = Investment::create([
                'user_id' => auth()->user()->id,
                'hash' => Str::ulid(),
                'type' => $plan,
                'amount' => round($amount, 2),
                'confirmation_status' => 'pending',
                'running_balance' => round($amount, 2),
                'total_profit' => round($total_profit, 2),
                'daily_profit' => round($daily_profit, 2),
                'roi' => array_values($plan_arr)[0]['roi'],
                'duration' => array_values($plan_arr)[0]['duration'],
                'matured' => false,
                'paid' => false,
            ]);

            $referral_record = Referral::where('user_id', auth()->user()->id)->first();
            if($referral_record && $referral_record->amount === 0.0) {
                $referral_amount = $amount * array_values($plan_arr)[0]['referralPercentage'];
                $referral_record->amount = round($referral_amount, 2);
                $referral_record->save();
            }

            $maturity_date = strtotime($investment->created_at) + $this->convert_hours_to_seconds(array_values($plan_arr)[0]['duration']);
            $investment->maturity_date = $maturity_date;
            $investment->save();

            // Mail::to(auth()->user()->email)->send(new InvestmentCreated(auth()->user()->username, $investment->amount, $investment->roi, $investment->duration, $investment->type, $investment->hash, $investment->confirmation_status));
    
            return back()->with('message', 'Investment created successfully. You will receive an email when your investment request has been confirmed...');
        }
    }
}
