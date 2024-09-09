<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelCaracterizacionLodo extends Model
{
    use HasFactory;
    protected $table = 'rel_caracterizacion_lodo';

    protected $fillable = [
        'tipo_lodo',
        'base', 
        'densidad',
        'cia_lodo',
        'tiempo',
        'seg_10',
        'min_10',
        'min_30',
        'temp_bhct',
        'temp_600_rpm_c',
        'temp_300_rpm_c',
        'temp_200_rpm_c',
        'temp_100_rpm_c',
        'temp_60_rpm_c',
        'temp_30_rpm_c',
        'temp_6_rpm_c',
        'temp_3_rpm_c',
        'temp_vp',
        'temp_yp',
        'solicitud_lodo_id', 
        'usuario_carga'      
    ];

    public function solicitud_lodo() {
        return $this->hasMany(SolicitudLodo::class);
    }

    public function user() {
        return $this->belongsTo(User::class, 'usuario_carga');
    }
    
    public function rel_reologia_lodo()
    {
        return $this->belongsTo(RelReologiasLodo::class, 'reologia_id');
    }
    
}