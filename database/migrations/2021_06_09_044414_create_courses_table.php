<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->unsignedBigInteger('school_id');
            $table->unsignedBigInteger('gradelevels_id');
            $table->string('course_name');
            $table->string('short_name');
            $table->integer('point');

            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');;
            $table->foreign('gradelevels_id')->references('id')->on('grade_levels')->onDelete('cascade');;


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
