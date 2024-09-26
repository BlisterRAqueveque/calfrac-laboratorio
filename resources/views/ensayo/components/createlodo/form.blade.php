<ul role="tablist" aria-owns="nav-tab1 nav-tab2 nav-tab3 nav-tab4" class="nav mt-4 nav-tabs" id="nav-tab-with-nested-tabs"
    style="z-index: 999">
    <li class="nav-item w-full md:w-auto text-xs xl:text-sm" role="presentation">
        <a class="nav-link nav_tab_mod d-flex items-center gap-2 justify-center active text-violet-700"
            aria-current="page" id="nav-tab1" href="#tab-sistema" data-bs-toggle="tab" data-bs-target="#tab-sistema"
            role="tab" aria-controls="tab-sistema" aria-selected="true">
            <div
                class="w-4 h-4 xl:w-5 xl:h-5 bg-gray-400 shadow-sm rounded-full flex justify-center text-white items-center">
                <span>
                    1
                </span>
            </div>
            Sistema 
        </a>
    </li>
    <li class="nav-item w-full md:w-auto text-xs xl:text-sm flex-1" role="presentation">
        <a class="nav-link nav_tab_mod d-flex items-center justify-center gap-2 text-violet-700" id="nav-tab2"
            data-bs-toggle="tab" href="#tab-caracterizacion" data-bs-target="#tab-caracterizacion" role="tab"
            aria-controls="tab-caracterizacion" aria-selected="false">
            <div
                class="w-4 h-4 xl:w-5 xl:h-5 bg-gray-400 shadow-sm rounded-full flex justify-center text-white items-center">
                <span>
                    2
                </span>
            </div>
           Caracterización
        </a>
    </li>
    <li class="nav-item w-full md:w-auto text-xs xl:text-sm flex-1" role="presentation">
        <a class="nav-link nav_tab_mod d-flex items-center justify-center gap-2 text-violet-700" id="nav-tab2"
            data-bs-toggle="tab" href="#tab-compatibilidad_espaciador" data-bs-target="#tab-compatibilidad_espaciador" role="tab"
            aria-controls="tab-compatibilidad_espaciador" aria-selected="false">
            <div
                class="w-4 h-4 xl:w-5 xl:h-5 bg-gray-400 shadow-sm rounded-full flex justify-center text-white items-center">
                <span>
                    3
                </span>
            </div>
           Compatibilidad
        </a>
    </li>
    <li class="nav-item w-full md:w-auto text-xs xl:text-sm flex-1" role="presentation">
        <a class="nav-link nav_tab_mod d-flex items-center justify-center gap-2 text-violet-700" id="nav-tab2"
            data-bs-toggle="tab" href="#tab-remocion_mecanica" data-bs-target="#tab-remocion_mecanica" role="tab"
            aria-controls="tab-remocion_mecanica" aria-selected="false">
            <div
                class="w-4 h-4 xl:w-5 xl:h-5 bg-gray-400 shadow-sm rounded-full flex justify-center text-white items-center">
                <span>
                    4
                </span>
            </div>
           Remoción mecánica
        </a>
    </li>
    <li class="nav-item w-full md:w-auto text-xs xl:text-sm flex-1" role="presentation">
        <a class="nav-link nav_tab_mod d-flex items-center justify-center gap-2 text-violet-700" id="nav-tab2"
            data-bs-toggle="tab" href="#tab-remocion_estatica" data-bs-target="#tab-remocion_estatica" role="tab" aria-controls="tab-remocion_estatica"
            aria-selected="false">
            <div
                class="w-4 h-4 xl:w-5 xl:h-5 bg-gray-400 shadow-sm rounded-full flex justify-center text-white items-center">
                <span>
                    5
                </span>
            </div>
            Remoción estática
        </a>
    </li>
    <li class="nav-item w-full md:w-auto text-xs xl:text-sm" role="presentation">
        <a class="nav-link nav_tab_mod d-flex items-center justify-center gap-2 text-violet-700" id="nav-tab2"
            data-bs-toggle="tab" href="#tab-humectabilidad" data-bs-target="#tab-humectabilidad" role="tab"
            aria-controls="tab-humectabilidad" aria-selected="false">
            <div
                class="w-4 h-4 xl:w-5 xl:h-5 bg-gray-400 shadow-sm rounded-full flex justify-center text-white items-center">
                <span>
                    6
                </span>
            </div>
           Humectabilidad
        </a>
    </li>

</ul>

<div class="tab-content" id="nav-tabs-content">
    <input type="hidden" value="{{ $solicitud->id }}" name="solicitud_id">
    {{-- Sistema de Aditivos --}}
    @include('ensayo.components.createlodo.sistema_aditivos')
    {{-- Caracterizacion de lodo --}}
    @include('ensayo.components.createlodo.caracterizacion_lodo')
    {{-- Compatibilidad Espaciador-Lodo --}}
    @include('ensayo.components.createlodo.compatibilidad_espaciador')
    {{-- Remoción Mecanica --}}
    @include('ensayo.components.createlodo.remocion_mecanica')
    {{-- Remoción Estática --}}
    @include('ensayo.components.createlodo.remocion_estatica')
    {{-- Remoción Estática --}}
    @include('ensayo.components.createlodo.humectabilidad')

</div>

    <!-- Modal -->
<div class="modal fade" id="modalSubmitEnsayoLodo" tabindex="-1" aria-hidden="true">
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
                <button type="submit" id="btnSendEnsayoLodoSubmit"
                    class="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-sm">Confirmar</button>
            </div>
        </div>
    </div>
</div>
{{-- JavaScript dinamico para el reload de las tablas de Reologias de Lodo --}}
<script src="{{ asset('js/ensayo/createlodo/componentAditivosLodo.js') }}"></script>
<script src="{{ asset('js/ensayo/createlodo/componentReologiasLodo.js') }}"></script>
<script src="{{ asset('js/ensayo/createlodo/componentCompatibilidadLodo.js') }}"></script>
<script src="{{ asset('js/ensayo/createlodo/componentMecanicaLodo.js') }}"></script>
<script src="{{ asset('js/ensayo/createlodo/componentEstaticaLodo.js') }}"></script>
<script src="{{ asset('js/ensayo/createlodo/componentShowAditivosLodo.js') }}"></script>
<script src="{{ asset('js/ensayo/createlodo/componentHumectabilidad.js') }}"></script>
<!--Aca iria un script para mostrar un cartel de carga pero meh -->

{{-- <script src="{{ asset('js/ensayos_lodo/componentCaracterizacion.js') }}"></script>
<script src="{{ asset('js/ensayos_lodo/componentCompatibilidad.js') }}"></script>
<script src="{{ asset('js/ensayos_lodo/componentHumectabilidad.js') }}"></script>
<script src="{{ asset('js/ensayos_lodo/componentInhibidor.js') }}"></script>
<script src="{{ asset('js/ensayos_lodo/componentRemocionEstatica.js') }}"></script>
<script src="{{ asset('js/ensayos_lodo/componentRemocionDinamica.js') }}"></script>
<script src="{{ asset('js/ensayos_lodo/componentWettability.js') }}"></script> --}}