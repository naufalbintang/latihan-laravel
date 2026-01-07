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
            "role" => "Backend Developer",
            "medsoc" => "https://www.instagram.com/farrelmaahira/"
        ],
        [
            "name" => "Naufal Bintang Pradana Himawan",
            "role" => "Backend Developer",
            "medsoc" => "https://www.instagram.com/_naufalbintang_/"
        ],
        [
            "name" => "Nugroho Nur Cahyo",
            "role" => "Frontend Developer",
            "medsoc" => "https://www.instagram.com/nugroho.nc/"
        ],
        [
            "name" => "Sello Lintang Pambayun",
            "role" => "Backend Developer",
            "medsoc" => "https://www.instagram.com/pampayooo/"
        ],
        [
            "name" => "Shidqi Athallah Bahri",
            "role" => "Backend Developer",
            "medsoc" => null
        ],
    ];
    return view('teams', ["teams" => $teams]);
});
