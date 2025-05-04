<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'hash',
        'payment_hash',
        'payment_method',
        'amount',
        'description',
        'confirmation_status',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
