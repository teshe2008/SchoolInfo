<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CoursePeriod extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('course_periods', function (Blueprint $table) {
            $table->id('course_period_id');
            $table->string('short_name');
            $table->unsignedBigInteger('school_year_id');
            $table->unsignedBigInteger('school_id');
            $table->unsignedBigInteger('teacher_id');
            $table->unsignedBigInteger('course_id');
            $table->foreign('school_year_id')->references('id')->on('school_years');
            $table->foreign('school_id')->references('id')->on('schools');
            $table->foreign('teacher_id')->references('id')->on('staff');
            $table->foreign('course_id')->references('id')->on('courses');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
