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
        Schema::create('rel_formulacion_tentativa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('solicitud_id')->references('id')->on('solicitud');
            $table->float('lote_principal');
            $table->float('aditivo_principal');
            $table->float('conc_principal');
            $table->float('lote_relleno');
            $table->float('aditivo_relleno');
            $table->float('conc_relleno');
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
        Schema::dropIfExists('rel_formulacion_tentativa');
    }
};
