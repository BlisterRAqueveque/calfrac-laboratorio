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
        Schema::create('rel_requerimientos_ensayo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ensayo_id')->constrained()->onDelete('restrict');
            $table->integer('test_id')->nullable(); // TODO | Crear llave foránea de esto después
            $table->integer('temperatura')->nullable();
            $table->integer('condicion_id')->nullable();
            $table->integer('planilla')->nullable();
            $table->integer('consistometro')->nullable();
            $table->integer('tiempo_acondicionamiento')->nullable();
            $table->integer('gradiente')->nullable();
            $table->integer('temperatura_bombeabilidad')->nullable();
            $table->integer('presion')->nullable();
            $table->integer('40_bc')->nullable();
            $table->integer('70_bc')->nullable();
            $table->integer('100_bc')->nullable();
            $table->integer('uca_numero')->nullable();
            $table->integer('uca_temperatura')->nullable();
            $table->string('uca_50_psi')->nullable();
            $table->string('uca_500_psi')->nullable();
            $table->string('uca_1000_psi')->nullable();
            $table->integer('uca_12_hr')->nullable();
            $table->integer('uca_24_hr')->nullable();
            $table->string('uca_impedancia_acustica')->nullable();
            $table->string('uca_sgc_cero')->nullable();
            $table->string('uca_sgc_max')->nullable();
            $table->string('uca_tiempo')->nullable();
            $table->integer('radiologia_temp_amb_rpm')->nullable();
            $table->integer('radiologia_temp_amb_300')->nullable();
            $table->integer('radiologia_temp_amb_200')->nullable();
            $table->integer('radiologia_temp_amb_100')->nullable();
            $table->integer('radiologia_temp_amb_60')->nullable();
            $table->integer('radiologia_temp_amb_30')->nullable();
            $table->integer('radiologia_temp_amb_6')->nullable();
            $table->integer('radiologia_temp_amb_3')->nullable();
            $table->integer('radiologia_temp_ens_rpm')->nullable();
            $table->integer('radiologia_temp_ens_300')->nullable();
            $table->integer('radiologia_temp_ens_200')->nullable();
            $table->integer('radiologia_temp_ens_100')->nullable();
            $table->integer('radiologia_temp_ens_60')->nullable();
            $table->integer('radiologia_temp_ens_30')->nullable();
            $table->integer('radiologia_temp_ens_6')->nullable();
            $table->integer('radiologia_temp_ens_3')->nullable();
            $table->integer('radiologia_temp_amb')->nullable();
            $table->integer('radiologia_temp_ens')->nullable();
            $table->integer('radiologia_temp_amb_cedencia')->nullable();
            $table->integer('radiologia_temp_ens_cedencia')->nullable();
            $table->integer('radiologia_temp_amb_gel_10_seg')->nullable();
            $table->integer('radiologia_temp_ens_gel_10_seg')->nullable();
            $table->integer('radiologia_temp_amb_gel_10_min')->nullable();
            $table->integer('radiologia_temp_ens_gel_10_min')->nullable();
            $table->integer('perdida_filtrado_temp')->nullable();
            $table->integer('perdida_fluido_acumulado')->nullable();
            $table->integer('perdida_filtrado_api')->nullable();
            $table->integer('perdida_agua_libre')->nullable();
            $table->integer('perdida_volumen')->nullable();
            $table->integer('perdida_api_agua_libre')->nullable();
            $table->integer('mezclabilidad')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('restrict');
            $table->tinyInteger('activo')->default(1)->comment('1: Activo | 0: Inactivo (Visualización en el sistema)');
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
        Schema::dropIfExists('rel_requerimientos_ensayo');
    }
};
