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
        'estados',
        'concentracion',
        'sistema_fluido_id',
        'analisis_microbial_id',
        'agente_sosten_id',
        //'otro_analisis_id',
        'otros_analisis',
        'ensayo_estabilidad',
        'ensayo_ruptura',
        'ensayo_especial',
        'comentario',
        'base_guar',
        'base_hvfr',
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

    public function user_iniciado_por()
    {
        return $this->belongsTo(User::class, 'firma_iniciado_por_id');
    }

    public function user_servicio_tecnico()
    {
        return $this->belongsTo(User::class, 'firma_servicio_tecnico_id');
    }

    public function user_laboratorio()
    {
        return $this->belongsTo(User::class, 'firma_laboratorio_id');
    }

    public function user_reconocimiento()
    {
        return $this->belongsTo(User::class, 'firma_reconocimiento_id');
    }

    public function agente_sosten()
    {
        return $this->belongsTo(AgenteSosten::class, 'agente_sosten_id');
    }

    public function analisis_microbial()
    {
        return $this->belongsTo(AnalisisMicrobial::class, 'analisis_microbial_id');
    }

    public function sistemas_fluidos()
    {
        return $this->belongsTo(SistemasFluidos::class, 'sistema_fluido_id');
    }

    public function estados()
    {
        return $this->belongsTo(Estados::class, 'estados');
    }
    
    public function formulacion_tentativa()
    {
        return $this->hasMany(RelAditivosSolicitudFractura::class);
    }

}
