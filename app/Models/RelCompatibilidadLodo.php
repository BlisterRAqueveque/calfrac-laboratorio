<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelCompatibilidadLodo extends Model
{
    use HasFactory;
    protected $table = 'rel_compatibilidad_lodo';
    protected $fillable = [
    //modificar las variables vy
    'vp_1',
    'vp_2',
    'vp_3',
    'vp_4',
    'vp_5',
    'yp_1',
    'yp_2',
    'yp_3',
    'yp_4',
    'yp_5',
    'gel_seg_1',
    'gel_seg_2',
    'gel_seg_3',
    'gel_seg_4',
    'gel_seg_5',
    'gel_min_1',
    'gel_min_2',
    'gel_min_3',
    'gel_min_4',
    'gel_min_5',
    'solicitud_lodo_id',
    'usuario_carga',
    ];

    public function solicitud_lodo() {
        return $this->hasMany(SolicitudLodo::class);
    }

    public function user() {
        return $this->belongsTo(User::class, 'usuario_carga');
    }

}