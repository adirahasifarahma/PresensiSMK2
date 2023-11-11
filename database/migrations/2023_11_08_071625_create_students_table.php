<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id('id')->unsigned();
            $table->bigInteger('classroom_id')->unsigned()->notNullable();
            $table->string('code')->unique()->notNullable();
            $table->string('name');
            $table->string('place_of_birth');
            $table->date('date_of_birth');
            $table->enum('gender', ['men', 'women']);
            $table->enum('religion', ['islam', 'kristen', 'katholik', 'hindu', 'budha', 'konghucu']);
            $table->text('address');
            $table->string('phone');
            $table->timestamps();
            $table->index('classroom_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
}
