<ul role="tablist" aria-owns="nav-tab1 nav-tab2 nav-tab3 nav-tab4" class="nav mt-4 nav-tabs" id="nav-tab-with-nested-tabs"
    style="z-index: 999">
    <li class="nav-item w-full md:w-auto text-xs xl:text-sm" role="presentation">
        <a class="nav-link nav_tab_mod d-flex items-center gap-2 justify-center active text-violet-700"
            aria-current="page" id="nav-tab1" href="#tab-reologia" data-bs-toggle="tab" data-bs-target="#tab-reologia"
            role="tab" aria-controls="tab-reologia" aria-selected="true">
            <div
                class="w-4 h-4 xl:w-6 xl:h-6 bg-gray-300 dark:bg-gray-700 rounded-full flex justify-center text-white items-center">
                <span>
                    1
                </span>
            </div>
            Reología
        </a>
    </li>
    <li class="nav-item w-full md:w-auto text-xs xl:text-sm" role="presentation">
        <a class="nav-link nav_tab_mod d-flex items-center justify-center gap-2 text-violet-700" id="nav-tab2"
            data-bs-toggle="tab" href="#tab-perdida_filtrado" data-bs-target="#tab-perdida_filtrado" role="tab"
            aria-controls="tab-perdida_filtrado" aria-selected="false">
            <div
                class="w-4 h-4 xl:w-6 xl:h-6 bg-gray-300 dark:bg-gray-700 rounded-full flex justify-center text-white items-center">
                <span>
                    2
                </span>
            </div>
            Pérdida de Filtrado
        </a>
    </li>
    <li class="nav-item w-full md:w-auto text-xs xl:text-sm" role="presentation">
        <a class="nav-link nav_tab_mod d-flex items-center justify-center gap-2 text-violet-700" id="nav-tab2"
            data-bs-toggle="tab" href="#tab-aditivos" data-bs-target="#tab-aditivos" role="tab"
            aria-controls="tab-aditivos" aria-selected="false">
            <div
                class="w-4 h-4 xl:w-6 xl:h-6 bg-gray-300 dark:bg-gray-700 rounded-full flex justify-center text-white items-center">
                <span>
                    3
                </span>
            </div>
            Tiempo de Bombeabilidad
        </a>
    </li>
    <li class="nav-item w-full md:w-auto text-xs xl:text-sm" role="presentation">
        <a class="nav-link nav_tab_mod d-flex items-center justify-center gap-2 text-violet-700" id="nav-tab2"
            data-bs-toggle="tab" href="#tab-requerimientos_ensayo" data-bs-target="#tab-requerimientos_ensayo"
            role="tab" aria-controls="tab-requerimientos_ensayo" aria-selected="false">
            <div
                class="w-4 h-4 xl:w-6 xl:h-6 bg-gray-300 dark:bg-gray-700 rounded-full flex justify-center text-white items-center">
                <span>
                    4
                </span>
            </div>
            UCA - Resistencia a la Compresión
        </a>
    </li>
    <li class="nav-item w-full md:w-auto text-xs xl:text-sm" role="presentation">
        <a class="nav-link nav_tab_mod d-flex items-center justify-center gap-2 text-violet-700" id="nav-tab2"
            data-bs-toggle="tab" href="#tab-cierre" data-bs-target="#tab-cierre" role="tab"
            aria-controls="tab-cierre" aria-selected="false">
            <div
                class="w-4 h-4 xl:w-6 xl:h-6 bg-gray-300 dark:bg-gray-700 rounded-full flex justify-center text-white items-center">
                <span>
                    5
                </span>
            </div>
            Agua Libre
        </a>
    </li>

    <li class="nav-item w-full md:w-auto text-xs xl:text-sm" role="presentation">
        <a class="nav-link nav_tab_mod d-flex items-center justify-center gap-2 text-violet-700" id="nav-tab2"
            data-bs-toggle="tab" href="#tab-cierre" data-bs-target="#tab-cierre" role="tab"
            aria-controls="tab-cierre" aria-selected="false">
            <div
                class="w-4 h-4 xl:w-6 xl:h-6 bg-gray-300 dark:bg-gray-700 rounded-full flex justify-center text-white items-center">
                <span>
                    6
                </span>
            </div>
            Mezclabilidad
        </a>
    </li>
</ul>

{{-- <form action="{{ route('ensayo.store') }}" method="POST"> --}}
<div class="tab-content" id="nav-tabs-content">
    <input type="hidden" value="{{ $solicitud->id }}" name="solicitud_id">

    <div class="mt-4 tab-pane fade show active" id="tab-reologia" role="tabpanel"> <!-- Reología -->

        @if ($solicitud_lechada[0]->rel_reologia)
            <div class="mb-2 text-center">
                <h5 class="mb-1">Registros de Reologías</h5>
                <small>(Recuerde que debe seleccionar de todos los intentos una Reología correctamente)</small>
            </div>
            <div class="accordion" id="accordionExample">
                @php
                    $i = 1;
                    $form_reologia = true;
                @endphp
                @foreach ($solicitud_lechada[0]->rel_reologia as $reologia)
                    @php
                        if ($reologia->selected == 1) {
                            $form_reologia = false;
                        }
                    @endphp

                    <div class="accordion-item">
                        <h2 class="accordion-header {{ $reologia->selected ? 'bg-green-50' : '' }}">
                            <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse"
                                data-bs-target="#reologia_{{ $reologia->id }}" aria-expanded="false"
                                aria-controls="reologia_{{ $reologia->id }}">
                                Reología - Intento Nº{{ $i }}
                            </button>
                        </h2>
                        <div id="reologia_{{ $reologia->id }}" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body overflow-auto">
                                <div class="flex justify-between items-center mb-3">
                                    <p class="flex items-center text-gray-700 mb-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                                        </svg>
                                        Registro creado por {{ $reologia->user->nombre }}
                                        {{ $reologia->user->apellido }} el día {{ $reologia->created_at->format('d') }}
                                        de {{ $reologia->created_at->format('M') }},
                                        {{ $reologia->created_at->format('Y') }} a las
                                        {{ $reologia->created_at->format('H:i') }} hs
                                    </p>

                                    <div class="flex items-center gap-3">
                                        <x-button
                                            style="w-full md:w-auto bg-red-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-sm flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"
                                                class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                            </svg>

                                            Eliminar
                                        </x-button>
                                        {{-- <form action="{{ route('ensayo.assigned') }}" method="POST"> --}}
                                        <form id="form_assignment_{{ $reologia->id }}">
                                            @csrf
                                            <input type="hidden" name="type_of_assignment" value="reologia">
                                            <input type="hidden" name="id_assignment" value="{{ $reologia->id }}">
                                            <x-button data-form="form_assignment_{{ $reologia->id }}"
                                                style="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-sm flex items-center gap-2 btnSubmitAssignment">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"
                                                    class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="m4.5 12.75 6 6 9-13.5" />
                                                </svg>
                                                Seleccionar Reología
                                            </x-button>
                                        </form>
                                    </div>
                                </div>
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
                                            <td class="py-2 px-1">Tº Ambiente</td>
                                            <td class="py-2 px-1 text-center">
                                                {{ $reologia->tem_ambiente_rpm ? $reologia->tem_ambiente_rpm . 'ºC' : '-' }}
                                            </td>
                                            <td class="py-2 px-1 text-center">
                                                {{ $reologia->tem_ambiente_300 ? $reologia->tem_ambiente_300 : '-' }}
                                            </td>
                                            <td class="py-2 px-1 text-center">
                                                {{ $reologia->tem_ambiente_200 ? $reologia->tem_ambiente_200 : '-' }}
                                            </td>
                                            <td class="py-2 px-1 text-center">
                                                {{ $reologia->tem_ambiente_100 ? $reologia->tem_ambiente_100 : '-' }}
                                            </td>
                                            <td class="py-2 px-1 text-center">
                                                {{ $reologia->tem_ambiente_60 ? $reologia->tem_ambiente_60 : '-' }}
                                            </td>
                                            <td class="py-2 px-1 text-center">
                                                {{ $reologia->tem_ambiente_30 ? $reologia->tem_ambiente_30 : '-' }}
                                            </td>
                                            <td class="py-2 px-1 text-center">
                                                {{ $reologia->tem_ambiente_6 ? $reologia->tem_ambiente_6 : '-' }}</td>
                                            <td class="py-2 px-1 text-center">
                                                {{ $reologia->tem_ambiente_3 ? $reologia->tem_ambiente_3 : '-' }}</td>
                                        </tr>

                                        <tr class="border-b">
                                            <td class="py-2 px-1">Tº Ensayo</td>
                                            <td class="py-2 px-1 text-center">
                                                {{ $reologia->tem_ensayo_rpm ? $reologia->tem_ensayo_rpm . 'ºC' : '-' }}
                                            </td>
                                            <td class="py-2 px-1 text-center">
                                                {{ $reologia->tem_ensayo_300 ? $reologia->tem_ensayo_300 : '-' }}</td>
                                            <td class="py-2 px-1 text-center">
                                                {{ $reologia->tem_ensayo_200 ? $reologia->tem_ensayo_200 : '-' }}</td>
                                            <td class="py-2 px-1 text-center">
                                                {{ $reologia->tem_ensayo_100 ? $reologia->tem_ensayo_100 : '-' }}</td>
                                            <td class="py-2 px-1 text-center">
                                                {{ $reologia->tem_ensayo_60 ? $reologia->tem_ensayo_60 : '-' }}</td>
                                            <td class="py-2 px-1 text-center">
                                                {{ $reologia->tem_ensayo_30 ? $reologia->tem_ensayo_30 : '-' }}</td>
                                            <td class="py-2 px-1 text-center">
                                                {{ $reologia->tem_ensayo_6 ? $reologia->tem_ensayo_6 : '-' }}</td>
                                            <td class="py-2 px-1 text-center">
                                                {{ $reologia->tem_ensayo_3 ? $reologia->tem_ensayo_3 : '-' }}</td>
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
                                            <td class="py-2 px-1 text-center">
                                                {{ $reologia->temp_ambiente ? $reologia->temp_ambiente . 'ºC' : '-' }}
                                            </td>
                                            <td class="py-2 px-1 text-center">
                                                {{ $reologia->temp_ensayo ? $reologia->temp_ensayo . 'ºC' : '-' }}</td>
                                        </tr>
                                        <tr class="border-b">
                                            <td class="py-2 px-1 text-center">Punto de Cedencia (lb/100ft2)
                                            </td>
                                            <td class="py-2 px-1 text-center">
                                                {{ $reologia->temp_ambiente_punto_cedencia ? $reologia->temp_ambiente_punto_cedencia : '-' }}
                                            </td>
                                            <td class="py-2 px-1 text-center">
                                                {{ $reologia->temp_ensayo_punto_cedencia ? $reologia->temp_ensayo_punto_cedencia : '-' }}
                                            </td>
                                        </tr>
                                        <tr class="border-b">
                                            <td class="py-2 px-1 text-center">Gel 10 segundos</td>
                                            <td class="py-2 px-1 text-center">
                                                {{ $reologia->temp_ambiente_gel_10_seg ? $reologia->temp_ambiente_gel_10_seg : '-' }}
                                            </td>
                                            <td class="py-2 px-1 text-center">
                                                {{ $reologia->temp_ensayo_gel_10_seg ? $reologia->temp_ensayo_gel_10_seg : '-' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 px-1 text-center">Gel 10 minutos</td>
                                            <td class="py-2 px-1 text-center">
                                                {{ $reologia->temp_ambiente_gel_10_min ? $reologia->temp_ambiente_gel_10_min : '-' }}
                                            </td>
                                            <td class="py-2 px-1 text-center">
                                                {{ $reologia->temp_ensayo_gel_10_min ? $reologia->temp_ensayo_gel_10_min : '-' }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    @php
                        $i++;
                    @endphp
                @endforeach
            </div>

            <hr class="my-3">
        @endif

        @if ($form_reologia)
            <form action="{{ route('store_reologia') }}" method="POST">
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
                    <x-button type="submit"
                        style="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-sm">Crear
                        Registro</x-button>
                </div>
            </form>
        @endif

    </div> <!-- Reología -->

    <div class="mt-4 tab-pane fade" id="tab-perdida_filtrado" role="tabpanel"
        aria-labelledby="nav-tab_condiciones_test"> <!-- Pérdida de Filtrado -->
        @if ($solicitud_lechada[0]->rel_perdida_filtrado)
            <div class="mb-2 text-center">
                <h5 class="mb-1">Registros de Pérdidas de Filtrado</h5>
            </div>
            <div class="accordion" id="accordionPerdidaFiltrado">
                @php
                    $i = 1;
                    $form_perdida = true;
                @endphp

                @foreach ($solicitud_lechada[0]->rel_perdida_filtrado as $perdida)
                    @php
                        if ($perdida->selected == 1) {
                            $form_perdida = false;
                        }
                    @endphp
                    <div class="accordion-item">
                        <h2 class="accordion-header {{ $perdida->selected ? 'bg-green-50' : '' }}">
                            <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse"
                                data-bs-target="#perdida_filtrado_{{ $perdida->id }}" aria-expanded="false"
                                aria-controls="perdida_filtrado_{{ $perdida->id }}">
                                Pérdida de Filtrado - Intento Nº{{ $i }}
                            </button>
                        </h2>
                        <div id="perdida_filtrado_{{ $perdida->id }}" class="accordion-collapse collapse"
                            data-bs-parent="#accordionPerdidaFiltrado">
                            <div class="accordion-body overflow-auto">
                                <div class="flex justify-between items-center mb-3">
                                    <p class="flex items-center text-gray-700 mb-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                                        </svg>
                                        Registro creado por {{ $perdida->user->nombre }}
                                        {{ $perdida->user->apellido }} el día
                                        {{ $perdida->created_at->format('d') }}
                                        de {{ $perdida->created_at->format('M') }},
                                        {{ $perdida->created_at->format('Y') }} a las
                                        {{ $perdida->created_at->format('H:i') }} hs
                                    </p>

                                    <div class="flex items-center gap-3">
                                        <x-button
                                            style="w-full md:w-auto bg-red-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-sm flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"
                                                class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                            </svg>

                                            Eliminar
                                        </x-button>
                                        {{-- <form action="{{ route('ensayo.assigned') }}" method="POST"> --}}
                                        <form id="form_assignment_{{ $reologia->id }}">
                                            @csrf
                                            <input type="hidden" name="type_of_assignment" value="reologia">
                                            <input type="hidden" name="id_assignment" value="{{ $reologia->id }}">
                                            <x-button data-form="form_assignment_{{ $reologia->id }}"
                                                style="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-sm flex items-center gap-2 btnSubmitAssignment">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"
                                                    class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="m4.5 12.75 6 6 9-13.5" />
                                                </svg>
                                                Seleccionar Pérdida de Filtrado
                                            </x-button>
                                        </form>
                                    </div>
                                </div>

                                <div class="grid grid-cols-3 gap-3 my-3">
                                    <div>
                                        <label
                                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Temperatura
                                            °C</label>
                                        <input type="number" value="{{ $perdida->temperatura }}"
                                            class="form-control text-sm p-2" placeholder="Temperatura °C"
                                            step=".01" readonly>
                                    </div>
                                    <div>
                                        <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fluido
                                            Acumulado mL</label>
                                        <input type="number" class="form-control text-sm p-2"
                                            placeholder="Ingrese el fluido acumulado"
                                            value="{{ $perdida->fluido_acumulado }}" step=".01" readonly>
                                    </div>
                                    <div>
                                        <label for="perdida_filtrado_api"
                                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Filtrado API
                                            ml/30min</label>
                                        <input type="number" name="perdida_filtrado_api" id="perdida_filtrado_api"
                                            class="form-control text-sm p-2" placeholder="Filtrado API"
                                            value="{{ $perdida->filtrado_api }}" step=".01" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php
                        $i++;
                    @endphp
                @endforeach
            </div>

            <hr class="my-3">

        @endif

        @if ($form_perdida)
            <form action="{{ route('store_perdida') }}" class="mt-3" method="POST">
                @csrf
                <input type="hidden" name="solicitud_lechada_id" value="{{ $solicitud_lechada[0]->id }}">

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
                            class="form-control text-sm p-2" placeholder="Ingrese el fluido acumulado"
                            step=".01">
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
                    <x-button type="submit"
                        style="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-sm">Crear
                        Registro</x-button>
                </div>
            </form>
        @endif

    </div> <!-- Pérdida de Filtrado -->

    <div class="mt-4 tab-pane fade" id="tab-aditivos" role="tabpanel" aria-labelledby="nav-tab_aditivos">
        <!-- Tiempo de Bombeabilidad -->
        <form action="{{ route('store_bombeabilidad') }}" class="mt-3" method="POST">
            @csrf
            <input type="hidden" name="solicitud_lechada_id" value="{{ $solicitud_lechada[0]->id }}">

            <div class="grid grid-cols-3 gap-3 mb-3">
                <div>
                    <label for="bombeabilidad_consistometro"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Consistómetro N°</label>
                    <input type="text" name="bombeabilidad_consistometro" id="bombeabilidad_consistometro"
                        class="form-control text-sm p-2" placeholder="Consistómetro N°">
                </div>

                <div>
                    <label for="bombeabilidad_acondicionamiento"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Tiempo de Acondicionamiento</label>
                    <input type="number" name="bombeabilidad_acondicionamiento" id="bombeabilidad_acondicionamiento"
                        class="form-control text-sm p-2" placeholder="Tiempo..">
                </div>

                <div>
                    <label for="bombeabilidad_planilla"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Planilla N°</label>
                    <input type="number" name="bombeabilidad_planilla" id="bombeabilidad_planilla"
                        class="form-control text-sm p-2" placeholder="Ingrese el N° de Planilla">
                </div>

                <div>
                    <label for="bombeabilidad_gradiente"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Gradiente °F/100ft</label>
                    <input type="number" name="bombeabilidad_gradiente" id="bombeabilidad_gradiente"
                        class="form-control text-sm p-2" placeholder="°F / 100 ft" step=".01">
                </div>

                <div>
                    <label for="bombeabilidad_temperatura"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Temperatura °C</label>
                    <input type="number" name="bombeabilidad_temperatura" id="bombeabilidad_temperatura"
                        class="form-control text-sm p-2" placeholder="°C" step=".01">
                </div>

                <div>
                    <label for="bombeabilidad_presion"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Presión (psi)</label>
                    <input type="number" name="bombeabilidad_presion" id="bombeabilidad_presion"
                        class="form-control text-sm p-2" placeholder="(psi)" step=".01">
                </div>

                <div>
                    <label for="bombeabilidad_40_bc"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">40 Bc (hh:mm)</label>
                    <input type="time" name="bombeabilidad_40_bc" id="bombeabilidad_40_bc"
                        class="form-control text-sm p-2" placeholder="hh:mm">
                </div>

                <div>
                    <label for="bombeabilidad_70_bc"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">70 Bc (hh:mm)</label>
                    <input type="time" name="bombeabilidad_70_bc" id="bombeabilidad_70_bc"
                        class="form-control text-sm p-2" placeholder="hh:mm">
                </div>

                <div>
                    <label for="bombeabilidad_100_bc"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">100 Bc (hh:mm)</label>
                    <input type="time" name="bombeabilidad_100_bc" id="bombeabilidad_100_bc"
                        class="form-control text-sm p-2" placeholder="hh:mm">
                </div>
               
            </div>
            <div class="flex justify-center">
                <x-button type="submit"
                    style="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-sm">Crear
                    Registro</x-button>
            </div>
        </form>

    </div> <!-- Tiempo de Bombeabilidad -->

    <div class="mt-4 tab-pane fade" id="tab-requerimientos_ensayo" role="tabpanel"
        aria-labelledby="nav-tab_requerimientos_ensayo"> <!-- Requerimientos de Ensayo -->
        <span class="ms-1 mb-0 font-light tracking-wide dark:text-gray-300">Tests Requeridos</span>
        <hr class="ms-1 mt-1 dark:bg-gray-500">

        <div id="contenedor_tests_requeridos" class="mt-2"></div>

        <div class="text-center">
            <button class="bg-gray-300 rounded-full p-2 border-1 border-gray-300" id="btnAddTest"><svg
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
            </button>
        </div>

    </div>

    <div class="mt-4 tab-pane fade" id="tab-cierre" role="tabpanel">
        <div class="flex flex-col text-center justify-center w-1/4 mx-auto">
            <span class="text-sm mb-2 dark:text-gray-300">Una vez completado todos los campos del ensayo, dar por
                finalizado el
                mismo.</span>
            <button data-bs-toggle="modal" data-bs-target="#modalSubmitEnsayo"
                class="text-sm bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold"
                onclick="event.preventDefault()">
                Crear Ensayo
            </button>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalSubmitEnsayo" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header py-2 px-3">
                Confirmación de carga de ensayo
            </div>
            <div class="modal-body text-center">
                <p class="font-semibold tracking-wide mb-2">¿Confirma crear el ensayo?</p>
            </div>
            <div class="modal-footer p-2">
                <button
                    class=" rounded flex items-center gap-1 p-2 hover:bg-orange-200 text-orange-400 transition-all duration-300 text-sm"
                    data-bs-dismiss="modal" onclick="event.preventDefault()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                    Cancelar</button>
                <button type="submit" id="btnSendEnsayoSubmit"
                    class="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-sm">Confirmar</button>
            </div>
        </div>
    </div>
</div>
{{-- </form> --}}

<script>
    const btnSubmitAssignment = document.querySelectorAll('.btnSubmitAssignment');


    for (let i = 0; i < btnSubmitAssignment.length; i++) {
        btnSubmitAssignment[i].addEventListener('click', e => {
            let form = new FormData(document.getElementById(btnSubmitAssignment[i].getAttribute('data-form')))

            confirmAlert().then((confirmed) => {
                if (confirmed) {
                    fetch("{{ route('ensayo.assigned') }}", {
                            method: 'POST',
                            body: form
                        }).then((response) => response.json())
                        .then((data) => {
                            if (data) {
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
        });
    }
</script>

<!-- Cartel de carga mientras se carga el formulario del Ensayo -->
<script>
    const btnSendEnsayoSubmit = document.getElementById('btnSendEnsayoSubmit');
    btnSendEnsayoSubmit.addEventListener('click', e => {
        loadingAlert();
    })
</script>

<!-- Cartel que muestra que el registro fue creado correctamente cuando se hace el submit -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        @if ($message = session('success_reologia'))
            successAlert('¡Registro de Reología Creada Correctamente!', 'La Reología se creó correctamente')
                .then(
                    (confirmed) => {
                        // window.location.reload();
                    })
        @endif
        @if ($message = session('success_perdida_filtrado'))
            successAlert('¡Registro de Pérdida de Filtrado Creada Correctamente!', '')
                .then(
                    (confirmed) => {
                        // window.location.reload();
                    })
        @endif
    })
</script>
