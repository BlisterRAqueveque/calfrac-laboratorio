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
        Schema::create('rel_agente_sosten_fractura', function (Blueprint $table) {
            $table->id();
            $table->string('solicitud_id');
            $table->foreignId('id_agente')->constrained(table:'agente_sosten');
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
        Schema::dropIfExists('rel_agente_sosten_fractura');
    }
};
