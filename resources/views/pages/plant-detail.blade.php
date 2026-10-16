@extends('layouts.app')

@section('content')
<div class="container py-4">
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('plants.index') }}" class="text-success text-decoration-none">Katalog Tanaman</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $plant->nama_tanaman }}</li>
        </ol>
    </nav>

    <div class="row g-5 align-items-center bg-white p-4 p-md-5 rounded-4 shadow-sm">
        <div class="col-lg-6">
            <img src="{{ $plant->gambar }}" class="img-fluid rounded-4 w-100 shadow-sm object-fit-cover" style="height: 380px;" alt="{{ $plant->nama_tanaman }}">
        </div>
        <div class="col-lg-6">
            <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill fw-bold mb-3">{{ $plant->kategori }}</span>
            <h1 class="fw-bold text-dark mb-3">{{ $plant->nama_tanaman }}</h1>
            <h3 class="text-success fw-extrabold mb-4">Rp {{ number_format($plant->harga, 0, ',', '.') }}</h3>
            
            <p class="text-secondary mb-4 lh-lg">{{ $plant->deskripsi }}</p>
            
            <div class="mb-4">
                <span class="text-muted d-block mb-1">Stok Tersedia:</span>
                <span class="badge bg-light text-dark border px-3 py-2 fs-6 fw-bold">{{ $plant->stok }} pcs</span>
            </div>

            <div class="d-flex gap-3">
                <a href="{{ route('plants.index') }}" class="btn btn-outline-secondary px-4">Kembali ke Katalog</a>
                <a href="{{ route('contact') }}" class="btn btn-success px-4">Pesan Tanaman Ini</a>
            </div>
        </div>
    </div>
</div>
@endsection