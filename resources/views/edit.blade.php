@extends('layouts.main')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Form Header -->
            <h1 class="section-title text-center mb-5">
                <i class="fas fa-edit"></i> Edit Data Mahasiswa
            </h1>

            <!-- Form Card -->
            <div class="card border-0 shadow-lg">
                <div class="card-header text-center">
                    <h5 class="mb-0">Perbarui Informasi Mahasiswa</h5>
                </div>
                
                <div class="card-body p-5">
                    <form action="/editdata/{{ $data['id'] }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-4">
                            <label for="nama" class="form-label">
                                <i class="fas fa-user"></i> Nama Lengkap
                            </label>
                            <input 
                                type="text" 
                                name="name" 
                                id="nama" 
                                value="{{ $data['name'] }}" 
                                placeholder="Nama Lengkap" 
                                class="form-control form-control-lg @error('name') is-invalid @enderror"
                                required
                            >
                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="nim" class="form-label">
                                <i class="fas fa-id-card"></i> NIM (Nomor Induk Mahasiswa)
                            </label>
                            <input 
                                type="number" 
                                name="nim" 
                                id="nim" 
                                value="{{ $data['nim'] }}" 
                                placeholder="Nomor induk mahasiswa" 
                                class="form-control form-control-lg @error('nim') is-invalid @enderror"
                                required
                            >
                            @error('nim')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="prodi" class="form-label">
                                <i class="fas fa-book"></i> Program Studi
                            </label>
                            <input 
                                type="text" 
                                name="prodi" 
                                id="prodi" 
                                value="{{ $data['prodi'] }}" 
                                placeholder="Program Studi" 
                                class="form-control form-control-lg @error('prodi') is-invalid @enderror"
                                required
                            >
                            @error('prodi')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="email" class="form-label">
                                <i class="fas fa-envelope"></i> Email
                            </label>
                            <input 
                                type="email" 
                                name="email" 
                                id="email" 
                                value="{{ $data['email'] }}" 
                                placeholder="Email" 
                                class="form-control form-control-lg @error('email') is-invalid @enderror"
                                required
                            >
                            @error('email')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-5">
                            <label for="nohp" class="form-label">
                                <i class="fas fa-phone"></i> Nomor HandPhone
                            </label>
                            <input 
                                type="number" 
                                name="nohp" 
                                id="nohp" 
                                value="{{ $data['nohp'] }}" 
                                placeholder="Nomor HandPhone" 
                                class="form-control form-control-lg @error('nohp') is-invalid @enderror"
                                required
                            >
                            @error('nohp')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group d-flex gap-2">
                            <button type="submit" class="btn btn-primary btn-lg flex-grow-1">
                                <i class="fas fa-save"></i> Simpan Perubahan
                            </button>
                            <a href="/mahasiswa" class="btn btn-outline-secondary btn-lg">
                                <i class="fas fa-times-circle"></i> Batal
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .form-control-lg {
        border-radius: 8px;
        padding: 0.8rem 1.2rem;
        font-size: 1rem;
    }

    .form-group .form-label {
        margin-bottom: 0.7rem;
    }

    .d-flex.gap-2 {
        gap: 10px;
    }

    .flex-grow-1 {
        flex-grow: 1;
    }
</style>
@endsection