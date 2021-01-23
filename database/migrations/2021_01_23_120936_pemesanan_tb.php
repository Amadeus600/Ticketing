<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PemesananTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('pemesanans', function (Blueprint $table)
       {
           $table->increments('id_pemesanan');
           $table->string('kode_pemesanan');
           $table->date('tanggal_pemesanan');
           $table->string('tempat_pemesanan');
           $table->integer('id_pelanggan');
           $table->string('kode_kursi');
           $table->integer('id_rute');
           $table->string('tujuan');
           $table->date('tanggal_berangkat');
           $table->time('jam_cekin');
           $table->time('jam_berangkat');
           $table->string('total_bayar');
           $table->integer('id_petugas');
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
