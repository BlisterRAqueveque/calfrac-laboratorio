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
        Schema::table('rel_reologia_solicitud_ensayo', function (Blueprint $table) {
            $table->string('img_up')->nullable();
            $table->string('img_down')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rel_reologia_solicitud_ensayo', function (Blueprint $table) {
            $table->dropColumn([
                'img_up',
                'img_down',
            ]);
        });
    }
};
