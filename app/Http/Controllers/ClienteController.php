<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Carbon\Carbon;


class ClienteController extends Controller
{
    public function index()
    {

        $data = [
            'clientes' => Cliente::paginate(10)
        ];

        return view('cliente.index', $data);
    }
    public function getClientes(Request $request){
        //Esto es para traer la informacion a mostrar en la datatable

    if ($request->ajax()) {
        //$equipos = Equipos::select('*');
        $clientes = Cliente::with('user')->select('*');

        //  para la búsqueda:
        if (!empty($request->search['value'])) {
            $clientes->where('nombre', 'like', '%' . $request->search['value'] . '%');
        }

        // Para el ordenamiento:
        if (!empty($request->order)) {
            $orderByColumn = $request->columns[$request->order[0]['column']]['data'];
            $orderByDirection = $request->order[0]['dir'];
            $clientes->orderBy($orderByColumn, $orderByDirection);
        }

        // Paginación
        $recordsTotal = Cliente::count();
        $clientes = $clientes->offset($request->start)
                           ->limit($request->length)
                           ->get();

        $data = [];
        foreach ($clientes as $cliente) {
            //Formateo la salida que quiero mostrar en la tabla
            $estado = $cliente->estado == 1 ? 'Activo' : 'Inactivo'; 
            $fecha_creacion = Carbon::parse($cliente->created_at)->format('d-m-Y');
            $fecha_actualizacion = Carbon::parse($cliente->updated_at)->format('d-m-Y');

            $data[] = [
                'id' => $cliente->id,
                'nombre' => $cliente->nombre,
                'usuario' => $cliente->user->nombre . ' ' . $cliente->user->apellido, // Concatenar nombre y apellido
                'estado' => $estado,
                'created_at' => $fecha_creacion,
                'updated_at' => $fecha_actualizacion,
            ];
        }

        return response()->json([
            'draw' => intval($request->draw),
            'recordsTotal' => $recordsTotal,
            'recordsFiltered' => $recordsTotal, // Puedes ajustar esto para la búsqueda filtrada
            'data' => $data //$clientes
        ]);
    } else {
        abort(403);
    }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'cliente' => 'required|unique:clientes,nombre',
        ]);

        Cliente::create([
            'nombre' => $request->cliente,
            'user_id' => auth()->user()->id
        ]);

        return back();
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'edit_cliente' => 'required|unique:clientes,nombre',
        ]);

        $clienteExistente = Cliente::find($request->cliente_id);
        if($clienteExistente){
            $clienteExistente->estado = 0;
        }

        Cliente::create([
            'nombre' => $request->edit_cliente,
            'user_id' => auth()->user()->id
        ]);

        return back();
    }

    public function deshabilitar(Request $request)
    {
        $this->validate($request, [
            'deshabilitar_cliente' => 'required',
        ]);


        $cliente = Cliente::findOrFail($request->cliente2_id);

        if ($cliente) {
            $cliente->estado = 0;
            $cliente->save();
            return back();
        } else {
            return back()->withError('Cliente no encontrado con ID: ' . $request->cliente2_id);
        }
    }

    public function habilitar(Request $request)
    {
        $this->validate($request, [
            'habilitar_cliente' => 'required',
        ]);


        $cliente = Cliente::findOrFail($request->cliente3_id);

        if ($cliente) {
            $cliente->estado = 1;
            $cliente->save();
            return back();
        } else {
            return back()->withError('Cliente no encontrado con ID: ' . $request->cliente3_id);
        }
    }
}
