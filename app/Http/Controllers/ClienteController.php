<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {

        $data = [
            'clientes' => Cliente::paginate(10)
        ];

        return view('cliente.index', $data);
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
