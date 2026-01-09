<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get("/posts", function () {
    return view(
        'posts',
        [
            'title' => 'Posts Page',
            'posts' => [
                [
                    'id' => 1,
                    'slug' => 'judul-artikel-1',
                    'title' => 'Judul Artikel 1',
                    'author' => 'Naufal Bintang Pradana Himawan',
                    'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, voluptate rerum quae, eum aspernatur assumenda
                    quisquam optio eos, soluta corporis magnam tempore nulla ducimus? Itaque facere obcaecati molestiae
                    voluptatem repellat.'
                ],
                [
                    'id' => 2,
                    'slug' => 'judul-artikel-2',
                    'title' => 'Judul Artikel 2',
                    'author' => 'Arixa',
                    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum corrupti pariatur nihil quia officia. Quas
                    magnam aut voluptatum doloribus quidem eaque blanditiis dicta pariatur hic distinctio! Voluptatibus numquam
                    temporibus asperiores?'
                ],
            ],
        ]
    );
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Naufal Bintang Pradana Himawan',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, voluptate rerum quae,  eum aspernatur assumenda
            quisquam optio eos, soluta corporis magnam tempore nulla ducimus? Itaque facere obcaecati molestiae
            voluptatem repellat.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Arixa',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum corrupti pariatur nihil quia officia. Quas
            magnam aut voluptatum doloribus quidem eaque blanditiis dicta pariatur hic distinctio! Voluptatibus numquam
            temporibus asperiores?'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view(
        'post',
        [
            'title' => 'Single Post',
            'post' => $post
        ]
    );
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
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
    return view('teams', ['title' => 'Teams Page', "teams" => $teams]);
});
