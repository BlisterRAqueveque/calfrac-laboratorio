<?php

namespace App\Http\Controllers;

use App\Models\Ensayo;
use App\Models\RelAditivosEnsayos;
use App\Models\RelAguaLibreSolicitudEnsayo;
use App\Models\RelBombeabilidadSolicitudEnsayo;
use App\Models\RelMezclabilidadSolicitudEnsayo;
use App\Models\RelPerdidaSolicitudEnsayo;
use App\Models\RelReologiaSolicitudEnsayo;
use App\Models\RelRequerimientosEnsayos;
use App\Models\RelUcaSolicitudEnsayo;
use App\Models\Solicitud;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class EnsayoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('ensayo.create');
    }

    public function index()
    {
        $data = [
            'ensayos' => Ensayo::all()
        ];
        return view('ensayo.index', $data);
    }

    public function store(Request $request)
    {
        # Validaciones (Consultar que se valida)

        # Crear el Ensayo
        $ensayo = Ensayo::create([
            'uso' => $request->uso,
            'cliente' => $request->cliente,
            'estado' => $request->estado,
            'numero_lodo' => $request->numero_lodo,
            'tipo_trabajo' => $request->tipo_trabajo,
            'nombre_lodo' => $request->nombre_lodo,
            'fecha_solicitado' => $request->fecha_solicitado,
            'requerido_por' => $request->requerido_por,
            'tipo_requerimiento' => $request->tipo_requerimiento,
            'laboratorio' => $request->laboratorio,
            'well_name' => $request->well_name,
            'ingeniero' => $request->ingeniero,
            'open_hole' => $request->open_hole,
            'densidad_lodo' => $request->densidad_lodo,
            'md' => $request->md,
            'tvd' => $request->tvd,
            'proveedor_lodo' => $request->proveedor_lodo,
            'bhse' => $request->bhse,
            'bhct' => $request->bhct,
            'grado_temperatura' => $request->grado_temperatura,
            'volumen' => $request->volumen,
            'caudal' => $request->caudal,
            'tope_lechada' => $request->tope_lechada,
            'base_lechada' => $request->base_lechada,
            'densidad_lechada' => $request->densidad_lechada,
            'comentario' => $request->comentario,
            'solicitud_id' => $request->solicitud_id,
            'user_id' => auth()->user()->id,
        ]);

        # Asignar los aditivos
        if ($request->aditivos) {
            foreach ($request->aditivos as $aditivo) {
                $this->_createRelAditivo($aditivo, $ensayo->id);
            }
        }

        # Asignar los requerimientos
        if ($request->requerimientos) {
            foreach ($request->requerimientos as $requerimiento) {
                $this->_createRelRequerimiento($requerimiento, $ensayo->id);
            }
        }

        if ($ensayo->id)
            return back()->with('success', $ensayo->id);
    }

    public function assigned(Request $request)
    {
        $rel = RelBombeabilidadSolicitudEnsayo::find($request->id_assignment);
        $rel->selected = 1;
        $rel->save();

        if ($rel->id)
            return response()->json(['id_rel_bomb' => $rel->id]);
    }

    protected function _createRelAditivo($aditivo, $ensayo_id)
    {
        RelAditivosEnsayos::create([
            'aditivo_id' => $aditivo['material'],
            'ensayo_id' => $ensayo_id,
            'concentracion' => $aditivo['concentracion'],
            'concentracion_type' => $aditivo['concentracion_type'],
            'agregado' => $aditivo['agregado'],
            'numero_lote' => $aditivo['numero_lote'],
            'user_id' => auth()->user()->id,
        ]);
    }

    protected function _createRelRequerimiento($requerimiento, $ensayo_id)
    {
        RelRequerimientosEnsayos::create([
            'ensayo_id' => $ensayo_id,
            'test_id' => $requerimiento['test'],
            'temperatura' => $requerimiento['temperatura'],
            'condicion_id' => $requerimiento['condicion'],
            'planilla' => $requerimiento['resultados']['planilla'],
            'consistometro' => $requerimiento['resultados']['consistometro'],
            'tiempo_acondicionamiento' => $requerimiento['resultados']['tiempo_acondicionamiento'],
            'gradiente' => $requerimiento['resultados']['gradiente'],
            'temperatura_bombeabilidad' => $requerimiento['resultados']['temperatura_bombeabilidad'],
            'presion' => $requerimiento['resultados']['presion'],
            '40_bc' => $requerimiento['resultados']['40_bc'],
            '70_bc' => $requerimiento['resultados']['70_bc'],
            '100_bc' => $requerimiento['resultados']['100_bc'],
            'uca_numero' => $requerimiento['resultados']['uca_numero'],
            'uca_temperatura' => $requerimiento['resultados']['uca_temperatura'],
            'uca_50_psi' => $requerimiento['resultados']['uca_50_psi'],
            'uca_500_psi' => $requerimiento['resultados']['uca_500_psi'],
            'uca_1000_psi' => $requerimiento['resultados']['uca_1000_psi'],
            'uca_12_hr' => $requerimiento['resultados']['uca_12_hr'],
            'uca_24_hr' => $requerimiento['resultados']['uca_24_hr'],
            'uca_impedancia_acustica' => $requerimiento['resultados']['uca_impedancia_acustica'],
            'uca_sgc_cero' => $requerimiento['resultados']['uca_sgc_cero'],
            'uca_sgc_max' => $requerimiento['resultados']['uca_sgc_max'],
            'uca_tiempo' => $requerimiento['resultados']['uca_tiempo'],
            'radiologia_temp_amb_rpm' => $requerimiento['resultados']['radiologia_temp_amb_rpm'],
            'radiologia_temp_amb_300' => $requerimiento['resultados']['radiologia_temp_amb_300'],
            'radiologia_temp_amb_200' => $requerimiento['resultados']['radiologia_temp_amb_200'],
            'radiologia_temp_amb_100' => $requerimiento['resultados']['radiologia_temp_amb_100'],
            'radiologia_temp_amb_60' => $requerimiento['resultados']['radiologia_temp_amb_60'],
            'radiologia_temp_amb_30' => $requerimiento['resultados']['radiologia_temp_amb_30'],
            'radiologia_temp_amb_6' => $requerimiento['resultados']['radiologia_temp_amb_6'],
            'radiologia_temp_amb_3' => $requerimiento['resultados']['radiologia_temp_amb_3'],
            'radiologia_temp_ens_rpm' => $requerimiento['resultados']['radiologia_temp_ens_rpm'],
            'radiologia_temp_ens_300' => $requerimiento['resultados']['radiologia_temp_ens_300'],
            'radiologia_temp_ens_200' => $requerimiento['resultados']['radiologia_temp_ens_200'],
            'radiologia_temp_ens_100' => $requerimiento['resultados']['radiologia_temp_ens_100'],
            'radiologia_temp_ens_60' => $requerimiento['resultados']['radiologia_temp_ens_60'],
            'radiologia_temp_ens_30' => $requerimiento['resultados']['radiologia_temp_ens_30'],
            'radiologia_temp_ens_6' => $requerimiento['resultados']['radiologia_temp_ens_6'],
            'radiologia_temp_ens_3' => $requerimiento['resultados']['radiologia_temp_ens_3'],
            'radiologia_temp_amb' => $requerimiento['resultados']['radiologia_temp_amb'],
            'radiologia_temp_ens' => $requerimiento['resultados']['radiologia_temp_ens'],
            'radiologia_temp_amb_cedencia' => $requerimiento['resultados']['radiologia_temp_amb_cedencia'],
            'radiologia_temp_ens_cedencia' => $requerimiento['resultados']['radiologia_temp_ens_cedencia'],
            'radiologia_temp_amb_gel_10_seg' => $requerimiento['resultados']['radiologia_temp_amb_gel_10_seg'],
            'radiologia_temp_ens_gel_10_seg' => $requerimiento['resultados']['radiologia_temp_ens_gel_10_seg'],
            'radiologia_temp_amb_gel_10_min' => $requerimiento['resultados']['radiologia_temp_amb_gel_10_min'],
            'radiologia_temp_ens_gel_10_min' => $requerimiento['resultados']['radiologia_temp_ens_gel_10_min'],
            'perdida_filtrado_temp' => $requerimiento['resultados']['perdida_filtrado_temp'],
            'perdida_fluido_acumulado' => $requerimiento['resultados']['perdida_fluido_acumulado'],
            'perdida_filtrado_api' => $requerimiento['resultados']['perdida_filtrado_api'],
            'perdida_agua_libre' => $requerimiento['resultados']['perdida_agua_libre'],
            'perdida_volumen' => $requerimiento['resultados']['perdida_volumen'],
            'perdida_api_agua_libre' => $requerimiento['resultados']['perdida_api_agua_libre'],
            'mezclabilidad' => $requerimiento['resultados']['mezclabilidad'],
            'user_id' => auth()->user()->id,
        ]);
    }

    /**
     * Crea la reología en la tabla 'rel_reologia_solicitud_ensayo'
     * Con la relación de la solicitud y también la del reporte de ensayo una vez que esté
     */
    public function store_reologia(Request $request)
    {
            // Validar los campos obligatorios
        $request->validate([
            //'tem_ambiente_rpm' => 'required',
            'tem_ambiente_300' => 'required',
            'tem_ambiente_200' => 'required',
            'tem_ambiente_100' => 'required',
            'tem_ambiente_60' => 'required',
            'tem_ambiente_30' => 'required',
            'tem_ambiente_6' => 'required',
            'tem_ambiente_3' => 'required',
            //'tem_ensayo_rpm' => 'required',
            'tem_ensayo_300' => 'required',
            'tem_ensayo_200' => 'required',
            'tem_ensayo_100' => 'required',
            'tem_ensayo_60' => 'required',
            'tem_ensayo_30' => 'required',
            'tem_ensayo_6' => 'required',
            'tem_ensayo_3' => 'required',
            //'temp_ambiente' => 'required',
            //'temp_ensayo' => 'required',
            //'temp_ambiente_punto_cedencia' => 'required',
            //'temp_ensayo_punto_cedencia' => 'required',
            'temp_ambiente_gel_10_seg' => 'required',
            'temp_ensayo_gel_10_seg' => 'required',
            'temp_ambiente_gel_10_min' => 'required',
            'temp_ensayo_gel_10_min' => 'required',
        ]);

        $reologia = RelReologiaSolicitudEnsayo::create([
            'tem_ambiente_rpm' => $request->tem_ambiente_rpm,
            'tem_ambiente_300' => $request->tem_ambiente_300,
            'tem_ambiente_200' => $request->tem_ambiente_200,
            'tem_ambiente_100' => $request->tem_ambiente_100,
            'tem_ambiente_60' => $request->tem_ambiente_60,
            'tem_ambiente_30' => $request->tem_ambiente_30,
            'tem_ambiente_6' => $request->tem_ambiente_6,
            'tem_ambiente_3' => $request->tem_ambiente_3,
            'tem_ensayo_rpm' => $request->tem_ensayo_rpm,
            'tem_ensayo_300' => $request->tem_ensayo_300,
            'tem_ensayo_200' => $request->tem_ensayo_200,
            'tem_ensayo_100' => $request->tem_ensayo_100,
            'tem_ensayo_60' => $request->tem_ensayo_60,
            'tem_ensayo_30' => $request->tem_ensayo_30,
            'tem_ensayo_6' => $request->tem_ensayo_6,
            'tem_ensayo_3' => $request->tem_ensayo_3,
            //'temp_ambiente' => $request->temp_ambiente,
            //'temp_ensayo' => $request->temp_ensayo,
            //'temp_ambiente_punto_cedencia' => $request->temp_ambiente_punto_cedencia,
            //'temp_ensayo_punto_cedencia' => $request->temp_ensayo_punto_cedencia,
            'temp_ambiente_gel_10_seg' => $request->temp_ambiente_gel_10_seg,
            'temp_ensayo_gel_10_seg' => $request->temp_ensayo_gel_10_seg,
            'temp_ambiente_gel_10_min' => $request->temp_ambiente_gel_10_min,
            'temp_ensayo_gel_10_min' => $request->temp_ensayo_gel_10_min,
            'tem_ambiente_rpm_up' => $request->tem_ambiente_rpm_up,
            'tem_ambiente_300_up' => $request->tem_ambiente_300_up,
            'tem_ambiente_200_up' => $request->tem_ambiente_200_up,
            'tem_ambiente_100_up' => $request->tem_ambiente_100_up,
            'tem_ambiente_60_up' => $request->tem_ambiente_60_up,
            'tem_ambiente_30_up' => $request->tem_ambiente_30_up,
            'tem_ambiente_6_up' => $request->tem_ambiente_6_up,
            'tem_ambiente_3_up' => $request->tem_ambiente_3_up,
            'tem_ensayo_rpm_up' => $request->tem_ensayo_rpm_up,
            'tem_ensayo_300_up' => $request->tem_ensayo_300_up,
            'tem_ensayo_200_up' => $request->tem_ensayo_200_up,
            'tem_ensayo_100_up' => $request->tem_ensayo_100_up,
            'tem_ensayo_60_up' => $request->tem_ensayo_60_up,
            'tem_ensayo_30_up' => $request->tem_ensayo_30_up,
            'tem_ensayo_6_up' => $request->tem_ensayo_6_up,
            'tem_ensayo_3_up' => $request->tem_ensayo_3_up,
            // 'tem_ambiente_rpm_down' => $request->tem_ambiente_rpm_down,
            // 'tem_ambiente_300_down' => $request->tem_ambiente_300_down,
            // 'tem_ambiente_200_down' => $request->tem_ambiente_200_down,
            // 'tem_ambiente_100_down' => $request->tem_ambiente_100_down,
            // 'tem_ambiente_60_down' => $request->tem_ambiente_60_down,
            // 'tem_ambiente_30_down' => $request->tem_ambiente_30_down,
            // 'tem_ambiente_6_down' => $request->tem_ambiente_6_down,
            // 'tem_ambiente_3_down' => $request->tem_ambiente_3_down,
            // 'tem_ensayo_rpm_down' => $request->tem_ensayo_rpm_down,
            // 'tem_ensayo_300_down' => $request->tem_ensayo_300_down,
            // 'tem_ensayo_200_down' => $request->tem_ensayo_200_down,
            // 'tem_ensayo_100_down' => $request->tem_ensayo_100_down,
            // 'tem_ensayo_60_down' => $request->tem_ensayo_60_down,
            // 'tem_ensayo_30_down' => $request->tem_ensayo_30_down,
            // 'tem_ensayo_6_down' => $request->tem_ensayo_6_down,
            // 'tem_ensayo_3_down' => $request->tem_ensayo_3_down,
            'solicitud_lechada_id' => $request->solicitud_lechada_id,
            'usuario_carga' => auth()->user()->id,
        ]);

        if ($reologia->id)
            return response()->json([
        'success_reologia' => $reologia,
    ]);
    }

    /**
     * Crea la pérdida de filtrado en la tabl 'rel_perdida_solicitud_ensayo'
     * Con la relación de la solicitud y también la del reporte del ensayo una vez que esté
     */
    public function store_perdida(Request $request)
    {
        $perdida_filtrado = RelPerdidaSolicitudEnsayo::create([
            'temperatura' => $request->perdida_temperatura,
            'fluido_acumulado' => $request->perdida_fluido_acumulado,
            'filtrado_api' => $request->perdida_filtrado_api,
            'solicitud_lechada_id' => $request->solicitud_lechada_id,
            'usuario_carga' => auth()->user()->id,
        ]);

        if ($perdida_filtrado->id)
            return response()->json(['success_filtrado' => $perdida_filtrado]);
    }

    /**
     * 
     */
    public function store_bombeabilidad(Request $request)
    {
        # Insertar adjunto (Si es que hay)
        $image = $request->file('file_upload_bombeabilidad');

        // if ($image) {
            # Nombre y destino
            $imageName = time() . '_bombeabilidad.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/ensayos');
    
            # Si no existe la carpeta de destino, la crea y guarda la img
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
    
            $img = Image::make($image->getRealPath());
    
            $width = $img->width();
            $height = $img->height();
    
            # Redimensionar si la img es mayor a 1000x1000
            if ($width > 1000 || $height > 1000) {
                $img->resize(1000, 1000, function ($constraint) {
                    $constraint->aspectRatio();
                });
            }
    
            $img->save($destinationPath . '/' . $imageName);
        // } else {
        //     $imageName = '';
        // }

        $bomb_id = RelBombeabilidadSolicitudEnsayo::create([
            'consistometro' => $request->bombeabilidad_consistometro,
            'time_acondicionamiento' => $request->bombeabilidad_acondicionamiento,
            'planilla' => $request->bombeabilidad_planilla,
            'gradiente' => $request->bombeabilidad_gradiente,
            'temperatura' => $request->bombeabilidad_temperatura,
            'presion' => $request->bombeabilidad_presion,
            'bc_40' => $request->bombeabilidad_40_bc,
            'bc_70' => $request->bombeabilidad_70_bc,
            'bc_100' => $request->bombeabilidad_100_bc,
            'img' => $imageName,
            'solicitud_lechada_id' => $request->solicitud_lechada_id,
            'usuario_carga' => auth()->user()->id,
        ]);

        $bombeabilidad = RelBombeabilidadSolicitudEnsayo::find($bomb_id->id);

        // $bombeabilidad->created_at = 'el día ' . $bombeabilidad->created_at->format('d') . 'de' . ' ' . $bombeabilidad->created_at->format('M') . ', ' . $bombeabilidad->created_at->format('Y') . ' a las ' . $bombeabilidad->created_at->format('H:i') . ' hs';
        $bombeabilidad->usuario_carga = $bombeabilidad->user->nombre . ' ' . $bombeabilidad->user->apellido;
        $bombeabilidad->dia = $bombeabilidad->created_at->format('d');
        $bombeabilidad->mes = $bombeabilidad->created_at->format('M');
        $bombeabilidad->anio = $bombeabilidad->created_at->format('Y');
        $bombeabilidad->time = $bombeabilidad->created_at->format('H:i');

        if ($bombeabilidad->id)
            return response()->json(['success_bombeabilidad' => $bombeabilidad]);
    }

    public function store_uca(Request $request)
    {
        # Insertar adjunto (Si es que hay)
        $image = $request->file('file_upload_uca');

        # Nombre y destino
        $imageName = time() . '_uca.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/ensayos');

        # Si no existe la carpeta de destino, la crea y guarda la img
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }

        $img = Image::make($image->getRealPath());

        $width = $img->width();
        $height = $img->height();

        # Redimensionar si la img es mayor a 1000x1000
        if ($width > 1000 || $height > 1000) {
            $img->resize(1000, 1000, function ($constraint) {
                $constraint->aspectRatio();
            });
        }

        $img->save($destinationPath . '/' . $imageName);

        $uca = RelUcaSolicitudEnsayo::create([
            'principal' => $request->uca_principal,
            'psi_50' => $request->uca_psi_50,
            'psi_500' => $request->uca_psi_500,
            'psi_1000' => $request->uca_psi_1000,
            'hs_12' => $request->uca_hs_12,
            'hs_24' => $request->uca_hs_24,
            'impedancia_acustica' => $request->uca_impedancia_acustica,
            'img' => $imageName,
            'sgs_cero' => $request->uca_sgs_cero,
            'sgs_max' => $request->uca_sgs_max,
            'tiempo' => $request->uca_tiempo,
            'solicitud_lechada_id' => $request->solicitud_lechada_id,
            'usuario_carga' => auth()->user()->id,
        ]);

        if ($uca->id)
            return response()->json(['success_uca' => $uca]);
    }

    public function store_agua_libre(Request $request)
    {
        $agua_libre = RelAguaLibreSolicitudEnsayo::create([
            'agua_libre' => $request->agua_libre,
            'volumen' => $request->agua_libre_volumen,
            'api_agua_libre' => $request->api_agua_libre,
            'solicitud_lechada_id' => $request->solicitud_lechada_id,
            'usuario_carga' => auth()->user()->id,
        ]);

        if ($agua_libre->id)
            return response()->json(['success_agua_libre' => $agua_libre]);
    }

    public function store_mezclabilidad(Request $request)
    {
        $mezclabilidad = RelMezclabilidadSolicitudEnsayo::create([
            'mezclabilidad' => $request->mezclabilidad,
            'solicitud_lechada_id' => $request->solicitud_lechada_id,
            'usuario_carga' => auth()->user()->id,
        ]);

        if ($mezclabilidad->id)
            return response()->json(['success_mezclabilidad' => $mezclabilidad]);
    }

    /**
     * 
     */
    public function assignedReporteSolicitud($solicitud_id)
    {

        $solicitud = Solicitud::find($solicitud_id);
        $tipo_ensayo = "";
        switch ($solicitud->tipo) {
            case '2': // Lechada y/o Cementación
                $tipo_ensayo = 'CN';
                break;
            case '3': // Lodo
                $tipo_ensayo = 'LN'; 
                break;
        }

        $last_ensayo = Ensayo::where('tipo', $tipo_ensayo)->latest('created_at')->first();

        $year = substr(date('Y'), -2);

        // if ($last_ensayo) {
        //     if ($year == $last_ensayo->anio) {
        //         $year = intval($year);
        //     }
        // }
        $year = intval($year);

        $ensayo = Ensayo::create([
            'incrementable' => $last_ensayo ? $last_ensayo->incrementable + 1 : 1,
            'tipo' => $tipo_ensayo,
            'anio' => $year,
            'user_id' => auth()->user()->id
        ]);

        $solicitud->ensayo_asignado_id = $ensayo->id;
        $solicitud->estado_solicitud_id = 3; // Finalizada
        $solicitud->save();
        return response()->json(['success' => $ensayo->id]);
    }
}
