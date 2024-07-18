<?php

namespace App\Http\Controllers;

use App\Models\Yacimiento;
use Illuminate\Http\Request;

class YacimientoController extends Controller
{
    public function index() {
        $data = [
            'yacimientos' => Yacimiento::paginate(10)
        ];
        return view('yacimiento.index', $data);
    }  

    public function store(Request $request) {
        $this->validate($request, [
            'yacimiento' => 'required|unique:yacimientos,nombre',
        ]);

        Yacimiento::create([
            'nombre' => $request->yacimiento,
            'user_id' => auth()->user()->id
        ]);

        return back();
    }

    public function update(Request $request) {
        $this->validate($request, [
            'edit_yacimiento' => 'required',
        ]);
        $yacimiento = Yacimiento::find($request->yacimiento_id);
        $yacimiento->nombre = $request->edit_yacimiento;
        $yacimiento->updated_at = date('Y-m-d H:i:s');
        $yacimiento->save();
        return back();
    }

    public function deshabilitar(Request $request)
    {
        $this->validate($request, [
            'delete_yacimiento' => 'required',
        ]);


        $yacimiento = Yacimiento::findOrFail($request->yacimiento2_id);

        if ($yacimiento) {
            $yacimiento->estado = 0;
            $yacimiento->save();
            return back();
        } else {
            return back()->withError('Yacimiento no encontrado con ID: ' . $request->yacimiento2_id);
        }
    }

    public function habilitar(Request $request)
    {
        $this->validate($request, [
            'habilitar_yacimiento' => 'required',
        ]);


        $yacimiento = Yacimiento::findOrFail($request->yacimiento3_id);

        if ($yacimiento) {
            $yacimiento->estado = 1;
            $yacimiento->save();
            return back();
        } else {
            return back()->withError('Yacimiento no encontrado con ID: ' . $request->yacimiento3_id);
        }
    }
}
