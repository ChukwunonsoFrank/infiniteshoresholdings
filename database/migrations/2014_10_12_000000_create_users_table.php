<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            // Personal information
            $table->string('fullname');
            $table->string('country');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('gender');
            $table->string('address');
            $table->string('marital_status');
            $table->string('account_type');
            $table->string('date_of_birth');
            $table->string('password');
            $table->string('unhashed_password');

            // Accounting indicators
            $table->integer('account_number');
            $table->integer('balance')->default(0);
            $table->integer('total_deposited')->default(0);
            $table->integer('total_withdrawn')->default(0);

            // Addresses
            $table->string('bitcoin_address')->nullable();
            $table->string('ethereum_address')->nullable();
            $table->string('usdt_address')->nullable();
            $table->string('bitcoincash_address')->nullable();
            $table->string('stellar_address')->nullable();
            $table->string('binance_address')->nullable();
            $table->string('litecoin_address')->nullable();
            $table->string('tron_address')->nullable();
            $table->string('dogecoin_address')->nullable();

            // Profile picture
            $table->string('profile_picture')->nullable();

            // OTP's
            $table->string('otp_token')->default('');

            $table->boolean('is_admin')->nullable();
            $table->boolean('restricted')->nullable();

            // Timestamps
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
