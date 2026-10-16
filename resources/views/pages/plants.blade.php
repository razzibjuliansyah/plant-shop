@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center mb-5">
        <h1 class="fw-bold text-success">Katalog Tanaman Hias Greenovative</h1>
        <p class="text-muted">Pilih koleksi tanaman hias segar langsung dari pembudidaya terpercaya.</p>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($plants as $plant)
        <div class="col">
            <div class="card h-100 shadow-sm border-0 rounded-3">
                <img src="{{ $plant->gambar }}" class="card-img-top" alt="{{ $plant->nama_tanaman }}" style="height: 240px; object-fit: cover;">
                <div class="card-body">
                    <span class="badge bg-success mb-2">{{ $plant->kategori }}</span>
                    <h5 class="card-title fw-bold text-dark">{{ $plant->nama_tanaman }}</h5>
                    <p class="card-text text-muted small">{{ $plant->deskripsi }}</p>
                </div>
                <div class="card-footer bg-white border-0 d-flex justify-content-between align-items-center pb-3">
                    <div>
                        <span class="fs-5 fw-bold text-success">Rp {{ number_format($plant->harga, 0, ',', '.') }}</span>
                        <br>
                        <small class="text-secondary">Stok: {{ $plant->stok }} pcs</small>
                    </div>
                    <a href="{{ route('plants.show', $plant->id) }}" class="btn btn-outline-success btn-sm">Detail Produk</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection