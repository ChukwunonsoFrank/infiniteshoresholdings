<?php

namespace App\Models;

use App\Mail\VerifyEmail;
use App\Models\Deposit;
use App\Models\Referral;
use App\Models\Investment;
use App\Models\Withdrawal;
use App\Models\AccountNumber;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fullname',
        'country',
        'phone',
        'email',
        'gender',
        'address',
        'marital_status',
        'account_type',
        'date_of_birth',
        'account_number',
        'password',
        'unhashed_password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function investments() {
        return $this->hasMany(Investment::class, 'user_id');
    }

    public function withdrawals() {
        return $this->hasMany(Withdrawal::class, 'user_id');
    }

    public function deposits() {
        return $this->hasMany(Deposit::class, 'user_id');
    }

    public function referral() {
        return $this->hasMany(Referral::class, 'user_id');
    }

    public function account_number() {
        return $this->hasOne(AccountNumber::class, 'user_id');
    }

    public function setPasswordAttribute($password) {
        $this->attributes['password'] = Hash::make($password);
    }

    public function sendEmailVerificationNotification()
    {
        $verificationUrl = URL::temporarySignedRoute(
            'verification.verify',
            now()->addMinutes(config('auth.verification.expire', 60)),
            ['id' => $this->getKey(), 'hash' => sha1($this->getEmailForVerification())]
        );

        Mail::to($this->email)->send(new VerifyEmail($verificationUrl));
    }
    
}
