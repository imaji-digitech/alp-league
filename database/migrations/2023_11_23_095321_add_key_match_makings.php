<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKeyMatchMakings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('match_makings', function (Blueprint $table) {
            $table->string('key')->nullable();
            $table->string('reference_to')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('match_makings', function (Blueprint $table) {
            $table->dropColumn('key','reference_to');
        });
    }
}
