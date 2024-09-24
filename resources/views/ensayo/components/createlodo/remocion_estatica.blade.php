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
<div class="mt-4 tab-pane fade" id="tab-remocion_estatica" role="tabpanel" aria-labelledby="nav-tab_test">
























    @if (count($solicitud_lodo[0]->rel_estatica) == 0)
    <form id="form_estatica_lodo" method="POST">
        @csrf
        <input type="hidden" name="solicitud_lodo_id" value="{{ $solicitud_lodo[0]->id }}">
        <div class="flex mt-3 py-2 px-2">
            <div class="w-1/2">
                <div class="mb-2 text-center">
                    <h5 class="mb-1">Remoción estática del lodo</h5>
                </div>
                <table class="w-full text-sm border border-gray-300">
                    <thead class="bg-gray-200 text-gray-700">
                        <tr>
                            <th class="p-1 text-center border border-gray-300">Tiempo de contacto (min)</th>
                            <th class="p-1 text-center border border-gray-300">DynaFlush-"O"</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-1 text-center border border-gray-300">2.5</td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="text" class="form-control text-sm" placeholder="Ingrese dato" name="tiempo_estatica_1"></td>
                        </tr>
                        <tr>
                            <td class="p-1 text-center border border-gray-300">5</td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="text" class="form-control text-sm" placeholder="Ingrese dato" name="tiempo_estatica_2"></td>
                        </tr>
                        <tr>
                            <td class="p-1 text-center border border-gray-300">7.5</td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="text" class="form-control text-sm" placeholder="Ingrese dato" name="tiempo_estatica_3"></td>
                        </tr>
                        <tr>
                            <td class="p-1 text-center border border-gray-300">10</td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="text" class="form-control text-sm" placeholder="Ingrese dato" name="tiempo_estatica_4"></td>
                        </tr>
                        <tr>
                            <td class="p-1 text-center border border-gray-300">12.5</td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="text" class="form-control text-sm" placeholder="Ingrese dato" name="tiempo_estatica_5"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="w-1/2 pl-4">
                <h5 class="mb-1 text-center">Adjuntos a cargar <span class="text-red-500"><small>(Requerido)</small></span></h5>
                <section id="container_file_lodo_estatica"></section>

                <div id="myModalLodoEstatica" class="modal">
                    <div class="modal-content">
                        <span id="closeImgLodoEstatica" class="closeImg">&times;</span>
                        <img id="modalImgLodoEstatica" style="width: auto;">
                    </div>
                </div>

                <div class="bg-gray-50 w-full mx-auto py-4 flex items-center justify-center rounded-md border border-gray-200 hover:bg-gray-100 cursor-pointer transition-all duration-100"
                    onclick="createFile('file_upload_lodo_estatica')" id="section_upload_image_lodo_estatica">
                    <div class="flex flex-col items-center">
                        <div class="p-3 bg-white rounded-full border">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0 3 3m-3-3-3 3M6.75 19.5a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z" />
                            </svg>
                        </div>
                        <h5><b>Haga click</b> para adjuntar un archivo</h5>
                        <p><small>(Máximo tamaño del archivo 10mb)</small></p>
                    </div>
                </div>
                <br>
                <input type="file" id="file_upload_lodo_estatica" name="file_upload_lodo_estatica" onchange="_listenChange(event, 'container_file_lodo_estatica', 'section_upload_image_lodo_estatica', 'myModalLodoEstatica', 'modalImgLodoEstatica')"
                    hidden>

                <section id="container_file_lodo_estatica_2"></section>
                <div id="myModalLodoEstatica2" class="modal">
                    <div class="modal-content">
                        <span id="closeImgLodoEstatica2" class="closeImg">&times;</span>
                        <img id="modalImgLodoEstatica2" style="width: auto;">
                    </div>
                </div>

                <div class="bg-gray-50 w-full mx-auto py-4 flex items-center justify-center rounded-md border border-gray-200 hover:bg-gray-100 cursor-pointer transition-all duration-100"
                    onclick="createFile('file_upload_lodo_estatica_2')" id="section_upload_image_lodo_estatica_2">
                    <div class="flex flex-col items-center">
                        <div class="p-3 bg-white rounded-full border">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0 3 3m-3-3-3 3M6.75 19.5a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z" />
                            </svg>
                        </div>
                        <h5><b>Haga click</b> para adjuntar un archivo</h5>
                        <p><small>(Máximo tamaño del archivo 10mb)</small></p>
                    </div>
                </div>
                <input type="file" id="file_upload_lodo_estatica_2" name="file_upload_lodo_estatica_2" onchange="_listenChange(event, 'container_file_lodo_estatica_2', 'section_upload_image_lodo_estatica_2', 'myModalLodoEstatica2', 'modalImgLodoEstatica2')"
                    hidden>
            </div>
        </div>
        <div class="flex justify-center">
            <x-button type="click" id="btn_submit_remocion_estatica_lodo" style="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-sm">Crear Registro</x-button>
        </div>
    </form>
    @endif
</div>
<script>
    // Modal open img UCA
    let myModalLodoEstatica = document.querySelector('#myModalLodoEstatica');
    let modalImgLodoEstatica = document.querySelector('#modalImgLodoEstatica');
    let spanImgCloseLodoEstatica = document.querySelector('#closeImgLodoEstatica');

    if (spanImgCloseLodoEstatica) {
        spanImgCloseLodoEstatica.onclick = function() {
            myModalLodoEstatica.style.display = "none";
            document.body.classList.remove('modal-open');
        }
    }

    // Para segundo adjunto

    let myModalLodoEstatica2 = document.querySelector('#myModalLodoEstatica2');
    let modalImgLodoEstatica2 = document.querySelector('#modalImgLodoEstatica2');
    let spanImgCloseLodoEstatica2 = document.querySelector('#closeImgLodoEstatica2');

    if (spanImgCloseLodoEstatica2) {
        spanImgCloseLodoEstatica2.onclick = function() {
            myModalLodoEstatica2.style.display = "none";
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
    const btn_submit_remocion_estatica_lodo = document.getElementById('btn_submit_remocion_estatica_lodo');

    if (btn_submit_remocion_estatica_lodo) {
        btn_submit_remocion_estatica_lodo.addEventListener('click', e => {
            e.preventDefault();
            let form = new FormData(document.getElementById('form_estatica_lodo'))

            confirmAlert().then((confirmed) => {
                if (confirmed) {
                    fetch("{{ route('store_estatica') }}", {
                            method: 'POST',
                            body: form
                        }).then((response) => response.json())
                        .then((data) => {
                            if (data) {
                                //componentReologiasLodo(data.success_caracterizacion_lodo, data.success_reologias_lodos)
                                componentEstaticaLodo(data.success_estatica_lodo)
                                document.getElementById('form_estatica_lodo').style.display = 'none'
                                successAlert('¡Registro Asignado!',
                                    'El registro se asignó correctamente.').then(
                                    (confirmed) => {
                                        // window.location.reload();
                                    })
                                let solicitud_id = {!! json_encode($solicitud->id) !!}
                                // checkGenerateReport(solicitud_id)
                                // .then((data) => {
                                //     if (data.generate_report) {
                                //         // document.querySelector('#tab_g_report_js').classList.remove('d-none')
                                //     }
                                // })
                            }
                        })
                }
            })
        })
    }
</script>

        {{-- <div class="row mt-3 py-2 px-2">
            <table class="w-full text-sm border border-gray-300">
                <thead class="bg-gray-200 text-gray-700">
                    <tr>
                        <th class="p-1 text-center border border-gray-300">Vol.<small>(bbl):</small></th>
                        <th class="p-1 text-center border border-gray-300">50</th>
                        <th class="p-1 text-center border border-gray-300" colspan="2">DynaFlush-"O"</th>
                        <th class="p-1 text-center border border-gray-300">Den.<small>(ppg)</small></th>
                        <th class="p-1 text-center border border-gray-300">14.6</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="py-2 text-center border" colspan="2"></td>
                        <td class="py-2 text-center border">Agua de pozo</td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="text" class="form-control text-sm"
                            placeholder="Ingrese dato" name=""></td>
                        <td class="py-2 px-1 text-center border border-gray-300" colspan="2"><input type="text" class="form-control text-sm"
                            placeholder="Ingrese dato" name=""></td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 text-center border" colspan="2">0</td>
                        <td class="py-2 text-center border">ARF-994</td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="text" class="form-control text-sm"
                            placeholder="Ingrese dato" name=""></td>
                        <td class="py-2 px-1 text-center border border-gray-300" colspan="2"><input type="text" class="form-control text-sm"
                            placeholder="Ingrese dato" name=""></td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 text-center border" colspan="2"></td>
                        <td class="py-2 text-center border">Baritina</td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="text" class="form-control text-sm"
                            placeholder="Ingrese dato" name=""></td>
                        <td class="py-2 px-1 text-center border border-gray-300" colspan="2"><input type="text" class="form-control text-sm"
                            placeholder="Ingrese dato" name=""></td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 text-center border" colspan="2">820</td>
                        <td class="py-2 text-center border">Solvente Mutual</td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="text" class="form-control text-sm"
                            placeholder="Ingrese dato" name=""></td>
                        <td class="py-2 px-1 text-center border border-gray-300" colspan="2"><input type="text" class="form-control text-sm"
                            placeholder="Ingrese dato" name=""></td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 text-center border" colspan="2">10001</td>
                        <td class="py-2 text-center border">Ara-SF2</td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="text" class="form-control text-sm"
                            placeholder="Ingrese dato" name=""></td>
                        <td class="py-2 px-1 text-center border border-gray-300" colspan="2"><input type="text" class="form-control text-sm"
                            placeholder="Ingrese dato" name=""></td>
                    </tr>
                </tbody>
            </table>
        </div> --}}