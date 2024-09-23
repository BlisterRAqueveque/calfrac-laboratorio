<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelReologiasLodo extends Model
{
    use HasFactory;
    protected $table = 'rel_reologias_lodo';
    protected $fillable = [
        'temp_600_rpm',
        'temp_300_rpm',
        'temp_200_rpm',
        'temp_100_rpm',
        'temp_60_rpm',
        'temp_30_rpm',
        'temp_6_rpm',
        'temp_3_rpm',
        'temp_600_rpm_2',
        'temp_300_rpm_2',
        'temp_200_rpm_2',
        'temp_100_rpm_2',
        'temp_60_rpm_2',
        'temp_30_rpm_2',
        'temp_6_rpm_2',
        'temp_3_rpm_2',
        'temp_600_rpm_3',
        'temp_300_rpm_3',
        'temp_200_rpm_3',
        'temp_100_rpm_3',
        'temp_60_rpm_3',
        'temp_30_rpm_3',
        'temp_6_rpm_3',
        'temp_3_rpm_3',
        'temp_600_rpm_4',
        'temp_300_rpm_4',
        'temp_200_rpm_4',
        'temp_100_rpm_4',
        'temp_60_rpm_4',
        'temp_30_rpm_4',
        'temp_6_rpm_4',
        'temp_3_rpm_4',
        'temp_600_rpm_5',
        'temp_300_rpm_5',
        'temp_200_rpm_5',
        'temp_100_rpm_5',
        'temp_60_rpm_5',
        'temp_30_rpm_5',
        'temp_6_rpm_5',
        'temp_3_rpm_5',
        'solicitud_lodo_id',
        'reologia_id',
        'usuario_carga',

    ];

    public function solicitud_lodo() {
        return $this->belongsTo(SolicitudLodo::class);
    }

    public function user() {
        return $this->belongsTo(User::class, 'usuario_carga');
    }
    
    public function rel_reologia_lodo()
    {
        return $this->belongsTo(RelCaracterizacionLodo::class, 'reologia_id');
    }
}
