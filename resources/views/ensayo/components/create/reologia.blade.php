<div class="mt-4 tab-pane fade show active" id="tab-reologia" role="tabpanel"> <!-- Reología -->

    @if (count($solicitud_lechada[0]->rel_reologia) > 0)
        <div class="mb-2 text-center">
            <h5 class="mb-1">Registro de Reología</h5>
            {{-- <small>(Recuerde que debe seleccionar de todos los intentos una Reología correctamente)</small> --}}
        </div>

        <div class="accordion" id="accordionReologia">
            <div>
                <table class="w-full text-sm border border-gray-300">
                    <thead class="bg-gray-200 text-gray-700">
                        <tr>
                            <th class="border border-gray-300"></th>
                            <th class="p-1 text-center border border-gray-300">RPM</th>
                            <th class="p-1 text-center border border-gray-300">300</th>
                            <th class="p-1 text-center border border-gray-300">200</th>
                            <th class="p-1 text-center border border-gray-300">100</th>
                            <th class="p-1 text-center border border-gray-300">60</th>
                            <th class="p-1 text-center border border-gray-300">30</th>
                            <th class="p-1 text-center border border-gray-300">6</th>
                            <th class="p-1 text-center border border-gray-300">3</th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-50">
                        <tr class="border-b">
                            <td class="py-2 px-1 text-center">T° Ambiente</td>
                            <td class="py-2 px-1 text-center">{{ $solicitud_lechada[0]->rel_reologia[0]->tem_ambiente_rpm . '°C' ? $solicitud_lechada[0]->rel_reologia[0]->tem_ambiente_rpm : '-'}}°C</td>
                            <td class="py-2 px-1 text-center">{{ $solicitud_lechada[0]->rel_reologia[0]->tem_abiente_300 ? $solicitud_lechada[0]->rel_reologia[0]->tem_abiente_300 : '-'}}</td>
                            <td class="py-2 px-1 text-center">{{ $solicitud_lechada[0]->rel_reologia[0]->tem_abiente_200 ? $solicitud_lechada[0]->rel_reologia[0]->tem_abiente_200 : '-'}}</td>
                            <td class="py-2 px-1 text-center">{{ $solicitud_lechada[0]->rel_reologia[0]->tem_abiente_100 ? $solicitud_lechada[0]->rel_reologia[0]->tem_abiente_100 : '-'}}</td>
                            <td class="py-2 px-1 text-center">{{ $solicitud_lechada[0]->rel_reologia[0]->tem_abiente_60 ? $solicitud_lechada[0]->rel_reologia[0]->tem_abiente_60 : '-'}}</td>
                            <td class="py-2 px-1 text-center">{{ $solicitud_lechada[0]->rel_reologia[0]->tem_ambiente_30 ? $solicitud_lechada[0]->rel_reologia[0]->tem_ambiente_30 : '-'}}</td>
                            <td class="py-2 px-1 text-center">{{ $solicitud_lechada[0]->rel_reologia[0]->tem_abiente_6 ? $solicitud_lechada[0]->rel_reologia[0]->tem_abiente_6 : '-'}}</td>
                            <td class="py-2 px-1 text-center">{{ $solicitud_lechada[0]->rel_reologia[0]->tem_abiente_3 ? $solicitud_lechada[0]->rel_reologia[0]->tem_abiente_3 : '-'}}</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 px-1 text-center">T° Ensayo</td>
                            <td class="py-2 px-1 text-center">{{ $solicitud_lechada[0]->rel_reologia[0]->tem_ensayo_rpm . '°C' ? $solicitud_lechada[0]->rel_reologia[0]->tem_ensayo_rpm : '-'}}°C</td>
                            <td class="py-2 px-1 text-center">{{ $solicitud_lechada[0]->rel_reologia[0]->tem_ensayo_300 ? $solicitud_lechada[0]->rel_reologia[0]->tem_ensayo_300 : '-'}}</td>
                            <td class="py-2 px-1 text-center">{{ $solicitud_lechada[0]->rel_reologia[0]->tem_ensayo_200 ? $solicitud_lechada[0]->rel_reologia[0]->tem_ensayo_200 : '-'}}</td>
                            <td class="py-2 px-1 text-center">{{ $solicitud_lechada[0]->rel_reologia[0]->tem_ensayo_100 ? $solicitud_lechada[0]->rel_reologia[0]->tem_ensayo_100 : '-'}}</td>
                            <td class="py-2 px-1 text-center">{{ $solicitud_lechada[0]->rel_reologia[0]->tem_ensayo_60 ? $solicitud_lechada[0]->rel_reologia[0]->tem_ensayo_60 : '-'}}</td>
                            <td class="py-2 px-1 text-center">{{ $solicitud_lechada[0]->rel_reologia[0]->tem_ambiente_30 ? $solicitud_lechada[0]->rel_reologia[0]->tem_ambiente_30 : '-'}}</td>
                            <td class="py-2 px-1 text-center">{{ $solicitud_lechada[0]->rel_reologia[0]->tem_ensayo_6 ? $solicitud_lechada[0]->rel_reologia[0]->tem_ensayo_6 : '-'}}</td>
                            <td class="py-2 px-1 text-center">{{ $solicitud_lechada[0]->rel_reologia[0]->tem_ensayo_3 ? $solicitud_lechada[0]->rel_reologia[0]->tem_ensayo_3 : '-'}}</td>
                        </tr>
                    </tbody>
                </table>
                <table class="w-full text-sm mt-3 border border-gray-300">
                    <thead class="bg-gray-200 text-gray-700">
                        <tr>
                            <th class="p-1 text-center border border-gray-300"></th>
                            <th class="p-1 text-center border border-gray-300">T° Ambiente</th>
                            <th class="p-1 text-center border border-gray-300">T° Ensayo</th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-50">
                        <tr class="border-b">
                            <td class="py-2 px-1 text-center"></td>
                            <td class="py-2 px-1 text-center">{{ $solicitud_lechada[0]->rel_reologia[0]->temp_ambiente ? $solicitud_lechada[0]->rel_reologia[0]->temp_ambiente : '-'}}°C</td>
                            <td class="py-2 px-1 text-center">{{ $solicitud_lechada[0]->rel_reologia[0]->temp_ensayo ? $solicitud_lechada[0]->rel_reologia[0]->temp_ensayo : '-'}}°C</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 px-1 text-center">Punto de Cedencia (lb/100ft2)</td>
                            <td class="py-2 px-1 text-center">{{ $solicitud_lechada[0]->rel_reologia[0]->temp_ambiente_punto_cedencia ? $solicitud_lechada[0]->rel_reologia[0]->temp_ambiente_punto_cedencia : '-'}}</td>
                            <td class="py-2 px-1 text-center">{{ $solicitud_lechada[0]->rel_reologia[0]->temp_ensayo_punto_cedencia ? $solicitud_lechada[0]->rel_reologia[0]->temp_ensayo_punto_cedencia : '-'}}</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 px-1 text-center">Gel 10 segundos</td>
                            <td class="py-2 px-1 text-center">{{ $solicitud_lechada[0]->rel_reologia[0]->temp_ambiente_gel_10_seg ? $solicitud_lechada[0]->rel_reologia[0]->temp_ambiente_gel_10_seg : '-'}}</td>
                            <td class="py-2 px-1 text-center">{{ $solicitud_lechada[0]->rel_reologia[0]->temp_ensayo_gel_10_seg ? $solicitud_lechada[0]->rel_reologia[0]->temp_ensayo_gel_10_seg : '-'}}</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 px-1 text-center">Gel 10 minutos</td>
                            <td class="py-2 px-1 text-center">{{ $solicitud_lechada[0]->rel_reologia[0]->temp_ambiente_gel_10_min ? $solicitud_lechada[0]->rel_reologia[0]->temp_ambiente_gel_10_min : '-'}}</td>
                            <td class="py-2 px-1 text-center">{{ $solicitud_lechada[0]->rel_reologia[0]->temp_ensayo_gel_10_min ? $solicitud_lechada[0]->rel_reologia[0]->temp_ensayo_gel_10_min : '-'}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <hr class="my-3">
    @else
    <div class="accordion" id="accordionReologia"></div>
    @endif

    @if (count($solicitud_lechada[0]->rel_reologia) == 0)
        {{-- <form action="{{ route('store_reologia') }}" method="POST"> --}}
        <form id="form_reologia" method="POST">
            @csrf
            <input type="hidden" name="solicitud_lechada_id" value="{{ $solicitud_lechada[0]->id }}">
            <div class="row mt-3 py-2 px-5">
                <table class="w-full text-sm border border-gray-300">
                    <thead class="bg-gray-200 text-gray-700">
                        <tr>
                            <th class="border border-gray-300"></th>
                            <th class="p-1 text-center border border-gray-300">RPM ºC</th>
                            <th class="p-1 text-center border border-gray-300">300</th>
                            <th class="p-1 text-center border border-gray-300">200</th>
                            <th class="p-1 text-center border border-gray-300">100</th>
                            <th class="p-1 text-center border border-gray-300">60</th>
                            <th class="p-1 text-center border border-gray-300">30</th>
                            <th class="p-1 text-center border border-gray-300">6</th>
                            <th class="p-1 text-center border border-gray-300">3</th>
                        </tr>
                    </thead>

                    <tbody class="bg-gray-50">
                        <tr class="border-b">
                            <td class="py-2 px-1">Tº Ambiente</td>
                            <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Cº" name="tem_ambiente_rpm"></td>
                            <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese un resultado" name="tem_ambiente_300"></td>
                            <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese un resultado" name="tem_ambiente_200"></td>
                            <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese un resultado" name="tem_ambiente_100"></td>
                            <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese un resultado" name="tem_ambiente_60"></td>
                            <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese un resultado" name="tem_ambiente_30"></td>
                            <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese un resultado" name="tem_ambiente_6"></td>
                            <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese un resultado" name="tem_ambiente_3"></td>
                        </tr>

                        <tr class="border-b">
                            <td class="py-2 px-1">Tº Ensayo</td>
                            <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Cº" name="tem_ensayo_rpm"></td>
                            <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese un resultado" name="tem_ensayo_300"></td>
                            <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese un resultado" name="tem_ensayo_200"></td>
                            <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese un resultado" name="tem_ensayo_100"></td>
                            <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese un resultado" name="tem_ensayo_60"></td>
                            <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese un resultado" name="tem_ensayo_30"></td>
                            <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese un resultado" name="tem_ensayo_6"></td>
                            <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese un resultado" name="tem_ensayo_3"></td>
                        </tr>
                    </tbody>
                </table>

                <table class="w-full text-sm mt-3 border border-gray-300">
                    <thead class="bg-gray-200 text-gray-700">
                        <tr>
                            <th class="p-1 text-center border border-gray-300"></th>
                            <th class="p-1 text-center border border-gray-300">Tº Ambiente</th>
                            <th class="p-1 text-center border border-gray-300">Tº Ensayo</th>
                        </tr>
                    </thead>

                    <tbody class="bg-gray-50">
                        <tr class="border-b">
                            <td class="py-2 px-1 text-center"></td>
                            <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese un ºC" name="temp_ambiente"></td>
                            <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese un ºC" name="temp_ensayo"></td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 px-1 text-center">Punto de Cedencia (lb/100ft2)
                            </td>
                            <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese un resultado" name="temp_ambiente_punto_cedencia"></td>
                            <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese un resultado" name="temp_ensayo_punto_cedencia"></td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 px-1 text-center">Gel 10 segundos</td>
                            <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese un resultado" name="temp_ambiente_gel_10_seg"></td>
                            <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese un resultado" name="temp_ensayo_gel_10_seg"></td>
                        </tr>
                        <tr>
                            <td class="py-2 px-1 text-center">Gel 10 minutos</td>
                            <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese un resultado" name="temp_ambiente_gel_10_min"></td>
                            <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese un resultado" name="temp_ensayo_gel_10_min"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="flex justify-center">
                <x-button type="click" id="btn_submit_reologia"
                    style="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-sm">Crear
                    Registro</x-button>
            </div>
        </form>
    @endif

</div> <!-- Reología -->

<script>
    const btn_submit_reologia = document.getElementById('btn_submit_reologia');

    btn_submit_reologia.addEventListener('click', e => {
        e.preventDefault();
        let form = new FormData(document.getElementById('form_reologia'))

        confirmAlert().then((confirmed) => {
            if (confirmed) {
                fetch("{{ route('store_reologia') }}", {
                        method: 'POST',
                        body: form
                    }).then((response) => response.json())
                    .then((data) => {
                        if (data) {
                            componentReologia(data.success_reologia)
                            document.getElementById('form_reologia').style.display = 'none'
                            console.log(data);
                            successAlert('¡Registro Asignado!',
                                'El registro se asignó correctamente.').then(
                                (confirmed) => {
                                    // window.location.reload();
                                })
                        }
                    })
            }
        })
        // alert('Cargando reologia..')
    })
</script>
