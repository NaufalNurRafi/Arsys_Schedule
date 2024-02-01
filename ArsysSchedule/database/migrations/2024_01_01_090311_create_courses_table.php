<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course');
            $table->string('itype');
            $table->string('section');
            $table->string('suffix');
            $table->string('date_pattern');
            $table->string('day');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('room');
            $table->string('instructor');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
