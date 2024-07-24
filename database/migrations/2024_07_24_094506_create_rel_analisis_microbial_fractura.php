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
        Schema::create('rel_analisis_microbial_fractura', function (Blueprint $table) {
            $table->id();
            $table->string('solicitud_id');
            $table->foreignId('id_analisis')->constrained(table:'analisis_microbial');
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
        Schema::dropIfExists('rel_analisis_microbial_fractura');
    }
};
