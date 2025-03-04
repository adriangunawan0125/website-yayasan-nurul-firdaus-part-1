<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('gambar_jadwal_ppdb', function (Blueprint $table) {
            $table->id();
            $table->string('gambar'); // Simpan path gambar
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gambar_jadwal_ppdb');
    }
};
