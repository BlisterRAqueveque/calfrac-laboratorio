<?php

namespace App\Http\Controllers;

use App\Models\Equipos;
use Illuminate\Http\Request;

class EquiposController extends Controller
{
    public function index(){
        $data = [
            'equipos' => Equipos::all()
        ];
        return view('equipos.index',$data);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'equipo' => 'required',
        ]);

        Equipos::create([
            'nombre' => $request->equipo,
            'user_id' => auth()->user()->id
        ]);

        return back();
    }

    public function update(Request $request) {
        $this->validate($request, [
            'edit_equipo' => 'required',
        ]);
        $equipo = Equipos::find($request->equipo_id);
        $equipo->nombre = $request->edit_equipo;
        $equipo->updated_at = date('Y-m-d H:i:s');
        $equipo->save();
        return back();
    }

    public function delete(Request $request){
        
    }
}