<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelAditivoSolicitudLechada extends Model
{
    use HasFactory;

    protected $table = 'rel_aditivos_solicitud_lechada';

    protected $fillable = [
        'solicitud_lechada_id',
        'lote',
        'aditivo',
        'concentracion',
        'blend',
    ];

    public function solicitud_lechada() {
        return $this->hasMany(SolicitudLechada::class);
    }

}
