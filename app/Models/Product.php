<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    // Mass assignment
    protected $fillable = [
        'name',
        'description',
        'qty',
        'price',
        'photo',
    ];
}

