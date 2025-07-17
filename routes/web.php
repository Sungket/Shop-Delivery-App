<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'title' => 'Director',
                'salary' => '$50,000'
            ],
            [
                'title' => 'Programmer',
                'salary' => '$10,000'
            ],
            [
                'title' => 'Sales',
                'salary' => '$25,000'
            ]
        ]
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});