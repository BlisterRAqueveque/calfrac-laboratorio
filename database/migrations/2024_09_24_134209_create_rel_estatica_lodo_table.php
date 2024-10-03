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
        Schema::create('rel_estatica_lodo', function (Blueprint $table) {
            $table->id();
            $table->float('tiempo_estatica_1')->nullable();
            $table->float('tiempo_estatica_2')->nullable();
            $table->float('tiempo_estatica_3')->nullable();
            $table->float('tiempo_estatica_4')->nullable();
            $table->float('tiempo_estatica_5')->nullable();
            $table->string('img_1')->nullable();
            $table->string('img_2')->nullable();
            $table->foreignId('solicitud_lodo_id')->references('id')->on('solicitud_lodo')->nullable();
            $table->foreignId('usuario_carga')->references('id')->on('users');
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
        Schema::dropIfExists('rel_estatica_lodo');
    }
};
