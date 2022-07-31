<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user')->nullable();
            $table->unsignedBigInteger('id_category')->nullable();
            $table->unsignedBigInteger('id_size')->nullable();
            $table->unsignedBigInteger('id_color')->nullable();
            $table->unsignedBigInteger('id_gender')->nullable();
            $table->unsignedBigInteger('id_brand')->nullable();
            $table->string('sku');
            $table->string('title');
            $table->string('description');
            $table->integer('price');
            $table->integer('stock');
            $table->boolean('state');
            $table->string('image');
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });
        Schema::table('product', function($table) {
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_category')->references('id')->on('category');
            $table->foreign('id_size')->references('id')->on('size');
            $table->foreign('id_color')->references('id')->on('color');
            $table->foreign('id_gender')->references('id')->on('gender');
            $table->foreign('id_brand')->references('id')->on('brand');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
