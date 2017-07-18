<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders',function(Blueprint $table){
          $table->increments('id');
          $table->integer('user_id')->unsigned();
          $table->integer('food_id')->unsigned();
          $table->string('food_order');
          $table->integer('drink_id')->unsigned();
          $table->string('drink_order');
          $table->integer('dessert_id')->unsigned();
          $table->string('dessert_order');
          $table->timestamps();
          $table->softDeletes();

          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
          $table->foreign('food_id')->references('id')->on('foods')->onDlete('cascade')->onUpdate('cascade');
          $table->foreign('drink_id')->references('id')->on('drinks')->onDelete('cascade')->onUpdate('cascade');
          $table->foreign('dessert_id')->references('id')->on('desserts')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
