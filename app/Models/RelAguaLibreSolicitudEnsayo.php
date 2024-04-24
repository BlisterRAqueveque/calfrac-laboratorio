<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelAguaLibreSolicitudEnsayo extends Model
{
    use HasFactory;
    protected $table = 'rel_agua_libre_solicitud_ensayo';

    protected $fillable = [
        'agua_libre',
        'volumen',
        'api_agua_libre',
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
