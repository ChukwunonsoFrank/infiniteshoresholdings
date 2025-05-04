<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\WalletAddress;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        WalletAddress::create([
            'method' => 'Bitcoin',
            'wallet_address' => 'some-random-bitcoin-address'
        ]);
        WalletAddress::create([
            'method' => 'Ethereum',
            'wallet_address' => 'some-random-ethereum-address'
        ]);
    }
}
