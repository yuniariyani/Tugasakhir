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
            $table->id();
            $table->BigInteger('relation_group_id');
            $table->string('nama_blok',100);
            $table->integer('luas_blok');
            $table->string('komoditas',100);
            $table->date('tanggal_tanam');
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
