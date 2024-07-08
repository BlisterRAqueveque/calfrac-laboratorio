<?php

namespace App\Http\Controllers;

use App\Models\Equipos;
use Illuminate\Http\Request;

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
        $this->validate($request, [
            'equipo' => 'required',
        ]);

        Equipos::create([
            'nombre' => $request->equipo,
            'user_id' => auth()->user()->id
        ]);

        return back();
    }
    //Borrar columna de ultima edicion en la view
    public function update(Request $request)
    {

        $this->validate($request, [
            'edit_equipo' => 'required',
        ]);
        $equipo = Equipos::find($request->equipo_id);
        $equipo->nombre = $request->edit_equipo;
        $equipo->updated_at = date('Y-m-d H:i:s');
        $equipo->save();
        return back();
    }

    public function editar(Request $request)
    {
        /*Cuando el usuario edita un equipo, se crea una nueva version
        Para mantener las versiones viejas en las solicitudes viejas*/
        $this->validate($request, [
            'equipo' => 'required',
        ]);

        //deshabilitar el otro
        
        $equipoExistente = Equipos::find($request->id);
        //$versionActual = $equipoExistente->version;

        //Al editar, deshabilito el que "edite".
        $equipoExistente->estado = 0;

        //Creo un nuevo equipo, con la version actualizada
        Equipos::create([
            'nombre' => $request->equipo,
            'user_id' => auth()->user()->id
            //'version' => $versionActual + 1,
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
            'delete_equipo' => 'required',
        ]);
        //Check ids y labels

        $equipo = Equipos::findOrFail($request->equipo2_id);

        if ($equipo) {
            $equipo->estado = 1;
            $equipo->save();
            return back();
        } else {
            return back()->withError('Equipo no encontrado con ID: ' . $request->equipo_id);
        }
    }
}
