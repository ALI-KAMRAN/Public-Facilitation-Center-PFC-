<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLawsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laws', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('lname');
            $table->string('email');
            $table->string('password');
            $table->string('conpassword');
            $table->string('contact');
            $table->string('education');
            $table->string('city');
            $table->string('country');
            $table->string('birth');
            $table->string('gender');
            $table->string('lawyerType');
            $table->string('image');
            $table->string('experience');
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
        Schema::dropIfExists('laws');
    }
}
