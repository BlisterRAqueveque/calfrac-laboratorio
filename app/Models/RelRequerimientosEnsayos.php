<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelRequerimientosEnsayos extends Model
{
    use HasFactory;

    protected $fillable = [
        'ensayo_id',
        'test_id',
        'temperatura',
        'condicion_id',
        'planilla',
        'consistometro',
        'tiempo_acondicionamiento',
        'gradiente',
        'presion',
        '40_bc',
        '70_bc',
        '100_bc',
        'uca_numero',
        'uca_temperatura',
        'uca_50_psi',
        'uca_500_psi',
        'uca_1000_psi',
        'uca_12_hr',
        'uca_24_hr',
        'uca_impedancia_acustica',
        'uca_sgc_cero',
        'uca_sgc_max',
        'uca_tiempo',
        'radiologia_temp_amb_rpm',
        'radiologia_temp_amb_300',
        'radiologia_temp_amb_200',
        'radiologia_temp_amb_100',
        'radiologia_temp_amb_60',
        'radiologia_temp_amb_30',
        'radiologia_temp_amb_6',
        'radiologia_temp_amb_3',
        'radiologia_temp_ens_rpm',
        'radiologia_temp_ens_300',
        'radiologia_temp_ens_200',
        'radiologia_temp_ens_100',
        'radiologia_temp_ens_60',
        'radiologia_temp_ens_30',
        'radiologia_temp_ens_6',
        'radiologia_temp_ens_3',
        'radiologia_temp_amb',
        'radiologia_temp_ens',
        'radiologia_temp_amb_cedencia',
        'radiologia_temp_ens_cedencia',
        'radiologia_temp_amb_gel_10_seg',
        'radiologia_temp_ens_gel_10_seg',
        'radiologia_temp_amb_gel_10_min',
        'radiologia_temp_ens_gel_10_min',
        'perdida_filtrado_temp',
        'perdida_fluido_acumulado',
        'perdida_filtrado_api',
        'perdida_agua_libre',
        'perdida_volumen',
        'perdida_api_agua_libre',
        'mezclabilidad',
        'user_id',
        'activo',
    ];
}
