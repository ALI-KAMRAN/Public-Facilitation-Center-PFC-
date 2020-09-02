<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUseresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('useres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('lname');
            $table->string('email');
            $table->string('password');
            $table->string('conpassword');
            $table->string('contact');
            $table->string('city');
            $table->string('country');
            $table->string('birth');
            $table->string('gender');
        
            $table->binary('image');

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
        Schema::dropIfExists('useres');
    }
}
