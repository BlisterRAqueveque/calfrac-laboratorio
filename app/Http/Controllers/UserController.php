<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Grupo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data = [
            'usuarios' => User::all(),
            'grupos' => Grupo::all()
        ];
        return view('user.index', $data);
    }

    /**
     * 
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'apellido' => 'required',
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'grupo' => 'required',
        ]);
        if ($request->imagen_perfil) {
            $imagen = $request->file('imagen_perfil');
            
            // Generar un ID único
            $nombreImagen = Str::uuid() . "." . $imagen->extension();

            // Imagen que se va a almacenar en BD (InterventionImage)
            $imagenServidor = Image::make($imagen);

            // Ajustar la imagen width: 1000px & height: 1000px;
            $imagenServidor->fit(1000, 1000);

            // Ruta de la Imagen
            $imagenPath = public_path('uploads/perfiles') . '/' . $nombreImagen;

            // Guardar la Imagen
            $imagenServidor->save($imagenPath);
        }

        User::create([
            'nombre' => $request->name,
            'apellido' => $request->apellido,
            'username' => $request->username,
            'email' => $request->email,
            'telefono' => $request->telefono && null,
            'img' => isset($nombreImagen) ? $nombreImagen : '',
            'grupo_id' => $request->grupo,
            'password' => Hash::make($request->password),
            'usuario_carga_id' => auth()->user()->id,
        ]);
        return back();
    }

    public function update(Request $request) {

        $this->validate($request, [
            'edit_apellido' => 'required',
            'edit_name' => 'required',
            'edit_username' => ['required', 'unique:users,username,' . $request->user_id],
            'edit_email' => ['required', 'unique:users,email,' . $request->user_id],
            'edit_grupo' => 'required',
        ]);

        if ($request->edit_imagen_perfil) {
            $imagen = $request->file('edit_imagen_perfil');
            
            // Generar un ID único
            $nombreImagen = Str::uuid() . "." . $imagen->extension();

            // Imagen que se va a almacenar en BD (InterventionImage)
            $imagenServidor = Image::make($imagen);

            // Ajustar la imagen width: 1000px & height: 1000px;
            $imagenServidor->fit(1000, 1000);

            // Ruta de la Imagen
            $imagenPath = public_path('uploads/perfiles') . '/' . $nombreImagen;

            // Guardar la Imagen
            $imagenServidor->save($imagenPath);

            // Eliminar imagen anterior (Si es que existe)
        }

        # Guardar cambios
        $user =  User::find($request->user_id);
        $user->apellido = $request->edit_apellido;
        $user->nombre = $request->edit_name;
        $user->username = $request->edit_username;
        $user->email = $request->edit_email;
        $user->telefono = $request->edit_telefono;
        $user->img = isset($nombreImagen) ? $nombreImagen : $user->img;
        $user->password = $request->edit_password ? Hash::make($request->edit_password) : $user->password;
        $user->grupo_id = $request->edit_grupo;
        $user->save();

        return back();

    }
}
