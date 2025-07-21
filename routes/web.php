<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '$10,000'
            ],
            [
                'id' => 3,
                'title' => 'Sales',
                'salary' => '$25,000'
            ]
        ]
    ]);
});

Route::get('/contact', function ($id) {
    dd{$id};
    return view('contact');
});

Route::get('/jobs/{id}', function () {
    return view('contact');
});