<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_penjualans', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->integer('data_pembelians_id');
            $table->date('tanggal');
            $table->string('nama_pembeli');
            $table->string('id_barang');
            $table->integer('banyak');
            $table->integer('id_harga');
            $table->integer('total');
            $table->integer('modal');
            $table->integer('untung');
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
        Schema::dropIfExists('data_penjualans');
    }
}
