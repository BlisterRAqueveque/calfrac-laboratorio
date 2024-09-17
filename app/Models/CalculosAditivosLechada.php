<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculosAditivosLechada extends Model
{
    use HasFactory;
    protected $table = 'calculos_aditivos_lechada';
    protected $fillable = [
        'aditivo_id',
        'solicitud_lechada_id',
        'densidad_ensayo',
        'rendimiento_ensayo',
        'bolsa_ensayo',
        'ppg_ensayo',
        'ft_bolsa',
        'req_agua',
        'usuario_carga',
    ];

    public function solicitud_lechada() 
    {
        return $this->belongsTo(SolicitudLechada::class, 'id');
    }

    public function rel_aditivos()
    {
        return $this->belongsTo(RelAditivosEnsayosLechada::class, 'aditivo_id');
    }

}
