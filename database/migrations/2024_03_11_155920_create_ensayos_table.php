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
        Schema::create('ensayos', function (Blueprint $table) {
            $table->id();
            $table->integer('incrementable')->nullable();
            $table->string('tipo')->nullable()->comment('Si es CN | CC, etc');
            $table->integer('anio')->nullable();
            // $table->unsignedBigInteger('solicitud_lechada_id')->nullable();
            // $table->foreign('solicitud_lechada_id')->references('id')->on('solicitud_lechada');
            $table->foreignId('user_id')->constrained()->onDelete('restrict')->comment('Usuario carga');
            $table->timestamps();
            // $table->tinyInteger('estado')->default(1);
        });

        // Schema::table('solicitud', function (Blueprint $table) {
        //     $table->foreign('ensayo_asignado_id')->references('id')->on('ensayos');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ensayos');
    }
};
