<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCartsItem extends Migration
{
    public function up()
    {
        Schema::create('cart_items', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('cart_id')->nullable();
            $table->foreign('cart_id')->references('id')->on('carts');
            $table->unsignedInteger('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('products');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('cart_items');
    }
}
