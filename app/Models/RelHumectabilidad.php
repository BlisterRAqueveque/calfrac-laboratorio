<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelHumectabilidad extends Model
{
    use HasFactory;

    protected $table = 'rel_humectabilidad';

    protected $fillable = [
        'humectabilidad',
        'solicitud_lodo_id',
        'usuario_carga',
        'check_humectabilidad'
    ];

    public function solicitud_lodo() {
        return $this->hasMany(SolicitudLodo::class);
    }

    public function user() {
        return $this->belongsTo(User::class, 'usuario_carga');
    }
}
