@extends('layouts.main')

@section('content')
<div class="container py-5">
    <!-- Header Section -->
    <div class="row mb-5">
        <div class="col-lg-12">
            <h1 class="section-title">
                <i class="fas fa-newspaper"></i> Berita & Informasi
            </h1>
        </div>
    </div>

    <!-- News List -->
    <div class="row">
        @foreach ($berita as $item)
        <div class="col-lg-12 mb-4">
            <article class="card border-0 shadow-lg overflow-hidden">
                <div class="card-body p-5">
                    <div class="row align-items-center">
                        <div class="col-lg-10">
                            <a href="/berita/{{ $item['slug'] }}" class="text-decoration-none">
                                <h2 class="card-title font-weight-bold text-dark mb-3">
                                    {{ $item['judul'] }}
                                </h2>
                            </a>
                            <div class="article-meta mb-3">
                                <small class="text-muted">
                                    <i class="fas fa-user"></i> 
                                    <strong>{{ $item['penulis'] }}</strong>
                                </small>
                            </div>
                            <p class="card-text text-muted" style="text-align: justify; line-height: 1.8;">
                                {{ Str::limit($item['konten'], 300) }}
                            </p>
                            <a href="/berita/{{ $item['slug'] }}" class="btn btn-primary btn-sm mt-3">
                                <i class="fas fa-arrow-right"></i> Baca Selengkapnya
                            </a>
                        </div>
                        <div class="col-lg-2 text-right">
                            <div class="news-badge">
                                <i class="fas fa-book-open fa-2x" style="color: #2d8985; opacity: 0.2;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        @endforeach
    </div>

    <!-- Empty State -->
    @if (count($berita) == 0)
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-info text-center py-5" role="alert">
                <i class="fas fa-info-circle fa-3x mb-3 d-block" style="color: #2d8985;"></i>
                <h5>Belum ada berita</h5>
                <p class="text-muted mb-0">Berita akan ditampilkan di sini. Kembali lagi nanti untuk update terbaru.</p>
            </div>
        </div>
    </div>
    @endif
</div>

<style>
    article {
        transition: all 0.3s ease;
    }

    article:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 30px rgba(45, 137, 133, 0.2) !important;
    }

    .article-meta small {
        display: inline-block;
        background: #f0fdf9;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        border: 1px solid #d0e8e6;
    }
</style>
@endsection