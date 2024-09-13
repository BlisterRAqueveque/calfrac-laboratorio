<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="mt-4 tab-pane fade" id="tab_aditivos" role="tabpanel" aria-labelledby="nav-tab_aditivos">
    <form id="form_aditivos" method="POST">
        @csrf
        <input type="hidden" name="solicitud_lechada_id" value="{{ $s_l[0]->id }}">
        <h5 class="mb-2 text-center">Registros de aditivos</h5>
    
        <hr>
    
        <div class="grid grid-cols-5 text-center bg-gray-100 py-2 my-3">
            <p>N° Lote</p>
            <p>Aditivo</p>
            <p>Conc. %</p>
            <p>Units</p>
            <p>OM</p>
        </div>
        <div id="container_formulaciones_tentativas_aditivos_lechada"></div>
    
        <div class="text-center mt-3">
            <button id="btnAddFormulacionEnsayoAditivo" class="text-sm mt-2 bg-gray-200 hover:bg-gray-300 text-gray-600 p-1 rounded-md px-3 border transition-all duration-200 border-gray-300">
                Agregar Formulación
            </button>
        </div>
    
        <br>
    
        <div class="flex justify-center">
            <x-button type="button" id="btn_submit_registros_aditivos"
                style="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-sm">Crear
                Registro</x-button>
        </div>
    </form>
</div>

<script>
    const btn_submit_registros_aditivos = document.getElementById('btn_submit_registros_aditivos');

    if (btn_submit_registros_aditivos) {
        btn_submit_registros_aditivos.addEventListener('click', e => {
            e.preventDefault();
            let form = new FormData(document.getElementById('form_aditivos'))

            confirmAlert().then((confirmed) => {
                if (confirmed) {
                    fetch("{{ route('store_aditivos') }}", {
                            method: 'POST',
                            body: form
                        }).then((response) => response.json())
                        .then((data) => {
                            if (data) {
                                componentAditivos(data.success_aditivos)
                                document.getElementById('form_aditivos').style.display = 'none'
                                successAlert('¡Registro Asignado!',
                                    'El registro se asignó correctamente.')
                                    
                                let solicitud_id = {!! json_encode($solicitud->id) !!}
                                // checkGenerateReport(solicitud_id)
                                // .then((data) => {
                                //     if (data.generate_report) {
                                //         document.querySelector('#tab_g_report_js').classList.remove('d-none')
                                //     }
                                // })
                            }
                        })
                }
            })
        })
    }
</script>

