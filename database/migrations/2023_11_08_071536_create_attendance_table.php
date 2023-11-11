<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceTable extends Migration
{
    public function up()
    {
        Schema::create('attendance', function (Blueprint $table) {
            $table->id('id')->unsigned();
            $table->bigInteger('student_id')->unsigned()->notNullable();
            $table->string('name');
            $table->time('start_time');
            $table->time('end_time');
            $table->enum('status', ['hadir', 'izin', 'sakit', 'alpha'])->notNullable();
            $table->timestamps();
            $table->index('student_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('attendance');
    }
}
