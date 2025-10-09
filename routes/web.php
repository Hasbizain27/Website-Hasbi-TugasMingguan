<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "home",
    ]);
});

Route::get('/profile', function () {
    return view('profile',[
        "title" => "profile",
        "nama" => "Hasbi Zain",
        "nohp" => "085228496778",
        "foto" => "img/hasbizain.jpg",
    ]);
});

Route::get('/berita', function () {

    $data_berita = [
        [
            "judul" => "newss 1",
            "penulis" => "Tukiman",
            "konten" => "Pembangunan City walk di daerah Pemalang Jawa Tengah",
        ],
        [
            "judul" => "newss 2",
            "penulis" => "Saen",
            "konten" => "Penangkapan Hacker Bjorka",
        ],
        [
            "judul" => "newss 3",
            "penulis" => "Munawaroh",
            "konten" => "Odgj ditemukan di Rumah Sakit Jiwa",
        ],
    ];
    return view('berita', [
        "title" => "berita",
        "berita" => $data_berita,
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "contact",
    ]);
});