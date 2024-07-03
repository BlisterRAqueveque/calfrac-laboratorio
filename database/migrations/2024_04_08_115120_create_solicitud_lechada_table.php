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
            $table->integer('tipo_lodo')->nullable();
            $table->unsignedBigInteger('mud_company_id')->nullable();
            $table->foreign('mud_company_id')->references('id')->on('mud_company');
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
            $table->tinyInteger('ensayo_requerido_principal')->nullable()->default(0)->comment('1: Se necesita el Ensayo principal | 0: No se necesita');
            $table->tinyInteger('ensayo_requerido_relleno')->nullable()->default(0)->comment('1: Se necesita el Ensayo relleno | 0: No se necesita');
            $table->tinyInteger('ensayo_requerido_tapon')->nullable()->default(0)->comment('1: Se necesita el Ensayo tapon | 0: No se necesita');
            $table->tinyInteger('ensayo_requerido_bullheading')->nullable()->default(0)->comment('1: Se necesita el Ensayo bullheading | 0: No se necesita');
            $table->string('reologia')->nullable();
            $table->string('densidad')->nullable();
            $table->string('filtrado')->nullable();
            $table->string('bombeabilidad')->nullable();
            $table->tinyInteger('tiempo_50_psi')->nullable();
            $table->tinyInteger('tiempo_500_psi')->nullable();
            $table->tinyInteger('tiempo_1000_psi')->nullable();
            $table->tinyInteger('resistencia_12_hs')->nullable();
            $table->tinyInteger('resistencia_24_hs')->nullable();
            $table->string('agua_libre')->nullable();
            $table->string('sgs')->nullable();
            $table->string('tipo_cemento')->nullable();
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
