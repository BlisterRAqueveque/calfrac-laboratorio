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
            $table->tinyInteger('ensayo_requerido_tapon')->nullable()->default(0)->comment('1: Se necesita el Ensayo tapon | 0: No se necesita');
            $table->tinyInteger('tiempo_1000_psi')->nullable();
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
            //
        });
    }
};
