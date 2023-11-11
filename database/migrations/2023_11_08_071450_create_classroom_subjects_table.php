<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassroomSubjectsTable extends Migration
{
    public function up()
    {
        Schema::create('classroom_subjects', function (Blueprint $table) {
            $table->id('id')->unsigned();
            $table->enum('day', ['senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu']);
            $table->smallInteger('index')->default(1)->comment('urutan jam');
            $table->bigInteger('teacher_id')->unsigned()->notNullable();
            $table->bigInteger('subject_id')->unsigned()->notNullable();
            $table->bigInteger('classroom_id')->unsigned()->notNullable();
            $table->time('start_time');
            $table->time('end_time');
            $table->timestamps();
            $table->index(['teacher_id', 'subject_id', 'classroom_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('classroom_subjects');
    }
}
