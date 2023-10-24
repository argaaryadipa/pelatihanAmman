<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->bigIncrements('id_transaksi');
            $table->string('invoice')->unique();
            $table->date('tanggal_transaksi');
            $table->string('kode_barang');
            $table->string('kode_kasir');
            $table->timestamps();

            // foreign key
            $table->foreign('kode_barang')->references('kode_barang')->on('barang');
            $table->foreign('kode_kasir')->references('kode_kasir')->on('kasir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}
