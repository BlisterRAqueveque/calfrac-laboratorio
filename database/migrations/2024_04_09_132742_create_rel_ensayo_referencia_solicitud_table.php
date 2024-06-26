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
        Schema::create('rel_ensayo_referencia_solicitud', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ensayo_id')->references('id')->on('ensayos');
            $table->foreignId('solicitud_id')->references('id')->on('solicitud');
            $table->float('top_of_slurry_tvd');
            $table->float('top_of_slurry_md');
            $table->float('densidad');
            $table->float('grado_temperatura');
            $table->float('bhce');
            $table->float('bhct');
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
        Schema::dropIfExists('rel_ensayo_referencia_solicitud');
    }
};
