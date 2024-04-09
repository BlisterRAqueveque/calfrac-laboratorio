<style>
    .principal_selected_dk,
    .relleno_selected_dk {
        background-color: white;
        border: 1px solid lightgray;
        color: #404040;
    }

    .selected_requerimiento_dk:checked+.principal_selected_dk {
        background-color: rgb(250, 255, 250);
        border: 1px solid rgb(203, 232, 203);
        box-shadow: inset 0px 0px 21px 0px rgb(216, 230, 218);
        color: rgb(107, 165, 128)
    }

    .selected_requerimiento_dk:checked+.relleno_selected_dk {
        background-color: rgb(250, 255, 250);
        border: 1px solid rgb(203, 232, 203);
        box-shadow: inset 0px 0px 21px 0px rgb(216, 230, 218);
        color: rgb(107, 165, 128)
    }
</style>

<div class="items-center gap-3 hidden xl:grid">

    <div class="grid grid-cols-3">
        <div></div>
        <div class="col-span-2 grid grid-cols-2 gap-3">
            <div class="flex gap-2 items-center">
                <input type="checkbox" name="principal_selected" id="principal_selected_dk" value="principal"
                    class="selected_requerimiento_dk" {{ $solicitud_lechada[0]->principal_selected == 1 ? 'checked' : '' }} hidden>
                <label
                    class="w-full font-bold p-1 rounded-md text-center cursor-pointer tracking-wider hover:bg-gray-50 principal_selected_dk">Principal</label>
            </div>
            <div class="flex gap-2 items-center">
                <input type="checkbox" name="relleno_selected" id="relleno_selected_dk" value="relleno"
                    class="selected_requerimiento_dk" {{ $solicitud_lechada[0]->relleno_selected == 1 ? 'checked' : '' }} hidden>
                <label
                    class="w-full font-bold p-1 rounded-md text-center tracking-wider hover:bg-gray-50 relleno_selected_dk">Relleno</label>
            </div>
        </div>
        <div></div>
    </div>

    <!-- Reología -->
    <div class="grid grid-cols-3">
        <div class="flex items-center gap-3">
            <div
                class="w-4 h-4 xl:w-5 xl:h-5 bg-gray-400 dark:bg-gray-700 rounded-full flex justify-center text-white items-center">
                <span class="text-xs">
                    1
                </span>
            </div>
            <h5 class="tracking-wide text-sm">Reología</h5>
        </div>

        <div class="col-span-2 grid grid-cols-2 gap-3">
            <input type="text" name="reologia_principal" class="form-control text-sm fields_principal_dk"
                placeholder="Ingrese la reología principal"
                value="{{ $solicitud_lechada[0]->reologia_principal != '' ? $solicitud_lechada[0]->reologia_principal : 'No Aplica' }}"
                readonly>
            <input type="text" name="reologia_relleno" class="form-control text-sm fields_relleno_dk"
                value="{{ $solicitud_lechada[0]->reologia_relleno != '' ? $solicitud_lechada[0]->reologia_relleno : 'No Aplica' }}"
                placeholder="Ingrese la reología relleno" readonly>
        </div>
    </div>

    <!-- Densidad -->
    <div class="grid grid-cols-3">
        <div class="flex items-center gap-3">
            <div
                class="w-4 h-4 xl:w-5 xl:h-5 bg-gray-400 dark:bg-gray-700 rounded-full flex justify-center text-white items-center">
                <span class="text-xs">
                    2
                </span>
            </div>
            <h5 class="tracking-wide text-sm">Densidad</h5>
        </div>

        <div class="col-span-2 grid grid-cols-2 gap-3">
            <input type="text" name="densidad_principal" class="form-control text-sm fields_principal_dk"
                placeholder="Ingrese la densidad principal"
                value="{{ $solicitud_lechada[0]->densidad_principal != '' ? $solicitud_lechada[0]->densidad_principal : 'No Aplica' }}"
                readonly>
            <input type="text" name="densidad_relleno" class="form-control text-sm fields_relleno_dk"
                placeholder="Ingrese la densidad de relleno"
                value="{{ $solicitud_lechada[0]->densidad_relleno != '' ? $solicitud_lechada[0]->densidad_relleno : 'No Aplica' }}"
                readonly>
        </div>
    </div>

    <!-- Filtrado -->
    <div class="grid grid-cols-3">
        <div class="flex items-center gap-3">
            <div
                class="w-4 h-4 xl:w-5 xl:h-5 bg-gray-400 dark:bg-gray-700 rounded-full flex justify-center text-white items-center">
                <span class="text-xs">
                    3
                </span>
            </div>
            <h5 class="tracking-wide text-sm">Filtrado</h5>
        </div>

        <div class="col-span-2 grid grid-cols-2 gap-3">
            <input type="text" name="filtrado_principal" class="form-control text-sm fields_principal_dk"
                placeholder="Ingrese el filtrado principal"
                value="{{ $solicitud_lechada[0]->filtrado_principal != '' ? $solicitud_lechada[0]->filtrado_principal : 'No Aplica' }}"
                readonly>
            <input type="text" name="filtrado_relleno" class="form-control text-sm fields_relleno_dk"
                placeholder="Ingrese el filtrado de relleno"
                value="{{ $solicitud_lechada[0]->filtrado_relleno != '' ? $solicitud_lechada[0]->filtrado_relleno : 'No Aplica' }}"
                readonly>
        </div>
    </div>

    <!-- Bombeabilidad -->
    <div class="grid grid-cols-3">
        <div class="flex items-center gap-3">
            <div
                class="w-4 h-4 xl:w-5 xl:h-5 bg-gray-400 dark:bg-gray-700 rounded-full flex justify-center text-white items-center">
                <span class="text-xs">
                    4
                </span>
            </div>
            <h5 class="tracking-wide text-sm">Bombeabilidad</h5>
        </div>

        <div class="col-span-2 grid grid-cols-2 gap-3">
            <input type="text" name="bombeabilidad_principal" class="form-control text-sm fields_principal_dk"
                placeholder="Ingrese la bombeabilidad principal"
                value="{{ $solicitud_lechada[0]->bombeabilidad_principal != '' ? $solicitud_lechada[0]->bombeabilidad_principal : 'No Aplica' }}"
                readonly>
            <input type="text" name="bombeabilidad_relleno" class="form-control text-sm fields_relleno_dk"
                placeholder="Ingrese la bombeabilidad de relleno"
                value="{{ $solicitud_lechada[0]->bombeabilidad_relleno != '' ? $solicitud_lechada[0]->bombeabilidad_relleno : 'No Aplica' }}"
                readonly>
        </div>
    </div>

    <!-- Resistencia a la Compresión -->
    <div class="grid grid-cols-3">
        <div class="flex items-center gap-3">
            <div
                class="w-4 h-4 xl:w-5 xl:h-5 bg-gray-400 dark:bg-gray-700 rounded-full flex justify-center text-white items-center">
                <span class="text-xs">
                    5
                </span>
            </div>
            <h5 class="tracking-wide text-sm">Resistencia a la Compresión</h5>
        </div>

        <div class="col-span-2 grid grid-cols-2 gap-3">
            <input type="text" name="resistencia_compresion_principal"
                class="form-control text-sm fields_principal_dk" placeholder="Resistencia a la compresión principal"
                value="{{ $solicitud_lechada[0]->resistencia_compresion_principal != '' ? $solicitud_lechada[0]->resistencia_compresion_principal : 'No Aplica' }}"
                readonly>
            <input type="text" name="resistencia_compresion_relleno" class="form-control text-sm fields_relleno_dk"
                placeholder="Resistencia a la compresión de relleno"
                value="{{ $solicitud_lechada[0]->resistencia_compresion_relleno != '' ? $solicitud_lechada[0]->resistencia_compresion_relleno : 'No Aplica' }}"
                readonly>
        </div>
    </div>

    <!-- Tiempo @ 50 psi -->
    <div class="grid grid-cols-3">
        <div class="col-span-1"></div>
        <div class="col-span-2 grid grid-cols-2 gap-3">
            <div class="flex items-center gap-4">
                <input type="text" name="tiempo_50_psi_principal"
                    class="form-control text-sm w-1/3 fields_principal_dk" placeholder="N°"
                    value="{{ $solicitud_lechada[0]->tiempo_50_psi_principal != '' ? $solicitud_lechada[0]->tiempo_50_psi_principal : 'No Aplica' }}"
                    readonly>
                <p class="mb-0 md:text-sm">Tiempo @ 50 psi</p>
            </div>
            <div class="flex items-center gap-4">
                <input type="text" name="tiempo_50_psi_relleno"
                    class="form-control text-sm w-1/3 fields_relleno_dk" placeholder="N°"
                    value="{{ $solicitud_lechada[0]->tiempo_50_psi_relleno != '' ? $solicitud_lechada[0]->tiempo_50_psi_relleno : 'No Aplica' }}"
                    readonly>
                <p class="mb-0 md:text-sm">Tiempo @ 50 psi</p>
            </div>
        </div>
    </div>

    <!-- Tiempo @ 500 psi -->
    <div class="grid grid-cols-3">
        <div class="col-span-1"></div>
        <div class="col-span-2 grid grid-cols-2 gap-3">
            <div class="flex items-center gap-4">
                <input type="text" name="tiempo_500_psi_principal"
                    class="form-control text-sm w-1/3 fields_principal_dk" placeholder="N°"
                    value="{{ $solicitud_lechada[0]->tiempo_500_psi_principal != '' ? $solicitud_lechada[0]->tiempo_500_psi_principal : 'No Aplica' }}"
                    readonly>
                <p class="mb-0 md:text-sm">Tiempo @ 500 psi</p>
            </div>
            <div class="flex items-center gap-4">
                <input type="text" name="tiempo_500_psi_relleno"
                    class="form-control text-sm w-1/3 fields_relleno_dk" placeholder="N°"
                    value="{{ $solicitud_lechada[0]->tiempo_500_psi_relleno != '' ? $solicitud_lechada[0]->tiempo_500_psi_relleno : 'No Aplica' }}"
                    readonly>
                <p class="mb-0 md:text-sm">Tiempo @ 500 psi</p>
            </div>
        </div>
    </div>

    <!-- Resistencia a las hs -->
    <div class="grid grid-cols-3">
        <div class="col-span-1"></div>
        <div class="col-span-2 grid grid-cols-2 gap-3">
            <div class="flex items-center gap-4">
                <input type="text" name="resistencia_12_hs_principal"
                    class="form-control text-sm w-1/3 fields_principal_dk" placeholder="N°"
                    value="{{ $solicitud_lechada[0]->resistencia_12_hs_principal != '' ? $solicitud_lechada[0]->resistencia_12_hs_principal : 'No Aplica' }}"
                    readonly>
                <p class="mb-0 md:text-sm">Resistencia a las 12 hs</p>
            </div>
            <div class="flex items-center gap-4">
                <input type="text" name="resistencia_8_hs_relleno"
                    class="form-control text-sm w-1/3 fields_relleno_dk" placeholder="N°"
                    value="{{ $solicitud_lechada[0]->resistencia_8_hs_relleno != '' ? $solicitud_lechada[0]->resistencia_8_hs_relleno : 'No Aplica' }}"
                    readonly>
                <p class="mb-0 md:text-sm">Resistencia a las 8 hs</p>
            </div>
        </div>
    </div>

    <!-- Resistencia a las hs -->
    <div class="grid grid-cols-3">
        <div class="col-span-1"></div>
        <div class="col-span-2 grid grid-cols-2 gap-3">
            <div class="flex items-center gap-4">
                <input type="text" name="resistencia_24_hs_principal"
                    class="form-control text-sm w-1/3 fields_principal_dk" placeholder="N°"
                    value="{{ $solicitud_lechada[0]->resistencia_24_hs_principal != '' ? $solicitud_lechada[0]->resistencia_24_hs_principal : 'No Aplica' }}"
                    readonly>
                <p class="mb-0 md:text-sm">Resistencia a las 24 hs</p>
            </div>
            <div class="flex items-center gap-4">
                <input type="text" name="resistencia_12_hs_relleno"
                    class="form-control text-sm w-1/3 fields_relleno_dk" placeholder="N°"
                    value="{{ $solicitud_lechada[0]->resistencia_12_hs_relleno != '' ? $solicitud_lechada[0]->resistencia_12_hs_relleno : 'No Aplica' }}"
                    readonly>
                <p class="mb-0 md:text-sm">Resistencia a las 12 hs</p>
            </div>
        </div>
    </div>

    <!-- Agua Libre -->
    <div class="grid grid-cols-3">
        <div class="flex items-center gap-3">
            <div
                class="w-4 h-4 xl:w-5 xl:h-5 bg-gray-400 dark:bg-gray-700 rounded-full flex justify-center text-white items-center">
                <span class="text-xs">
                    6
                </span>
            </div>
            <h5 class="tracking-wide text-sm">Agua Libre</h5>
        </div>

        <div class="col-span-2 grid grid-cols-2 gap-3">
            <input type="text" name="agua_libre_principal" class="form-control text-sm fields_principal_dk"
                placeholder="~ 0.0%"
                value="{{ $solicitud_lechada[0]->agua_libre_principal != '' ? $solicitud_lechada[0]->agua_libre_principal : 'No Aplica' }}"
                readonly>
            <input type="text" name="tipo_cemento_relleno" class="form-control text-sm fields_relleno_dk"
                placeholder="~ 0.0%"
                value="{{ $solicitud_lechada[0]->tipo_cemento_relleno != '' ? $solicitud_lechada[0]->tipo_cemento_relleno : 'No Aplica' }}"
                readonly>
        </div>
    </div>

    <!-- SGS -->
    <div class="grid grid-cols-3">
        <div class="flex items-center gap-3">
            <div
                class="w-4 h-4 xl:w-5 xl:h-5 bg-gray-400 dark:bg-gray-700 rounded-full flex justify-center text-white items-center">
                <span class="text-xs">
                    7
                </span>
            </div>
            <h5 class="tracking-wide text-sm">SGS</h5>
        </div>

        <div class="col-span-2 grid grid-cols-2 gap-3">
            <input type="text" name="sgs_principal" class="form-control text-sm fields_principal_dk"
                placeholder="Ingrese el SGS Principal"
                value="{{ $solicitud_lechada[0]->sgs_principal != '' ? $solicitud_lechada[0]->sgs_principal : 'No Aplica' }}"
                readonly>
            <input type="text" name="sgs_relleno" class="form-control text-sm fields_relleno_dk"
                placeholder="Ingrese el SGS de Relleno"
                value="{{ $solicitud_lechada[0]->sgs_relleno != '' ? $solicitud_lechada[0]->sgs_relleno : 'No Aplica' }}"
                readonly>
        </div>
    </div>

    <!-- Formulación Tentativa -->
    <div class="grid grid-cols-3">
        <div class="flex items-center gap-3">
            <div
                class="w-4 h-4 xl:w-5 xl:h-5 bg-gray-400 dark:bg-gray-700 rounded-full flex justify-center text-white items-center">
                <span class="text-xs">
                    8
                </span>
            </div>
            <h5 class="tracking-wide text-sm">Formulación Tentativa</h5>
        </div>

        <div class="col-span-2 grid grid-cols-2 gap-3">
            <div class="flex items-center gap-2">
                <p class="mb-0 text-sm w-1/2">Tipo de Cemento</p>
                <input type="text" name="tipo_cemento_principal"
                    class="form-control text-sm w-auto fields_principal_dk" placeholder="Tipo de Cemento Principal"
                    value="{{ $solicitud_lechada[0]->tipo_cemento_principal != '' ? $solicitud_lechada[0]->tipo_cemento_principal : 'No Aplica' }}"
                    readonly>
            </div>
            <div class="flex items-center gap-2">
                <p class="mb-0 text-sm w-1/2">Tipo de Cemento</p>
                <input type="text" name="tipo_cemento_relleno"
                    class="form-control text-sm w-auto fields_relleno_dk" placeholder="Tipo de Cemento Relleno"
                    value="{{ $solicitud_lechada[0]->tipo_cemento_relleno != '' ? $solicitud_lechada[0]->tipo_cemento_relleno : 'No Aplica' }}"
                    readonly>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-3">
        <div></div>
        <div class="col-span-1 grid grid-cols-3 gap-3">
            <div>
                <p class="text-sm">Lote</p>
            </div>
            <div>
                <p class="text-sm">Aditivo</p>
            </div>
            <div>
                <p class="text-sm">Conc <small>(% BWOC)</small></p>
            </div>
        </div>
        <div class="col-span-1 grid grid-cols-3 gap-3 ms-2">
            <div>
                <p class="text-sm">Lote</p>
            </div>
            <div>
                <p class="text-sm">Aditivo</p>
            </div>
            <div>
                <p class="text-sm">Conc <small>(% BWOC)</small></p>
            </div>
        </div>
    </div>

    <div id="container_formulaciones">
        @php $i = 1; @endphp
        @foreach ($formulacion_tentativa as $f_m)
        
        <div class="grid grid-cols-3 gap-y-2 my-2">
            <div class="text-center">
                <p class="text-sm">( {{ $i }} )</p>
            </div>
            <div class="col-span-1 grid grid-cols-3 gap-3">
                <div>
                    <p class="text-sm"><input class="form-control text-xs" placeholder="N° Lote" value="{{ $f_m->lote_principal }}" readonly></p>
                </div>
                <div>
                    <p class="text-sm">
                        <input class="form-control text-xs" 
                            placeholder="Aditivo" value="{{ $f_m->aditivo_principal }}" readonly></p>
                </div>
                <div>
                    <p class="text-sm"><input class="form-control text-xs" value="{{ $f_m->conc_principal }}" 
                            placeholder="0.0%" readonly></p>
                </div>
            </div>
            <div class="col-span-1 grid grid-cols-3 gap-3 ms-2">
                <div>
                    <p class="text-sm">
                        <input class="form-control text-xs" 
                            placeholder="N° Lote" value="{{ $f_m->lote_relleno }}" readonly></p>
                </div>
                <div>
                    <p class="text-sm"><input class="form-control text-xs" 
                            placeholder="Aditivo" value="{{ $f_m->aditivo_relleno }}" readonly></p>
                </div>
                <div>
                    <p class="text-sm"><input class="form-control text-xs" 
                            placeholder="0.0%" value="{{ $f_m->conc_relleno }}" readonly></p>
                </div>
            </div>
        </div>
        @php $i++; @endphp
        @endforeach
    </div>
    {{-- <div class="grid grid-cols-3 gap-y-2">
        <div></div>
        <div class="col-span-2 text-center">
            <button id="btnAddFormulacion"
                class="text-sm bg-gray-200 hover:bg-gray-300 text-gray-600 p-1 rounded-full border border-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
            </button>
        </div>
    </div> --}}
</div>
