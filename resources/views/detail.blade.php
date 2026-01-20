@extends('layouts.main')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Article Header -->
            <article class="card border-0 shadow-lg">
                <div class="card-header text-center">
                    <h1 class="card-title font-weight-bold mb-0">
                        <?php echo $judul; ?>
                    </h1>
                </div>

                <div class="card-body p-5">
                    <!-- Article Meta -->
                    <div class="article-meta text-center mb-5 pb-4 border-bottom">
                        <small class="text-muted">
                            <i class="fas fa-calendar-alt"></i>
                            <strong><?php echo $tanggal; ?></strong>
                        </small>
                    </div>

                    <!-- Article Image -->
                    @if(isset($gambar))
                    <div class="mb-5">
                        <img src="<?php echo $gambar; ?>" class="img-fluid rounded shadow-sm" alt="Gambar Berita" style="max-height: 400px; width: 100%; object-fit: cover;">
                    </div>
                    @endif

                    <!-- Article Content -->
                    <div class="article-content" style="text-align: justify; line-height: 2; font-size: 1.1rem;">
                        <p class="text-dark">
                            <?php echo $isi; ?>
                        </p>
                    </div>

                    <!-- Back Button -->
                    <div class="text-center mt-5 pt-4 border-top">
                        <a href="/berita" class="btn btn-primary btn-lg">
                            <i class="fas fa-arrow-left"></i> Kembali ke Daftar Berita
                        </a>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>

<style>
    .article-meta small {
        background: #f0fdf9;
        padding: 0.7rem 1.5rem;
        border-radius: 20px;
        border: 1px solid #d0e8e6;
        display: inline-block;
    }

    .article-content p {
        margin-bottom: 1.5rem;
    }
</style>
@endsection