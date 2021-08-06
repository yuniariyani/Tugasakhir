<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_cost', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('costbaseline_id');
            $table->string('Item', 200);
            $table->string('sub_item', 200);
            $table->integer('cost_day');
            $table->integer('cost_hour');
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
        Schema::dropIfExists('detail_cost');
    }
}
