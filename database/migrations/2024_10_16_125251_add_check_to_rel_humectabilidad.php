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
        Schema::table('rel_humectabilidad', function (Blueprint $table) {
            $table->string('check_humectabilidad')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rel_humectabilidad', function (Blueprint $table) {
            $table->dropColumn(['check_humectabilidad']);
        });
    }
};
