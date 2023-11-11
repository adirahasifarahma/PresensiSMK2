<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id('id'); // biginteger unsigned and primary key
            $table->bigInteger('user_id')->unique()->unsigned(); // user_id column with unique constraint
            $table->string('code')->unique(); // code column with unique constraint
            $table->string('name'); // name column
            $table->string('place_of_birth'); // place_of_birth column
            $table->date('date_of_birth'); // date_of_birth column
            $table->enum('gender', ['Perempuan', 'Laki-laki']); // gender column with genderEnum values
            $table->enum('religion', ['Islam', 'Kristen', 'Khatolik', 'Buddha', 'Hindu', 'Konghucu']); // religion column with religionEnum values
            $table->text('address'); // address column as text
            $table->string('phone'); // phone column
            $table->timestamps(); // created_at and updated_at timestamps

            $table->index('user_id'); // Index on user_id column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
