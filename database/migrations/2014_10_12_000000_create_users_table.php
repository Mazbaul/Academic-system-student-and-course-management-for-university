<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('parmanent_address');
            $table->string('mailing_address');
            $table->string('studentid')->unique();
            $table->string('email')->unique();
            $table->integer('mobile_number');
            $table->string('password');
            $table->string('academicssn');
            $table->integer('department_id')->unsigned();
            $table->boolean('status');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('subjects', function ($table){
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
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
