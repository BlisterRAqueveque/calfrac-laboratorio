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
        Schema::create('rel_ensayos_requeridos_lodo', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->foreignId('id_ensayo')->constrained(table:'ensayos_lodo');
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
        Schema::dropIfExists('rel_ensayos_requeridos_lodo');
    }
};
