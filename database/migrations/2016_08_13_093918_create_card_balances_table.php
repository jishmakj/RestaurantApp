<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardBalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_balances', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cardId')->unsigned();
            $table->float('mainBalance');
            $table->float('bonusBalance');
            $table->float('bonusPoints');
            $table->string('activationDate');
            $table->string('lastTransactionDate');
            $table->string('expiryDate');
            $table->string('activeStatus')->default(1);
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
        Schema::drop('card_balances');
    }
}
