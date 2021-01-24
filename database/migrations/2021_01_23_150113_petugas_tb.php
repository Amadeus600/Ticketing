<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PetugasTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petugas', function (Blueprint $table)
        {
            $table->id('id_petugas');
            $table->string('username');
            $table->string('password');
            $table->string('nama_petugas');
            $table->unsignedBigInteger('id_level');
            $table->timestamps();

        });

        Schema::table('pemesanan', function (Blueprint $table)
        {
            $table->foreign('id_petugas')->references('id_petugas')->on('petugas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('petugas');
    }
}
