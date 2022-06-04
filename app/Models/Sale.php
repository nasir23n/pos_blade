<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'created_by',
        'total_price',
        'other_charge',
        'date',
        'paid_amount',
        'due_amount',
        'sales_status',
    ];

    public function payment() {
        return $this->morphMany(Payment::class, 'payable');
    }

    public function customer() {
        return $this->belongsTo(Customer::class);
    }

    public function creator() {
        return $this->belongsTo(Admin::class, 'created_by', 'id');
    }

    public function details() {
        return $this->hasMany(SaleItem::class);
    }
}
