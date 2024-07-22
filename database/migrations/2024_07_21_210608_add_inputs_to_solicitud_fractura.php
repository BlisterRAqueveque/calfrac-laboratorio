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
        Schema::table('solicitud_fractura', function (Blueprint $table) {
            $table->string('base_guar')->nullable();
            $table->string('base_hvfr')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('solicitud_fractura', function (Blueprint $table) {
            $table->dropColumn([
                'base_guar',
                'base_hvfr',
            ]);
        });
    }
};
