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
            'yacimiento' => 'required',
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
}
