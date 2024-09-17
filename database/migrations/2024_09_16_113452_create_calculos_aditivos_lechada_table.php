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
        Schema::create('calculos_aditivos_lechada', function (Blueprint $table) {
            $table->id();
            $table->float('densidad_ensayo')->nullable();
            $table->float('rendimiento_ensayo')->nullable();
            $table->float('bolsa_ensayo')->nullable();
            $table->float('ppg_ensayo')->nullable();
            $table->float('ft_bolsa')->nullable();
            $table->float('req_agua')->nullable();
            $table->foreignId('solicitud_lechada_id')->references('id')->on('solicitud_lechada')->nullable();
            $table->foreignId('aditivo_id')->references('id')->on('rel_aditivos_ensayos_lechada')->nullable();
            $table->foreignId('usuario_carga')->references('id')->on('users')->nullable();
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
        Schema::dropIfExists('calculos_aditivos_lechada');
    }
};
