<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance_codes', function (Blueprint $table) {
            $table->id();
            $table->year('school_year');
            $table->string('title');
            $table->string('short_name');
            $table->string('type');
            $table->string('state_code');
            $table->string('default_code');
            $table->unsignedBigInteger('school_id');
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
        Schema::dropIfExists('attendance_codes');
    }
}
