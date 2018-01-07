\<?php

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
          $table->string('atas_nama');
          $table->string('nomor_meja');
          $table->string('status');
          $table->string('total_pembayaran')->default(0);
          $table->timestamps();
          $table->softDeletes();

          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
