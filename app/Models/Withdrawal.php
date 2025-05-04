<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Withdrawal extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'hash',
        'amount',
        'wallet_address',
        'payment_method',
        'description',
        'confirmation_status'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
