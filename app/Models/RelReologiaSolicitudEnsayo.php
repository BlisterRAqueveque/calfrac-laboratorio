<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelReologiaSolicitudEnsayo extends Model
{
    use HasFactory;
    protected $table = 'rel_reologia_solicitud_ensayo';

    protected $fillable = [
        'tem_ambiente_rpm',
        'tem_ambiente_300',
        'tem_ambiente_200',
        'tem_ambiente_100',
        'tem_ambiente_60',
        'tem_ambiente_30',
        'tem_ambiente_6',
        'tem_ambiente_3',
        'tem_ensayo_rpm',
        'tem_ensayo_300',
        'tem_ensayo_200',
        'tem_ensayo_100',
        'tem_ensayo_60',
        'tem_ensayo_30',
        'tem_ensayo_6',
        'tem_ensayo_3',
        'tem_ambiente_rpm_up',
        'tem_ambiente_300_up',
        'tem_ambiente_200_up',
        'tem_ambiente_100_up',
        'tem_ambiente_60_up',
        'tem_ambiente_30_up',
        'tem_ambiente_6_up',
        'tem_ambiente_3_up',
        'tem_ensayo_rpm_up',
        'tem_ensayo_300_up',
        'tem_ensayo_200_up',
        'tem_ensayo_100_up',
        'tem_ensayo_60_up',
        'tem_ensayo_30_up',
        'tem_ensayo_6_up',
        'tem_ensayo_3_up',
        // 'tem_ambiente_rpm_down',
        // 'tem_ambiente_300_down',
        // 'tem_ambiente_200_down',
        // 'tem_ambiente_100_down',
        // 'tem_ambiente_60_down',
        // 'tem_ambiente_30_down',
        // 'tem_ambiente_6_down',
        // 'tem_ambiente_3_down',
        // 'tem_ensayo_rpm_down',
        // 'tem_ensayo_300_down',
        // 'tem_ensayo_200_down',
        // 'tem_ensayo_100_down',
        // 'tem_ensayo_60_down',
        // 'tem_ensayo_30_down',
        // 'tem_ensayo_6_down',
        // 'tem_ensayo_3_down',
        //'temp_ambiente',
        //'temp_ensayo',
        //'temp_ambiente_punto_cedencia',
        //'temp_ensayo_punto_cedencia',
        'temp_ambiente_gel_10_seg',
        'temp_ensayo_gel_10_seg',
        'temp_ambiente_gel_10_min',
        'temp_ensayo_gel_10_min',
        'ensayo_id',
        'solicitud_lechada_id',
        'selected',
        //'img_up',
        //'img_down',
        'usuario_carga',
    ];

    public function solicitud_lechada() {
        return $this->hasMany(SolicitudLechada::class);
    }

    public function user() {
        return $this->belongsTo(User::class, 'usuario_carga');
    }
}
