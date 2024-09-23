<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function store(Request $request)
    {
        // vieja configuracion del log out
        // auth()->logout();
        // return redirect()->route('login');

        // Solucion propuesta 16/09/2024
        // Invalidar sesión actual
    auth()->logout();
    
    // Eliminar sesión y cookies si existen
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    // Redirigir al login
    return redirect()->route('login');
    }
}
