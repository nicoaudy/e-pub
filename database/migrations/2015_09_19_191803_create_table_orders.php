<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrders extends Migration
{

    public function up()
    {
        Schema::create('orders', function(Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('total_paid');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('orders');
    }
}
