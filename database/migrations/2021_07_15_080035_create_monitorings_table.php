<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonitoringsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitorings', function (Blueprint $table) {
            $table->id('id');
            $table->date('tanggal');
            $table->string('Poktan');
            $table->string('komoditas');
            $table->integer('kadar_air');
            $table->integer('suhu_tanah');
            $table->string('ph');
            $table->string('subur');
            $table->integer('kelembaban');
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
        Schema::drop('monitorings');
    }
}
