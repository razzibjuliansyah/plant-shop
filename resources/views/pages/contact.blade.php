@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center mb-5">
        <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill fw-bold mb-2">Layanan Pelanggan</span>
        <h1 class="fw-bold text-dark">Hubungi Greenovative</h1>
        <p class="text-secondary">Ada pertanyaan tentang koleksi tanaman atau butuh konsultasi perawatan? Kami siap membantu!</p>
    </div>

    <div class="row g-4 mb-5">
        <!-- Form Kontak -->
        <div class="col-lg-7">
            <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm h-100">
                <h4 class="fw-bold text-dark mb-3">Kirim Pesan atau Diskusi</h4>
                <p class="text-secondary small mb-4">Isi formulir di bawah ini dan tim Greenovative akan merespons pesan Anda dalam kurun waktu 1x24 jam.</p>

                <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Terima kasih! Pesan Anda telah terkirim.');">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label text-secondary small fw-bold">Nama Lengkap</label>
                            <input type="text" class="form-control rounded-3" placeholder="Masukkan nama Anda" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-secondary small fw-bold">Alamat Email</label>
                            <input type="email" class="form-control rounded-3" placeholder="contoh@email.com" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label text-secondary small fw-bold">Subjek Pesan</label>
                            <select class="form-select rounded-3">
                                <option selected>Konsultasi Pemesanan Tanaman</option>
                                <option>Tanya Perawatan Tanaman</option>
                                <option>Kerjasama / Partnership</option>
                                <option>Lainnya</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label text-secondary small fw-bold">Isi Pesan</label>
                            <textarea class="form-control rounded-3" rows="4" placeholder="Tuliskan pertanyaan atau kebutuhan tanaman Anda..." required></textarea>
                        </div>
                        <div class="col-12 pt-2">
                            <button type="submit" class="btn btn-success w-100 py-2 fs-6">Kirim Pesan Sekarang</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Info Alamat & Kontak -->
        <div class="col-lg-5">
            <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm h-100 d-flex flex-column justify-content-between">
                <div>
                    <h4 class="fw-bold text-dark mb-4">Informasi Kontak</h4>
                    
                    <div class="d-flex align-items-start gap-3 mb-4">
                        <div class="fs-4 bg-success bg-opacity-10 text-success p-2 rounded-3">📍</div>
                        <div>
                            <strong class="d-block text-dark">Alamat Kantor</strong>
                            <span class="text-secondary small">Jl. Kaliputih, Citayam, Bogor</span>
                        </div>
                    </div>

                    <div class="d-flex align-items-start gap-3 mb-4">
                        <div class="fs-4 bg-success bg-opacity-10 text-success p-2 rounded-3">📞</div>
                        <div>
                            <strong class="d-block text-dark">WhatsApp & Telepon</strong>
                            <span class="text-secondary small">+62 812-3456-7890</span>
                        </div>
                    </div>

                    <div class="d-flex align-items-start gap-3 mb-4">
                        <div class="fs-4 bg-success bg-opacity-10 text-success p-2 rounded-3">✉️</div>
                        <div>
                            <strong class="d-block text-dark">Email Resmi</strong>
                            <span class="text-secondary small">greenovative@gmail.com</span>
                        </div>
                    </div>

                    <div class="d-flex align-items-start gap-3 mb-4">
                        <div class="fs-4 bg-success bg-opacity-10 text-success p-2 rounded-3">⏰</div>
                        <div>
                            <strong class="d-block text-dark">Jam Operasional</strong>
                            <span class="text-secondary small d-block">Senin - Sabtu: 08.00 - 17.00 WIB</span>
                            <span class="text-secondary small">Minggu: Tutup</span>
                        </div>
                    </div>
                </div>

                <div class="p-3 bg-light rounded-3 text-center mt-3 border">
                    <small class="text-muted d-block mb-1">Ikuti Media Sosial Kami</small>
                    <div class="d-flex justify-content-center gap-3 fw-bold text-success small">
                        <span>Instagram</span> • <span>TikTok</span> • <span>Tokopedia</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Accordion -->
    <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm my-5">
        <h3 class="fw-bold text-dark mb-4 text-center">Pertanyaan Umum (FAQ)</h3>
        <div class="row g-3">
            <div class="col-md-6">
                <div class="p-3 border rounded-3 bg-light">
                    <strong class="text-dark d-block mb-1">Apakah tanaman aman saat dikirim luar kota?</strong>
                    <p class="text-secondary small mb-0">Sangat aman. Kami menggunakan media tanam yang dikunci khusus dan kemasan kardus tebal berangka kayu.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-3 border rounded-3 bg-light">
                    <strong class="text-dark d-block mb-1">Bagaimana jika tanaman sampai dalam keadaan rusak?</strong>
                    <p class="text-secondary small mb-0">Kami memberikan garansi ganti tanaman baru jika tanaman rusak/mati dalam kurun waktu 2x24 jam sejak diterima.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection