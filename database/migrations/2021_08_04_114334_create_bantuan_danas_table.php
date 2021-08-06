<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBantuanDanasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bantuan_dana', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('relation_group_id');
            $table->string('kode_bantuan', 200);
            $table->string('kategori_bantuan', 200);
            $table->string('nama_bantuan', 200);
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
        Schema::dropIfExists('bantuan_dana');
    }
}
