<?php

namespace App\Http\Controllers;

use App\Models\Equipos;
use Illuminate\Http\Request;
use Validator;

class EquiposController extends Controller
{
    public function index()
    {
        $data = [
            //Deberia traer con el metodo getLastVersion()
            'equipos' => Equipos::paginate(10)
        ];
        return view('equipos.index', $data);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
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
            'edit_equipo' => 'required',
        ]);

        //Deshabilito el equipo a editar
        $equipoExistente = Equipos::find($request->equipo_id);
        if($equipoExistente){
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
            'nombre_equipo' => 'required|unique:equipos,nombre'
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
