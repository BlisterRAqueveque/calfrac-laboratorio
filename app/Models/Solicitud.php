<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;
    protected $table = 'solicitud';
    protected $fillable = [
        'tipo',
        'proyecto_number',
        'servicio_number',
        'cliente',
        'locacion',
        'programa',
        'fecha_solicitud',
        'empresa',
        'fecha_tratamiento',
        'pozo',
        'rep_compania',
        'fecha_reporte',
        'rep_venta',
        'fecha_resultados',
        'equipo',
        'servicio',
        'tipo_trabajo',
        'tipo_cementacion',
        'ensayo_requerido',
        'reporte_lab_tall',
        'reporte_lab_lead',
        'solicitud',
        'estado_solicitud_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function estado()
    {
        return $this->belongsTo(Estado_Solicitud::class, 'estado_solicitud_id');
    }


    public function fundamento() {
        return $this->hasMany(Edicion_Solicitud::class);
    }
}