<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relation_group', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kelompok',200);
            $table->integer('total_anggota');
            $table->string('wilayah_lahan',100);
            $table->string('alamat_lahan',200);
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
        Schema::dropIfExists('relation_group');
    }
}
