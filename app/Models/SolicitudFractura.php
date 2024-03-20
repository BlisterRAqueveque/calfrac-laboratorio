<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitudFractura extends Model
{
    use HasFactory;
    protected $table = 'solicitud_fractura';

    protected $fillable = [
        'fluido',
        'formacion',
        'bhst',
        'tipo_temp_bhst',
        'temp_ensayo',
        'tipo_temp_ensayo',
        'aditivo_extra',
        'proveedor',
        'producto',
        'concentracion',
        'sistema_fluido_id',
        'analisis_microbial_id',
        'agente_sosten_id',
        'otro_analisis_id',
        'comentario',
        'firma_iniciado_por_id',
        'fecha_firma_iniciado_por',
        'firma_servicio_tecnico_id',
        'fecha_firma_servicios_tecnicos',
        'firma_laboratorio_id',
        'fecha_firma_laboratorio',
        'firma_reconocimiento_id',
        'fecha_firma_reconocimiento',
        'solicitud_id',
        'usuario_carga',
    ];
}
