<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelAditivosEnsayosLodo extends Model
{
    use HasFactory;

    protected $table = 'rel_aditivos_ensayos_lodo';
    protected $fillable = [
        'solicitud_lodo_id',
        'lote',
        'aditivo',
        'comentario',
        'concentracion',
        'unidad',
    ];

    public function solicitud_lpdo() 
    {
        return $this->belongsTo(SolicitudLodo::class);
    }

    public function aditivos()
    {
        return $this->belongsTo(Aditivo::class, 'aditivo', 'id');
    }
}
