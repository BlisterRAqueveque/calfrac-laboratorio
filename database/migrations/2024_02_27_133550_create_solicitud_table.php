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
        Schema::create('solicitud', function (Blueprint $table) {
            $table->id();
            $table->integer('tipo')->nullable();
            $table->integer('proyecto_number')->nullable();
            $table->integer('servicio_number')->nullable();
            $table->string('cliente')->nullable();
            $table->string('locacion')->nullable();
            $table->string('programa')->nullable();
            $table->date('fecha_solicitud')->nullable();
            $table->string('empresa')->nullable();
            $table->date('fecha_tratamiento')->nullable();
            $table->string('pozo')->nullable();
            $table->string('rep_compania')->nullable();
            $table->date('fecha_reporte')->nullable();
            $table->string('rep_venta')->nullable();
            $table->date('fecha_resultados')->nullable();
            $table->string('equipo')->nullable();
            $table->string('servicio')->nullable();
            $table->integer('tipo_trabajo')->nullable();
            $table->integer('tipo_cementacion')->nullable();
            $table->integer('ensayo_requerido')->nullable();
            $table->string('reporte_lab_tall')->nullable();
            $table->string('reporte_lab_lead')->nullable();
            $table->integer('solicitud')->nullable();
            $table->foreignId('estado_solicitud_id')->references('id')->on('estados_solicitudes');
            $table->tinyInteger('activo')->default(1)->comment('1: Activo - 0: Inactivo (Visualizacion en el sistema)');
            $table->foreignId('user_id')->constrained()->onDelete('restrict');
            
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
        Schema::dropIfExists('solicitud');
    }
};
