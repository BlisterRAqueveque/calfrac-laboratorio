<style>
    #btn_report_pdf::after {
        content: '';
        display: none !important
    }
</style>

<div class="mt-4 tab-pane fade" id="tab_reporte_pdf" role="tabpanel">
    <!-- Mezclabilidad -->
    <div class="text-center">
        <h5>Seleccione si desea visualizar/descargar el reporte o enviarlo a alguien.</h5>
        <button id="btn_pdf_report" class="btn_submit md:w-auto bg-opacity-60 p-2 rounded-sm text-xs xl:text-sm mt-3">Visualizar Reporte
            PDF</button>
    </div>

    <button id="btn_report_pdf" class="accordion-button collapsed btn_submit md:w-auto bg-opacity-60 p-2 rounded-sm text-xs xl:text-sm mt-3" data-bs-toggle="collapse" data-bs-target="#send_report_lechada">Enviar Reporte PDF</button>
    <div class="accordion" id="accordion_report_lechada">
        <div id="send_report_lechada" class="accordion-collapse collapse" data-bs-parent="#accordion_report_lechada">
            <div class="accordion-body overflow-auto">
                <div class="card">
                    <div class="card-header">
                        ¿A quién desea enviar el correo junto al reporte?
                    </div>
                    <div class="card-body">
                        <form id="form_submit_report_lechada">
                            <div class="grid grid-cols-6 gap-x-2 items-center">
                                <div class="col-span-6">
                                    <label for="bombeabilidad_acondicionamiento" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Ingrese el
                                        correo</label>
                                </div>
                                <div class="col-span-2">
                                    <input type="email" class="form-control text-sm p-2" placeholder="Correo electrónico.." name="destinatario" id="destinatario">
                                </div>
                                <div class="col-span-1">
                                    <button id="btn_submit_report_lechada" class="btn_submit bg-opacity-60 p-2 rounded-sm text-xs xl:text-sm w-full">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"></script>

<script>

    // Función para abrir el reporte PDF en una nueva pestaña
    const pdfReport = (chartImage1, chartImage2) => {
        let solicitud_id = {!! json_encode($solicitud->id) !!};
        let url = `{{ route('pdf_report_lechada', '') }}/${solicitud_id}?chartImage1=${encodeURIComponent(chartImage1)}&chartImage2=${encodeURIComponent(chartImage2)}`;
        window.open(url, '_blank');
    };

    let downloadButton = document.getElementById("btn_pdf_report");

let alreadyGeneratedPDF = false;

downloadButton.addEventListener('click', (e) => {
    if (!alreadyGeneratedPDF) {
        alreadyGeneratedPDF = true; // Evitar generación duplicada
        submitFunction(e);
    }
});

const submitFunction = (e) => {
    e.preventDefault();

    const btn_pdf_report = document.querySelector('#btn_pdf_report');
    btn_pdf_report.classList.toggle('disabled');

    // Obtén los canvas de los gráficos
    const chartCanvas1 = document.getElementById('reporteReologiasTAmbiente');
    const chartCanvas2 = document.getElementById('reporteReologiasTEnsayo');

    const chartDom1hidden = document.getElementById('chartImage1');
    const chartDom2hidden = document.getElementById('chartImage2');

    const generatePDF = () => {
        console.log(chartCanvas1);
        console.log(chartCanvas2);

        if (chartCanvas1 && chartCanvas2) {
            // Obtén la imagen en base64 del gráfico 1
            const dataUrl1 = chartCanvas1.toDataURL('image/png');
            chartDom1hidden.value = dataUrl1;

            // Obtén la imagen en base64 del gráfico 2
            const dataUrl2 = chartCanvas2.toDataURL('image/png');
            chartDom2hidden.value = dataUrl2;

            // Envía el formulario con las imágenes en base64
            document.getElementById('mi_form_pdf').submit();
        } else {
            console.error('No se pudo encontrar el canvas de los gráficos.');
        }
    };

    generatePDF();
};

</script>

{{-- Generar el envío de corre a un usuario del sistema o fuera del sistema --}}
<script>
    const btn_submit_report_lechada = document.querySelector('#btn_submit_report_lechada');
    if (btn_submit_report_lechada) {
        btn_submit_report_lechada.addEventListener('click', e => sendReportEmail());
    }

    /**
     * Genera el envío del PDF por el correo al usuario que desee
     */
    const sendReportEmail = () => {
        event.preventDefault();
        let solicitud_id = {!! json_encode($solicitud->id) !!}

        confirmAlert('¿Está seguro de enviar el reporte?',
            'Una vez que confirme, se enviará el reporte al correo ingresado',
            0, 'Enviar Reporte').then((confirmed) => {
            if (confirmed) {
                loadingAlert('Envío en progreso, por favor espere',
                    'Se está enviando el reporte y notificando vía email');
                fetch("{{ route('pdf_send_report_lechada', '') }}" + "/" + solicitud_id, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                .getAttribute('content')
                        },
                        body: new FormData(document.getElementById('form_submit_report_lechada'))
                    }).then((response) => response.json())
                    .then((data) => {
                        if (data) {

                            successAlert('¡Reporte Enviado!',
                                'El reporte se envió correctamente.').then(
                                (confirmed) => {
                                    document.getElementById('destinatario').value = ''
                                })
                        }
                    })
            }
        })
    }
</script>