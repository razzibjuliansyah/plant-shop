@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Hero Banner Section -->
    <div class="row align-items-center py-5 my-2 bg-white rounded-4 shadow-sm p-4 p-md-5">
        <div class="col-lg-6 mb-4 mb-lg-0">
            <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill fw-bold mb-3">🌿 Greenovative Plantation</span>
            <h1 class="display-5 fw-extrabold text-dark mb-3 lh-sm">Hadirkan Keasrian Alam di Setiap Sudut Ruangan Anda</h1>
            <p class="text-secondary lead fs-6 mb-4">Temukan koleksi tanaman hias premium, tanaman penyaring udara, hingga hiasan meja estetik yang dipelihara dengan penuh kasih sayang oleh ahli hortikultura kami.</p>
            <div class="d-flex flex-wrap gap-3">
                <a href="{{ route('plants.index') }}" class="btn btn-success btn-lg px-4 shadow-sm">Lihat Katalog Tanaman</a>
                <a href="{{ route('about') }}" class="btn btn-outline-success btn-lg px-4">Tentang Greenovative</a>
            </div>
        </div>
        <div class="col-lg-6">
            <img src="{{ asset('images/logo greenovative.png') }}" alt="Hero Plant" class="img-fluid rounded-4 shadow w-100 object-fit-cover" style="max-height: 400px;">
        </div>
    </div>

    <!-- Quick Stats Bar -->
    <div class="row g-3 py-4 text-center my-4 bg-success text-white rounded-4 shadow-sm">
        <div class="col-6 col-md-3">
            <h3 class="fw-bold mb-0">10+</h3>
            <small class="opacity-75">Koleksi Tanaman</small>
        </div>
        <div class="col-6 col-md-3">
            <h3 class="fw-bold mb-0">1.200+</h3>
            <small class="opacity-75">Pelanggan Puas</small>
        </div>
        <div class="col-6 col-md-3">
            <h3 class="fw-bold mb-0">100%</h3>
            <small class="opacity-75">Garansi Tanaman Segar</small>
        </div>
        <div class="col-6 col-md-3">
            <h3 class="fw-bold mb-0">4.9 ★</h3>
            <small class="opacity-75">Rating Ulasan</small>
        </div>
    </div>

    <!-- Keunggulan Kami Section -->
    <div class="my-5 py-3">
        <div class="text-center mb-4">
            <h2 class="fw-bold text-dark">Mengapa Memilih Greenovative?</h2>
            <p class="text-secondary">Komitmen kami memberikan layanan dan produk terbaik bagi para pecinta tanaman.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="p-4 bg-white rounded-4 shadow-sm h-100 border-0 text-center">
                    <div class="fs-1 mb-2">🌱</div>
                    <h5 class="fw-bold text-dark mb-2">Kualitas Pilihan Utama</h5>
                    <p class="text-secondary small mb-0">Setiap tanaman melalui seleksi ketat, dipastikan sehat, bebas hama, dan memiliki perakaran yang kuat.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 bg-white rounded-4 shadow-sm h-100 border-0 text-center">
                    <div class="fs-1 mb-2">📦</div>
                    <h5 class="fw-bold text-dark mb-2">Pengemasan Aman & Khusus</h5>
                    <p class="text-secondary small mb-0">Sistem kemasan terproteksi khusus agar media tanam tidak tumpah dan daun tetap segar sampai di rumah Anda.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 bg-white rounded-4 shadow-sm h-100 border-0 text-center">
                    <div class="fs-1 mb-2">💬</div>
                    <h5 class="fw-bold text-dark mb-2">Gratis Konsultasi Perawatan</h5>
                    <p class="text-secondary small mb-0">Tim botani kami siap memandu Anda tentang penyiraman, pemupukan, dan pencahayaan yang tepat.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimoni Pelanggan -->
    <div class="my-5 py-4 bg-white rounded-4 shadow-sm p-4 p-md-5">
        <div class="text-center mb-4">
            <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill fw-bold mb-2">Ulasan Pembeli</span>
            <h2 class="fw-bold text-dark">Apa Kata Pelanggan Kami?</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="p-3 border rounded-3 h-100 bg-light">
                    <div class="text-warning mb-2">★★★★★</div>
                    <p class="small text-secondary mb-3">"Monstera dan Aglaonema sampai dengan kondisi sangat segar! Packingnya rapi sekali pakai kayu dan busa."</p>
                    <strong class="d-block text-dark small">- Amanda S., Jakarta</strong>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 border rounded-3 h-100 bg-light">
                    <div class="text-warning mb-2">★★★★★</div>
                    <p class="small text-secondary mb-3">"Adminnya ramah banget, diajarin cara rawat Sansevieria untuk di kamar ber-AC. Recomended banget Greenovative!"</p>
                    <strong class="d-block text-dark small">- Budi Pratama, Tangerang</strong>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 border rounded-3 h-100 bg-light">
                    <div class="text-warning mb-2">★★★★★</div>
                    <p class="small text-secondary mb-3">"Koleksi Philodendron Pink Princess-nya langka dan daunnya mulus banget. Senang belanja tanaman di sini."</p>
                    <strong class="d-block text-dark small">- Siska Putri, Bandung</strong>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action Banner -->
    <div class="p-4 p-md-5 bg-dark text-white rounded-4 shadow-sm text-center my-5 position-relative overflow-hidden">
        <h2 class="fw-bold mb-2">Siap Memperindah Hunian Anda?</h2>
        <p class="opacity-75 mb-4">Jelajahi katalog lengkap tanaman hias kami dan temukan favorit Anda sekarang.</p>
        <a href="{{ route('plants.index') }}" class="btn btn-success btn-lg px-5">Buka Katalog Sekarang</a>
    </div>
</div>
@endsection