<?php

namespace App\Http\Livewire\Ensayo;

use App\Models\RelPerdidaSolicitudEnsayo;
use Livewire\Component;

class Perdida extends Component
{
    // public $perdida;
    public $lechada;
    public $rel_perdida_filtrado;

    public $perdida_temperatura;
    public $perdida_fluido_acumulado;
    public $perdida_filtrado_api;


    public function store()
    {
        RelPerdidaSolicitudEnsayo::create([
            'temperatura' => $this->perdida_temperatura,
            'fluido_acumulado' => $this->perdida_fluido_acumulado,
            'filtrado_api' => $this->perdida_filtrado_api,
            'solicitud_lechada_id' => $this->lechada->id,
            'usuario_carga' => auth()->user()->id,
        ]);
    }

    public function render()
    {
        return view('livewire.ensayo.perdida', [
            'key' => random_int(PHP_INT_MIN, PHP_INT_MAX),
        ]);
    }
    
    public function mount($lechada, $rel_perdida_filtrado)
    {
        $this->lechada = $lechada;
        $this->rel_perdida_filtrado = $rel_perdida_filtrado;
    }
}
