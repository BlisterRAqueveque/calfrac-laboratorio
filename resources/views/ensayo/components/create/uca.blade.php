<style>
    /* Modal styles */
    .modal {
        display: none;
        position: fixed;
        z-index: 999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
        animation-name: fadeIn;
        animation-duration: 0.5s;
        /* display: flex; */
        justify-content: center;
        align-items: center;
    }

    .modal-content {
        background-color: transparent;
        margin: 15% auto;
        padding: 20px;
        border: none;
        width: 50%;
        animation-name: slideIn;
        animation-duration: 0.5s;
        /* display: flex; */
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .closeImg {
        color: #e1e1e1;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .closeImg:hover,
    .closeImg:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes slideIn {
        from {
            transform: translateY(-50px);
        }

        to {
            transform: translateY(0);
        }
    }

    body.modal-open {
        overflow: hidden;
    }
</style>
<div class="mt-4 tab-pane fade" id="tab_uca" role="tabpanel" aria-labelledby="nav-tab_uca">
    <!-- The Modal -->
    <div id="myModalUca" class="modal">
        <div class="modal-content">
            <span id="closeImgUca" class="closeImg">&times;</span>
            <img id="modalImgUca" style="width: auto;">
        </div>
    </div>
    @if (count($s_l[0]->rel_uca) > 0)
        <div id="registro_uca">
            <div class="mb-2 text-center">
                <h5 class="mb-1">Registro de UCA</h5>
            </div>
            <div class="grid grid-cols-3 gap-3 my-3">
                <div class="col-span-3 grid gap-3 grid-cols-4">
                    <div>
                        <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Principal
                            (ºC)
                        </label>
                        <input type="text" class="form-control text-sm p-2"
                            value="{{ $s_l[0]->rel_uca[0]->principal ? $s_l[0]->rel_uca[0]->principal : 'No aplica' }}"
                            readonly>
                    </div>
                    <div>
                        <label for="uca_psi_50" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">50 psi
                            (hh:mm)</label>
                        <input type="time" name="uca_psi_50" id="uca_psi_50" class="form-control text-sm p-2"
                            value="{{ $s_l[0]->rel_uca[0]->psi_50 ? $s_l[0]->rel_uca[0]->psi_50 : '00:00' }}" readonly>
                    </div>
                    <div>
                        <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">500
                            psi
                            (hh:mm)</label>
                        <input type="time" class="form-control text-sm p-2"
                            value="{{ $s_l[0]->rel_uca[0]->psi_500 ? $s_l[0]->rel_uca[0]->psi_500 : '00:00' }}"
                            readonly>
                    </div>
                    <div>
                        <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">1000
                            psi
                            (hh:mm)</label>
                        <input type="time" class="form-control text-sm p-2"
                            value="{{ $s_l[0]->rel_uca[0]->psi_1000 ? $s_l[0]->rel_uca[0]->psi_1000 : '00:00' }}"
                            readonly>
                    </div>
                </div>

                <div>
                    <label for="uca_hs_12" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">12 hs
                        (psi)</label>
                    <input type="text" class="form-control text-sm p-2"
                        value="{{ $s_l[0]->rel_uca[0]->hs_12 ? $s_l[0]->rel_uca[0]->hs_12 : 'No aplica' }}" readonly>
                </div>
                <div>
                    <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">24 hs
                        (psi)</label>
                    <input type="text" class="form-control text-sm p-2"
                        value="{{ $s_l[0]->rel_uca[0]->hs_24 ? $s_l[0]->rel_uca[0]->hs_24 : 'No aplica' }}" readonly>
                </div>
                <div>
                    <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Impedancia
                        Acústica (M/rayls)</label>
                    <input type="text" class="form-control text-sm p-2"
                        value="{{ $s_l[0]->rel_uca[0]->impedancia_acustica ? $s_l[0]->rel_uca[0]->impedancia_acustica : 'No aplica' }}"
                        readonly>
                </div>
                <div>
                    <label for="uca_sgs_cero" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">SGS
                        cero
                        (hh:mm)</label>
                    <input type="time" name="uca_sgs_cero" id="uca_sgs_cero" class="form-control text-sm p-2"
                        value="{{ $s_l[0]->rel_uca[0]->sgs_cero ? $s_l[0]->rel_uca[0]->sgs_cero : '00:00' }}" readonly>
                </div>
                <div>
                    <label for="uca_sgs_max" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">SGS
                        max
                        (hh:mm)</label>
                    <input type="time" name="uca_sgs_max" id="uca_sgs_max" class="form-control text-sm p-2"
                        value="{{ $s_l[0]->rel_uca[0]->sgs_max ? $s_l[0]->rel_uca[0]->sgs_max : '00:00' }}" readonly>
                </div>
                <div>
                    <label for="uca_tiempo" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Tiempo
                        (hh:mm)</label>
                    <input type="time" name="uca_tiempo" id="uca_tiempo" class="form-control text-sm p-2"
                        value="{{ $s_l[0]->rel_uca[0]->tiempo ? $s_l[0]->rel_uca[0]->tiempo : '00:00' }}" readonly>
                </div>
            </div>

            <div class="mb-2 mt-2 text-center">
                <h5 class="mb-1">Adjunto</h5>
                <section>
                    <div
                        class="relative md:w-1/2 xl:w-1/3 mx-auto flex items-center p-2 border rounded-md border-gray-200 hover:bg-gray-50 ">
                        <div class="w-12 h-12 rounded-full bg-gray-100 flex-shrink-0">
                            <img src="{{ asset('uploads/ensayos/') . '/' . $s_l[0]->rel_uca[0]->img }}"
                                class="w-12 h-12 object-cover rounded-full cursor-pointer" alt=""
                                onclick="openModal('myModalUca', 'modalImgUca', '{{ asset('uploads/ensayos/') . '/' . $s_l[0]->rel_uca[0]->img }}')">
                        </div>
                        <div class="text-left w-full ms-2">
                            <h6 class="text-md">Archivo adjunto</h6>
                            <div class="flex justify-between items-center text-gray-500 text-sm">
                                <p class="mb-0">{{ $s_l[0]->rel_uca[0]->img }}</p>
                            </div>
                        </div>

                    </div>
                </section>
            </div>
        </div>
    @else
        <div id="registro_uca"></div>
    @endif

    @if (count($s_l[0]->rel_uca) == 0)
        <form id="form_uca" class="mt-3">
            <hr class="my-3">
            <div class="mb-2 mt-2 text-center">
                <h5 class="mb-1">Formulario de Registro | UCA - Resistencia a la Compresión</h5>
            </div>
            @csrf
            <input type="hidden" name="solicitud_lechada_id" value="{{ $s_l[0]->id }}">
            <div class="grid grid-cols-3 gap-3 my-3">
                <div class="col-span-3 grid gap-3 grid-cols-4">
                    <div>
                        <label for="uca_principal"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Principal
                            (ºC)</label>
                        <input type="number" name="uca_principal" id="uca_principal" class="form-control text-sm p-2"
                            placeholder="Ingrese la temperatura principal">
                    </div>
                    <div>
                        <label for="uca_psi_50" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">50
                            psi
                            (hh:mm)</label>
                        <input type="time" name="uca_psi_50" id="uca_psi_50" class="form-control text-sm p-2">
                    </div>
                    <div>
                        <label for="uca_psi_500" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">500
                            psi
                            (hh:mm)</label>
                        <input type="time" name="uca_psi_500" id="uca_psi_500" class="form-control text-sm p-2">
                    </div>
                    <div>
                        <label for="uca_psi_1000" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">1000
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
                    <input type="time" name="uca_sgs_cero" id="uca_sgs_cero" class="form-control text-sm p-2">
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
                <h5 class="mb-1">Adjuntos a cargar <span class="text-red-500"><small>(Requerido)</small></span></h5>
                <section id="container_file_uca">
                    {{-- <div
                        class="relative w-1/3 mx-auto flex items-center p-2 border rounded-md border-gray-200 hover:bg-gray-50 cursor-pointer">
                        <div class="w-12 h-12 rounded-full bg-gray-100 flex-shrink-0">
                            <img src="{{ asset('img/imgperfil.jpg') }}" class="w-12 h-12 object-cover rounded-full"
                                alt="">
                        </div>
                        <div class="text-left w-full ms-2">
                            <h6 class="text-md">Archivo cargado</h6>
                            <div class="flex justify-between items-center text-gray-500 text-sm">
                                <p class="mb-0">grafico_prueba.jpg</p>
                                <small><b>Tamaño: 750kb</b></small>
                            </div>
                        </div>
                        <button class="absolute top-0 right-0 hover:bg-gray-200">
                            <x-icons.close></x-icons.close>
                        </button>
                    </div> --}}
                </section>

                <!-- The Modal -->
                <div id="myModalUca" class="modal">
                    <div class="modal-content">
                        <span id="closeImgUca" class="closeImg">&times;</span>
                        <img id="modalImgUca" style="width: auto;">
                    </div>
                </div>

                <div class="bg-gray-50 w-1/2 mx-auto py-8 flex items-center justify-center rounded-md border border-gray-200 hover:bg-gray-100 cursor-pointer transition-all duration-100"
                    onclick="createFile('file_upload_uca')" id="section_upload_image">
                    <div class="flex flex-col items-center">
                        <div class="p-3 bg-white rounded-full border">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 16.5V9.75m0 0 3 3m-3-3-3 3M6.75 19.5a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z" />
                            </svg>
                        </div>

                        <h5><b>Haga click</b> para adjuntar un archivo</h5>
                        <p><small>(Máximo tamaño del archivo 10mb)</small></p>
                    </div>
                </div>
                <input type="file" id="file_upload_uca" name="file_upload_uca" onchange="_listenChange(event, 'container_file_uca', 'section_upload_image', 'myModalUca', 'modalImgUca')"
                    hidden>
            </div>

            <hr>

            <div class="flex justify-center mt-3">
                <x-button type="button" id="btn_submit_uca"
                    style="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-sm">Crear
                    Registro</x-button>
            </div>
        </form>
    @endif
</div>

{{-- Subir gráfico adjunto UCA --}}

<script src="{{ asset('js/upload_one_img.js') }}"></script>
<script>
    // Modal open img UCA
    let myModalUca = document.querySelector('#myModalUca');
    let modalImgUca = document.querySelector('#modalImgUca');
    let spanImgCloseUca = document.querySelector('#closeImgUca');

    if (spanImgCloseUca) {
        spanImgCloseUca.onclick = function() {
            myModalUca.style.display = "none";
            document.body.classList.remove('modal-open');
        }
    }

    // window.onclick = function(event) {
    //     if (event.target == modal) {
    //         myModalUca.style.display = "none";
    //         document.body.classList.remove('modal-open');
    //     }
    // }
</script>

<script>
    const btn_submit_uca = document.getElementById('btn_submit_uca');

    if (btn_submit_uca) {
        btn_submit_uca.addEventListener('click', e => {
            e.preventDefault();
            let form = new FormData(document.getElementById('form_uca'))

            confirmAlert().then((confirmed) => {
                if (confirmed) {
                    fetch("{{ route('store_uca') }}", {
                            method: 'POST',
                            body: form
                        }).then((response) => response.json())
                        .then((data) => {
                            if (data) {
                                componentUCA(data.success_uca)
                                document.getElementById('form_uca').style.display = 'none'
                                console.log(data);
                                successAlert('¡Registro Asignado!',
                                    'El registro se asignó correctamente.').then(
                                    (confirmed) => {
                                        // window.location.reload();
                                    })
                                let solicitud_id = {!! json_encode($solicitud->id) !!}
                                checkGenerateReport(solicitud_id)
                                    .then((data) => {
                                        if (data.generate_report) {
                                            document.querySelector('#tab_g_report_js').classList
                                                .remove('d-none')
                                        }
                                    })
                            }
                        })
                }
            })
        })
    }
</script>
