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
use App\Models\User;
use App\Models\CalculosReologias;
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
    public function pdf_report_lechada($solicitud_id, Request $request)
    {
        // Charts de Reologias
        $chartImage1 = $request->chartImage1;
        $chartImage2 = $request->chartImage2;
    
    
        // Preparar datos para la vista PDF
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
            'calculos_reologias' => CalculosReologias::all(),
            'names_ingenieros' => User::whereIn('users.grupo_id', [3, 4])->get('users.*'),
            'chartImage1' => $chartImage1,
            'chartImage2' => $chartImage2
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
 $chartImage1 = $request->chartImage1;
 $chartImage2 = $request->chartImage2;

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
            'calculos_reologias' => CalculosReologias::all(),
            'names_ingenieros' => User::whereIn('users.grupo_id', [3, 4])->get('users.*'),
            'chartImage1' => $chartImage1,
            'chartImage2' => $chartImage2
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
}
