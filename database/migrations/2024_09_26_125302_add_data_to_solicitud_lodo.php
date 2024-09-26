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
            $table->string('tipo_colchon')->nullable();
            $table->string('pf')->nullable();
            $table->string('vp')->nullable();
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
                'tipo_colchon',
                'pf',
                'vp',
            ]);
        });
    }
};
