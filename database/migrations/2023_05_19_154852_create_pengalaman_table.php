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
        Schema::create('pengalaman', function (Blueprint $table) {
            $table->id('id_pengalaman', 4);
            $table->unsignedBigInteger('id_pengguna')->unique();
            $table->foreign('id_pengguna')->references('id_pengguna')->on('pengguna')->onDelete('cascade')->onUpdate('cascade');
            $table->string('kegiatan', 100);
            $table->year('tahun');
            $table->string('keterangan', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengalaman');
    }
};
