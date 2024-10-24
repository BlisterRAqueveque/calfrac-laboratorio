<div class="mt-4 tab-pane fade" id="tab-perdida_filtrado" role="tabpanel" aria-labelledby="nav-tab_condiciones_test">

    <div id="registro_filtrado">
        @if (count($s_l[0]->rel_perdida_filtrado) > 0)
        <h5 class="mb-2 text-center">Registro de Perdida de Filtrado</h5>
        <hr>
        <br>

            <div class="grid grid-cols-3 gap-3 mb-3">
                <div>
                    <label for="perdida_temperatura"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Temperatura °C</label>
                    <input type="text" class="form-control text-sm p-2"
                        value="{{ $s_l[0]->rel_perdida_filtrado[0]->temperatura }}" readonly>
                </div>
                <div>
                    <label for="perdida_fluido_acumulado"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fluido Acumulado &lt;mL</label>
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
        @endif
    </div>

    <!-- Pérdida de Filtrado -->
    @if (count($s_l[0]->rel_perdida_filtrado) == 0)
        <form id="form_filtrado" class="mt-3" method="POST">
            @csrf
            <h5 class="mb-2 text-center">Registro de Perdida de Filtrado</h5>
            <hr>
            <br>
            <input type="hidden" name="solicitud_lechada_id" value="{{ $s_l[0]->id }}">

            <div class="grid grid-cols-3 gap-3 mb-3">
                <div>
                    <label for="perdida_temperatura"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Temperatura °C</label>
                    <input type="number" name="perdida_temperatura" id="perdida_temperatura"
                        class="form-control text-sm p-2" placeholder="Temperatura °C" step=".0001">
                </div>
                <div>
                    <label for="perdida_fluido_acumulado"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fluido Acumulado mL</label>
                    <input type="number" name="perdida_fluido_acumulado" id="perdida_fluido_acumulado"
                        class="form-control text-sm p-2" placeholder="Ingrese el fluido acumulado" step=".0001">
                </div>
                <div>
                    <label for="perdida_filtrado_api"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Filtrado API
                        ml/30min</label>
                    <input type="number" name="perdida_filtrado_api" id="perdida_filtrado_api"
                        class="form-control text-sm p-2" placeholder="Filtrado API" step=".0001">
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

            const getFieldValues = (fieldNames) => {
                return fieldNames.map(name => ({
                    name,
                    value: document.querySelector(`input[name="${name}"]`).value,
                }));
            };

            // Función para verificar si hay campos vacíos
            const checkEmptyFields = (fields) => {
                for (const field of fields) {
                    if (!field.value) {
                        return field.name;
                    }
                }
                return null;
            };

            // Definir los campos requeridos
            const requiredFields = [
                'perdida_temperatura',
                'perdida_fluido_acumulado',
                'perdida_filtrado_api',
            ];

            // Obtener los valores de los campos requeridos
            const fieldValues = getFieldValues(requiredFields);

            // Verificar si hay campos vacíos
            const emptyField = checkEmptyFields(fieldValues);
            if (emptyField) {
                errorAlert("Error", "Todos los campos son requeridos.").then(() => {
                    document.querySelector(`input[name="${emptyField}"]`);
                });
                return; // Detener la ejecución si hay un error
            }
        
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
                                            document.querySelector('#tab_g_report_js').classList
                                                .remove('d-none')
                                        }
                                    })
                            }
                        })
                }
            })
        })
    }
</script>
