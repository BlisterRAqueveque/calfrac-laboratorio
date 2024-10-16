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
        'fecha_reconocimiento',
        'firma_solicitante_id',
        'fecha_solicitante',
        'mud_company',
        'densidad_lodo',
        'temperatura',
        'vol_colchon',
        'densidad_colchon',
        'tiempo_contacto',
        'comentario',
        'tipo_colchon',
        'vp',
        'pf',
        'comentario_ensayo_referencia'

    ];

    public function compatibilidades()
    {
        return $this->hasMany(RelEnsayoCompatibilidad::class, 'solicitud_lodo_id');
    }

    public function mecanica()
    {
        return $this->hasMany(RelEnsayoMecanica::class, 'solicitud_lodo_id');
    }

    public function estatica()
    {
        return $this->hasMany(RelEnsayoEstatica::class, 'solicitud_lodo_id');
    }

    public function rel_colchon() {
        return $this->belongsTo(TipoDeColchon::class, 'tipo_colchon', 'id');
    }

    public function rel_aditivos() {
        return $this->hasMany(RelAditivosEnsayosLodo::class);
    }

    public function rel_caracterizacion() {
        return $this->hasMany(RelCaracterizacionLodo::class);
    }

    public function rel_reologia_lodo() {
        return $this->hasMany(RelReologiasLodo::class);
    }

    public function rel_compatibilidad() {
        return $this->hasMany(RelCompatibilidadLodo::class);
    }

    public function rel_mecanica() {
        return $this->hasMany(RelMecanicaLodo::class);
    }

    public function rel_estatica() {
        return $this->hasMany(RelEstaticaLodo::class);
    }
    
    public function rel_humectabilidad() {
        return $this->hasMany(RelHumectabilidad::class);
    }

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

    public function user_solicitante()
    {
        return $this->belongsTo(User::class, 'firma_solicitante_id');
    }

    public function user_autorizacion()
    {
        return $this->belongsTo(User::class, 'firma_autorizacion_id');
    }

    public function formulacion_tentativa()
    {
        return $this->hasMany(RelAditivoSolicitudLodo::class);
    }

    public function solicitud()
    {
        return $this->belongsTo(Solicitud::class);
    }

    // Variables para PDF de Ensayos Lodo

    public function compania_lodo() {
        return $this->belongsTo(MudCompany::class, 'mud_company');
    }

    public function tipo_lodo_Lodos() {
        return $this->belongsTo(TipoLodo_Lodos::class, 'tipo_lodo');
    }

}
