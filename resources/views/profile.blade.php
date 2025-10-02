<?php
  $foto = "/hasbizain.jpg";
  $biodata = [
    "Nama" => "Hasbi Zain Maulana",
    "NIM" => "13242420007",
    "Program Studi" => "Teknologi Informasi",
    "Universitas" => "UNIMUS",
    "Email" => "hasbi@gmail.com"
  ];
?>
<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <title>TI UNIMUS | Profil Mahasiswa</title>
    <style>
      body { background: linear-gradient(120deg, #f4f6f7 0%, #e0f7fa 100%); }
      .nav-link.active {
        font-weight: bold;
        color: #ffd600 !important;
      }
      .profile-banner {
        background: url('https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=1200&q=80') center/cover no-repeat;
        color: #fff;
        position: relative;
        padding: 70px 0 30px 0;
        margin-bottom: 0;
        min-height: 260px;
        box-shadow: 0 4px 24px rgba(12,66,74,0.10);
      }
      .profile-banner::before {
        content: "";
        position: absolute;
        top:0; left:0; right:0; bottom:0;
        background: rgba(12,66,74,0.7);
        z-index: 0;
      }
      .profile-banner-content {
        position: relative;
        z-index: 1;
      }
      .profile-img {
        width: 140px;
        height: 140px;
        object-fit: cover;
        border-radius: 50%;
        border: 4px solid #ffd600;
        box-shadow: 0 4px 16px rgba(12,66,74,0.15);
        margin-bottom: 18px;
        background: #fff;
      }
      .profile-card {
        background: #fff;
        border-radius: 18px;
        box-shadow: 0 8px 24px rgba(12,66,74,0.10);
        padding: 32px 24px;
        margin-top: -60px;
        margin-bottom: 40px;
        position: relative;
        z-index: 2;
      }
      .profile-title {
        color: #0c424aff;
        font-weight: 700;
        letter-spacing: 1px;
      }
      .list-group-item {
        border: none;
        background: transparent;
        font-size: 1.08rem;
        padding-left: 0;
        padding-right: 0;
      }
      .list-group-item strong {
        color: #0c424aff;
        min-width: 120px;
        display: inline-block;
      }
      .btn-contact {
        background: #0c424aff;
        color: #fff;
        border-radius: 20px;
        padding: 8px 28px;
        font-weight: 500;
        letter-spacing: 1px;
        margin-top: 18px;
        box-shadow: 0 2px 8px rgba(12,66,74,0.10);
        transition: background .2s;
      }
      .btn-contact:hover {
        background: #09505e;
        color: #ffd600;
      }
      @media (max-width: 767px) {
        .profile-card {
          margin-top: -30px;
          padding: 24px 10px;
        }
        .profile-banner {
          padding: 40px 0 20px 0;
          min-height: 180px;
        }
        .profile-img {
          width: 100px;
          height: 100px;
        }
      }
      footer {
        letter-spacing: 1px;
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <ul class="nav justify-content-center py-2" style="background-color: #0c424aff;">
      <li class="nav-item"><a class="nav-link text-white" href="/">Home</a></li>
      <li class="nav-item"><a class="nav-link text-white" href="/berita">Berita</a></li>
      <li class="nav-item"><a class="nav-link text-white active" href="/profile">Profil</a></li>
      <li class="nav-item"><a class="nav-link text-white" href="/contact">Kontak</a></li>
    </ul>

    <!-- Banner Section -->
    <section class="profile-banner d-flex align-items-center justify-content-center">
      <div class="container profile-banner-content text-center">
        <img src="<?php echo $foto; ?>" alt="Foto Profil" class="profile-img mb-2">
      </div>
    </section>

    <!-- Profile Card -->
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7">
          <div class="profile-card text-center">
            <h3 class="profile-title mb-4">Biodata Singkat</h3>
            <ul class="list-group list-group-flush text-left mb-3">
              <?php foreach($biodata as $key => $value): ?>
                <li class="list-group-item">
                  <strong><?php echo $key; ?>:</strong> <?php echo $value; ?>
                </li>
              <?php endforeach; ?>
            </ul>
            <a href="mailto:<?php echo $biodata['Email']; ?>" class="btn btn-contact">Hubungi via Email</a>
          </div>
        </div>
      </div>
    </div>

    <footer class="text-center p-3 bg-dark text-white mt-5">
      &copy; <?php echo date("Y"); ?> TI UNIMUS | HasbiZain
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  </body>
</html>