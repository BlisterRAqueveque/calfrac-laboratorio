<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ensayo extends Model
{
    use HasFactory;

    protected $fillable = [
        'uso',
        'cliente',
        'estado',
        'numero_lodo',
        'tipo_trabajo',
        'nombre_lodo',
        'fecha_solicitado',
        'requerido_por',
        'tipo_requerimiento',
        'laboratorio',
        'well_name',
        'ingeniero',
        'open_hole',
        'densidad_lodo',
        'md',
        'tvd',
        'proveedor_lodo',
        'bhse',
        'bhct',
        'grado_temperatura',
        'volumen',
        'caudal',
        'tope_lechada',
        'base_lechada',
        'densidad_lechada',
        'comentario',
        'solicitud_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function aditivos()
    {
        return $this->hasMany(RelAditivosEnsayos::class);
    }

    public function requerimientos()
    {
        return $this->hasMany(RelRequerimientosEnsayos::class);
    }

    public function referencias()
    {
        return $this->hasMany(RelEnsayoReferenciaSolicitud::class);
    }
}
