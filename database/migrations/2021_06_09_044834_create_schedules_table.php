<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
             $table->unsignedBigInteger('course_period_id');
            $table->unsignedBigInteger('assign_room_id');
            $table->unsignedBigInteger('weekday_id');
            $table->unsignedBigInteger('period_id');
            $table->boolean('home_room_teacher')->default(0)->nullable();

            $table->foreign('course_period_id')->references('course_period_id')->on('course__periods');
            $table->foreign('assign_room_id')->references('id')->on('assign_room_grades');
            $table->foreign('weekday_id')->references('id')->on('weekdays');
            $table->foreign('period_id')->references('p_id')->on('periods');

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
        Schema::dropIfExists('schedules');
    }
}
