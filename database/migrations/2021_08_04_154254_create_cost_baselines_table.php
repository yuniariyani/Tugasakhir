<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostBaselinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cost_baseline', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('bantuan_dana_id');
            $table->string('item', 200);
            $table->string('sub_item', 200);
            $table->string('spesifikasi', 200);
            $table->integer('cost_day');
            $table->integer('quantity');
            $table->integer('total');
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
        Schema::dropIfExists('cost_baseline');
    }
}
