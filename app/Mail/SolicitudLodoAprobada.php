<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SolicitudLodoAprobada extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @param array $data Datos que se pasan al correo.
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;  // Asigna los datos al correo
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.solicitud.approvedlodo')  // Vista del correo
            ->subject('Laboratorio Calfrac | Solicitud de Lodo N°' . $this->data['solicitud_id'] . ' - Aprobada')  // Asunto dinámico
            ->with('data', $this->data);  // Pasamos la variable $data a la vista
    }
}
