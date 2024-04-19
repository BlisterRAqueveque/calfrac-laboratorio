<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelPerdidaSolicitudEnsayo extends Model
{
    use HasFactory;
    protected $table = 'rel_perdida_solicitud_ensayo';

    protected $fillable = [
        'temperatura',
        'fluido_acumulado',
        'filtrado_api',
        'ensayo_id',
        'solicitud_lechada_id',
        'selected',
        'usuario_carga',
    ];
    
    public function solicitud_lechada() {
        return $this->hasMany(SolicitudLechada::class);
    }
    public function user() {
        return $this->belongsTo(User::class, 'usuario_carga');
    }
}
