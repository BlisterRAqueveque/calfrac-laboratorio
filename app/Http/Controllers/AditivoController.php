<?php

namespace App\Http\Controllers;

use App\Models\Aditivo;
use Illuminate\Http\Request;

class AditivoController extends Controller
{
    public function index()
    {
        $data = [
            'aditivos' => Aditivo::paginate(10)
        ];
        return view('aditivo.index', $data);
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
