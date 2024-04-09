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
                <input type="checkbox" name="principal_selected" id="principal_selected_dk" value="principal" class="selected_requerimiento_dk" hidden>
                <label for="principal_selected_dk" class="w-full font-bold p-1 rounded-md text-center cursor-pointer tracking-wider hover:bg-gray-50 principal_selected_dk">Principal</label>
            </div>
            <div class="flex gap-2 items-center">
                <input type="checkbox" name="relleno_selected" id="relleno_selected_dk" value="relleno" class="selected_requerimiento_dk" hidden>
                <label for="relleno_selected_dk" class="w-full font-bold p-1 rounded-md text-center cursor-pointer tracking-wider hover:bg-gray-50 relleno_selected_dk">Relleno</label>
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
                placeholder="Ingrese la reología principal" readonly>
            <input type="text" name="reologia_relleno" class="form-control text-sm fields_relleno_dk"
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
                placeholder="Ingrese la densidad principal" readonly>
            <input type="text" name="densidad_relleno" class="form-control text-sm fields_relleno_dk"
                placeholder="Ingrese la densidad de relleno" readonly>
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
                placeholder="Ingrese el filtrado principal" readonly>
            <input type="text" name="filtrado_relleno" class="form-control text-sm fields_relleno_dk"
                placeholder="Ingrese el filtrado de relleno" readonly>
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
                placeholder="Ingrese la bombeabilidad principal" readonly>
            <input type="text" name="bombeabilidad_relleno" class="form-control text-sm fields_relleno_dk"
                placeholder="Ingrese la bombeabilidad de relleno" readonly>
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
            <input type="text" name="resistencia_compresion_principal" class="form-control text-sm fields_principal_dk"
                placeholder="Resistencia a la compresión principal" readonly>
            <input type="text" name="resistencia_compresion_relleno" class="form-control text-sm fields_relleno_dk"
                placeholder="Resistencia a la compresión de relleno" readonly>
        </div>
    </div>

    <!-- Tiempo @ 50 psi -->
    <div class="grid grid-cols-3">
        <div class="col-span-1"></div>
        <div class="col-span-2 grid grid-cols-2 gap-3">
            <div class="flex items-center gap-4">
                <input type="text" name="tiempo_50_psi_principal" class="form-control text-sm w-1/3 fields_principal_dk" placeholder="N°" readonly>
                <p class="mb-0 md:text-sm">Tiempo @ 50 psi</p>
            </div>
            <div class="flex items-center gap-4">
                <input type="text" name="tiempo_50_psi_relleno" class="form-control text-sm w-1/3 fields_relleno_dk" placeholder="N°" readonly>
                <p class="mb-0 md:text-sm">Tiempo @ 50 psi</p>
            </div>
        </div>
    </div>

    <!-- Tiempo @ 500 psi -->
    <div class="grid grid-cols-3">
        <div class="col-span-1"></div>
        <div class="col-span-2 grid grid-cols-2 gap-3">
            <div class="flex items-center gap-4">
                <input type="text" name="tiempo_500_psi_principal" class="form-control text-sm w-1/3 fields_principal_dk" placeholder="N°" readonly>
                <p class="mb-0 md:text-sm">Tiempo @ 500 psi</p>
            </div>
            <div class="flex items-center gap-4">
                <input type="text" name="tiempo_500_psi_relleno" class="form-control text-sm w-1/3 fields_relleno_dk" placeholder="N°" readonly>
                <p class="mb-0 md:text-sm">Tiempo @ 500 psi</p>
            </div>
        </div>
    </div>

    <!-- Resistencia a las hs -->
    <div class="grid grid-cols-3">
        <div class="col-span-1"></div>
        <div class="col-span-2 grid grid-cols-2 gap-3">
            <div class="flex items-center gap-4">
                <input type="text" name="resistencia_12_hs_principal" class="form-control text-sm w-1/3 fields_principal_dk" placeholder="N°" readonly>
                <p class="mb-0 md:text-sm">Resistencia a las 12 hs</p>
            </div>
            <div class="flex items-center gap-4">
                <input type="text" name="resistencia_8_hs_relleno" class="form-control text-sm w-1/3 fields_relleno_dk" placeholder="N°" readonly>
                <p class="mb-0 md:text-sm">Resistencia a las 8 hs</p>
            </div>
        </div>
    </div>

    <!-- Resistencia a las hs -->
    <div class="grid grid-cols-3">
        <div class="col-span-1"></div>
        <div class="col-span-2 grid grid-cols-2 gap-3">
            <div class="flex items-center gap-4">
                <input type="text" name="resistencia_24_hs_principal" class="form-control text-sm w-1/3 fields_principal_dk" placeholder="N°" readonly>
                <p class="mb-0 md:text-sm">Resistencia a las 24 hs</p>
            </div>
            <div class="flex items-center gap-4">
                <input type="text" name="resistencia_12_hs_relleno" class="form-control text-sm w-1/3 fields_relleno_dk" placeholder="N°" readonly>
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
            <input type="text" name="agua_libre_principal" class="form-control text-sm fields_principal_dk" placeholder="~ 0.0%" readonly>
            <input type="text" name="tipo_cemento_relleno" class="form-control text-sm fields_relleno_dk" placeholder="~ 0.0%" readonly>
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
                placeholder="Ingrese el SGS Principal" readonly>
            <input type="text" name="sgs_relleno" class="form-control text-sm fields_relleno_dk"
                placeholder="Ingrese el SGS de Relleno" readonly>
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
                <input type="text" name="tipo_cemento_principal" class="form-control text-sm w-auto fields_principal_dk"
                    placeholder="Tipo de Cemento Principal" readonly>
            </div>
            <div class="flex items-center gap-2">
                <p class="mb-0 text-sm w-1/2">Tipo de Cemento</p>
                <input type="text" name="tipo_cemento_relleno" class="form-control text-sm w-auto fields_relleno_dk"
                    placeholder="Tipo de Cemento Relleno" readonly>
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

    <div id="container_formulaciones"></div>

    <div class="grid grid-cols-3 gap-y-2">
        <div></div>
        <div class="col-span-2 text-center">
            <button id="btnAddFormulacion"
                class="text-sm bg-gray-200 hover:bg-gray-300 text-gray-600 p-1 rounded-full border border-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.8" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
            </button>
        </div>
    </div>
</div>

<!-- El script realiza el evento de escuchar cuando se hace click en los Requerimientos de Lechada Principal o  Relleno -->
<!-- Si está activado, se habilitan todos los campos de requerimientos, dependiendo si es Principal o Relleno -->
<script>
    const selected_requerimiento_dk = document.querySelectorAll('.selected_requerimiento_dk');
    const fields_principal_dk = document.querySelectorAll('.fields_principal_dk');
    const fields_relleno_dk = document.querySelectorAll('.fields_relleno_dk');

    for (let i = 0; i < selected_requerimiento_dk.length; i++) {
        selected_requerimiento_dk[i].addEventListener('click', e => {
            // Si es Principal y está checkeado, entonces habilito los campos
            if (selected_requerimiento_dk[i].checked && selected_requerimiento_dk[i].value == 'principal') {
                for (let j = 0; j < fields_principal_dk.length; j++) {
                    fields_principal_dk[j].removeAttribute('readonly');                    
                }
            } else if (!selected_requerimiento_dk[i].checked && selected_requerimiento_dk[i].value == 'principal') { // Caso contrario, deshabilito los campos nuevamente
                for (let j = 0; j < fields_principal_dk.length; j++) {
                    fields_principal_dk[j].setAttribute('readonly', 'true');                    
                    fields_principal_dk[j].value = '';                    
                }
            }

            // Si es Relleno y está checkeado, entonces habilito los campos
            if (selected_requerimiento_dk[i].checked && selected_requerimiento_dk[i].value == 'relleno') {
                for (let j = 0; j < fields_relleno_dk.length; j++) {
                    fields_relleno_dk[j].removeAttribute('readonly');                    
                }
            } else if (!selected_requerimiento_dk[i].checked && selected_requerimiento_dk[i].value == 'relleno') { // Caso contrario, deshabilito los campos nuevamente
                for (let j = 0; j < fields_relleno_dk.length; j++) {
                    fields_relleno_dk[j].setAttribute('readonly', 'true');                    
                    fields_relleno_dk[j].value = '';                    
                }
            }
        })        
    }
</script>