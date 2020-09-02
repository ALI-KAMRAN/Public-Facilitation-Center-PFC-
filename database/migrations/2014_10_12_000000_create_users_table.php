<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
           
            $table->string('avatar')->nullable();
            $table->string('phone_number')->unique();
            $table->string('email')->unique();
            // $table->string('role')->unique();
           
            $table->timestamp('email_verified_at');
           
            
            $table->string('password');
            // $table->unsignedTinyInteger('role_id');
            $table->rememberToken();
            $table->timestamps();
            // $table->timestamp('deleted_at')->nullable();
            // $table->foreign('role_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}