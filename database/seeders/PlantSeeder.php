<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plant;

class PlantSeeder extends Seeder
{
    public function run(): void
    {
        $plants = [
            [
                'nama_tanaman' => 'Janda Bolong (Monstera Adansonii)',
                'kategori'     => 'Indoor',
                'harga'        => 75000,
                'stok'         => 15,
                'deskripsi'    => 'Tanaman hias tropis dengan motif daun berlubang unik yang sangat populer untuk dekorasi ruangan.',
                'gambar'       => asset('images/jandabolong.jpg'),
            ],
            [
                'nama_tanaman' => 'Aglaonema Red Anjamani',
                'kategori'     => 'Indoor',
                'harga'        => 120000,
                'stok'         => 10,
                'deskripsi'    => 'Memiliki daun berwarna merah menyala yang indah, sangat mudah dirawat dan toleran cahaya rendah.',
                'gambar'       => asset('images/aglo.jpg'),
            ],
            [
                'nama_tanaman' => 'Sansevieria (Lidah Mertua)',
                'kategori'     => 'Indoor & Outdoor',
                'harga'        => 35000,
                'stok'         => 25,
                'deskripsi'    => 'Tanaman penyaring udara alami yang tangguh, mampu menyerap polutan serta racun di dalam rumah.',
                'gambar'       => asset('images/sanseviera.jpg'),
            ],
            [
                'nama_tanaman' => 'Calathea Orbifolia',
                'kategori'     => 'Indoor',
                'harga'        => 95000,
                'stok'         => 8,
                'deskripsi'    => 'Daun berbentuk bundar lebar dengan corak garis-garis hijau mint yang elegan dan estetik.',
                'gambar'       => asset('images/orbi.jpg'),
            ],
            [
                'nama_tanaman' => 'Kaktus Koboi (Cereus)',
                'kategori'     => 'Outdoor',
                'harga'        => 150000,
                'stok'         => 12,
                'deskripsi'    => 'Kaktus tegak tanpa duri tajam, memberikan kesan minimalis modern pada teras atau sudut ruangan.',
                'gambar'       => asset('images/kaktus.jpg'),
            ],
            [
                'nama_tanaman' => 'Philodendron Pink Princess',
                'kategori'     => 'Koleksi Premium',
                'harga'        => 350000,
                'stok'         => 5,
                'deskripsi'    => 'Tanaman langka favorit kolektor dengan corak varigata merah muda (pink) yang menawan pada daunnya.',
                'gambar'       => asset('images/pp.jpg'),
            ],
            [
                'nama_tanaman' => 'Sirih Gading Variegata',
                'kategori'     => 'Gantung / Indoor',
                'harga'        => 25000,
                'stok'         => 30,
                'deskripsi'    => 'Tanaman hias gantung / rambat yang menjuntai indah, sangat tahan dalam segala kondisi pencahayaan.',
                'gambar'       => asset('images/sirih.jpg'),
            ],
            [
                'nama_tanaman' => 'Bonsai Banyan Tree',
                'kategori'     => 'Bonsai',
                'harga'        => 450000,
                'stok'         => 4,
                'deskripsi'    => 'Bonsai pohon beringin artistik dengan struktur batang eksotik untuk mempercantik area taman.',
                'gambar'       => asset('images/bonsai.jpg'),
            ],
            [
                'nama_tanaman' => 'Sukulen Mini Assorted',
                'kategori'     => 'Succulent',
                'harga'        => 20000,
                'stok'         => 50,
                'deskripsi'    => 'Tanaman hias mungil dalam pot kecil yang sangat praktis, cocok ditaruh di meja kerja atau rak hias.',
                'gambar'       => asset('images/sukulen.jpg'),
            ],
            [
                'nama_tanaman' => 'Anthurium Gelombang Cinta',
                'kategori'     => 'Outdoor',
                'harga'        => 180000,
                'stok'         => 7,
                'deskripsi'    => 'Tanaman hias klasik dengan daun bergelombang tebal memanjang yang terkesan megah dan mewakili kesan asri.',
                'gambar'       => asset('images/gelombang.jpg'),
            ],
        ];

        foreach ($plants as $plant) {
            Plant::create($plant);
        }
    }
}