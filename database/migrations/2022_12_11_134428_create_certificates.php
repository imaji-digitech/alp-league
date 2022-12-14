<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('sport_id')->nullable();
            $table->unsignedBigInteger('school_id');
            $table->timestamps();
            $table->foreign('sport_id')
                ->references('id')
                ->on('sports')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->foreign('school_id')
                ->references('id')
                ->on('schools')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificates');
    }
}
