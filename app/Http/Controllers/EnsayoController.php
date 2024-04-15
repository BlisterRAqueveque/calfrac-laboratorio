<?php

namespace App\Http\Controllers;

use App\Models\Ensayo;
use App\Models\RelAditivosEnsayos;
use App\Models\RelReologiaSolicitudEnsayo;
use App\Models\RelRequerimientosEnsayos;
use App\Models\Solicitud;
use Illuminate\Http\Request;

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

        switch ($request->type_of_assignment) {
            case 'reologia':
                $rel = RelReologiaSolicitudEnsayo::find($request->id_assignment);
                $rel->selected = 1;
                $rel->save();
                break;
        }

        if ($rel->id)
            return back()->with('success', $rel->id);
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
            'temp_ambiente' => $request->temp_ambiente,
            'temp_ensayo' => $request->temp_ensayo,
            'temp_ambiente_punto_cedencia' => $request->temp_ambiente_punto_cedencia,
            'temp_ensayo_punto_cedencia' => $request->temp_ensayo_punto_cedencia,
            'temp_ambiente_gel_10_seg' => $request->temp_ambiente_gel_10_seg,
            'temp_ensayo_gel_10_seg' => $request->temp_ensayo_gel_10_seg,
            'temp_ambiente_gel_10_min' => $request->temp_ambiente_gel_10_min,
            'temp_ensayo_gel_10_min' => $request->temp_ensayo_gel_10_min,
            'solicitud_lechada_id' => $request->solicitud_lechada_id,
            'usuario_carga' => auth()->user()->id,
        ]);

        if ($reologia->id)
            return back()->with('success_reologia', $reologia->id);
    }
}
