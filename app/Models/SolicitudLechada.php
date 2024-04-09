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
    ];

}
