<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 200);
            $table->string('category', 50);
            $table->string('partner', 50);
            $table->string('description', 200);
            $table->integer('publish_status', $autoIncrement = false);
            $table->string('price', 10);
            $table->integer('featured', $autoIncrement = false);
            $table->integer('discount', $autoIncrement = false);
            $table->string('file_name', 80);
            $table->string('thumbnail', 80);
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
        Schema::drop('tb_product');
    }
}
