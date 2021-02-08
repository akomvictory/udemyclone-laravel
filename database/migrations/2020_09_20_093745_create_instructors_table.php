<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstructorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('instructor_name');
            $table->string('proffesion');
            $table->string('instructor_photo');
            $table->string('email');
            $table->string('phone_number');
            $table->text('instructor_bio');          
            $table->string('intructor_facebook_link');
            $table->string('instructor_twitter_link');
            $table->string('instructor_linkdin_link');
            $table->string('education_start_year');
            $table->string('education_end_year');
            $table->string('school_of_study');
            $table->string('decipline');
            $table->text('study_description');
            $table->string('work_start_year');
            $table->string('work_end_year');
            $table->string('work_position');
            $table->string('company_name');
            $table->text('job_description');
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
        Schema::dropIfExists('instructors');
    }
}
