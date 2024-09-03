<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculosReologias extends Model
{
    use HasFactory;
    protected $table = 'calculos_reologias';

    protected $fillable = [
        'reologia_id',
        'solicitud_id',
        'tem_ambiente_300_cociente',
        'tem_ambiente_200_cociente',
        'tem_ambiente_100_cociente',
        'tem_ambiente_60_cociente',
        'tem_ambiente_30_cociente',
        'tem_ambiente_6_cociente',
        'tem_ambiente_3_cociente',
        'tem_ambiente_300_promedio',
        'tem_ambiente_200_promedio',
        'tem_ambiente_100_promedio',
        'tem_ambiente_60_promedio',
        'tem_ambiente_30_promedio',
        'tem_ambiente_6_promedio',
        'tem_ambiente_3_promedio',
        'tem_ensayo_300_cociente',
        'tem_ensayo_200_cociente',
        'tem_ensayo_100_cociente',
        'tem_ensayo_60_cociente',
        'tem_ensayo_30_cociente',
        'tem_ensayo_6_cociente',
        'tem_ensayo_3_cociente',
        'tem_ensayo_300_promedio',
        'tem_ensayo_200_promedio',
        'tem_ensayo_100_promedio',
        'tem_ensayo_60_promedio',
        'tem_ensayo_30_promedio',
        'tem_ensayo_6_promedio',
        'tem_ensayo_3_promedio',
    ];

    public function solicitud_lechada() 
    {
        return $this->hasOne(SolicitudLechada::class, 'reologia', 'id');
    }

    public function reologia()
    {
        return $this->belongsTo(RelReologiaSolicitudEnsayo::class, 'reologia_id');
    }

}
