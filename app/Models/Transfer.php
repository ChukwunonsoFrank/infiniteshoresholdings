<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'hash',
        'transaction_type',
        'transfer_type',
        'account_number',
        'swift_code',
        'receipient_name',
        'receipient_bank',
        'amount',
        'description',
        'status',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
