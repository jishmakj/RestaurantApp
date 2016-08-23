<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tableId')->unique();
            $table->string('name');
            $table->integer('floorId')->unsigned();            
            $table->foreign('floorId')
                  ->references('id')->on('floors')
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
        Schema::drop('tables');
    }
}