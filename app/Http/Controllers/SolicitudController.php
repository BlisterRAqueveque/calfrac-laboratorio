<?php

namespace App\Http\Controllers;

use App\Models\Aditivo;
use App\Models\AgenteSosten;
use App\Models\AnalisisMicrobial;
use App\Models\Cliente;
use App\Models\Edicion_Solicitud;
use App\Models\OtrosAnalisis;
use App\Models\SistemasFluidos;
use App\Models\Solicitud;
use App\Models\SolicitudFractura;
use App\Models\User;
use App\Models\Yacimiento;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SolicitudController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create()
    {
        $data = [
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
    public function store_fractura(Request $request) {

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
        SolicitudFractura::create([
            'fluido' => $request->fluido,
            'formacion' => $request->formacion,
            'bhst' => $request->bhst,
            'tipo_temp_bhst' => $request->tipo_temp_bhst,
            'temp_ensayo' => $request->temp_ensayo,
            'tipo_temp_ensayo' => $request->tipo_temp_ensayo,
            'proveedor' => $request->proveedor,
            'producto' => $request->producto,
            'concentracion' => $request->concentracion,
            'aditivo_extra' => $request->aditivo_extra,
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
        // En Proceso
    }

    /**
     * Cuando se aprueba una solicitud, se almacena el usuario quién aprobó, 
     * cambia de estado y también se almacena la fecha
     */
    public function store_aprobar(Request $request) {
        $solicitud = Solicitud::find($request->solicitud_id);
        $solicitud->estado_solicitud_id = 2;
        $solicitud->aprobada = 1;
        $solicitud->fecha_aprobada = date('Y-m-d H:i:s');
        $solicitud->usuario_aprobo = auth()->user()->id;
        $solicitud->save();
        return back();
    }

    /**
     * Edita la solicitud de fractura, la misma se crea un comentario/fundamento al respecto de por qué se está editando
     */
    public function update(Request $request) {
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
        // $solicitud_fractura->updated_at = date('Y-m-d H:i:s');
        # La fundamentación del por qué se editó la solicitud
        Edicion_Solicitud::create([
            'fundamento' => $request->fundamento_edicion,
            'usuario_fundamento' => auth()->user()->id,
            'solicitud_id' => $solicitud->id
        ]);

        // return back();
    }

    public function store_lechada(Request $request) {}

    public function store_lodo(Request $request) {
        
    }
    public function index() {
        $data = [
            'solicitudes' => Solicitud::all(),
        ];
        return view('solicitud.index', $data);
    }

    public function show_fractura($solicitud_id) {

        $data = [
            'solicitud' => Solicitud::find($solicitud_id),
            'solicitud_fractura' => SolicitudFractura::where('solicitud_id', $solicitud_id)->get(),
            'sistemas_fluidos' => SistemasFluidos::all(),
            'analisis_microbial' => AnalisisMicrobial::all(),
            'agente_sosten' => AgenteSosten::all(),
            'otros_analisis' => OtrosAnalisis::all(),
            'aditivos' => Aditivo::all(),
            'users' => User::all(),
            // 'solicitud_fractura' => SolicitudFractura::where('solicitud_id', $solicitud_id)->get()
        ];
        return view('solicitud.components.fractura.show', $data);
    }
}
