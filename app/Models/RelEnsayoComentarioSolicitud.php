<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelEnsayoComentarioSolicitud extends Model
{
    use HasFactory;
    protected $table = 'rel_ensayos_comentarios_solicitud';

    protected $fillable = [
        'solicitud_id',
        'comentario_ensayo'
    ];
}
