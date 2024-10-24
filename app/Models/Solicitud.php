<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;
    protected $table = 'solicitud';
    protected $fillable = [
        'tipo',
        //'proyecto_number',
        'servicio_number',
        'cliente_id',
        'locacion_id',
        'programa',
        'fecha_solicitud',
        //'empresa',
        //'fecha_tratamiento',
        'pozo',
        'rep_compania',
        //'fecha_reporte',
        //'rep_venta',
        'fecha_resultados',
        'equipo',
        'servicio',
        'servicios_fractura',
        'distrito',
        'tipo_requerimiento_cemento_id',
        'tipo_trabajo_cemento_id',
        'tipo_cementacion_id',
        'ensayo_requerido',
        'comentario_ensayo',
        'reporte_lab_tall',
        'reporte_lab_lead',
        'solicitud',
        'estado_solicitud_id',
        'aprobada',
        'fecha_aprobada',
        'usuario_aprobo',
        'ensayo_asignado_id',
        'fundamento_asignacion',
        'fecha_asignacion',
        'activo',
        'user_id',
    ];

    protected $casts = [
        'fecha_solicitud' => 'date',
        'fecha_aprobada' => 'datetime',
        'fecha_asignacion' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function user_aprobo()
    {
        return $this->belongsTo(User::class, 'usuario_aprobo');
    }

    public function locacion()
    {
        return $this->belongsTo(Yacimiento::class, 'locacion_id');
    }

    public function locacion_fractura()
    {
        return $this->belongsTo(YacimientosFractura::class, 'locacion_id');
    }

    public function estado()
    {
        return $this->belongsTo(Estado_Solicitud::class, 'estado_solicitud_id');
    }

    public function ensayo()
    {
        return $this->belongsTo(Ensayo::class, 'ensayo_asignado_id');
    }

    public function referencias() {
        return $this->hasMany(RelEnsayoReferenciaSolicitud::class);
    }

    public function fundamento() {
        return $this->hasMany(Edicion_Solicitud::class);
    }

    public function cliente() {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function tipo_cementacion() {
        return $this->belongsTo(TipoCementacion::class, 'tipo_cementacion_id');
    }

    public function tipo_requerimiento_cemento () {
        return $this->belongsTo(TipoRequerimientoCemento::class, 'tipo_requerimiento_cemento_id');
    }

    public function tipo_trabajo_cemento() {
        return $this->belongsTo(TipoTrabajoCemento::class, 'tipo_trabajo_cemento_id');
    }

    public function equipos() {
        return $this->belongsTo(Equipos::class, 'equipo');
    }

    public function fractura_servicios() {
        return $this->belongsTo(ServiciosFractura::class, 'servicios_fractura');
    }

    public function distrito_fractura() {
        return $this->belongsTo(Distrito::class, 'distrito');
    }

    public function solicitudes_lodo()
    {
        return $this->hasMany(SolicitudLodo::class, 'solicitud_id');
    }

    // Variables para PDF Ensayo Lodo

    public function servicios_lodo() {
        return $this->belongsTo(Servicios::class, 'servicio');
    }

}
