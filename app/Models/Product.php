<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'alert_qty',
        'opening_qty',
        'referrance_no',
        'warranty_days',
        'guarantee_days',
        'discount',
        'discount_type',
        'sku',
        'category_id',
        'brand_id',
        'created_by',
        'unit_id',
    ];

    public function creator() {
        return $this->hasOne(Admin::class, 'id', 'created_by');
    }
    public function brand() {
        return $this->belongsTo(Brand::class);
    }
    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function price() {
        return $this->hasMany(Price::class);
    }
    public function latest_price() {
        return $this->hasOne(Price::class)->orderBy('effected_date', 'DESC');
    }
    public function unit() {
        return $this->belongsTo(Unit::class);
    }
}
