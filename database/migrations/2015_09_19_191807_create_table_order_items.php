<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrderItems extends Migration
{

    public function up()
    {
        Schema::create('order_items', function(Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('order_id')->nullable();
            $table->foreign('order_id')->references('id')->on('orders');
            $table->unsignedInteger('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('products');
            $table->unsignedInteger('file_id')->nullable();
            $table->foreign('file_id')->references('id')->on('files');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::drop('order_items');
    }
}
