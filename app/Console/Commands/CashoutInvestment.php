<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Models\Investment;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CashoutInvestment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'investment:cashout';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Cashout investment and profits to investor's balance.";

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        DB::table('investments')->where('matured', true)->where('paid', false)
        ->chunkById(5, function ($investments) {
            foreach ($investments as $investment) {
                $running_balance = round($investment->running_balance, 2);
                $user = User::where('id', $investment->user_id);
                $user->balance = $user->balance + $running_balance;
                $user->save();
                Investment::where('id', $investment->id)->update([
                    'paid' => true
                ]);
            }
        });
    }
}
