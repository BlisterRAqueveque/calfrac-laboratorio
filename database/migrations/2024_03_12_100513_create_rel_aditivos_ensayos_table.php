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
        Schema::create('rel_aditivos_ensayos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('aditivo_id')->constrained()->onDelete('restrict');
            $table->foreignId('ensayo_id')->constrained()->onDelete('restrict');
            $table->string('concentracion')->nullable();
            $table->integer('concentracion_type')->nullable();
            $table->integer('agregado')->nullable();
            $table->integer('numero_lote')->nullable();
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
        Schema::dropIfExists('rel_aditivos_ensayos');
    }
};
