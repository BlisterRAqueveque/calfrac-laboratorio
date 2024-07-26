<?php

namespace App\Http\Controllers;

use App\Models\Aditivo;
use Illuminate\Http\Request;
use Carbon\Carbon;


class AditivoController extends Controller
{
    public function index()
    {
        $data = [
            'aditivos' => Aditivo::all()
        ];
        return view('aditivo.index', $data);
    }

    public function getAditivos(Request $request){
        //Esto es para traer la informacion a mostrar en la datatable
        if ($request->ajax()) {
          
            $aditivos = Aditivo::with('user')->select('*');
    
            //  para la búsqueda:
            if (!empty($request->search['value'])) {
                $aditivos->where('nombre', 'like', '%' . $request->search['value'] . '%');
            }
    
            // Para el ordenamiento:
            if (!empty($request->order)) {
                $orderByColumn = $request->columns[$request->order[0]['column']]['data'];
                $orderByDirection = $request->order[0]['dir'];
                $aditivos->orderBy($orderByColumn, $orderByDirection);
            }
    
            // Paginación
            $recordsTotal = Aditivo::count();
            $aditivos = $aditivos->offset($request->start)
                               ->limit($request->length)
                               ->get();
    
            $data = [];
            foreach ($aditivos as $aditivo) {
                //Formateo la salida que quiero mostrar en la tabla
                $estado = $aditivo->estado == 1 ? 'Activo' : 'Inactivo'; 
                $fecha_creacion = Carbon::parse($aditivo->created_at)->format('d-m-Y');
                $fecha_actualizacion = Carbon::parse($aditivo->updated_at)->format('d-m-Y');
    
                $data[] = [
                    'id' => $aditivo->id,
                    'nombre' => $aditivo->nombre,
                    'usuario' => $aditivo->user->nombre . ' ' . $aditivo->user->apellido, // Concatenar nombre y apellido
                    'estado' => $estado,
                    'created_at' => $fecha_creacion,
                    'updated_at' => $fecha_actualizacion,
                ];
            }
    
            return response()->json([
                'draw' => intval($request->draw),
                'recordsTotal' => $recordsTotal,
                'recordsFiltered' => $recordsTotal, // Puedes ajustar esto para la búsqueda filtrada
                'data' => $data //$aditivos
            ]);
        } else {
            abort(403);
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'aditivo' => 'required|unique:aditivos,nombre',
        ]);

        Aditivo::create([
            'nombre' => $request->aditivo,
            'user_id' => auth()->user()->id
        ]);

        return back();
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'edit_aditivo' => 'required|unique:aditivos,nombre',
        ]);
        $aditivoExistente = Aditivo::find($request->aditivo_id);
        if($aditivoExistente){
            $aditivoExistente->estado = 0;
        }
        
        Aditivo::create([
            'nombre' => $request->edit_aditivo,
            'user_id' => auth()->user()->id
        ]);
        return back();
    }

    public function deshabilitar(Request $request)
    {
        $this->validate($request, [
            'deshabilitar_aditivo' => 'required',
        ]);


        $aditivo = Aditivo::findOrFail($request->aditivo2_id);

        if ($aditivo) {
            $aditivo->estado = 0;
            $aditivo->save();
            return back();
        } else {
            return back()->withError('Aditivo no encontrado con ID: ' . $request->aditivo2_id);
        }
    }

    public function habilitar(Request $request)
    {
        $this->validate($request, [
            'habilitar_aditivo' => 'required',
        ]);


        $aditivo = Aditivo::findOrFail($request->aditivo3_id);

        if ($aditivo) {
            $aditivo->estado = 1;
            $aditivo->save();
            return back();
        } else {
            return back()->withError('Aditivo no encontrado con ID: ' . $request->aditivo3_id);
        }
    }
}
