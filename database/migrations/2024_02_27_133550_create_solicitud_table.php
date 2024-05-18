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
            $table->foreignId('cliente_id')->constrained()->onDelete('restrict');
            $table->integer('locacion')->nullable();
            $table->string('programa')->nullable();
            $table->date('fecha_solicitud')->nullable();
            $table->string('empresa')->nullable();
            $table->string('pozo')->nullable();
            $table->string('rep_compania')->nullable();
            $table->string('rep_venta')->nullable();
            $table->date('fecha_resultados')->nullable();
            $table->string('equipo')->nullable();
            $table->string('servicio')->nullable();
            $table->foreignId('tipo_requerimiento_cemento_id')->references('id')->on('tipo_requerimiento_cemento');
            $table->foreignId('tipo_trabajo_cemento_id')->references('id')->on('tipo_trabajo_cemento');
            $table->foreignId('tipo_cementacion_id')->references('id')->on('tipo_cementacion');
            $table->string('reporte_lab_tall')->nullable();
            $table->string('reporte_lab_lead')->nullable();
            $table->integer('solicitud')->nullable();
            $table->foreignId('estado_solicitud_id')->references('id')->on('estados_solicitudes');
            $table->tinyInteger('aprobada')->nullable()->default(0);
            $table->dateTime('fecha_aprobada')->nullable();
            $table->unsignedBigInteger('usuario_aprobo')->nullable();
            $table->foreign('usuario_aprobo')->references('id')->on('users');
            $table->unsignedBigInteger('ensayo_asignado_id')->nullable();
            $table->text('fundamento_asignacion')->nullable();
            $table->dateTime('fecha_asignacion')->nullable();
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
