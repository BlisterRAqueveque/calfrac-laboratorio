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
            $table->integer('uso')->nullable(); // TODO | Tiene que ser clave foránea
            $table->integer('cliente')->nullable(); // TODO | Tiene que ser clave foránea
            $table->integer('estado')->nullable(); // TODO | Tiene que ser clave foránea
            $table->integer('numero_lodo')->nullable();
            $table->integer('tipo_trabajo')->nullable(); // TODO | Tiene que ser clave foránea
            $table->string('nombre_lodo')->nullable();
            $table->date('fecha_solicitado')->nullable();
            $table->string('requerido_por')->nullable();
            $table->integer('tipo_requerimiento')->nullable(); // TODO | Tiene que ser clave foránea
            $table->integer('laboratorio')->nullable(); // TODO | Tiene que ser clave foránea
            $table->string('well_name')->nullable();
            $table->string('ingeniero')->nullable();
            $table->string('open_hole')->nullable();
            $table->string('densidad_lodo')->nullable();
            $table->string('md')->nullable();
            $table->string('tvd')->nullable();
            $table->integer('proveedor_lodo')->nullable();
            $table->string('bhse')->nullable();
            $table->string('bhct')->nullable();
            $table->string('grado_temperatura')->nullable();
            $table->string('volumen')->nullable();
            $table->string('caudal')->nullable();
            $table->string('tope_lechada')->nullable();
            $table->string('base_lechada')->nullable();
            $table->string('densidad_lechada')->nullable();
            $table->text('comentario')->nullable();
            $table->foreignId('solicitud_id')->references('id')->on('solicitud');
            $table->foreignId('user_id')->constrained()->onDelete('restrict')->comment('Usuario carga');
            $table->timestamps();
        });

        Schema::table('solicitud', function (Blueprint $table) {
            $table->foreign('ensayo_asignado_id')->references('id')->on('ensayos');
        });
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
