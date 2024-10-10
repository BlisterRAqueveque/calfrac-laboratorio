<div class="mt-4 tab-pane fade" id="tab-compatibilidad_espaciador" role="tabpanel" aria-labelledby="nav-tab_test">   
    @if (count($solicitud_lodo[0]->rel_compatibilidad) > 0)
<div class="accordionCompatibilidadLodo" id="accordionCompatibilidadLodo">
    <div class="mb-2 text-center">
        <h5 class="mb-1">Registro de Compatibilidad Colchón Mecánico y Lodo</h5>
    </div>
    
    {{-- <div class="row mt-3 py-2 px-2" id="solapa3">
        <table class="w-full text-sm border border-gray-300">
            <thead class="bg-gray-200 text-gray-700">
                <tr>
                    <th class="p-1 text-center border border-gray-300">Vol.<small>(bbl):</small></th>
                    <th class="p-1 text-center border border-gray-300">{{ $solicitud_lodo[0]->vol_colchon }}</th>
                    <th class="p-1 text-center border border-gray-300" colspan="2">
                        {{ isset($solicitud_lodo[0]->rel_colchon) ? $solicitud_lodo[0]->rel_colchon->nombre : '-' }}
                    </th>
                    <th class="p-1 text-center border border-gray-300">Den.<small>(ppg)</small></th>
                    <th class="p-1 text-center border border-gray-300">{{ $solicitud_lodo[0]->densidad_colchon }}</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($solicitud_lodo[0]->rel_aditivos) && count($solicitud_lodo[0]->rel_aditivos) > 0)
                    @foreach($solicitud_lodo[0]->rel_aditivos as $index => $aditivo)
                        @php
                            // Obtener el nombre del aditivo
                            $nombreAditivo = isset($aditivo->aditivos->nombre) ? $aditivo->aditivos->nombre : ($aditivo->aditivo == 'SD' ? $aditivo->comentario : '-');
                            
                            // Buscar la compatibilidad correspondiente
                            $colchon = isset($solicitud_lodo[0]->compatibilidades[$index]) ? $solicitud_lodo[0]->compatibilidades[$index]->colchon : '-';
                            $densidad = isset($solicitud_lodo[0]->compatibilidades[$index]) ? $solicitud_lodo[0]->compatibilidades[$index]->densidad : '-';
                        @endphp
                        <tr class="border-b">
                            <td class="py-2 text-center border" colspan="2">{{ $aditivo->lote }}</td>
                            <td class="py-2 text-center border">{{ $nombreAditivo }}</td>
                            <td class="py-2 px-1 text-center border border-gray-300">{{ $colchon }}</td>
                            <td class="py-2 px-1 text-center border border-gray-300" colspan="2">{{ $densidad }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div> --}}
    
    <div class="flex">
        <div class="w-1/2 p-2">
            <div class="row mt-3 py-2 px-2">
                <br>
                <table class="w-full text-sm border border-gray-300">
                    <thead class="bg-gray-200 text-gray-700">
                        <tr>
                            <th class="p-1 text-center border border-gray-300" colspan="2">% de Fluido</th>
                            <th class="p-1 text-center border border-gray-300">VP</th>
                            <th class="p-1 text-center border border-gray-300">YP</th>
                        </tr>
                        <tr>
                            <th class="p-1 text-center border border-gray-300">Lodo</th>
                            <th class="p-1 text-center border border-gray-300">Colchón</th>
                            <th class="p-1 text-center border border-gray-300">(cp)</th>
                            <th class="p-1 text-center border border-gray-300">(lb/100ft2)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2 text-center border">100</td>
                            <td class="py-2 text-center border">0</td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_compatibilidad[0]->vp_1 ? $solicitud_lodo[0]->rel_compatibilidad[0]->vp_1 : '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_compatibilidad[0]->yp_1 ? $solicitud_lodo[0]->rel_compatibilidad[0]->yp_1 : '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2 text-center border">75</td>
                            <td class="py-2 text-center border">25</td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_compatibilidad[0]->vp_2 ? $solicitud_lodo[0]->rel_compatibilidad[0]->vp_2 : '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_compatibilidad[0]->yp_2 ? $solicitud_lodo[0]->rel_compatibilidad[0]->yp_2 : '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2 text-center border">50</td>
                            <td class="py-2 text-center border">50</td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_compatibilidad[0]->vp_3 ? $solicitud_lodo[0]->rel_compatibilidad[0]->vp_3 : '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_compatibilidad[0]->yp_3 ? $solicitud_lodo[0]->rel_compatibilidad[0]->yp_3 : '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2 text-center border">25</td>
                            <td class="py-2 text-center border">75</td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_compatibilidad[0]->vp_4 ? $solicitud_lodo[0]->rel_compatibilidad[0]->vp_4 : '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_compatibilidad[0]->yp_4 ? $solicitud_lodo[0]->rel_compatibilidad[0]->yp_4 : '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2 text-center border">0</td>
                            <td class="py-2 text-center border">100</td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_compatibilidad[0]->vp_5 ? $solicitud_lodo[0]->rel_compatibilidad[0]->vp_5 : '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_compatibilidad[0]->yp_5 ? $solicitud_lodo[0]->rel_compatibilidad[0]->yp_5 : '-' }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="w-1/2 p-2">
            <div class="row mt-3 py-2 px-2">
                <table class="w-full text-sm border border-gray-300">
                    <thead class="bg-gray-200 text-gray-700">
                        <tr>
                            <th class="p-1 text-center border border-gray-300" colspan="2">% de Fluido</th>
                            <th class="p-1 text-center border border-gray-300">Gel 10</th>
                            <th class="p-1 text-center border border-gray-300">Gel 10</th>
                        </tr>
                        <tr>
                            <th class="p-1 text-center border border-gray-300">Lodo</th>
                            <th class="p-1 text-center border border-gray-300">Colchón</th>
                            <th class="p-1 text-center border border-gray-300">(Seg)</th>
                            <th class="p-1 text-center border border-gray-300">(Min)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2 text-center border">100</td>
                            <td class="py-2 text-center border">0</td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_compatibilidad[0]->gel_seg_1 ? $solicitud_lodo[0]->rel_compatibilidad[0]->gel_seg_1 : '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_compatibilidad[0]->gel_min_1 ? $solicitud_lodo[0]->rel_compatibilidad[0]->gel_min_1 : '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2 text-center border">75</td>
                            <td class="py-2 text-center border">25</td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_compatibilidad[0]->gel_seg_2 ? $solicitud_lodo[0]->rel_compatibilidad[0]->gel_seg_2 : '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_compatibilidad[0]->gel_min_2 ? $solicitud_lodo[0]->rel_compatibilidad[0]->gel_min_2 : '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2 text-center border">50</td>
                            <td class="py-2 text-center border">50</td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_compatibilidad[0]->gel_seg_3 ? $solicitud_lodo[0]->rel_compatibilidad[0]->gel_seg_3 : '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_compatibilidad[0]->gel_min_3 ? $solicitud_lodo[0]->rel_compatibilidad[0]->gel_min_3 : '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2 text-center border">25</td>
                            <td class="py-2 text-center border">75</td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_compatibilidad[0]->gel_seg_4 ? $solicitud_lodo[0]->rel_compatibilidad[0]->gel_seg_4 : '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_compatibilidad[0]->gel_min_4 ? $solicitud_lodo[0]->rel_compatibilidad[0]->gel_min_4 : '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2 text-center border">0</td>
                            <td class="py-2 text-center border">100</td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_compatibilidad[0]->gel_seg_5 ? $solicitud_lodo[0]->rel_compatibilidad[0]->gel_seg_5 : '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_compatibilidad[0]->gel_min_5 ? $solicitud_lodo[0]->rel_compatibilidad[0]->gel_min_5 : '-' }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@else
    <div class="accordionCompatibilidadLodo" id="accordionCompatibilidadLodo"></div>
@endif
@if (count($solicitud_lodo[0]->rel_compatibilidad) == 0)
    <form id="form_compatibilidad_lodo" method="POST">
        @csrf
    <div class="mb-2 text-center">
        <h5 class="mb-1">Registro de Compatibilidad Colchón Mecánico y Lodo</h5>
    </div>
    <input type="hidden" name="solicitud_lodo_id" value="{{ $solicitud_lodo[0]->id }}">

    {{-- <div class="row mt-3 py-2 px-2" id="solapa3">
        <table class="w-full text-sm border border-gray-300">
            <thead class="bg-gray-200 text-gray-700">
                <tr>
                    <th class="p-1 text-center border border-gray-300">Vol.<small>(bbl):</small></th>
                    <th class="p-1 text-center border border-gray-300">{{ $solicitud_lodo[0]->vol_colchon}}</th>
                    <th class="p-1 text-center border border-gray-300" colspan="2">
                        {{ isset($solicitud_lodo[0]->rel_colchon) ? $solicitud_lodo[0]->rel_colchon->nombre : '-' }}
                    </th>
                    <th class="p-1 text-center border border-gray-300">Den.<small>(ppg)</small></th>
                    <th class="p-1 text-center border border-gray-300">{{ $solicitud_lodo[0]->densidad_colchon}}</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($solicitud_lodo[0]->rel_aditivos) && count($solicitud_lodo[0]->rel_aditivos) > 0)
                    @foreach($solicitud_lodo[0]->rel_aditivos as $formulacion)
                        <tr class="border-b">
                            <td class="py-2 text-center border" colspan="2">{{ $formulacion->lote }}</td>
                            <td class="py-2 text-center border">
                                @if(isset($formulacion->aditivos->nombre))
                                    {{ $formulacion->aditivos->nombre }}
                                @elseif($formulacion->aditivo == 'SD')
                                    {{ $formulacion->comentario ?? '-' }}
                                @else
                                    -
                                @endif
                            </td>
                            <td class="py-2 px-1 text-center border border-gray-300">
                                <input type="number" class="form-control text-sm"
                                placeholder="Ingrese dato" name="colchon[]">
                            </td>
                            <td class="py-2 px-1 text-center border border-gray-300" colspan="2">
                                <input type="number" class="form-control text-sm"
                                placeholder="Ingrese dato" name="densidad[]">
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div> --}}
   
    <div class="flex">
        <div class="w-1/2 p-2">
            <div class="row mt-3 py-2 px-2">
                <table class="w-full text-sm border border-gray-300">
                    <thead class="bg-gray-200 text-gray-700">
                        <tr>
                            <th class="p-1 text-center border border-gray-300" colspan="2">% de Fluido</th>
                            <th class="p-1 text-center border border-gray-300">VP</th>
                            <th class="p-1 text-center border border-gray-300">YP</th>
                        </tr>
                        <tr>
                            <th class="p-1 text-center border border-gray-300">Lodo</th>
                            <th class="p-1 text-center border border-gray-300">Colchón</th>
                            <th class="p-1 text-center border border-gray-300">(cp)</th>
                            <th class="p-1 text-center border border-gray-300">(lb/100ft2)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2 text-center border">100</td>
                            <td class="py-2 text-center border">0</td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                placeholder="Ingrese dato" name="vp_1"></td>
                            <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                placeholder="Ingrese dato" name="yp_1"></td>
                        </tr>
                        <tr>
                            <td class="py-2 text-center border">75</td>
                            <td class="py-2 text-center border">25</td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                placeholder="Ingrese dato" name="vp_2"></td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                placeholder="Ingrese dato" name="yp_2"></td>
                        </tr>
                        <tr>
                            <td class="py-2 text-center border">50</td>
                            <td class="py-2 text-center border">50</td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                placeholder="Ingrese dato" name="vp_3"></td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                placeholder="Ingrese dato" name="yp_3"></td>
                        </tr>
                        <tr>
                            <td class="py-2 text-center border">25</td>
                            <td class="py-2 text-center border">75</td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                placeholder="Ingrese dato" name="vp_4"></td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                placeholder="Ingrese dato" name="yp_4"></td>
                        </tr>
                        <tr>
                            <td class="py-2 text-center border">0</td>
                            <td class="py-2 text-center border">100</td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                placeholder="Ingrese dato" name="vp_5"></td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                placeholder="Ingrese dato" name="yp_5"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="w-1/2 p-2">
            <div class="row mt-3 py-2 px-2">
                <table class="w-full text-sm border border-gray-300">
                    <thead class="bg-gray-200 text-gray-700">
                        <tr>
                            <th class="p-1 text-center border border-gray-300" colspan="2">% de Fluido</th>
                            <th class="p-1 text-center border border-gray-300">Gel 10</th>
                            <th class="p-1 text-center border border-gray-300">Gel 10</th>
                        </tr>
                        <tr>
                            <th class="p-1 text-center border border-gray-300">Lodo</th>
                            <th class="p-1 text-center border border-gray-300">Colchón</th>
                            <th class="p-1 text-center border border-gray-300">(Seg)</th>
                            <th class="p-1 text-center border border-gray-300">(Min)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2 text-center border">100</td>
                            <td class="py-2 text-center border">0</td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                placeholder="Ingrese dato" name="gel_seg_1"></td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                placeholder="Ingrese dato" name="gel_min_1"></td>
                        </tr>
                        <tr>
                            <td class="py-2 text-center border">75</td>
                            <td class="py-2 text-center border">25</td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                placeholder="Ingrese dato" name="gel_seg_2"></td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                placeholder="Ingrese dato" name="gel_min_2"></td>
                        </tr>
                        <tr>
                            <td class="py-2 text-center border">50</td>
                            <td class="py-2 text-center border">50</td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                placeholder="Ingrese dato" name="gel_seg_3"></td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                placeholder="Ingrese dato" name="gel_min_3"></td>
                        </tr>
                        <tr>
                            <td class="py-2 text-center border">25</td>
                            <td class="py-2 text-center border">75</td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                placeholder="Ingrese dato" name="gel_seg_4"></td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                placeholder="Ingrese dato" name="gel_min_4"></td>
                        </tr>
                        <tr>
                            <td class="py-2 text-center border">0</td>
                            <td class="py-2 text-center border">100</td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                placeholder="Ingrese dato" name="gel_seg_5"></td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                placeholder="Ingrese dato" name="gel_min_5"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="flex justify-center">
        <x-button type="click" id="btn_submit_compatibilidad_lodo"
            style="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-sm">Crear
            Registro</x-button>
    </div>
</form>
@endif
</div>

<script>
    const btn_submit_compatibilidad_lodo = document.getElementById('btn_submit_compatibilidad_lodo');

    if (btn_submit_compatibilidad_lodo) {
        btn_submit_compatibilidad_lodo.addEventListener('click', e => {
            e.preventDefault();
            let form = new FormData(document.getElementById('form_compatibilidad_lodo'))

            confirmAlert().then((confirmed) => {
                if (confirmed) {
                    fetch("{{ route('store_compatibilidad') }}", {
                            method: 'POST',
                            body: form
                        }).then((response) => response.json())
                        .then((data) => {
                            if (data) {
                                componentCompatibilidadLodo(data.success_compatibilidad_lodo, data.success_ensayos)
                                // Mostrar en consola los valores de colchon y densidad
                                //console.log('Ensayos:', data.ensayos);
                                //console.log('Data aditivos:', data.success_compatibilidad_lodo)
                                document.getElementById('form_compatibilidad_lodo').style.display = 'none'
                                successAlert('¡Registro Asignado!',
                                    'El registro se asignó correctamente.').then(
                                    (confirmed) => {
                                        // window.location.reload();
                                    })
                                   let solicitud_id = {!! json_encode($solicitud->id) !!}
                                // checkGenerateReportLodo(solicitud_id)
                                // .then((data) => {
                                //     if (data.generate_report_lodo) {
                                //         document.querySelector('#tab_g_report_js_lodo').classList.remove('d-none')
                                //     }
                                // })
                            }
                        })
                }
            })
        })
    }

</script>



 