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
        Schema::create('rel_mecanica_lodo', function (Blueprint $table) {
            $table->id();
            $table->float('tiempo_1')->nullable();
            $table->float('tiempo_2')->nullable();
            $table->float('tiempo_3')->nullable();
            $table->float('tiempo_4')->nullable();
            $table->float('tiempo_5')->nullable();
            $table->string('img_1')->nullable();
            $table->string('img_2')->nullable();
            $table->foreignId('solicitud_lodo_id')->references('id')->on('solicitud_lodo')->nullable();
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
        Schema::dropIfExists('rel_mecanica_lodo');
    }
};
