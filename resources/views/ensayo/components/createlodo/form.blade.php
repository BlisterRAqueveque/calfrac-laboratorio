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
        <a class="nav-link nav_tab_mod d-flex items-center justify-center gap-2 text-violet-700 disabled-tab" id="nav-tab2"
            data-bs-toggle="tab" href="#tab-compatibilidad_espaciador" data-bs-target="#tab-compatibilidad_espaciador" role="tab"
            aria-controls="tab-compatibilidad_espaciador" aria-selected="false" aria-disabled="true">
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
        <a class="nav-link nav_tab_mod d-flex items-center justify-center gap-2 text-violet-700 disabled-tab" id="nav-tab2"
            data-bs-toggle="tab" href="#tab-remocion_mecanica" data-bs-target="#tab-remocion_mecanica" role="tab"
            aria-controls="tab-remocion_mecanica" aria-selected="false" aria-disabled="true">
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
        <a class="nav-link nav_tab_mod d-flex items-center justify-center gap-2 text-violet-700 disabled-tab" id="nav-tab2"
            data-bs-toggle="tab" href="#tab-remocion_estatica" data-bs-target="#tab-remocion_estatica" role="tab" aria-controls="tab-remocion_estatica"
            aria-selected="false" aria-disabled="true">
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
    {{-- Registro Sistema de Aditivos --}}
    @include('ensayo.components.createlodo.sistema_aditivos')
    {{-- Registro Caracterizacion de lodo --}}
    @include('ensayo.components.createlodo.caracterizacion_lodo')
    {{-- Registro Compatibilidad Espaciador-Lodo --}}
    @include('ensayo.components.createlodo.compatibilidad_espaciador')
    {{-- Registro Remoción Mecanica --}}
    @include('ensayo.components.createlodo.remocion_mecanica')
    {{-- Registro Remoción Estática --}}
    @include('ensayo.components.createlodo.remocion_estatica')
    {{-- Registro Humectabilidad --}}
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


  
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Obtener las pestañas 3, 4 y 5
        const tab3 = document.querySelector('a[href="#tab-compatibilidad_espaciador"]');
        const tab4 = document.querySelector('a[href="#tab-remocion_mecanica"]');
        const tab5 = document.querySelector('a[href="#tab-remocion_estatica"]');

        // Obtener los datos de 'rel_aditivos' de Blade
        const aditivos = @json($solicitud_lodo[0]->rel_aditivos);

        // Función para habilitar las pestañas
        function enableTabs() {
            tab3.classList.remove('disabled-tab');
            tab3.removeAttribute('aria-disabled');
            tab4.classList.remove('disabled-tab');
            tab4.removeAttribute('aria-disabled');
            tab5.classList.remove('disabled-tab');
            tab5.removeAttribute('aria-disabled');
        }

        // Función para deshabilitar las pestañas
        function disableTabs() {
            tab3.classList.add('disabled-tab');
            tab3.setAttribute('aria-disabled', 'true');
            tab4.classList.add('disabled-tab');
            tab4.setAttribute('aria-disabled', 'true');
            tab5.classList.add('disabled-tab');
            tab5.setAttribute('aria-disabled', 'true');
        }

        // Verificar si hay aditivos, si hay, habilita las pestañas
        if (aditivos.length > 0) {
            enableTabs();
        } else {
            disableTabs();
        }
    });

    function habilitarSolapas() {
    // Selecciona todas las solapas que tienen la clase `disabled-tab`
    const solapasDeshabilitadas = document.querySelectorAll('.disabled-tab');
    
    // Recorre las solapas y quita la clase `disabled-tab` y el atributo `aria-disabled`
    solapasDeshabilitadas.forEach((solapa) => {
        solapa.classList.remove('disabled-tab'); // Quita la clase de deshabilitado
        solapa.setAttribute('aria-disabled', 'false'); // Cambia el estado a habilitado
    });
}
</script>


<!--Aca iria un script para mostrar un cartel de carga pero meh -->
{{-- <script>
    const checkGenerateReportLodo = (solicitud_id) => {
        console.log(solicitud_id); 
        return new Promise((resolve, reject) => {
            fetch("{{ route('check_report_lodo', '') }}" + "/" + solicitud_id, {
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
</script> --}}
