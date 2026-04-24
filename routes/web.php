<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [ProductController::class, 'home'])->name('home');

Route::get('/home', [ProductController::class, 'home']);

Route::get('/shop', [ProductController::class, 'index'])->name('products');

Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

Route::get('/about', function(){
    $data = [
        'title' => "About"
    ];
    return view('about', $data);
});