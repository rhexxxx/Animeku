<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable =[
        'name',
        'slug',
        'image'
    ];

    public function Products(){
        return $this->hasMany(Product::class);
    }
}
