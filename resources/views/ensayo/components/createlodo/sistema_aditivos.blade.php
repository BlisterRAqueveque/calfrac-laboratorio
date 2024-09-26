<div class="mt-4 tab-pane fade show active" id="tab-sistema" role="tabpanel"> 
    @if (count($solicitud_lodo[0]->rel_aditivos) > 0)
    <h5 class="mb-2 text-center">Registro de Aditivos</h5>
    <div class="grid grid-cols-4 text-center bg-gray-100 py-2 my-3">
        <p>N° Lote</p>
        <p>Aditivo</p>
        <p>Conc. %</p>
        <p>Unidad <small>(lt/m³ o kg/m³)</small></p>
    </div>
    <div id="container_formulaciones_tentativas_aditivos_lodo"></div>

    <style>
        .btn_del_formulacion.inactive {
            display: none;
        }
    
        .btn_add_formulacion.inactive {
            display: none;
        }
    </style>
        <div id="container_formulaciones_tentativas_delete"></div>
        <div id="container_formulaciones_tentativas">
            @php
                $inc = 0;
            @endphp
            @foreach ($solicitud_lodo[0]->rel_aditivos as $formulacion)
                <div class="flex gap-2 justify-between mb-2 border">
                    <div class="w-full flex gap-2 bg-gray-100 p-2">
                        <input type="hidden" value="{{ $formulacion->id }}" name="aditivos[{{$inc}}][id]">
                        <div class="col-span-3 text-right btn_del_formulacion inactive">
                            <button class="bg-red-700 text-white rounded-md font-semibold px-3"
                                onclick="btnDeleteFormulacion(this, {{ $formulacion }})">Eliminar</button>
                        </div>
                        <input type="text" class="form-control text-xs rounded-l-none p-2 col-span-4 md:col-span-1"
                            placeholder="Lote" value="{{ $formulacion->lote }}" name="aditivos[{{$inc}}][lote]" readonly>
                        <!-- Aditivo -->
                        <input type="text" 
                               class="form-control text-xs p-2 {{ $formulacion->aditivo == 'SD' ? 'w-1/2' : '' }}"
                               value="{{ $formulacion->aditivos->nombre ?? $formulacion->aditivo }}" 
                               placeholder="Aditivo" name="aditivos[{{$inc}}][aditivo]" readonly>
                        <!-- Comentario (se muestra solo si el aditivo es 'SD') -->
                        @if($formulacion->aditivo == 'SD')
                        <input type="text" class="form-control text-xs p-2 w-1/2"
                            placeholder="Comentario" value="{{ $formulacion->comentario }}" name="aditivos[{{$inc}}][comentario]" readonly>
                        @endif
                        <input type="text" class="form-control text-xs p-2 col-span-4 md:col-span-1"
                            placeholder="Concentración" value="{{ $formulacion->concentracion }}" name="aditivos[{{$inc}}][concentracion]" readonly>
                        <input type="text" class="form-control text-xs p-2 col-span-4 md:col-span-1"
                            placeholder="Unidad" value="{{ $formulacion->unidad }}" name="aditivos[{{$inc}}][unidad]" readonly>
                    </div>
                </div>
                @php
                    $inc++;
                @endphp
            @endforeach
        </div>

    @else
    <div id="registro_aditivos_lodo"></div>
    @endif
@if (count($solicitud_lodo[0]->rel_aditivos) == 0)
<form id="form_aditivos_lodo" method="POST">
    @csrf
    <input type="hidden" name="solicitud_lodo_id" value="{{ $solicitud_lodo[0]->id }}">
    <h5 class="mb-2 text-center">Registro de Aditivos</h5>
    
    <div class="grid grid-cols-4 text-center bg-gray-100 py-2 my-3">
        <p>N° Lote</p>
        <p>Aditivo</p>
        <p>Conc. %</p>
        <p>Unidad <small>(lt/m³ o kg/m³)</small></p>
    </div>
    <div id="container_formulaciones_tentativas_aditivos_lodo"></div>

    <div class="text-center mt-3">
        <button id="btnAddFormulacionEnsayoAditivoLodo" class="text-sm mt-2 bg-gray-200 hover:bg-gray-300 text-gray-600 p-1 rounded-md px-3 border transition-all duration-200 border-gray-300">
            Agregar Formulación
        </button>
    </div>

    <br>

    <div class="flex justify-center">
        <x-button type="button" id="btn_submit_registros_aditivos_lodo_lodo"
            style="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-sm">Crear
            Registro</x-button>
    </div>

    <script>
        const aditivos = @json($aditivos); // Asegúrate de que esta línea esté aquí
    </script>
</form>
@endif
</div>

<script>
    const btn_submit_registros_aditivos_lodo = document.getElementById('btn_submit_registros_aditivos_lodo_lodo');

    if (btn_submit_registros_aditivos_lodo) {
        btn_submit_registros_aditivos_lodo.addEventListener('click', e => {
            e.preventDefault();
            let form = new FormData(document.getElementById('form_aditivos_lodo'))

            confirmAlert().then((confirmed) => {
                if (confirmed) {
                    fetch("{{ route('store_aditivos_lodo') }}", {
                            method: 'POST',
                            body: form
                        }).then((response) => response.json())
                        .then((data) => {
                            if (data) {
                                componentShowAditivosLodo(data.success_aditivos_lodo)
                                //componentShowAditivos(data.success_aditivos, data.success_calculos)
                                
                                console.log('Data aditivos:', data.success_aditivos_lodo)
                                //console.log('Data calculos:', data.success_calculos)
                                document.getElementById('form_aditivos_lodo').style.display = 'none'
                                successAlert('¡Registro Asignado!',
                                    'El registro se asignó correctamente.')
                                    
                                let solicitud_id = {!! json_encode($solicitud->id) !!}
                                //checkGenerateReport(solicitud_id)
                                //.then((data) => {
                                //    if (data.generate_report) {
                                //        document.querySelector('#tab_g_report_js').classList.remove('d-none')
                                //    }
                                //})
                            }
                        })
                }
            })
        })
    }
</script>
