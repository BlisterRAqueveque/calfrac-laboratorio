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
        Schema::create('comentarios_solicitudes', function (Blueprint $table) {
            $table->id();
            $table->text('comentario');
            $table->foreignId('usuario_comentario')->references('id')->on('users');
            $table->text('respuesta')->nullable();
            $table->unsignedBigInteger('usuario_rta')->nullable();
            $table->foreign('usuario_rta')->references('id')->on('users');
            $table->timestamp('fecha_hora_rta')->nullable();
            $table->foreignId('solicitud_id')->references('id')->on('solicitud')->onDelete('cascade');
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
        Schema::dropIfExists('comentarios_solicitudes');
    }
};
