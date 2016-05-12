<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('item_tag', function(Blueprint $table){
            $table->increments('id');
            
            $table->integer('item_id');
//            $table->integer('item_id')->unsinged()->index();
           // $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
            
            $table->integer('tag_id');
           // $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('item_tag');
    }
}
