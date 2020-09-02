<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DocumentsVerification extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents_verification', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('applicant_name');
            $table->string('father_name');
            $table->string('cnic');
            $table->string('address');
            $table->string('email_address');
            $table->string('cell_number');
            $table->string('birthday');
            $table->string('gender');
            $table->string('purpose');
            $table->string('documents_detail');
            $table->string('district');
            $table->string('quantity');
            $table->string('receipt');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents_verification');
    }
}
