<?php

namespace App\Http\Controllers;

use App\Models\Ensayo;
use App\Models\RelAditivosEnsayos;
use App\Models\RelRequerimientosEnsayos;
use Illuminate\Http\Request;

class EnsayoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create() {
        return view('ensayo.create');
    }

    public function index() {
        return view('ensayo.index');
    }

    public function store(Request $request) {
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
        // if ($request->aditivos) {
        //     foreach ($request->aditivos as $aditivo) {
        //         $this->_createRelRequerimiento($aditivo, $ensayo->id);
        //     }
        // }

        return back();


    }

    protected function _createRelAditivo($aditivo, $ensayo_id) {
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

    protected function _createRelRequerimiento($requerimiento, $ensayo_id) {
        RelRequerimientosEnsayos::create([
            'test_id' => $requerimiento['test'],
            'temperatura' => $requerimiento['temperatura'],
            'condicion_id' => $requerimiento['condicion'],
            'planilla' => $requerimiento['planilla'],
            'consistometro' => $requerimiento['consistometro'],
            'tiempo_acondicionamiento' => $requerimiento['tiempo_acondicionamiento'],
            'gradiente' => $requerimiento['gradiente'],
            'temperatura_bombeabilidad' => $requerimiento['temperatura_bombeabilidad'],
            'presion' => $requerimiento['presion'],
            '40_bc' => $requerimiento['40_bc'],
            '70_bc' => $requerimiento['70_bc'],
            '100_bc' => $requerimiento['100_bc'],
            'uca_numero' => $requerimiento['uca_numero'],
            'uca_temperatura' => $requerimiento['uca_temperatura'],
            'uca_50_psi' => $requerimiento['uca_50_psi'],
            'uca_500_psi' => $requerimiento['uca_500_psi'],
            'uca_1000_psi' => $requerimiento['uca_1000_psi'],
            'uca_12_hr' => $requerimiento['uca_12_hr'],
            'uca_24_hr' => $requerimiento['uca_24_hr'],
            'uca_impedancia_acustica' => $requerimiento['uca_impedancia_acustica'],
            'uca_sgc_cero' => $requerimiento['uca_sgc_cero'],
            'uca_sgc_max' => $requerimiento['uca_sgc_max'],
            'uca_tiempo' => $requerimiento['uca_tiempo'],
            'radiologia_temp_amb_rpm' => $requerimiento['radiologia_temp_amb_rpm'],
            'radiologia_temp_amb_300' => $requerimiento['radiologia_temp_amb_300'],
            'radiologia_temp_amb_200' => $requerimiento['radiologia_temp_amb_200'],
            'radiologia_temp_amb_100' => $requerimiento['radiologia_temp_amb_100'],
            'radiologia_temp_amb_60' => $requerimiento['radiologia_temp_amb_60'],
            'radiologia_temp_amb_30' => $requerimiento['radiologia_temp_amb_30'],
            'radiologia_temp_amb_6' => $requerimiento['radiologia_temp_amb_6'],
            'radiologia_temp_amb_3' => $requerimiento['radiologia_temp_amb_3'],
            'radiologia_temp_ens_rpm' => $requerimiento['radiologia_temp_ens_rpm'],
            'radiologia_temp_ens_300' => $requerimiento['radiologia_temp_ens_300'],
            'radiologia_temp_ens_200' => $requerimiento['radiologia_temp_ens_200'],
            'radiologia_temp_ens_100' => $requerimiento['radiologia_temp_ens_100'],
            'radiologia_temp_ens_60' => $requerimiento['radiologia_temp_ens_60'],
            'radiologia_temp_ens_30' => $requerimiento['radiologia_temp_ens_30'],
            'radiologia_temp_ens_6' => $requerimiento['radiologia_temp_ens_6'],
            'radiologia_temp_ens_3' => $requerimiento['radiologia_temp_ens_3'],
            'radiologia_temp_amb' => $requerimiento['radiologia_temp_amb'],
            'radiologia_temp_ens' => $requerimiento['radiologia_temp_ens'],
            'radiologia_temp_amb_cedencia' => $requerimiento['radiologia_temp_amb_cedencia'],
            'radiologia_temp_ens_cedencia' => $requerimiento['radiologia_temp_ens_cedencia'],
            'radiologia_temp_amb_gel_10_seg' => $requerimiento['radiologia_temp_amb_gel_10_seg'],
            'radiologia_temp_ens_gel_10_seg' => $requerimiento['radiologia_temp_ens_gel_10_seg'],
            'radiologia_temp_amb_gel_10_min' => $requerimiento['radiologia_temp_amb_gel_10_min'],
            'radiologia_temp_ens_gel_10_min' => $requerimiento['radiologia_temp_ens_gel_10_min'],
            'perdida_filtrado_temp' => $requerimiento['perdida_filtrado_temp'],
            'perdida_fluido_acumulado' => $requerimiento['perdida_fluido_acumulado'],
            'perdida_filtrado_api' => $requerimiento['perdida_filtrado_api'],
            'perdida_agua_libre' => $requerimiento['perdida_agua_libre'],
            'perdida_volumen' => $requerimiento['perdida_volumen'],
            'perdida_api_agua_libre' => $requerimiento['perdida_api_agua_libre'],
            'mezclabilidad' => $requerimiento['mezclabilidad'],
        ]);
    }
}
