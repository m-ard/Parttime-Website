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
        Schema::create('lowongan_pekerjaan', function (Blueprint $table) {
            $table->id('id_lowongan_pekerjaan',6);
            $table->unsignedBigInteger('id_perusahaan')->unique();
            $table->foreign('id_perusahaan')->references('id_perusahaan')->on('perusahaan')->onDelete('cascade')->onUpdate('cascade');
            $table->string('posisi', 30);
            $table->integer('gaji', 20)->change();
            $table->string('alamat', 50);
            $table->string('status_kerja', 20);
            $table->string('penempatan', 30);
            $table->string('pendidikan', 30);
            $table->integer('usia', 3)->change();
            $table->string('jenis_kelamin', 15);
            $table->string('pengalaman', 50);
            $table->string('deskripsi', 500);
            $table->string('hari_kerja', 20);
            $table->string('jam_kerja', 20);
            $table->date('tanggal_buka');
            $table->date('tanggal_tutup');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lowongan_pekerjaan');
    }
};
