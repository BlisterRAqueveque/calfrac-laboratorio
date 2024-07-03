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
        Schema::create('rel_aditivos_solicitud_lodo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('solicitud_lodo_id')->references('id')->on('solicitud_lodo');
            $table->string('lote');
            $table->string('aditivo');
            $table->string('concentracion');
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
        Schema::dropIfExists('rel_aditivos_solicitud_lodo');
    }
};
