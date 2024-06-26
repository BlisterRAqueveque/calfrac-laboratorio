<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SolicitudLechadaPdfMail extends Mailable
{
    use Queueable, SerializesModels;
    public $pdf;
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($pdf, $data)
    {
        $this->pdf = $pdf;
        $this->data = $data;
    }

    public function build()
    {
        return $this->view('emails.solicitud.solicitud_body')
            ->with('data', $this->data)
                    ->subject('Calfrac - Reporte de Solicitud de Cementación')
                    ->attachData($this->pdf, 'reporte_solicitud.pdf', [
                        'mime' => 'application/pdf',
                    ]);
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Calfrac - Reporte de Solicitud de Cementación',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'emails.solicitud.solicitud_body',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return []; // Aca no iria el pdf para mandarlo por mail? 
    }
}
