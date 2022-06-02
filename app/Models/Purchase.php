<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'supplier_id',
        'created_by',
        'total_price',
        'other_charge',
        'date',
        'paid_amount',
        'due_amount',
        'process_status',
    ];

    public function details() {
        return $this->hasMany(PurchaseDetails::class);
    }
}
