<ul role="tablist" aria-owns="nav-tab1 nav-tab2 nav-tab3 nav-tab4" class="nav mt-4 nav-tabs" id="nav-tab-with-nested-tabs"
    style="z-index: 999">
    <li class="nav-item w-full md:w-auto text-xs xl:text-sm" role="presentation">
        <a class="nav-link nav_tab_mod d-flex items-center gap-2 justify-center active text-violet-700"
            aria-current="page" id="nav-tab1" href="#tab-reologia" data-bs-toggle="tab" data-bs-target="#tab-reologia"
            role="tab" aria-controls="tab-reologia" aria-selected="true">
            <div
                class="w-4 h-4 xl:w-5 xl:h-5 bg-gray-400 shadow-sm rounded-full flex justify-center text-white items-center">
                <span>
                    1
                </span>
            </div>
            Reología
        </a>
    </li>
    <li class="nav-item w-full md:w-auto text-xs xl:text-sm flex-1" role="presentation">
        <a class="nav-link nav_tab_mod d-flex items-center justify-center gap-2 text-violet-700" id="nav-tab2"
            data-bs-toggle="tab" href="#tab-perdida_filtrado" data-bs-target="#tab-perdida_filtrado" role="tab"
            aria-controls="tab-perdida_filtrado" aria-selected="false">
            <div
                class="w-4 h-4 xl:w-5 xl:h-5 bg-gray-400 shadow-sm rounded-full flex justify-center text-white items-center">
                <span>
                    2
                </span>
            </div>
            Pérdida de Filtrado
        </a>
    </li>
    <li class="nav-item w-full md:w-auto text-xs xl:text-sm flex-1" role="presentation">
        <a class="nav-link nav_tab_mod d-flex items-center justify-center gap-2 text-violet-700" id="nav-tab2"
            data-bs-toggle="tab" href="#tab_bombeabilidad" data-bs-target="#tab_bombeabilidad" role="tab"
            aria-controls="tab_bombeabilidad" aria-selected="false">
            <div
                class="w-4 h-4 xl:w-5 xl:h-5 bg-gray-400 shadow-sm rounded-full flex justify-center text-white items-center">
                <span>
                    3
                </span>
            </div>
            Tiempo de Bombeabilidad
        </a>
    </li>
    <li class="nav-item w-full md:w-auto text-xs xl:text-sm flex-1" role="presentation">
        <a class="nav-link nav_tab_mod d-flex items-center justify-center gap-2 text-violet-700" id="nav-tab2"
            data-bs-toggle="tab" href="#tab_uca" data-bs-target="#tab_uca" role="tab" aria-controls="tab_uca"
            aria-selected="false">
            <div
                class="w-4 h-4 xl:w-5 xl:h-5 bg-gray-400 shadow-sm rounded-full flex justify-center text-white items-center">
                <span>
                    4
                </span>
            </div>
            Resistencia a la Compresión
        </a>
    </li>
    <li class="nav-item w-full md:w-auto text-xs xl:text-sm" role="presentation">
        <a class="nav-link nav_tab_mod d-flex items-center justify-center gap-2 text-violet-700" id="nav-tab2"
            data-bs-toggle="tab" href="#tab_agua_libre" data-bs-target="#tab_agua_libre" role="tab"
            aria-controls="tab_agua_libre" aria-selected="false">
            <div
                class="w-4 h-4 xl:w-5 xl:h-5 bg-gray-400 shadow-sm rounded-full flex justify-center text-white items-center">
                <span>
                    5
                </span>
            </div>
            Agua Libre
        </a>
    </li>

    <li class="nav-item w-full md:w-auto text-xs xl:text-sm flex-1" role="presentation">
        <a class="nav-link nav_tab_mod d-flex items-center justify-center gap-2 text-violet-700" id="nav-tab2"
            data-bs-toggle="tab" href="#tab_mezclabilidad" data-bs-target="#tab_mezclabilidad" role="tab"
            aria-controls="tab_mezclabilidad" aria-selected="false">
            <div
                class="w-4 h-4 xl:w-5 xl:h-5 bg-gray-400 shadow-sm rounded-full flex justify-center text-white items-center">
                <span>
                    6
                </span>
            </div>
            Mezclabilidad
        </a>
    </li>

    @if ($solicitud->ensayo_asignado_id == null)
        <li class="nav-item w-full md:w-auto text-xs xl:text-sm flex-1 {{ $generar_reporte ? '' : 'd-none' }} "
            id="tab_g_report_js" role="presentation">
            <a class="nav-link nav_tab_mod d-flex items-center justify-center gap-2 text-violet-700" id="nav-tab2"
                data-bs-toggle="tab" href="#tab_generar_reporte" data-bs-target="#tab_generar_reporte" role="tab"
                aria-controls="tab_generar_reporte" aria-selected="false">
                <div
                    class="w-4 h-4 xl:w-5 xl:h-5 bg-green-700 bg-opacity-60 shadow-sm rounded-full flex justify-center text-white items-center">
                    <span>
                        <x-icons.check class="w-4 h-4" stroke-width="1.5" />
                    </span>
                </div>
                Generar Reporte
            </a>
        </li>
    @else
        <li class="nav-item w-full md:w-auto text-xs xl:text-sm flex-1 {{ $generar_reporte ? '' : 'd-none' }} "
            id="tab_g_report_js" role="presentation">
            <a class="nav-link nav_tab_mod d-flex items-center justify-center gap-2 text-violet-700" id="nav-tab2"
                data-bs-toggle="tab" href="#tab_reporte_pdf" data-bs-target="#tab_reporte_pdf" role="tab"
                aria-controls="tab_reporte_pdf" aria-selected="false">
                <div
                    class="w-4 h-4 xl:w-5 xl:h-5 bg-opacity-60 shadow-sm rounded-sm flex justify-center text-red items-center">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 text-red-900">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m8.25 3v6.75m0 0-3-3m3 3 3-3M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                        </svg>
                    </span>
                </div>
                Reporte - PDF
            </a>
        </li>
    @endif
</ul>

<div class="tab-content" id="nav-tabs-content">
    <input type="hidden" value="{{ $solicitud->id }}" name="solicitud_id">

    {{-- Reología --}}
    @include('ensayo.components.create.reologia')

    <!-- Perdida de Filtrado -->
    @include('ensayo.components.create.perdida')

    <!-- Bombeabilidad -->
    @include('ensayo.components.create.bombeabilidad')

    <!-- UCA - Resistencia a la Compresión -->
    @include('ensayo.components.create.uca')

    <!-- Agua Libre -->
    @include('ensayo.components.create.agua_libre')

    <!-- Mezclabilidad -->
    @include('ensayo.components.create.mezclabilidad')

    <!-- Generar Reporte -->
    @include('ensayo.components.create.generar_reporte')
    
    <!-- Reporte - PDF -->
    @include('ensayo.components.create.reporte_pdf')

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

<!-- Cartel de carga mientras se carga el formulario del Ensayo -->
<script>
    const btnSendEnsayoSubmit = document.getElementById('btnSendEnsayoSubmit');
    btnSendEnsayoSubmit.addEventListener('click', e => {
        loadingAlert();
    })
    /**
     * Setea la URL en un Script de JS
     */
    function _setUrl(url, value) {
        return `{{ asset('${url}/${value}') }}`;
    }
</script>
<script src="{{ asset('js/ensayo/create/componentReologia.js') }}"></script>
<script src="{{ asset('js/ensayo/create/componentFiltrado.js') }}"></script>
<script src="{{ asset('js/ensayo/create/componentBombeabilidad.js') }}"></script>
<script src="{{ asset('js/ensayo/create/componentUCA.js') }}"></script>
<script src="{{ asset('js/ensayo/create/componentAguaLibre.js') }}"></script>
<script src="{{ asset('js/ensayo/create/componentMezclabilidad.js') }}"></script>

<!-- Esto es para generar el reporte pdf -->
<script>
    const checkGenerateReport = (solicitud_id) => {
        return new Promise((resolve, reject) => {
            fetch("{{ route('check_report', '') }}" + "/" + solicitud_id, {
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                            'content')
                    },
                })
                .then((response) => response.json())
                .then((data) => {
                    resolve(data);
                })
                .catch((error) => {
                    reject(error);
                });
        })
    }
</script>
