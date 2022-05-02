<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_detail', function (Blueprint $table) {
            $table->bigIncrements('detail_id');
            $table->bigInteger('order_id')->unsigned();
            $table->foreign('order_id')->references('id')->on('order');
            $table->bigInteger('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('product');
            $table->integer('unit_price');
            $table->integer('quantity');
            $table->integer('total_price');
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
        Schema::dropIfExists('order_detail');
    }
}
