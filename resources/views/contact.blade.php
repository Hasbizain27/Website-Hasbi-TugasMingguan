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

    <!-- Konten Kontak (PHP) -->
    <div class="container mt-5">
      <h2 class="text-center mb-4">Kontak Kami</h2>

      <?php
        // Data kontak menggunakan array
        $kontak = [
          "Alamat"    => "Pemalang, Jawa Tengah",
          "WhatsApp"  => "+62 852 2849 6778",
          "Email"     => "hasbizain76@gmail.com",
          "Instagram" => "@hasbizainn"
        ];
      ?>

      <div class="row">
        <div class="col-md-6">
          <table class="table table-bordered table-striped">
            <tbody>
              <?php
                // Loop isi kontak
                foreach ($kontak as $key => $value) {
                  echo "<tr>";
                  echo "<th style='width:30%'>$key</th>";
                  echo "<td>$value</td>";
                  echo "</tr>";
                }
              ?>
            </tbody>
          </table>
        </div>
        <div class="col-md-6">
          <!-- Bisa tambahkan peta / deskripsi lain -->
          <h5>Peta Lokasi</h5>
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.632611799294!2d110.44933497485985!3d-7.827974178735176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b8dd92c5e4b%3A0x6e3d4b1b960053aa!2sUniversitas%20Muhammadiyah%20Semarang!5e0!3m2!1sid!2sid!4v1696768799113!5m2!1sid!2sid" 
            width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy">
          </iframe>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>
