<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="mt-4 tab-pane fade" id="tab_aditivos" role="tabpanel" aria-labelledby="nav-tab_aditivos">
    @if (count($s_l[0]->rel_aditivos) > 0)
    <div id="registro_aditivos">
        <h5 class="mb-2 text-center">Registro de Aditivos</h5>
    <hr>

    <br>

    <div class="grid grid-cols-6 gap-3">
        <div class="col-span-6 md:col-span-2">
            <label for="densidad_ensayo" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Densidad</label>
            @foreach ($s_l[0]->calculos_ensayos as $calculo)
            <input type="text" name="densidad_ensayo" 
                   value="{{ $calculo->densidad_ensayo ?? '-' }}" 
                   class="form-control text-sm" placeholder="Ingrese densidad" readonly>
            @endforeach
        </div>

        <div class="col-span-6 md:col-span-2">
            <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Rendimiento</label>
            @foreach ($s_l[0]->calculos_ensayos as $calculo)
            <input type="text" name="rendimiento_ensayo" 
                   value="{{ $calculo->rendimiento_ensayo ?? '-' }}" 
                   class="form-control text-sm" placeholder="Ingrese rendimiento" readonly>
            @endforeach
        </div>

        <div class="col-span-6 md:col-span-2">
            <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">L/bolsa </label>
            @foreach ($s_l[0]->calculos_ensayos as $calculo)
            <input type="text" name="bolsa_ensayo" 
                   value="{{ $calculo->bolsa_ensayo ?? '-' }}" 
                   class="form-control text-sm" placeholder="Ingrese L/bolsa" readonly>
            @endforeach
        </div>
    </div>
    
    <br>
        <div class="grid grid-cols-5 text-center bg-gray-100 py-2 my-3">
            <p>N° Lote</p>
            <p>Aditivo</p>
            <p>Conc. %</p>
            <p>Units</p>
            <p>OM</p>
        </div>
        <div id="container_formulaciones_tentativas_aditivos_lechada"></div>

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
            @foreach ($s_l[0]->rel_aditivos as $formulacion)
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
                            placeholder="Units" value="{{ '%BOWC'}}" name="aditivos[{{$inc}}][om]" readonly>
                        <input type="text" class="form-control text-xs p-2 col-span-4 md:col-span-1"
                            placeholder="OM" value="{{ $formulacion->om }}" name="aditivos[{{$inc}}][om]" readonly>
                    </div>
                </div>
                @php
                    $inc++;
                @endphp
            @endforeach
        </div>
    </div>
    @else
    <div id="registro_aditivos"></div>
    @endif
    @if (count($s_l[0]->rel_aditivos) == 0)
    <form id="form_aditivos" method="POST">
        @csrf
        <input type="hidden" name="solicitud_lechada_id" value="{{ $s_l[0]->id }}">
        <h5 class="mb-2 text-center">Registro de Aditivos</h5>
    
        <hr>
        
        <br>
        
        <div class="grid grid-cols-6 gap-3">
            <div class="col-span-6 md:col-span-2">
                <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Densidad <small>(ppg)</small></label>
                <input type="text" name="densidad_ensayo" value="" class="form-control text-sm" placeholder="Ingrese la densidad">
            </div>

            <div class="col-span-6 md:col-span-2">
                <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Rendimiento</label>
                <input type="text" name="rendimiento_ensayo" value="" class="form-control text-sm" placeholder="Ingrese el rendimiento">
            </div>

            <div class="col-span-6 md:col-span-2">
                <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">L/bolsa </label>
                <input type="text" name="bolsa_ensayo" value="" class="form-control text-sm" placeholder="Ingrese el L/bolsa">
            </div>
        </div>
        
        <br>
        
        <div class="grid grid-cols-5 text-center bg-gray-100 py-2 my-3">
            <p>N° Lote</p>
            <p>Aditivo</p>
            <p>Conc. %</p>
            <p>Units</p>
            <p>OM</p>
        </div>
        <div id="container_formulaciones_tentativas_aditivos_lechada"></div>
    
        <div class="text-center mt-3">
            <button id="btnAddFormulacionEnsayoAditivo" class="text-sm mt-2 bg-gray-200 hover:bg-gray-300 text-gray-600 p-1 rounded-md px-3 border transition-all duration-200 border-gray-300">
                Agregar Formulación
            </button>
        </div>
    
        <br>
    
        <div class="flex justify-center">
            <x-button type="button" id="btn_submit_registros_aditivos"
                style="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-sm">Crear
                Registro</x-button>
        </div>
    </form>
    @endif
</div>

<script>
    const btn_submit_registros_aditivos = document.getElementById('btn_submit_registros_aditivos');

    if (btn_submit_registros_aditivos) {
        btn_submit_registros_aditivos.addEventListener('click', e => {
            e.preventDefault();
            let form = new FormData(document.getElementById('form_aditivos'))

            confirmAlert().then((confirmed) => {
                if (confirmed) {
                    fetch("{{ route('store_aditivos') }}", {
                            method: 'POST',
                            body: form
                        }).then((response) => response.json())
                        .then((data) => {
                            if (data) {
                                //componentAditivos(data.success_aditivos)
                                componentShowAditivos(data.success_aditivos, data.success_calculos)
                                
                                //console.log('Data aditivos:', data.success_aditivos)
                                //console.log('Data calculos:', data.success_calculos)
                                document.getElementById('form_aditivos').style.display = 'none'
                                successAlert('¡Registro Asignado!',
                                    'El registro se asignó correctamente.')
                                    
                                let solicitud_id = {!! json_encode($solicitud->id) !!}
                                checkGenerateReport(solicitud_id)
                                .then((data) => {
                                    if (data.generate_report) {
                                        document.querySelector('#tab_g_report_js').classList.remove('d-none')
                                    }
                                })
                            }
                        })
                }
            })
        })
    }
</script>

