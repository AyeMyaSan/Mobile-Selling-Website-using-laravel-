<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('User_ID')->unsigned();
            $table->foreign('User_ID')->references('id')->on('users');
            $table->string('Model');
            $table->string('Category');
            $table->string('Brand');
            $table->string('ScreenSize');
            $table->string('Resolution',100);
            $table->string('CPU');
            $table->string('GPU');
            $table->string('OS');
            $table->string('RAM');
            $table->string('Memory');
            $table->string('Camera')->nullable();
            $table->string('Battery');
            $table->string('Color')->nullable();
            $table->string('Other_Feactures')->nullable();
            $table->string('Price');
            $table->string('Image');
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
        Schema::dropIfExists('product');
    }
}
