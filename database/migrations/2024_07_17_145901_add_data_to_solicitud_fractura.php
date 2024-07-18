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
        Schema::table('solicitud_fractura', function (Blueprint $table) {
            $table->tinyInteger('ensayo_estabilidad')->nullable()->default(0);
            $table->tinyInteger('ensayo_ruptura')->nullable()->default(0);
            $table->string('otros_analisis')->nullable();
            $table->string('estados')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('solicitud_fractura', function (Blueprint $table) {
            $table->dropColumn([
                'ensayo_estabilidad',
                'ensayo_ruptura',
                'otros_analisis',
                'estados',
            ]);
        });
    }
};
