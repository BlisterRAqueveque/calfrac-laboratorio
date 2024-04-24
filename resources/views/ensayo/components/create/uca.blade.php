<div class="mt-4 tab-pane fade" id="tab_uca" role="tabpanel" aria-labelledby="nav-tab_uca">
    <!-- UCA - Resistencia a la Compresión -->

    @if ($solicitud_lechada[0]->rel_uca)
        <div class="mb-2 text-center">
            <h5 class="mb-1">Registros de UCA - Resistencia a la Compresión</h5>
        </div>
        <div class="accordion" id="accordionUca">
            @php
                $i = 1;
                $form_rel_uca = true;
            @endphp

            @foreach ($solicitud_lechada[0]->rel_uca as $uca)
                @php
                    if ($uca->selected == 1) {
                        $form_rel_uca = false;
                    }
                @endphp
                <div class="accordion-item">
                    <h2 class="accordion-header {{ $uca->selected ? 'bg-green-50' : '' }}">
                        <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#uca_{{ $uca->id }}" aria-expanded="false"
                            aria-controls="uca_{{ $uca->id }}">
                            UCA - Intento Nº{{ $i }}
                        </button>
                    </h2>
                    <div id="uca_{{ $uca->id }}" class="accordion-collapse collapse"
                        data-bs-parent="#accordionUca">
                        <div class="accordion-body overflow-auto">
                            <div class="flex justify-between items-center mb-3">
                                <p class="flex items-center text-gray-700 mb-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                                    </svg>
                                    Registro creado por {{ $uca->user->nombre }}
                                    {{ $uca->user->apellido }} el día
                                    {{ $uca->created_at->format('d') }}
                                    de {{ $uca->created_at->format('M') }},
                                    {{ $uca->created_at->format('Y') }} a las
                                    {{ $uca->created_at->format('H:i') }} hs
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
                                    <form id="form_assignment_{{ $uca->id }}">
                                        @csrf
                                        <input type="hidden" name="type_of_assignment" value="uca">
                                        <input type="hidden" name="id_assignment" value="{{ $uca->id }}">
                                        <x-button data-form="form_assignment_{{ $uca->id }}"
                                            style="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-sm flex items-center gap-2 btnSubmitAssignment">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"
                                                class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m4.5 12.75 6 6 9-13.5" />
                                            </svg>
                                            Seleccionar UCA
                                        </x-button>
                                    </form>
                                </div>
                            </div>

                            <div class="grid grid-cols-3 gap-3 my-3">
                                <div class="col-span-3 grid gap-3 grid-cols-4">
                                    <div>
                                        <label
                                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Principal
                                            (ºC)
                                        </label>
                                        <input type="text" class="form-control text-sm p-2"
                                            value="{{ $uca->principal ? $uca->principal : 'No aplica' }}"
                                            readonly>
                                    </div>
                                    <div>
                                        <label for="uca_psi_50"
                                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">50
                                            psi
                                            (hh:mm)</label>
                                        <input type="time" name="uca_psi_50" id="uca_psi_50"
                                            class="form-control text-sm p-2"
                                            value="{{ $uca->psi_50 ? $uca->psi_50 : '00:00' }}" readonly>
                                    </div>
                                    <div>
                                        <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">500
                                            psi
                                            (hh:mm)</label>
                                        <input type="time" class="form-control text-sm p-2"
                                            value="{{ $uca->psi_500 ? $uca->psi_500 : '00:00' }}" readonly>
                                    </div>
                                    <div>
                                        <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">1000
                                            psi
                                            (hh:mm)</label>
                                        <input type="time" class="form-control text-sm p-2"
                                            value="{{ $uca->psi_1000 ? $uca->psi_1000 : '00:00' }}" readonly>
                                    </div>
                                </div>

                                <div>
                                    <label for="uca_hs_12"
                                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">12 hs
                                        (psi)</label>
                                    <input type="text" class="form-control text-sm p-2"
                                        value="{{ $uca->hs_12 ? $uca->hs_12 : 'No aplica' }}" readonly>
                                </div>
                                <div>
                                    <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">24 hs
                                        (psi)</label>
                                    <input type="text" class="form-control text-sm p-2"
                                        value="{{ $uca->hs_24 ? $uca->hs_24 : 'No aplica' }}" readonly>
                                </div>
                                <div>
                                    <label
                                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Impedancia
                                        Acústica (M/rayls)</label>
                                    <input type="text" class="form-control text-sm p-2"
                                        value="{{ $uca->impedancia_acustica ? $uca->impedancia_acustica : 'No aplica' }}"
                                        readonly>
                                </div>
                                <div>
                                    <label for="uca_sgs_cero"
                                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">SGS
                                        cero
                                        (hh:mm)</label>
                                    <input type="time" name="uca_sgs_cero" id="uca_sgs_cero"
                                        class="form-control text-sm p-2"
                                        value="{{ $uca->sgs_cero ? $uca->sgs_cero : '00:00' }}" readonly>
                                </div>
                                <div>
                                    <label for="uca_sgs_max"
                                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">SGS
                                        max
                                        (hh:mm)</label>
                                    <input type="time" name="uca_sgs_max" id="uca_sgs_max"
                                        class="form-control text-sm p-2"
                                        value="{{ $uca->sgs_max ? $uca->sgs_max : '00:00' }}" readonly>
                                </div>
                                <div>
                                    <label for="uca_tiempo"
                                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Tiempo
                                        (hh:mm)</label>
                                    <input type="time" name="uca_tiempo" id="uca_tiempo"
                                        class="form-control text-sm p-2"
                                        value="{{ $uca->tiempo ? $uca->tiempo : '00:00' }}" readonly>
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
        <h5 class="mb-1">Formulario de Registro | UCA - Resistencia a la Compresión</h5>
    </div>

    @if ($form_rel_uca)
        <form action="{{ route('store_uca') }}" class="mt-3" method="POST">
            @csrf
            <input type="hidden" name="solicitud_lechada_id" value="{{ $solicitud_lechada[0]->id }}">
            <div class="grid grid-cols-3 gap-3 my-3">
                <div class="col-span-3 grid gap-3 grid-cols-4">
                    <div>
                        <label for="uca_principal"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Principal
                            (ºC)</label>
                        <input type="number" name="uca_principal" id="uca_principal"
                            class="form-control text-sm p-2" placeholder="Ingrese la temperatura principal">
                    </div>
                    <div>
                        <label for="uca_psi_50" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">50
                            psi
                            (hh:mm)</label>
                        <input type="time" name="uca_psi_50" id="uca_psi_50"
                            class="form-control text-sm p-2">
                    </div>
                    <div>
                        <label for="uca_psi_500"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">500
                            psi
                            (hh:mm)</label>
                        <input type="time" name="uca_psi_500" id="uca_psi_500"
                            class="form-control text-sm p-2">
                    </div>
                    <div>
                        <label for="uca_psi_1000"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">1000
                            psi
                            (hh:mm)</label>
                        <input type="time" name="uca_psi_1000" id="uca_psi_1000"
                            class="form-control text-sm p-2">
                    </div>
                </div>

                <div>
                    <label for="uca_hs_12" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">12 hs
                        (psi)</label>
                    <input type="number" name="uca_hs_12" id="uca_hs_12" class="form-control text-sm p-2"
                        step=".01" placeholder="Ingresar las horas (si corresponde)">
                </div>
                <div>
                    <label for="uca_hs_24" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">24 hs
                        (psi)</label>
                    <input type="number" name="uca_hs_24" id="uca_hs_24" class="form-control text-sm p-2"
                        step=".01" placeholder="Ingresar las horas (si corresponde)">
                </div>
                <div>
                    <label for="uca_impedancia_acustica"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Impedancia
                        Acústica (M/rayls)</label>
                    <input type="number" name="uca_impedancia_acustica" id="uca_impedancia_acustica"
                        class="form-control text-sm p-2"
                        placeholder="Ingrese la Impedancia Acústica (si corresponde)">
                </div>
                <div>
                    <label for="uca_sgs_cero" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">SGS
                        cero
                        (hh:mm)</label>
                    <input type="time" name="uca_sgs_cero" id="uca_sgs_cero"
                        class="form-control text-sm p-2">
                </div>
                <div>
                    <label for="uca_sgs_max" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">SGS
                        max
                        (hh:mm)</label>
                    <input type="time" name="uca_sgs_max" id="uca_sgs_max" class="form-control text-sm p-2">
                </div>
                <div>
                    <label for="uca_tiempo" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Tiempo
                        (hh:mm)</label>
                    <input type="time" name="uca_tiempo" id="uca_tiempo" class="form-control text-sm p-2">
                </div>
            </div>

            <div class="mb-2 mt-2 text-center">
                <h5 class="mb-1">Adjuntos a cargar (Opcional)</h5>
            </div>
            <hr>

            <div class="flex justify-center mt-3">
                <x-button type="submit"
                    style="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-sm">Crear
                    Registro</x-button>
            </div>
        </form>
    @endif
</div>