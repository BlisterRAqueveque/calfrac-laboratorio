<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario_Solicitud extends Model
{
    use HasFactory;
    protected $table = 'comentarios_solicitudes';

    protected $fillable = [
        'comentario',
        'usuario_comentario',
        'respuesta',
        'usuario_rta',
        'fecha_hora_rta',
        'solicitud_id',
    ];

    public function user_comment()
    {
        return $this->belongsTo(User::class, 'usuario_comentario');
    }

    public function user_rta()
    {
        return $this->belongsTo(User::class, 'usuario_rta');
    }
}
