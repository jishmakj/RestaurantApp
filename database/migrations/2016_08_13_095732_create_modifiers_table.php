<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModifiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modifiers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('modifierId')->unique();
            $table->integer('item')->unsigned();
            $table->string('modifierName');
            $table->string('shortName');
            $table->string('description');
            $table->float('salesRate');
            $table->foreign('item')
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
        Schema::drop('modifiers');
    }
}
