    <div class="xl:hidden text-center">
        <div>
            <label for="">Principal</label>
            <input type="radio">
        </div>

        <!-- Reología -->
        <div class="flex items-center gap-3">
            <div
                class="w-4 h-4 xl:w-5 xl:h-5 bg-gray-400 dark:bg-gray-700 rounded-full flex justify-center text-white items-center">
                <span class="text-xs">
                    1
                </span>
            </div>
            <h5 class="tracking-wide text-sm">Reología</h5>
        </div>

        <div class="mt-2">
            <input type="text" class="form-control text-sm" placeholder="Ingrese la reología principal">
        </div>

        <!-- Densidad -->
        <div class="flex items-center gap-3 mt-3">
            <div
                class="w-4 h-4 xl:w-5 xl:h-5 bg-gray-400 dark:bg-gray-700 rounded-full flex justify-center text-white items-center">
                <span class="text-xs">
                    2
                </span>
            </div>
            <h5 class="tracking-wide text-sm">Densidad</h5>
        </div>

        <div class="mt-2">
            <input type="text" class="form-control text-sm" placeholder="Ingrese la densidad principal">
        </div>

        <!-- Filtrado -->
        <div class="flex items-center gap-3 mt-3">
            <div
                class="w-4 h-4 xl:w-5 xl:h-5 bg-gray-400 dark:bg-gray-700 rounded-full flex justify-center text-white items-center">
                <span class="text-xs">
                    3
                </span>
            </div>
            <h5 class="tracking-wide text-sm">Filtrado</h5>
        </div>

        <div class="mt-2">
            <input type="text" class="form-control text-sm" placeholder="Ingrese el filtrado principal">
        </div>

        <!-- Bombeabilidad -->
        <div class="flex items-center gap-3 mt-3">
            <div
                class="w-4 h-4 xl:w-5 xl:h-5 bg-gray-400 dark:bg-gray-700 rounded-full flex justify-center text-white items-center">
                <span class="text-xs">
                    4
                </span>
            </div>
            <h5 class="tracking-wide text-sm">Bombeabilidad</h5>
        </div>

        <div class="mt-2">
            <input type="text" class="form-control text-sm" placeholder="Ingrese el filtrado principal">
        </div>

        <!-- Resistencia a la Compresión -->
        <div class="flex items-center gap-3 mt-3">
            <div
                class="w-4 h-4 xl:w-5 xl:h-5 bg-gray-400 dark:bg-gray-700 rounded-full flex justify-center text-white items-center">
                <span class="text-xs">
                    5
                </span>
            </div>
            <h5 class="tracking-wide text-sm">Resistencia a la Compresión</h5>
        </div>

        <div class="mt-2">
            <input type="text" class="form-control text-sm" placeholder="Ingrese la resistencia principal">
        </div>

        <div class="grid grid-cols-2 items-center mt-3">
            <input type="text" placeholder="Nª" class="form-control text-sm">
            <span class="text-xs">Tiempo @ 50 psi</span>
        </div>
        <div class="grid grid-cols-2 items-center mt-3">
            <input type="text" placeholder="Nª" class="form-control text-sm">
            <span class="text-xs">Tiempo @ 500 psi</span>
        </div>
        <div class="grid grid-cols-2 items-center mt-3">
            <input type="text" placeholder="Nª" class="form-control text-sm">
            <span class="text-xs">Resistencia a las 12 hs</span>
        </div>
        <div class="grid grid-cols-2 items-center mt-3">
            <input type="text" placeholder="Nª" class="form-control text-sm">
            <span class="text-xs">Resistencia a las 24 hs</span>
        </div>

        <!-- Agua Libre -->
        <div class="flex items-center gap-3 mt-3">
            <div
                class="w-4 h-4 xl:w-5 xl:h-5 bg-gray-400 dark:bg-gray-700 rounded-full flex justify-center text-white items-center">
                <span class="text-xs">
                    6
                </span>
            </div>
            <h5 class="tracking-wide text-sm">Agua Libre</h5>
        </div>
        <input type="text" class="form-control text-sm mt-3" placeholder="Ingrese el agua libre principal">

        <!-- SGS-->
        <div class="flex items-center gap-3 mt-3">
            <div
                class="w-4 h-4 xl:w-5 xl:h-5 bg-gray-400 dark:bg-gray-700 rounded-full flex justify-center text-white items-center">
                <span class="text-xs">
                    7
                </span>
            </div>
            <h5 class="tracking-wide text-sm">SGS</h5>
        </div>
        <input type="text" class="form-control text-sm mt-3" placeholder="Ingrese la sgs principal">

        <!-- Formulación Tentativa -->
        <div class="flex items-center gap-3 mt-3">
            <div
                class="w-4 h-4 xl:w-5 xl:h-5 bg-gray-400 dark:bg-gray-700 rounded-full flex justify-center text-white items-center">
                <span class="text-xs">
                    8
                </span>
            </div>
            <h5 class="tracking-wide text-sm">Formulación Tentativa</h5>
        </div>

        <div class="grid grid-cols-2 mt-3 items-center">
            <span class="text-sm">Tipo de Cemento</span>
            <input type="text" class="form-control text-sm" placeholder="Tipo de Cemento Principal">
        </div>

        <div class="grid mt-3">
            <div class="col-span-3 grid grid-cols-3 text-xs">
                <span>Lote</span>
                <span>Aditivo</span>
                <span>Conc <small>(% BWOC)</small></span>
            </div>

            <div class="container_formulaciones_principal_phone mt-2 col-span-3"></div>

        </div>
        <button id="btnAddFormulacionPrincipalPhone"
            class="text-sm mt-2 bg-gray-200 hover:bg-gray-300 text-gray-600 p-1 rounded-full border border-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8"
                stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
        </button>

    </div>

    <hr class="my-4 xl:hidden">

    <div class="xl:hidden text-center mt-2">
        <div>
            <label for="">Relleno</label>
            <input type="radio">
        </div>

        <!-- Reología -->
        <div class="flex items-center gap-3">
            <div
                class="w-4 h-4 xl:w-5 xl:h-5 bg-gray-400 dark:bg-gray-700 rounded-full flex justify-center text-white items-center">
                <span class="text-xs">
                    1
                </span>
            </div>
            <h5 class="tracking-wide text-sm">Reología</h5>
        </div>

        <div class="mt-2">
            <input type="text" class="form-control text-sm" placeholder="Ingrese la reología principal">
        </div>

        <!-- Densidad -->
        <div class="flex items-center gap-3 mt-3">
            <div
                class="w-4 h-4 xl:w-5 xl:h-5 bg-gray-400 dark:bg-gray-700 rounded-full flex justify-center text-white items-center">
                <span class="text-xs">
                    2
                </span>
            </div>
            <h5 class="tracking-wide text-sm">Densidad</h5>
        </div>

        <div class="mt-2">
            <input type="text" class="form-control text-sm" placeholder="Ingrese la densidad principal">
        </div>

        <!-- Filtrado -->
        <div class="flex items-center gap-3 mt-3">
            <div
                class="w-4 h-4 xl:w-5 xl:h-5 bg-gray-400 dark:bg-gray-700 rounded-full flex justify-center text-white items-center">
                <span class="text-xs">
                    3
                </span>
            </div>
            <h5 class="tracking-wide text-sm">Filtrado</h5>
        </div>

        <div class="mt-2">
            <input type="text" class="form-control text-sm" placeholder="Ingrese el filtrado principal">
        </div>

        <!-- Bombeabilidad -->
        <div class="flex items-center gap-3 mt-3">
            <div
                class="w-4 h-4 xl:w-5 xl:h-5 bg-gray-400 dark:bg-gray-700 rounded-full flex justify-center text-white items-center">
                <span class="text-xs">
                    4
                </span>
            </div>
            <h5 class="tracking-wide text-sm">Bombeabilidad</h5>
        </div>

        <div class="mt-2">
            <input type="text" class="form-control text-sm" placeholder="Ingrese el filtrado principal">
        </div>

        <!-- Resistencia a la Compresión -->
        <div class="flex items-center gap-3 mt-3">
            <div
                class="w-4 h-4 xl:w-5 xl:h-5 bg-gray-400 dark:bg-gray-700 rounded-full flex justify-center text-white items-center">
                <span class="text-xs">
                    5
                </span>
            </div>
            <h5 class="tracking-wide text-sm">Resistencia a la Compresión</h5>
        </div>

        <div class="mt-2">
            <input type="text" class="form-control text-sm" placeholder="Ingrese la resistencia principal">
        </div>

        <div class="grid grid-cols-2 items-center mt-3">
            <input type="text" placeholder="Nª" class="form-control text-sm">
            <span class="text-xs">Tiempo @ 50 psi</span>
        </div>
        <div class="grid grid-cols-2 items-center mt-3">
            <input type="text" placeholder="Nª" class="form-control text-sm">
            <span class="text-xs">Tiempo @ 500 psi</span>
        </div>
        <div class="grid grid-cols-2 items-center mt-3">
            <input type="text" placeholder="Nª" class="form-control text-sm">
            <span class="text-xs">Resistencia a las 12 hs</span>
        </div>
        <div class="grid grid-cols-2 items-center mt-3">
            <input type="text" placeholder="Nª" class="form-control text-sm">
            <span class="text-xs">Resistencia a las 24 hs</span>
        </div>

        <!-- Agua Libre -->
        <div class="flex items-center gap-3 mt-3">
            <div
                class="w-4 h-4 xl:w-5 xl:h-5 bg-gray-400 dark:bg-gray-700 rounded-full flex justify-center text-white items-center">
                <span class="text-xs">
                    6
                </span>
            </div>
            <h5 class="tracking-wide text-sm">Agua Libre</h5>
        </div>
        <input type="text" class="form-control text-sm mt-3" placeholder="Ingrese el agua libre principal">

        <!-- SGS-->
        <div class="flex items-center gap-3 mt-3">
            <div
                class="w-4 h-4 xl:w-5 xl:h-5 bg-gray-400 dark:bg-gray-700 rounded-full flex justify-center text-white items-center">
                <span class="text-xs">
                    7
                </span>
            </div>
            <h5 class="tracking-wide text-sm">SGS</h5>
        </div>
        <input type="text" class="form-control text-sm mt-3" placeholder="Ingrese la sgs principal">

        <!-- Formulación Tentativa -->
        <div class="flex items-center gap-3 mt-3">
            <div
                class="w-4 h-4 xl:w-5 xl:h-5 bg-gray-400 dark:bg-gray-700 rounded-full flex justify-center text-white items-center">
                <span class="text-xs">
                    8
                </span>
            </div>
            <h5 class="tracking-wide text-sm">Formulación Tentativa</h5>
        </div>

        <div class="grid grid-cols-2 mt-3 items-center">
            <span class="text-sm">Tipo de Cemento</span>
            <input type="text" class="form-control text-sm" placeholder="Tipo de Cemento Principal">
        </div>

        <div class="grid mt-3">
            <div class="col-span-3 grid grid-cols-3 text-xs">
                <span>Lote</span>
                <span>Aditivo</span>
                <span>Conc <small>(% BWOC)</small></span>
            </div>

            <div class="container_formulaciones_relleno_phone mt-2 col-span-3"></div>

        </div>
        <button id="btnAddFormulacionRellenoPhone"
            class="text-sm mt-2 bg-gray-200 hover:bg-gray-300 text-gray-600 p-1 rounded-full border border-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8"
                stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
        </button>

    </div>
