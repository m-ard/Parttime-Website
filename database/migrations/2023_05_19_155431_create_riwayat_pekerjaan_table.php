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
        Schema::create('riwayat_pekerjaan', function (Blueprint $table) {
            $table->id('id_riwayat_pekerjaan', 5);
            $table->unsignedBigInteger('id_pengguna')->unique();
            $table->foreign('id_pengguna')->references('id_pengguna')->on('pengguna')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama_perusahaan', 30);
            $table->string('posisi', 15);
            $table->string('keterangan', 100);
            $table->year('tahun_masuk');
            $table->year('tahun_keluar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_pekerjaan');
    }
};
