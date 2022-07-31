<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Genders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
            Schema::create('genders', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamp('deleted_at')->nullable();
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
        //
    }
}