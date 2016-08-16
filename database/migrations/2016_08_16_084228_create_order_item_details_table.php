<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_item_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('orderId')->unsigned();
            $table->integer('itemId')->unsigned();
            $table->string('itemType');
            $table->float('quantity');
            $table->float('itemTotal');
            $table->float('salesRate');
            $table->float('itemCount');
            $table->string('payment');
            $table->foreign('orderId')
                  ->references('id')->on('orders')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');
            $table->foreign('itemId')
                  ->references('id')->on('items')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');
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
        Schema::drop('order_item_details');
    }
}