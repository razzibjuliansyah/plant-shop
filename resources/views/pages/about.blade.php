@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Header Tentang Kami -->
    <div class="text-center mb-5">
        <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill fw-bold mb-2">Mengenal Lebih Dekat</span>
        <h1 class="fw-bold text-dark">Tentang Greenovative</h1>
        <p class="text-secondary mx-auto" style="max-width: 650px;">Dedikasi kami untuk menghadirkan hijau alam yang menyegarkan ke dalam ruang hidup modern Anda.</p>
    </div>

    <!-- Story Section -->
    <div class="row align-items-center g-5 mb-5 bg-white p-4 p-md-5 rounded-4 shadow-sm">
        <div class="col-lg-6">
            <img src="{{ asset('images/heroabout.jpg') }}" alt="Tentang Greenovative" class="img-fluid rounded-4 shadow-sm w-100 object-fit-cover" style="max-height: 380px;">
        </div>
        <div class="col-lg-6">
            <h3 class="fw-bold text-dark mb-3">Cerita Perjalanan Kami</h3>
            <p class="text-secondary lh-base mb-3"><strong>Greenovative</strong> berdiri dari kecintaan mendalam terhadap dunia flora dan hortikultura. Kami percaya bahwa kehadiran tanaman di lingkungan tempat tinggal maupun kerja mampu memberikan ketenangan, menyaring polusi, dan meningkatkan kualitas hidup secara keseluruhan.</p>
            <p class="text-secondary lh-base mb-0">Berawal dari kebun pembibitan lokal, kini kami melayani ratusan pecinta tanaman hias di seluruh Indonesia dengan jaminan tanaman sehat, berkualitas tinggi, serta pendampingan perawatan berkelanjutan.</p>
        </div>
    </div>

    <!-- Visi Misi Section -->
    <div class="row g-4 mb-5">
        <div class="col-md-6">
            <div class="p-4 bg-white rounded-4 shadow-sm h-100 border-start border-success border-4">
                <h4 class="fw-bold text-success mb-3">🎯 Visi Kami</h4>
                <p class="text-secondary mb-0">Menjadi penyedia tanaman hias dan solusi lanskap interior terpercaya yang menginspirasi setiap individu untuk mengadopsi gaya hidup hijau yang ramah lingkungan dan berkelanjutan.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="p-4 bg-white rounded-4 shadow-sm h-100 border-start border-success border-4">
                <h4 class="fw-bold text-success mb-3">🚀 Misi Kami</h4>
                <ul class="text-secondary ps-3 mb-0 small lh-lg">
                    <li>Menyediakan berbagai jenis tanaman hias sehat berkualitas tinggi langsung dari pembudidaya.</li>
                    <li>Memberikan edukasi dan panduan perawatan tanaman yang ramah bagi pemula.</li>
                    <li>Mengutamakan kepuasan pelanggan melalui pengemasan aman dan pelayanan responsif.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Nilai-Nilai Utama -->
    <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm my-5">
        <div class="text-center mb-4">
            <h3 class="fw-bold text-dark">Nilai Utama Kami</h3>
        </div>
        <div class="row g-4 text-center">
            <div class="col-6 col-md-3">
                <div class="p-3 border rounded-3 bg-light">
                    <div class="fs-2 mb-1">🌿</div>
                    <strong class="d-block text-dark mb-1">Kelestarian</strong>
                    <small class="text-muted">Budidaya yang ramah lingkungan.</small>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="p-3 border rounded-3 bg-light">
                    <div class="fs-2 mb-1">⭐</div>
                    <strong class="d-block text-dark mb-1">Kualitas</strong>
                    <small class="text-muted">Tanaman terbaik dan sehat.</small>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="p-3 border rounded-3 bg-light">
                    <div class="fs-2 mb-1">🤝</div>
                    <strong class="d-block text-dark mb-1">Integritas</strong>
                    <small class="text-muted">Jujur dalam informasi stok & harga.</small>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="p-3 border rounded-3 bg-light">
                    <div class="fs-2 mb-1">❤️</div>
                    <strong class="d-block text-dark mb-1">Pelayanan</strong>
                    <small class="text-muted">Selalu siap membantu pembeli.</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection