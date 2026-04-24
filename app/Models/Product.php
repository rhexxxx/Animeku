<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
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

    public function category(){
        return $this->belongsTo(Categories::class, 'category_id');
    }
}
