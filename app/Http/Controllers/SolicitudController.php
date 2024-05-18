<?php

namespace App\Http\Controllers;

use App\Mail\SolicitudMail;
use App\Models\Aditivo;
use App\Models\AgenteSosten;
use App\Models\AnalisisMicrobial;
use App\Models\Cliente;
use App\Models\Edicion_Solicitud;
use App\Models\Ensayo;
use App\Models\MudCompany;
use App\Models\OtrosAnalisis;
use App\Models\RelAditivoSolicitudLechada;
use App\Models\RelEnsayoReferenciaSolicitud;
use App\Models\RelFormulacionTentativa;
use App\Models\SistemasFluidos;
use App\Models\Solicitud;
use App\Models\SolicitudFractura;
use App\Models\SolicitudLechada;
use App\Models\TipoCementacion;
use App\Models\TipoLodo;
use App\Models\TipoRequerimientoCemento;
use App\Models\TipoTrabajoCemento;
use App\Models\User;
use App\Models\Yacimiento;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Mail;

class SolicitudController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function create()
    {
        $this->authorize('create', Solicitud::class);
        $data = [
            'ensayos' => Ensayo::where('tipo', 'CN')->get(),
            'clientes' => Cliente::all(),
            'yacimientos' => Yacimiento::all(),
            'sistemas_fluidos' => SistemasFluidos::all(),
            'analisis_microbial' => AnalisisMicrobial::all(),
            'agente_sosten' => AgenteSosten::all(),
            'otros_analisis' => OtrosAnalisis::all(),
            'tipo_trabajo_cemento' => TipoTrabajoCemento::all(),
            'tipo_cementacion' => TipoCementacion::all(),
            'tipo_requerimiento_cemento' => TipoRequerimientoCemento::all(),
            'tipo_lodo' =>  TipoLodo::all(),
            'mud_company' =>  MudCompany::all(),
            'users' => User::all(),
        ];
        return view('solicitud.create', $data);
    }

    /**
     * Crea una nueva Solicitud de Fractura
     * Primero crea el encabezado general, que es la "Solicitud" y luego crea la "Solicitud de Fractura"
     */
    public function store_fractura(Request $request)
    {
        # Validamos los datos del encabezado general
        $this->validate($request, [
            'proyecto_number' => 'required',
            'servicio_number' => 'required',
            'cliente' => 'required',
            'locacion' => 'required',
            'programa' => 'required',
            'fecha_solicitud' => 'required',
            'empresa' => 'required',
            'fecha_tratamiento' => 'required',
            'pozo' => 'required',
            'rep_compania' => 'required',
            'fecha_reporte' => 'required',
            'rep_venta' => 'required',
            'fecha_resultados' => 'required',
            'equipo' => 'required',
            'servicio' => 'required',
            'reporte_lab_tall' => 'required',
            'reporte_lab_lead' => 'required',
        ]);


        # Crea la Información General
        $solicitud = Solicitud::create([
            'tipo' => 1,
            'proyecto_number' => $request->proyecto_number,
            'servicio_number' => $request->servicio_number,
            'cliente' => $request->cliente,
            'locacion' => $request->locacion,
            'programa' => $request->programa,
            'fecha_solicitud' => $request->fecha_solicitud,
            'empresa' => $request->empresa,
            'fecha_tratamiento' => $request->fecha_tratamiento,
            'pozo' => $request->pozo,
            'rep_compania' => $request->rep_compania,
            'fecha_reporte' => $request->fecha_reporte,
            'rep_venta' => $request->rep_venta,
            'fecha_resultados' => $request->fecha_resultados,
            'equipo' => $request->equipo,
            'servicio' => $request->servicio,
            'reporte_lab_tall' => $request->reporte_lab_tall,
            'reporte_lab_lead' => $request->reporte_lab_lead,
            'estado_solicitud_id' => 1,
            'user_id' => auth()->user()->id
        ]);

        # Create el resto de la Solicitud de Fractura
        $solicitud_fractura = SolicitudFractura::create([
            'fluido' => $request->fluido,
            'formacion' => $request->formacion,
            'bhst' => $request->bhst,
            'tipo_temp_bhst' => $request->tipo_temp_bhst,
            'temp_ensayo' => $request->temp_ensayo,
            'tipo_temp_ensayo' => $request->tipo_temp_ensayo,
            'aditivo_extra' => $request->aditivo_extra,
            'proveedor' => $request->proveedor,
            'producto' => $request->producto,
            'concentracion' => $request->concentracion,
            'sistema_fluido_id' => $request->sistema_fluido,
            'analisis_microbial_id' => $request->analisis_microbial,
            'agente_sosten_id' => $request->agente_sosten,
            'otro_analisis_id' => $request->otros,
            'comentario' => $request->comentario,
            'firma_iniciado_por_id' => $request->firma_iniciado_por,
            'fecha_firma_iniciado_por' => $request->fecha_firma_iniciado_por,
            'firma_servicio_tecnico_id' => $request->firma_servicios_tecnicos,
            'fecha_firma_servicios_tecnicos' => $request->fecha_firma_servicios_tecnicos,
            'firma_laboratorio_id' => $request->firma_laboratorio,
            'fecha_firma_laboratorio' => $request->fecha_firma_laboratorio,
            'firma_reconocimiento_id' => $request->firma_reconocimiento,
            'fecha_firma_reconocimiento' => $request->fecha_firma_reconocimiento,
            'solicitud_id' => $solicitud->id,
            'usuario_carga' => auth()->user()->id
        ]);

        # Envío de Emails
        $correos = [];
        if ($solicitud_fractura->user_iniciado_por)
            $correos[] = $solicitud_fractura->user_iniciado_por->email;
        if ($solicitud_fractura->user_servicio_tecnico)
            $correos[] = $solicitud_fractura->user_servicio_tecnico->email;
        if ($solicitud_fractura->user_laboratorio)
            $correos[] = $solicitud_fractura->user_laboratorio->email;
        if ($solicitud_fractura->user_reconocimiento)
            $correos[] = $solicitud_fractura->user_reconocimiento->email;

        $data = [
            'solicitud_id' => $solicitud->id,
            'locacion' => $request->locacion,
            'fecha_solicitud' => $request->fecha_solicitud,
            'usuario_carga' => auth()->user()->nombre . ' ' . auth()->user()->apellido,
            'cliente' => $request->cliente,
            'empresa' => $request->empresa
        ];
        $this->_sendEmailNew($data, $correos);
        // -- Finaliza el envío de emails

        if ($solicitud->id)
            return redirect('solicitud')->with('success', $solicitud->id);
        // return redirect()->route('solicitudes')->with('success', 'La Solicitud de Fractura Nº' . $solicitud->id . ' se ha creado correctamente.');
    }

    /**
     * Crea una Solicitud de Lechada
     * Primero crea el encabezado general, que es la "Solicitud" y luego crea la "Solicitud de Lechada"
     */
    public function store_lechada(Request $request)
    {
        # Validamos los datos del encabezado general
        $this->validate($request, [
            'cliente_lechada' => 'required',
            'locacion_lechada' => 'required',
            'programa_lechada' => 'required',
            'empresa_lechada' => 'required',
            'pozo_lechada' => 'required',
            'fecha_resultados_lechada' => 'required',
            'equipo_lechada' => 'required',
            'servicio_lechada' => 'required',
            'tipo_requerimiento_lechada' => 'required',
            'tipo_trabajo_lechada' => 'required',
            'tipo_cementacion_lechada' => 'required',
        ]);

        # Solicitud General
        $solicitud = Solicitud::create([
            'tipo' => 2,
            'cliente_id' => $request->cliente_lechada,
            'locacion' => $request->locacion_lechada,
            'programa' => $request->programa_lechada,
            'fecha_solicitud' => date('Y-m-d'),
            'empresa' => $request->empresa_lechada,
            'pozo' => $request->pozo_lechada,
            'fecha_resultados' => $request->fecha_resultados_lechada,
            'equipo' => $request->equipo_lechada,
            'servicio' => $request->servicio_lechada,
            'tipo_requerimiento_cemento_id' => $request->tipo_requerimiento_lechada,
            'tipo_trabajo_cemento_id' => $request->tipo_trabajo_lechada,
            'tipo_cementacion_id' => $request->tipo_cementacion_lechada,
            'estado_solicitud_id' => 1,
            'user_id' => auth()->user()->id
        ]);

        # Solicitud de Lechada
        $solicitud_lechada = SolicitudLechada::create([
            'ensayo_requerido_principal' => $request->ensayo_requerido_principal == 'on' ? 1 : 0,
            'ensayo_requerido_relleno' => $request->ensayo_requerido_bullheading == 'on' ? 1 : 0,
            'OH' => $request->OH,
            'trepano' => $request->trepano,
            'casing_id' => $request->casing_id,
            'casing_od' => $request->casing_od,
            'densidad_lodo' => $request->densidad_lodo,
            'tipo_lodo' => $request->tipo_lodo,
            'mud_company_id' => $request->mud_company,
            'profundidad_pozo_md' => $request->profundidad_pozo_md,
            'profundidad_pozo_tvd' => $request->profundidad_pozo_tvd,
            'base_md' => $request->base_md,
            'base_tvd' => $request->base_tvd,
            'top_of_slurry_tvd' => $request->top_of_slurry_tvd,
            'top_of_slurry_md' => $request->top_of_slurry_md,
            'volumen' => $request->volumen,
            'pump_rate' => $request->pump_rate,
            'grado_temperatura' => $request->grado_temperatura,
            'bhst' => $request->bhst,
            'bhct' => $request->bhct,
            'reologia' => $request->reologia,
            'densidad' => $request->densidad,
            'filtrado' => $request->filtrado,
            'bombeabilidad' => $request->bombeabilidad,
            'tiempo_50_psi' => $request->tiempo_50_psi == 'on' ? 1 : 0,
            'tiempo_500_psi' => $request->tiempo_500_psi == 'on' ? 1 : 0,
            'resistencia_12_hs' => $request->resistencia_12_hs == 'on' ? 1 : 0,
            'resistencia_24_hs' => $request->resistencia_24_hs == 'on' ? 1 : 0,
            'agua_libre' => $request->agua_libre,
            'sgs' => $request->sgs,
            'tipo_cemento' => $request->tipo_cemento,
            'observacion' => $request->observacion_lechada,
            'firma_autorizacion_id' => auth()->user()->id,
            'fecha_autorizacion' => date('Y-m-d'),
            'firma_reconocimiento_id' => $request->firma_reconocimiento_lechada,
            'fecha_reconocimiento' => $request->fecha_reconocimiento_lechada,
            'solicitud_id' => $solicitud->id,
            'usuario_carga' => auth()->user()->id
        ]);

        // == Relaciones ==

        # Ensayos de Referencias
        /*
        $ensayos_referencias = $request->ensayo_referencia;

        if ($ensayos_referencias && count($ensayos_referencias) > 0) {
            foreach ($ensayos_referencias as $value) {
                if ($value['ensayo_id'] != null) {
                    RelEnsayoReferenciaSolicitud::create([
                        'ensayo_id' => $value['ensayo_id'],
                        'solicitud_id' => $solicitud->id,
                        'top_of_slurry_tvd' => $value['top_of_slurry_tvd'],
                        'top_of_slurry_md' => $value['top_of_slurry_md'],
                        'densidad' => $value['densidad'],
                        'grado_temperatura' => $value['grado_temperatura'],
                        'bhce' => $value['bhce'],
                        'bhct' => $value['bhct'],
                    ]);
                }
            }
        }
        */

        # Formulaciones Tentativas
        if ($request->aditivos) {

            foreach ($request->aditivos as $formulacion) {
                RelAditivoSolicitudLechada::create([
                    'solicitud_lechada_id' => $solicitud_lechada->id,
                    'lote' => $formulacion['lote'],
                    'aditivo' => $formulacion['aditivo'],
                    'concentracion' => $formulacion['concentracion'],
                ]);
            }
        }

        if ($solicitud->id)
            return redirect('solicitud')->with('success', $solicitud->id);
    }

    /**
     * Cuando se aprueba una solicitud, se almacena el usuario quién aprobó, 
     * cambia de estado y también se almacena la fecha
     */
    public function store_aprobar(Request $request)
    {
        $solicitud = Solicitud::find($request->solicitud_id);
        $solicitud->estado_solicitud_id = 2;
        $solicitud->aprobada = 1;
        $solicitud->fecha_aprobada = date('Y-m-d H:i:s');
        $solicitud->usuario_aprobo = auth()->user()->id;
        $solicitud->save();

        # Envío de Email
        $data = [
            'solicitud_id' => $solicitud->id,
            'fecha_aprobada' => $solicitud->fecha_aprobada->format('d/m/Y'),
            'usuario_aprobo' => $solicitud->user_aprobo->nombre . ' ' . $solicitud->user_aprobo->apellido,
        ];
        $this->_sendEmailApproved($data, $solicitud->user->email);
        // -- Finaliza el envío de email
        return $solicitud->id;
    }

    /**
     * Edita la solicitud de fractura, la misma se crea un comentario/fundamento al respecto de por qué se está editando
     */
    public function update(Request $request)
    {
        # Validamos los datos del encabezado general
        $this->validate($request, [
            'proyecto_number' => 'required',
            'servicio_number' => 'required',
            'cliente' => 'required',
            'locacion' => 'required',
            'programa' => 'required',
            'fecha_solicitud' => 'required',
            'empresa' => 'required',
            'fecha_tratamiento' => 'required',
            'pozo' => 'required',
            'rep_compania' => 'required',
            'fecha_reporte' => 'required',
            'rep_venta' => 'required',
            'fecha_resultados' => 'required',
            'equipo' => 'required',
            'servicio' => 'required',
            'reporte_lab_tall' => 'required',
            'reporte_lab_lead' => 'required',
            'fundamento_edicion' => 'required'
        ]);

        # Editando los datos de la solicitud en general
        $solicitud = Solicitud::find($request->solicitud_id);
        $solicitud->proyecto_number = $request->proyecto_number;
        $solicitud->servicio_number = $request->servicio_number;
        $solicitud->cliente = $request->cliente;
        $solicitud->locacion = $request->locacion;
        $solicitud->programa = $request->programa;
        $solicitud->fecha_solicitud = $request->fecha_solicitud;
        $solicitud->empresa = $request->empresa;
        $solicitud->fecha_tratamiento = $request->fecha_tratamiento;
        $solicitud->pozo = $request->pozo;
        $solicitud->rep_compania = $request->rep_compania;
        $solicitud->fecha_reporte = $request->fecha_reporte;
        $solicitud->rep_venta = $request->rep_venta;
        $solicitud->fecha_resultados = $request->fecha_resultados;
        $solicitud->equipo = $request->equipo;
        $solicitud->servicio = $request->servicio;
        $solicitud->reporte_lab_tall = $request->reporte_lab_tall;
        $solicitud->reporte_lab_lead = $request->reporte_lab_lead;
        $solicitud->updated_at = date('Y-m-d H:i:s');
        $solicitud->save();

        # Editando los datos de la solicitud de fractura
        $solicitud_fractura = SolicitudFractura::where('solicitud_id', $solicitud->id)->first();
        $solicitud_fractura->fluido = $request->fluido;
        $solicitud_fractura->formacion = $request->formacion;
        $solicitud_fractura->bhst = $request->bhst;
        $solicitud_fractura->tipo_temp_bhst = $request->tipo_temp_bhst;
        $solicitud_fractura->temp_ensayo = $request->temp_ensayo;
        $solicitud_fractura->tipo_temp_ensayo = $request->tipo_temp_ensayo;
        $solicitud_fractura->proveedor = $request->proveedor;
        $solicitud_fractura->producto = $request->producto;
        $solicitud_fractura->concentracion = $request->concentracion;
        $solicitud_fractura->sistema_fluido_id = $request->sistema_fluido_id;
        $solicitud_fractura->analisis_microbial_id = $request->analisis_microbial_id;
        $solicitud_fractura->agente_sosten_id = $request->agente_sosten_id;
        $solicitud_fractura->otro_analisis_id = $request->otro_analisis_id;
        $solicitud_fractura->comentario = $request->comentario;
        $solicitud_fractura->firma_iniciado_por_id = $request->firma_iniciado_por_id;
        $solicitud_fractura->fecha_firma_iniciado_por = $request->fecha_firma_iniciado_por;
        $solicitud_fractura->firma_servicio_tecnico_id = $request->firma_servicio_tecnico_id;
        $solicitud_fractura->fecha_firma_servicios_tecnicos = $request->fecha_firma_servicios_tecnicos;
        $solicitud_fractura->firma_laboratorio_id = $request->firma_laboratorio_id;
        $solicitud_fractura->fecha_firma_laboratorio = $request->fecha_firma_laboratorio;
        $solicitud_fractura->firma_reconocimiento_id = $request->firma_reconocimiento_id;
        $solicitud_fractura->fecha_firma_reconocimiento = $request->fecha_firma_reconocimiento;
        $solicitud_fractura->fecha_firma_reconocimiento = $request->fecha_firma_reconocimiento;
        $solicitud_fractura->save();

        # La fundamentación del por qué se editó la solicitud
        $edicion_solicitud = Edicion_Solicitud::create([
            'fundamento' => $request->fundamento_edicion,
            'usuario_fundamento' => auth()->user()->id,
            'solicitud_id' => $solicitud->id
        ]);

        # Envío de Email
        # => Envía que se editó la Solicitud al usuario quien cargó la solicitud
        $data = [
            'solicitud_id' => $solicitud->id,
            'usuario_edicion' => $edicion_solicitud->user_fundamento->nombre . ' ' . $edicion_solicitud->user_fundamento->apellido,
            'fecha_edicion' => $edicion_solicitud->created_at->format('d-m-Y'),
            'fundamento' => $edicion_solicitud->fundamento
        ];
        $this->_sendEmailEdition($data, $solicitud->user->email);
        // -- Finaliza el envío de email

        if ($solicitud->id)
            return back()->with('success', $solicitud->id);
    }

    /**
     * 
     */
    public function update_rta($user_id, Request $request)
    {
        $this->validate($request, [
            'respuesta' => 'required',
        ]);

        $fundamento = Edicion_Solicitud::find($request->fundamento_id);

        $fundamento->respuesta = $request->respuesta;
        $fundamento->usuario_rta = $user_id;
        $fundamento->fecha_hora_rta = date('Y-m-d H:i:s');
        $fundamento->save();
        return back();
    }

    public function store_lodo(Request $request)
    {
    }
    public function index()
    {
        $data = [
            'solicitudes' => Solicitud::orderBy('id', 'desc')->paginate(10),
        ];
        return view('solicitud.index', $data);
    }

    public function show_fractura($solicitud_id)
    {
        $data = [
            'solicitud' => Solicitud::find($solicitud_id),
            'solicitud_fractura' => SolicitudFractura::where('solicitud_id', $solicitud_id)->get(),
            'sistemas_fluidos' => SistemasFluidos::all(),
            'analisis_microbial' => AnalisisMicrobial::all(),
            'agente_sosten' => AgenteSosten::all(),
            'otros_analisis' => OtrosAnalisis::all(),
            'aditivos' => Aditivo::all(),
            'users' => User::all(),
            'ensayos' => Ensayo::with('aditivos', 'requerimientos')->where('solicitud_id', $solicitud_id)->get()
        ];
        return view('solicitud.components.fractura.show', $data);
    }

    public function show_lechada($solicitud_id)
    {

        $data = [
            'solicitud' => Solicitud::find($solicitud_id),
            'ensayos_referencia' => RelEnsayoReferenciaSolicitud::where('solicitud_id', $solicitud_id)->get(),
            's_l' => SolicitudLechada::where('solicitud_id', $solicitud_id)->get(),
            'sistemas_fluidos' => SistemasFluidos::all(),
            'analisis_microbial' => AnalisisMicrobial::all(),
            'agente_sosten' => AgenteSosten::all(),
            'otros_analisis' => OtrosAnalisis::all(),
            'aditivos' => Aditivo::all(),
            'users' => User::all(),
            'clientes' => Cliente::all(),
            'yacimientos' => Yacimiento::all(),
            'tipo_requerimiento_cemento' => TipoRequerimientoCemento::all(),
            'tipo_trabajos' => TipoTrabajoCemento::all(),
            'tipo_cementacion' => TipoCementacion::all(),
            // 'ensayos' => Ensayo::with('aditivos', 'requerimientos')->where('solicitud_id', $solicitud_id)->get()
        ];
        $generate_report = $this->_generate_report($solicitud_id);
        $data['generar_reporte'] = $generate_report->original['generate_report'];
        return view('solicitud.components.lechada.show', $data);
    }

    public function update_lechada(Request $request)
    {
        $aditivos_request = $request->aditivos;
        $id_aditivos = array_column($aditivos_request, 'id');

        # Validamos los datos del encabezado general
        $this->validate($request, [
            'cliente_lechada' => 'required',
            'locacion_lechada' => 'required',
            'programa_lechada' => 'required',
            'empresa_lechada' => 'required',
            'pozo_lechada' => 'required',
            'fecha_resultados_lechada' => 'required',
            'equipo_lechada' => 'required',
            'servicio_lechada' => 'required',
            'tipo_requerimiento_lechada' => 'required',
            'tipo_trabajo_lechada' => 'required',
            'tipo_cementacion_lechada' => 'required',
        ]);

        // Change => Datos de la solicitud general
        $solicitud = Solicitud::find($request->solicitud_id);
        $solicitud->locacion = $request->locacion_lechada;
        $solicitud->programa = $request->programa_lechada;
        $solicitud->empresa = $request->empresa_lechada;
        $solicitud->pozo = $request->pozo_lechada;
        $solicitud->fecha_resultados = $request->fecha_resultados_lechada;
        $solicitud->equipo = $request->equipo_lechada;
        $solicitud->servicio = $request->servicio_lechada;
        $solicitud->tipo_requerimiento_cemento_id = $request->tipo_requerimiento_lechada;
        $solicitud->tipo_trabajo_cemento_id = $request->tipo_trabajo_lechada;
        $solicitud->tipo_cementacion_id = $request->tipo_cementacion_lechada;
        $solicitud->save();

        // Change => Datos de la solicitud de lechada
        $solicitud_lechada = SolicitudLechada::where('solicitud_id', $solicitud->id)->first();
        $solicitud_lechada->ensayo_requerido_principal = $request->ensayo_requerido_principal == 'on' ? 1 : 0;
        $solicitud_lechada->ensayo_requerido_relleno = $request->ensayo_requerido_bullheading == 'on' ? 1 : 0;
        $solicitud_lechada->OH = $request->OH;
        $solicitud_lechada->trepano = $request->trepano;
        $solicitud_lechada->casing_id = $request->casing_id;
        $solicitud_lechada->casing_od = $request->casing_od;
        $solicitud_lechada->densidad_lodo = $request->densidad_lodo;
        $solicitud_lechada->tipo_lodo = $request->tipo_lodo;
        $solicitud_lechada->profundidad_pozo_md = $request->profundidad_pozo_md;
        $solicitud_lechada->profundidad_pozo_tvd = $request->profundidad_pozo_tvd;
        $solicitud_lechada->base_md = $request->base_md;
        $solicitud_lechada->base_tvd = $request->base_tvd;
        $solicitud_lechada->top_of_slurry_tvd = $request->top_of_slurry_tvd;
        $solicitud_lechada->top_of_slurry_md = $request->top_of_slurry_md;
        $solicitud_lechada->volumen = $request->volumen;
        $solicitud_lechada->pump_rate = $request->pump_rate;
        $solicitud_lechada->grado_temperatura = $request->grado_temperatura;
        $solicitud_lechada->bhst = $request->bhst;
        $solicitud_lechada->bhct = $request->bhct;
        $solicitud_lechada->reologia = $request->reologia;
        $solicitud_lechada->densidad = $request->densidad;
        $solicitud_lechada->filtrado = $request->filtrado;
        $solicitud_lechada->bombeabilidad = $request->bombeabilidad;
        $solicitud_lechada->tiempo_50_psi = $request->tiempo_50_psi == 'on' ? 1 : 0;
        $solicitud_lechada->tiempo_500_psi = $request->tiempo_500_psi == 'on' ? 1 : 0;
        $solicitud_lechada->resistencia_12_hs = $request->resistencia_12_hs == 'on' ? 1 : 0;
        $solicitud_lechada->resistencia_24_hs = $request->resistencia_24_hs == 'on' ? 1 : 0;
        $solicitud_lechada->agua_libre = $request->agua_libre;
        $solicitud_lechada->sgs = $request->sgs;
        $solicitud_lechada->tipo_cemento = $request->tipo_cemento;
        $solicitud_lechada->observacion = $request->observacion_lechada;
        $solicitud_lechada->firma_reconocimiento_id = $request->firma_reconocimiento_lechada;
        $solicitud_lechada->fecha_reconocimiento = $request->fecha_reconocimiento_lechada;
        $solicitud_lechada->save();

        $aditivos_bd = RelAditivoSolicitudLechada::where('solicitud_lechada_id', $solicitud_lechada->id)->get();

        # Formulaciones Tentativas (Actualizar)
        if ($request->aditivos) {

            foreach ($request->aditivos as $formulacion) {
                $rel = RelAditivoSolicitudLechada::find($formulacion['id']);
                $rel->lote = $formulacion['lote'];
                $rel->aditivo = $formulacion['aditivo'];
                $rel->concentracion = $formulacion['concentracion'];
                $rel->save();
            }
        }
        # Formulaciones Tentativas (Nuevas a agregar)
        if ($request->formulacion_new) {
            foreach ($request->formulacion_new as $formulacion) {
                RelAditivoSolicitudLechada::create([
                    'solicitud_lechada_id' => $solicitud_lechada->id,
                    'lote' => $formulacion['lote'],
                    'aditivo' => $formulacion['aditivo'],
                    'concentracion' => $formulacion['concentracion'],
                ]);
            }
        }
        # Eliminar las formulaciones se seleccionar para eliminar
        $aditivos_delete = [];
        foreach ($aditivos_bd as $a_b_d) {
            if (!in_array($a_b_d['id'], $id_aditivos)) {
                $aditivo_del = RelAditivoSolicitudLechada::find($a_b_d['id']);
                $aditivo_del->delete();
            }
        }

        # El fundamento del por qué se editó la solicitud
        $edicion_solicitud = Edicion_Solicitud::create([
            'fundamento' => $request->fundamento_edicion,
            'usuario_fundamento' => auth()->user()->id,
            'solicitud_id' => $solicitud->id
        ]);

        if ($solicitud->id)
            return back()->with('success', $solicitud->id);
    }

    /**
     * Se que es un código asqueroso, pero una condición si o si depende de la otra
     */
    public function _generate_report($solicitud_id)
    {
        $generar_reporte = false;
        $solicitud_lechada = SolicitudLechada::where('solicitud_id', $solicitud_id)->get();

        // Reología
        if (count($solicitud_lechada[0]->rel_reologia) > 0) {
            // Pérdida de Filtrado
            if (count($solicitud_lechada[0]->rel_perdida_filtrado) > 0) {
                // UCA
                if (count($solicitud_lechada[0]->rel_uca) > 0) {
                    // Agua Libre
                    if (count($solicitud_lechada[0]->rel_agua_libre) > 0) {
                        // Mezclabilidad
                        if (count($solicitud_lechada[0]->rel_mezclabilidad) > 0) {
                            // Bombeabilidad
                            if (count($solicitud_lechada[0]->rel_bombeabilidad) > 0) {
                                foreach ($solicitud_lechada[0]->rel_bombeabilidad as $b) {
                                    if ($b->selected) {
                                        $generar_reporte = true;
                                        break;
                                    } else {
                                        $generar_reporte = false;
                                    }
                                }
                            } else {
                                $generar_reporte = false;
                            }
                        } else {
                            $generar_reporte = false;
                        }
                    } else {
                        $generar_reporte = false;
                    }
                } else {
                    $generar_reporte = false;
                }
            } else {
                $generar_reporte = false;
            }
        } else {
            $generar_reporte = false;
        }
        return response()->json(['generate_report' => $generar_reporte]);
        // echo json_encode($generar_reporte);
    }

    /**
     * Envía el correo de que se creó una nuevo Solicitud de Fractura
     * ¿A quién se envía el correo?
     * => Firma de quién inició la solicitud (opcional)
     * => Firma del servicio técnico (opcional)
     * => Firma de laboratorio (opcional)
     * => Firma de reconocimiento (opcional)
     */
    public function _sendEmailNew($data, $correos)
    {
        foreach ($correos as $c) {
            Mail::send('emails.solicitud.new', ['data' => $data], function ($message) use ($c, $data) {
                $message->to($c)
                    ->subject('Laboratorio Calfrac | Solicitud de Fractura N°' . $data['solicitud_id']);
            });
        };
    }

    /**
     * Envía el correo de que se editó la Solicitud
     * ¿A quien se envía el correo?
     * => Al usuario quien cargó la solicitud
     */
    public function _sendEmailEdition($data, $correo)
    {
        Mail::send('emails.solicitud.edition', ['data' => $data], function ($message) use ($correo, $data) {
            $message->to($correo)
                ->subject('Laboratorio Calfrac | Edición de Solicitud de Fractura N°' . $data['solicitud_id']);
        });
    }

    /**
     * Envía el correo de que la solicitud ya está aprobada
     * ¿A quien se envía el correo?
     * => Al usuario quien cargó la solicitud
     */
    public function _sendEmailApproved($data, $correo)
    {
        Mail::send('emails.solicitud.approved', ['data' => $data], function ($message) use ($correo, $data) {
            $message->to($correo)
                ->subject('Laboratorio Calfrac | Solicitud de Fractura N°' . $data['solicitud_id'] . ' - Aprobada');
        });
    }

    public function viewMail()
    {
        return view('emails.user.credential');
    }
}
