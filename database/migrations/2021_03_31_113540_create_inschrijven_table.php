<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInschrijvenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inschrijven', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->foreign('id')->references('id')->on('users');
            $table->unsignedBigInteger('food_id');
            $table->foreign('food_id')->references('food_id')->on('food');
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
        Schema::dropIfExists('inschrijven');
    }
}
