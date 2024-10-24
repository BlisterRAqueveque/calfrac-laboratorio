<div class="mt-4 tab-pane fade" id="tab_mezclabilidad" role="tabpanel"> <!-- Mezclabilidad -->
    @if (count($s_l[0]->rel_mezclabilidad) > 0)
        <div id="registro_mezclabilidad">
            <h5 class="mb-2 text-center">Registro de Mezclabilidad</h5>
            <hr class="my-3">
            <div class="grid grid-cols-3 gap-3 my-3">
                <div>
                    <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Mezclabilidad
                        °C</label>
                    <input type="number" value="{{ $s_l[0]->rel_mezclabilidad[0]->mezclabilidad }}"
                        class="form-control text-sm p-2" readonly>
                </div>
            </div>
            <p class="text-sm">
                Observación: Mezclabilidad 5 es si la lechada se mezcla muy bien ; 1 si cuesta mezclar
            </p>
        </div>
    @else
        <div id="registro_mezclabilidad"></div>
    @endif

    @if (count($s_l[0]->rel_mezclabilidad) == 0)
        <form id="form_mezclabilidad" class="mt-3">
            @csrf
            <h5 class="mb-2 text-center">Registro de Mezclabilidad</h5>
            <hr class="my-3">
            <input type="hidden" name="solicitud_lechada_id" value="{{ $s_l[0]->id }}">
            <div class="grid grid-cols-3 gap-3 mb-3">
                <div>
                    <label for="mezclabilidad"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Mezclabilidad</label>
                    <input type="number" name="mezclabilidad" id="mezclabilidad" class="form-control text-sm p-2"
                        placeholder="Ingrese la Mezclabilidad">
                </div>
            </div>
            <p class="text-sm">
                Observación: Mezclabilidad 5 es si la lechada se mezcla muy bien ; 1 si cuesta mezclar
            </p>
            <div class="flex justify-center">
                <x-button type="button" id="btn_submit_mezclabilidad"
                    style="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-sm">Crear
                    Registro</x-button>
            </div>
        </form>
    @endif

</div>

<script>
    const btn_submit_mezclabilidad = document.getElementById('btn_submit_mezclabilidad');

    if (btn_submit_mezclabilidad) {
        btn_submit_mezclabilidad.addEventListener('click', e => {
            e.preventDefault();

            const mezclabilidad = document.querySelector('input[name="mezclabilidad"]').value;

            if (!mezclabilidad ) {
                errorAlert("Error", "Campo requerido.").then(() => {
                    // Puedes enfocar el primer campo vacío si lo deseas
                    if (!mezclabilidad) document.querySelector('input[name="mezclabilidad"]');

                });
                return; // Detener la ejecución si hay un error
            }

            let form = new FormData(document.getElementById('form_mezclabilidad'))

            confirmAlert().then((confirmed) => {
                if (confirmed) {
                    fetch("{{ route('store_mezclabilidad') }}", {
                            method: 'POST',
                            body: form
                        }).then((response) => response.json())
                        .then((data) => {
                            if (data) {
                                componentMezclabilidad(data.success_mezclabilidad)
                                document.getElementById('form_mezclabilidad').style.display = 'none'
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
