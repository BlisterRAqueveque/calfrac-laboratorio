<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        if (auth()->user()) {
            return redirect()->route('dashboard');
        }
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!auth()->attempt($request->only('email', 'password'))) {
            return back()->with('mensaje', 'Credenciales Incorrectas');
        }
        
        $user = auth()->user();
        if ($user->estado == 0) {
            auth()->logout();
            return back()->with('mensaje', 'El usuario se encuentra inactivo en el sistema');
        } else {
            return redirect()->route('dashboard');
        }

    }
}
