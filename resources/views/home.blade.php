<?php
// --- Data Home disimpan di array PHP ---
$home = [
  "judul" => "Selamat Datang di Website Kami",
  "deskripsi" => "Ini adalah halaman home yang menampilkan informasi singkat, dan sedikit kisah kita. Semoga kalian suka dengan Website ini.",
  "link" => "#",
  "tombol" => "Pelajari Lebih Lanjut"
];

// --- Macam-macam informasi tambahan (misal berita terbaru) ---
$berita = [
  "Judul 1" => "Pengumuman Kegiatan TI UNIMUS",
  "Judul 2" => "Workshop Pemrograman Web",
  "Judul 3" => "Pelatihan Keamanan Data"
];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>TI UNIMUS | HOME</title>
  </head>
  <body>
    <!-- Menu -->
    <ul class="nav justify-content-center" style="background-color: #0c424aff;">
      <li class="nav-item">
        <a class="nav-link active" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="berita">Berita</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profile">Profil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact">Kontak</a>
      </li>
    </ul>

    <!-- Konten Home diambil dari PHP -->
    <section class="hero text-center p-5 bg-light">
      <h1><?php echo $home['judul']; ?></h1>
      <p><?php echo $home['deskripsi']; ?></p>
      <a href="<?php echo $home['link']; ?>" class="btn btn-primary">
        <?php echo $home['tombol']; ?>
      </a>
    </section>

    <!-- Macam-macam: Berita Terbaru -->
    <div class="container mt-5">
      <h2 class="text-center mb-4">Berita Terbaru</h2>
      <div class="row">
        <?php foreach ($berita as $judul => $isi) : ?>
          <div class="col-md-4">
            <div class="card mb-3">
              <div class="card-body">
                <h5 class="card-title"><?php echo $judul; ?></h5>
                <p class="card-text"><?php echo $isi; ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Footer -->
    <footer class="text-center p-3 bg-dark text-white mt-5">
      &copy; <?php echo date("Y"); ?> TI UNIMUS
    </footer>

    <!-- Optional JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>
