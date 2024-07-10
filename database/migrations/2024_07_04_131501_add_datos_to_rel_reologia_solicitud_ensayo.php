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
            $table->integer('tem_ambiente_rpm_up')->nullable();
            $table->integer('tem_ambiente_300_up')->nullable();
            $table->integer('tem_ambiente_200_up')->nullable();
            $table->integer('tem_ambiente_100_up')->nullable();
            $table->integer('tem_ambiente_60_up')->nullable();
            $table->integer('tem_ambiente_30_up')->nullable();
            $table->integer('tem_ambiente_6_up')->nullable();
            $table->integer('tem_ambiente_3_up')->nullable();
            $table->integer('tem_ensayo_rpm_up')->nullable();
            $table->integer('tem_ensayo_300_up')->nullable();
            $table->integer('tem_ensayo_200_up')->nullable();
            $table->integer('tem_ensayo_100_up')->nullable();
            $table->integer('tem_ensayo_60_up')->nullable();
            $table->integer('tem_ensayo_30_up')->nullable();
            $table->integer('tem_ensayo_6_up')->nullable();
            $table->integer('tem_ensayo_3_up')->nullable();
            $table->integer('tem_ambiente_rpm_down')->nullable();
            $table->integer('tem_ambiente_300_down')->nullable();
            $table->integer('tem_ambiente_200_down')->nullable();
            $table->integer('tem_ambiente_100_down')->nullable();
            $table->integer('tem_ambiente_60_down')->nullable();
            $table->integer('tem_ambiente_30_down')->nullable();
            $table->integer('tem_ambiente_6_down')->nullable();
            $table->integer('tem_ambiente_3_down')->nullable();
            $table->integer('tem_ensayo_rpm_down')->nullable();
            $table->integer('tem_ensayo_300_down')->nullable();
            $table->integer('tem_ensayo_200_down')->nullable();
            $table->integer('tem_ensayo_100_down')->nullable();
            $table->integer('tem_ensayo_60_down')->nullable();
            $table->integer('tem_ensayo_30_down')->nullable();
            $table->integer('tem_ensayo_6_down')->nullable();
            $table->integer('tem_ensayo_3_down')->nullable();
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
                'tem_ambiente_rpm_up',
                'tem_ambiente_300_up',
                'tem_ambiente_200_up',
                'tem_ambiente_100_up',
                'tem_ambiente_60_up',
                'tem_ambiente_30_up',
                'tem_ambiente_6_up',
                'tem_ambiente_3_up',
                'tem_ensayo_rpm_up',
                'tem_ensayo_300_up',
                'tem_ensayo_200_up',
                'tem_ensayo_100_up',
                'tem_ensayo_60_up',
                'tem_ensayo_30_up',
                'tem_ensayo_6_up',
                'tem_ensayo_3_up',
                'tem_ambiente_rpm_down',
                'tem_ambiente_300_down',
                'tem_ambiente_200_down',
                'tem_ambiente_100_down',
                'tem_ambiente_60_down',
                'tem_ambiente_30_down',
                'tem_ambiente_6_down',
                'tem_ambiente_3_down',
                'tem_ensayo_rpm_down',
                'tem_ensayo_300_down',
                'tem_ensayo_200_down',
                'tem_ensayo_100_down',
                'tem_ensayo_60_down',
                'tem_ensayo_30_down',
                'tem_ensayo_6_down',
                'tem_ensayo_3_down'
            ]);
            
        });
    }
};
