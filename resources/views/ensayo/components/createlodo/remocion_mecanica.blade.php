<div class="mt-4 tab-pane fade" id="tab-remocion_mecanica" role="tabpanel" aria-labelledby="nav-tab_test">
@if (count($solicitud_lodo[0]->rel_mecanica) > 0)
<div class="accordionMecanicaLodo" id="accordionMecanicaLodo">
    <div class="mb-2 text-center">
        <h5 class="mb-1">Registro de Remoción Mecánica del Lodo</h5>
    </div>
    <div class="row mt-3 py-2 px-2">
        <table class="w-1/2 text-sm border border-gray-300">
            <thead class="bg-gray-200 text-gray-700">
                <tr>
                    <th class="p-1 text-center border border-gray-300">Tiempo de contacto (min)</th>
                    <th class="p-1 text-center border border-gray-300">DynaFlush-"O"</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="p-1 text-center border border-gray-300">2.5</td>
                    <td class="py-2 px-1 text-center border border-gray-300">
                        {{ $solicitud_lodo[0]->rel_mecanica[0]->tiempo_1 ? $solicitud_lodo[0]->rel_mecanica[0]->tiempo_1 : '-' }}
                    </td>
                </tr>
                <tr>
                    <td class="p-1 text-center border border-gray-300">5</td>
                    <td class="py-2 px-1 text-center border border-gray-300">
                        {{ $solicitud_lodo[0]->rel_mecanica[0]->tiempo_2 ? $solicitud_lodo[0]->rel_mecanica[0]->tiempo_2 : '-' }}
                    </td>
                </tr>
                <tr>
                    <td class="p-1 text-center border border-gray-300">7.5</td>
                    <td class="py-2 px-1 text-center border border-gray-300">
                        {{ $solicitud_lodo[0]->rel_mecanica[0]->tiempo_3 ? $solicitud_lodo[0]->rel_mecanica[0]->tiempo_3 : '-' }}
                    </td>
                </tr>
                <tr>
                    <td class="p-1 text-center border border-gray-300">10</td>
                    <td class="py-2 px-1 text-center border border-gray-300">
                        {{ $solicitud_lodo[0]->rel_mecanica[0]->tiempo_4 ? $solicitud_lodo[0]->rel_mecanica[0]->tiempo_4 : '-' }}
                    </td>
                </tr>
                <tr>
                    <td class="p-1 text-center border border-gray-300">12.5</td>
                    <td class="py-2 px-1 text-center border border-gray-300">
                        {{ $solicitud_lodo[0]->rel_mecanica[0]->tiempo_5 ? $solicitud_lodo[0]->rel_mecanica[0]->tiempo_5 : '-' }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
@else
    <div class="accordionMecanicaLodo" id="accordionMecanicaLodo"></div>
@endif 

@if (count($solicitud_lodo[0]->rel_mecanica) == 0)
<form id="form_mecanica_lodo" method="POST">
    @csrf
    <div class="mb-2 text-center">
        <h5 class="mb-1">Registro de Remoción Mecánica del Lodo</h5>
    </div>
    <input type="hidden" name="solicitud_lodo_id" value="{{ $solicitud_lodo[0]->id }}">
    <div class="row mt-3 py-2 px-2">
        <table class="w-1/2 text-sm border border-gray-300">
            <thead class="bg-gray-200 text-gray-700">
                <tr>
                    <th class="p-1 text-center border border-gray-300">Tiempo de contacto (min)</th>
                    <th class="p-1 text-center border border-gray-300">DynaFlush-"O"</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="p-1 text-center border border-gray-300">2.5</td>
                    <td class="py-2 px-1 text-center border border-gray-300"><input type="text" class="form-control text-sm"
                        placeholder="Ingrese dato" name="tiempo_1"></td>
                </tr>
                <tr>
                    <td class="p-1 text-center border border-gray-300">5</td>
                    <td class="py-2 px-1 text-center border border-gray-300"><input type="text" class="form-control text-sm"
                        placeholder="Ingrese dato" name="tiempo_2"></td>
                </tr>
                <tr>
                    <td class="p-1 text-center border border-gray-300">7.5</td>
                    <td class="py-2 px-1 text-center border border-gray-300"><input type="text" class="form-control text-sm"
                        placeholder="Ingrese dato" name="tiempo_3"></td>
                </tr>
                <tr>
                    <td class="p-1 text-center border border-gray-300">10</td>
                    <td class="py-2 px-1 text-center border border-gray-300"><input type="text" class="form-control text-sm"
                        placeholder="Ingrese dato" name="tiempo_4"></td>
                </tr>
                <tr>
                    <td class="p-1 text-center border border-gray-300">12.5</td>
                    <td class="py-2 px-1 text-center border border-gray-300"><input type="text" class="form-control text-sm"
                        placeholder="Ingrese dato" name="tiempo_5"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="flex justify-center">
        <x-button type="click" id="btn_submit_remocion_mecanica_lodo"
            style="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-sm">Crear
            Registro</x-button>
    </div>
</form>
@endif
</div>

<script>
    const btn_submit_remocion_mecanica_lodo = document.getElementById('btn_submit_remocion_mecanica_lodo');

    if (btn_submit_remocion_mecanica_lodo) {
        btn_submit_remocion_mecanica_lodo.addEventListener('click', e => {
            e.preventDefault();
            let form = new FormData(document.getElementById('form_mecanica_lodo'))

            confirmAlert().then((confirmed) => {
                if (confirmed) {
                    fetch("{{ route('store_mecanica') }}", {
                            method: 'POST',
                            body: form
                        }).then((response) => response.json())
                        .then((data) => {
                            if (data) {
                                //componentReologiasLodo(data.success_caracterizacion_lodo, data.success_reologias_lodos)
                                componentMecanicaLodo(data.success_mecanica_lodo)
                                document.getElementById('form_mecanica_lodo').style.display = 'none'
                                successAlert('¡Registro Asignado!',
                                    'El registro se asignó correctamente.').then(
                                    (confirmed) => {
                                        // window.location.reload();
                                    })
                                let solicitud_id = {!! json_encode($solicitud->id) !!}
                                // checkGenerateReport(solicitud_id)
                                // .then((data) => {
                                //     if (data.generate_report) {
                                //         // document.querySelector('#tab_g_report_js').classList.remove('d-none')
                                //     }
                                // })
                            }
                        })
                }
            })
        })
    }
</script>










        {{-- Ejemplo tablas dinamicas aditivos 
        <div class="row mt-3 py-2 px-2">
            <table class="w-full text-sm border border-gray-300">
                <thead class="bg-gray-200 text-gray-700">
                    <tr>
                        <th class="p-1 text-center border border-gray-300">Vol.<small>(bbl):</small></th>
                        <th class="p-1 text-center border border-gray-300">50</th>
                        <th class="p-1 text-center border border-gray-300" colspan="2">DynaFlush-"O"</th>
                        <th class="p-1 text-center border border-gray-300">Den.<small>(ppg)</small></th>
                        <th class="p-1 text-center border border-gray-300">14.6</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="py-2 text-center border" colspan="2"></td>
                        <td class="py-2 text-center border">Agua de pozo</td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="text" class="form-control text-sm"
                            placeholder="Ingrese dato" name=""></td>
                        <td class="py-2 px-1 text-center border border-gray-300" colspan="2"><input type="text" class="form-control text-sm"
                            placeholder="Ingrese dato" name=""></td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 text-center border" colspan="2">0</td>
                        <td class="py-2 text-center border">ARF-994</td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="text" class="form-control text-sm"
                            placeholder="Ingrese dato" name=""></td>
                        <td class="py-2 px-1 text-center border border-gray-300" colspan="2"><input type="text" class="form-control text-sm"
                            placeholder="Ingrese dato" name=""></td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 text-center border" colspan="2"></td>
                        <td class="py-2 text-center border">Baritina</td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="text" class="form-control text-sm"
                            placeholder="Ingrese dato" name=""></td>
                        <td class="py-2 px-1 text-center border border-gray-300" colspan="2"><input type="text" class="form-control text-sm"
                            placeholder="Ingrese dato" name=""></td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 text-center border" colspan="2">820</td>
                        <td class="py-2 text-center border">Solvente Mutual</td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="text" class="form-control text-sm"
                            placeholder="Ingrese dato" name=""></td>
                        <td class="py-2 px-1 text-center border border-gray-300" colspan="2"><input type="text" class="form-control text-sm"
                            placeholder="Ingrese dato" name=""></td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 text-center border" colspan="2">10001</td>
                        <td class="py-2 text-center border">Ara-SF2</td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="text" class="form-control text-sm"
                            placeholder="Ingrese dato" name=""></td>
                        <td class="py-2 px-1 text-center border border-gray-300" colspan="2"><input type="text" class="form-control text-sm"
                            placeholder="Ingrese dato" name=""></td>
                    </tr>
                </tbody>
            </table>
        </div> --}}
