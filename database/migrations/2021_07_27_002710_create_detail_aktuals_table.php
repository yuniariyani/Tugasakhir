<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailAktualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_aktual', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('aktual_id');
            $table->date('tgl');
            $table->string('Item', 200);
            $table->string('sub_item', 200);
            $table->integer('cost_day');
            $table->integer('quantity');
            $table->integer('total');
            $table->string('foto');
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
        Schema::dropIfExists('detail_aktual');
    }
}
