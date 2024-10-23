
<div class="mt-4 tab-pane fade" id="tab-caracterizacion" role="tabpanel" aria-labelledby="nav-tab_test">   <!-- caracterizacion del Lodo (1) -->
@if (count($solicitud_lodo[0]->rel_caracterizacion) > 0)
<div class="accordionLodo" id="accordionReologiaLodo">
    <div class="mb-2 text-center">
        <h5 class="mb-1">Caracterización del Lodo</h5>
    </div>
    
    <div class="flex">
        <div class="w-1/2 p-2">
            <div class="row mt-3 py-2 px-2">
                <table class="w-full text-sm border border-gray-300">
                    <thead class="bg-gray-200 text-gray-700">
                        <tr>
                            <th class="p-1 text-center border border-gray-300">Tipo de Lodo</th>
                            {{-- <th class="p-1 text-center border border-gray-300">Base</th> --}}
                            <th class="p-1 text-center border border-gray-300">Dens. <small>(ppg)</small></th>
                            <th class="p-1 text-center border border-gray-300">Cia de Lodos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->tipo_lodo_Lodos->nombre  ?? '-' }}
                            </td>
                            {{-- <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_caracterizacion[0]->base ? $solicitud_lodo[0]->rel_caracterizacion[0]->base : '-' }}
                            </td> --}}
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_caracterizacion[0]->densidad ? $solicitud_lodo[0]->rel_caracterizacion[0]->densidad : '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{  $solicitud_lodo[0]->compania_lodo->nombre ?? '-'}}
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
                            <th class="p-1 text-center border border-gray-300">Tiempo</th>
                            <th class="p-1 text-center border border-gray-300">10 seg</th>
                            <th class="p-1 text-center border border-gray-300">10 min</th>
                            <th class="p-1 text-center border border-gray-300">30 min</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2 px-1 text-center border text-gray-700">
                                {{-- {{ $solicitud_lodo[0]->rel_caracterizacion[0]->tiempo ? $solicitud_lodo[0]->rel_caracterizacion[0]->tiempo : '-' }} --}}
                                Viscosidad de Geles (cp)
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_caracterizacion[0]->seg_10 ? $solicitud_lodo[0]->rel_caracterizacion[0]->seg_10 : '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_caracterizacion[0]->min_10 ? $solicitud_lodo[0]->rel_caracterizacion[0]->min_10 : '-' }}
                            </td>
                            <td class="py-2 px-1 text-center border">
                                {{ $solicitud_lodo[0]->rel_caracterizacion[0]->min_30 ? $solicitud_lodo[0]->rel_caracterizacion[0]->min_30 : '-' }}
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
                    <th class="p-1 text-center border border-gray-300">Temp. BHCT</th>
                    <th class="p-1 text-center border border-gray-300">600 rpm</th>
                    <th class="p-1 text-center border border-gray-300">300 rpm</th>
                    <th class="p-1 text-center border border-gray-300">200 rpm</th>
                    <th class="p-1 text-center border border-gray-300">100 rpm</th>
                    <th class="p-1 text-center border border-gray-300">60 rpm</th>
                    <th class="p-1 text-center border border-gray-300">30 rpm</th>
                    <th class="p-1 text-center border border-gray-300">6 rpm</th>
                    <th class="p-1 text-center border border-gray-300">3 rpm</th>
                    <th class="p-1 text-center border border-gray-300">VP</th>
                    <th class="p-1 text-center border border-gray-300">YP</th>
                </tr>
            </thead>
            <tbody>
                <td class="py-2 px-1 text-center border">
                    {{ $solicitud_lodo[0]->rel_caracterizacion[0]->temp_bhct ? $solicitud_lodo[0]->rel_caracterizacion[0]->temp_bhct : '-' }}
                </td>
                <td class="py-2 px-1 text-center border">
                    {{ $solicitud_lodo[0]->rel_caracterizacion[0]->temp_600_rpm_c ? $solicitud_lodo[0]->rel_caracterizacion[0]->temp_600_rpm_c : '-' }}
                </td>
                <td class="py-2 px-1 text-center border">
                    {{ $solicitud_lodo[0]->rel_caracterizacion[0]->temp_300_rpm_c ? $solicitud_lodo[0]->rel_caracterizacion[0]->temp_300_rpm_c : '-' }}
                </td>
                <td class="py-2 px-1 text-center border">
                    {{ $solicitud_lodo[0]->rel_caracterizacion[0]->temp_200_rpm_c ? $solicitud_lodo[0]->rel_caracterizacion[0]->temp_200_rpm_c : '-' }}
                </td>
                <td class="py-2 px-1 text-center border">
                    {{ $solicitud_lodo[0]->rel_caracterizacion[0]->temp_100_rpm_c ? $solicitud_lodo[0]->rel_caracterizacion[0]->temp_100_rpm_c : '-' }}
                </td>
                <td class="py-2 px-1 text-center border">
                    {{ $solicitud_lodo[0]->rel_caracterizacion[0]->temp_60_rpm_c ? $solicitud_lodo[0]->rel_caracterizacion[0]->temp_60_rpm_c : '-' }}
                </td>
                <td class="py-2 px-1 text-center border">
                    {{ $solicitud_lodo[0]->rel_caracterizacion[0]->temp_30_rpm_c ? $solicitud_lodo[0]->rel_caracterizacion[0]->temp_30_rpm_c : '-' }}
                </td>
                <td class="py-2 px-1 text-center border">
                    {{ $solicitud_lodo[0]->rel_caracterizacion[0]->temp_6_rpm_c ? $solicitud_lodo[0]->rel_caracterizacion[0]->temp_6_rpm_c : '-' }}
                </td>
                <td class="py-2 px-1 text-center border">
                    {{ $solicitud_lodo[0]->rel_caracterizacion[0]->temp_3_rpm_c ? $solicitud_lodo[0]->rel_caracterizacion[0]->temp_3_rpm_c : '-' }}
                </td>
                <td class="py-2 px-1 text-center border">
                    {{ $solicitud_lodo[0]->rel_caracterizacion[0]->temp_vp ? $solicitud_lodo[0]->rel_caracterizacion[0]->temp_vp : '-' }}
                </td>
                <td class="py-2 px-1 text-center border">
                    {{ $solicitud_lodo[0]->rel_caracterizacion[0]->temp_yp ? $solicitud_lodo[0]->rel_caracterizacion[0]->temp_yp : '-' }}
                </td>
            </tbody>
        </table>
    </div>

    {{-- <div class="mb-2 text-center">
        <br>
        <h5 class="mb-1">Reologías Lodo </h5>
        
    </div> --}}
    {{-- <input type="hidden" name="solicitud_lodo_id" value="{{ $solicitud_lodo[0]->id }}"> --}}
    {{-- <div class="row mt-3 py-2 px-2">
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
                        {{ $solicitud_lodo[0]->rel_reologia_lodo[0]->temp_200_rpm ?? '-'  }}
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
    </div> --}}
</div>

@else
    <div class="accordionLodo" id="accordionReologiaLodo"></div>
@endif 
@if (count($solicitud_lodo[0]->rel_caracterizacion) == 0)
    <form id="form_reologia_lodo" method="POST">
        @csrf
        <div class="mb-2 text-center">
            <h5 class="mb-1">Caracterización del Lodo</h5>
            {{-- <small>(Recuerde que debe seleccionar de todos los intentos una Reología correctamente)</small> --}}
        </div>
        <input type="hidden" name="solicitud_lodo_id" value="{{ $solicitud_lodo[0]->id }}">
        <div class="flex">
            <div class="w-1/2 p-2">
                <div class="row mt-3 py-2 px-2">
                    <table class="w-full text-sm border border-gray-300">
                        <thead class="bg-gray-200 text-gray-700">
                            <tr>
                                <th class="p-1 text-center border border-gray-300">Tipo de Lodo</th>
                                {{-- <th class="p-1 text-center border border-gray-300">Base</th> --}}
                                <th class="p-1 text-center border border-gray-300">Dens. <small>(ppg)</small></th>
                                <th class="p-1 text-center border border-gray-300">Cia de Lodos</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-2 px-1 text-center border border-gray-300">
                                    {{-- <input type="text" class="form-control text-sm"
                                    placeholder="Ingrese dato" name="tipo_lodo"> --}}
                                    <select name="tipo_lodo" id="tipo_lodo" class="text-sm" data-silent-initial-value-set="true" multiple="false">
                                        @foreach($tipo_lodo as $tl)
                                        <option value="{{$tl->id}}"
                                            {{ old('tipo_lodo') == $tl->id ? 'selected' : '' }}>{{ $tl->nombre }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                {{-- <td class="py-2 px-1 text-center border border-gray-300"><input type="text" class="form-control text-sm"
                                    placeholder="Ingrese dato" name="base"></td> --}}
                                <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese dato" name="densidad"></td>
                                <td class="py-2 px-1 text-center border border-gray-300">
                                    <select name="mud_company" id="mud_company" class="text-sm" data-search="true"  data-silent-initial-value-set="true" multiple="false" >
                                        @foreach($mud_company as $mc)
                                        <option value="{{$mc->id}}"
                                            {{ old('mud_company') == $mc->id ? 'selected' : '' }}> {{$mc->nombre}}</option>
                                        @endforeach
                                </select>
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
                                <th class="p-1 text-center border border-gray-300">Tiempo</th>
                                <th class="p-1 text-center border border-gray-300">10 seg</th>
                                <th class="p-1 text-center border border-gray-300">10 min</th>
                                <th class="p-1 text-center border border-gray-300">30 min</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-2 px-1 text-center border border-gray-300 text-gray-700">Viscosidad de Geles (cp)</td>
                                <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese dato" name="seg_10"></td>
                                <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese dato" name="min_10"></td>
                                <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese dato" name="min_30"></td>
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
                        <th class="p-1 text-center border border-gray-300">Temp. BHCT</th>
                        <th class="p-1 text-center border border-gray-300">600 rpm</th>
                        <th class="p-1 text-center border border-gray-300">300 rpm</th>
                        <th class="p-1 text-center border border-gray-300">200 rpm</th>
                        <th class="p-1 text-center border border-gray-300">100 rpm</th>
                        <th class="p-1 text-center border border-gray-300">60 rpm</th>
                        <th class="p-1 text-center border border-gray-300">30 rpm</th>
                        <th class="p-1 text-center border border-gray-300">6 rpm</th>
                        <th class="p-1 text-center border border-gray-300">3 rpm</th>
                        <th class="p-1 text-center border border-gray-300">VP</th>
                        <th class="p-1 text-center border border-gray-300">YP</th>
                    </tr>
                </thead>
                <tbody>
                    <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_bhct"></td>
                    <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_600_rpm_c"></td>
                    <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_300_rpm_c"></td>
                    <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_200_rpm_c"></td>
                    <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_100_rpm_c"></td>
                    <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_60_rpm_c"></td>
                    <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_30_rpm_c"></td>
                    <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_6_rpm_c"></td>
                    <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_3_rpm_c"></td>
                    <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_vp"></td>
                    <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_yp"></td>
                </tbody>
            </table>
        </div>
        
        {{-- <input type="hidden" name="solicitud_lodo_id" value="{{ $solicitud_lodo[0]->id }}"> --}}
        {{-- <div class="row mt-3 py-2 px-2">
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
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_600_rpm"></td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_300_rpm"></td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_200_rpm"></td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_100_rpm"></td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_60_rpm"></td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_30_rpm"></td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_6_rpm"></td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_3_rpm"></td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 text-center border">75</td>
                        <td class="py-2 text-center border">25</td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_600_rpm_2"></td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_300_rpm_2"></td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_200_rpm_2"></td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_100_rpm_2"></td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_60_rpm_2"></td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_30_rpm_2"></td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_6_rpm_2"></td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_3_rpm_2"></td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 text-center border">50</td>
                        <td class="py-2 text-center border">50</td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_600_rpm_3"></td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_300_rpm_3"></td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_200_rpm_3"></td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_100_rpm_3"></td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_60_rpm_3"></td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_30_rpm_3"></td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_6_rpm_3"></td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_3_rpm_3"></td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 text-center border">25</td>
                        <td class="py-2 text-center border">75</td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_600_rpm_4"></td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_300_rpm_4"></td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_200_rpm_4"></td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_100_rpm_4"></td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_60_rpm_4"></td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_30_rpm_4"></td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_6_rpm_4"></td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_3_rpm_4"></td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 text-center border">0</td>
                        <td class="py-2 text-center border">100</td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_600_rpm_5"></td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_300_rpm_5"></td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_200_rpm_5"></td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_100_rpm_5"></td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_60_rpm_5"></td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_30_rpm_5"></td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_6_rpm_5"></td>
                        <td class="py-2 px-1 text-center border border-gray-300"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese dato" name="temp_3_rpm_5"></td>
                    </tr>
                </tbody>
            </table>
        </div> --}}
    
        <div class="flex justify-center">
            <x-button type="click" id="btn_submit_reologia_lodo"
                style="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-sm">Crear
                Registro</x-button>
        </div>
    </form>
@endif

</div>
<script>
    document.addEventListener('DOMContentLoaded', () => {
            VirtualSelect.init({
                ele: "#tipo_lodo",
                placeholder: "Seleccione tipo de lodo",
            });
            //document.getElementById("tipo_lodo").setValue(0);
        })
</script>
<script>
    const tipo_lodo_nombre = {!! json_encode($solicitud_lodo[0]->tipo_lodo_Lodos->nombre ?? '-') !!};
    const densidad_lodo = {!! json_encode($solicitud_lodo[0]->rel_caracterizacion[0]->densidad ?? '-') !!};
    const compania_lodo_nombre = {!! json_encode($solicitud_lodo[0]->compania_lodo->nombre ?? '-') !!};
</script>


<script>
    const btn_submit_reologia_lodo = document.getElementById('btn_submit_reologia_lodo');

    if (btn_submit_reologia_lodo) {
        btn_submit_reologia_lodo.addEventListener('click', e => {
            e.preventDefault();

        // Función para obtener los valores de los campos
        const getFieldValues = (fieldNames) => {
            return fieldNames.map(name => ({
                name,
                value: document.querySelector(`input[name="${name}"]`).value,
            }));
        };

        // Función para verificar si hay campos vacíos
        const checkEmptyFields = (fields) => {
            for (const field of fields) {
                if (!field.value) {
                    return field.name;
                }
            }
            return null;
        };

        // Definir los campos requeridos
        const requiredFields1 = [
            'tipo_lodo',
            'densidad',
            'mud_company',
            'seg_10',
            'min_10',
            'min_30',
        ];

        const requiredFields2 = [
            'temp_bhct',
            'temp_600_rpm_c',
            'temp_300_rpm_c',
            'temp_200_rpm_c',
            'temp_100_rpm_c',
            'temp_60_rpm_c',
            'temp_30_rpm_c',
            'temp_6_rpm_c',
            'temp_3_rpm_c',
            'temp_vp',
            'temp_yp',
        ];

        // Obtener los valores de los campos requeridos
        const fieldValues1 = getFieldValues(requiredFields1);
        const fieldValues2 = getFieldValues(requiredFields2);

        // Verificar si hay campos vacíos en el primer conjunto
        const emptyField1 = checkEmptyFields(fieldValues1);
        if (emptyField1) {
            errorAlert("Error", "Los campos Caracterizacion del Lodo son requeridos.").then(() => {
                document.querySelector(`input[name="${emptyField1}"]`).focus();
            });
            return; // Detener la ejecución si hay un error
        }

        // Verificar si hay campos vacíos en el segundo conjunto
        const emptyField2 = checkEmptyFields(fieldValues2);
        if (emptyField2) {
            errorAlert("Error", "Los campos Caracterizacion del Lodo son requeridos.").then(() => {
                document.querySelector(`input[name="${emptyField2}"]`).focus();
            });
            return; // Detener la ejecución si hay un error
        }
            let form = new FormData(document.getElementById('form_reologia_lodo'))

            confirmAlert().then((confirmed) => {
                if (confirmed) {
                    fetch("{{ route('store_lodo') }}", {
                            method: 'POST',
                            body: form
                        }).then((response) => response.json())
                        .then((data) => {
                            if (data) {
                                componentReologiasLodo(data.success_caracterizacion_lodo)
                                //componentReologiasLodo(data.success_caracterizacion_lodo)
                                document.getElementById('form_reologia_lodo').style.display = 'none'
                                successAlert('¡Registro Asignado!',
                                    'El registro se asignó correctamente.').then(
                                    (confirmed) => {
                                        //window.location.reload();
                                    })
                                let solicitud_id = {!! json_encode($solicitud->id) !!}
                                checkGenerateReportLodo(solicitud_id)
                                .then((data) => {
                                    if (data.generate_report_lodo) {
                                        document.querySelector('#tab_g_report_js_lodo').classList.remove('d-none')
                                    }
                                })
                            }
                        })
                }
            })
        })
    }
</script>

