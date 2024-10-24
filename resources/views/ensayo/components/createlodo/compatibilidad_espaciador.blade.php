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
                @if (isset($solicitud_lodo[0]->rel_aditivos) && count($solicitud_lodo[0]->rel_aditivos) > 0)
                    @foreach ($solicitud_lodo[0]->rel_aditivos as $index => $aditivo)
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
            <div class="flex">
                <div class="w-1/2 p-2">
                    <canvas id="reologiasVP" width="600" height="400"></canvas>
                </div>
                <div class="w-1/2 p-2">
                    <canvas id="reologiasGeles" width="600" height="400"></canvas>
                </div>
            </div>

            {{-- <div class="flex">
        <div class="w-1/2 p-2">
            <canvas id="reporteReologiasTAmbiente" width="600" height="400"></canvas>
        </div>
        <div class="w-1/2 p-2">
            <canvas id="reporteReologiasTEnsayo" width="600" height="400"></canvas>
        </div>
    </div> --}}
            <div class="row mt-3 py-2 px-2">
                <table class="w-full text-sm border border-gray-300">
                    <thead class="bg-gray-200 text-gray-700">
                        <tr>
                            <th class="p-1 text-center border w-1/4 border-gray-300" colspan="2">% de Fluido</th>
                            <th class="p-1 text-center border border-gray-300" colspan="8">Reologia</th>
                        </tr>
                        <tr>
                            <th class="p-1 text-center border border-gray-300">Lodo</th>
                            <th class="p-1 text-center border border-gray-300">Colchón</th>
                            <td class="p-1 text-center border border-gray-300">600</th>
                            <th class="p-1 text-center border border-gray-300">300</th>
                            <th class="p-1 text-center border border-gray-300">200</th>
                            <th class="p-1 text-center border border-gray-300">100</th>
                            <th class="p-1 text-center border border-gray-300">60</th>
                            <th class="p-1 text-center border border-gray-300">30</th>
                            <th class="p-1 text-center border border-gray-300">6</th>
                            <th class="p-1 text-center border border-gray-300">3</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="py-2 text-center border">100</td>
                            <td class="py-2 text-center border">0</td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_600_rpm ?? '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_300_rpm ?? '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_200_rpm ?? '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_100_rpm ?? '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_60_rpm ?? '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_30_rpm ?? '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_6_rpm ?? '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_3_rpm ?? '-' }}
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 text-center border">75</td>
                            <td class="py-2 text-center border">25</td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_600_rpm_2 ?? '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_300_rpm_2 ?? '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_200_rpm_2 ?? '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_100_rpm_2 ?? '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_60_rpm_2 ?? '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_30_rpm_2 ?? '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_6_rpm_2 ?? '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_3_rpm_2 ?? '-' }}
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 text-center border">50</td>
                            <td class="py-2 text-center border">50</td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_600_rpm_3 ?? '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_300_rpm_3 ?? '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_200_rpm_3 ?? '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_100_rpm_3 ?? '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_60_rpm_3 ?? '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_30_rpm_3 ?? '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_6_rpm_3 ?? '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_3_rpm_3 ?? '-' }}
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 text-center border">25</td>
                            <td class="py-2 text-center border">75</td>
                            <td class="py-2 px-1 text-center">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_600_rpm_4 ?? '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_300_rpm_4 ?? '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_200_rpm_4 ?? '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_100_rpm_4 ?? '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_60_rpm_4 ?? '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_30_rpm_4 ?? '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_6_rpm_4 ?? '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_3_rpm_4 ?? '-' }}
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 text-center border">0</td>
                            <td class="py-2 text-center border">100</td>
                            <td class="py-2 px-1 text-center">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_600_rpm_5 ?? '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_300_rpm_5 ?? '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_200_rpm_5 ?? '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_100_rpm_5 ?? '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_60_rpm_5 ?? '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_30_rpm_5 ?? '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_6_rpm_5 ?? '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_3_rpm_5 ?? '-' }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="flex">
                <div class="w-full p-2">
                    <canvas id="reologiasFluidos" width="1200" height="400"></canvas>
                </div>
            </div>
            {{-- <div id="imageContainer" style="width: 1200px; height: 400px; margin-top: 20px;"></div> --}}
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
                @if (isset($solicitud_lodo[0]->rel_aditivos) && count($solicitud_lodo[0]->rel_aditivos) > 0)
                    @foreach ($solicitud_lodo[0]->rel_aditivos as $formulacion)
                        <tr class="border-b">
                            <td class="py-2 text-center border" colspan="2">{{ $formulacion->lote }}</td>
                            <td class="py-2 text-center border">
                                @if (isset($formulacion->aditivos->nombre))
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
                                    <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                            class="form-control text-sm" placeholder="Ingrese dato" name="vp_1">
                                    </td>
                                    <td class="py-2 px-1 text-center"><input type="number"
                                            class="form-control text-sm" placeholder="Ingrese dato" name="yp_1">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-2 text-center border">75</td>
                                    <td class="py-2 text-center border">25</td>
                                    <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                            class="form-control text-sm" placeholder="Ingrese dato" name="vp_2">
                                    </td>
                                    <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                            class="form-control text-sm" placeholder="Ingrese dato" name="yp_2">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-2 text-center border">50</td>
                                    <td class="py-2 text-center border">50</td>
                                    <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                            class="form-control text-sm" placeholder="Ingrese dato" name="vp_3">
                                    </td>
                                    <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                            class="form-control text-sm" placeholder="Ingrese dato" name="yp_3">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-2 text-center border">25</td>
                                    <td class="py-2 text-center border">75</td>
                                    <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                            class="form-control text-sm" placeholder="Ingrese dato" name="vp_4">
                                    </td>
                                    <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                            class="form-control text-sm" placeholder="Ingrese dato" name="yp_4">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-2 text-center border">0</td>
                                    <td class="py-2 text-center border">100</td>
                                    <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                            class="form-control text-sm" placeholder="Ingrese dato" name="vp_5">
                                    </td>
                                    <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                            class="form-control text-sm" placeholder="Ingrese dato" name="yp_5">
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
                                    <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                            class="form-control text-sm" placeholder="Ingrese dato" name="gel_seg_1">
                                    </td>
                                    <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                            class="form-control text-sm" placeholder="Ingrese dato" name="gel_min_1">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-2 text-center border">75</td>
                                    <td class="py-2 text-center border">25</td>
                                    <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                            class="form-control text-sm" placeholder="Ingrese dato" name="gel_seg_2">
                                    </td>
                                    <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                            class="form-control text-sm" placeholder="Ingrese dato" name="gel_min_2">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-2 text-center border">50</td>
                                    <td class="py-2 text-center border">50</td>
                                    <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                            class="form-control text-sm" placeholder="Ingrese dato" name="gel_seg_3">
                                    </td>
                                    <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                            class="form-control text-sm" placeholder="Ingrese dato" name="gel_min_3">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-2 text-center border">25</td>
                                    <td class="py-2 text-center border">75</td>
                                    <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                            class="form-control text-sm" placeholder="Ingrese dato" name="gel_seg_4">
                                    </td>
                                    <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                            class="form-control text-sm" placeholder="Ingrese dato" name="gel_min_4">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-2 text-center border">0</td>
                                    <td class="py-2 text-center border">100</td>
                                    <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                            class="form-control text-sm" placeholder="Ingrese dato" name="gel_seg_5">
                                    </td>
                                    <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                            class="form-control text-sm" placeholder="Ingrese dato" name="gel_min_5">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row mt-3 py-2 px-2">
                <table class="w-full text-sm border border-gray-300">
                    <thead class="bg-gray-200 text-gray-700">
                        <tr>
                            <th class="p-1 text-center border w-1/4 border-gray-300" colspan="2">% de Fluido</th>
                            <th class="p-1 text-center border border-gray-300" colspan="8">Reologia</th>
                        </tr>
                        <tr>
                            <th class="p-1 text-center border border-gray-300">Lodo</th>
                            <th class="p-1 text-center border border-gray-300">Colchón</th>
                            <td class="p-1 text-center border border-gray-300">600</th>
                            <th class="p-1 text-center border border-gray-300">300</th>
                            <th class="p-1 text-center border border-gray-300">200</th>
                            <th class="p-1 text-center border border-gray-300">100</th>
                            <th class="p-1 text-center border border-gray-300">60</th>
                            <th class="p-1 text-center border border-gray-300">30</th>
                            <th class="p-1 text-center border border-gray-300">6</th>
                            <th class="p-1 text-center border border-gray-300">3</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="py-2 text-center border">100</td>
                            <td class="py-2 text-center border">0</td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_600_rpm"></td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_300_rpm"></td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_200_rpm"></td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_100_rpm"></td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_60_rpm"></td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_30_rpm"></td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_6_rpm"></td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_3_rpm"></td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 text-center border">75</td>
                            <td class="py-2 text-center border">25</td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_600_rpm_2">
                            </td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_300_rpm_2">
                            </td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_200_rpm_2">
                            </td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_100_rpm_2">
                            </td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_60_rpm_2">
                            </td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_30_rpm_2">
                            </td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_6_rpm_2"></td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_3_rpm_2"></td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 text-center border">50</td>
                            <td class="py-2 text-center border">50</td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_600_rpm_3">
                            </td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_300_rpm_3">
                            </td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_200_rpm_3">
                            </td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_100_rpm_3">
                            </td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_60_rpm_3">
                            </td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_30_rpm_3">
                            </td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_6_rpm_3"></td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_3_rpm_3"></td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 text-center border">25</td>
                            <td class="py-2 text-center border">75</td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_600_rpm_4">
                            </td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_300_rpm_4">
                            </td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_200_rpm_4">
                            </td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_100_rpm_4">
                            </td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_60_rpm_4">
                            </td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_30_rpm_4">
                            </td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_6_rpm_4"></td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_3_rpm_4"></td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 text-center border">0</td>
                            <td class="py-2 text-center border">100</td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_600_rpm_5">
                            </td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_300_rpm_5">
                            </td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_200_rpm_5">
                            </td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_100_rpm_5">
                            </td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_60_rpm_5">
                            </td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_30_rpm_5">
                            </td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_6_rpm_5"></td>
                            <td class="py-2 px-1 text-center border border-gray-300"><input type="number"
                                    class="form-control text-sm" placeholder="Ingrese dato" name="temp_3_rpm_5"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="flex justify-center">
                <x-button type="click" id="btn_submit_compatibilidad_lodo"
                    style="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-sm">Crear
                    Registro</x-button>
            </div>
        </form>
    @endif
</div>
<form method="post" target="_blank" action="{{ route('pdf_report_lodo', ['solicitud_id' => $solicitud->id]) }}" id="charts_pdf">
    @csrf
        <input type="hidden" id="chartVP" name="chartVP">
        <input type="hidden" id="chartGeles" name="chartGeles">
        <input type="hidden" id="chartReologias" name="chartReologias">
    </form>
<script> 
    // Primer chart - Reologias VP - YP
    document.addEventListener('DOMContentLoaded', function() {
        var compatibilidad = @json($solicitud_lodo[0]->rel_compatibilidad ?? null); 

       if (compatibilidad && compatibilidad.length > 0) {
        var ctx = document.getElementById('reologiasVP').getContext('2d');
        var reologiasVP = new Chart(ctx, {
            type: 'line', // Gráfico de líneas
            data: {
                labels: [
                    'Lodo 100% - Colchón 0%',
                    'Lodo 75% - Colchón 25%',
                    'Lodo 50% - Colchón 50%',
                    'Lodo 25% - Colchón 75%',
                    'Lodo 0% - Colchón 100%'
                ],
                datasets: [{
                    label: 'VP (cp)', // Viscosidad plástica
                    data: [

                        compatibilidad[0]?.vp_1 ?? null,
                        compatibilidad[0]?.vp_2 ?? null,
                        compatibilidad[0]?.vp_3 ?? null,
                        compatibilidad[0]?.vp_4 ?? null,
                        compatibilidad[0]?.vp_5 ?? null
                    ],
                    backgroundColor: 'rgb(255, 204, 188)', // Color de fondo de la línea
                    borderColor: 'rgb(255, 87, 34)', // Color de la línea
                    borderWidth: 2,
                    fill: false // No rellenar debajo de la línea
                },
                {
                label: 'YP (lb/100ft2)', // Límite de fluencia
                data: [
                    compatibilidad[0]?.yp_1 ?? null,
                    compatibilidad[0]?.yp_2 ?? null,
                    compatibilidad[0]?.yp_3 ?? null,
                    compatibilidad[0]?.yp_4 ?? null,
                    compatibilidad[0]?.yp_5 ?? null
                ],
                backgroundColor: 'rgb(204, 255, 255)',
                borderColor: 'rgb(0, 255, 255)',
                borderWidth: 2,
                fill: false
            }
                ]
            },
            
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        min: 0,
                        max: 225, // Definimos el rango máximo como 225
                        ticks: {
                            stepSize: 25 // Incrementos de 25 en el eje Y
                        }
                    }
                }
            }
        });
       }
    })

    // Segundo chart - Geles 10 seg -10 min

    document.addEventListener('DOMContentLoaded', function() {
        var compatibilidad = @json($solicitud_lodo[0]->rel_compatibilidad ?? null);

        if (compatibilidad && compatibilidad.length > 0) {
        var ctx = document.getElementById('reologiasGeles').getContext('2d');
        var reologiasGeles = new Chart(ctx, {
            type: 'line', // Gráfico de líneas
            data: {
                labels: [
                    'Lodo 100% - Colchón 0%',
                    'Lodo 75% - Colchón 25%',
                    'Lodo 50% - Colchón 50%',
                    'Lodo 25% - Colchón 75%',
                    'Lodo 0% - Colchón 100%'
                ],
                datasets: [{
                    label: 'Gel 10 (seg)', // Viscosidad plástica
                    data: [
                        compatibilidad[0]?.gel_seg_1 ?? null,
                        compatibilidad[0]?.gel_seg_2 ?? null,
                        compatibilidad[0]?.gel_seg_3 ?? null,
                        compatibilidad[0]?.gel_seg_4 ?? null,
                        compatibilidad[0]?.gel_seg_5 ?? null
                    ],
                    backgroundColor: 'rgb(159, 168, 218)', // Color de fondo de la línea
                    borderColor: 'rgb(40, 53, 147)', // Color de la línea
                    borderWidth: 2,
                    fill: false // No rellenar debajo de la línea
                },
                {
                label: 'Gel 10 (min)', // Límite de fluencia
                data: [
                    compatibilidad[0]?.gel_min_1 ?? null,
                    compatibilidad[0]?.gel_min_2 ?? null,
                    compatibilidad[0]?.gel_min_3 ?? null,
                    compatibilidad[0]?.gel_min_4 ?? null,
                    compatibilidad[0]?.gel_min_5 ?? null
                ],
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 2,
                fill: false
            }
                ]
            },
            
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        min: 0,
                        max: 100, // Definimos el rango máximo como 225
                        ticks: {
                            stepSize: 25 // Incrementos de 25 en el eje Y
                        }
                    }
                }
            }
        });
            
        }
    })

    // Tercer chart - Reologias de Fluidos

     document.addEventListener('DOMContentLoaded', function() {

        var reologias = @json($solicitud_lodo[0]->rel_reologia_lodo ?? null);
        if (reologias && reologias.length > 0) {
            var ctx = document.getElementById('reologiasFluidos').getContext('2d');
        var reologiasFluidos = new Chart(ctx, {
            type: 'line', // Gráfico de líneas
            data: {
                labels: [
                    '600 rpm',
                    '300 rmp',
                    '200 rmp',
                    '100 rmp',
                    '60 rmp',
                    '30 rmp',
                    '6 rmp',
                    '3 rmp'
                ],
                datasets: [{
                    label: 'Lodo 100% - Colchón 0%', // Viscosidad plástica
                    data: [
                        reologias[0]?.temp_600_rpm ?? null,
                        reologias[0]?.temp_300_rpm ?? null,
                        reologias[0]?.temp_200_rpm ?? null,
                        reologias[0]?.temp_100_rpm ?? null,
                        reologias[0]?.temp_60_rpm ?? null,
                        reologias[0]?.temp_30_rpm ?? null,
                        reologias[0]?.temp_6_rpm ?? null,
                        reologias[0]?.temp_3_rpm ?? null

                    ],
                    backgroundColor: 'rgb(232, 218, 239)', // Color de fondo de la línea
                    borderColor: 'rgb(187, 143, 206)', // Color de la línea
                    borderWidth: 2,
                    fill: false // No rellenar debajo de la línea
                },
                {
                label: 'Lodo 75% - Colchón 25%', // Límite de fluencia
                data: [
                        reologias[0]?.temp_600_rpm_2 ?? null,
                        reologias[0]?.temp_300_rpm_2 ?? null,
                        reologias[0]?.temp_200_rpm_2 ?? null,
                        reologias[0]?.temp_100_rpm_2 ?? null,
                        reologias[0]?.temp_60_rpm_2 ?? null,
                        reologias[0]?.temp_30_rpm_2 ?? null,
                        reologias[0]?.temp_6_rpm_2 ?? null,
                        reologias[0]?.temp_3_rpm_2 ?? null
                ],
                backgroundColor: 'rgb(214, 234, 248)',
                borderColor: 'rgb(133, 193, 233)',
                borderWidth: 2,
                fill: false
                },
                {
                label: 'Lodo 50% - Colchón 50%', // Límite de fluencia
                data: [
                        reologias[0]?.temp_600_rpm_3 ?? null,
                        reologias[0]?.temp_300_rpm_3 ?? null,
                        reologias[0]?.temp_200_rpm_3 ?? null,
                        reologias[0]?.temp_100_rpm_3 ?? null,
                        reologias[0]?.temp_60_rpm_3 ?? null,
                        reologias[0]?.temp_30_rpm_3 ?? null,
                        reologias[0]?.temp_6_rpm_3 ?? null,
                        reologias[0]?.temp_3_rpm_3 ?? null
                ],
                backgroundColor: 'rgb(248, 187, 208)',
                borderColor: 'rgb(236, 64, 122)',
                borderWidth: 2,
                fill: false
                },
                {
                label: 'Lodo 25% - Colchón 75%', // Límite de fluencia
                data: [
                        reologias[0]?.temp_600_rpm_4 ?? null,
                        reologias[0]?.temp_300_rpm_4 ?? null,
                        reologias[0]?.temp_200_rpm_4 ?? null,
                        reologias[0]?.temp_100_rpm_4 ?? null,
                        reologias[0]?.temp_60_rpm_4 ?? null,
                        reologias[0]?.temp_30_rpm_4 ?? null,
                        reologias[0]?.temp_6_rpm_4 ?? null,
                        reologias[0]?.temp_3_rpm_4 ?? null
                ],
                backgroundColor: 'rgb(254, 249, 231)',
                borderColor: 'rgb(255, 238, 88)',
                borderWidth: 2,
                fill: false
                },
                {
                label: 'Lodo 0% - Colchón 100%', // Límite de fluencia
                data: [
                        reologias[0]?.temp_600_rpm_5 ?? null,
                        reologias[0]?.temp_300_rpm_5 ?? null,
                        reologias[0]?.temp_200_rpm_5 ?? null,
                        reologias[0]?.temp_100_rpm_5 ?? null,
                        reologias[0]?.temp_60_rpm_5 ?? null,
                        reologias[0]?.temp_30_rpm_5 ?? null,
                        reologias[0]?.temp_6_rpm_5 ?? null,
                        reologias[0]?.temp_3_rpm_5 ?? null
                ],
                backgroundColor: 'rgb(165, 214, 167)',
                borderColor: 'rgb(76, 175, 80)',
                borderWidth: 2,
                fill: false
                },
                ]
            },
            
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        min: 0,
                        max: 240, // Definimos el rango máximo como 225
                        ticks: {
                            stepSize: 20 // Incrementos de 25 en el eje Y
                        }
                    }
                },
//                 animation: {
//     onComplete: function() {
//         var imageBase64 = reologiasFluidos.toBase64Image();

//         // Obtener el div con el ID 'imageContainer'
//         var imageDiv = document.getElementById('imageContainer');
//         imageDiv.style.backgroundImage = `url(${imageBase64})`;
//         imageDiv.style.backgroundSize = 'contain'; // Ajustar la imagen al tamaño del div
//         imageDiv.style.backgroundRepeat = 'no-repeat'; // No repetir la imagen
//         imageDiv.style.backgroundPosition = 'center'; // Centrar la imagen si es más pequeña que el div
//     }
// }
                // animation: {
                //     onComplete: function() {
                        // // Convertir la gráfica en formato imagen Base64 después de que la animación haya terminado
                        // var imageBase64 = reologiasFluidos.toBase64Image();
                        // //console.log(imageBase64); // Ver el string base64 en la consola

                        // // Crear un elemento de imagen y agregarlo al DOM
                        // var imgElement = document.createElement('img');
                        // imgElement.src = imageBase64;
                        // document.body.appendChild(imgElement); // Añadir la imagen al cuerpo del documento
                        // otra forma
                        // var imageBase64 = reologiasFluidos.toBase64Image();

                        // // Crear un elemento canvas
                        // var canvas = document.createElement('canvas');
                        // var context = canvas.getContext('2d');

                        // // Establecer dimensiones del canvas
                        // canvas.width = 1200; // Ancho
                        // canvas.height = 400; // Altura

                        // // Crear una nueva imagen y dibujarla en el canvas
                        // var img = new Image();
                        // img.onload = function() {
                        // context.drawImage(img, 0, 0, canvas.width, canvas.height);
                        // };
                        // img.src = imageBase64;

                        // document.body.appendChild(canvas);
                //     }
                // }
            }
        });
        }
    })





</script>

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
                                componentCompatibilidadLodo(data.success_compatibilidad_lodo, data
                                    .success_reologias_lodos)
                                // Mostrar en consola los valores de colchon y densidad
                                //console.log('Ensayos:', data.ensayos);
                                //console.log('Data aditivos:', data.success_compatibilidad_lodo)
                                document.getElementById('form_compatibilidad_lodo').style.display =
                                    'none'
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
