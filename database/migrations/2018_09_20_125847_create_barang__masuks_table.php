<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangMasuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang__masuks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tanggal');
            $table->string('no_nota');
            $table->integer('id_supplier');
            $table->integer('kode_barang');
            $table->string('nm_barang');
            $table->string('stok');
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
        Schema::dropIfExists('barang__masuks');
    }
}
