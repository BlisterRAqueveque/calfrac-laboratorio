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
            data-bs-toggle="tab" href="#tab-condiciones_test" data-bs-target="#tab-condiciones_test" role="tab"
            aria-controls="tab-condiciones_test" aria-selected="false">
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
                                        {{ $reologia->created_at->format('h:i') }} hs
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

    <div class="mt-4 tab-pane fade" id="tab-condiciones_test" role="tabpanel"
        aria-labelledby="nav-tab_condiciones_test"> <!-- Condiciones del Test -->

        <span class="ms-1 mb-0 font-light tracking-wide dark:text-gray-300">Datos del Pozo</span>
        <hr class="mt-1 w-auto dark:bg-gray-500">

        <div class="grid gap-2 grid-cols-1 md:grid-cols-5 mt-3">

            <div class="col-span-1 my-2">
                <label for="open_hole"
                    class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">Open
                    Hole</label>
                <input type="text"
                    class="form-control sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none"
                    name="open_hole" id="open_hole" placeholder="Open Hole">
            </div>

            <div class="col-span-1 my-2">
                <label for="densidad_lodo"
                    class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">Densidad
                    del Lodo <small>(lbm/gal)</small></label>
                <input type="number"
                    class="form-control sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none"
                    name="densidad_lodo" id="densidad_lodo" placeholder="Ingrese la densidad del lodo">
            </div>

            <div class="col-span-1 my-2">
                <label for="md"
                    class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">MD
                    <small>(ft)</small></label>
                <input type="number"
                    class="form-control sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none"
                    name="md" id="md" placeholder="MD">
            </div>

            <div class="col-span-1 my-2">
                <label for="tvd"
                    class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">TVD
                    <small>(ft)</small></label>
                <input type="number"
                    class="form-control sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none"
                    name="tvd" id="tvd" placeholder="TVD">
            </div>

            <div class="col-span-1 my-2">
                <label for="proveedor_lodo"
                    class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">Proveedor
                    del Lodo</label>
                <select name="proveedor_lodo" id="proveedor_lodo"
                    class="form-select sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none">
                    <option value="">-- Seleccione --</option>
                </select>
            </div>

        </div>

        <span class="ms-1 mb-0 font-light tracking-wide dark:text-gray-300">Datos de la Temperatura</span>
        <hr class="mt-1 w-auto dark:bg-gray-500">

        <div class="grid gap-2 grid-cols-1 md:grid-cols-3 mt-3">

            <div class="col-span-1 my-2">
                <label for="bhse"
                    class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">BHSE
                    <small>(degf)</small></label>
                <input type="number"
                    class="form-control sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none"
                    name="bhse" id="bhse" placeholder="BHSE">
            </div>

            <div class="col-span-1 my-2">
                <label for="bhct"
                    class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">BHCT
                    <small>(degf)</small></label>
                <input type="number"
                    class="form-control sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none"
                    name="bhct" id="bhct" placeholder="BHCT">
            </div>

            <div class="col-span-1 my-2">
                <label for="grado_temperatura"
                    class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">Grad
                    Tº</label>
                <input type="number"
                    class="form-control sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none"
                    name="grado_temperatura" id="grado_temperatura" placeholder="Grad">
            </div>
        </div>

        <span class="ms-1 mb-0 font-light tracking-wide dark:text-gray-300">Datos Complementarios</span>
        <hr class="mt-1 w-auto dark:bg-gray-500">

        <div class="grid gap-2 grid-cols-1 md:grid-cols-5 mt-3">
            <div class="col-span-1 my-2">
                <label for="volumen"
                    class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">Volumen</label>
                <input type="number"
                    class="form-control sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none"
                    name="volumen" id="volumen" placeholder="Volumen">
            </div>

            <div class="col-span-1 my-2">
                <label for="caudal"
                    class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">Caudal</label>
                <input type="number"
                    class="form-control sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none"
                    name="caudal" id="caudal" placeholder="Caudal">
            </div>

            <div class="col-span-1 my-2">
                <label for="tope_lechada"
                    class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">Tope
                    de
                    Lechada</label>
                <input type="number"
                    class="form-control sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none"
                    name="tope_lechada" id="tope_lechada" placeholder="Tope de Lechada">
            </div>

            <div class="col-span-1 my-2">
                <label for="base_lechada"
                    class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">Base
                    de
                    Lechada</label>
                <input type="number"
                    class="form-control sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none"
                    name="base_lechada" id="base_lechada" placeholder="Base de Lechada">
            </div>

            <div class="col-span-1 my-2">
                <label for="densidad_lechada"
                    class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">Densidad
                    de Lechada</label>
                <input type="number"
                    class="form-control sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none"
                    name="densidad_lechada" id="densidad_lechada" placeholder="Densidad de Lechada">
            </div>

            <div class="col-span-5 my-2">
                <label for="comentario"
                    class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">Comentarios
                    /
                    Observaciones</label>
                <textarea name="comentario" id="comentario" cols="30" rows="4"
                    class="form-control sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none"
                    placeholder="Ingrese un breve comentario - Máximo 200 caracteres"></textarea>
            </div>
        </div>
    </div> <!-- Condiciones del Test -->

    <div class="mt-4 tab-pane fade" id="tab-aditivos" role="tabpanel" aria-labelledby="nav-tab_aditivos">
        <!-- Aditivos -->
        <span class="ms-1 mb-0 font-light tracking-wide dark:text-gray-300">Datos Esenciales</span>
        <hr class="ms-1 mt-1 dark:bg-gray-500">

        <div class="mb-3 px-3" id="contenedor_aditivos"></div>
        <div class="text-center">
            <button class="bg-gray-300 rounded-full p-2 border-1 border-gray-300" id="btnAddAditivo"><svg
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
            </button>
        </div>

    </div> <!-- Aditivos -->

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

<!-- Cartel que muestra que el ensayo fue creado/editado correctamente cuando se hace el submit -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        @if ($message = session('success_reologia'))
            successAlert('¡Registro de Reología Creada Correctamente!', 'La Reología se creó correctamente')
                .then(
                    (confirmed) => {
                        // window.location.reload();
                    })
        @endif
    })
</script>
