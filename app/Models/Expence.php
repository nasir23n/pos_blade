<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expence extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'expence_category_id',
        'amount',
        'note',
        'created_by',
    ];

    public function creator() {
        return $this->belongsTo(Admin::class, 'created_by', 'id');
    }
    public function category() {
        return $this->belongsTo(Category::class, 'created_by', 'id');
    }
}
