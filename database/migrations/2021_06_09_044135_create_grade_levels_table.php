<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradeLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grade_levels', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('short_name')->nullable();
            $table->integer('next_grade');
            $table->unsignedBigInteger('school_id')->nullable();
            $table->foreign('school_id', 'school_fk_3230822')->references('id')->on('schools');

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
        Schema::dropIfExists('grade_levels');
    }
}
