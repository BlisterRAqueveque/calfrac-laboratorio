<?php

namespace App\Http\Controllers;

use App\Models\Yacimiento;
use Illuminate\Http\Request;
use Carbon\Carbon;

class YacimientoController extends Controller
{
    public function index() {
        $data = [
            'yacimientos' => Yacimiento::paginate(10)
        ];
        return view('yacimiento.index', $data);
    }  

    public function getYacimiento(Request $request){
  //Esto es para traer la informacion a mostrar en la datatable

    if ($request->ajax()) {
       
        $yacimientos = Yacimiento::with('user')->select('*');

        //  para la búsqueda:
        if (!empty($request->search['value'])) {
            $yacimientos->where('nombre', 'like', '%' . $request->search['value'] . '%');
        }

        // Para el ordenamiento:
        if (!empty($request->order)) {
            $orderByColumn = $request->columns[$request->order[0]['column']]['data'];
            $orderByDirection = $request->order[0]['dir'];
            $yacimientos->orderBy($orderByColumn, $orderByDirection);
        }

        // Paginación
        $recordsTotal = Yacimiento::count();
        $yacimientos = $yacimientos->offset($request->start)
                           ->limit($request->length)
                           ->get();

        $data = [];
        foreach ($yacimientos as $yacimiento) {
            //Formateo la salida que quiero mostrar en la tabla
            $estado = $yacimiento->estado == 1 ? 'Activo' : 'Inactivo'; 
            $fecha_creacion = Carbon::parse($yacimiento->created_at)->format('d-m-Y');
            $fecha_actualizacion = Carbon::parse($yacimiento->updated_at)->format('d-m-Y');

            $data[] = [
                'id' => $yacimiento->id,
                'nombre' => $yacimiento->nombre,
                'usuario' => $yacimiento->user->nombre . ' ' . $yacimiento->user->apellido, // Concatenar nombre y apellido
                'estado' => $estado,
                'created_at' => $fecha_creacion,
                'updated_at' => $fecha_actualizacion,
            ];
        }

        return response()->json([
            'draw' => intval($request->draw),
            'recordsTotal' => $recordsTotal,
            'recordsFiltered' => $recordsTotal, // Puedes ajustar esto para la búsqueda filtrada
            'data' => $data 
        ]);
    } else {
        abort(403);
    }
    }

    public function store(Request $request) {
        $this->validate($request, [
            'yacimiento' => 'required|unique:yacimientos,nombre',
        ]);

        Yacimiento::create([
            'nombre' => $request->yacimiento,
            'user_id' => auth()->user()->id
        ]);

        return back();
    }

    public function update(Request $request) {
        $this->validate($request, [
            'edit_yacimiento' => 'required|unique:yacimientos,nombre',
        ]);

        //Deshabilito el yacimiento a editar
        $yacimientoExistente = Yacimiento::find($request->yacimiento_id);
        if($yacimientoExistente){
            $yacimientoExistente->estado = 0;
        }

        Yacimiento::create([
            'nombre'=>$request->edit_yacimiento,
            'user_id'=>auth()->user()->id,
        ]);
       
        return back();
    }

    public function deshabilitar(Request $request)
    {
        $this->validate($request, [
            'delete_yacimiento' => 'required',
        ]);


        $yacimiento = Yacimiento::findOrFail($request->yacimiento2_id);

        if ($yacimiento) {
            $yacimiento->estado = 0;
            $yacimiento->save();
            return back();
        } else {
            return back()->withError('Yacimiento no encontrado con ID: ' . $request->yacimiento2_id);
        }
    }

    public function habilitar(Request $request)
    {
        $this->validate($request, [
            'habilitar_yacimiento' => 'required',
        ]);


        $yacimiento = Yacimiento::findOrFail($request->yacimiento3_id);

        if ($yacimiento) {
            $yacimiento->estado = 1;
            $yacimiento->save();
            return back();
        } else {
            return back()->withError('Yacimiento no encontrado con ID: ' . $request->yacimiento3_id);
        }
    }
}
