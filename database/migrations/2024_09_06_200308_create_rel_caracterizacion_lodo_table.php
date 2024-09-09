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
        Schema::create('rel_caracterizacion_lodo', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_lodo')->nullable();
            $table->integer('base')->nullable();
            $table->integer('densidad')->nullable();
            $table->string('cia_lodo')->nullable();
            $table->string('tiempo')->nullable();
            $table->integer('seg_10')->nullable();
            $table->integer('min_10')->nullable();
            $table->integer('min_30')->nullable();
            $table->string('temp_bhct')->nullable();
            $table->integer('temp_600_rpm_c')->nullable();
            $table->integer('temp_300_rpm_c')->nullable();
            $table->integer('temp_200_rpm_c')->nullable();
            $table->integer('temp_100_rpm_c')->nullable();
            $table->integer('temp_60_rpm_c')->nullable();
            $table->integer('temp_30_rpm_c')->nullable();
            $table->integer('temp_6_rpm_c')->nullable();
            $table->integer('temp_3_rpm_c')->nullable();
            $table->integer('temp_vp')->nullable();
            $table->integer('temp_yp')->nullable();
            $table->foreignId('solicitud_lodo_id')->references('id')->on('solicitud_lodo');
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
        Schema::dropIfExists('rel_caracterizacion_lodo');
    }
};