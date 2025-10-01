<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('aduan', function (Blueprint $table) {
            $table->id('id_aduan');
            $table->foreignId('id_mahasiswa')->constrained('mahasiswa', 'id_mahasiswa')->onDelete('cascade');
            $table->string('judul', 100);
            $table->text('deskripsi');
            $table->string('kategori', 100);
            $table->enum('status', ['Menunggu', 'Diverifikasi', 'Ditolak', 'Diproses', 'Selesai'])->default('Menunggu');
            $table->string('nomor_tiket', 100)->unique();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('aduan');
    }
};
