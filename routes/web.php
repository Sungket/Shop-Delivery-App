<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/help', function () {
    return view('help');
});

Route::get('/contact', function () {
    return view('contact');
});