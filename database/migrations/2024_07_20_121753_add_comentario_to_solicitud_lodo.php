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
            $table->text('comentario')->nullable();
            $table->text('comentario_ensayo_referencia')->nullable();

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
            $table->dropColumn(['comentario','comentario_ensayo_referencia']);
         });
    }
};
