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
        Schema::table('tipo_lodos_Lodos', function (Blueprint $table) {
            $table->string('nombre');
            $table->tinyInteger('estado')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tipo_lodos_Lodos', function (Blueprint $table) {
            $table->dropColumn('nombre');
            $table->dropColumn('estado');
        });
    }
};
