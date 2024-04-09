<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelFormulacionTentativa extends Model
{
    use HasFactory;

    protected $table = 'rel_formulacion_tentativa';

    protected $fillable = [
        'solicitud_id',
        'lote_principal',
        'aditivo_principal',
        'conc_principal',
        'lote_relleno',
        'aditivo_relleno',
        'conc_relleno',
    ];
}
