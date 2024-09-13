<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitudLechada extends Model
{
    use HasFactory;
    protected $table = 'solicitud_lechada';

    protected $fillable = [
        'OH',
        'trepano',
        'casing_id',
        'casing_od',
        'densidad_lodo',
        'tipo_lodo',
        'mud_company_id',
        'profundidad_pozo_md',
        'profundidad_pozo_tvd',
        'base_md',
        'base_tvd',
        'top_of_slurry_tvd',
        'top_of_slurry_md',
        'volumen',
        'pump_rate',
        'grado_temperatura',
        'bhst',
        'bhct',
        'ensayo_requerido_principal',
        'ensayo_requerido_bullheading',
        'ensayo_requerido_tapon',
        'ensayo_requerido_relleno',
        'reologia',
        'densidad',
        'filtrado',
        'bombeabilidad',
        'tiempo_50_psi',
        'tiempo_500_psi',
        'tiempo_1000_psi',
        'resistencia_12_hs',
        'resistencia_24_hs',
        'agua_libre',
        'sgs',
        'tipo_cemento',
        'observacion',
        'firma_autorizacion_id',
        'fecha_autorizacion',
        'firma_reconocimiento_id',
        'fecha_reconocimiento',
        'firma_solicitante_id',
        'fecha_solicitante',
        'solicitud_id',
        'usuario_carga',
    ];

    public function user_autorizacion()
    {
        return $this->belongsTo(User::class, 'firma_autorizacion_id');
    }

    public function user_reconocimiento()
    {
        return $this->belongsTo(User::class, 'firma_reconocimiento_id');
    }

    public function solicitado()
    {
        return $this->belongsTo(User::class, 'firma_solicitante_id');
    }

    public function mud_company()
    {
        return $this->belongsTo(MudCompany::class, 'mud_company_id');
    }

    public function sgs() {
        return $this->belongsTo(Sgs::class, 'sgs');
    }

    public function agua_libre() {
        return $this->belongsTo(AguaLibre::class, 'agua_libre');
    }
    
    public function formulacion_tentativa() {
        return $this->hasMany(RelAditivoSolicitudLechada::class);
    }

    public function rel_reologia() {
        return $this->hasMany(RelReologiaSolicitudEnsayo::class);
    }

    public function rel_perdida_filtrado() {
        return $this->hasMany(RelPerdidaSolicitudEnsayo::class);
    }

    public function calculos_reologias()
    {
        return $this->hasMany(CalculosReologias::class , 'solicitud_id');
    }

    public function rel_bombeabilidad() {
        return $this->hasMany(RelBombeabilidadSolicitudEnsayo::class);
    }

    public function rel_uca() {
        return $this->hasMany(RelUcaSolicitudEnsayo::class);
    }

    public function rel_agua_libre() {
        return $this->hasMany(RelAguaLibreSolicitudEnsayo::class);
    }

    public function rel_mezclabilidad() {
        return $this->hasMany(RelMezclabilidadSolicitudEnsayo::class);
    }

    public function rel_aditivos() {
        return $this->hasMany(RelAditivosEnsayosLechada::class);
    }

    public function buscar_mail($userId){
        //paso el id usuario
        //where con el id, busco en la bd el email -> return email
        return User::where('id', $userId)->pluck('email')->first();
    }
}
