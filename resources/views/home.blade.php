<?php
$home = [
  "judul" => "Selamat Datang di Website Hasbi Gans",
  "deskripsi" => "Website resmi mahasiswa Teknologi Informasi UNIMUS. Temukan berita, profil, dan informasi terbaru seputar pemberangkatan kereta api.",
  "link" => "/profile",
  "tombol" => "Lihat Profil Mahasiswa"
];

$berita = [
  [
    "judul" => "Pengumuman Kegiatan TI UNIMUS",
    "isi" => "Jangan lewatkan seminar dan workshop terbaru bulan ini. Cek jadwal di halaman berita.",
    "gambar" => "https://images.unsplash.com/photo-1503676382389-4809596d5290?auto=format&fit=crop&w=400&q=80"
  ],
  [
    "judul" => "Workshop Pemrograman Web",
    "isi" => "Belajar langsung bersama praktisi industri. Daftar segera sebelum kuota penuh!",
    "gambar" => "https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=400&q=80"
  ],
  [
    "judul" => "Pelatihan Keamanan Data",
    "isi" => "Tingkatkan skill keamanan data Anda bersama dosen dan alumni TI UNIMUS.",
    "gambar" => "https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=400&q=80"
  ]
];
?>
<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <title>TI UNIMUS | HOME</title>
    <style>
      body {background: linear-gradient(135deg, #e0f7fa 0%, #f4f6f7 100%); }
      .hero {
        background: url('https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=1200&q=80') center/cover no-repeat;
        color: #fff;
        position: relative;
        z-index: 1;
      }
      .hero::before {
        content: "";
        position: absolute;
        top:0; left:0; right:0; bottom:0;
        background: rgba(12,66,74,0.7);
        z-index: -1;
      }
      .hero-content {
        position: relative;
        z-index: 2;
      }
      .card-img-top {
        height: 160px;
        object-fit: cover;
        border-radius: 8px 8px 0 0;
      }
      .nav-link.active {
        font-weight: bold;
        color: #ffd600 !important;
      }
      .btn-primary {
        background-color: #0c424aff;
        border: none;
      }
      .btn-primary:hover {
        background-color: #09505e;
      }
      .section-title {
        color: #0c424aff;
        font-weight: 700;
      }
      footer {
        letter-spacing: 1px;
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <ul class="nav justify-content-center py-2" style="background-color: #0c424aff;">
      <li class="nav-item">
        <a class="nav-link active" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="/berita">Berita</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="/profile">Profil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="/contact">Kontak</a>
      </li>
    </ul>

    <!-- Hero Section -->
    <section class="hero d-flex align-items-center justify-content-center" style="height: 350px;">
      <div class="container hero-content text-center">
        <h1 class="display-4 mb-3"><?php echo $home['judul']; ?></h1>
        <p class="lead mb-4"><?php echo $home['deskripsi']; ?></p>
        <a href="<?php echo $home['link']; ?>" class="btn btn-primary btn-lg shadow">
          <?php echo $home['tombol']; ?>
        </a>
      </div>
    </section>

    <!-- Berita Terbaru -->
    <div class="container mt-5">
      <h2 class="section-title text-center mb-4">Berita Terbaru</h2>
      <div class="row">
        <?php foreach ($berita as $item) : ?>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="<?php echo $item['gambar']; ?>" class="card-img-top" alt="Gambar Berita">
              <div class="card-body">
                <h5 class="card-title"><?php echo $item['judul']; ?></h5>
                <p class="card-text"><?php echo $item['isi']; ?></p>
                <a href="/berita" class="btn btn-outline-primary btn-sm">Baca Selengkapnya</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Footer -->
    <footer class="text-center p-3 bg-dark text-white mt-5">
      &copy; <?php echo date("Y"); ?> TI UNIMUS | HasbiZain
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  </body>
</html>