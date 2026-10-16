@extends('layouts.app')

@section('content')
<div class="container py-4">
    <!-- Header Kontak -->
    <div class="text-center mb-5">
        <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill fw-bold mb-2">Layanan Pelanggan</span>
        <h1 class="fw-bold text-dark">Hubungi Greenovative</h1>
        <p class="text-secondary mx-auto" style="max-width: 600px;">
            Ingin memesan tanaman, berkonsultasi, atau mengunjungi kebun kami? Hubungi tim kami langsung melalui saluran di bawah ini.
        </p>
    </div>

    <!-- Informasi Kontak Utama -->
    <div class="row g-4 mb-5">
        <!-- Kartu WhatsApp & Telepon -->
        <div class="col-md-4">
            <div class="bg-white p-4 rounded-4 shadow-sm h-100 text-center border-0">
                <div class="fs-1 text-success mb-3">💬</div>
                <h5 class="fw-bold text-dark mb-2">WhatsApp & Telepon</h5>
                <p class="text-secondary small mb-3">Respon cepat untuk pertanyaan produk & konsultasi tanaman.</p>
                <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-success w-100 fw-bold rounded-3">
                    Hubungi via WhatsApp
                </a>
            </div>
        </div>

        <!-- Kartu Alamat Kebun / Kantor -->
        <div class="col-md-4">
            <div class="bg-white p-4 rounded-4 shadow-sm h-100 text-center border-0">
                <div class="fs-1 text-success mb-3">📍</div>
                <h5 class="fw-bold text-dark mb-2">Alamat Kantor & Kebun</h5>
                <p class="text-secondary small mb-1"><strong>Greenovative Nursery</strong></p>
                <p class="text-secondary small mb-0">Jl. Kaliputih, Citayam, Bogor, Jawa Barat</p>
            </div>
        </div>

        <!-- Kartu Jam Operasional -->
        <div class="col-md-4">
            <div class="bg-white p-4 rounded-4 shadow-sm h-100 text-center border-0">
                <div class="fs-1 text-success mb-3">⏰</div>
                <h5 class="fw-bold text-dark mb-2">Jam Operasional</h5>
                <p class="text-secondary small mb-1"><strong>Senin - Sabtu:</strong> 08.00 - 17.00 WIB</p>
                <p class="text-danger small mb-0 fw-semibold"><strong>Minggu / Hari Libur:</strong> Tutup</p>
            </div>
        </div>
    </div>

    <!-- Banner Media Sosial & Platform Belanja -->
    <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm text-center mb-5">
        <h4 class="fw-bold text-dark mb-2">Kunjungi Marketplace & Media Sosial Kami</h4>
        <p class="text-secondary small mb-4">Dapatkan update koleksi tanaman hias terbaru setiap harinya.</p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <a href="#" class="btn btn-outline-success px-4 rounded-3 fw-bold">Instagram</a>
            <a href="#" class="btn btn-outline-success px-4 rounded-3 fw-bold">TikTok Shop</a>
            <a href="#" class="btn btn-outline-success px-4 rounded-3 fw-bold">Tokopedia</a>
        </div>
    </div>

    <!-- FAQ Ringkas -->
    <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm">
        <h4 class="fw-bold text-dark mb-4 text-center">Pertanyaan Umum (FAQ)</h4>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="p-3 border rounded-3 bg-light">
                    <strong class="text-dark d-block mb-1">Bagaimana cara memesan tanaman di Greenovative?</strong>
                    <p class="text-secondary small mb-0">Pilih tanaman yang Anda sukai di menu Katalog, lalu hubungi tim kami via WhatsApp untuk konfirmasi stok dan pengiriman.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-3 border rounded-3 bg-light">
                    <strong class="text-dark d-block mb-1">Apakah bisa datang langsung ke kebun?</strong>
                    <p class="text-secondary small mb-0">Bisa! Kebun kami terbuka untuk kunjungan setiap hari Senin hingga Sabtu pada jam operasional.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection