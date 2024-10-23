<div class="mt-4 tab-pane fade" id="tab-humectabilidad" role="tabpanel" aria-labelledby="nav-tab_test">
@if (count($solicitud_lodo[0]->rel_humectabilidad) > 0)
<div class="accordionHumectabilidadLodo" id="accordionHumectabilidadLodo">
    <div class="mb-2 text-center">
        <h5 class="mb-1">Registro de Remoción Estatica del Lodo</h5>
    </div>
    <div class="grid grid-cols-5 gap-3">
 
        <div class="col-span-5 md:col-span-1">
            <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">¿Reporta humectabilidad?<small>(Si/No)</small></label>
            {{-- <input type="text" name="check_humectabilidad" value="{{ $solicitud_lodo[0]->rel_estatica[0]->check_humectabilidad }}" class="form-control text-sm"
                placeholder="¿Reporta remoción estatica?" readonly> --}}
                <select name="check_humectabilidad" id="check_humectabilidad" class="text-sm" data-silent-initial-value-set="true" multiple="false" disabled>
                    @foreach ($choices as $y)
                    <option value="{{ $y->id }}"
                        {{ $y->id == $solicitud_lodo[0]->rel_humectabilidad[0]->check_humectabilidad ? 'selected' : '' }}>{{ $y->choices }}
                    </option>
                    @endforeach
                </select>
        </div> 
    </div>
    <br>
    <h5>HUMECTABILIDAD:</h5>
    <br>
    <p class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Se evalúa la capacidad del colchón mecánico de invertir la fase externa oleosa no conductiva elétricamente del lodo, por una fase externa acousa conductiva. 
        <br>
        El procedimiento considedra el agregado de colchón en un volumen determinado de lodo, ambos son pre acondicionados a BHCT y finalmente se determina el oprcentaje de espaciador necesaio par invertir la fase externa del lodo.
        <br>
        % Vol de Espaciador = (Vol Total de Espaciador / (Vol de lodo + Espaciador) * 100)
    </p> 
    <div class="grid grid-cols-6 gap-3">
        <div class="col-span-2 xl:col-span-1">
            <label for="humectabilidad" class="text-sm text-gray-700 font-semibold tracking-wide mb-2"> % Humectabilidad
                <span class="text-red-500">*</span></label>
                <input type="number" name="humectabilidad" id="humectabilidad"
                value="{{ $solicitud_lodo[0]->rel_humectabilidad[0]->humectabilidad }}" class="form-control text-sm p-2"
                placeholder="%" readonly>
            {{-- @error('humectabilidad')
                <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
            @enderror --}}
        </div>
    </div>
</div>

@else
    <div class="accordionHumectabilidadLodo" id="accordionHumectabilidadLodo"></div>
@endif
@if (count($solicitud_lodo[0]->rel_humectabilidad) == 0)
    <form id="form_humectabilidad" method="POST">
    @csrf
    <input type="hidden" name="solicitud_lodo_id" value="{{ $solicitud_lodo[0]->id }}">
    <div class="mb-2 text-center">
        <h5 class="mb-1">Registro de Humectabilidad</h5>
    </div>
    <br>
    <div class="grid grid-cols-5 gap-3">

        <div class="col-span-5 md:col-span-1">
            <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">¿Reporta humectabilidad?<small>(Si/No) </small><span class="text-red-500"><small>(Requerido)</small></span></label>
            {{-- <input type="text" name="check_humectabilidad" value="{{ old('check_humectabilidad') }}" class="form-control text-sm" placeholder="¿Reporta remoción estatica?"> --}}
            <select name="check_humectabilidad" id="check_humectabilidad" class="text-sm" data-silent-initial-value-set="true" multiple="false">
                @foreach ($choices as $y)
                <option value="{{ $y->id }}" {{ old('check_humectabilidad') == $y->id ? 'selected' : '' }}>{{ $y->choices }}</option>
                @endforeach
            </select>
            <div class="hide-container" id="error-text-h">
                <div>
                    <p class="text-red-500 font-normal">Debe completar este campo</p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <h5>HUMECTABILIDAD:</h5>
    <br>
    <p class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Se evalúa la capacidad del colchón mecánico de invertir la fase externa oleosa no conductiva elétricamente del lodo, por una fase externa acousa conductiva. 
        <br>
        El procedimiento considedra el agregado de colchón en un volumen determinado de lodo, ambos son pre acondicionados a BHCT y finalmente se determina el oprcentaje de espaciador necesaio par invertir la fase externa del lodo.
        <br>
        % Vol de Espaciador = (Vol Total de Espaciador / (Vol de lodo + Espaciador) * 100)
    </p>
<div class="grid grid-cols-6 gap-3">
    <div class="col-span-2 xl:col-span-1">
        <label for="humectabilidad" class="text-sm text-gray-700 font-semibold tracking-wide mb-2"> % Humectabilidad
            </label>
            <input type="number" name="humectabilidad" id="humectabilidad"
            value="{{ old('humectabilidad') }}" class="form-control text-sm p-2"
            placeholder="%" >
        {{-- @error('humectabilidad')
            <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
        @enderror --}}
    </div>
</div>
<div class="flex justify-center mt-4">
    <x-button type="click" id="btn_submit_humectabilidad_lodo"
        style="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-sm">Crear
        Registro</x-button>
</div>
</form>
@endif
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
            VirtualSelect.init({
                ele: "#check_humectabilidad",
                placeholder: "Seleccione una opción",
            });
            //document.getElementById("tipo_lodo").setValue(0);
        })
</script>
<script>
    const btn_submit_humectabilidad_lodo = document.getElementById('btn_submit_humectabilidad_lodo');

    if (btn_submit_humectabilidad_lodo) {
        btn_submit_humectabilidad_lodo.addEventListener('click', e => {
            e.preventDefault();

            // Obtener el valor de check_humectabilidad
            const checkHumectabilidad = document.getElementById('check_humectabilidad').value;

            // Verificar si el campo check_humectabilidad está vacío
            if (!checkHumectabilidad) {
                errorAlert().then(() => {
                    // Opcional: puedes enfocar el campo si quieres

                    const el = document.getElementById('check_humectabilidad');
                    const error_text = document.getElementById('error-text-h')
                    error_text.classList.add('show-container')
                    //el.focus()
                    el.classList.add('error-message')
                    el.addEventListener('change', () => {
                        if (el.value) {
                            el.classList.remove('error-message')
                            error_text.classList.remove('show-container')
                        }
                    })
                });
                return; // Detener la ejecución si hay un error
            }


            let form = new FormData(document.getElementById('form_humectabilidad'))

            confirmAlert().then((confirmed) => {
                if (confirmed) {
                    fetch("{{ route('store_humectabilidad') }}", {
                            method: 'POST',
                            body: form
                        }).then((response) => response.json())
                        .then((data) => {
                            if (data) {
                                //componentReologiasLodo(data.success_caracterizacion_lodo, data.success_reologias_lodos)
                                componentHumectabilidadLodo(data.success_humectabilidad_lodo)
                                document.getElementById('form_humectabilidad').style.display = 'none'
                                successAlert('¡Registro Asignado!',
                                    'El registro se asignó correctamente.').then(
                                    (confirmed) => {
                                        // window.location.reload();
                                    })
                                let solicitud_id = {!! json_encode($solicitud->id) !!}
                                checkGenerateReportLodo(solicitud_id)
                                .then((data) => {
                                    if (data.generate_report_lodo) {
                                        document.querySelector('#tab_g_report_js_lodo').classList.remove('d-none')
                                    }
                                })
                            }
                        })
                }
            })
        })
    }
</script>


