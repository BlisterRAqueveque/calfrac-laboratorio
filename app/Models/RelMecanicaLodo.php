<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelMecanicaLodo extends Model
{
    use HasFactory;
    protected $table = 'rel_mecanica_lodo';

    protected $fillable = [
        'tiempo_1',
        'tiempo_2',
        'tiempo_3',
        'tiempo_4',
        'tiempo_5',
        'img_1',
        'img_2',
        'solicitud_lodo_id',
        'usuario_carga',
    ];

    public function solicitud_lodo() {
        return $this->hasMany(SolicitudLodo::class, 'solicitud_lodo_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'usuario_carga');
    }
}
