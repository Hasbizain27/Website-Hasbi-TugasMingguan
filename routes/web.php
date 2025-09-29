<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/berita', function () {
    return view('berita');
});
Route::get('/contact', function () {
    return view('contact');
});

// halaman detail berita
Route::get('/berita/{id}', function ($id) {
    $semuaBerita = [
        1 => [
            "judul" => "Hasil Final UCL 2024 Madrid vs Dortmund Skor 2-0, Gelar ke-15!",
            "tanggal" => "2 Juni 2025",
            "gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2-okZqMxqcIu5xBz7dWVMDAMpHzONq5WY-g&s",
            "isi" => "Hasil final Liga Champion 2024 Real Madrid vs Borussia Dortmund di Stadion Wembley, London,
             Inggris pada Minggu (2/6/2024) ditutup dengan skor akhir 2-0. Gol Dani Carvajal (74') dan Vinicius Junior (83') memastikan Los Blancos juara UCL 2024 sekaligus merasakan 
             kampiun Liga Champions untuk ke-15 kalinya (La Decimoquinta)"
        ],
        2 => [
            "judul" => "Revitalisasi Alun-Alun Pemalang: Mengembalikan Harmoni untuk Masa Depan yang Lebih Aman dan Nyaman",
            "tanggal" => "16 April 2025",
            "gambar" => "https://assets.promediateknologi.id/crop/35x509:1044x1161/0x0/webp/photo/p3/158/2025/04/16/488715609_18081964012730754_627543885971082988_n-22914177.jpg",
            "isi" => "Tragedi yang menimpa alun-alun Pemalang pada hari Idul Fitri 2025 harus menjadi 
            momentum untuk melakukan evaluasi dan perbaikan dalam pengelolaan ruang publik. Revitalisasi alun-alun yang aman, nyaman, dan bermakna akan memberikan manfaat jangka panjang bagi masyarakat. Melalui revitalisasi ini, alun-alun Pemalang akan kembali menjadi ruang publik yang menyatukan masyarakat,
             memfasilitasi interaksi sosial, dan menciptakan harmoni antara alam, manusia, dan Tuhan."
        ],
        3 => [
            "judul" => "Pembangunan City Walk Kabupaten Pemalang, Trotoar Jalan Dibongkar",
            "tanggal" => "8 Agustus 2025",
            "gambar" => "https://jateng.disway.id/upload/a50f15b477b672a92f9cb46f81ce9c88.jpg",
            "isi" => "Tahap pertama pembongkaran trotoar dari depan Gacoan sampai jalan Kenanga. Kemudian tahap ke dua dari Jalan Kenanga hingga depan Jogja Mall. Setelah itu untuk tahap ke tiga dari depan Toko Tiptop
            sampai Jalan Kenanga dan tahap empat dari Jalan Kenanga sampai depan Kantor Pegadaian Pemalang.
            Setelah trotoar jalan dibongkar, maka pelebaran jalannya hingga mencapai 4,5 meter. Bahkan ada yang pelebaran jalannya sampai 7,5 meter yaitu dari Jalan Kenanga sampai depan Toko Sukses,katanya."
        ]
    ];

    if (!array_key_exists($id, $semuaBerita)) {
        abort(404, 'Berita tidak ditemukan');
    }

    $berita = $semuaBerita[$id];
});