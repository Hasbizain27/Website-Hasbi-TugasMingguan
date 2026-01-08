@extends('layouts.main')

@section('content')
<style>
    body {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 100vh;
    }
    .login-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: calc(100vh - 76px); /* Adjust for navbar height */
        padding: 20px;
    }
    .login-container {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 15px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        padding: 40px;
        max-width: 400px;
        width: 100%;
    }
    .login-header {
        text-align: center;
        margin-bottom: 30px;
    }
    .login-header h1 {
        color: #333;
        font-weight: 600;
        margin-bottom: 10px;
    }
    .login-header p {
        color: #666;
        font-size: 14px;
    }
    .form-floating > label {
        padding: 1rem 0.75rem;
    }
    .btn-login {
        background: linear-gradient(135deg, #0d3c3b 0%, #1a5a5a 100%);
        border: none;
        border-radius: 25px;
        padding: 12px;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    .btn-login:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(13, 60, 59, 0.4);
    }
    .alert {
        border-radius: 10px;
        border: none;
    }
    .form-control {
        border-radius: 10px;
        border: 1px solid #ddd;
        padding: 12px 15px;
    }
    .form-control:focus {
        border-color: #0d3c3b;
        box-shadow: 0 0 0 0.2rem rgba(13, 60, 59, 0.25);
    }
</style>

<div class="login-wrapper">
<div class="login-container">
    <div class="login-header">
        <h1>🔐 Login</h1>
        <p>Selamat datang kembali! Silakan masuk ke akun Anda.</p>
    </div>

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <form action="/login" method="post">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">📧 Email Address</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email Anda" autofocus required value="{{ old('email') }}">
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="password" class="form-label">🔒 Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan password Anda" required>
        </div>
        <button class="w-100 btn btn-primary btn-login" type="submit">🚀 Masuk</button>
    </form>

    <div class="text-center mt-3">
        <small class="text-muted">Belum punya akun? <a href="#" class="text-decoration-none">Daftar sekarang</a></small>
    </div>
</div>
</div>
@endsection