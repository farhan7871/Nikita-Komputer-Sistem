<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPembeliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pembelians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tanggal');
            $table->integer('id_toko');
            // $table->string('nama_toko');
            $table->integer('id_barang');
            // $table->string('nama_barang');
            $table->integer('banyak');
            $table->integer('harga');
            $table->integer('total');
            $table->integer('jual');
            $table->softDeletes();
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
        Schema::dropIfExists('data_pembelians');
        Schema::table('datapembelians', function (Blueprint $table) {
            $table->dropColumn('jual');
        });
    }
}
