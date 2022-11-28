<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchMakings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_makings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('school1_id');
            $table->unsignedBigInteger('school2_id');
            $table->unsignedBigInteger('sport_id');
            $table->date('date_match');
            $table->string('supervisor');
            $table->timestamps();

            $table->foreign('school1_id')
                ->references('id')
                ->on('schools')
                ->cascadeOnUpdate()
                ->restrictOnDelete();

            $table->foreign('school2_id')
                ->references('id')
                ->on('schools')
                ->cascadeOnUpdate()
                ->restrictOnDelete();

            $table->foreign('sport_id')
                ->references('id')
                ->on('sports')
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
        Schema::dropIfExists('match_makings');
    }
}
