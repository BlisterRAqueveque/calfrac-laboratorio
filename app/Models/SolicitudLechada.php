<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitudLechada extends Model
{
    use HasFactory;
    protected $table = 'solicitud_lechada';

    protected $fillable = [
        'OH',
        'trepano',
        'casing_id',
        'casing_od',
        'densidad_lodo',
        'tipo_lodo',
        'cia',
        'profundidad_pozo_md',
        'profundidad_pozo_tvd',
        'base_md',
        'base_tvd',
        'top_of_slurry_tvd',
        'top_of_slurry_md',
        'volumen',
        'pump_rate',
        'grado_temperatura',
        'bhst',
        'bhct',
        'principal_selected',
        'relleno_selected',
        'reologia_principal',
        'reologia_relleno',
        'densidad_principal',
        'densidad_relleno',
        'filtrado_principal',
        'filtrado_relleno',
        'bombeabilidad_principal',
        'bombeabilidad_relleno',
        'resistencia_compresion_principal',
        'resistencia_compresion_relleno',
        'tiempo_50_psi_principal',
        'tiempo_50_psi_relleno',
        'tiempo_500_psi_principal',
        'tiempo_500_psi_relleno',
        'resistencia_12_hs_principal',
        'resistencia_8_hs_relleno',
        'resistencia_24_hs_principal',
        'resistencia_12_hs_relleno',
        'agua_libre_principal',
        'agua_libre_relleno',
        'sgs_principal',
        'sgs_relleno',
        'tipo_cemento_principal',
        'tipo_cemento_relleno',
        'observacion',
        'firma_autorizacion_id',
        'fecha_autorizacion',
        'firma_reconocimiento_id',
        'fecha_reconocimiento',
        'solicitud_id',
        'usuario_carga',
    ];

    public function user_autorizacion()
    {
        return $this->belongsTo(User::class, 'firma_autorizacion_id');
    }

    public function user_reconocimiento()
    {
        return $this->belongsTo(User::class, 'firma_reconocimiento_id');
    }
}
