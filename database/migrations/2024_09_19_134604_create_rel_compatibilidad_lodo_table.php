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
        Schema::create('rel_compatibilidad_lodo', function (Blueprint $table) {
            $table->id();
            $table->float('vp_1')->nullable();
            $table->float('vp_2')->nullable();
            $table->float('vp_3')->nullable();
            $table->float('vp_4')->nullable();
            $table->float('vp_5')->nullable();
            $table->float('yp_1')->nullable();
            $table->float('yp_2')->nullable();
            $table->float('yp_3')->nullable();
            $table->float('yp_4')->nullable();
            $table->float('yp_5')->nullable();
            $table->float('gel_seg_1')->nullable();
            $table->float('gel_seg_2')->nullable();
            $table->float('gel_seg_3')->nullable();            
            $table->float('gel_seg_4')->nullable();
            $table->float('gel_seg_5')->nullable();
            $table->float('gel_min_1')->nullable();
            $table->float('gel_min_2')->nullable();
            $table->float('gel_min_3')->nullable();
            $table->float('gel_min_4')->nullable();
            $table->float('gel_min_5')->nullable();
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
        Schema::dropIfExists('rel_compatibilidad_lodo');
    }
};