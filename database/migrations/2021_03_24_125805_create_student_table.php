<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->id('student_id');
            $table->Text('student_email');
            $table->Text('student_password');
            $table->Text('student_picture');
            $table->Text('student_firstname');
            $table->Text('student_middlename');
            $table->Text('student_lastname');
            $table->integer('order_value');
            $table->foreignId('drinks_id');
            $table->foreignId('food_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student');
    }
}
