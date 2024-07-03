<?php

namespace App\Http\Controllers;

use App\Models\Permisos;
use App\Models\RelPermisosUser;
use App\Models\User;
use Illuminate\Http\Request;

class PermisosController extends Controller
{
    public function index()
    {
        $permisos = Permission::all();

        $data = [
            'permisos' => Permission::all(),
            'roles' => Role::all()
        ];

        return view('permisos.index', $data);
    }

    public function store(Request $request)
    {
        $role = Role::find($request->role);
        $permission = Permission::create(['nombre_destacado' => $request->nombre_destacado, 'name' => $request->permiso, 'guard_name' => 'web']);
        $role->givePermissionTo($permission);
        return back();
    }

    public function user_permission_store(Request $request)
    {
        $remove_permissions = $request->remove_permissions;
        # Eliminar los permisos
        if ($remove_permissions) {
            foreach ($remove_permissions as $r_p) {
                $permiso = RelPermisosUser::where('user_id', $request->user_id)->where('permiso_id', $r_p);
                $permiso->delete();
            }
        }

        $new_permissions = $request->new_permissions;
        # Agregar nuevos permisos
        if ($new_permissions) {
            foreach ($new_permissions as $n_p) {
                $permiso_bd = Permisos::find($n_p);

                RelPermisosUser::create([
                    'user_id' => $request->user_id,
                    'permiso_id' => $n_p,
                    'permiso' => $permiso_bd->permiso
                ]);
            }
        }

        $user = User::find($request->user_id);
        return $user->id;
    }

    public function testing()
    {
        $permiso_bd = Permisos::find(1);
        dd($permiso_bd->permiso);
    }
}
