@extends('layouts.main')

@section('content')
<div class="container py-5">
    <!-- Header Section -->
    <div class="row mb-5">
        <div class="col-lg-12">
            <h1 class="section-title">
                <i class="fas fa-envelope"></i> Hubungi Kami
            </h1>
        </div>
    </div>

    <div class="row g-4">
        <!-- Contact Information -->
        <div class="col-lg-6">
            <div class="card border-0 shadow-lg h-100">
                <div class="card-header text-center">
                    <h5 class="mb-0"><i class="fas fa-phone"></i> Informasi Kontak</h5>
                </div>
                <div class="card-body p-4">
                    <?php
                        $kontak = [
                            "Alamat"    => "Pemalang, Jawa Tengah",
                            "WhatsApp"  => "+62 852 2849 6778",
                            "Email"     => "hasbizain76@gmail.com",
                            "Instagram" => "@hasbizainn"
                        ];
                    ?>

                    <?php foreach ($kontak as $key => $value): ?>
                        <div class="contact-item mb-4 pb-3 border-bottom">
                            <div class="d-flex align-items-center">
                                <div class="contact-icon mr-3">
                                    <?php
                                        $icon = '';
                                        if($key == "Alamat") $icon = "fas fa-map-marker-alt";
                                        elseif($key == "WhatsApp") $icon = "fab fa-whatsapp";
                                        elseif($key == "Email") $icon = "fas fa-envelope";
                                        elseif($key == "Instagram") $icon = "fab fa-instagram";
                                    ?>
                                    <i class="{{ $icon }} fa-lg" style="color: #2d8985;"></i>
                                </div>
                                <div class="contact-details">
                                    <small class="text-muted font-weight-bold">{{ $key }}</small>
                                    <p class="text-dark font-weight-600 mb-0">
                                        <?php
                                            if($key == "WhatsApp") {
                                                echo "<a href='https://wa.me/6285228496778' target='_blank' class='text-decoration-none' style='color: #2d8985;'>$value</a>";
                                            } elseif($key == "Email") {
                                                echo "<a href='mailto:$value' class='text-decoration-none' style='color: #2d8985;'>$value</a>";
                                            } elseif($key == "Instagram") {
                                                echo "<a href='https://instagram.com/hasbizainn' target='_blank' class='text-decoration-none' style='color: #2d8985;'>$value</a>";
                                            } else {
                                                echo $value;
                                            }
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Map Section -->
        <div class="col-lg-6">
            <div class="card border-0 shadow-lg h-100">
                <div class="card-header text-center">
                    <h5 class="mb-0"><i class="fas fa-map"></i> Peta Lokasi</h5>
                </div>
                <div class="card-body p-0">
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

<style>
    .contact-item {
        transition: all 0.3s ease;
    }

    .contact-item:hover {
        padding-left: 15px;
    }

    .contact-item:last-child {
        border-bottom: none !important;
        margin-bottom: 0 !important;
        padding-bottom: 0 !important;
    }

    .contact-icon {
        min-width: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .map-responsive {
        overflow: hidden;
        padding-bottom: 56.25%;
        position: relative;
        height: 0;
        border-radius: 0 0 12px 12px;
    }

    .map-responsive iframe {
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        position: absolute;
        border: 0;
    }

    .g-4 {
        gap: 2rem;
    }
</style>
@endsection