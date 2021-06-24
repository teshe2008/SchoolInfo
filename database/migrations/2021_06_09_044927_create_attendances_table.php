<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('school_id');
            $table->unsignedBigInteger('stud_id');
            $table->date('school_date');
            $table->unsignedBigInteger('attendance_code');
            $table->string('attendance_reason');
            $table->unsignedBigInteger('course_period_id');
            $table->year('school_year');
            $table->unsignedBigInteger('assign_room');
            $table->string('comment');
            $table->foreign('school_id')->references('id')->on('schools');
            $table->foreign('assign_room')->references('id')->on('assign_room_grades');
            $table->foreign('stud_id')->references('id')->on('students');

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
        Schema::dropIfExists('attendances');
    }
}
