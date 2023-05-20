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
        Schema::create('pengguna', function (Blueprint $table) {
            $table->id('id_pengguna', 6);
            $table->string('nama', 30);
            $table->date('ttl');
            $table->string('jenis_kelamin', 10);
            $table->float('tinngi', 4);
            $table->float('bb', 4);
            $table->string('agama', 10);
            $table->string('kebangsaan', 20);
            $table->string('status', 15);
            $table->string('alamat', 225);
            $table->string('no_hp', 15);
            $table->string('email', 30);
            $table->string('password', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengguna');
    }
};
