<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Models\Referral;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ProcessReferrals extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'process:referrals';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Settle referral monies to prospective users.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        DB::table('referrals')->where('paid', false)
            ->chunkById(5, function ($referrals) {
                foreach ($referrals as $referral) {
                    $payee = User::where('referral_code', $referral->code)->first();
                    $new_referral_balance = $payee->referral_balance + $referral->amount;
                    $payee->referral_balance = round($new_referral_balance, 2);
                    $payee->save();
                    Referral::where('id', $referral->id)->update([
                        'paid' => true
                    ]);
                }
            });
    }
}
