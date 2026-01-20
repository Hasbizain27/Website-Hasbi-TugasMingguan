@extends('layouts.main')

@section('content')
<div class="container py-5">
    <!-- Hero Section -->
    <div class="row align-items-center mb-5">
        <div class="col-lg-12">
            <div class="card border-0 shadow-lg" style="background: linear-gradient(135deg, #2d8985 0%, #1f5f5c 100%); color: white;">
                <div class="card-body p-5 text-center">
                    <h1 class="display-4 font-weight-bold mb-3">
                        <i class="fas fa-graduation-cap"></i> Selamat Datang
                    </h1>
                    <p class="lead font-weight-500 mb-0">
                        Teknologi Informasi Hasbi TI - Tempat berbagi informasi dan data mahasiswa
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="row mt-5 mb-5">
        <div class="col-md-4 mb-4">
            <div class="card border-0 text-center h-100">
                <div class="card-body p-4">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-users fa-3x" style="color: #2d8985;"></i>
                    </div>
                    <h5 class="card-title font-weight-bold">Data Mahasiswa</h5>
                    <p class="card-text text-muted">Kelola dan lihat informasi data mahasiswa dengan mudah</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card border-0 text-center h-100">
                <div class="card-body p-4">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-newspaper fa-3x" style="color: #2d8985;"></i>
                    </div>
                    <h5 class="card-title font-weight-bold">Berita & Update</h5>
                    <p class="card-text text-muted">Dapatkan berita terbaru dan informasi penting dari kampus</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card border-0 text-center h-100">
                <div class="card-body p-4">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-user-circle fa-3x" style="color: #2d8985;"></i>
                    </div>
                    <h5 class="card-title font-weight-bold">Profil Personal</h5>
                    <p class="card-text text-muted">Kelola profil pribadi dan informasi kontak Anda</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="row mt-5">
        <div class="col-lg-12 text-center">
            <p class="text-muted mb-4">Mulai jelajahi sistem informasi kami sekarang</p>
            <div class="button-group">
                <a href="/mahasiswa" class="btn btn-primary btn-lg mr-3">
                    <i class="fas fa-list"></i> Lihat Data Mahasiswa
                </a>
                <a href="/berita" class="btn btn-outline-secondary btn-lg">
                    <i class="fas fa-newspaper"></i> Baca Berita
                </a>
            </div>
        </div>
    </div>
</div>

<style>
    .feature-icon {
        transition: transform 0.3s ease;
    }

    .card:hover .feature-icon {
        transform: translateY(-5px);
    }

    .button-group {
        display: flex;
        justify-content: center;
        gap: 15px;
        flex-wrap: wrap;
    }

    .display-4 {
        color: white !important;
    }
</style>
@endsection