<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get("/blog", function () {
    return view('blog');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/teams', function () {
    $teams = [
        [
            "name" => "Farrel Maahira Agraprana Nugraha",
            "role" => "Backend Developer"
        ],
        [
            "name" => "Naufal Bintang Pradana Himawan",
            "role" => "Backend Developer"
        ],
        [
            "name" => "Nugroho Nur Cahyo",
            "role" => "Frontend Developer"
        ]
    ];
    return view('teams', ["teams" => $teams]);
});
