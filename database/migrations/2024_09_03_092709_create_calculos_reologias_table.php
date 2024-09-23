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
        Schema::create('calculos_reologias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reologia_id')->constrained('rel_reologia_solicitud_ensayo')->nullable();
            $table->foreignId('solicitud_id')->constrained('solicitud_lechada')->nullable();
            $table->float('tem_ambiente_300_cociente')->nullable();
            $table->float('tem_ambiente_200_cociente')->nullable();
            $table->float('tem_ambiente_100_cociente')->nullable();
            $table->float('tem_ambiente_60_cociente')->nullable();
            $table->float('tem_ambiente_30_cociente')->nullable();
            $table->float('tem_ambiente_6_cociente')->nullable();
            $table->float('tem_ambiente_3_cociente')->nullable();
            $table->float('tem_ambiente_300_promedio')->nullable();
            $table->float('tem_ambiente_200_promedio')->nullable();
            $table->float('tem_ambiente_100_promedio')->nullable();
            $table->float('tem_ambiente_60_promedio')->nullable();
            $table->float('tem_ambiente_30_promedio')->nullable();
            $table->float('tem_ambiente_6_promedio')->nullable();
            $table->float('tem_ambiente_3_promedio')->nullable();
            $table->float('tem_ensayo_300_cociente')->nullable();
            $table->float('tem_ensayo_200_cociente')->nullable();
            $table->float('tem_ensayo_100_cociente')->nullable();
            $table->float('tem_ensayo_60_cociente')->nullable();
            $table->float('tem_ensayo_30_cociente')->nullable();
            $table->float('tem_ensayo_6_cociente')->nullable();
            $table->float('tem_ensayo_3_cociente')->nullable();
            $table->float('tem_ensayo_300_promedio')->nullable();
            $table->float('tem_ensayo_200_promedio')->nullable();
            $table->float('tem_ensayo_100_promedio')->nullable();
            $table->float('tem_ensayo_60_promedio')->nullable();
            $table->float('tem_ensayo_30_promedio')->nullable();
            $table->float('tem_ensayo_6_promedio')->nullable();
            $table->float('tem_ensayo_3_promedio')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calculos_reologias');
    }
};
