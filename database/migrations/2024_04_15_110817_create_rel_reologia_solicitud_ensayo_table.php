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
        Schema::create('rel_reologia_solicitud_ensayo', function (Blueprint $table) {
            $table->id();
            
            $table->integer('tem_ambiente_rpm')->nullable();
            $table->integer('tem_ambiente_300')->nullable();
            $table->integer('tem_ambiente_200')->nullable();
            $table->integer('tem_ambiente_100')->nullable();
            $table->integer('tem_ambiente_60')->nullable();
            $table->integer('tem_ambiente_30')->nullable();
            $table->integer('tem_ambiente_6')->nullable();
            $table->integer('tem_ambiente_3')->nullable();
            $table->integer('tem_ensayo_rpm')->nullable();
            $table->integer('tem_ensayo_300')->nullable();
            $table->integer('tem_ensayo_200')->nullable();
            $table->integer('tem_ensayo_100')->nullable();
            $table->integer('tem_ensayo_60')->nullable();
            $table->integer('tem_ensayo_30')->nullable();
            $table->integer('tem_ensayo_6')->nullable();
            $table->integer('tem_ensayo_3')->nullable();
            $table->integer('temp_ambiente')->nullable();
            $table->integer('temp_ensayo')->nullable();
            $table->integer('temp_ambiente_punto_cedencia')->nullable();
            $table->integer('temp_ensayo_punto_cedencia')->nullable();
            $table->integer('temp_ambiente_gel_10_seg')->nullable();
            $table->integer('temp_ensayo_gel_10_seg')->nullable();
            $table->integer('temp_ambiente_gel_10_min')->nullable();
            $table->integer('temp_ensayo_gel_10_min')->nullable();
            $table->unsignedBigInteger('ensayo_id')->nullable();
            $table->foreign('ensayo_id')->references('id')->on('ensayos');
            $table->unsignedBigInteger('solicitud_lechada_id')->nullable();
            $table->foreign('solicitud_lechada_id')->references('id')->on('solicitud_lechada');
            $table->tinyInteger('selected')->default(0)->comment('1: Seleccionado para el reporte | 0: No seleccionado');
            $table->foreignId('usuario_carga')->references('id')->on('users');
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
        Schema::dropIfExists('rel_reologia_solicitud_ensayo');
    }
};
