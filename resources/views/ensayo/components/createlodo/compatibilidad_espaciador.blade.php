<div class="mt-4 tab-pane fade" id="tab-compatibilidad_espaciador" role="tabpanel" aria-labelledby="nav-tab_test">
    <form id="form_compatibilidad_lodo" method="POST">
        @csrf
        <div class="mb-2 text-center">
            <h5 class="mb-1">Compatibilidad colchón mecánico y lodo</h5>
        </div>
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
        </div>
        <div class="flex">
            <div class="w-1/2 p-2">
                <div class="row mt-3 py-2 px-2">
                    <table class="w-full text-sm border border-gray-300">
                        <thead class="bg-gray-200 text-gray-700">
                            <tr>
                                <th class="p-1 text-center border border-gray-300" colspan="2">% de Fluido</th>
                                <th class="p-1 text-center border border-gray-300">VP</th>
                                <th class="p-1 text-center border border-gray-300">VY</th>
                            </tr>
                            <tr>
                                <th class="p-1 text-center border border-gray-300">Lodo</th>
                                <th class="p-1 text-center border border-gray-300">Colchón</th>
                                <th class="p-1 text-center border border-gray-300">(cp)</th>
                                <th class="p-1 text-center border border-gray-300">(lb/100ft2)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-2 text-center border">100</td>
                                <td class="py-2 text-center border">0</td>
                                <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese dato" name=""></td>
                                <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese dato" name=""></td>
                            </tr>
                            <tr>
                                <td class="py-2 text-center border">75</td>
                                <td class="py-2 text-center border">25</td>
                                <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese dato" name=""></td>
                                <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese dato" name=""></td>
                            </tr>
                            <tr>
                                <td class="py-2 text-center border">50</td>
                                <td class="py-2 text-center border">50</td>
                                <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese dato" name=""></td>
                                <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese dato" name=""></td>
                            </tr>
                            <tr>
                                <td class="py-2 text-center border">25</td>
                                <td class="py-2 text-center border">75</td>
                                <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese dato" name=""></td>
                                <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese dato" name=""></td>
                            </tr>
                            <tr>
                                <td class="py-2 text-center border">0</td>
                                <td class="py-2 text-center border">100</td>
                                <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese dato" name=""></td>
                                <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese dato" name=""></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="w-1/2 p-2">
                <div class="row mt-3 py-2 px-2">
                    <table class="w-full text-sm border border-gray-300">
                        <thead class="bg-gray-200 text-gray-700">
                            <tr>
                                <th class="p-1 text-center border border-gray-300" colspan="2">% de Fluido</th>
                                <th class="p-1 text-center border border-gray-300">Gel 10</th>
                                <th class="p-1 text-center border border-gray-300">Gel 10</th>
                            </tr>
                            <tr>
                                <th class="p-1 text-center border border-gray-300">Lodo</th>
                                <th class="p-1 text-center border border-gray-300">Colchón</th>
                                <th class="p-1 text-center border border-gray-300">(Seg)</th>
                                <th class="p-1 text-center border border-gray-300">(Min)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-2 text-center border">100</td>
                                <td class="py-2 text-center border">0</td>
                                <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese dato" name=""></td>
                                <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese dato" name=""></td>
                            </tr>
                            <tr>
                                <td class="py-2 text-center border">75</td>
                                <td class="py-2 text-center border">25</td>
                                <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese dato" name=""></td>
                                <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese dato" name=""></td>
                            </tr>
                            <tr>
                                <td class="py-2 text-center border">50</td>
                                <td class="py-2 text-center border">50</td>
                                <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese dato" name=""></td>
                                <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese dato" name=""></td>
                            </tr>
                            <tr>
                                <td class="py-2 text-center border">25</td>
                                <td class="py-2 text-center border">75</td>
                                <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese dato" name=""></td>
                                <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese dato" name=""></td>
                            </tr>
                            <tr>
                                <td class="py-2 text-center border">0</td>
                                <td class="py-2 text-center border">100</td>
                                <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese dato" name=""></td>
                                <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese dato" name=""></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="flex justify-center">
            <x-button type="click" id="btn_submit_compatibilidad_lodo"
                style="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-sm">Crear
                Registro</x-button>
        </div>
    </form>
</div>
<script>
    const btn_submit_reologia_lodo = document.getElementById('btn_submit_reologia_lodo');

    if (btn_submit_reologia_lodo) {
        btn_submit_reologia_lodo.addEventListener('click', e => {
            e.preventDefault();
            let form = new FormData(document.getElementById('form_compatibilidad_lodo'))

            // confirmAlert().then((confirmed) => {
            //     if (confirmed) {
            //         fetch("{{ route('store_lodo') }}", {
            //                 method: 'POST',
            //                 body: form
            //             }).then((response) => response.json())
            //             .then((data) => {
            //                 if (data) {
            //                     //componentReologiasLodo(data.success_caracterizacion_lodo, data.success_reologias_lodos)
            //                     //componentReologiasLodo(data.success_caracterizacion_lodo)
            //                     document.getElementById('form_reologia_lodo').style.display = 'none'
            //                     successAlert('¡Registro Asignado!',
            //                         'El registro se asignó correctamente.').then(
            //                         (confirmed) => {
            //                             // window.location.reload();
            //                         })
            //                     let solicitud_id = {!! json_encode($solicitud->id) !!}
            //                     // checkGenerateReport(solicitud_id)
            //                     // .then((data) => {
            //                     //     if (data.generate_report) {
            //                     //         // document.querySelector('#tab_g_report_js').classList.remove('d-none')
            //                     //     }
            //                     // })
            //                 }
            //             })
            //     }
            // })
        })
    }
</script>
