<?php

namespace App\Http\Controllers;

use App\Models\Credencial;
use Illuminate\Support\Str;
use App\Models\Grupo;
use App\Models\Permisos;
use App\Models\RelPermisosUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Mail;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'usuarios' => User::paginate(8),
            'permisos' => Permisos::all(),
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

        $is_admin = 0;
        if ($request->grupo == 1)
            $is_admin = 1;

        $user = User::create([
            'nombre' => $request->name,
            'apellido' => $request->apellido,
            'username' => $request->username,
            'email' => $request->email,
            'telefono' => $request->telefono && null,
            'img' => isset($nombreImagen) ? $nombreImagen : '',
            'grupo_id' => $request->grupo,
            'is_admin' => $is_admin,
            'password' => Hash::make($request->password),
            'usuario_carga_id' => auth()->user()->id,
        ]);

        if ($request->user_permissions_new) {
            $permisos_id = join(",", $request->user_permissions_new);
            $permisos_separados = explode(',', $permisos_id);
            foreach ($permisos_separados as $p) {
                $permiso = Permisos::find($p);
                RelPermisosUser::create([
                    'user_id' => $user->id,
                    'permiso_id' => $p,
                    'permiso' => $permiso->permiso
                ]);
            }
        }
        return back();
    }

    public function update(Request $request)
    {

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

        $is_admin = 0;
        if ($request->edit_grupo == 1)
            $is_admin = 1;

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
        $user->is_admin = $is_admin;
        $user->save();

        return back();
    }

    /**
     * Cuando se realiza el envío de credenciales
     * Se almacena la fecha en la que se envío y también el fundamento al momento de enviarla.
     */
    public function store_credencial(Request $request)
    {
        Credencial::create([
            'user_id' => $request->user_id_credencial,
            'fundamento' => $request->fundamento,
        ]);
        $user = User::find($request->user_id_credencial);
        $data = [
            'correo' => $request->email_credencial,
            'password' => $request->password_credencial,
            'fundamento' => $request->fundamento
        ];
        $this->_sendEmailCredential($data, $user->email);

        return $user->id;
    
    }

    /**
     * Envía el correo con las credenciales de ingreso
     */
    public function _sendEmailCredential($data, $correo)
    {
        Mail::send('emails.user.credential', ['data' => $data], function ($message) use ($correo, $data) {
            $message->to($correo)
                ->subject('Credenciales de Ingreso | Laboratorio Calfrac');
        });
    }
}
