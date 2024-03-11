<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edicion_Solicitud extends Model
{
    use HasFactory;

    protected $table = 'edicion_solicitud';
    protected $fillable = [
        'fundamento',
        'usuario_fundamento',
        'respuesta',
        'usuario_rta',
        'fecha_hora_rta',
        'solicitud_id',
    ];

    public function user_fundamento()
    {
        return $this->belongsTo(User::class, 'usuario_fundamento');
    }

    public function user_rta()
    {
        return $this->belongsTo(User::class, 'usuario_rta');
    }
}
