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
            'equipos' => 'required',
        ]);

        Equipos::create([
            'nombre' => $request->equipos,
            'user_id' => auth()->user()->id
        ]);

        return back();
    }

}