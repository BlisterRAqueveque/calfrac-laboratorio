<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelEnsayoCompatibilidad extends Model
{
    use HasFactory;

    protected $table = 'rel_ensayo_compatibilidad';
    protected $fillable = [
        'solicitud_lodo_id',
        'colchon',
        'densidad',
    ];

    public function solicitud_lodo() 
    {
        return $this->belongsTo(SolicitudLodo::class);
    }
}
