<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotaTanisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota_tani', function (Blueprint $table) {
            $table->id();
            $table->string('nama_petani', 200);
            $table->integer('nohp');
            $table->string('jabatan', 100);
            $table->bigInteger('lahan_id');
            $table->string('nama_kelompok', 100);
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
        Schema::dropIfExists('anggota_tani');
    }
}
