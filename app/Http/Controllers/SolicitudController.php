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
use App\Models\RelAditivosSolicitudFractura;
use App\Models\RelAditivoSolicitudLodo;
use App\Models\RelAnalisisMicrobialFractura;
use App\Models\RelAgenteSostenFractura;
use App\Models\RelEnsayoReferenciaSolicitud;
use App\Models\RelFormulacionTentativa;
use App\Models\SistemasFluidos;
use App\Models\Solicitud;
use App\Models\SolicitudFractura;
use App\Models\Distrito;
use App\Models\SolicitudLechada;
use App\Models\TipoCementacion;
use App\Models\ServiciosFractura;
use App\Models\TipoLodo;
use App\Models\TipoRequerimientoCemento;
use App\Models\TipoTrabajoCemento;
use App\Models\User;
use App\Models\TipoEnsayosLodo;
use App\Models\Yacimiento;
use App\Models\AguaLibre;
use App\Models\Sgs;
use App\Models\Servicios;
use App\Models\TipoLodo_Lodos;
use App\Models\Equipos;
use App\Models\Ingenieros;
use App\Models\EnsayosLodo;
use App\Models\SolicitudLodo;
use App\Models\Estados;
use App\Models\RelReologiaSolicitudEnsayo;
use App\Models\RelEnsayoComentarioSolicitud;
use App\Models\RelEnsayosRequeridosLodo;
use App\Models\TipoDeColchon;
use App\Models\Choices;
use App\Models\YacimientosFractura;
use App\Models\TipoAgua;
use App\Mail\SolicitudLechadaAprobada;
use App\Mail\SolicitudLodoAprobada;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Mail;
use Symfony\Component\VarDumper\VarDumper;

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
            'ensayos' => Ensayo::where('tipo', 'CN')->where('estado', 1)->get(),
            'clientes' => Cliente::where('estado', 1)->get(),
            'yacimientos' => Yacimiento::where('estado', 1)->get(),
            'sistemas_fluidos' => SistemasFluidos::where('activo', 1)->get(),
            'analisis_microbial' => AnalisisMicrobial::where('activo', 1)->get(),
            'agente_sosten' => AgenteSosten::where('activo', 1)->get(),
            'otros_analisis' => OtrosAnalisis::where('activo', 1)->get(),
            'tipo_trabajo_cemento' => TipoTrabajoCemento::where('estado', 1)->get(),
            'tipo_cementacion' => TipoCementacion::where('estado', 1)->get(),
            'tipo_requerimiento_cemento' => TipoRequerimientoCemento::where('estado', 1)->get(),
            'tipo_lodo' =>  TipoLodo::where('estado', 1)->get(),
            'mud_company' =>  MudCompany::where('activo', 1)->get(),
            'users' => User::all(),
            'sgs' => Sgs::all(),
            'agua_libre' => AguaLibre::all(),
            'servicios' => Servicios::all(),
            'tipo_lodo_Lodos' => TipoLodo_Lodos::all(),
            'equipos' => Equipos::where('estado', 1)->get(),
            'servicios_fractura' => ServiciosFractura::all(),
            'distrito' => Distrito::all(),
            //'tipo_ensayos_lodo' => TipoEnsayosLodo::all()
            'ensayos_lodo' => EnsayosLodo::all(),
            'estados' => Estados::all(),
            'ensayos_sol_lodo' => Ensayo::where('tipo', 'LN')->where('estado', 1)->get(),
            'names_ingenieros' => User::whereIn('users.grupo_id', [3, 4])->get('users.*'),
            'aditivos' => Aditivo::all(),
            'tipo_de_colchon' => TipoDeColchon::all(),
            'yacimientos_fractura' => YacimientosFractura::all(),
            'tipo_agua' => TipoAgua::all()
            //'name_aditivos' =>
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
            //'proyecto_number' => 'required',
            'servicio_number' => 'required',
            'cliente_fractura' => 'required',
            'locacion_fractura' => 'required',
            'programa' => 'required',
            'fecha_solicitud' => 'required',
            // 'empresa' => 'required',
            // 'fecha_tratamiento' => 'required',
            'pozo' => 'required',
            'rep_compania' => 'required',
            // 'fecha_reporte' => 'required',
            //'rep_venta' => 'required',
            //'fecha_resultados' => 'required',
            'equipo' => 'required',
            'servicios_fractura' => 'required',
            'distrito' => 'required',
            //'reporte_lab_tall' => 'required',
            //'reporte_lab_lead' => 'required',
        ]);


        # Crea la Información General
        $solicitud = Solicitud::create([
            'tipo' => 1,
            //'proyecto_number' => $request->proyecto_number,
            'servicio_number' => $request->servicio_number,
            'cliente_id' => $request->cliente_fractura,
            'locacion_id' => $request->locacion_fractura,
            'programa' => $request->programa,
            'fecha_solicitud' => $request->fecha_solicitud,
            // 'empresa' => $request->empresa,
            // 'fecha_tratamiento' => $request->fecha_tratamiento,
            'pozo' => $request->pozo,
            'rep_compania' => $request->rep_compania,
            // 'fecha_reporte' => $request->fecha_reporte,
            //'rep_venta' => $request->rep_venta,
            //'fecha_resultados' => $request->fecha_resultados_lechada,
            'equipo' => $request->equipo,
            'servicio' => $request->servicio_lechada,
            'servicios_fractura' => $request->servicios_fractura,
            'distrito' => $request->distrito,
            //'reporte_lab_tall' => $request->reporte_lab_tall,
            //'reporte_lab_lead' => $request->reporte_lab_lead,
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
            'estados' => $request->estados ?? null,
            //'estados' => $request->estados, --> vieja configuracion estados
            'concentracion' => $request->concentracion,
            'sistema_fluido_id' => $request->sistemas_fluidos ?? null,
            //'analisis_microbial_id' => $request->analisis_microbial ?? null,
            //'agente_sosten_id' => $request->agente_sosten ?? null,
            //'sistema_fluido_id' => $request->sistema_fluido, --> idem estados
            //'analisis_microbial_id' => $request->analisis_microbial, --> idem estados
            //'agente_sosten_id' => $request->agente_sosten,--> idem estados
            //'otro_analisis_id' => $request->otros,
            'otros_analisis' => $request->otros_analisis,
            // Estabilidad usado para -> Convencional
            'ensayo_estabilidad' => $request->ensayo_estabilidad == 'on' ? 1 : 0,
            // Ruptura usado para -> NO Convencional
            'ensayo_ruptura' => $request->ensayo_ruptura == 'on' ? 1 : 0,
            'ensayo_especial' => $request->ensayo_especial == 'on' ? 1 : 0,
            'comentario' => $request->comentario,
            'base_guar' => $request->base_guar,
            'base_hvfr' => $request->base_hvfr,
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

        # Formulaciones Tentativas
        if ($request->aditivos) {
            foreach ($request->aditivos as $formulacion) {
                RelAditivosSolicitudFractura::create([
                    'solicitud_fractura_id' => $solicitud_fractura->id,
                    'lote' => $formulacion['lote'],
                    'aditivo' => $formulacion['aditivo'],
                    'comentario' => $formulacion['comentario'],
                    'concentracion' => $formulacion['concentracion'],
                ]);
            }
        }

        # Ensayos requeridos
        if ($request->analisis_microbial) {
            $analisis_separados = explode(',', $request->analisis_microbial);
            foreach ($analisis_separados as $analisis) {
                RelAnalisisMicrobialFractura::create([
                    'solicitud_id' => $solicitud->id,
                    'id_analisis' => $analisis
                ]);
            }
        }

        if ($request->agente_sosten) {
            $agentes_separados = explode(',', $request->agente_sosten);
            foreach ($agentes_separados as $agente) {
                RelAgenteSostenFractura::create([
                    'solicitud_id' => $solicitud->id,
                    'id_agente' => $agente
                ]);
            }
        }

        $url = route('solicitud.fractura.show', ['solicitud_id' => $solicitud->id]);
        $emailsAEnviar = [];

        # Envío de Emails
        $correos = [];
        /*
        if ($solicitud_fractura->user_iniciado_por)
            $correos[] = $solicitud_fractura->user_iniciado_por->email;
        if ($solicitud_fractura->user_servicio_tecnico)
            $correos[] = $solicitud_fractura->user_servicio_tecnico->email;
        if ($solicitud_fractura->user_laboratorio)
            $correos[] = $solicitud_fractura->user_laboratorio->email;
        if ($solicitud_fractura->user_reconocimiento)
            $correos[] = $solicitud_fractura->user_reconocimiento->email;
        //Podria hardcodear mi email aca para probar?
        */
        $correos[] = "rocio.carvajal@blistertechnologies.com";
        $correos[] = "orodriguez@calfrac.com";
        $data = [
            'solicitud_id' => $solicitud->id,
            'locacion_id' => $request->locacion,
            'fecha_solicitud' => $request->fecha_solicitud,
            'usuario_carga' => auth()->user()->nombre . ' ' . auth()->user()->apellido,
            'cliente' => $request->cliente,
            'url' => $url
            //'empresa' => $request->empresa
        ];
        $this->_sendEmailNew($data, $correos);         //Podria hardcodear mi email aca para probar?

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
            //'empresa_lechada' => 'required',
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
            'locacion_id' => $request->locacion_lechada,
            'programa' => $request->programa_lechada,
            'fecha_solicitud' => date('Y-m-d'),
            //'empresa' => $request->empresa_lechada,
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
            'ensayo_requerido_bullheading' => $request->ensayo_requerido_bullheading == 'on' ? 1 : 0,
            'ensayo_requerido_relleno' => $request->ensayo_requerido_relleno == 'on' ? 1 : 0,
            'ensayo_requerido_tapon' => $request->ensayo_requerido_tapon == 'on' ? 1 : 0,
            'OH' => $request->OH,
            'trepano' => $request->trepano,
            'casing_id' => $request->casing_id,
            'casing_od' => $request->casing_od,
            'densidad_lodo' => $request->densidad_lodo,
            'tipo_lodo' => $request->tipo_lodo ?? null,
            'mud_company_id' => $request->mud_company ?? null,
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
            'tiempo_1000_psi' => $request->tiempo_1000_psi == 'on' ? 1 : 0,
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
            'firma_solicitante_id' => $request->firma_solicitante_lechada,
            'fecha_solicitante' => $request->fecha_solicitante_lechada,
            'solicitud_id' => $solicitud->id,
            'usuario_carga' => auth()->user()->id

        ]);
        #Ensayos de referencia (Usa la misma tabla que lechada y fractura, asique usar SolicitudGeneral)
        $ensayos_ref = $request->ensayos_ref;
        $comentarios = $request->comentarios;

        if ($ensayos_ref && count($ensayos_ref) > 0) {
            $total_ensayos = count($ensayos_ref);
            $index_comentario = 0; // Inicializamos el índice para los comentarios

            foreach ($ensayos_ref as $i => $valor) {
                if ($valor !== "sd") {
                    // Convierto $valor a integer para que lo acepte la base de datos
                    $ensayo_id = (int) $valor;

                    // Insertar en rel_ensayos_referencia_solicitud
                    RelEnsayoReferenciaSolicitud::create([
                        'ensayo_id' => $ensayo_id,
                        'solicitud_id' => $solicitud->id
                    ]);
                } else {
                    // Si encontramos "sd", insertamos el comentario correspondiente
                    if ($index_comentario < count($comentarios)) {
                        $comentario = $comentarios[$index_comentario];

                        // Insertar en rel_ensayos_comentarios_solicitud
                        RelEnsayoComentarioSolicitud::create([
                            'comentario_ensayo' => $comentario,
                            'solicitud_id' => $solicitud->id
                        ]);

                        $index_comentario++; // Avanzamos al siguiente comentario
                    }
                }
            }
        }

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
        $url = route('solicitud.lechada.show', ['solicitud_id' => $solicitud->id]);

        //$correos[] = "orodriguez@calfrac.com";
        $data = [
            'solicitud_id' => $solicitud->id,
            'locacion_id' => $request->locacion_lechada,
            'fecha_solicitud' => $request->fecha_solicitud_lechada,
            'usuario_carga' => auth()->user()->nombre . ' ' . auth()->user()->apellido,
            'cliente_id' => $request->cliente_lechada,
            'url' => $url
            //'empresa' => $request->empresa
        ];

        # Listado de correos de laboratoristas, me agrego a mi para chequear que llegue correctamente
        $destinatarios = [
            'GTorres@calfrac.com',
            'CDominguez@calfrac.com',
            'DMancilla@calfrac.com',
            'LVazquez@calfrac.com',
            'ORodriguez@calfrac.com',
            'rocio.carvajal@blistertechnologies.com',
            'gruiz@blister.com.ar',
            // 'lsicolo@blister.com.ar'
        ];

        # Incluye el correo del usuario que cargó la solicitud mas el arreglo de arriba
        array_unshift($destinatarios, $solicitud->user->email);


        $this->_sendEmailNewLechada($data, $destinatarios);

        # Formulaciones Tentativas
        if ($request->aditivos) {

            foreach ($request->aditivos as $formulacion) {
                RelAditivoSolicitudLechada::create([
                    'solicitud_lechada_id' => $solicitud_lechada->id,
                    'lote' => $formulacion['lote'],
                    'aditivo' => $formulacion['aditivo'],
                    'comentario' => $formulacion['comentario'],
                    'concentracion' => $formulacion['concentracion'],
                    'blend' => $formulacion['blend'],
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
        # Comentado por el momento (Se puede descomentar)
        // $this->_sendEmailApproved($data, $solicitud->user->email);
        // -- Finaliza el envío de email
        return $solicitud->id;
    }

    public function store_aprobar_lechada(Request $request)
    {
        $solicitud = Solicitud::find($request->solicitud_id);
        $solicitud->estado_solicitud_id = 2;
        $solicitud->aprobada = 1;
        $solicitud->fecha_aprobada = date('Y-m-d H:i:s');
        $solicitud->usuario_aprobo = auth()->user()->id;
        $solicitud->save();


        #URL DE LECHADAS, CUANDO SE HABILITE LODO Y FRACTURA HAY QUE VALIDAR PARA QUE DEPENDE QUE SOLICITUD SEA, TE ENVIE A LA URL CORRECTA
        $url = route('solicitud.lechada.show', ['solicitud_id' => $solicitud->id]);

        # Envío de Email
        $data = [
            'solicitud_id' => $solicitud->id,
            'fecha_aprobada' => $solicitud->fecha_aprobada->format('d/m/Y'),
            // 'usuario_aprobo' => $solicitud->usuario_aprobo->nombre . ' ' . $solicitud->usuario_aprobo->apellido,
            'url' => $url
        ];

        # Listado de correos de laboratoristas, me agrego a mi para chequear que llegue correctamente
        $destinatarios = [
            'GTorres@calfrac.com',
            'CDominguez@calfrac.com',
            'DMancilla@calfrac.com',
            'LVazquez@calfrac.com',
            'ORodriguez@calfrac.com',
            'rocio.carvajal@blistertechnologies.com',
            'gruiz@blister.com.ar',
            // 'lsicolo@blister.com.ar'
        ];

        # Incluye el correo del usuario que cargó la solicitud mas el arreglo de arriba
        array_unshift($destinatarios, $solicitud->user->email);

        # Envío del correo a c/u
        foreach ($destinatarios as $correo) {
            $this->_sendEmailApproved($data, $correo);
        }
        // -- Finaliza el envío de email

        return $solicitud->id;
    }


    public function store_aprobar_lodo(Request $request)
    {
        $solicitud = Solicitud::find($request->solicitud_id);
        $solicitud->estado_solicitud_id = 2;
        $solicitud->aprobada = 1;
        $solicitud->fecha_aprobada = date('Y-m-d H:i:s');
        $solicitud->usuario_aprobo = auth()->user()->id;
        $solicitud->save();

        $url = route('solicitud.lodo.show', ['solicitud_id' => $solicitud->id]);

        # Envío de Email
        $data = [
            'solicitud_id' => $solicitud->id,
            'fecha_aprobada' => $solicitud->fecha_aprobada->format('d/m/Y'),
            // 'usuario_aprobo' => $solicitud->usuario_aprobo->nombre . ' ' . $solicitud->usuario_aprobo->apellido,
            'url' => $url
        ];

        # Listado de correos de laboratoristas, me agrego a mi para chequear que llegue correctamente
        $destinatarios = [
            'GTorres@calfrac.com',
            'CDominguez@calfrac.com',
            'DMancilla@calfrac.com',
            'LVazquez@calfrac.com',
            'ORodriguez@calfrac.com',
            'rocio.carvajal@blistertechnologies.com',
            'gruiz@blister.com.ar',
            // 'lsicolo@blister.com.ar'
        ];

        # Incluye el correo del usuario que cargó la solicitud mas el arreglo de arriba
        array_unshift($destinatarios, $solicitud->user->email);

        # Envío del correo a c/u
        foreach ($destinatarios as $correo) {
            $this->_sendEmailApprovedLodo($data, $correo);
        }
        // -- Finaliza el envío de email

        return $solicitud->id;
    }

    /**
     * Edita la solicitud de fractura, la misma se crea un comentario/fundamento al respecto de por qué se está editando
     */
    public function update(Request $request)
    {
        $aditivos_request = $request->aditivos;

        if (is_array($aditivos_request)) {
            $id_aditivos = array_column($aditivos_request, 'id');
        } else {
            $id_aditivos = []; // O maneja el caso en que no se envían aditivos
        }
        # Validamos los datos del encabezado general
        $this->validate($request, [
            //'proyecto_number' => 'required',
            'servicio_number' => 'required',
            'cliente_fractura' => 'required',
            'locacion_fractura' => 'required',
            'programa' => 'required',
            'fecha_solicitud' => 'required',
            // 'empresa' => 'required',
            // 'fecha_tratamiento' => 'required',
            'pozo' => 'required',
            'rep_compania' => 'required',
            // 'fecha_reporte' => 'required',
            //'rep_venta' => 'required',
            'fecha_resultados' => 'required',
            'equipo' => 'required',
            'servicios_fractura' => 'required',
            'distrito' => 'required',
            //'reporte_lab_tall' => 'required',
            //'reporte_lab_lead' => 'required',
            'fundamento_edicion' => 'required'
        ]);

        # Editando los datos de la solicitud en general
        $solicitud = Solicitud::find($request->solicitud_id);
        //$solicitud->proyecto_number = $request->proyecto_number;
        $solicitud->servicio_number = $request->servicio_number;
        $solicitud->cliente_id = $request->cliente_fractura;
        $solicitud->locacion_id = $request->locacion_fractura;
        $solicitud->programa = $request->programa;
        $solicitud->fecha_solicitud = $request->fecha_solicitud;
        // $solicitud->empresa = $request->empresa;
        // $solicitud->fecha_tratamiento = $request->fecha_tratamiento;
        $solicitud->pozo = $request->pozo;
        $solicitud->rep_compania = $request->rep_compania;
        // $solicitud->fecha_reporte = $request->fecha_reporte;
        //$solicitud->rep_venta = $request->rep_venta;
        //$solicitud->fecha_resultados = $request->fecha_resultados;
        $solicitud->equipo = $request->equipo;
        $solicitud->servicios_fractura = $request->servicios_fractura;
        $solicitud->distrito = $request->distrito;
        //$solicitud->reporte_lab_tall = $request->reporte_lab_tall;
        //$solicitud->reporte_lab_lead = $request->reporte_lab_lead;
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
        $solicitud_fractura->estados = $request->estados;
        $solicitud_fractura->concentracion = $request->concentracion;
        $solicitud_fractura->sistema_fluido_id = $request->sistemas_fluidos;
        //$solicitud_fractura->analisis_microbial_id = $request->analisis_microbial_id;
        //$solicitud_fractura->agente_sosten_id = $request->agente_sosten_id;
        #$solicitud_fractura->otro_analisis_id = $request->otro_analisis_id;
        $solicitud_fractura->otros_analisis = $request->otros_analisis;
        $solicitud_fractura->ensayo_estabilidad = $request->ensayo_estabilidad == 'on' ? 1 : 0;
        $solicitud_fractura->ensayo_ruptura = $request->ensayo_estabilidad == 'on' ? 1 : 0;
        $solicitud_fractura->comentario = $request->comentario;
        $solicitud_fractura->base_guar = $request->base_guar;
        $solicitud_fractura->base_hvfr = $request->base_hvfr;
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

        $aditivos_bd = RelAditivosSolicitudFractura::where('solicitud_fractura_id', $solicitud_fractura->id)->get();




        # Formulaciones Tentativas (Actualizar)
        if ($request->aditivos) {

            foreach ($request->aditivos as $formulacion) {
                $rel = RelAditivosSolicitudFractura::find($formulacion['id']);
                $rel->lote = $formulacion['lote'];
                $rel->aditivo = $formulacion['aditivo'];
                $rel->concentracion = $formulacion['concentracion'];
                $rel->save();
            }
        }
        # Formulaciones Tentativas (Nuevas a agregar)
        if ($request->formulacion_new) {
            foreach ($request->formulacion_new as $formulacion) {
                RelAditivosSolicitudFractura::create([
                    'solicitud_fractura_id' => $solicitud_fractura->id,
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
                $aditivo_del = RelAditivosSolicitudFractura::find($a_b_d['id']);
                $aditivo_del->delete();
            }
        }


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

        # Correo comentado por el momento, se puede desactivar por mientras
        // $this->_sendEmailEdition($data, $solicitud->user->email);

        if ($solicitud->id)
            return back()->with('success', $solicitud->id);
    }

    /**
     *  Edita una respuesta a un comentario de edicion
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
    /**
     * Crea una nueva Solicitud de Lodo
     * Primero crea el encabezado general, que es la "Solicitud" y luego crea la "Solicitud de Lodo"
     */
    public function store_lodo(Request $request)
    {
        # Validamos los datos del encabezado general
        $this->validate($request, [
            'cliente_lodo' => 'required',
            'locacion_lodo' => 'required',
            'pozo_lodo' => 'required',
            'tipo_lodo' => 'required',
            'equipo_lodo' => 'required',
            'servicios_lodo' => 'required',
            'mud_company' => 'required',
            'densidad_lodo_3' => 'required',
            'tipo_colchon' => 'required',
            //'temperatura' => 'required',
            //'profundidad_md' => 'required',
            //'profundidad_tvd' => 'required',
            //'ensayos' => 'required',
            //'vol_colchon' => 'required',
            //'densidad_colchon' => 'required',
            //'tiempo_contacto' => 'required',
        ]);

        # Solicitud General
        $solicitud = Solicitud::create([
            'tipo' => 3,
            'cliente_id' => $request->cliente_lodo,
            'programa' => $request->programa_lodo,
            'locacion_id' => $request->locacion_lodo,
            'fecha_solicitud' => date('Y-m-d'),
            'pozo' => $request->pozo_lodo,
            'equipo' => $request->equipo_lodo,
            'servicio' => $request->servicios_lodo,
            'estado_solicitud_id' => 1,
            'user_id' => auth()->user()->id
        ]);
        # Solicitud Lodo (Condiciones del test)
        $solicitud_lodo = SolicitudLodo::create([
            'tipo_lodo' => $request->tipo_lodo,
            'profundidad_md' => $request->profundidad_md,
            'profundidad_tvd' => $request->profundidad_tvd,
            'solicitud_id' => $solicitud->id,
            'usuario_carga' => auth()->user()->id,
            'firma_autorizacion_id' => auth()->user()->id,
            'fecha_autorizacion' => date('Y-m-d'),
            'firma_reconocimiento_id' => $request->firma_reconocimiento_lodo,
            'fecha_reconocimiento'  => $request->fecha_reconocimiento_lodo,
            'firma_solicitante_id' => $request->firma_solicitante_lodo,
            'fecha_solicitante'  => $request->fecha_solicitante_lodo,
            'densidad_lodo' => $request->densidad_lodo_3, // Tiene _3 porque se repetia con el resto de solicitudes
            'temperatura' => $request->temperatura,
            'vol_colchon' => $request->vol_colchon,
            'densidad_colchon' => $request->densidad_colchon,
            'tiempo_contacto' => $request->tiempo_contacto,
            'mud_company' => $request->mud_company,
            'tipo_colchon' => $request->tipo_colchon,
            'vp' => $request->vp,
            'pf' => $request->pf,
            'comentario' => $request->observacion_lodo,
        ]);

        #Ensayos de referencia (Usa la misma tabla que lechada y fractura, asique usar SolicitudGeneral)
        $ensayos_ref_lodo = $request->ensayos_ref_lodo;
        $comentarios_lodo = $request->comentarios_lodo;

        if ($ensayos_ref_lodo && count($ensayos_ref_lodo) > 0) {
            $total_ensayos = count($ensayos_ref_lodo);
            $index_comentario = 0; // Inicializamos el índice para los comentarios

            foreach ($ensayos_ref_lodo as $i => $valor) {
                if ($valor !== "sd") {
                    // Convierto $valor a integer para que lo acepte la base de datos
                    $ensayo_id = (int) $valor;
                    if ($ensayo_id > 0) {
                        // Insertar en rel_ensayos_referencia_solicitud
                        RelEnsayoReferenciaSolicitud::create([
                            'ensayo_id' => $ensayo_id,
                            'solicitud_id' => $solicitud->id
                        ]);
                    }
                } else {
                    // Si encontramos "sd", insertamos el comentario correspondiente
                    if ($index_comentario < count($comentarios_lodo)) {
                        $comentario = $comentarios_lodo[$index_comentario];

                        // Insertar en rel_ensayos_comentarios_solicitud
                        RelEnsayoComentarioSolicitud::create([
                            'comentario_ensayo' => $comentario,
                            'solicitud_id' => $solicitud->id
                        ]);

                        $index_comentario++; // Avanzamos al siguiente comentario
                    }
                }
            }
        }
        # Envio de mails
        $url = route('solicitud.lodo.show', ['solicitud_id' => $solicitud->id]);
        
        // $correos[] = "rocio.carvajal@blistertechnologies.com";
        // $correos[] = "orodriguez@calfrac.com";
        
        # Listado de correos de laboratoristas
        $destinatarios = [
            'GTorres@calfrac.com',
            'CDominguez@calfrac.com',
            'DMancilla@calfrac.com',
            'LVazquez@calfrac.com',
            'ORodriguez@calfrac.com',
            'rocio.carvajal@blistertechnologies.com',
            'gruiz@blister.com.ar',
            // 'lsicolo@blister.com.ar'
        ];

        $data = [
            'solicitud_id' => $solicitud->id,
            'locacion_id' => $request->locacion_lodo,
            'fecha_solicitud' => $request->fecha_solicitante_lodo,
            'usuario_carga' => auth()->user()->nombre . ' ' . auth()->user()->apellido,
            'cliente_id' => $request->cliente_lodo,
            'url' => $url
            //'empresa' => $request->empresa
        ];
        
        array_unshift($destinatarios, $solicitud->user->email);

        $this->_sendEmailNewLodo($data, $destinatarios);

        # Ensayos requeridos
        if ($request->requeridos_lodo) {
            $ensayos_separados = explode(',', $request->requeridos_lodo);
            foreach ($ensayos_separados as $ensayo) {
                RelEnsayosRequeridosLodo::create([
                    'nombre' => $solicitud->id, // Cambiar el nombre de la columna  //Nombre seria id_solicitud
                    'id_ensayo' => $ensayo
                ]);
            }
        }

        # Formulaciones Tentativas (Requerimientos del colchon)
        if ($request->aditivos) {

            foreach ($request->aditivos as $formulacion) {
                RelAditivoSolicitudLodo::create([
                    'solicitud_lodo_id' => $solicitud_lodo->id,
                    'lote' => $formulacion['lote'],
                    'comentario' => $formulacion['comentario'],
                    'aditivo' => $formulacion['aditivo'],
                    'concentracion' => $formulacion['concentracion'],
                    'unidad' => $formulacion['unidad'],
                ]);
            }
        }
        if ($solicitud->id)
            return redirect('solicitud')->with('success', $solicitud->id);
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
            'analisis_referencia' => AnalisisMicrobial::leftJoin('rel_analisis_microbial_fractura', 'analisis_microbial.id', '=', 'rel_analisis_microbial_fractura.id_analisis')
                ->where('rel_analisis_microbial_fractura.solicitud_id', $solicitud_id)
                ->get(['analisis_microbial.*', 'rel_analisis_microbial_fractura.*']),
            'agente_referencia' => AgenteSosten::leftJoin('rel_agente_sosten_fractura', 'agente_sosten.id', '=', 'rel_agente_sosten_fractura.id_agente')
                ->where('rel_agente_sosten_fractura.solicitud_id', $solicitud_id)
                ->get(['agente_sosten.*', 'rel_agente_sosten_fractura.*']),
            'solicitud' => Solicitud::find($solicitud_id),
            'solicitud_fractura' => SolicitudFractura::where('solicitud_id', $solicitud_id)->get(),
            'sistemas_fluidos' => SistemasFluidos::all(),
            //'analisis_microbial_fractura' => RelAnalisisMicrobialFractura::where('solicitud_id', $solicitud_id)->get(),
            'sistemas_fluidos' => SistemasFluidos::where('activo', 1)->get(),
            'analisis_microbial' => AnalisisMicrobial::where('activo', 1)->get(),
            'agente_sosten' => AgenteSosten::where('activo', 1)->get(),
            'otros_analisis' => OtrosAnalisis::all(),
            'aditivos' => Aditivo::all(),
            'users' => User::all(),
            'clientes' => Cliente::all(),
            'yacimientos_fractura' => YacimientosFractura::all(),
            'equipos' => Equipos::all(),
            'servicios_fractura' => ServiciosFractura::all(),
            'distrito' => Distrito::all(),
            'estados' => Estados::all(),
            'tipo_agua' => TipoAgua::all()
            // 'ensayos' => Ensayo::with('aditivos', 'requerimientos')->where('solicitud_id', $solicitud_id)->get()
        ];
        return view('solicitud.components.fractura.show', $data);
    }

    public function show_lechada($solicitud_id)
    {

        $data = [
            'ensayos_referencia' => Ensayo::leftJoin('rel_ensayo_referencia_solicitud', 'ensayos.id', '=', 'rel_ensayo_referencia_solicitud.ensayo_id')
                ->where('rel_ensayo_referencia_solicitud.solicitud_id', $solicitud_id)
                ->get(['ensayos.*', 'rel_ensayo_referencia_solicitud.*']),
            'ensayos' => Ensayo::where('estado', 1)->get(),
            'solicitud' => Solicitud::find($solicitud_id),
            'ensayos_referencia' => RelEnsayoReferenciaSolicitud::where('solicitud_id', $solicitud_id)->get(),
            'comentarios' => RelEnsayoComentarioSolicitud::where('solicitud_id', $solicitud_id)->get(),
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
            'tipo_trabajo_cemento' => TipoTrabajoCemento::all(),
            'tipo_cementacion' => TipoCementacion::all(),
            'tipo_lodo' => TipoLodo::all(),
            'mud_company' => MudCompany::all(),
            'equipos' => Equipos::all(),
            'names_ingenieros' => User::whereIn('users.grupo_id', [3, 4])->get('users.*'),
            //'ensayos' => Ensayo::with('aditivos', 'requerimientos')->where('solicitud_id', $solicitud_id)->get()
        ];
        $generate_report = $this->_generate_report($solicitud_id);
        $data['generar_reporte'] = $generate_report->original['generate_report'];
        return view('solicitud.components.lechada.show', $data);
    }

    public function show_lodo($solicitud_id)
    {

        $data = [
            'solicitud' => Solicitud::find($solicitud_id),
            'ensayos_referencia' => Ensayo::leftJoin('rel_ensayo_referencia_solicitud', 'ensayos.id', '=', 'rel_ensayo_referencia_solicitud.ensayo_id')
                ->where('rel_ensayo_referencia_solicitud.solicitud_id', $solicitud_id)
                ->get(['ensayos.*', 'rel_ensayo_referencia_solicitud.*']),
            //  'aditivos' => Aditivo::all(),
            'ensayos_multiples' => EnsayosLodo::leftJoin('rel_ensayos_requeridos_lodo', 'ensayos_lodo.id', '=', 'rel_ensayos_requeridos_lodo.id_ensayo')
                ->where('rel_ensayos_requeridos_lodo.nombre', $solicitud_id)
                ->get(['ensayos_lodo.*', 'rel_ensayos_requeridos_lodo.*']),
            'opciones_ensayos' => EnsayosLodo::all(),
            'ensayos' => Ensayo::where('estado', 1)->get(),
            'users' => User::all(),
            'clientes' => Cliente::all(),
            'yacimientos' => Yacimiento::all(),
            'mud_company' => MudCompany::all(),
            'equipos' => Equipos::all(),
            'servicios' => Servicios::all(),
            'tipo_lodo' => TipoLodo_Lodos::all(),
            'solicitud_lodo' => SolicitudLodo::where('solicitud_id', $solicitud_id)->get(),
            'comentarios_referencia' => RelEnsayoComentarioSolicitud::where('solicitud_id', $solicitud_id)->get(),
            'names_ingenieros' => User::whereIn('users.grupo_id', [3, 4])->get('users.*'),
            'aditivos' => Aditivo::all(),
            'tipo_de_colchon' => TipoDeColchon::all(),
            'choices' => Choices::all(),
            // 'ensayos' => Ensayo::with('aditivos', 'requerimientos')->where('solicitud_id', $solicitud_id)->get()
        ];
        $generate_report_lodo = $this->_generate_report_lodo($solicitud_id);
        $data['generar_reporte_lodo'] = $generate_report_lodo->original['generate_report_lodo'];
        return view('solicitud.components.lodo.show', $data);
    }


    public function getReologiasTemp($solicitud_lechada_id)
    {
        // Realiza la consulta para obtener los registros de rel_reologia_solicitud_ensayo
        $reologias = RelReologiaSolicitudEnsayo::where('solicitud_lechada_id', $solicitud_lechada_id)
            ->get(); // Obtiene todos los resultados que coincidan con el ID proporcionado

        // Si se encontraron registros, devuelve los datos en formato JSON
        if ($reologias->isNotEmpty()) {
            return response()->json($reologias);
        }

        // Si no se encontraron registros, devuelve un mensaje de error
        return response()->json(['error' => 'No se encontraron registros para el ID proporcionado'], 404);
    }

    public function obtenerIDSolicitud($ensayo_asignado_id)
    {
        // Realiza la consulta para obtener la última solicitud con el ensayo_asignado_id que llega por parametro
        $solicitud = Solicitud::where('ensayo_asignado_id', $ensayo_asignado_id)
            ->orderBy('created_at', 'desc') // Ordeno por fecha de creacion al último que fue asignado
            ->first(); // Obtengo solo el primer resultado

        // Si se encontró la solicitud, devuelve el ID en formato JSON
        if ($solicitud) {
            return response()->json(['id' => $solicitud->id]);
        }

        // Si no se encontró ninguna solicitud, devuelve un mensaje de error
        return response()->json(['error' => 'Solicitud no encontrada'], 404);
    }

    public function update_lechada(Request $request)
    {
        $aditivos_request = $request->aditivos;

        if (is_array($aditivos_request)) {
            $id_aditivos = array_column($aditivos_request, 'id');
        } else {
            $id_aditivos = []; // O maneja el caso en que no se envían aditivos
        }
        # Aca puse un if por un error que tiro previamente
        # $aditivos_request = $request->aditivos;
        # $id_aditivos = array_column($aditivos_request, 'id');

        # Validamos los datos del encabezado general
        $this->validate($request, [
            'cliente_lechada' => 'required',
            'locacion_lechada' => 'required',
            'programa_lechada' => 'required',
            // 'empresa_lechada' => 'required',
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
        $solicitud->locacion_id = $request->locacion_lechada;
        $solicitud->programa = $request->programa_lechada;
        // $solicitud->empresa = $request->empresa_lechada;
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
        $solicitud_lechada->ensayo_requerido_bullheading = $request->ensayo_requerido_bullheading == 'on' ? 1 : 0;
        $solicitud_lechada->ensayo_requerido_tapon = $request->ensayo_requerido_tapon == 'on' ? 1 : 0;
        $solicitud_lechada->ensayo_requerido_relleno = $request->ensayo_requerido_relleno == 'on' ? 1 : 0;
        $solicitud_lechada->OH = $request->OH;
        $solicitud_lechada->trepano = $request->trepano;
        $solicitud_lechada->casing_id = $request->casing_id;
        $solicitud_lechada->casing_od = $request->casing_od;
        $solicitud_lechada->densidad_lodo = $request->densidad_lodo;
        $solicitud_lechada->tipo_lodo = $request->tipo_lodo;
        $solicitud_lechada->mud_company_id = $request->mud_company;
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
        $solicitud_lechada->tiempo_1000_psi = $request->tiempo_1000_psi == 'on' ? 1 : 0;
        $solicitud_lechada->resistencia_12_hs = $request->resistencia_12_hs == 'on' ? 1 : 0;
        $solicitud_lechada->resistencia_24_hs = $request->resistencia_24_hs == 'on' ? 1 : 0;
        $solicitud_lechada->agua_libre = $request->agua_libre;
        $solicitud_lechada->sgs = $request->sgs;
        $solicitud_lechada->tipo_cemento = $request->tipo_cemento;
        $solicitud_lechada->observacion = $request->observacion_lechada;
        $solicitud_lechada->firma_reconocimiento_id = $request->firma_reconocimiento_lechada;
        $solicitud_lechada->fecha_reconocimiento = $request->fecha_reconocimiento_lechada;
        $solicitud_lechada->firma_solicitante_id = $request->firma_solicitante_lechada;
        $solicitud_lechada->fecha_solicitante = $request->fecha_solicitante_lechada;
        $solicitud_lechada->save();

        $aditivos_bd = RelAditivoSolicitudLechada::where('solicitud_lechada_id', $solicitud_lechada->id)->get();

        # Formulaciones Tentativas (Actualizar)
        if ($request->aditivos) {

            foreach ($request->aditivos as $formulacion) {
                $rel = RelAditivoSolicitudLechada::find($formulacion['id']);
                $rel->lote = $formulacion['lote'];
                $rel->aditivo = $formulacion['aditivo'];
                $rel->concentracion = $formulacion['concentracion'];
                $rel->blend = $formulacion['blend'];
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
                    'blend' => $formulacion['blend'],
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

    public function update_lodo(Request $request)
    {
        $aditivos_request = $request->aditivos;
        $id_aditivos = array_column($aditivos_request, 'id');

        # Validamos los datos del encabezado general
        $this->validate($request, [
            'cliente_lodo' => 'required',
            'locacion_lodo' => 'required',
            'programa_lodo' => 'required',
            'pozo_lodo' => 'required',
            'fecha_resultados_lodo' => 'required',
            'equipo_lodo' => 'required',
            'servicio_lodo' => 'required',
        ]);

        // Change => Datos de la solicitud general
        $solicitud = Solicitud::find($request->solicitud_id);
        $solicitud->locacion_id = $request->locacion_lodo;
        // $solicitud->empresa = $request->empresa_lodo;
        $solicitud->pozo = $request->pozo_lodo;
        $solicitud->fecha_resultados = $request->fecha_resultados_lodo;
        $solicitud->equipo = $request->equipo_lodo;
        $solicitud->servicio = $request->servicio_lodo;
        $solicitud->save();

        $solicitud_lodo = SolicitudLodo::where('solicitud_id', $solicitud->id)->first();
        $solicitud_lodo->profundidad_md = $request->profundidad_md;
        $solicitud_lodo->profundidad_tvd = $request->profundidad_tvd;
        //Aca irian todas las que vayamos agregando mas adelante
        $solicitud_lodo->save();


        // $aditivos_bd = RelAditivoSolicitudLodo::where('solicitud_lodo_id', $solicitud_lodo->id)->get();

        //Aca iria un foreach con los aditivos


        if ($solicitud->id)
            return back()->with('success', $solicitud->id);
    }



    /**
     * Se que es un código asqueroso, pero una condición si o si depende de la otra
     */
    // public function _generate_report($solicitud_id)
    // {
    //     $generar_reporte = false;
    //     $solicitud_lechada = SolicitudLechada::where('solicitud_id', $solicitud_id)->get();

    //     // Reología
    //     if (count($solicitud_lechada[0]->rel_reologia) > 0) {
    //         // Pérdida de Filtrado
    //         if (count($solicitud_lechada[0]->rel_perdida_filtrado) > 0) {
    //             // UCA
    //             if (count($solicitud_lechada[0]->rel_uca) > 0) {
    //                 // Agua Libre
    //                 if (count($solicitud_lechada[0]->rel_agua_libre) > 0) {
    //                     // Mezclabilidad
    //                     if (count($solicitud_lechada[0]->rel_mezclabilidad) > 0) {
    //                         // Bombeabilidad
    //                         if (count($solicitud_lechada[0]->rel_bombeabilidad) > 0) {
    //                             foreach ($solicitud_lechada[0]->rel_bombeabilidad as $b) {
    //                                 if ($b->selected) {
    //                                     $generar_reporte = true;
    //                                     break;
    //                                 } else {
    //                                     $generar_reporte = false;
    //                                 }
    //                             }
    //                         } else {
    //                             $generar_reporte = false;
    //                         }
    //                     } else {
    //                         $generar_reporte = false;
    //                     }
    //                 } else {
    //                     $generar_reporte = false;
    //                 }
    //             } else {
    //                 $generar_reporte = false;
    //             }
    //         } else {
    //             $generar_reporte = false;
    //         }
    //     } else {
    //         $generar_reporte = false;
    //     }
    //     return response()->json(['generate_report' => $generar_reporte]);
    //     // echo json_encode($generar_reporte);
    // }

    /**
     * Se que es un código asqueroso, pero una condición si o si depende de la otra
     * CODIGO QUE FUNCIONA QUIERO REFACTORIZAR
     */
    // public function _generate_report($solicitud_id)
    // {
    //     $generar_reporte = false;
    //     $solicitud_lechada = SolicitudLechada::where('solicitud_id', $solicitud_id)->get();

    //     // Reología
    //     if (count($solicitud_lechada[0]->rel_reologia) > 0) {
    //         // Pérdida de Filtrado
    //         if (count($solicitud_lechada[0]->rel_perdida_filtrado) > 0) {
    //             // UCA
    //             if (count($solicitud_lechada[0]->rel_uca) > 0) {
    //                 // Agua Libre
    //                 if (count($solicitud_lechada[0]->rel_agua_libre) > 0) {
    //                     // Mezclabilidad
    //                     if (count($solicitud_lechada[0]->rel_mezclabilidad) > 0) {
    //                         //Aditivos
    //                         if (count($solicitud_lechada[0]->rel_aditivos) > 0) {
    //                             // Bombeabilidad
    //                             if (count($solicitud_lechada[0]->rel_bombeabilidad) > 0) {
    //                                 foreach ($solicitud_lechada[0]->rel_bombeabilidad as $b) {
    //                                     if ($b->selected) {
    //                                         $generar_reporte = true;
    //                                         break;
    //                                     } else {
    //                                         $generar_reporte = false;
    //                                     }
    //                                 }
    //                             } else {
    //                                 $generar_reporte = false;
    //                             }
    //                         } else {
    //                             $generar_reporte = false;
    //                         }
    //                     } else {
    //                         $generar_reporte = false;
    //                     }
    //                 } else {
    //                     $generar_reporte = false;
    //                 }
    //             } else {
    //                 $generar_reporte = false;
    //             }
    //         } else {
    //             $generar_reporte = false;
    //         }
    //     } else {
    //         $generar_reporte = false;
    //     }
    //     return response()->json(['generate_report' => $generar_reporte]);
    //     // echo json_encode($generar_reporte);
    // }

    public function _generate_report($solicitud_id)
    {
        $generar_reporte = false;
        $solicitud_lechada = SolicitudLechada::where('solicitud_id', $solicitud_id)->first();

        if (!$solicitud_lechada) {
            return response()->json(['generate_report' => $generar_reporte]);
        }

        $requisitos = [
            'rel_reologia',
            'rel_perdida_filtrado',
            'rel_uca',
            'rel_agua_libre',
            'rel_mezclabilidad',
            'rel_aditivos',
            'rel_bombeabilidad',
        ];

        // Verificar que todas las relaciones tengan datos
        foreach ($requisitos as $relacion) {
            if (count($solicitud_lechada->$relacion) == 0) {
                return response()->json(['generate_report' => $generar_reporte]);
            }
        }

        // Verificar si en rel_bombeabilidad hay algún valor seleccionado
        foreach ($solicitud_lechada->rel_bombeabilidad as $b) {
            if ($b->selected) {
                $generar_reporte = true;
                break;
            }
        }

        return response()->json(['generate_report' => $generar_reporte]);
    }

    // Reporte de ensayo para Lodo
    public function _generate_report_lodo($solicitud_id)
    {
        $generar_reporte_lodo = false;
        $solicitud_lodo = SolicitudLodo::where('solicitud_id', $solicitud_id)->first();
        //$solicitud_lodo = SolicitudLodo::with('rel_compatibilidad')->find($solicitud_id);


        // Si no existe la solicitud de lodo, retorna que no se puede generar el reporte
        if (!$solicitud_lodo) {
            return response()->json(['generate_report_lodo' => $generar_reporte_lodo]);
        }

        // Requisitos necesarios para generar el reporte de lodo
        $requisitos_lodo = [
            'rel_aditivos',
            'rel_caracterizacion',
            'rel_compatibilidad',
            'rel_mecanica',
            'rel_estatica',
            'rel_humectabilidad',
        ];

        // Verificar que todas las relaciones tengan datos
        foreach ($requisitos_lodo as $relacion) {
            if (count($solicitud_lodo->$relacion) == 0) {
                return response()->json(['generate_report_lodo' => $generar_reporte_lodo]);
            }
        }

        // Si se pasaron todas las verificaciones, se puede generar el reporte
        $generar_reporte_lodo = true;
        return response()->json(['generate_report_lodo' => $generar_reporte_lodo]);
    }



    // public function _generate_report($solicitud_id)
    // {
    // $generar_reporte = false;
    // $solicitud_lechada = SolicitudLechada::where('solicitud_id', $solicitud_id)->first();

    // if (!$solicitud_lechada) {
    //     return response()->json(['generate_report' => $generar_reporte]);
    // }

    // $requisitos = [
    //     'rel_reologia',
    //     'rel_perdida_filtrado',
    //     'rel_uca',
    //     'rel_agua_libre',
    //     'rel_mezclabilidad',
    //     'rel_aditivos',
    //     'rel_bombeabilidad',
    // ];

    // // Verificar que todas las relaciones tengan datos
    // foreach ($requisitos as $relacion) {
    //     if (count($solicitud_lechada->$relacion) == 0) {
    //         return response()->json(['generate_report' => $generar_reporte]);
    //     }
    // }

    // // Verificar si en rel_bombeabilidad hay algún valor seleccionado
    // foreach ($solicitud_lechada->rel_bombeabilidad as $b) {
    //     if ($b->selected) {
    //         $generar_reporte = true;
    //         break;
    //     }
    // }

    // return response()->json(['generate_report' => $generar_reporte]);
    // }


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
        Mail::to($correo)->send(new SolicitudLechadaAprobada($data));

        // Mail::send('emails.solicitud.approved', ['data' => $data], function ($message) use ($correo, $data) {
        //     $message->to($correo)
        //         ->subject('Laboratorio Calfrac | Solicitud de Fractura N°' . $data['solicitud_id'] . ' - Aprobada');
        // });
    }

    public function _sendEmailApprovedLodo($data, $correo)
    {
        Mail::to($correo)->send(new SolicitudLodoAprobada($data));

        // Mail::send('emails.solicitud.approved', ['data' => $data], function ($message) use ($correo, $data) {
        //     $message->to($correo)
        //         ->subject('Laboratorio Calfrac | Solicitud de Fractura N°' . $data['solicitud_id'] . ' - Aprobada');
        // });
    }

    public function viewMail()
    {
        return view('emails.user.credential');
    }

    public function mostrarTabla(Request $request)
    {
        // Obtener el número de registros totales
        $recordsTotal = Solicitud::count();

        // Consultar las solicitudes con relaciones
        $query = Solicitud::with(['user', 'ensayo']); // Ajusta las relaciones según tu modelo

        // Filtros de búsqueda y ordenación
        if ($request->has('search') && !empty($request->search['value'])) {
            $query->where(function ($q) use ($request) {
                $q->where('id', 'like', '%' . $request->search['value'] . '%')
                    ->orWhere('tipo', 'like', '%' . $request->search['value'] . '%')
                    ->orWhere('fecha_solicitud', 'like', '%' . $request->search['value'] . '%')
                    ->orWhereHas('user', function ($q) use ($request) {
                        $q->where('nombre', 'like', '%' . $request->search['value'] . '%')
                            ->orWhere('apellido', 'like', '%' . $request->search['value'] . '%');
                    });
            });
        }

        // Ordenación
        if ($request->has('order')) {
            $orderColumn = $request->order[0]['column'];
            $orderDirection = $request->order[0]['dir'];
            $columns = ['id', 'tipo', 'fecha_solicitud', 'user_id', 'ensayo_asignado_id', 'created_at'];
            $query->orderBy($columns[$orderColumn], $orderDirection);
        }

        // Paginación
        $start = $request->start;
        $length = $request->length;
        $data = $query->offset($start)->limit($length)->get();

        // Número de registros filtrados
        $recordsFiltered = $query->count();

        // Formatear los datos
        $data = $data->map(function ($solicitud) {
            $tipo = '';
            $accionesUrl = '';
            switch ($solicitud->tipo) {
                case '1':
                    $tipo = 'Solicitud de Fractura';
                    $accionesUrl = route('solicitud.fractura.show', $solicitud->id);
                    break;
                case '2':
                    $tipo = 'Solicitud de Lechada';
                    $accionesUrl = route('solicitud.lechada.show', $solicitud->id);
                    break;
                case '3':
                    $tipo = 'Solicitud de Lodo';
                    $accionesUrl = route('solicitud.lodo.show', $solicitud->id);
                    break;
            }

            $ensayoAsignado = $solicitud->tipo != '1'
                ? ($solicitud->ensayo_asignado_id ? "{$solicitud->ensayo->tipo}-{$solicitud->ensayo->incrementable}-{$solicitud->ensayo->anio}" : 'Sin ensayo asignado')
                : 'No Aplica';

            return [
                'id' => $solicitud->id,
                'tipo_solicitud' => $tipo,
                'fecha_solicitud' => $solicitud->fecha_solicitud->format('d/m/Y'),
                'nombre_solicitante' => $solicitud->user->nombre . ' ' . $solicitud->user->apellido,
                'ensayo_asignado' => $ensayoAsignado,
                'fecha_carga' => $solicitud->created_at->format('d/m/Y H:i') . ' h',
                'acciones' => $accionesUrl
            ];
        });

        // Retornar respuesta JSON para DataTables
        return response()->json([
            'draw' => intval($request->draw),
            'recordsTotal' => $recordsTotal,
            'recordsFiltered' => $recordsFiltered,
            'data' => $data
        ]);
    }
    // Funcion para enviar mail a lechada
    public function _sendEmailNewLechada($data, $correos)
    {
        foreach ($correos as $c) {
            Mail::send('emails.solicitud.new_lechada', ['data' => $data], function ($message) use ($c, $data) {
                $message->to($c)
                    ->subject('Laboratorio Calfrac | Solicitud de Lechada N°' . $data['solicitud_id']);
            });
        };
    }

    // Funcion para enviar mail a lechada
    public function _sendEmailNewLodo($data, $correos)
    {
        foreach ($correos as $c) {
            Mail::send('emails.solicitud.new_lodo', ['data' => $data], function ($message) use ($c, $data) {
                $message->to($c)
                    ->subject('Laboratorio Calfrac | Solicitud de Lodo N°' . $data['solicitud_id']);
            });
        };
    }
}
