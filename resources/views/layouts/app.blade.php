<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greenovative - Online Shop Tanaman Hias</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- CSS Internal & Bootstrap Lokal untuk Menjamin Tampilan Rapi Tanpa CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8fafc;
            color: #334155;
        }
        .navbar {
            background: linear-gradient(135deg, #065f46 0%, #047857 100%) !important;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }
        .navbar-brand {
            font-weight: 700;
            letter-spacing: -0.5px;
        }
        .nav-link {
            font-weight: 500;
            color: rgba(255, 255, 255, 0.85) !important;
            transition: color 0.2s;
        }
        .nav-link:hover, .nav-link.active {
            color: #34d399 !important;
        }
        .card {
            border: none;
            border-radius: 12px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
        }
        .btn-success {
            background-color: #059669;
            border-color: #059669;
            font-weight: 600;
            padding: 0.5rem 1.25rem;
            border-radius: 8px;
        }
        .btn-success:hover {
            background-color: #047857;
            border-color: #047857;
        }
        footer {
            background-color: #0f172a !important;
            color: #94a3b8;
            font-size: 0.9rem;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark py-3">
        <div class="container">
            <a class="navbar-brand fs-4 text-white d-flex align-items-center gap-2" href="{{ route('home') }}">
                <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}">
    <img src="{{ asset('images/logo greenovative.png') }}" alt="Greenovative Logo" style="height: 40px; width: auto;" class="rounded-circle bg-white p-1">
    <span class="text-white fw-bold">Greenovative</span>
</a>
            </a>
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-lg-2">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('plants.index') ? 'active' : '' }}" href="{{ route('plants.index') }}">Katalog Tanaman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten Utama -->
    <main class="py-5 flex-grow-1">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="py-4 mt-auto border-top">
        <div class="container text-center">
            <p class="mb-0">&copy; {{ date('Y') }} <strong>Greenovative</strong>. All rights reserved. Tugas Praktikum Rekayasa Web.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>