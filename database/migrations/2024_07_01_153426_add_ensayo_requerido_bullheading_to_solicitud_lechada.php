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
        Schema::table('solicitud_lechada', function (Blueprint $table) {
            $table->tinyInteger('ensayo_requerido_bullheading')->nullable()->default(0)->comment('1: Se necesita el Ensayo bullheading | 0: No se necesita');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('solicitud_lechada', function (Blueprint $table) {
            $table->dropColumn('ensayo_requerido_bullheading');
        });
    }
};
