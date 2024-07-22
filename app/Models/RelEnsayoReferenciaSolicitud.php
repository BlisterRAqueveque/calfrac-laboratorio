<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelEnsayoReferenciaSolicitud extends Model
{
    use HasFactory;
    protected $table = 'rel_ensayo_referencia_solicitud';

    protected $fillable = [
        'ensayo_id',
        'solicitud_id',
        'top_of_slurry_tvd',
        'top_of_slurry_md',
        'densidad',
        'grado_temperatura',
        'bhce',
        'bhct',
    ];

    public function ensayo()
    {
        return $this->hasMany(Ensayo::class);
    }
    public function solicitud()
    {
        return $this->hasMany(Solicitud::class);
    }

    // Relación con Ensayo
    public function ensayoRelacionado()
    {
        return $this->belongsTo(Ensayo::class, 'ensayo_id', 'ensayo_id');
    }

    // Relación con Solicitud
    public function solicitudRelacionada()
    {
        return $this->belongsTo(Solicitud::class, 'solicitud_id', 'id');
    }
}
