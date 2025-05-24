<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/user/{id}/{name}', function ($id, $name) {
    return view('user',['id' => $id, 'name' => $name]);
});
