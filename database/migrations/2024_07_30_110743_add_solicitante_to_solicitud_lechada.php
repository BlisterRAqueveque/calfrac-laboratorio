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
        Schema::table('solicitud_lechada', function (Blueprint $table) {
            $table->tinyInteger('firma_solicitante_id')->references('id')->on('users');
            $table->date('fecha_solicitante')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('solicitud_lechada', function (Blueprint $table) {
            $table->dropColumn([
                'firma_solicitante_id',
                'fecha_solicitante',
            ]);
        });
    }
};
