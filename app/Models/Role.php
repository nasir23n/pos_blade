<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'note',
        'deleteable',
    ];

    protected $guarded = ['id'];

    public function permissions(){
        return $this->belongsToMany(Permission::class);

    }
    //Relationship with User
    public function users(){
        return $this->hasMany(User::class);
    }
}
