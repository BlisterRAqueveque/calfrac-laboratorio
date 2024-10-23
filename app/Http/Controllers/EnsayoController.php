<?php

namespace App\Http\Controllers;

use App\Models\CalculosAditivosLechada;
use App\Models\Ensayo;
use App\Models\Aditivo;
use App\Models\RelAditivosEnsayos;
use App\Models\RelAditivosEnsayosLechada;
use App\Models\RelAguaLibreSolicitudEnsayo;
use App\Models\RelBombeabilidadSolicitudEnsayo;
use App\Models\RelMezclabilidadSolicitudEnsayo;
use App\Models\RelPerdidaSolicitudEnsayo;
use App\Models\RelReologiaSolicitudEnsayo;
use App\Models\RelRequerimientosEnsayos;
use App\Models\RelUcaSolicitudEnsayo;
use App\Models\CalculosReologias;
use App\Models\RelAditivosEnsayosLodo;
use App\Models\RelCaracterizacionLodo;
use App\Models\RelCompatibilidadLodo;
use App\Models\RelMecanicaLodo;
use App\Models\RelEstaticaLodo;
use App\Models\RelHumectabilidad;
use App\Models\RelReologiasLodo;
use App\Models\RelEnsayoCompatibilidad;
use App\Models\RelEnsayoEstatica;
use App\Models\RelEnsayoMecanica;
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
            //'tem_ambiente_rpm' => $request->tem_ambiente_rpm,
            'tem_ambiente_300' => $request->tem_ambiente_300,
            'tem_ambiente_200' => $request->tem_ambiente_200,
            'tem_ambiente_100' => $request->tem_ambiente_100,
            'tem_ambiente_60' => $request->tem_ambiente_60,
            'tem_ambiente_30' => $request->tem_ambiente_30,
            'tem_ambiente_6' => $request->tem_ambiente_6,
            'tem_ambiente_3' => $request->tem_ambiente_3,
            //'tem_ensayo_rpm' => $request->tem_ensayo_rpm,
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
            //'tem_ambiente_rpm_up' => $request->tem_ambiente_rpm_up,
            'tem_ambiente_300_up' => $request->tem_ambiente_300_up,
            'tem_ambiente_200_up' => $request->tem_ambiente_200_up,
            'tem_ambiente_100_up' => $request->tem_ambiente_100_up,
            'tem_ambiente_60_up' => $request->tem_ambiente_60_up,
            'tem_ambiente_30_up' => $request->tem_ambiente_30_up,
            'tem_ambiente_6_up' => $request->tem_ambiente_6_up,
            'tem_ambiente_3_up' => $request->tem_ambiente_3_up,
            //'tem_ensayo_rpm_up' => $request->tem_ensayo_rpm_up,
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

        // Realizar cálculos de los cocientes ambiente
        $tem_ambiente_300_cociente = $request->tem_ambiente_300_up / $request->tem_ambiente_300;
        $tem_ambiente_200_cociente = $request->tem_ambiente_200_up / $request->tem_ambiente_200;
        $tem_ambiente_100_cociente = $request->tem_ambiente_100_up / $request->tem_ambiente_100;
        $tem_ambiente_60_cociente = $request->tem_ambiente_60_up / $request->tem_ambiente_60;
        $tem_ambiente_30_cociente = $request->tem_ambiente_30_up / $request->tem_ambiente_30;
        $tem_ambiente_6_cociente = $request->tem_ambiente_6_up / $request->tem_ambiente_6;
        $tem_ambiente_3_cociente = $request->tem_ambiente_3_up / $request->tem_ambiente_3;
        // Realizar cálculos de los cocientes ensayos
        $tem_ensayo_300_cociente = $request->tem_ensayo_300_up / $request->tem_ensayo_300;
        $tem_ensayo_200_cociente = $request->tem_ensayo_200_up / $request->tem_ensayo_200;
        $tem_ensayo_100_cociente = $request->tem_ensayo_100_up / $request->tem_ensayo_100;
        $tem_ensayo_60_cociente = $request->tem_ensayo_60_up / $request->tem_ensayo_60;
        $tem_ensayo_30_cociente = $request->tem_ensayo_30_up / $request->tem_ensayo_30;
        $tem_ensayo_6_cociente = $request->tem_ensayo_6_up / $request->tem_ensayo_6;
        $tem_ensayo_3_cociente = $request->tem_ensayo_3_up / $request->tem_ensayo_3;
        // Realizar cálculos de los promedios ambiente
        $tem_ambiente_300_promedio = ceil(($request->tem_ambiente_300_up + $request->tem_ambiente_300) / 2);
        $tem_ambiente_200_promedio = ceil(($request->tem_ambiente_200_up + $request->tem_ambiente_200) / 2);
        $tem_ambiente_100_promedio = ceil(($request->tem_ambiente_100_up + $request->tem_ambiente_100) / 2);
        $tem_ambiente_60_promedio = ceil(($request->tem_ambiente_60_up + $request->tem_ambiente_60) / 2);
        $tem_ambiente_30_promedio = ceil(($request->tem_ambiente_30_up + $request->tem_ambiente_30) / 2);
        $tem_ambiente_6_promedio = ceil(($request->tem_ambiente_6_up + $request->tem_ambiente_6) / 2);
        $tem_ambiente_3_promedio = ceil(($request->tem_ambiente_3_up + $request->tem_ambiente_3) / 2);
        // Realizar cálculos de los promedios ensayos
        $tem_ensayo_300_promedio = ceil(($request->tem_ensayo_300_up + $request->tem_ensayo_300) / 2);
        $tem_ensayo_200_promedio = ceil(($request->tem_ensayo_200_up + $request->tem_ensayo_200) / 2);
        $tem_ensayo_100_promedio = ceil(($request->tem_ensayo_100_up + $request->tem_ensayo_100) / 2);
        $tem_ensayo_60_promedio = ceil(($request->tem_ensayo_60_up + $request->tem_ensayo_60) / 2);
        $tem_ensayo_30_promedio = ceil(($request->tem_ensayo_30_up + $request->tem_ensayo_30) / 2);
        $tem_ensayo_6_promedio = ceil(($request->tem_ensayo_6_up + $request->tem_ensayo_6) / 2);
        $tem_ensayo_3_promedio = ceil(($request->tem_ensayo_3_up + $request->tem_ensayo_3) / 2);

        // Guardar los cocientes en la nueva tabla
        $calculos_reologias = CalculosReologias::create([
            'reologia_id' => $reologia->id,
            'solicitud_id' => $request->solicitud_lechada_id,
            // Div up/down ambiente
            'tem_ambiente_300_cociente' => $tem_ambiente_300_cociente,
            'tem_ambiente_200_cociente' => $tem_ambiente_200_cociente,
            'tem_ambiente_100_cociente' => $tem_ambiente_100_cociente,
            'tem_ambiente_60_cociente' => $tem_ambiente_60_cociente,
            'tem_ambiente_30_cociente' => $tem_ambiente_30_cociente,
            'tem_ambiente_6_cociente' => $tem_ambiente_6_cociente,
            'tem_ambiente_3_cociente' => $tem_ambiente_3_cociente,
            // Calculo temp ambiente: (up + down)/2
            'tem_ambiente_300_promedio' => $tem_ambiente_300_promedio,
            'tem_ambiente_200_promedio' => $tem_ambiente_200_promedio,
            'tem_ambiente_100_promedio' => $tem_ambiente_100_promedio,
            'tem_ambiente_60_promedio' => $tem_ambiente_60_promedio,
            'tem_ambiente_30_promedio' => $tem_ambiente_30_promedio,
            'tem_ambiente_6_promedio' => $tem_ambiente_6_promedio,
            'tem_ambiente_3_promedio' => $tem_ambiente_3_promedio,
            // Div up/down ensayos
            'tem_ensayo_300_cociente' => $tem_ensayo_300_cociente,
            'tem_ensayo_200_cociente' => $tem_ensayo_200_cociente,
            'tem_ensayo_100_cociente' => $tem_ensayo_100_cociente,
            'tem_ensayo_60_cociente' => $tem_ensayo_60_cociente,
            'tem_ensayo_30_cociente' => $tem_ensayo_30_cociente,
            'tem_ensayo_6_cociente' => $tem_ensayo_6_cociente,
            'tem_ensayo_3_cociente' => $tem_ensayo_3_cociente,
            // Calculo temp ambiente: (up + down)/2
            'tem_ensayo_300_promedio' => $tem_ensayo_300_promedio,
            'tem_ensayo_200_promedio' => $tem_ensayo_200_promedio,
            'tem_ensayo_100_promedio' => $tem_ensayo_100_promedio,
            'tem_ensayo_60_promedio' => $tem_ensayo_60_promedio,
            'tem_ensayo_30_promedio' => $tem_ensayo_30_promedio,
            'tem_ensayo_6_promedio' => $tem_ensayo_6_promedio,
            'tem_ensayo_3_promedio' => $tem_ensayo_3_promedio,
        ]);

        if ($reologia->id)
            return response()->json([
        'success_reologia' => $reologia,
        'success_cociente' => $calculos_reologias,
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

    public function store_aditivos(Request $request)
    {

    // Verificar si se enviaron aditivos en la solicitud
    if ($request->aditivos) {
        foreach ($request->aditivos as $formulacion) {
            RelAditivosEnsayosLechada::create([
                'solicitud_lechada_id' => $request->solicitud_lechada_id,
                'lote' => $formulacion['lote'],
                'aditivo' => $formulacion['aditivo'],
                'comentario' => $formulacion['comentario'],
                'concentracion' => $formulacion['concentracion'],
                'om' => $formulacion['om'],
            ]);
        }

        // Obtener solo los datos que coincidan con el id de solicitud de lechada
        $aditivos = RelAditivosEnsayosLechada::where('solicitud_lechada_id', $request->solicitud_lechada_id)
        ->with('aditivos')  // Cargar la relación
        ->get();
        $ultimo_aditivo = $aditivos->last(); 

        // Calcular req_agua
        $req_agua = ($request->bolsa_ensayo / 50) * 100;
        $ppg_ensayo = ($request->densidad_ensayo / 1000) * 8.34;
        $ft_bolsa = $request->rendimiento_ensayo / 28.3;

        $calculos_aditivos = CalculosAditivosLechada::create([
            'aditivo_id' => $ultimo_aditivo->id,
            'solicitud_lechada_id' => $request->solicitud_lechada_id,
            'usuario_carga' => auth()->user()->id,
            'densidad_ensayo' => $request->densidad_ensayo,
            'rendimiento_ensayo' => $request->rendimiento_ensayo,
            'bolsa_ensayo' => $request->bolsa_ensayo,
            'req_agua' => $req_agua, // Almacenar el cálculo
            'ppg_ensayo' => $ppg_ensayo,
            'ft_bolsa' => $ft_bolsa,
        ]);

        return response()->json([
            'success_aditivos' => $aditivos,
            'success_calculos' => $calculos_aditivos
        ]);
    }

    return response()->json(['error' => 'No se enviaron aditivos en la solicitud'], 400);
}



// public function store_aditivos_lodo(Request $request)
// {

//     // Verificar si se enviaron aditivos en la solicitud
//     if ($request->aditivos) {
//         foreach ($request->aditivos as $formulacion) {
//             RelAditivosEnsayosLodo::create([
//                 'solicitud_lodo_id' => $request->solicitud_lodo_id,
//                 'lote' => $formulacion['lote'],
//                 'aditivo' => $formulacion['aditivo'],
//                 'comentario' => $formulacion['comentario'],
//                 'concentracion' => $formulacion['concentracion'],
//             ]);
//         }

//         // Obtener los aditivos relacionados a la solicitud de lodo
//         $aditivos_lodo = RelAditivosEnsayosLodo::where('solicitud_lodo_id', $request->solicitud_lodo_id)
//             ->with('aditivos')  // Cargar la relación con la tabla 'aditivos'
//             ->get();

//         // Retornar la respuesta JSON con los aditivos para el lado del cliente (JavaScript)
//         return response()->json([
//             'success_aditivos' => $aditivos_lodo,
//         ]);
//     }

//     return response()->json(['error' => 'No se enviaron aditivos en la solicitud'], 400);
// }
public function store_aditivos_lodo(Request $request)
{
    // Verificar si se enviaron aditivos en la solicitud
    if ($request->aditivos) {
        $hasData = false; // Variable para rastrear si hay datos de aditivos

        foreach ($request->aditivos as $formulacion) {
            // Verificar si hay datos en la formulación
            if (!empty($formulacion['lote']) || !empty($formulacion['aditivo']) || !empty($formulacion['concentracion'])) {
                $hasData = true; // Hay al menos un dato cargado
            }

            RelAditivosEnsayosLodo::create([
                'solicitud_lodo_id' => $request->solicitud_lodo_id,
                'lote' => $formulacion['lote'],
                'aditivo' => $formulacion['aditivo'],
                'comentario' => $formulacion['comentario'],
                'concentracion' => $formulacion['concentracion'],
                'unidad' => $formulacion['unidad'],
                'check' => $hasData ? 1 : 0, // Asignar el valor de check
            ]);
        }

        // Obtener los aditivos relacionados a la solicitud de lodo
        $aditivos_lodo = RelAditivosEnsayosLodo::where('solicitud_lodo_id', $request->solicitud_lodo_id)
            ->with('aditivos')  // Cargar la relación con la tabla 'aditivos'
            ->get();

        // Retornar la respuesta JSON con los aditivos y el estado de hasData
        return response()->json([
            'success_aditivos_lodo' => $aditivos_lodo,
            'hasData' => $hasData, // Devolver el estado de hasData
        ]);
    }

    return response()->json(['error' => 'No se enviaron aditivos en la solicitud'], 400);
}

    // Seccion Ensayo de Lodo

    public function store_reologia_lodo(Request $request) {

        $request->validate([
            'tipo_lodo' => 'required',
            'densidad' => 'required',
            'cia_lodo' => 'required',
            'seg_10' => 'required',
            'min_10' => 'required',
            'min_30' => 'required',
            'temp_bhct' => 'required',
            'temp_600_rpm_c' => 'required',
            'temp_300_rpm_c' => 'required',
            'temp_200_rpm_c' => 'required',
            'temp_100_rpm_c' => 'required',
            'temp_60_rpm_c' => 'required',
            'temp_30_rpm_c' => 'required',
            'temp_6_rpm_c' => 'required',
            'temp_3_rpm_c' => 'required',
            'temp_vp' => 'required',
            'temp_yp' => 'required',
        ]);

        $caracterizacion_lodo = RelCaracterizacionLodo::create([
            'tipo_lodo' => $request->tipo_lodo,
            //'base' => $request->base,
            'densidad' => $request->densidad,
            'cia_lodo' => $request->cia_lodo,
            //'tiempo' => $request->tiempo,
            'seg_10' => $request->seg_10,
            'min_10' => $request->min_10,
            'min_30' => $request->min_30,
            'temp_bhct' => $request->temp_bhct,
            'temp_600_rpm_c' => $request->temp_600_rpm_c,
            'temp_300_rpm_c' => $request->temp_300_rpm_c,
            'temp_200_rpm_c' => $request->temp_200_rpm_c,
            'temp_100_rpm_c' => $request->temp_100_rpm_c,
            'temp_60_rpm_c' => $request->temp_60_rpm_c,
            'temp_30_rpm_c' => $request->temp_30_rpm_c,
            'temp_6_rpm_c' => $request->temp_6_rpm_c,
            'temp_3_rpm_c' => $request->temp_3_rpm_c,
            'temp_vp' => $request->temp_vp,
            'temp_yp' => $request->temp_yp,
            'solicitud_lodo_id' => $request->solicitud_lodo_id,
            'usuario_carga' => auth()->user()->id,
        ]);
       
        if ($caracterizacion_lodo->id)
        return response()->json([
        'success_caracterizacion_lodo' => $caracterizacion_lodo,
        // 'success_reologias_lodos' => $reologias_lodos,
        
        ]);
    }

    public function store_compatibilidad(Request $request) {
    $compatibilidad_lodo = RelCompatibilidadLodo::create([
        'vp_1' => $request->vp_1,
        'vp_2' => $request->vp_2,
        'vp_3' => $request->vp_3,
        'vp_4' => $request->vp_4,
        'vp_5' => $request->vp_5,
        'yp_1' => $request->yp_1,
        'yp_2' => $request->yp_2,
        'yp_3' => $request->yp_3,
        'yp_4' => $request->yp_4,
        'yp_5' => $request->yp_5,
        'gel_seg_1' => $request->gel_seg_1,
        'gel_seg_2' => $request->gel_seg_2,
        'gel_seg_3' => $request->gel_seg_3,
        'gel_seg_4' => $request->gel_seg_4,
        'gel_seg_5' => $request->gel_seg_5,
        'gel_min_1' => $request->gel_min_1,
        'gel_min_2' => $request->gel_min_2,
        'gel_min_3' => $request->gel_min_3,
        'gel_min_4' => $request->gel_min_4,
        'gel_min_5' => $request->gel_min_5,
        'solicitud_lodo_id' => $request->solicitud_lodo_id,
        'usuario_carga' => auth()->user()->id,
    ]);

     $reologias_lodos = RelReologiasLodo::create ([
            'temp_600_rpm' => $request->temp_600_rpm,
            'temp_300_rpm' => $request->temp_300_rpm,
            'temp_200_rpm' => $request->temp_200_rpm,
            'temp_100_rpm' => $request->temp_100_rpm,
            'temp_60_rpm' => $request->temp_60_rpm,
            'temp_30_rpm' => $request->temp_30_rpm,
            'temp_6_rpm' => $request->temp_6_rpm,
            'temp_3_rpm' => $request->temp_3_rpm,
            'temp_600_rpm_2' => $request->temp_600_rpm_2,
            'temp_300_rpm_2' => $request->temp_300_rpm_2,
            'temp_200_rpm_2' => $request->temp_200_rpm_2,
            'temp_100_rpm_2' => $request->temp_100_rpm_2,
            'temp_60_rpm_2' => $request->temp_60_rpm_2,
            'temp_30_rpm_2' => $request->temp_30_rpm_2,
            'temp_6_rpm_2' => $request->temp_6_rpm_2,
            'temp_3_rpm_2' => $request->temp_3_rpm_2,
            'temp_600_rpm_3' => $request->temp_600_rpm_3,
            'temp_300_rpm_3' => $request->temp_300_rpm_3,
            'temp_200_rpm_3' => $request->temp_200_rpm_3,
            'temp_100_rpm_3' => $request->temp_100_rpm_3,
            'temp_60_rpm_3' => $request->temp_60_rpm_3,
            'temp_30_rpm_3' => $request->temp_30_rpm_3,
            'temp_6_rpm_3' => $request->temp_6_rpm_3,
            'temp_3_rpm_3' => $request->temp_3_rpm_3,
            'temp_600_rpm_4' => $request->temp_600_rpm_4,
            'temp_300_rpm_4' => $request->temp_300_rpm_4,
            'temp_200_rpm_4' => $request->temp_200_rpm_4,
            'temp_100_rpm_4' => $request->temp_100_rpm_4,
            'temp_60_rpm_4' => $request->temp_60_rpm_4,
            'temp_30_rpm_4' => $request->temp_30_rpm_4,
            'temp_6_rpm_4' => $request->temp_6_rpm_4,
            'temp_3_rpm_4' => $request->temp_3_rpm_4,
            'temp_600_rpm_5' => $request->temp_600_rpm_5,
            'temp_300_rpm_5' => $request->temp_300_rpm_5,
            'temp_200_rpm_5' => $request->temp_200_rpm_5,
            'temp_100_rpm_5' => $request->temp_100_rpm_5,
            'temp_60_rpm_5' => $request->temp_60_rpm_5,
            'temp_30_rpm_5' => $request->temp_30_rpm_5,
            'temp_6_rpm_5' => $request->temp_6_rpm_5,
            'temp_3_rpm_5' => $request->temp_3_rpm_5,
            'reologia_id' => $compatibilidad_lodo->id,
            'solicitud_lodo_id' => $request->solicitud_lodo_id,
            'usuario_carga' => auth()->user()->id, 
        ]);

    // // Guardar los datos de colchon y densidad
    // $colchones = $request->input('colchon');
    // $densidades = $request->input('densidad');
    // $ensayos = [];

    // foreach ($colchones as $key => $colchon) {
    //     $ensayo = RelEnsayoCompatibilidad::create([
    //         'solicitud_lodo_id' => $request->solicitud_lodo_id,
    //         'colchon' => $colchon,
    //         'densidad' => $densidades[$key] ?? null,  // Asegurarse de que densidad esté en el mismo índice
    //     ]);

    //     // Almacenar los datos creados en un array para retornarlos
    //     $ensayos[] = $ensayo;
    // }

    // Incluir los datos de compatibilidad y ensayos en la respuesta
    return response()->json([
        'success_compatibilidad_lodo' => $compatibilidad_lodo,
        'success_reologias_lodos' => $reologias_lodos,
         //'success_ensayos' => $ensayos, Incluir los datos de colchon y densidad
    ]);
}

    // public function store_compatibilidad(Request $request) {
    //     $compatibilidad_lodo = RelCompatibilidadLodo::create([
    //         //modificar las variables vy
    //         'vp_1' => $request->vp_1,
    //         'vp_2' => $request->vp_2,
    //         'vp_3' => $request->vp_3,
    //         'vp_4' => $request->vp_4,
    //         'vp_5' => $request->vp_5,
    //         'yp_1' => $request->yp_1,
    //         'yp_2' => $request->yp_2,
    //         'yp_3' => $request->yp_3,
    //         'yp_4' => $request->yp_4,
    //         'yp_5' => $request->yp_5,
    //         'gel_seg_1' => $request->gel_seg_1,
    //         'gel_seg_2' => $request->gel_seg_2,
    //         'gel_seg_3' => $request->gel_seg_3,
    //         'gel_seg_4' => $request->gel_seg_4,
    //         'gel_seg_5' => $request->gel_seg_5,
    //         'gel_min_1' => $request->gel_min_1,
    //         'gel_min_2' => $request->gel_min_2,
    //         'gel_min_3' => $request->gel_min_3,
    //         'gel_min_4' => $request->gel_min_4,
    //         'gel_min_5' => $request->gel_min_5,
    //         'solicitud_lodo_id' => $request->solicitud_lodo_id,
    //         'usuario_carga' => auth()->user()->id,
    //     ]);

    //     // Guardar los datos de colchon y densidad
    //     $colchones = $request->input('colchon');
    //     $densidades = $request->input('densidad');

    //     foreach ($colchones as $key => $colchon) {
    //         RelEnsayoCompatibilidad::create([
    //             'solicitud_lodo_id' => $request->solicitud_lodo_id,
    //             'colchon' => $colchon,
    //             'densidad' => $densidades[$key] ?? null,  // Asegurarse de que densidad esté en el mismo índice
    //         ]);
    //     }

        
    //     if ($compatibilidad_lodo->id)
    //     return response()->json([
    //     'success_compatibilidad_lodo' => $compatibilidad_lodo,
    //     ]);
    // }

    // public function store_mecanica(Request $request) {

    //     # Insertar adjunto (Si es que hay)
    //     $image = $request->file('file_upload_lodo');

    //     # Nombre y destino
    //     $imageName = time() . '_lodo.' . $image->getClientOriginalExtension();
    //     $destinationPath = public_path('/uploads/ensayos');

    //     # Si no existe la carpeta de destino, la crea y guarda la img
    //     if (!file_exists($destinationPath)) {
    //         mkdir($destinationPath, 0755, true);
    //     }

    //     $img_1 = Image::make($image->getRealPath());

    //     $width = $img_1->width();
    //     $height = $img_1->height();

    //     # Redimensionar si la img es mayor a 1000x1000
    //     if ($width > 1000 || $height > 1000) {
    //         $img_1->resize(1000, 1000, function ($constraint) {
    //             $constraint->aspectRatio();
    //         });
    //     }

    //     $img_1->save($destinationPath . '/' . $imageName);

    //     $mecanica_lodo = RelMecanicaLodo::create([
    //         'tiempo_1' => $request->tiempo_1,
    //         'tiempo_2' => $request->tiempo_2,
    //         'tiempo_3' => $request->tiempo_3,
    //         'tiempo_4' => $request->tiempo_4,
    //         'tiempo_5' => $request->tiempo_5,
    //         'img_1' => $imageName,
    //         'solicitud_lodo_id' => $request->solicitud_lodo_id,
    //         'usuario_carga' => auth()->user()->id,
    //     ]);
    //     if ($mecanica_lodo->id)
    //     return response()->json([
    //     'success_mecanica_lodo' => $mecanica_lodo,
    //     ]);
    // }

   
    public function store_estatica(Request $request) {
        // Validar solo el campo remocion_estatica
        $request->validate([
            'remocion_estatica' => 'required',
        ]);
    
        // Procesar las imágenes solo si están presentes
        $image1 = $request->file('file_upload_lodo_estatica');
        $image2 = $request->file('file_upload_lodo_estatica_2');
    
        // Inicializar nombres de imágenes
        $imageName1 = null;
        $imageName2 = null;
    
        // Asegurarse de que ambos archivos existan antes de procesarlos
        if ($image1) {
            // Procesar imagen 1
            $imageName1 = time() . '_lodo_estatica_1.' . $image1->getClientOriginalExtension();
            $this->processImage($image1, $imageName1);
        }
    
        if ($image2) {
            // Procesar imagen 2
            $imageName2 = time() . '_lodo_estatica_2.' . $image2->getClientOriginalExtension();
            $this->processImage($image2, $imageName2);
        }
    
        // Insertar los datos en la base de datos
        $estatica_lodo = RelEstaticaLodo::create([
            'tiempo_estatica_1' => $request->tiempo_estatica_1,
            'tiempo_estatica_2' => $request->tiempo_estatica_2,
            'tiempo_estatica_3' => $request->tiempo_estatica_3,
            'tiempo_estatica_4' => $request->tiempo_estatica_4,
            'tiempo_estatica_5' => $request->tiempo_estatica_5,
            'remocion_estatica' => $request->remocion_estatica,
            'img_1' => $imageName1,
            'img_2' => $imageName2,
            'solicitud_lodo_id' => $request->solicitud_lodo_id,
            'usuario_carga' => auth()->user()->id,
        ]);
    
        // Guardar los datos de colchon y densidad
        //$this->saveColchonDensidad($request->input('colchon'), $request->input('densidad'), $request->solicitud_lodo_id);
    
        return response()->json([
            'success_estatica_lodo' => $estatica_lodo,
        ]);
    }
    
    // Función para procesar la imagen
    private function processImage($image, $imageName) {
        $destinationPath = public_path('/uploads/ensayos');
    
        // Si no existe la carpeta de destino, la crea
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }
    
        // Procesar y guardar la imagen
        $img = Image::make($image->getRealPath());
        $width = $img->width();
        $height = $img->height();
    
        // Redimensionar si la imagen es mayor a 1000x1000
        if ($width > 1000 || $height > 1000) {
            $img->resize(1000, 1000, function ($constraint) {
                $constraint->aspectRatio();
            });
        }
    
        $img->save($destinationPath . '/' . $imageName);
    }
    
    // Función para guardar colchones y densidades
    // private function saveColchonDensidad($colchones, $densidades, $solicitudId) {
    //     foreach ($colchones as $key => $colchon) {
    //         RelEnsayoEstatica::create([
    //             'solicitud_lodo_id' => $solicitudId,
    //             'colchon' => $colchon,
    //             'densidad' => $densidades[$key] ?? null,
    //         ]);
    //     }
    // }

    public function store_mecanica(Request $request) {

        $request->validate([
            'tiempo_1' => 'required',
            'tiempo_2' => 'required',
            'tiempo_3' => 'required',
            'tiempo_4' => 'required',
            'tiempo_5' => 'required',
            'img_1' => 'required',
            'img_2' => 'required',
        ]);

        # Insertar adjuntos (Si es que hay)
        $image1 = $request->file('file_upload_lodo');
        $image2 = $request->file('file_upload_lodo_2');
    
        # Asegurarse de que ambos archivos existan antes de procesarlos
        if ($image1 && $image2) {
            # Nombres y destinos
            $imageName1 = time() . '_lodo_1.' . $image1->getClientOriginalExtension();
            $imageName2 = time() . '_lodo_2.' . $image2->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/ensayos');
    
            # Si no existe la carpeta de destino, la crea
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
    
            # Procesar ambas imágenes
            $img_1 = Image::make($image1->getRealPath());
            $img_2 = Image::make($image2->getRealPath());
    
            $width1 = $img_1->width();
            $height1 = $img_1->height();
            $width2 = $img_2->width();
            $height2 = $img_2->height();
    
            # Redimensionar si alguna imagen es mayor a 1000x1000
            if ($width1 > 1000 || $height1 > 1000) {
                $img_1->resize(1000, 1000, function ($constraint) {
                    $constraint->aspectRatio();
                });
            }
    
            if ($width2 > 1000 || $height2 > 1000) {
                $img_2->resize(1000, 1000, function ($constraint) {
                    $constraint->aspectRatio();
                });
            }
    
            # Guardar ambas imágenes en el destino
            $img_1->save($destinationPath . '/' . $imageName1);
            $img_2->save($destinationPath . '/' . $imageName2);
    
            # Insertar los datos en la base de datos
            $mecanica_lodo = RelMecanicaLodo::create([
                'tiempo_1' => $request->tiempo_1,
                'tiempo_2' => $request->tiempo_2,
                'tiempo_3' => $request->tiempo_3,
                'tiempo_4' => $request->tiempo_4,
                'tiempo_5' => $request->tiempo_5,
                'img_1' => $imageName1,  // Almacenar el nombre de la primera imagen
                'img_2' => $imageName2,  // Almacenar el nombre de la segunda imagen
                'solicitud_lodo_id' => $request->solicitud_lodo_id,
                'usuario_carga' => auth()->user()->id,
            ]);
            
            // Guardar los datos de colchon y densidad
            // $colchones = $request->input('colchon');
            // $densidades = $request->input('densidad');

            // foreach ($colchones as $key => $colchon) {
            //     RelEnsayoMecanica::create([
            //         'solicitud_lodo_id' => $request->solicitud_lodo_id,
            //         'colchon' => $colchon,
            //         'densidad' => $densidades[$key] ?? null,  // Asegurarse de que densidad esté en el mismo índice
            //     ]);
            // }
    
            if ($mecanica_lodo->id) {
                return response()->json([
                    'success_mecanica_lodo' => $mecanica_lodo,
                ]);
            }
        } else {
            return response()->json([
                'error' => 'Ambas imágenes son requeridas.',
            ], 400);
        }
    }
    
    public function store_humectabilidad (Request $request) {
        $request->validate([
            'check_humectabilidad' => 'required',
            // Otras validaciones pueden ser opcionales si son no requeridas
        ]);

        $humectabilidad_lodo = RelHumectabilidad::create([
            'humectabilidad' => $request->humectabilidad,
            'solicitud_lodo_id' => $request->solicitud_lodo_id,
            'usuario_carga' => auth()->user()->id,
            'check_humectabilidad' => $request->check_humectabilidad,
        ]);
        if ($humectabilidad_lodo->id)
        return response()->json([
        'success_humectabilidad_lodo' => $humectabilidad_lodo,
        ]);
        
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
