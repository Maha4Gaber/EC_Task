<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sublliers extends Model
{
    use HasFactory;
    protected $table= 'sublliers';
    protected $fillable =[
        'name',
    ];
    // public function products()
    // {
    //     return $this->hasMany(Products::class);
    // }
}
