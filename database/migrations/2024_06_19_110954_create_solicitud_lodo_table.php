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
        Schema::create('solicitud_lodo', function (Blueprint $table) {
            $table->id();
            $table->integer('tipo_lodo')->nullable();
            $table->integer('profundidad_md')->nullable();
            $table->integer('profundidad_tvd')->nullable();
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
        Schema::dropIfExists('solicitud_lodo');
    }
};
