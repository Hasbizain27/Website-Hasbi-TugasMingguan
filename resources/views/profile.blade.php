@extends('layouts.main')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Profile Card -->
            <div class="card shadow-lg border-0">
                <div class="card-header text-center">
                    <h2 class="mb-0">
                        <i class="fas fa-user-circle"></i> Profil Saya
                    </h2>
                </div>
                
                <div class="card-body p-5">
                    <div class="text-center">
                        <!-- Profile Photo -->
                        <div class="mb-5">
                            <img src="{{ $foto }}" alt="Foto Profil" 
                                 class="rounded-circle img-fluid border-5" 
                                 style="width: 180px; height: 180px; object-fit: cover; border: 5px solid #2d8985; box-shadow: 0 8px 20px rgba(45, 137, 133, 0.2);">
                        </div>

                        <!-- Profile Information -->
                        <div class="profile-info">
                            <h3 class="text-dark font-weight-bold mb-4">{{ $nama }}</h3>
                            
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="info-card">
                                        <small class="text-muted font-weight-bold d-block mb-2">
                                            <i class="fas fa-phone"></i> Nomor HP
                                        </small>
                                        <p class="text-dark font-weight-600">{{ $nohp }}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="button-group mt-5 pt-4 border-top">
                                <a href="{{ url('/') }}" class="btn btn-outline-secondary btn-lg mr-3">
                                    <i class="fas fa-arrow-left"></i> Beranda
                                </a>
                                <a href="{{ url('/profile/edit') }}" class="btn btn-primary btn-lg">
                                    <i class="fas fa-edit"></i> Edit Profil
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .profile-info {
        background: linear-gradient(135deg, #f0fdf9 0%, #ffffff 100%);
        border-radius: 12px;
        padding: 30px;
        margin: 20px 0;
    }

    .info-card {
        background: white;
        border: 2px solid #d0e8e6;
        border-radius: 10px;
        padding: 20px;
        transition: all 0.3s ease;
    }

    .info-card:hover {
        border-color: #2d8985;
        box-shadow: 0 6px 20px rgba(45, 137, 133, 0.1);
    }

    .button-group {
        display: flex;
        justify-content: center;
        gap: 15px;
        flex-wrap: wrap;
    }

    .btn-lg {
        padding: 0.8rem 2rem;
        font-weight: 600;
    }
</style>
@endsection