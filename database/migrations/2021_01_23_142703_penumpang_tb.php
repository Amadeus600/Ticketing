<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PenumpangTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penumpangs', function (Blueprint $table)
        {
            $table->increments('id_penumpang');
            $table->string('username');
            $table->string('password');
            $table->string('nama_penumpang');
            $table->date('tanggal_lahir');
            $table->boolean('jenis_kelamin');
            $table->string('telephone');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
