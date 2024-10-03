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
        Schema::create('rel_aditivos_ensayos_lodo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('solicitud_lodo_id')->references('id')->on('solicitud_lodo');
            $table->string('lote')->nullable();
            $table->string('aditivo')->nullable();
            $table->string('comentario')->nullable();
            $table->string('concentracion')->nullable();
            $table->string('unidad')->nullable();
            $table->boolean('check')->default(1);
            $table->tinyInteger('selected')->default(0)->comment('1: Seleccionado para el reporte | 0: No seleccionado');
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
        Schema::dropIfExists('rel_aditivos_ensayos_lodo');
    }
};
