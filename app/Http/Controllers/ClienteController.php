<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {

        $data = [
            'clientes' => Cliente::all()
        ];

        return view('cliente.index', $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'cliente' => 'required',
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
            'edit_cliente' => 'required',
        ]);
        $cliente = Cliente::find($request->cliente_id);
        $cliente->nombre = $request->edit_cliente;
        $cliente->updated_at = date('Y-m-d H:i:s');
        $cliente->save();
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
            return back()->withError('Cliente no encontrado con ID: ' . $request->cliente_id);
        }
    }
}
