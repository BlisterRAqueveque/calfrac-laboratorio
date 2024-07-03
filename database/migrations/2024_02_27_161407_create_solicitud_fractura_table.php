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
        Schema::create('solicitud_fractura', function (Blueprint $table) {
            $table->id();
            $table->string('fluido')->nullable();
            $table->string('formacion')->nullable();
            $table->integer('bhst')->nullable();
            $table->integer('tipo_temp_bhst')->nullable();
            $table->integer('temp_ensayo')->nullable();
            $table->integer('tipo_temp_ensayo')->nullable();
            $table->tinyInteger('aditivo_extra')->nullable()->default(0);
            $table->string('proveedor')->nullable();
            $table->string('producto')->nullable();
            $table->string('concentracion')->nullable();
            $table->unsignedBigInteger('sistema_fluido_id')->nullable();
            $table->foreign('sistema_fluido_id')->references('id')->on('sistemas_fluidos');
            $table->unsignedBigInteger('analisis_microbial_id')->nullable();
            $table->foreign('analisis_microbial_id')->references('id')->on('analisis_microbial');
            $table->unsignedBigInteger('agente_sosten_id')->nullable();
            $table->foreign('agente_sosten_id')->references('id')->on('agente_sosten');
            $table->unsignedBigInteger('otro_analisis_id')->nullable();
            $table->foreign('otro_analisis_id')->references('id')->on('otros_analisis');
            $table->text('comentario')->nullable();
            $table->unsignedBigInteger('firma_iniciado_por_id')->nullable();
            $table->foreign('firma_iniciado_por_id')->references('id')->on('users');
            $table->date('fecha_firma_iniciado_por')->nullable();
            $table->unsignedBigInteger('firma_servicio_tecnico_id')->nullable();
            $table->foreign('firma_servicio_tecnico_id')->references('id')->on('users');
            $table->date('fecha_firma_servicios_tecnicos')->nullable();
            $table->unsignedBigInteger('firma_laboratorio_id')->nullable();
            $table->foreign('firma_laboratorio_id')->references('id')->on('users');
            $table->date('fecha_firma_laboratorio')->nullable();
            $table->unsignedBigInteger('firma_reconocimiento_id')->nullable();
            $table->foreign('firma_reconocimiento_id')->references('id')->on('users');
            $table->date('fecha_firma_reconocimiento')->nullable();
            $table->foreignId('solicitud_id')->references('id')->on('solicitud');
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
        Schema::dropIfExists('solicitud_fractura');
    }
};
