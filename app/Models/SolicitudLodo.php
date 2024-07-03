<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitudLodo extends Model
{
    use HasFactory;
    protected $table = 'solicitud_lodo';

    protected $fillable = [
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

    
    public function user_iniciado_por()
    {
        return $this->belongsTo(User::class, 'firma_iniciado_por_id');
    }
    public function user_servicio_tecnico()
    {
        return $this->belongsTo(User::class, 'firma_servicio_tecnico_id');
    }
    public function user_laboratorio()
    {
        return $this->belongsTo(User::class, 'firma_laboratorio_id');
    }
    public function user_reconocimiento()
    {
        return $this->belongsTo(User::class, 'firma_reconocimiento_id');
    }

    public function formulacion_tentativa() {
      return $this->hasMany(RelAditivoSolicitudLodo::class);
  }

}
