<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BeritaController;
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

Route::get('/contact', function () {
    return view('contact', [
        "title" => "contact",
    ]);
});


Route::get('/berita',[BeritaController::class, 'index']);
Route::get('/berita/{slug}', [BeritaController::class, 'tampildata']);

Route::get('/mahasiswa',[MahasiswaController::class, 'index'])->name('mahasiswa');