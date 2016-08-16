<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('orderId')->unique();
            $table->string('orderTotal');
            $table->string('cardNo')->nullable();
            $table->string('totalItemsCount');
            $table->integer('primaryItem')->unsigned();
            $table->integer('extraItem')->unsigned();
            $table->integer('modifierItem')->unsigned();
            $table->integer('locationId')->unsigned();
            $table->string('time');
            $table->string('date');
            $table->foreign('primaryItem')
                  ->references('id')->on('items')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');
            $table->foreign('extraItem')
                  ->references('id')->on('extras')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');
            $table->foreign('modifierItem')
                  ->references('id')->on('modifiers')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');   
            $table->foreign('locationId')
                  ->references('id')->on('locations')
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
        Schema::drop('orders');
    }
}