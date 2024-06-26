        @if ($lechada->rel_perdida_filtrado)
            <div class="mb-2 text-center">
                <h5 class="mb-1">Registros de Pérdidas de Filtrado</h5>
            </div>
            <div class="accordion" id="accordionPerdidaFiltrado">
                @php
                    $i = 1;
                    $form_perdida = true;
                @endphp

                @foreach ($lechada->rel_perdida_filtrado as $perdida)
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
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.8" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                            </svg>

                                            Eliminar
                                        </x-button>
                                        {{-- <form action="{{ route('ensayo.assigned') }}" method="POST"> --}}
                                        <form id="form_assignment_{{ $perdida->id }}">
                                            @csrf
                                            <input type="hidden" name="type_of_assignment" value="perdida_filtrado">
                                            <input type="hidden" name="id_assignment" value="{{ $perdida->id }}">
                                            <x-button data-form="form_assignment_{{ $perdida->id }}"
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
                                            class="form-control text-sm p-2" placeholder="Temperatura °C" step=".01"
                                            readonly>
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
            <form wire:submit.prevent="store" class="mt-3">
                @csrf
                <input type="hidden" name="solicitud_lechada_id" value="{{ $lechada->id }}">

                <div class="grid grid-cols-3 gap-3 mb-3">
                    <div>
                        <label for="perdida_temperatura"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Temperatura °C</label>
                        <input type="number" wire:model="perdida_temperatura" id="perdida_temperatura"
                            class="form-control text-sm p-2" placeholder="Temperatura °C" step=".01">
                    </div>
                    <div>
                        <label for="perdida_fluido_acumulado"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fluido Acumulado mL</label>
                        <input type="number" wire:model="perdida_fluido_acumulado" id="perdida_fluido_acumulado"
                            class="form-control text-sm p-2" placeholder="Ingrese el fluido acumulado" step=".01">
                    </div>
                    <div>
                        <label for="perdida_filtrado_api"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Filtrado API
                            ml/30min</label>
                        <input type="number" wire:model="perdida_filtrado_api" id="perdida_filtrado_api"
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
