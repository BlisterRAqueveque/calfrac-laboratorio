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
        Schema::create('rel_agua_libre_solicitud_ensayo', function (Blueprint $table) {
            $table->id();
            $table->integer('agua_libre')->nullable();
            $table->integer('volumen')->nullable();
            $table->integer('api_agua_libre')->nullable();
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
        Schema::dropIfExists('rel_agua_libre_solicitud_ensayo');
    }
};
