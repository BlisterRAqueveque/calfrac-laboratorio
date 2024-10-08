<style>
    #btn_report_pdf_lodo::after {
        content: '';
        display: none !important
    }
</style>

<div class="mt-4 tab-pane fade" id="tab_reporte_pdf_lodo" role="tabpanel"> <!-- Mezclabilidad -->
    <div class="text-center">
        <h5>Seleccione si desea visualizar/descargar el reporte o enviarlo a alguien.</h5>
        <button id="btn_pdf_report_lodo"
            class="btn_submit md:w-auto bg-opacity-60 p-2 rounded-sm text-xs xl:text-sm mt-3">Visualizar Reporte
            PDF</button>
    </div>

    {{-- <button id="btn_report_pdf_lodo"
        class="accordion-button collapsed btn_submit md:w-auto bg-opacity-60 p-2 rounded-sm text-xs xl:text-sm mt-3"
        data-bs-toggle="collapse" data-bs-target="#send_report_lodo">Enviar Reporte PDF</button>
    <div class="accordion" id="accordion_report_lodo">
        <div id="send_report_lodo" class="accordion-collapse collapse" data-bs-parent="#accordion_report_lodo">
            <div class="accordion-body overflow-auto">
                <div class="card">
                    <div class="card-header">
                        ¿A quién desea enviar el correo junto al reporte?
                    </div>
                    <div class="card-body">
                        <form id="form_submit_report_lodo">
                            <div class="grid grid-cols-6 gap-x-2 items-center">
                                <div class="col-span-6">
                                    <label for="mail_destino"
                                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Ingrese el
                                        correo</label>
                                </div>
                                <div class="col-span-2">
                                    <input type="email" class="form-control text-sm p-2"
                                        placeholder="Correo electrónico.." name="destinatario_lodo" id="destinatario_lodo">
                                </div>
                                <div class="col-span-1">
                                    <button id="btn_submit_report_lodo"
                                        class="btn_submit bg-opacity-60 p-2 rounded-sm text-xs xl:text-sm w-full">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}


<script>
    const btn_pdf_report_lodo = document.querySelector('#btn_pdf_report_lodo');
    if (btn_pdf_report_lodo) {
        btn_pdf_report_lodo.addEventListener('click', e => pdfReportLodo());
    }

    /**
     * Genera la visualización del PDF en una nueva pestaña
     */
    const pdfReportLodo = () => {
        event.preventDefault();
        let solicitud_id = {!! json_encode($solicitud->id) !!}
        var url = "{{ route('pdf_report_lodo', '') }}" + "/" + solicitud_id;
        window.open(url, '_blank');
    }
    
</script> 

{{-- Generar el envío de corre a un usuario del sistema o fuera del sistema --}}
{{-- <script>
    const btn_submit_report_lodo = document.querySelector('#btn_submit_report_lodo');
    if (btn_submit_report_lodo) {
        btn_submit_report_lodo.addEventListener('click', e => sendReportEmailLodo());
    }

    /**
     * Genera el envío del PDF por el correo al usuario que desee
     */
    const sendReportEmailLodo = () => {
        event.preventDefault();
        let solicitud_id = {!! json_encode($solicitud->id) !!}

        confirmAlert('¿Está seguro de enviar el reporte?',
            'Una vez que confirme, se enviará el reporte al correo ingresado',
            0, 'Enviar Reporte').then((confirmed) => {
            if (confirmed) {
                loadingAlert('Envío en progreso, por favor espere',
                    'Se está enviando el reporte y notificando vía email');
                fetch("{{ route('pdf_send_report_lodo', '') }}" + "/" + solicitud_id, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                .getAttribute('content')
                        },
                        body: new FormData(document.getElementById('form_submit_report_lodo'))
                    }).then((response) => response.json())
                    .then((data) => {
                        if (data) {
                            
                            successAlert('¡Reporte Enviado!',
                                'El reporte se envió correctamente.').then(
                                (confirmed) => {
                                    document.getElementById('destinatario_lodo').value = ''
                                })
                        }
                    })
            }
        })
    }
</script>  --}}
                                                                                                                                                                                                                                                                                                                                                                                                                              