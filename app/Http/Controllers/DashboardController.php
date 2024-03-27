<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $role = Role::create(['name' => 'user']);
        // $permission = Permission::create(['name' => 'hola_mama']);
        // $role->givePermissionTo($permission);
        // $permission->assignRole($role);
        // $user = User::find(2);
        // $user->givePermissionTo('hola_mama');
        // dd($user);

        return view('dashboard.index');
    }
}
