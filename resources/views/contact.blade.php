<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <title>TI UNIMUS | Kontak</title>
    <style>
      body { background: linear-gradient(135deg, #e0f7fa 0%, #f4f6f7 100%); }
      .nav-link.active {
        font-weight: bold;
        color: #ffd600 !important;
      }
      .contact-card {
        background: #fff;
        border-radius: 18px;
        box-shadow: 0 8px 24px rgba(12,66,74,0.10);
        padding: 32px 24px;
        margin-top: 40px;
      }
      .section-title {
        color: #0c424aff;
        font-weight: 700;
        letter-spacing: 1px;
      }
      .table th {
        background: #e0f7fa;
        color: #0c424aff;
      }
      .table td {
        background: #fff;
      }
      .map-responsive {
        overflow: hidden;
        padding-bottom: 56.25%;
        position: relative;
        height: 0;
        border-radius: 12px;
        box-shadow: 0 4px 16px rgba(12,66,74,0.10);
      }
      .map-responsive iframe {
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        position: absolute;
        border: 0;
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
      <li class="nav-item"><a class="nav-link text-white" href="/profile">Profil</a></li>
      <li class="nav-item"><a class="nav-link text-white active" href="/contact">Kontak</a></li>
    </ul>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="contact-card mt-5">
            <h2 class="section-title text-center mb-4">Kontak Kami</h2>
            <?php
              $kontak = [
                "Alamat"    => "Pemalang, Jawa Tengah",
                "WhatsApp"  => "+62 852 2849 6778",
                "Email"     => "hasbizain76@gmail.com",
                "Instagram" => "@hasbizainn"
              ];
            ?>
            <div class="row">
              <div class="col-md-6 mb-4 mb-md-0">
                <table class="table table-bordered table-striped">
                  <tbody>
                    <?php foreach ($kontak as $key => $value): ?>
                      <tr>
                        <th style="width:35%"><?php echo $key; ?></th>
                        <td>
                          <?php
                            if($key == "WhatsApp") {
                              echo "<a href='https://wa.me/6285228496778' target='_blank'>$value</a>";
                            } elseif($key == "Email") {
                              echo "<a href='mailto:$value'>$value</a>";
                            } elseif($key == "Instagram") {
                              echo "<a href='https://instagram.com/hasbizainn' target='_blank'>$value</a>";
                            } else {
                              echo $value;
                            }
                          ?>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <div class="col-md-6">
                <h5 class="mb-3">Peta Lokasi</h5>
                <div class="map-responsive">
                  <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63358.986271116425!2d109.335491!3d-6.900344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f977d6ba4c9f3%3A0x4027a76e35307b0!2sPemalang%2C%20Kec.%20Pemalang%2C%20Kabupaten%20Pemalang%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1696011234567!5m2!1sid!2sid"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                  </iframe>
                </div>
              </div>
            </div>
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