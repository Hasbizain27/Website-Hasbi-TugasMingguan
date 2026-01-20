<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Hasbi TI - Teknologi Informasi</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #f0fdf9 0%, #ffffff 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* NAVBAR STYLING */
        .navbar-custom {
            background: linear-gradient(135deg, #2d8985 0%, #1f5f5c 100%);
            box-shadow: 0 4px 15px rgba(45, 137, 133, 0.2);
            padding: 1rem 0;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: white !important;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .navbar-custom .nav-link {
            color: rgba(255, 255, 255, 0.9) !important;
            font-weight: 500;
            margin: 0 10px;
            transition: all 0.3s ease;
            position: relative;
        }

        .navbar-custom .nav-link:hover {
            color: white !important;
        }

        .navbar-custom .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: white;
            transition: width 0.3s ease;
        }

        .navbar-custom .nav-link:hover::after {
            width: 100%;
        }

        .navbar-custom .btn-link {
            color: rgba(255, 255, 255, 0.9) !important;
            font-weight: 500;
            margin: 0 10px;
        }

        .navbar-custom .btn-link:hover {
            color: white !important;
        }

        /* CONTAINER & CONTENT */
        .main-content {
            flex: 1;
            padding: 2rem 0;
        }

        .container {
            max-width: 1200px;
        }

        /* FOOTER */
        footer {
            background: linear-gradient(135deg, #2d8985 0%, #1f5f5c 100%);
            color: white;
            padding: 2rem 0;
            margin-top: auto;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        footer p {
            margin: 0;
            font-weight: 500;
            letter-spacing: 0.5px;
        }

        /* CARD STYLING */
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(45, 137, 133, 0.1);
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(45, 137, 133, 0.2);
        }

        .card-header {
            background: linear-gradient(135deg, #2d8985 0%, #1f5f5c 100%) !important;
            border: none;
            padding: 1.5rem;
            color: white;
        }

        .card-header h2,
        .card-header h3 {
            margin: 0;
            font-weight: 700;
        }

        /* BUTTON STYLING */
        .btn-primary {
            background: linear-gradient(135deg, #2d8985 0%, #1f5f5c 100%);
            border: none;
            border-radius: 8px;
            padding: 0.6rem 1.5rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #1f5f5c 0%, #16403e 100%);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(45, 137, 133, 0.3);
        }

        .btn-success {
            background: linear-gradient(135deg, #2d8985 0%, #1f5f5c 100%);
            border: none;
            border-radius: 8px;
            padding: 0.6rem 1.5rem;
            font-weight: 600;
        }

        .btn-success:hover {
            background: linear-gradient(135deg, #1f5f5c 0%, #16403e 100%);
        }

        .btn-outline-secondary {
            color: #2d8985;
            border: 2px solid #2d8985;
            border-radius: 8px;
            font-weight: 600;
        }

        .btn-outline-secondary:hover {
            background: #2d8985;
            color: white;
        }

        /* HEADING STYLING */
        h1, h2, h3, h4, h5, h6 {
            color: #1f5f5c;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        /* TABLE STYLING */
        .table {
            background: white;
            border-collapse: collapse;
        }

        .table thead th {
            background: linear-gradient(135deg, #2d8985 0%, #1f5f5c 100%);
            color: white;
            border: none;
            font-weight: 600;
            padding: 1rem;
        }

        .table tbody td {
            padding: 1rem;
            border-color: #e0f7f5;
        }

        .table tbody tr {
            transition: all 0.3s ease;
        }

        .table tbody tr:hover {
            background: #f0fdf9;
        }

        /* FORM STYLING */
        .form-control, .form-select {
            border: 2px solid #d0e8e6;
            border-radius: 8px;
            padding: 0.7rem 1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus, .form-select:focus {
            border-color: #2d8985;
            box-shadow: 0 0 0 0.2rem rgba(45, 137, 133, 0.25);
        }

        .form-label {
            color: #1f5f5c;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        /* SECTION TITLE */
        .section-title {
            color: #1f5f5c;
            font-weight: 700;
            letter-spacing: 1px;
            margin-bottom: 2rem;
            position: relative;
            padding-bottom: 1rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background: linear-gradient(135deg, #2d8985 0%, #1f5f5c 100%);
            border-radius: 2px;
        }
    </style>
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="fas fa-graduation-cap"></i> HASBI TI
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/profile') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/mahasiswa">Mahasiswa</a>
                    </li>
                    @endauth
                    <li class="nav-item">
                        <a class="nav-link" href="/berita">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Kontak</a>
                    </li>
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <form action="/logout" method="post" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-link nav-link">Logout</button>
                        </form>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <main class="main-content">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <!-- FOOTER -->
    <footer class="mt-5">
        <div class="container text-center">
            <p>&copy; 2026 HASBI TI - Teknologi Informasi. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>