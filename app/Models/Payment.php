<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'payment_method_id',
        'note',
        'payable',
        'created_by',
        // 'payment_status',
    ];

    public function payment_method() {
        return $this->belongsTo(PaymentMethod::class);
    }
}
