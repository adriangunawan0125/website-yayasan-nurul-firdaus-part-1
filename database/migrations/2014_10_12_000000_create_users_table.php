<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->string('nisn', 10); // NISN memiliki panjang maksimal 10 digit
            $table->string('nama_lengkap');
            $table->string('no_kk', 16); // No KK disimpan sebagai string untuk mendukung panjang 16 digit
            $table->string('nik', 16); // NIK disimpan sebagai string untuk mendukung panjang 16 digit
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('email'); // Email tetap string
            $table->string('no_hp', 15); // No HP sebagai string untuk mendukung format seperti 08
            $table->text('alamat');
            $table->string('sekolah_asal');
            $table->text('prestasi')->nullable();
            $table->string('bukti_prestasi')->nullable();
            $table->enum('program_pilihan', ['MA', 'MTS']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftaran');
    }
};
