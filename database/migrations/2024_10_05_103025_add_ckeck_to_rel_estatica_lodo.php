<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rel_estatica_lodo', function (Blueprint $table) {
            $table->string('remocion_estatica')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rel_estatica_lodo', function (Blueprint $table) {
            $table->dropColumn(['remocion_estatica']);
        });
    }
};
