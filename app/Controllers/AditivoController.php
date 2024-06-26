<?php

namespace App\Http\Controllers;

use App\Models\Aditivo;
use Illuminate\Http\Request;

class AditivoController extends Controller
{
    public function index() {
        $data = [
            'aditivos' => Aditivo::all()
        ];
        return view('aditivo.index', $data);
    }  

    public function store(Request $request) {
        $this->validate($request, [
            'aditivo' => 'required',
        ]);

        Aditivo::create([
            'nombre' => $request->aditivo,
            'user_id' => auth()->user()->id
        ]);

        return back();
    }

    public function update(Request $request) {
        $this->validate($request, [
            'edit_aditivo' => 'required',
        ]);
        $aditivo = Aditivo::find($request->aditivo_id);
        $aditivo->nombre = $request->edit_aditivo;
        $aditivo->updated_at = date('Y-m-d H:i:s');
        $aditivo->save();
        return back();
    }
}
