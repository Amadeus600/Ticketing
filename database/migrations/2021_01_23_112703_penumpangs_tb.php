<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PenumpangsTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penumpang', function (Blueprint $table)
        {
            $table->id('id_penumpang');
            $table->string('username');
            $table->string('password');
            $table->string('nama_penumpang');
            $table->date('tanggal_lahir');
            $table->boolean('jenis_kelamin');
            $table->string('telephone');
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
        Schema::dropIfExists('penumpang');
    }
}
