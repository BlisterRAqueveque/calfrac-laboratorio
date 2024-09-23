<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitudLodo extends Model
{
    use HasFactory;
    protected $table = 'solicitud_lodo';

    protected $fillable = [
        'tipo_lodo',
        'profundidad_md',
        'profundidad_tvd',
        'solicitud_id',
        'usuario_carga',
        'firma_autorizacion_id',
        'fecha_autorizacion',
        'firma_reconocimiento_id',
        'fecha_reconocimiento',
        'firma_solicitante_id',
        'fecha_solicitante',
        'mud_company',
        'densidad_lodo',
        'temperatura',
        'vol_colchon',
        'densidad_colchon',
        'tiempo_contacto',
        'comentario',
        'comentario_ensayo_referencia'

    ];

    public function rel_caracterizacion() {
        return $this->hasMany(RelCaracterizacionLodo::class);
    }

    public function rel_reologia_lodo() {
        return $this->hasMany(RelReologiasLodo::class);
    }

    public function rel_compatibilidad() {
        return $this->hasMany(RelCompatibilidadLodo::class);
    }

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
    public function user_solicitante()
    {
        return $this->belongsTo(User::class, 'firma_solicitante_id');
    }

    public function formulacion_tentativa()
    {
        return $this->hasMany(RelAditivoSolicitudLodo::class);
    }

    public function solicitud()
    {
        return $this->belongsTo(Solicitud::class);
    }

}
