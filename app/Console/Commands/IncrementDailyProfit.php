<?php

namespace App\Console\Commands;

use App\Models\Investment;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class IncrementDailyProfit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'profit:increment';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Increment the daily profits of subsequent investments.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        DB::table('investments')->where('matured', false)
            ->chunkById(5, function ($investments) {
                foreach ($investments as $investment) {
                    $profit_every_five_minutes = $investment->daily_profit / 255;
                    $new_running_balance = $investment->running_balance + $profit_every_five_minutes;
                    Investment::where('id', $investment->id)->update([
                        'running_balance' => $new_running_balance
                    ]);
                }
            });
    }
}
