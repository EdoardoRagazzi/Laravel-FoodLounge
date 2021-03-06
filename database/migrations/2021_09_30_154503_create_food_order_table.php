<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodOrderTable extends Migration
{

    public function up()
    {
        Schema::create('food_order', function (Blueprint $table) {
            $table->unsignedBigInteger('food_id');
            $table->foreign('food_id')->references('id')->on('foods');

            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders');

            $table->integer('food_units');
            $table->primary(['food_id', 'order_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('food_order');
    }
}
