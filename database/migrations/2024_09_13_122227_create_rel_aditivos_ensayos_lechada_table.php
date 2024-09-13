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
        Schema::create('rel_aditivos_ensayos_lechada', function (Blueprint $table) {
            $table->id();
            $table->foreignId('solicitud_lechada_id')->references('id')->on('solicitud_lechada');
            $table->string('lote')->nullable();
            $table->string('aditivo')->nullable();
            $table->string('concentracion')->nullable();
            $table->string('comentario')->nullable();
            $table->string('om')->nullable();
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
        Schema::dropIfExists('rel_aditivos_ensayos_lechada');
    }
};
