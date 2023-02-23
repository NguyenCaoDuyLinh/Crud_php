<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('User_Id');
            $table->string('User_role');   
            $table->string('Email')->unique();
            $table->string('Password');
            $table->string('Last_name');
            $table->string('First_name');
            $table->string('Address');
            $table->string('Phonenumber');
            $table->string('Verification_Code');
            $table->string('Verified');
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
        Schema::dropIfExists('users');
    }
};
