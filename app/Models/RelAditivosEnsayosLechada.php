<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelAditivosEnsayosLechada extends Model
{
    use HasFactory;
    protected $table = 'rel_aditivos_ensayos_lechada';
    protected $fillable = [
        'solicitud_lechada_id',
        'lote',
        'aditivo',
        'comentario',
        'concentracion',
        'om',
    ];


    public function solicitud_lechada() 
    {
        return $this->belongsTo(SolicitudLechada::class);
    }

    public function aditivos()
    {
        return $this->belongsTo(Aditivo::class, 'aditivo', 'id');
    }

    // Relación uno a uno con CalculosAditivosLechada
    public function calculos_ensayos()
    {
        return $this->hasOne(CalculosAditivosLechada::class, 'aditivo_id');
    }
}
