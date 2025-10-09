<?php

use App\Models\Berita;
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

    return view('berita', [
        "title" => "berita",
        "berita" => Berita::ambildata(),
    ]);
});



Route::get('/contact', function () {
    return view('contact', [
        "title" => "contact",
    ]);
});

Route::get('/berita/{slug}', function ($slug) {


      

    return view('singleberita', [
        "title" => "Berita",
        "new_berita" => Berita::caridata($slug),
    ]);
});