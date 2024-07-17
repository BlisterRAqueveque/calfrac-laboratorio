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
        Schema::table('solicitud_lodo', function (Blueprint $table) {
            $table->string('mud_company')->nullable();
            $table->string('tipo_lodo_Lodo')->nullable();
            $table->float('densidad_lodo')->nullable();
            $table->float('temperatura')->nullable();
            $table->float('vol_colchon')->nullable();
            $table->float('densidad_colchon')->nullable();
            $table->float('tiempo_contacto')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('solicitud_lodo', function (Blueprint $table) {
            $table->dropColumn([
                'mud_company',
                'tipo_lodo_Lodo',
                'densidad_lodo',
                'temperatura',
                'vol_colchon',
                'densidad_colchon',
                'tiempo_contacto'
            ]);
        });
    }
};
