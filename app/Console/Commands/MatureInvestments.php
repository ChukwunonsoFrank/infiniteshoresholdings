<?php

namespace App\Console\Commands;

use App\Models\Investment;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class MatureInvestments extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'investment:mature';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Change the maturity status of matured investments.';

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
                    $investment_updated_at = strtotime($investment->updated_at);
                    $investment_maturity_date = $investment->maturity_date;
                    if ($investment_updated_at >= $investment_maturity_date) {
                        Investment::where('id', $investment->id)->update([
                            'matured' => true
                        ]);
                    }
                }
            });
    }
}
