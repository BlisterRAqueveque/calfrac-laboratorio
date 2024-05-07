@livewireStyles
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
            data-bs-toggle="tab" href="#tab-perdida_filtrado" data-bs-target="#tab-perdida_filtrado" role="tab"
            aria-controls="tab-perdida_filtrado" aria-selected="false">
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
            data-bs-toggle="tab" href="#tab_bombeabilidad" data-bs-target="#tab_bombeabilidad" role="tab"
            aria-controls="tab_bombeabilidad" aria-selected="false">
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
            data-bs-toggle="tab" href="#tab_uca" data-bs-target="#tab_uca" role="tab" aria-controls="tab_uca"
            aria-selected="false">
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
            data-bs-toggle="tab" href="#tab_agua_libre" data-bs-target="#tab_agua_libre" role="tab"
            aria-controls="tab_agua_libre" aria-selected="false">
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
            data-bs-toggle="tab" href="#tab_mezclabilidad" data-bs-target="#tab_mezclabilidad" role="tab"
            aria-controls="tab_mezclabilidad" aria-selected="false">
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

    {{-- Reología --}}
    @include('ensayo.components.create.reologia')

    <!-- Perdida de Filtrado -->
    {{-- @livewire('ensayo.perdida', ['lechada' => $solicitud_lechada[0], 'rel_perdida_filtrado' => $solicitud_lechada[0]->rel_perdida_filtrado]) --}}


    {{-- @include('ensayo.components.create.perdida') --}}

    <!-- Bombeabilidad -->
    {{-- @include('ensayo.components.create.bombeabilidad') --}}

    <!-- UCA - Resistencia a la Compresión -->
    {{-- @include('ensayo.components.create.uca') --}}

    <!-- Agua Libre -->
    {{-- @include('ensayo.components.create.agua_libre') --}}

    <!-- Mezclabilidad -->
    {{-- @include('ensayo.components.create.mezclabilidad') --}}

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
                                console.log(data.success_reologia);
                                // successAlert('¡Registro Asignado!',
                                //     'El registro se asignó correctamente.').then(
                                //     (confirmed) => {
                                //         window.location.reload();
                                //     })
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
<script src="{{ asset('js/ensayo/create/componentReologia.js') }}"></script>

<!-- Cartel que muestra que el registro fue creado correctamente cuando se hace el submit -->
<script>
    let nav_tab1 = document.getElementById('nav-tab1'); 
    document.addEventListener('DOMContentLoaded', () => {
        @if ($message = session('success_reologia'))
            successAlert('¡Registro de Reología Creada Correctamente!', 'La Reología se creó correctamente')
                .then(
                    (confirmed) => {
                        nav_tab1.classList.add('active')
                        // window.location.reload();
                    })
        @endif
        @if ($message = session('success_perdida_filtrado'))
            successAlert('¡Registro de Pérdida de Filtrado Creada Correctamente!', '')
                .then(
                    (confirmed) => {
                        // window.location.reload();
                    })
        @endif
        @if ($message = session('success_bombeabilidad'))
            successAlert('¡Registro de Bombeabilidad Creada Correctamente!', '')
                .then(
                    (confirmed) => {
                        // window.location.reload();
                    })
        @endif
        @if ($message = session('success_uca'))
            successAlert('¡Registro de UCA Creada Correctamente!', '')
                .then(
                    (confirmed) => {
                        // window.location.reload();
                    })
        @endif
        @if ($message = session('success_agua_libre'))
            successAlert('¡Registro de Agua Libre Creada Correctamente!', '')
                .then(
                    (confirmed) => {
                        // window.location.reload();
                    })
        @endif
        @if ($message = session('success_mezclabilidad'))
            successAlert('¡Registro de Mezclabilidad Creada Correctamente!', '')
                .then(
                    (confirmed) => {
                        // window.location.reload();
                    })
        @endif
    })
</script>

@livewireScripts
