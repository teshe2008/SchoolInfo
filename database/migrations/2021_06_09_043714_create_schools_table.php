<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('name');
                $table->longText('description')->nullable();
                $table->string('location')->nullable();
                $table->string('principal')->nullable();
                $table->string('tagline')->nullable();
                $table->string('telephone');
                $table->string('address')->nullable();
                $table->string('state')->nullable();
                $table->string('website');
                $table->string('email')->nullable();
                $table->date('start_date');
                $table->date('end_date');
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
        Schema::dropIfExists('schools');
    }
}
