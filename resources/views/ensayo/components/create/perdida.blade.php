<div class="mt-4 tab-pane fade" id="tab-perdida_filtrado" role="tabpanel" aria-labelledby="nav-tab_condiciones_test">

    <div id="registro_filtrado">
        <div class="flex justify-center">
            <p>Registro de Pérdida de Filtrado</p>
        </div>

        <div class="grid grid-cols-3 gap-3 mb-3">
            <div>
                <label for="perdida_temperatura"
                    class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Temperatura °C</label>
                <input type="text" class="form-control text-sm p-2"
                    value="{{ $s_l[0]->rel_perdida_filtrado[0]->temperatura }}" readonly>
            </div>
            <div>
                <label for="perdida_fluido_acumulado"
                    class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fluido Acumulado mL</label>
                <input type="text" class="form-control text-sm p-2"
                    value="{{ $s_l[0]->rel_perdida_filtrado[0]->fluido_acumulado }}" readonly>
            </div>
            <div>
                <label for="perdida_filtrado_api"
                    class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Filtrado API
                    ml/30min</label>
                <input type="text" class="form-control text-sm p-2"
                    value="{{ $s_l[0]->rel_perdida_filtrado[0]->filtrado_api }}" readonly>
            </div>
        </div>
    </div>

    <!-- Pérdida de Filtrado -->
    @if (count($s_l[0]->rel_reologia) == 0)
        <form id="form_filtrado" class="mt-3" method="POST">
            @csrf
            <input type="hidden" name="solicitud_lechada_id" value="{{ $s_l[0]->id }}">

            <div class="grid grid-cols-3 gap-3 mb-3">
                <div>
                    <label for="perdida_temperatura"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Temperatura °C</label>
                    <input type="number" name="perdida_temperatura" id="perdida_temperatura"
                        class="form-control text-sm p-2" placeholder="Temperatura °C" step=".01">
                </div>
                <div>
                    <label for="perdida_fluido_acumulado"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fluido Acumulado mL</label>
                    <input type="number" name="perdida_fluido_acumulado" id="perdida_fluido_acumulado"
                        class="form-control text-sm p-2" placeholder="Ingrese el fluido acumulado" step=".01">
                </div>
                <div>
                    <label for="perdida_filtrado_api"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Filtrado API
                        ml/30min</label>
                    <input type="number" name="perdida_filtrado_api" id="perdida_filtrado_api"
                        class="form-control text-sm p-2" placeholder="Filtrado API" step=".01">
                </div>
            </div>
            <div class="flex justify-center">
                <x-button type="button" id="btn_submit_filtrado"
                    style="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-sm">Crear
                    Registro</x-button>
            </div>
        </form>
    @endif

</div> <!-- Pérdida de Filtrado -->

<script>
    const btn_submit_filtrado = document.getElementById('btn_submit_filtrado');

    if (btn_submit_filtrado) {
        btn_submit_filtrado.addEventListener('click', e => {
            e.preventDefault();
            let form = new FormData(document.getElementById('form_filtrado'))

            confirmAlert().then((confirmed) => {
                if (confirmed) {
                    fetch("{{ route('store_perdida') }}", {
                            method: 'POST',
                            body: form
                        }).then((response) => response.json())
                        .then((data) => {
                            if (data) {
                                componentFiltrado(data.success_filtrado)
                                document.getElementById('form_filtrado').style.display = 'none'
                                successAlert('¡Registro Asignado!',
                                    'El registro se asignó correctamente.')

                                let solicitud_id = {!! json_encode($solicitud->id) !!}
                                checkGenerateReport(solicitud_id)
                                .then((data) => {
                                    if (data.generate_report) {
                                        document.querySelector('#tab_g_report_js').classList.remove('d-none')
                                    }
                                })
                            }
                        })
                }
            })
        })
    }
</script>
