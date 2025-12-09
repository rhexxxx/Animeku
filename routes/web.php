<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = [
        'title' => 'Home'
    ];
    return view('home', $data);
});

Route::get('/home', function () {
    $data = [
        'title' => 'Home'
    ];
    return view('home', $data);
});

Route::get('/about', function(){
    $data = [
        'title' => "About"
    ];
    return view('about', $data);
});

Route::get('/product/{id}', function($id){
    return view('details', [
        'id' => $id
    ]);
});
