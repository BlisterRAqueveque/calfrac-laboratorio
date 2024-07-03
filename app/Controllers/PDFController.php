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
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;
use Mail;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pdf_report_lechada($solicitud_id)
    {
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
            // 'ensayos' => Ensayo::with('aditivos', 'requerimientos')->where('solicitud_id', $solicitud_id)->get()
        ];
        // dd($data);
          
        $pdf = PDF::loadView('solicitud_pdf', $data);
        // return $pdf->loadView('solicitud_lechada.pdf');
        return $pdf->stream();
    }

    public function pdf_send_report_lechada($solicitud_id, Request $request) {
        // return response()->json(['success_pdf' => $request->destinatario]);

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
        ];
          
        $pdf = PDF::loadView('solicitud_pdf', $data);
        // Mail::to($request->destinatario)->send(new SolicitudLechadaPdfMail($pdf->output()));
        Mail::to($request->destinatario)->send(new SolicitudLechadaPdfMail($pdf->output(), $data));
        return response()->json(['success_pdf' => 'PDF enviado correctamente']);
    }

    public function pdf_view() {
        $data = [
            'solicitud' => Solicitud::find(2),
        ];
        return view('emails.solicitud.solicitud_body', $data);
    }
}
