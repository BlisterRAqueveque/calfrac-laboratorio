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
        Schema::create('rel_reologias_lodo', function (Blueprint $table) {
            $table->id();
            $table->integer('temp_600_rpm')->nullable();
            $table->integer('temp_300_rpm')->nullable();
            $table->integer('temp_200_rpm')->nullable();
            $table->integer('temp_100_rpm')->nullable();
            $table->integer('temp_60_rpm')->nullable();
            $table->integer('temp_30_rpm')->nullable();
            $table->integer('temp_6_rpm')->nullable();
            $table->integer('temp_3_rpm')->nullable();
            $table->integer('temp_600_rpm_2')->nullable();
            $table->integer('temp_300_rpm_2')->nullable();
            $table->integer('temp_200_rpm_2')->nullable();
            $table->integer('temp_100_rpm_2')->nullable();
            $table->integer('temp_60_rpm_2')->nullable();
            $table->integer('temp_30_rpm_2')->nullable();
            $table->integer('temp_6_rpm_2')->nullable();
            $table->integer('temp_3_rpm_2')->nullable();
            $table->integer('temp_600_rpm_3')->nullable();
            $table->integer('temp_300_rpm_3')->nullable();
            $table->integer('temp_200_rpm_3')->nullable();
            $table->integer('temp_100_rpm_3')->nullable();
            $table->integer('temp_60_rpm_3')->nullable();
            $table->integer('temp_30_rpm_3')->nullable();
            $table->integer('temp_6_rpm_3')->nullable();
            $table->integer('temp_3_rpm_3')->nullable();
            $table->integer('temp_600_rpm_4')->nullable();
            $table->integer('temp_300_rpm_4')->nullable();
            $table->integer('temp_200_rpm_4')->nullable();
            $table->integer('temp_100_rpm_4')->nullable();
            $table->integer('temp_60_rpm_4')->nullable();
            $table->integer('temp_30_rpm_4')->nullable();
            $table->integer('temp_6_rpm_4')->nullable();
            $table->integer('temp_3_rpm_4')->nullable();
            $table->integer('temp_600_rpm_5')->nullable();
            $table->integer('temp_300_rpm_5')->nullable();
            $table->integer('temp_200_rpm_5')->nullable();
            $table->integer('temp_100_rpm_5')->nullable();
            $table->integer('temp_60_rpm_5')->nullable();
            $table->integer('temp_30_rpm_5')->nullable();
            $table->integer('temp_6_rpm_5')->nullable();
            $table->integer('temp_3_rpm_5')->nullable();
            $table->foreignId('solicitud_lodo_id')->references('id')->on('solicitud_lodo')->nullable();
            $table->foreignId('reologia_id')->references('id')->on('rel_caracterizacion_lodo')->nullable();
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
        Schema::dropIfExists('rel_reologias_lodo');
    }
};


