<div class="mt-4 tab-pane fade" id="tab_bombeabilidad" role="tabpanel" aria-labelledby="nav-tab_aditivos">

    @if ($solicitud_lechada[0]->rel_bombeabilidad)
        <div class="mb-2 text-center">
            <h5 class="mb-1">Registros de Tiempo de Bombeabilidad</h5>
        </div>
        <div class="accordion" id="accordionBombeabilidad">
            @php
                $i = 1;
                $form_bombeabilidad = true;
            @endphp

            @foreach ($solicitud_lechada[0]->rel_bombeabilidad as $bombeabilidad)
                @php
                    if ($bombeabilidad->selected == 1) {
                        $form_bombeabilidad = false;
                    }
                @endphp
                <div class="accordion-item">
                    <h2 class="accordion-header {{ $bombeabilidad->selected ? 'bg-green-50' : '' }}">
                        <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#bombeabilidad_{{ $bombeabilidad->id }}" aria-expanded="false"
                            aria-controls="bombeabilidad_{{ $bombeabilidad->id }}">
                            Bombeabilidad - Intento Nº{{ $i }}
                        </button>
                    </h2>
                    <div id="bombeabilidad_{{ $bombeabilidad->id }}" class="accordion-collapse collapse"
                        data-bs-parent="#accordionBombeabilidad">
                        <div class="accordion-body overflow-auto">
                            <div class="flex justify-between items-center mb-3">
                                <p class="flex items-center text-gray-700 mb-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                                    </svg>
                                    Registro creado por {{ $bombeabilidad->user->nombre }}
                                    {{ $bombeabilidad->user->apellido }} el día
                                    {{ $bombeabilidad->created_at->format('d') }}
                                    de {{ $bombeabilidad->created_at->format('M') }},
                                    {{ $bombeabilidad->created_at->format('Y') }} a las
                                    {{ $bombeabilidad->created_at->format('H:i') }} hs
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
                                    <form id="form_assignment_{{ $bombeabilidad->id }}">
                                        @csrf
                                        <input type="hidden" name="type_of_assignment" value="bombeabilidad">
                                        <input type="hidden" name="id_assignment"
                                            value="{{ $bombeabilidad->id }}">
                                        <x-button data-form="form_assignment_{{ $bombeabilidad->id }}"
                                            style="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-sm flex items-center gap-2 btnSubmitAssignment">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"
                                                class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m4.5 12.75 6 6 9-13.5" />
                                            </svg>
                                            Seleccionar Bombeabilidad
                                        </x-button>
                                    </form>
                                </div>
                            </div>

                            <div class="grid grid-cols-3 gap-3 mb-3">
                                <div>
                                    <label
                                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Consistómetro
                                        N°</label>
                                    <input type="text" name="bombeabilidad_consistometro"
                                        class="form-control text-sm p-2"
                                        value="{{ $bombeabilidad->consistometro ? $bombeabilidad->consistometro : 'No aplica' }}"
                                        readonly>
                                </div>

                                <div>
                                    <label for="bombeabilidad_acondicionamiento"
                                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Tiempo de
                                        Acondicionamiento</label>
                                    <input type="text" class="form-control text-sm p-2"
                                        value="{{ $bombeabilidad->time_acondicionamiento ? $bombeabilidad->time_acondicionamiento : 'No aplica' }}"
                                        readonly>
                                </div>

                                <div>
                                    <label for="bombeabilidad_planilla"
                                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Planilla
                                        N°</label>
                                    <input type="text" class="form-control text-sm p-2"
                                        value="{{ $bombeabilidad->planilla ? $bombeabilidad->planilla : 'No aplica' }}"
                                        readonly>
                                </div>

                                <div>
                                    <label for="bombeabilidad_gradiente"
                                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Gradiente
                                        °F/100ft</label>
                                    <input type="text" class="form-control text-sm p-2"
                                        value="{{ $bombeabilidad->gradiente ? $bombeabilidad->gradiente : 'No aplica' }}"
                                        readonly>
                                </div>

                                <div>
                                    <label for="bombeabilidad_temperatura"
                                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Temperatura
                                        °C</label>
                                    <input type="text" class="form-control text-sm p-2"
                                        value="{{ $bombeabilidad->temperatura ? $bombeabilidad->temperatura : 'No aplica' }}"
                                        readonly>
                                </div>

                                <div>
                                    <label for="bombeabilidad_presion"
                                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Presión
                                        (psi)
                                    </label>
                                    <input type="text" class="form-control text-sm p-2"
                                        value="{{ $bombeabilidad->presion ? $bombeabilidad->presion : 'No aplica' }}"
                                        readonly>
                                </div>

                                <div>
                                    <label for="bombeabilidad_40_bc"
                                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">40 Bc
                                        (hh:mm)</label>
                                    <input type="time" class="form-control text-sm p-2"
                                        value="{{ $bombeabilidad->bc_40 ? $bombeabilidad->bc_40 : '00:00' }}"
                                        readonly>
                                </div>

                                <div>
                                    <label for="bombeabilidad_70_bc"
                                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">70 Bc
                                        (hh:mm)</label>
                                    <input type="time" class="form-control text-sm p-2"
                                        value="{{ $bombeabilidad->bc_70 ? $bombeabilidad->bc_70 : '00:00' }}"
                                        readonly>
                                </div>

                                <div>
                                    <label for="bombeabilidad_100_bc"
                                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">100 Bc
                                        (hh:mm)</label>
                                    <input type="time" class="form-control text-sm p-2"
                                        value="{{ $bombeabilidad->bc_100 ? $bombeabilidad->bc_100 : '00:00' }}"
                                        readonly>
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


    <div class="mb-2 mt-2 text-center">
        <h5 class="mb-1">Formulario de Registro | Tiempo de Bombeabilidad</h5>
    </div>

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
                    class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Tiempo de
                    Acondicionamiento</label>
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
                <label for="bombeabilidad_40_bc" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">40
                    Bc (hh:mm)</label>
                <input type="time" name="bombeabilidad_40_bc" id="bombeabilidad_40_bc"
                    class="form-control text-sm p-2" placeholder="hh:mm">
            </div>

            <div>
                <label for="bombeabilidad_70_bc" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">70
                    Bc (hh:mm)</label>
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