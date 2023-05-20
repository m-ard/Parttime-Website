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
        Schema::create('perusahaan', function (Blueprint $table) {
            $table->id('id_perusahaan', 6);
            $table->string('alamat', 100);
            $table->string('nama_perusahaan', 50);
            $table->string('no_perusahaan', 15);
            $table->string('email_perusahaan', 30);
            $table->string('jenis', 50);
            $table->integer('jumlah_pekerja', 10)->change();
            $table->string('keterangan', 200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perusahaan');
    }
};
