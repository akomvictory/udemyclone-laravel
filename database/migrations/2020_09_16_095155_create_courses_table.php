<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('course_title');
            $table->string('course_type');
            $table->string('course_category');
            $table->string('course_moderator');
            $table->string('course_price');
            $table->text('course_description');
            $table->string('course_photo');
            $table->string('course_demo_video');
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
        Schema::dropIfExists('courses');
    }
}
