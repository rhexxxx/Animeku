<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'stock',
        'series',
        'brand',
        'image',
        'rating',
        'sold_count',
        'description',
    ];
}
