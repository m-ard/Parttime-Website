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
        Schema::create('penghargaan', function (Blueprint $table) {
            $table->id('id_penghargaan', 4);
            $table->unsignedBigInteger('id_pengguna')->unique();
            $table->foreign('id_pengguna')->references('id_pengguna')->on('pengguna')->onDelete('cascade')->onUpdate('cascade');
            $table->year('tahun', 4);
            $table->string('jenis', 15);
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
        Schema::dropIfExists('penghargaan');
    }
};
