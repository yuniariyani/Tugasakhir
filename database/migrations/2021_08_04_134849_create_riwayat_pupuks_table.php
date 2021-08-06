<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatPupuksTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_pupuks', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama_kelompok');
            $table->string('blok_lahan');
            $table->string('komoditas');
            $table->date('tanggal_pupuk');
            $table->string('jenis_pupuk');
            $table->integer('dosis_pupuk');
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
        Schema::drop('riwayat_pupuks');
    }
}
