
<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <title>TI UNIMUS | Berita Liga Indonesia</title>
    <style>
      body { background: linear-gradient(135deg, #e0f7fa 0%, #f4f6f7 100%); }
      .nav-link.active {
        font-weight: bold;
        color: #ffd600 !important;
      }
      .berita-header {
        background: url('https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=1200&q=80') center/cover no-repeat;
        color: #fff;
        position: relative;
        padding: 60px 0 40px 0;
      }
      .berita-header::before {
        content: "";
        position: absolute;
        top:0; left:0; right:0; bottom:0;
        background: rgba(12,66,74,0.7);
        z-index: 0;
      }
      .berita-header-content {
        position: relative;
        z-index: 1;
      }
      .card {
        border-radius: 12px;
        overflow: hidden;
        transition: transform .2s;
      }
      .card:hover {
        transform: translateY(-5px) scale(1.03);
        box-shadow: 0 8px 24px rgba(12,66,74,0.15);
      }
      .card-img-top {
        height: 180px;
        object-fit: cover;
      }
      .btn-outline-primary {
        border-radius: 20px;
      }
      .section-title {
        color: #0c424aff;
        font-weight: 700;
        letter-spacing: 1px;
      }
      footer {
        letter-spacing: 1px;
      }
    </style>
  </head>
  <body>
    <!-- NAVBAR -->
    <ul class="nav justify-content-center py-2" style="background-color: #0c424aff;">
      <li class="nav-item"><a class="nav-link text-white" href="/">Home</a></li>
      <li class="nav-item"><a class="nav-link text-white active" href="/berita">Berita</a></li>
      <li class="nav-item"><a class="nav-link text-white" href="/profile">Profil</a></li>
      <li class="nav-item"><a class="nav-link text-white" href="/contact">Kontak</a></li>
    </ul>

    <!-- Header Section -->
    <section class="berita-header d-flex align-items-center justify-content-center">
      <div class="container berita-header-content text-center">
        <h2 class="display-4 mb-2">Berita Harian Indonesia</h2>
        <p class="lead mb-0">Update Resmi dan Terpercaya Seputar Informasi Viral.</p>
      </div>
    </section>

    <!-- Berita Cards -->
    <div class="container mt-5">
      <h3 class="section-title text-center mb-4">Berita Terbaru</h3>
      <div class="row">
        <?php
          $beritaBola = [
            [
              "id" => 1,
              "judul" => "Hasil Final UCL 2024 Madrid vs Dortmund Skor 2-0, Gelar ke-15!",
              "ringkasan" => "Hasil final Liga Champion 2024 Real Madrid vs Borussia Dortmund di Stadion Wembley, London, Inggris pada Minggu (2/6/2024) ditutup dengan skor akhir 2-0. Gol Dani Carvajal (74') dan Vinicius Junior (83') memastikan Los Blancos juara UCL 2024 sekaligus merasakan kampiun Liga Champions untuk ke-15 kalinya (La Decimoquinta)",
              "tanggal" => "2 Juni 2025",
              "gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2-okZqMxqcIu5xBz7dWVMDAMpHzONq5WY-g&s"
            ],
            [
              "id" => 2,
              "judul" => "Revitalisasi Alun-Alun Pemalang: Mengembalikan Harmoni untuk Masa Depan yang Lebih Aman dan Nyaman",
              "ringkasan" => "Tragedi yang menimpa alun-alun Pemalang pada hari Idul Fitri 2025 harus menjadi momentum untuk melakukan evaluasi dan perbaikan dalam pengelolaan ruang publik. Revitalisasi alun-alun yang aman, nyaman, dan bermakna akan memberikan manfaat jangka panjang bagi masyarakat. Melalui revitalisasi ini, alun-alun Pemalang akan kembali menjadi ruang publik yang menyatukan masyarakat, memfasilitasi interaksi sosial, dan menciptakan harmoni antara alam, manusia, dan Tuhan.",
              "tanggal" => "16 April 2025",
              "gambar" => "https://assets.promediateknologi.id/crop/35x509:1044x1161/0x0/webp/photo/p3/158/2025/04/16/488715609_18081964012730754_627543885971082988_n-22914177.jpg"
            ],
            [
              "id" => 3,
              "judul" => "Pembangunan City Walk Kabupaten Pemalang, Trotoar Jalan Dibongkar",
              "ringkasan" => "Tahap pertama pembongkaran trotoar dari depan Gacoan sampai jalan Kenanga. Kemudian tahap ke dua dari Jalan Kenanga hingga depan Jogja Mall. Setelah itu untuk tahap ke tiga dari depan Toko Tiptop sampai Jalan Kenanga dan tahap empat dari Jalan Kenanga sampai depan Kantor Pegadaian Pemalang. Setelah trotoar jalan dibongkar, maka pelebaran jalannya hingga mencapai 4,5 meter. Bahkan ada yang pelebaran jalannya sampai 7,5 meter yaitu dari Jalan Kenanga sampai depan Toko Sukses,katanya.",
              "tanggal" => "8 Agustus 2025",
              "gambar" => "https://jateng.disway.id/upload/a50f15b477b672a92f9cb46f81ce9c88.jpg"
            ]
          ];
        ?>
        <?php foreach ($beritaBola as $berita): ?>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="<?php echo $berita['gambar']; ?>" class="card-img-top" alt="Gambar Berita">
              <div class="card-body">
                <h5 class="card-title">
                  <a href="/berita/<?php echo $berita['id']; ?>" class="text-dark"><?php echo $berita['judul']; ?></a>
                </h5>
                <p class="card-text"><small class="text-muted"><?php echo $berita['tanggal']; ?></small></p>
                <p class="card-text"><?php echo $berita['ringkasan']; ?></p>
                <a href="/berita/<?php echo $berita['id']; ?>" class="btn btn-outline-primary btn-sm">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <footer class="text-center p-3 bg-dark text-white mt-5">
      &copy; <?php echo date("Y"); ?> TI UNIMUS | Berita Liga Indonesia
    </footer>
  </body>
</html>