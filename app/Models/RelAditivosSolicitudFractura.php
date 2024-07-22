<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelAditivosSolicitudFractura extends Model
{
    use HasFactory;
    protected $table = 'rel_aditivos_solicitud_fractura';
    protected $fillable = [
        'solicitud_fractura_id',
        'lote',
        'aditivo',
        'concentracion',
    ];

    public function solicitud_fractura() {
        return $this->hasMany(SolicitudFractura::class);
    }
}
