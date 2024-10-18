<?php

namespace App\Http\Controllers;

use App\Mail\SolicitudLechadaPdfMail;
use App\Models\Aditivo;
use App\Models\AgenteSosten;
use App\Models\AnalisisMicrobial;
use App\Models\Cliente;
use App\Models\OtrosAnalisis;
use App\Models\RelEnsayoReferenciaSolicitud;
use App\Models\SistemasFluidos;
use App\Models\Solicitud;
use App\Models\SolicitudLechada;
use App\Models\TipoCementacion;
use App\Models\TipoRequerimientoCemento;
use App\Models\TipoTrabajoCemento;
use App\Models\TipoLodo;
use App\Models\User;
use App\Models\CalculosReologias;
// Modelos para PDF Lodo
use App\Models\SolicitudLodo;
use App\Models\MudCompany;
use App\Models\TipoLodo_Lodos;
use App\Models\EnsayosLodo;
// Models para PDF Fractura
use App\Models\SolicitudFractura;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\VarDumper\VarDumper;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Funciones para hacer los calculos de Viscosidad y Cedencia con lo obtenido en Reologias
    //---------------------------------------------------------------------------------------
    // Función para calcular la pendiente
    private function calcularPendiente($x, $y)
    {
        $n = count($x);
        $sumX = array_sum($x);
        $sumY = array_sum($y);
        $sumXY = 0;
        $sumX2 = 0;

        for ($i = 0; $i < $n; $i++) {
            $sumXY += $x[$i] * $y[$i]; // Suma de X * Y
            $sumX2 += $x[$i] * $x[$i]; // Suma de X^2
        }

        // Fórmula de la pendiente
        $pendiente = ($n * $sumXY - $sumX * $sumY) / ($n * $sumX2 - $sumX * $sumX);

        return $pendiente;
    }

    // Función para calcular la intersección
    private function calcularInterseccion($x, $y, $pendiente)
    {
        $promX = array_sum($x) / count($x);
        $promY = array_sum($y) / count($y);

        return $promY - $pendiente * $promX;
    }

    private function redondearHaciaArriba($numero)
    {
        return ceil($numero * 100) / 100;
    }

    public function pdf_report_lechada($solicitud_id, Request $request)
    {
        // Charts de Reologias
        $chartImage1 = $request->chartImage1;
        $chartImage2 = $request->chartImage2;

        // Encuentra el registro de SolicitudLechada correspondiente al solicitud_id
        $solicitudLechada = SolicitudLechada::where('solicitud_id', $solicitud_id)->first();
        $solicitudLechadaId = $solicitudLechada ? $solicitudLechada->id : null; // Verifica si se encontró

        $calculos_reologias = CalculosReologias::where('solicitud_id', $solicitudLechadaId)->get();

        $arregloPromAmb = [
            $calculos_reologias[0]->tem_ambiente_300_promedio,
            $calculos_reologias[0]->tem_ambiente_200_promedio,
            $calculos_reologias[0]->tem_ambiente_100_promedio,
            $calculos_reologias[0]->tem_ambiente_60_promedio,
            $calculos_reologias[0]->tem_ambiente_30_promedio,
            $calculos_reologias[0]->tem_ambiente_6_promedio,
            $calculos_reologias[0]->tem_ambiente_3_promedio,
        ];

        $arregloRPM = [300, 200, 100, 60, 30, 6, 3];

        // Cálculo de pendiente (m) e intersección (intercept)
        $pendiente1 = $this->calcularPendiente($arregloRPM, $arregloPromAmb);
        $interseccion1 = $this->calcularInterseccion($arregloRPM, $arregloPromAmb, $pendiente1);

        $arregloPromEns = [
            $calculos_reologias[0]->tem_ensayo_300_promedio,
            $calculos_reologias[0]->tem_ensayo_200_promedio,
            $calculos_reologias[0]->tem_ensayo_100_promedio,
            $calculos_reologias[0]->tem_ensayo_60_promedio,
            $calculos_reologias[0]->tem_ensayo_30_promedio,
            $calculos_reologias[0]->tem_ensayo_6_promedio,
            $calculos_reologias[0]->tem_ensayo_3_promedio,
        ];

        $pendiente2 = $this->calcularPendiente($arregloRPM, $arregloPromEns);
        $interseccion2 = $this->calcularInterseccion($arregloRPM, $arregloPromEns, $pendiente2);

        // Cálculos Reologías (Viscosidad y Cedencia)
        $viscosidadPlastica1Aux = $pendiente1 * 1.065 / 1.705 / 0.002089;
        $viscosidadPlastica1 = $this->redondearHaciaArriba($viscosidadPlastica1Aux);
        $puntoCedencia1 = $interseccion1 * 1.065;
        $viscosidadPlastica2Aux = $pendiente2 * 1.065 / 1.705 / 0.002089;
        $viscosidadPlastica2 = $this->redondearHaciaArriba($viscosidadPlastica2Aux);
        $puntoCedencia2 = $interseccion2 * 1.065;

        // Modifica los arreglos para calcular cedencia excluyendo los valores de RPM 6 y 3
        $arregloRPM_Cedencia = [300, 200, 100, 60, 30]; // Excluye 6 y 3
        $arregloPromAmb_Cedencia = [
            $calculos_reologias[0]->tem_ambiente_300_promedio,
            $calculos_reologias[0]->tem_ambiente_200_promedio,
            $calculos_reologias[0]->tem_ambiente_100_promedio,
            $calculos_reologias[0]->tem_ambiente_60_promedio,
            $calculos_reologias[0]->tem_ambiente_30_promedio,
        ];

        // Calcula pendiente e intersección solo para los valores filtrados (cedencia)
        $pendiente1_Cedencia = $this->calcularPendiente($arregloRPM_Cedencia, $arregloPromAmb_Cedencia);
        $interseccion1_Cedencia = $this->calcularInterseccion($arregloRPM_Cedencia, $arregloPromAmb_Cedencia, $pendiente1_Cedencia);

        // Lo mismo para la temperatura de ensayo
        $arregloPromEns_Cedencia = [
            $calculos_reologias[0]->tem_ensayo_300_promedio,
            $calculos_reologias[0]->tem_ensayo_200_promedio,
            $calculos_reologias[0]->tem_ensayo_100_promedio,
            $calculos_reologias[0]->tem_ensayo_60_promedio,
            $calculos_reologias[0]->tem_ensayo_30_promedio,
        ];

        $pendiente2_Cedencia = $this->calcularPendiente($arregloRPM_Cedencia, $arregloPromEns_Cedencia);
        $interseccion2_Cedencia = $this->calcularInterseccion($arregloRPM_Cedencia, $arregloPromEns_Cedencia, $pendiente2_Cedencia);

        // Cálculos de cedencia (excluyendo 6 y 3)
        $puntoCedencia1Aux = $interseccion1_Cedencia * 1.065;
        $puntoCedencia2Aux = $interseccion2_Cedencia * 1.065;

        $puntoCedencia1 = $this->redondearHaciaArriba($puntoCedencia1Aux);
        $puntoCedencia2 = $this->redondearHaciaArriba($puntoCedencia2Aux);

        $data = [
            'solicitud' => Solicitud::find($solicitud_id),
            'ensayos_referencia' => RelEnsayoReferenciaSolicitud::where('solicitud_id', $solicitud_id)->get(),
            's_l' => SolicitudLechada::where('solicitud_id', $solicitud_id)->get(),
            'sistemas_fluidos' => SistemasFluidos::all(),
            'analisis_microbial' => AnalisisMicrobial::all(),
            'agente_sosten' => AgenteSosten::all(),
            'otros_analisis' => OtrosAnalisis::all(),
            'aditivos' => Aditivo::all(),
            'users' => User::all(),
            'clientes' => Cliente::all(),
            'tipo_requerimiento_cemento' => TipoRequerimientoCemento::all(),
            'tipo_trabajos' => TipoTrabajoCemento::all(),
            'tipo_cementacion' => TipoCementacion::all(),
            //'calculos_reologias' => CalculosReologias::where('solicitud_id', $solicitud_id)->get(),
            'calculos_reologias' => $calculos_reologias,
            'names_ingenieros' => User::whereIn('users.grupo_id', [3, 4])->get('users.*'),
            'chartImage1' => $chartImage1,
            'chartImage2' => $chartImage2,
            'viscosidad_plastica_1' => $viscosidadPlastica1,
            'punto_cedencia_1' => $puntoCedencia1,
            'viscosidad_plastica_2' => $viscosidadPlastica2,
            'punto_cedencia_2' => $puntoCedencia2
        ];

        // Lógica para obtener los nombres de los botones seleccionados
        $ensayos = [];
        if ($data['s_l'][0]->ensayo_requerido_principal == 1) {
            $ensayos[] = 'Principal';
        }
        if ($data['s_l'][0]->ensayo_requerido_bullheading == 1) {
            $ensayos[] = 'Bullheading';
        }
        if ($data['s_l'][0]->ensayo_requerido_tapon == 1) {
            $ensayos[] = 'Tapón';
        }
        if ($data['s_l'][0]->ensayo_requerido_relleno == 1) {
            $ensayos[] = 'Relleno';
        }

        $data['ensayos_seleccionados'] = implode(', ', $ensayos);

        // Generar PDF
        $pdf = PDF::loadView('solicitud_pdf', $data);

        // Retornar el PDF
        return $pdf->stream();
    }

    public function pdf_send_report_lechada($solicitud_id, Request $request)
    {
        // return response()->json(['success_pdf' => $request->destinatario]);
        // Charts de Reologias
        $chartImage1 = $request->chart_image_1;
        $chartImage2 = $request->chart_image_2;
        // Encuentra el registro de SolicitudLechada correspondiente al solicitud_id
        $solicitudLechada = SolicitudLechada::where('solicitud_id', $solicitud_id)->first();
        $solicitudLechadaId = $solicitudLechada ? $solicitudLechada->id : null; // Verifica si se encontró

        $calculos_reologias = CalculosReologias::where('solicitud_id', $solicitudLechadaId)->get();

        $arregloPromAmb = [
            $calculos_reologias[0]->tem_ambiente_300_promedio,
            $calculos_reologias[0]->tem_ambiente_200_promedio,
            $calculos_reologias[0]->tem_ambiente_100_promedio,
            $calculos_reologias[0]->tem_ambiente_60_promedio,
            $calculos_reologias[0]->tem_ambiente_30_promedio,
            $calculos_reologias[0]->tem_ambiente_6_promedio,
            $calculos_reologias[0]->tem_ambiente_3_promedio,
        ];

        $arregloRPM = [300, 200, 100, 60, 30, 6, 3];

        // Cálculo de pendiente (m) e intersección (intercept)
        $pendiente1 = $this->calcularPendiente($arregloRPM, $arregloPromAmb);
        $interseccion1 = $this->calcularInterseccion($arregloRPM, $arregloPromAmb, $pendiente1);

        $arregloPromEns = [
            $calculos_reologias[0]->tem_ensayo_300_promedio,
            $calculos_reologias[0]->tem_ensayo_200_promedio,
            $calculos_reologias[0]->tem_ensayo_100_promedio,
            $calculos_reologias[0]->tem_ensayo_60_promedio,
            $calculos_reologias[0]->tem_ensayo_30_promedio,
            $calculos_reologias[0]->tem_ensayo_6_promedio,
            $calculos_reologias[0]->tem_ensayo_3_promedio,
        ];

        $pendiente2 = $this->calcularPendiente($arregloRPM, $arregloPromEns);
        $interseccion2 = $this->calcularInterseccion($arregloRPM, $arregloPromEns, $pendiente2);

        // Cálculos Reologías (Viscosidad y Cedencia)
        $viscosidadPlastica1Aux = $pendiente1 * 1.065 / 1.705 / 0.002089;
        $viscosidadPlastica1 = $this->redondearHaciaArriba($viscosidadPlastica1Aux);
        $puntoCedencia1 = $interseccion1 * 1.065;
        $viscosidadPlastica2Aux = $pendiente2 * 1.065 / 1.705 / 0.002089;
        $viscosidadPlastica2 = $this->redondearHaciaArriba($viscosidadPlastica2Aux);
        $puntoCedencia2 = $interseccion2 * 1.065;

        // Modifica los arreglos para calcular cedencia excluyendo los valores de RPM 6 y 3
        $arregloRPM_Cedencia = [300, 200, 100, 60, 30]; // Excluye 6 y 3
        $arregloPromAmb_Cedencia = [
            $calculos_reologias[0]->tem_ambiente_300_promedio,
            $calculos_reologias[0]->tem_ambiente_200_promedio,
            $calculos_reologias[0]->tem_ambiente_100_promedio,
            $calculos_reologias[0]->tem_ambiente_60_promedio,
            $calculos_reologias[0]->tem_ambiente_30_promedio,
        ];

        // Calcula pendiente e intersección solo para los valores filtrados (cedencia)
        $pendiente1_Cedencia = $this->calcularPendiente($arregloRPM_Cedencia, $arregloPromAmb_Cedencia);
        $interseccion1_Cedencia = $this->calcularInterseccion($arregloRPM_Cedencia, $arregloPromAmb_Cedencia, $pendiente1_Cedencia);

        // Lo mismo para la temperatura de ensayo
        $arregloPromEns_Cedencia = [
            $calculos_reologias[0]->tem_ensayo_300_promedio,
            $calculos_reologias[0]->tem_ensayo_200_promedio,
            $calculos_reologias[0]->tem_ensayo_100_promedio,
            $calculos_reologias[0]->tem_ensayo_60_promedio,
            $calculos_reologias[0]->tem_ensayo_30_promedio,
        ];

        $pendiente2_Cedencia = $this->calcularPendiente($arregloRPM_Cedencia, $arregloPromEns_Cedencia);
        $interseccion2_Cedencia = $this->calcularInterseccion($arregloRPM_Cedencia, $arregloPromEns_Cedencia, $pendiente2_Cedencia);

        // Cálculos de cedencia (excluyendo 6 y 3)
        $puntoCedencia1Aux = $interseccion1_Cedencia * 1.065;
        $puntoCedencia2Aux = $interseccion2_Cedencia * 1.065;

        $puntoCedencia1 = $this->redondearHaciaArriba($puntoCedencia1Aux);
        $puntoCedencia2 = $this->redondearHaciaArriba($puntoCedencia2Aux);


        $destinatario = $request->destinatario;

        $data = [
            'solicitud' => Solicitud::find($solicitud_id),
            'ensayos_referencia' => RelEnsayoReferenciaSolicitud::where('solicitud_id', $solicitud_id)->get(),
            's_l' => SolicitudLechada::where('solicitud_id', $solicitud_id)->get(),
            'sistemas_fluidos' => SistemasFluidos::all(),
            'analisis_microbial' => AnalisisMicrobial::all(),
            'agente_sosten' => AgenteSosten::all(),
            'otros_analisis' => OtrosAnalisis::all(),
            'aditivos' => Aditivo::all(),
            'users' => User::all(),
            'clientes' => Cliente::all(),
            'tipo_requerimiento_cemento' => TipoRequerimientoCemento::all(),
            'tipo_trabajos' => TipoTrabajoCemento::all(),
            'tipo_cementacion' => TipoCementacion::all(),
            //'calculos_reologias' => CalculosReologias::where('solicitud_id', $solicitud_id)->get(),
            'calculos_reologias' => $calculos_reologias,
            'names_ingenieros' => User::whereIn('users.grupo_id', [3, 4])->get('users.*'),
            'chartImage1' => $chartImage1,
            'chartImage2' => $chartImage2,
            'viscosidad_plastica_1' => $viscosidadPlastica1,
            'punto_cedencia_1' => $puntoCedencia1,
            'viscosidad_plastica_2' => $viscosidadPlastica2,
            'punto_cedencia_2' => $puntoCedencia2
        ];

        // Lógica para obtener los nombres de los botones seleccionados
        $ensayos = [];
        if ($data['s_l'][0]->ensayo_requerido_principal == 1) {
            $ensayos[] = 'Principal';
        }
        if ($data['s_l'][0]->ensayo_requerido_bullheading == 1) {
            $ensayos[] = 'Bullheading';
        }
        if ($data['s_l'][0]->ensayo_requerido_tapon == 1) {
            $ensayos[] = 'Tapón';
        }
        if ($data['s_l'][0]->ensayo_requerido_relleno == 1) {
            $ensayos[] = 'Relleno';
        }

        $data['ensayos_seleccionados'] = implode(', ', $ensayos);

        $pdf = PDF::loadView('solicitud_pdf', $data);
        // Mail::to($request->destinatario)->send(new SolicitudLechadaPdfMail($pdf->output()));
        Mail::to($request->destinatario)->send(new SolicitudLechadaPdfMail($pdf->output(), $data));
        return response()->json(['success_pdf' => 'PDF enviado correctamente']);
    }

    public function pdf_view()
    {
        $data = [
            'solicitud' => Solicitud::find(2),
        ];
        return view('emails.solicitud.solicitud_body', $data);
    }

    public function pdf_report_lodo(Request $request, $solicitud_id)
    {
        $chartVP = $request->chartVP;
        $chartGeles = $request->chartGeles;

        $data = [
            'solicitud' => Solicitud::find($solicitud_id),
            'solicitud_lodo' => SolicitudLodo::where('solicitud_id', $solicitud_id)->get(),
            'mud_company' => MudCompany::all(),
            'tipo_lodos' => TipoLodo_Lodos::all(),
            'chartVP' => $chartVP,
            'chartGeles' => $chartGeles
            
        ];
          
        $pdf = PDF::loadView('solicitud_pdf_lodo', $data);
        // return $pdf->loadView('solicitud_lechada.pdf');
        return $pdf->stream();
    }


    // PDF para Solicitud Lodo

    public function pdf_report_lodo_solicitud($solicitud_id)
    {

    
        $data = [
            'solicitud' => Solicitud::find($solicitud_id),
            'solicitud_lodo' => SolicitudLodo::where('solicitud_id', $solicitud_id)->get(),
            'mud_company' => MudCompany::all(),
            'tipo_lodo' => TipoLodo_Lodos::all(),
            'opciones_ensayos' => EnsayosLodo::all(),
            'ensayos_multiples' => EnsayosLodo::leftJoin('rel_ensayos_requeridos_lodo', 'ensayos_lodo.id', '=', 'rel_ensayos_requeridos_lodo.id_ensayo')
            ->where('rel_ensayos_requeridos_lodo.nombre', $solicitud_id)
            ->get(['ensayos_lodo.*', 'rel_ensayos_requeridos_lodo.*']),
            
        ];
          
        $pdf = PDF::loadView('pdf_lodo_solicitud', $data);
        // return $pdf->loadView('solicitud_lechada.pdf');
        return $pdf->stream();
    }

    # PDF para Solicitud de Lechada 
    public function pdf_report_lechada_solicitud($solicitud_id)
    {
        $data = [
            'solicitud' => Solicitud::find($solicitud_id),
            's_l' => SolicitudLechada::where('solicitud_id', $solicitud_id)->get(),
            'mud_company' => MudCompany::all(),
            'tipo_lodo' => TipoLodo::all(),
        ];

        // Lógica para obtener los nombres de los botones seleccionados
        $ensayos = [];
        if ($data['s_l'][0]->ensayo_requerido_principal == 1) {
            $ensayos[] = 'Principal';
        }
        if ($data['s_l'][0]->ensayo_requerido_bullheading == 1) {
            $ensayos[] = 'Bullheading';
        }
        if ($data['s_l'][0]->ensayo_requerido_tapon == 1) {
            $ensayos[] = 'Tapón';
        }
        if ($data['s_l'][0]->ensayo_requerido_relleno == 1) {
            $ensayos[] = 'Relleno';
        }

        $data['ensayos_seleccionados'] = implode(', ', $ensayos);

        $data['checkboxes'] = [
            'tiempo_50_psi' => $data['s_l'][0]->tiempo_50_psi,
            'tiempo_500_psi' => $data['s_l'][0]->tiempo_500_psi,
            'tiempo_1000_psi' => $data['s_l'][0]->tiempo_1000_psi,
            'resistencia_12_hs' => $data['s_l'][0]->resistencia_12_hs,
            'resistencia_24_hs' => $data['s_l'][0]->resistencia_24_hs,
        ];
          
        $pdf = PDF::loadView('pdf_lechada_solicitud', $data);
        // return $pdf->loadView('solicitud_lechada.pdf');
        return $pdf->stream();
    }

        // PDF para Solicitud Fractura

    public function pdf_report_fractura_solicitud($solicitud_id)
    {
        $data = [
            'solicitud' => Solicitud::find($solicitud_id),
            'solicitud_fractura' => SolicitudFractura::where('solicitud_id', $solicitud_id)->get(),
            //'mud_company' => MudCompany::all(),
            //'tipo_lodo' => TipoLodo_Lodos::all(),
            //'opciones_ensayos' => EnsayosLodo::all(),
            //'ensayos_multiples' => EnsayosLodo::leftJoin('rel_ensayos_requeridos_lodo', 'ensayos_lodo.id', '=', 'rel_ensayos_requeridos_lodo.id_ensayo')
            //->where('rel_ensayos_requeridos_lodo.nombre', $solicitud_id)
            //->get(['ensayos_lodo.*', 'rel_ensayos_requeridos_lodo.*']),
            
        ];
          
        $pdf = PDF::loadView('pdf_fractura_solicitud', $data);
        return $pdf->stream();
    }
}
