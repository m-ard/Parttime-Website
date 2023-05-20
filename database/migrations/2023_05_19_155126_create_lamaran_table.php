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
        Schema::create('lamaran', function (Blueprint $table) {
            $table->id('id_lamaran', 6);
            $table->unsignedBigInteger('id_pengguna')->unique();
            $table->foreign('id_pengguna')->references('id_pengguna')->on('pengguna');
            $table->unsignedBigInteger('id_lowongan_pekerjaan')->unique();
            $table->foreign('id_lowongan_pekerjaan')->references('id_lowongan_pekerjaan')->on('lowongan_pekerjaan');
            $table->string('status', 50);
            $table->string('keterangan', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lamaran');
    }
};
