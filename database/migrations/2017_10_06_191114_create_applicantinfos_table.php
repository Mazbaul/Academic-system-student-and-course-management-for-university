<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('applicantinfos', function (Blueprint $table) {
          $table->increments('id');
          $table->string('applicationtype_id');
          $table->integer('department_id');
          $table->integer('user_id');
          $table->integer('exam_year');
          $table->integer('cgpa');
          $table->integer('result_publication_date');
          $table->integer('total_credite');
          $table->integer('completed_credite');
          $table->integer('date_of_birth');
          $table->timestamps();
      });

      Schema::table('applicantinfos', function ($table){
          $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
          $table->foreign('applicationtype_id')->references('id')->on('applicationtypes')->onDelete('cascade');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::dropIfExists('applicantinfos');
    }
}
