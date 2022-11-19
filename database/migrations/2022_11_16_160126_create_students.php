<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nisn');
            $table->string('place_birth');
            $table->string('date_birth');
            $table->string('mother_name');
            $table->string('report');
            $table->unsignedBigInteger('sport_id');
            $table->unsignedBigInteger('school_id');
            $table->timestamps();

            $table->foreign('sport_id')
                ->references('id')
                ->on('sports')
                ->cascadeOnUpdate()
                ->restrictOnDelete();
            $table->foreign('school_id')
                ->references('id')
                ->on('schools')
                ->cascadeOnUpdate()
                ->restrictOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
