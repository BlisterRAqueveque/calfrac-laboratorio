<div class="mt-4 tab-pane fade" id="tab_generar_reporte" role="tabpanel"> <!-- Mezclabilidad -->
    <div class="text-center">
        <h5>Una vez que los datos estén completados, puede generar el reporte del ensayo para finalizar la asignación a la solicitud correspondiente.</h5>
        <button id="btn_generate_report" class="btn_submit md:w-auto bg-opacity-60 p-2 rounded-sm text-xs xl:text-sm mt-3">Generar Reporte del Ensayo</button>
    </div>
</div>

{{-- <script>
    const btn_generate_report = document.querySelector('#btn_generate_report');
    if (btn_generate_report) {
        btn_generate_report.addEventListener('click', e => generateReport());
    }

    /**
     * Al momento de ser ejecutado, genera el reporte del Ensayo. Así mismo, asigna el Ensayo a la solicitud que se visualiza actualmente
    */
    const generateReport = () => {
        event.preventDefault();
        let solicitud_id = {!! json_encode($solicitud->id) !!}
        confirmAlert('¿Está seguro de generar el reporte?', 'Una vez que confirme, la solicitud queda finalizada', 0, 'Generar Reporte').then((confirmed) => {
                if (confirmed) {
                    fetch("{{ route('assignedReport', '') }}"+"/"+solicitud_id, {
                            method: 'POST',
                            headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                .getAttribute('content')
                            },
                        }).then((response) => response.json())
                        .then((data) => {
                            if (data) {
                                console.log(data)
                                successAlert('¡Registro Asignado!',
                                    'El registro se asignó correctamente.').then(
                                    (confirmed) => {
                                        window.location.reload();
                                    })
                                
                            }
                        })
                }
            })
    }
</script> --}}