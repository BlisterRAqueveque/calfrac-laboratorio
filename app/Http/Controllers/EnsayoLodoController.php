<?php

namespace App\Http\Controllers;

use App\Models\EnsayosLodo; // Esta no es , hay que ponerle tipo_ensayos_lodo xd crear una que sea ensayosLodo
use App\Models\RelWettabilitySolicitudLodo;
use App\Models\RelRemocionEstaticaSolicitudLodo;
use App\Models\RelRemocionMecanicaSolicitudLodo;
use App\Models\RelCaracterizacionSolicitudLodo;
use App\Models\RelCompatibilidadEspaciadorSolicitudLodo;
use App\Models\RelHumectabilidadSolicitudLodo;
use App\Models\Solicitud;
use App\Models\SolicitudLodo;
use Illuminate\Http\Request;
use Svg\Tag\Rect;

class EnsayoLodoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('ensayoLodo.create');
    }

    public function index()
    {
        $data = [
            'ensayos_lodo' => EnsayosLodo::all()
        ];
        return view('ensayoLodo.index', $data);
    }
    
    public function store(Request $request){
        #validar
        $ensayo_lodo = EnsayosLodo::create([

        ]);
        #crear ensayo

       // if ($ensayo_lodo->id)
            //return back()->with('success', $ensayo_lodo->id);
    }

    public function store_caracterizacion(Request $request){

    }
    
    public function store_compatibilidad(Request $request){
        
    }
    
    public function store_remocion_mecanica(Request $request){
        
    }
    
    public function store_remocion_estatica(Request $request){
        
    }
    
    public function store_humedactibilidad(Request $request){
        
    }
    public function store_wettability(Request $request){
        
    }
}
