<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderPlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_places', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userId')->nullable()->unsigned();
            $table->integer('cardId')->nullable()->unsigned();
            $table->foreign('userId')
                  ->references('id')->on('users')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');
            $table->foreign('cardId')
                  ->references('id')->on('card_details')
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
        Schema::drop('order_places');
    }
}
