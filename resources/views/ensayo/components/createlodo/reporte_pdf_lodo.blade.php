<style>
    #btn_report_pdf_lodo::after {
        content: '';
        display: none !important
    }
</style>

<div class="mt-4 tab-pane fade" id="tab_reporte_pdf_lodo" role="tabpanel">
    <!-- Mezclabilidad -->
    <div class="text-center">
        <h5>Seleccione si desea visualizar/descargar el reporte o enviarlo a alguien.</h5>
        <button id="btn_pdf_report_lodo" class="btn_submit md:w-auto bg-opacity-60 p-2 rounded-sm text-xs xl:text-sm mt-3">Visualizar Reporte
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
                                    <button id="btn_submit_report_lodo_mail"
                                        class="btn_submit bg-opacity-60 p-2 rounded-sm text-xs xl:text-sm w-full">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"></script>

<script>
<<<<<<< Updated upstream


 // Función para abrir el reporte PDF en una nueva pestaña
 const pdfReportLodo = (chartVP, chartGeles) => {
=======
    // Función para abrir el reporte PDF en una nueva pestaña
    const pdfReportLodo = (chartVP, chartGeles) => {
>>>>>>> Stashed changes
        let solicitud_id = {!! json_encode($solicitud->id) !!};
        let url = `{{ route('pdf_report_lodo', '') }}/${solicitud_id}?chartVP=${encodeURIComponent(chartVP)}&chartGeles=${encodeURIComponent(chartGeles)}`;
        window.open(url, '_blank');
    };

    let downloadButton = document.getElementById("btn_pdf_report_lodo");

    let alreadyGeneratedPDF = false;

    downloadButton.addEventListener('click', (e) => {
        if (!alreadyGeneratedPDF) {
            alreadyGeneratedPDF = true; // Evitar generación duplicada
            switchToTabAndGeneratePDF(e);
        }
    });

    const switchToTabAndGeneratePDF = (e) => {
        e.preventDefault();

        // Cambiar al tab de compatibilidad
        const tabButton = document.querySelector('a[href="#tab-compatibilidad_espaciador"]');
        if (tabButton) {
            tabButton.click(); // Hacer clic en el tab para activarlo
        }

        // Llamar a la función de generación de PDF después de un breve retraso
        setTimeout(() => {
            submitFunction(e);
        }, 300); // Ajusta el tiempo según sea necesario
    };


    const submitFunction = (e) => {
        e.preventDefault();

        const btn_pdf_report_lodo = document.querySelector('#btn_pdf_report_lodo');
        btn_pdf_report_lodo.classList.toggle('disabled');

        // Obtén los canvas de los gráficos
        const chartCanvas1 = document.getElementById('reologiasVP');
        const chartCanvas2 = document.getElementById('reologiasGeles');

        const chartDom1hidden = document.getElementById('chartVP');
        const chartDom2hidden = document.getElementById('chartGeles');

        const generatePDF = () => {

            if (chartCanvas1 && chartCanvas2) {
                // Obtén la imagen en base64 del gráfico 1
                const dataUrl1 = chartCanvas1.toDataURL('image/png');
                chartDom1hidden.value = dataUrl1;

                // Obtén la imagen en base64 del gráfico 2
                const dataUrl2 = chartCanvas2.toDataURL('image/png');
                chartDom2hidden.value = dataUrl2;

                // Envía el formulario con las imágenes en base64
                document.getElementById('charts_pdf').submit();
            } else {
                console.error('No se pudo encontrar el canvas de los gráficos.');
            }
        };

        generatePDF();
    };

    //La funcion de abajo podria reutilizarla arriba pero hay que agregar unas cositas y paja

    //Creo variable para consultar luego si ya estan las imgs en el form
    let alreadyGeneratedImages = false;

    const generateImages = () => {

        const chartCanvas1 = document.getElementById('reologiasVP');
        const chartCanvas2 = document.getElementById('reologiasGeles');

        // Verificar si los gráficos existen
        if (chartCanvas1 && chartCanvas2) {

            const dataUrl1 = chartCanvas1.toDataURL('image/png');
            const dataUrl2 = chartCanvas2.toDataURL('image/png');

            // Apender las imágenes al formulario 'form_submit_report_lechada' (el form del envio de correo)
            appendImagesToForm(dataUrl1, dataUrl2);

            // Pongo en true la variable porque ya esta appendeado los charts al form
            alreadyGeneratedImages = true;
        } else {
            console.error('No se pudo encontrar el canvas de los gráficos.');
        }
    };

    // Función para agregar las imágenes en base64 al formulario 'form_submit_report_lechada' (envio de correos)
    const appendImagesToForm = (dataUrl1, dataUrl2) => {
        const formSubmitLechada = document.getElementById('form_submit_report_lechada');

        // Crear campos ocultos para las imágenes si no existen (chart_image_1, chart_image_2)
        if (!document.querySelector('input[name="chart_image_1"]')) {
            const hiddenInput1 = document.createElement('input');
            hiddenInput1.type = 'hidden';
            hiddenInput1.name = 'chart_image_1';
            hiddenInput1.value = dataUrl1;
            formSubmitLechada.appendChild(hiddenInput1);
        }

        if (!document.querySelector('input[name="chart_image_2"]')) {
            const hiddenInput2 = document.createElement('input');
            hiddenInput2.type = 'hidden';
            hiddenInput2.name = 'chart_image_2';
            hiddenInput2.value = dataUrl2;
            formSubmitLechada.appendChild(hiddenInput2);
        }
    };
</script>


{{-- Codigo Ro --}}


{{-- cambie nombre boton email --}}
{{-- <script>
    const btn_pdf_report_lodo = document.querySelector('#btn_pdf_report_lodo');
    if (btn_pdf_report_lodo) {
        btn_pdf_report_lodo.addEventListener('click', e => pdfReportLodo());
    }

    /**
     * Genera la visualización del PDF en una nueva pestaña
     */
    const pdfReportLodo = (chartVP, chartGeles) => {
        event.preventDefault();
        let solicitud_id = {!! json_encode($solicitud->id) !!}
        // var url = "{{ route('pdf_report_lodo', '') }}" + "/" + solicitud_id;
let url = `{{ route('pdf_report_lodo', '') }}/${solicitud_id}?chartVP=${encodeURIComponent(chartVP)}&chartGeles=${encodeURIComponent(chartGeles)}`;
window.open(url, '_blank');
}

</script> --}}

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
</script> --}}