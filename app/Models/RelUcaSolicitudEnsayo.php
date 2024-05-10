<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelUcaSolicitudEnsayo extends Model
{
    use HasFactory;
    protected $table = 'rel_uca_solicitud_ensayo';

    protected $fillable = [
        'principal',
        'psi_50',
        'psi_500',
        'psi_1000',
        'hs_12',
        'hs_24',
        'impedancia_acustica',
        'sgs_cero',
        'sgs_max',
        'tiempo',
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
