<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelEnsayoMecanica extends Model
{
    use HasFactory;
    protected $table = 'rel_ensayo_mecanica';
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
