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
        Schema::create('solicitud_lechada', function (Blueprint $table) {
            $table->id();
            $table->float('OH')->nullable();
            $table->float('trepano')->nullable();
            $table->float('casing_id')->nullable();
            $table->float('casing_od')->nullable();
            $table->float('densidad_lodo')->nullable();
            $table->string('tipo_lodo')->nullable();
            $table->string('cia')->nullable();
            $table->float('profundidad_pozo_md')->nullable();
            $table->float('profundidad_pozo_tvd')->nullable();
            $table->float('base_md')->nullable();
            $table->float('base_tvd')->nullable();
            $table->float('top_of_slurry_tvd')->nullable();
            $table->float('top_of_slurry_md')->nullable();
            $table->float('volumen')->nullable();
            $table->float('pump_rate')->nullable();
            $table->float('grado_temperatura')->nullable();
            $table->float('bhst')->nullable();
            $table->float('bhct')->nullable();
            $table->tinyInteger('principal_selected')->nullable()->default(0);
            $table->tinyInteger('relleno_selected')->nullable()->default(0);
            $table->string('reologia_principal')->nullable();
            $table->string('reologia_relleno')->nullable();
            $table->string('densidad_principal')->nullable();
            $table->string('densidad_relleno')->nullable();
            $table->string('filtrado_principal')->nullable();
            $table->string('filtrado_relleno')->nullable();
            $table->string('bombeabilidad_principal')->nullable();
            $table->string('bombeabilidad_relleno')->nullable();
            $table->string('resistencia_compresion_principal')->nullable();
            $table->string('resistencia_compresion_relleno')->nullable();
            $table->string('tiempo_50_psi_principal')->nullable();
            $table->string('tiempo_50_psi_relleno')->nullable();
            $table->string('tiempo_500_psi_principal')->nullable();
            $table->string('tiempo_500_psi_relleno')->nullable();
            $table->string('resistencia_12_hs_principal')->nullable();
            $table->string('resistencia_8_hs_relleno')->nullable();
            $table->string('resistencia_24_hs_principal')->nullable();
            $table->string('resistencia_12_hs_relleno')->nullable();
            $table->string('agua_libre_principal')->nullable();
            $table->string('agua_libre_relleno')->nullable();
            $table->string('sgs_principal')->nullable();
            $table->string('sgs_relleno')->nullable();
            $table->string('tipo_cemento_principal')->nullable();
            $table->string('tipo_cemento_relleno')->nullable();
            $table->text('observacion')->nullable();
            $table->unsignedBigInteger('firma_autorizacion_id')->nullable();
            $table->foreign('firma_autorizacion_id')->references('id')->on('users');
            $table->date('fecha_autorizacion')->nullable();
            $table->unsignedBigInteger('firma_reconocimiento_id')->nullable();
            $table->foreign('firma_reconocimiento_id')->references('id')->on('users');
            $table->date('fecha_reconocimiento')->nullable();
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
        Schema::dropIfExists('solicitud_lechada');
    }
};
