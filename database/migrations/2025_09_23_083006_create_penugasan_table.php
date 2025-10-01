<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('penugasan', function (Blueprint $table) {
            $table->id('id_penugasan');
            $table->foreignId('id_admin')->constrained('admin', 'id_admin')->onDelete('cascade');
            $table->foreignId('id_aduan')->constrained('aduan', 'id_aduan')->onDelete('cascade');
            $table->foreignId('id_pic')->constrained('pic_units', 'id_pic')->onDelete('cascade');
            $table->timestamp('tanggal_ditugaskan')->nullable();
            $table->integer('estimasi_hari')->nullable();
        });
    }

    public function down(): void {
        Schema::dropIfExists('penugasan');
    }
};
