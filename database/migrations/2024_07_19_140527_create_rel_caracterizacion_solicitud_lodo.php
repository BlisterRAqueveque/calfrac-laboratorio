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
        Schema::create('rel_caracterizacion_solicitud_lodo', function (Blueprint $table) {
            $table->id();
            
            $table->string('tipo_lodo',length:50)->nullable();
            $table->string('base',length:50)->nullable();
            $table->float('densidad')->nullable();
            $table->string('mud_company')->nullable();

            $table->string('tiempo')->nullable();
            $table->integer('tiempo_10seg')->nullable();
            $table->integer('tiempo_10min')->nullable();
            $table->integer('tiempo_30min')->nullable();
            $table->string('temp_BHCT')->nullable();
            $table->integer('rpm600')->nullable();
            $table->integer('rpm300')->nullable();
            $table->integer('rpm200')->nullable();
            $table->integer('rpm100')->nullable();
            $table->integer('rpm60')->nullable();
            $table->integer('rpm30')->nullable();
            $table->integer('rpm6')->nullable();
            $table->integer('rpm3')->nullable();
            $table->float('VP')->nullable();
            $table->float('YP')->nullable();


            $table->tinyInteger('selected')->default(0)->comment('1: Seleccionado para el reporte | 0: No seleccionado');
            $table->foreignId('solicitud_lodo_id')->references('id')->on('solicitud_lodo');
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
            Schema::dropIfExists('rel_caracterizacion_solicitud_lodo');

    }
};
