<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseDetails extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'purchase_id',
        'product_id',
        'quantity',
        'price_id',
        'total',
    ];
}