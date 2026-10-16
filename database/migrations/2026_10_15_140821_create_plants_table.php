<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('plants', function (Blueprint $table) {
    $table->id();
    $table->string('nama_tanaman');       // Field 1
    $table->string('kategori');           // Field 2
    $table->decimal('harga', 10, 2);      // Field 3
    $table->integer('stok');              // Field 4
    $table->text('deskripsi');           // Field 5
    $table->string('gambar');             // Field 6 (URL/Path gambar)
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plants');
    }
};
