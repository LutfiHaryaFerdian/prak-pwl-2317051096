<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('tindak_lanjut', function (Blueprint $table) {
            $table->id('id_tindaklanjut');
            $table->foreignId('id_aduan')->constrained('aduan', 'id_aduan')->onDelete('cascade');
            $table->foreignId('id_pic')->constrained('pic_units', 'id_pic')->onDelete('cascade');
            $table->text('catatan')->nullable();
            $table->enum('progres', ['Menunggu Antrian', 'Sedang Dikerjakan', 'Selesai'])->default('Menunggu Antrian');
            $table->timestamp('tanggal')->nullable();
        });
    }

    public function down(): void {
        Schema::dropIfExists('tindak_lanjut');
    }
};
