<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificateDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificate_details', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('certificate_id');
            $table->timestamps();

            $table->foreign('student_id')
                ->references('id')
                ->on('students')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();$table->foreign('certificate_id')
                ->references('id')
                ->on('certificates')
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
        Schema::dropIfExists('certificate_details');
    }
}
