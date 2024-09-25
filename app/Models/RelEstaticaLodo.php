<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelEstaticaLodo extends Model
{
    use HasFactory;
    protected $table = 'rel_estatica_lodo';

    protected $fillable = [
        'tiempo_estatica_1',
        'tiempo_estatica_2',
        'tiempo_estatica_3',
        'tiempo_estatica_4',
        'tiempo_estatica_5',
        'img_1',
        'img_2',
        'solicitud_lodo_id',
        'usuario_carga',
    ];

    public function solicitud_lodo() {
        return $this->hasMany(SolicitudLodo::class);
    }

    public function user() {
        return $this->belongsTo(User::class, 'usuario_carga');
    }
}
