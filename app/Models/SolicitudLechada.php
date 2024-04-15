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
        'ensayo_requerido_principal',
        'ensayo_requerido_relleno',
        'reologia',
        'densidad',
        'filtrado',
        'bombeabilidad',
        'tiempo_50_psi',
        'tiempo_500_psi',
        'resistencia_12_hs',
        'resistencia_24_hs',
        'agua_libre',
        'sgs',
        'tipo_cemento',
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

    public function formulacion_tentativa() {
        return $this->hasMany(RelAditivoSolicitudLechada::class);
    }

    public function rel_reologia() {
        return $this->hasMany(RelReologiaSolicitudEnsayo::class);
    }
}
