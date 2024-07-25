<?php

namespace App\Http\Controllers;

use App\Models\Equipos;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use PhpParser\Node\Expr\BinaryOp\Equal;
use \Yajra\DataTables\DataTables;
use Validator;
use Carbon\Carbon;

class EquiposController extends Controller
{
    public function index()
    {
        $data = [
            'equipos' => Equipos::all()
        ];
      
        return view('equipos.index', $data);
    }

   public function getEquipos(Request $request)
{
    if ($request->ajax()) {
        //$equipos = Equipos::select('*');
        $equipos = Equipos::with('user')->select('*');

        //  para la búsqueda:
        if (!empty($request->search['value'])) {
            $equipos->where('nombre', 'like', '%' . $request->search['value'] . '%');
        }

        // Para el ordenamiento:
        if (!empty($request->order)) {
            $orderByColumn = $request->columns[$request->order[0]['column']]['data'];
            $orderByDirection = $request->order[0]['dir'];
            $equipos->orderBy($orderByColumn, $orderByDirection);
        }

        // Paginación
        $recordsTotal = Equipos::count();
        $equipos = $equipos->offset($request->start)
                           ->limit($request->length)
                           ->get();

        $data = [];
        foreach ($equipos as $equipo) {
            //Formateo la salida que quiero mostrar en la tabla
            $estado = $equipo->estado == 1 ? 'Activo' : 'Inactivo'; 
            $fecha_creacion = Carbon::parse($equipo->created_at)->format('d-m-Y');
            $fecha_actualizacion = Carbon::parse($equipo->updated_at)->format('d-m-Y');

            $data[] = [
                'id' => $equipo->id,
                'nombre' => $equipo->nombre,
                'usuario' => $equipo->user->nombre . ' ' . $equipo->user->apellido, // Concatenar nombre y apellido
                'estado' => $estado,
                'created_at' => $fecha_creacion,
                'updated_at' => $fecha_actualizacion,
            ];
        }

        return response()->json([
            'draw' => intval($request->draw),
            'recordsTotal' => $recordsTotal,
            'recordsFiltered' => $recordsTotal, // Puedes ajustar esto para la búsqueda filtrada
            'data' => $data //$equipos
        ]);
    } else {
        abort(403);
    }
}

    public function store(Request $request)
    {
        $this->validate($request, [
            'equipo' => 'required|unique:equipos,nombre', //Esto valida que "equipo" no se repita en la tabla equipos, columna nombre
        ]);

        Equipos::create([
            'nombre' => $request->equipo,
            'user_id' => auth()->user()->id
        ]);

        return back();
    }
    public function update(Request $request)
    {

        $this->validate($request, [
            'edit_equipo' => 'required|unique:equipos,nombre',
        ]);

        //Deshabilito el equipo a editar
        $equipoExistente = Equipos::find($request->equipo_id);
        if ($equipoExistente) {
            $equipoExistente->estado = 0;
        }

        //Creo un nuevo equipo
        Equipos::create([
            'nombre' => $request->edit_equipo,
            'user_id' => auth()->user()->id
        ]);

        return back();
    }

    public function deshabilitar(Request $request)
    {
        $this->validate($request, [
            'delete_equipo' => 'required',
        ]);

        $equipo = Equipos::findOrFail($request->equipo2_id);

        if ($equipo) {
            $equipo->estado = 0;
            $equipo->save();
            return back();
        } else {
            return back()->withError('Equipo no encontrado con ID: ' . $request->equipo_id);
        }
    }

    public function habilitar(Request $request)
    {
        $this->validate($request, [
            'habilitar_equipo' => 'required',
        ]);

        $equipo = Equipos::findOrFail($request->equipo3_id);

        if ($equipo) {
            $equipo->estado = 1;
            $equipo->save();
            return back();
        } else {
            return back()->withError('Equipo no encontrado con ID: ' . $request->equipo3_id);
        }
    }
 
}
