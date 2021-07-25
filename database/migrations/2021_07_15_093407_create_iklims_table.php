<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIklimsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iklims', function (Blueprint $table) {
            $table->id('id');
            $table->date('tanggal');
            $table->string('kelompok_tani');
            $table->string('komoditas');
            $table->string('cuaca');
            $table->string('suhu');
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
        Schema::drop('iklims');
    }
}
