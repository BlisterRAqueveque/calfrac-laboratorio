<?php

namespace App\Http\Controllers;

use App\Models\Comentario_Solicitud;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    // public function store($user_id, Request $request) {
    //     $this->validate($request, [
    //         'comentario' => 'required',
    //     ]);

    //     Comentario_Solicitud::create([
    //         'comentario' => $request->comentario,
    //         'usuario_comentario' => $user_id,
    //         'solicitud_id' => $request->solicitud_id,
    //     ]);
    //     return back();
    // }
    // public function update($user_id, Request $request) {
    //     $this->validate($request, [
    //         'respuesta' => 'required',
    //     ]);

    //     $comentario = Comentario_Solicitud::find($request->comentario_id);

    //     $comentario->respuesta = $request->respuesta;
    //     $comentario->usuario_rta = $user_id;
    //     $comentario->fecha_hora_rta = date('Y-m-d H:i:s');
    //     $comentario->save();
    //     return back();
    // }

    public function rta_solicitud_edicion($user_id, Request $request) {
        dd($request);
    }
}
