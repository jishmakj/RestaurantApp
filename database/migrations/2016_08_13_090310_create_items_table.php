<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('itemId')->unique();
            $table->string('itemName');
            $table->string('description');
            $table->string('salesRate');
            $table->string('otherLang');
            $table->integer('categoryId')->unsigned();
            $table->integer('subCategoryId')->unsigned();
            $table->foreign('categoryId')
                  ->references('id')->on('categories')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');
            $table->foreign('subCategoryId')
                  ->references('id')->on('subcategories')
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
        Schema::drop('items');
    }
}
