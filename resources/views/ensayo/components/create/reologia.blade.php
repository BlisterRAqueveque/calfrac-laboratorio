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
<div class="mt-4 tab-pane fade show active" id="tab-reologia" role="tabpanel"> <!-- Reología -->
    @if (count($s_l[0]->rel_reologia) > 0)
        <div class="accordion" id="accordionReologia">
            <div class="flex">
                <div class="w-1/2 p-2">
                    <div class="mb-2 text-center">
                        <h5 class="mb-1 text-center ">Reologías a temp. Ambiente<span class="text-red-500"> *</span></h5>
                    </div>
                    <table class="w-full text-sm border border-gray-300">
                        <thead class="bg-gray-200 text-gray-700">
                            <tr>
                                <th class="p-1 text-center border border-gray-300">RPM</th>
                                <th class="p-1 text-center border border-gray-300">Up</th>
                                <th class="p-1 text-center border border-gray-300">Down</th>
                                <th class="p-1 text-center border border-gray-300">Cociente</th>
                                <th class="p-1 text-center border border-gray-300">Prom.</th>
                            </tr>
                        </thead>
                        <tbody class="bg-gray-50">
                            <tr class="border-b">
                                <td class="py-2 px-1 text-center">300</td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ambiente_300_up ? $s_l[0]->rel_reologia[0]->tem_ambiente_300_up : '-' }}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ambiente_300 ? $s_l[0]->rel_reologia[0]->tem_ambiente_300 : '-' }}                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{$s_l[0]->calculos_reologias[0]->tem_ambiente_300_cociente ?? '-'}}
                                </td>
                                <td class="py-2 px-1 text-center"> 
                                    {{$s_l[0]->calculos_reologias[0]->tem_ambiente_300_promedio ?? '-'}}
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 px-1 text-center">200</td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ambiente_200_up ? $s_l[0]->rel_reologia[0]->tem_ambiente_200_up : '-' }}
                                </td>
                                <td class="py-2 px-1 text-center">
                                     {{ $s_l[0]->rel_reologia[0]->tem_ambiente_200 ? $s_l[0]->rel_reologia[0]->tem_ambiente_200 : '-' }}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{$s_l[0]->calculos_reologias[0]->tem_ambiente_200_cociente ?? '-'}}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{$s_l[0]->calculos_reologias[0]->tem_ambiente_200_promedio ?? '-'}}
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 px-1 text-center">100</td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ambiente_100_up ? $s_l[0]->rel_reologia[0]->tem_ambiente_100_up : '-' }}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ambiente_100 ? $s_l[0]->rel_reologia[0]->tem_ambiente_100 : '-' }}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{$s_l[0]->calculos_reologias[0]->tem_ambiente_100_cociente ?? '-'}}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{$s_l[0]->calculos_reologias[0]->tem_ambiente_100_promedio ?? '-'}}
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 px-1 text-center">60</td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ambiente_60_up ? $s_l[0]->rel_reologia[0]->tem_ambiente_60_up : '-' }}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ambiente_60 ? $s_l[0]->rel_reologia[0]->tem_ambiente_60 : '-' }}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{$s_l[0]->calculos_reologias[0]->tem_ambiente_60_cociente ?? '-'}}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{$s_l[0]->calculos_reologias[0]->tem_ambiente_60_promedio ?? '-'}}
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 px-1 text-center">30</td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ambiente_30_up ? $s_l[0]->rel_reologia[0]->tem_ambiente_30_up : '-' }}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ambiente_30 ? $s_l[0]->rel_reologia[0]->tem_ambiente_30 : '-' }}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{$s_l[0]->calculos_reologias[0]->tem_ambiente_30_cociente ?? '-'}}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{$s_l[0]->calculos_reologias[0]->tem_ambiente_30_promedio ?? '-'}}
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 px-1 text-center">6</td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ambiente_6_up ? $s_l[0]->rel_reologia[0]->tem_ambiente_6_up : '-' }}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ambiente_6 ? $s_l[0]->rel_reologia[0]->tem_ambiente_6 : '-' }}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{$s_l[0]->calculos_reologias[0]->tem_ambiente_6_cociente ?? '-'}}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{$s_l[0]->calculos_reologias[0]->tem_ambiente_6_promedio ?? '-'}}
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 px-1 text-center">3</td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ambiente_3_up ? $s_l[0]->rel_reologia[0]->tem_ambiente_3_up : '-' }}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ambiente_3 ? $s_l[0]->rel_reologia[0]->tem_ambiente_3 : '-' }}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{$s_l[0]->calculos_reologias[0]->tem_ambiente_3_cociente ?? '-'}}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{$s_l[0]->calculos_reologias[0]->tem_ambiente_3_promedio ?? '-'}}    
                                </td> 
                            </tr>
                        </tbody>
                    </table>
                    <table class="w-full text-sm border-gray-300">
                        <tbody>
                            <tr>               
                                <td class="py-2 px-1 text-right border-0 w-2/3">Viscosidad Plastica <small>(cp)</small></td>
                                <td class="py-2 px-1 text-center border-0 w-1/3">-</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-1 text-right border-0">Punto de Cedencia <small>(lb/100ft2)</small></td>
                                <td class="py-2 px-1 text-center border-0">-</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-1 text-right border-0">Gel 10 segundos</td>
                                <td class="py-2 px-1 text-center border-0">
                                    {{ $s_l[0]->rel_reologia[0]->temp_ambiente_gel_10_seg ? $s_l[0]->rel_reologia[0]->temp_ambiente_gel_10_seg : '-' }}
                                </td>
                            </tr>
                            <tr>
                                <td class="py-2 px-1 text-right border-0">Gel 10 minutos</td>
                                <td class="py-2 px-1 text-center border-0">
                                    {{ $s_l[0]->rel_reologia[0]->temp_ambiente_gel_10_min ? $s_l[0]->rel_reologia[0]->temp_ambiente_gel_10_min : '-' }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="w-1/2 p-2">
                    <div class="mb-2 text-center">
                        <h5 class="mb-1 text-center ">Reologías a temp. Ensayo<span class="text-red-500"> *</span></h5>
                    </div>
                    <table class="w-full text-sm border border-gray-300">
                        <thead class="bg-gray-200 text-gray-700">
                            <tr>
                                <th class="p-1 text-center border border-gray-300">RPM</th>
                                <th class="p-1 text-center border border-gray-300">Up</th>
                                <th class="p-1 text-center border border-gray-300">Down</th>
                                <th class="p-1 text-center border border-gray-300">Cociente</th>
                                <th class="p-1 text-center border border-gray-300">Prom.</th>
                            </tr>
                        </thead>
                        <tbody class="bg-gray-50">
                            <tr class="border-b">
                                <td class="py-2 px-1 text-center">300</td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ensayo_300_up ? $s_l[0]->rel_reologia[0]->tem_ensayo_300_up : '-' }}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ensayo_300 ? $s_l[0]->rel_reologia[0]->tem_ensayo_300 : '-' }}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{$s_l[0]->calculos_reologias[0]->tem_ensayo_300_cociente ?? '-'}}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{$s_l[0]->calculos_reologias[0]->tem_ensayo_300_promedio ?? '-'}}
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 px-1 text-center">200</td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ensayo_200_up ? $s_l[0]->rel_reologia[0]->tem_ensayo_200_up : '-' }}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ensayo_200? $s_l[0]->rel_reologia[0]->tem_ensayo_200 : '-' }}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{$s_l[0]->calculos_reologias[0]->tem_ensayo_200_cociente ?? '-'}}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{$s_l[0]->calculos_reologias[0]->tem_ensayo_200_promedio ?? '-'}}
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 px-1 text-center">100</td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ensayo_100_up ? $s_l[0]->rel_reologia[0]->tem_ensayo_100_up : '-' }}                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ensayo_100 ? $s_l[0]->rel_reologia[0]->tem_ensayo_100 : '-' }}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{$s_l[0]->calculos_reologias[0]->tem_ensayo_100_cociente ?? '-'}}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{$s_l[0]->calculos_reologias[0]->tem_ensayo_100_promedio ?? '-'}}
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 px-1 text-center">60</td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ensayo_60_up ? $s_l[0]->rel_reologia[0]->tem_ensayo_60_up : '-' }}                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ensayo_60 ? $s_l[0]->rel_reologia[0]->tem_ensayo_60 : '-' }}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{$s_l[0]->calculos_reologias[0]->tem_ensayo_60_cociente ?? '-'}}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{$s_l[0]->calculos_reologias[0]->tem_ensayo_60_promedio ?? '-'}}
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 px-1 text-center">30</td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ensayo_30_up ? $s_l[0]->rel_reologia[0]->tem_ensayo_30_up : '-' }}                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ensayo_30 ? $s_l[0]->rel_reologia[0]->tem_ensayo_30 : '-' }}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{$s_l[0]->calculos_reologias[0]->tem_ensayo_30_cociente ?? '-'}}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{$s_l[0]->calculos_reologias[0]->tem_ensayo_30_promedio ?? '-'}}
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 px-1 text-center">6</td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ensayo_6_up ? $s_l[0]->rel_reologia[0]->tem_ensayo_6_up : '-' }}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ensayo_6 ? $s_l[0]->rel_reologia[0]->tem_ensayo_6 : '-' }}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{$s_l[0]->calculos_reologias[0]->tem_ensayo_6_cociente ?? '-'}}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{$s_l[0]->calculos_reologias[0]->tem_ensayo_6_promedio ?? '-'}}
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 px-1 text-center">3</td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ensayo_3_up ? $s_l[0]->rel_reologia[0]->tem_ensayo_3_up : '-' }}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ensayo_3 ? $s_l[0]->rel_reologia[0]->tem_ensayo_3 : '-' }}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->calculos_reologias[0]->tem_ensayo_3_cociente ?? '-'}}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{$s_l[0]->calculos_reologias[0]->tem_ensayo_3_promedio ?? '-'}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="w-full text-sm border-gray-300">
                        <tbody>
                            <tr>               
                                <td class="py-2 px-1 text-right border-0 w-2/3">Viscosidad Plastica <small>(cp)</small></td>
                                <td class="py-2 px-1 text-center border-0 w-1/3"> - </td>
                            </tr>
                            <tr>
                                <td class="py-2 px-1 text-right border-0">Punto de Cedencia <small>(lb/100ft2)</small></td>
                                <td class="py-2 px-1 text-center border-0"> - </td>
                            </tr>
                            <tr>
                                <td class="py-2 px-1 text-right border-0">Gel 10 segundos</td>
                                <td class="py-2 px-1 text-center border-0">
                                    {{ $s_l[0]->rel_reologia[0]->temp_ensayo_gel_10_seg ? $s_l[0]->rel_reologia[0]->temp_ensayo_gel_10_seg : '-' }}
                                </td>
                            </tr>
                            <tr>
                                <td class="py-2 px-1 text-right border-0">Gel 10 minutos</td>
                                <td class="py-2 px-1 text-center border-0">
                                    {{ $s_l[0]->rel_reologia[0]->temp_ensayo_gel_10_min ? $s_l[0]->rel_reologia[0]->temp_ensayo_gel_10_min : '-' }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @else
        <div class="accordion" id="accordionReologia"></div>
    @endif
    @if (count($s_l[0]->rel_reologia) == 0)
        <form id="form_reologia" method="POST">
            @csrf
            <div class="flex">
                <div class="w-1/2 p-2">
                    {{-- <form action="{{ route('store_reologia') }}" method="POST"> NO DESCOMENTAR--}}
                    <div class="mb-2 text-center">
                        <h5 class="mb-1">Reologías a temp. Ambiente<span class="text-red-500"> *<small> requerido</small></span></h5>
                    </div>
                    <input type="hidden" name="solicitud_lechada_id" value="{{ $s_l[0]->id }}">
                        <table class="w-full text-sm border border-gray-300">
                            <thead class="bg-gray-200 text-gray-700">
                                <tr>
                                    <th class="p-1 text-center border border-gray-300">RPM</th>
                                    <th class="p-1 text-center border border-gray-300">Up</th>
                                    <th class="p-1 text-center border border-gray-300">Down</th>
                                    <th class="p-1 text-center border border-gray-300">Cociente</th>
                                    <th class="p-1 text-center border border-gray-300">Prom.</th>
                                </tr>
                            </thead>
                            <tbody class="bg-gray-50">
                                <tr class="border-b">
                                    <td td class="py-2 px-1 text-center">300</td>
                                    <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                        placeholder="Ingrese un resultado" name="tem_ambiente_300_up"></td>
                                    <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                        placeholder="Ingrese un resultado" name="tem_ambiente_300"></td>
                                    <td class="py-2 px-1 text-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 inline-block">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" />
                                        </svg>
                                    </td>
                                    <td class="py-2 px-1 text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 inline-block">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <td td class="py-2 px-1 text-center">200</td>
                                    <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                        placeholder="Ingrese un resultado" name="tem_ambiente_200_up"></td>
                                    <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                        placeholder="Ingrese un resultado" name="tem_ambiente_200"></td>
                                    <td class="py-2 px-1 text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 inline-block">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" />
                                        </svg>
                                    </td>
                                    <td class="py-2 px-1 text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 inline-block">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <td td class="py-2 px-1 text-center">100</td>
                                    <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                        placeholder="Ingrese un resultado" name="tem_ambiente_100_up"></td>
                                    <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                        placeholder="Ingrese un resultado" name="tem_ambiente_100"></td>
                                    <td class="py-2 px-1 text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 inline-block">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" />
                                        </svg>
                                    </td>
                                    <td class="py-2 px-1 text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 inline-block">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <td td class="py-2 px-1 text-center">60</td>
                                    <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                        placeholder="Ingrese un resultado" name="tem_ambiente_60_up"></td>
                                    <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                            placeholder="Ingrese un resultado" name="tem_ambiente_60"></td>
                                    <td class="py-2 px-1 text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 inline-block">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" />
                                        </svg>
                                    </td>
                                    <td class="py-2 px-1 text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 inline-block">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <td td class="py-2 px-1 text-center">30</td>
                                    <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                        placeholder="Ingrese un resultado" name="tem_ambiente_30_up"></td>
                                    <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                        placeholder="Ingrese un resultado" name="tem_ambiente_30"></td>
                                    <td class="py-2 px-1 text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 inline-block">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" />
                                        </svg>
                                    </td>
                                    <td class="py-2 px-1 text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 inline-block">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <td td class="py-2 px-1 text-center">6</td>
                                    <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                        placeholder="Ingrese un resultado" name="tem_ambiente_6_up"></td>
                                    <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                        placeholder="Ingrese un resultado" name="tem_ambiente_6"></td>
                                    <td class="py-2 px-1 text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 inline-block">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" />
                                        </svg>
                                    </td>
                                    <td class="py-2 px-1 text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 inline-block">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" />
                                        </svg>
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <td td class="py-2 px-1 text-center">3</td>
                                    <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                        placeholder="Ingrese un resultado" name="tem_ambiente_3_up"></td>
                                    <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                        placeholder="Ingrese un resultado" name="tem_ambiente_3"></td>
                                    <td class="py-2 px-1 text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 inline-block">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" />
                                        </svg>
                                    </td>
                                    <td class="py-2 px-1 text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 inline-block">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" />
                                        </svg>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="w-full text-sm border-gray-300">
                            <tbody>
                                <tr>               
                                    <td class="py-2 px-1 text-right border-0 w-2/3">Viscosidad Plastica <small>(cp)</small></td>
                                    <td class="py-2 px-1 text-center border-0 w-1/3"><input type="number" class="form-control text-sm"
                                        placeholder="Cálculo automático" name="" readonly></td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-1 text-right border-0">Punto de Cedencia <small>(lb/100ft2)</small></td>
                                    <td class="py-2 px-1 text-center border-0"><input type="number" class="form-control text-sm"
                                        placeholder="Cálculo automático" name="" readonly></td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-1 text-right border-0">Gel 10 segundos</td>
                                    <td class="py-2 px-1 text-center border-0"><input type="number" class="form-control text-sm"
                                        placeholder="Ingrese un resultado" name="temp_ambiente_gel_10_seg"></td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-1 text-right border-0">Gel 10 minutos</td>
                                    <td class="py-2 px-1 text-center border-0"><input type="number" class="form-control text-sm"
                                        placeholder="Ingrese un resultado" name="temp_ambiente_gel_10_min"></td>
                                </tr>
                            </tbody>
                        </table>
                </div>
                <div class="w-1/2 p-2">
                    <div class="mb-2 text-center">
                        <h5 class="mb-1">Reologías a temp. Ensayo</h5>
                    </div>
                    <table class="w-full text-sm border border-gray-300">
                        <thead class="bg-gray-200 text-gray-700">
                            <tr>
                                <th class="p-1 text-center border border-gray-300">RPM</th>
                                <th class="p-1 text-center border border-gray-300">Up</th>
                                <th class="p-1 text-center border border-gray-300">Down</th>
                                <th class="p-1 text-center border border-gray-300">Cociente</th>
                                <th class="p-1 text-center border border-gray-300">Prom.</th>
                            </tr>
                        </thead>
                        <tbody class="bg-gray-50">
                            <tr class="border-b">
                                <td td class="py-2 px-1 text-center">300</td>
                                <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese un resultado" name="tem_ensayo_300_up"></td>
                                <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese un resultado" name="tem_ensayo_300"></td>
                                <td class="py-2 px-1 text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 inline-block">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" />
                                    </svg>
                                </td>
                                <td class="py-2 px-1 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 inline-block">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" />
                                    </svg>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td td class="py-2 px-1 text-center">200</td>
                                <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese un resultado" name="tem_ensayo_200_up"></td>
                                <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese un resultado" name="tem_ensayo_200"></td>
                                <td class="py-2 px-1 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 inline-block">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" />
                                    </svg>
                                </td>
                                <td class="py-2 px-1 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 inline-block">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" />
                                    </svg>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td td class="py-2 px-1 text-center">100</td>
                                <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese un resultado" name="tem_ensayo_100_up"></td>
                                <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese un resultado" name="tem_ensayo_100"></td>
                                <td class="py-2 px-1 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 inline-block">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" />
                                    </svg>
                                </td>
                                <td class="py-2 px-1 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 inline-block">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" />
                                    </svg>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td td class="py-2 px-1 text-center">60</td>
                                <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese un resultado" name="tem_ensayo_60_up"></td>
                                <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                        placeholder="Ingrese un resultado" name="tem_ensayo_60"></td>
                                <td class="py-2 px-1 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 inline-block">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" />
                                    </svg>
                                </td>
                                <td class="py-2 px-1 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 inline-block">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" />
                                    </svg>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td td class="py-2 px-1 text-center">30</td>
                                <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese un resultado" name="tem_ensayo_30_up"></td>
                                <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese un resultado" name="tem_ensayo_30"></td>
                                <td class="py-2 px-1 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 inline-block">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" />
                                    </svg>
                                </td>
                                <td class="py-2 px-1 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 inline-block">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" />
                                    </svg>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td td class="py-2 px-1 text-center">6</td>
                                <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese un resultado" name="tem_ensayo_6_up"></td>
                                <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese un resultado" name="tem_ensayo_6"></td>
                                <td class="py-2 px-1 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 inline-block">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" />
                                    </svg>
                                </td>
                                <td class="py-2 px-1 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 inline-block">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" />
                                    </svg>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td td class="py-2 px-1 text-center">3</td>
                                <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese un resultado" name="tem_ensayo_3_up"></td>
                                <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese un resultado" name="tem_ensayo_3"></td>
                                <td class="py-2 px-1 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 inline-block">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" />
                                    </svg>
                                </td>
                                <td class="py-2 px-1 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 inline-block">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" />
                                    </svg>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="w-full text-sm border-gray-300">
                        <tbody>
                            <tr>               
                                <td class="py-2 px-1 text-right border-0 w-2/3">Viscosidad Plastica <small>(cp)</small></td>
                                <td class="py-2 px-1 text-center border-0 w-1/3"><input type="number" class="form-control text-sm"
                                    placeholder="Cálculo automático" name="" readonly></td>
                            </tr>
                            <tr>
                                <td class="py-2 px-1 text-right border-0">Punto de Cedencia <small>(lb/100ft2)</small></td>
                                <td class="py-2 px-1 text-center border-0"><input type="number" class="form-control text-sm"
                                    placeholder="Cálculo automático" name="" readonly></td>
                            </tr>
                            <tr>
                                <td class="py-2 px-1 text-right border-0">Gel 10 segundos</td>
                                <td class="py-2 px-1 text-center border-0"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese un resultado" name="temp_ensayo_gel_10_seg"></td>
                            </tr>
                            <tr>
                                <td class="py-2 px-1 text-right border-0">Gel 10 minutos</td>
                                <td class="py-2 px-1 text-center border-0"><input type="number" class="form-control text-sm"
                                    placeholder="Ingrese un resultado" name="temp_ensayo_gel_10_min"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="flex justify-center">
                <x-button type="click" id="btn_submit_reologia"
                    style="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-sm">Crear
                    Registro</x-button>
            </div>
        </form>
    @endif
</div> 
    
<script>
    const btn_submit_reologia = document.getElementById('btn_submit_reologia');

    if (btn_submit_reologia) {
        btn_submit_reologia.addEventListener('click', e => {
            e.preventDefault();
            let form = new FormData(document.getElementById('form_reologia'))

            confirmAlert().then((confirmed) => {
                if (confirmed) {
                    fetch("{{ route('store_reologia') }}", {
                            method: 'POST',
                            body: form
                        }).then((response) => response.json())
                        .then((data) => {
                            if (data) {
                        
                                componentReologia(data.success_reologia)
                                document.getElementById('form_reologia').style.display = 'none'
                                successAlert('¡Registro Asignado!',
                                    'El registro se asignó correctamente.').then(
                                    (confirmed) => {
                                        // window.location.reload();
                                    })
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
