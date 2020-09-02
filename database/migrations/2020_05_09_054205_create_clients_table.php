<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('lname');
            $table->string('email');
            $table->string('password');
            $table->string('cpassword');
            $table->string('contact');
            $table->string('education');
            $table->string('city');
            $table->string('country');
            $table->string('birth');
            $table->string('gender');
            $table->integer('age');
            $table->binary('image');
            $table->string('comment');
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
        Schema::dropIfExists('clients');
    }
}
