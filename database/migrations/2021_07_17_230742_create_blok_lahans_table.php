<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlokLahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blok_lahan', function (Blueprint $table) {
            $table->id('id_blok');
            $table->string('nama_kelompok',100);
            $table->string('nama_blok',100);
            $table->integer('luas_blok');
            $table->bigInteger('komoditas_id');
            $table->bigInteger('id_lahan');
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
        Schema::dropIfExists('blok_lahan');
    }
}
