<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilPanensTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_panens', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama_kelompok');
            $table->string('blok_lahan');
            $table->string('komoditas');
            $table->integer('jumlah_berhasil');
            $table->integer('jumlah_gagal');
            $table->string('satuan');
            $table->date('tanggal_panen');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hasil_panens');
    }
}
