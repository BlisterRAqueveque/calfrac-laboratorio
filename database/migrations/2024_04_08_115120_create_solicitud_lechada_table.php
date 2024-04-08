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
        Schema::create('solicitud_lechada', function (Blueprint $table) {
            $table->id();

            // $table->integer('top_of_slurry_tvd')->nullable();
            // $table->integer('top_of_slurry_md')->nullable();
            // $table->integer('top_of_slurry_md')->nullable();
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
        Schema::dropIfExists('solicitud_lechada');
    }
};
