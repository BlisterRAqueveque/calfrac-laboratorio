<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelAditivosEnsayos extends Model
{
    use HasFactory;
    protected $fillable = [
        'aditivo_id',
        'ensayo_id',
        'concentracion',
        'concentracion_type',
        'agregado',
        'numero_lote',
        'user_id',
        'activo',
    ];

    public function aditivo() {
        return $this->belongsTo(Aditivo::class);
    }

    public function ensayo() {
        return $this->hasMany(Ensayo::class);
    }
}
