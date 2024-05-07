<?php

namespace App\Http\Livewire\Ensayo;

use App\Models\RelReologiaSolicitudEnsayo;
use Livewire\Component;

class Reologia extends Component
{
    public $lechada;
    public $rel_reologia;
    
    public $tem_ambiente_rpm;
    public $tem_ambiente_300;
    public $tem_ambiente_200;
    public $tem_ambiente_100;
    public $tem_ambiente_60;
    public $tem_ambiente_30;
    public $tem_ambiente_6;
    public $tem_ambiente_3;
    public $tem_ensayo_rpm;
    public $tem_ensayo_300;
    public $tem_ensayo_200;
    public $tem_ensayo_100;
    public $tem_ensayo_60;
    public $tem_ensayo_30;
    public $tem_ensayo_6;
    public $tem_ensayo_3;
    public $temp_ambiente;
    public $temp_ensayo;
    public $temp_ambiente_punto_cedencia;
    public $temp_ensayo_punto_cedencia;
    public $temp_ambiente_gel_10_seg;
    public $temp_ensayo_gel_10_seg;
    public $temp_ambiente_gel_10_min;
    public $temp_ensayo_gel_10_min;
    public $solicitud_lechada_id;

    # Data para la asignación
    public $id_assignment;

    /**
     * Almacena la reología junto con el ID de la Solicitud de Lechada como relación
     */
    public function store()
    {
        RelReologiaSolicitudEnsayo::create([
            'tem_ambiente_rpm' => $this->tem_ambiente_rpm,
            'tem_ambiente_300' => $this->tem_ambiente_300,
            'tem_ambiente_200' => $this->tem_ambiente_200,
            'tem_ambiente_100' => $this->tem_ambiente_100,
            'tem_ambiente_60' => $this->tem_ambiente_60,
            'tem_ambiente_30' => $this->tem_ambiente_30,
            'tem_ambiente_6' => $this->tem_ambiente_6,
            'tem_ambiente_3' => $this->tem_ambiente_3,
            'tem_ensayo_rpm' => $this->tem_ensayo_rpm,
            'tem_ensayo_300' => $this->tem_ensayo_300,
            'tem_ensayo_200' => $this->tem_ensayo_200,
            'tem_ensayo_100' => $this->tem_ensayo_100,
            'tem_ensayo_60' => $this->tem_ensayo_60,
            'tem_ensayo_30' => $this->tem_ensayo_30,
            'tem_ensayo_6' => $this->tem_ensayo_6,
            'tem_ensayo_3' => $this->tem_ensayo_3,
            'temp_ambiente' => $this->temp_ambiente,
            'temp_ensayo' => $this->temp_ensayo,
            'temp_ambiente_punto_cedencia' => $this->temp_ambiente_punto_cedencia,
            'temp_ensayo_punto_cedencia' => $this->temp_ensayo_punto_cedencia,
            'temp_ambiente_gel_10_seg' => $this->temp_ambiente_gel_10_seg,
            'temp_ensayo_gel_10_seg' => $this->temp_ensayo_gel_10_seg,
            'temp_ambiente_gel_10_min' => $this->temp_ambiente_gel_10_min,
            'temp_ensayo_gel_10_min' => $this->temp_ensayo_gel_10_min,
            'solicitud_lechada_id' => $this->lechada->id,
            'usuario_carga' => auth()->user()->id,
        ]);
        $this->rel_reologia = RelReologiaSolicitudEnsayo::where('solicitud_lechada_id', $this->lechada->id)->get();
        $this->reset(['tem_ambiente_rpm', 'tem_ambiente_300', 'tem_ambiente_200', 'tem_ambiente_100', 'tem_ambiente_60', 'tem_ambiente_30', 'tem_ambiente_6', 'tem_ambiente_3', 'tem_ensayo_rpm', 'tem_ensayo_300', 'tem_ensayo_200', 'tem_ensayo_100', 'tem_ensayo_60', 'tem_ensayo_30', 'tem_ensayo_6', 'tem_ensayo_3', 'tem_ensayo_rpm', 'temp_ambiente', 'temp_ensayo', 'temp_ambiente_punto_cedencia', 'temp_ensayo_punto_cedencia', 'temp_ambiente_gel_10_seg', 'temp_ensayo_gel_10_seg', 'temp_ambiente_gel_10_min', 'temp_ensayo_gel_10_min']);
    }

    /**
     * Asigna de todas las reologías creadas solamente a una, las demás
     * queda como registro y/o de trazabilidad para la solicitud
     */
    public function assignment() {
        $reologia = RelReologiaSolicitudEnsayo::find($this->id_assignment);
        $reologia->selected = 1;
        $reologia->save();
    }

    public function mount($lechada, $rel_reologia) {
        $this->lechada = $lechada;
        $this->rel_reologia = $rel_reologia;
    }

    public function render()
    {
        return view('livewire.ensayo.reologia', [
            'key' => random_int(PHP_INT_MIN, PHP_INT_MAX),
        ]);
    }
}
