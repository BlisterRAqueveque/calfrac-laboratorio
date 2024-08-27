<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelAditivoSolicitudLodo extends Model
{
    use HasFactory;
    
    protected $table = 'rel_aditivos_solicitud_lodo';

    protected $fillable = [
        'solicitud_lodo_id',
        'lote',
        'aditivo',
        'comentario',
        'concentracion',
    ];

    public function solicitud_lodo() {
        return $this->hasMany(SolicitudLodo::class);
    }
    
    public function aditivos()
    {
        return $this->belongsTo(Aditivo::class, 'aditivo');
    }
}
