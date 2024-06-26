<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitudLodo extends Model
{
    use HasFactory;
    protected $table = 'solicitud_lodo';

    protected $fillable = [
      'id',
      'created_at',
      'updated_at',
      'tipo_lodo',
      'profundidad_md',
      'profundidad_tvd',
      'solicitud_id',
      'usuario_carga',
      'firma_autorizacion_id',
      'fecha_autorizacion',
      'firma_reconocimiento_id',
      'fecha_reconocimiento'  
    ];

}
