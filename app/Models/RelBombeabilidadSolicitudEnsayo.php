<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelBombeabilidadSolicitudEnsayo extends Model
{
    use HasFactory;
    protected $table = 'rel_bombeabilidad_solicitud_ensayo';

    protected $fillable = [
        'consistometro',
        'time_acondicionamiento',
        'planilla',
        'gradiente',
        'temperatura',
        'presion',
        '40_bc',
        '70_bc',
        '100_bc',
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
