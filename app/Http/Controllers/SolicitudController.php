<?php

namespace App\Http\Controllers;

use App\Mail\SolicitudMail;
use App\Models\Aditivo;
use App\Models\AgenteSosten;
use App\Models\AnalisisMicrobial;
use App\Models\Cliente;
use App\Models\Edicion_Solicitud;
use App\Models\Ensayo;
use App\Models\OtrosAnalisis;
use App\Models\SistemasFluidos;
use App\Models\Solicitud;
use App\Models\SolicitudFractura;
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
            'ensayos' => Ensayo::select('id', 'tvd', 'md', 'densidad_lechada', 'grado_temperatura', 'bhse', 'bhct')->get(),
            'clientes' => Cliente::all(),
            'yacimientos' => Yacimiento::all(),
            'sistemas_fluidos' => SistemasFluidos::all(),
            'analisis_microbial' => AnalisisMicrobial::all(),
            'agente_sosten' => AgenteSosten::all(),
            'otros_analisis' => OtrosAnalisis::all(),
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
    public function store_lechada(Request $request) {
        # Validamos los datos del encabezado general
        $this->validate($request, [
            'cliente' => 'required',
            'locacion' => 'required',
            'programa' => 'required',
            'fecha_solicitud' => 'required',
            'empresa' => 'required',
            'fecha_tratamiento' => 'required',
            'pozo' => 'required',
            'fecha_reporte' => 'required',
            'fecha_resultados' => 'required',
            'equipo' => 'required',
            'servicio' => 'required',
            'reporte_lab_tall' => 'required',
            'reporte_lab_lead' => 'required',
            'tipo_trabajo' => 'required',
            'tipo_cementacion' => 'required',
            'ensayo_requerido' => 'required',
        ]);

        # Solicitud General
        $solicitud = Solicitud::create([
            'tipo' => 2,
            'cliente' => $request->cliente,
            'locacion' => $request->locacion,
            'programa' => $request->programa,
            'fecha_solicitud' => $request->fecha_solicitud,
            'empresa' => $request->empresa,
            'fecha_tratamiento' => $request->fecha_tratamiento,
            'pozo' => $request->pozo,
            'fecha_reporte' => $request->fecha_reporte,
            'fecha_resultados' => $request->fecha_resultados,
            'equipo' => $request->equipo,
            'servicio' => $request->servicio,
            'reporte_lab_tall' => $request->reporte_lab_tall,
            'reporte_lab_lead' => $request->reporte_lab_lead,
            'tipo_trabajo' => $request->tipo_trabajo,
            'tipo_cementacion' => $request->tipo_cementacion,
            'ensayo_requerido' => $request->ensayo_requerido,
            'estado_solicitud_id' => 1,
            'user_id' => auth()->user()->id
        ]);

        // if ($solicitud->id)
        //     return redirect('solicitud')->with('success', $solicitud->id);
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
        $solicitud->save();
        $solicitud->updated_at = date('Y-m-d H:i:s');

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
    public function _sendEmailEdition($data, $correo) {
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
    public function _sendEmailApproved($data, $correo) {
        Mail::send('emails.solicitud.approved', ['data' => $data], function ($message) use ($correo, $data) {
            $message->to($correo)
                ->subject('Laboratorio Calfrac | Solicitud de Fractura N°'. $data['solicitud_id'] . ' - Aprobada');
        });
    }

    public function viewMail()
    {
        return view('emails.user.credential');
    }
}
