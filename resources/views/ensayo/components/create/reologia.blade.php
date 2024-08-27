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
    <!-- Modal Reología Up -->
    <div id="myModalReologiaUp" class="modal">
        <div class="modal-content">
            <span id="closeImgReologiaUp" class="closeImg">&times;</span>
            <img id="modalImgReologiaUp" style="width: auto;">
        </div>
    </div>
    <!-- Modal Reología Down -->
    <div id="myModalReologiaDown" class="modal">
        <div class="modal-content">
            <span id="closeImgReologiaDown" class="closeImg">&times;</span>
            <img id="modalImgReologiaDown" style="width: auto;">
        </div>
    </div>
    {{-- <div id="myModalReologiaDown" class="modal">
        <span class="close" onclick="closeModal('myModalReologiaDown')">&times;</span>
        <img class="modal-content" id="modalImgReologiaDown">
        <div id="caption"></div>
    </div> --}}

    @if (count($s_l[0]->rel_reologia) > 0)

        <div class="accordion" id="accordionReologia">
            <div>
                <div class="mb-2 text-center">
                    <h5 class="mb-1 text-center ">Reología Ascendente<span class="text-red-500"> *</span></h5>
                    <br>
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
                                {{ $s_l[0]->rel_reologia[0]->tem_ambiente_300 ? $s_l[0]->rel_reologia[0]->tem_ambiente_300 : '-' }}
                            </td>
                            <td class="py-2 px-1 text-center">
                                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_300 ? $s_l[0]->rel_reologia[0]->tem_ensayo_300 : '-' }}
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 px-1 text-center">200</td>
                            <td class="py-2 px-1 text-center">
                                {{ $s_l[0]->rel_reologia[0]->tem_ambiente_200 ? $s_l[0]->rel_reologia[0]->tem_ambiente_200 : '-' }}
                            </td>
                            <td class="py-2 px-1 text-center">
                                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_200 ? $s_l[0]->rel_reologia[0]->tem_ensayo_200 : '-' }}
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 px-1 text-center">100</td>
                            <td class="py-2 px-1 text-center">
                                {{ $s_l[0]->rel_reologia[0]->tem_ambiente_100 ? $s_l[0]->rel_reologia[0]->tem_ambiente_100 : '-' }}
                            </td>
                            <td class="py-2 px-1 text-center">
                                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_100 ? $s_l[0]->rel_reologia[0]->tem_ensayo_100 : '-' }}
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 px-1 text-center">60</td>
                            <td class="py-2 px-1 text-center">
                                {{ $s_l[0]->rel_reologia[0]->tem_ambiente_60 ? $s_l[0]->rel_reologia[0]->tem_ambiente_60 : '-' }}
                            </td>
                            <td class="py-2 px-1 text-center">
                                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_60 ? $s_l[0]->rel_reologia[0]->tem_ensayo_60 : '-' }}
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 px-1 text-center">30</td>
                            <td class="py-2 px-1 text-center">
                                {{ $s_l[0]->rel_reologia[0]->tem_ambiente_30 ? $s_l[0]->rel_reologia[0]->tem_ambiente_30 : '-' }}
                            </td>
                            <td class="py-2 px-1 text-center">
                                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_30 ? $s_l[0]->rel_reologia[0]->tem_ensayo_30 : '-' }}
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 px-1 text-center">6</td>
                            <td class="py-2 px-1 text-center">
                                {{ $s_l[0]->rel_reologia[0]->tem_ambiente_6 ? $s_l[0]->rel_reologia[0]->tem_ambiente_6 : '-' }}
                            </td>
                            <td class="py-2 px-1 text-center">
                                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_6 ? $s_l[0]->rel_reologia[0]->tem_ensayo_6 : '-' }}
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 px-1 text-center">3</td>
                            <td class="py-2 px-1 text-center">
                                {{ $s_l[0]->rel_reologia[0]->tem_ambiente_3 ? $s_l[0]->rel_reologia[0]->tem_ambiente_3 : '-' }}
                            </td>
                            <td class="py-2 px-1 text-center">
                                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_3 ? $s_l[0]->rel_reologia[0]->tem_ensayo_3 : '-' }}
                            </td>
                        </tr>
                    </tbody>
                </table>
                {{-- <table class="w-full text-sm mt-3 border border-gray-300">
                    <thead class="bg-gray-200 text-gray-700">
                        <tr>
                            <th class="p-1 text-center border border-gray-300">Temperatura °C</th>
                            <th class="p-1 text-center border border-gray-300">T° Ambiente</th>
                            <th class="p-1 text-center border border-gray-300">T° Ensayo</th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-50">
                        <tr class="border-b">
                            <td class="py-2 px-1 text-center">Viscosidad Plastica (cp)</td>
                            <td class="py-2 px-1 text-center">
                                {{ $s_l[0]->rel_reologia[0]->temp_ambiente ? $s_l[0]->rel_reologia[0]->temp_ambiente : '-' }}
                            </td>
                            <td class="py-2 px-1 text-center">
                                {{ $s_l[0]->rel_reologia[0]->temp_ensayo ? $s_l[0]->rel_reologia[0]->temp_ensayo : '-' }}
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 px-1 text-center">Punto de Cedencia (lb/100ft2)</td>
                            <td class="py-2 px-1 text-center">
                                {{ $s_l[0]->rel_reologia[0]->temp_ambiente_punto_cedencia ? $s_l[0]->rel_reologia[0]->temp_ambiente_punto_cedencia : '-' }}
                            </td>
                            <td class="py-2 px-1 text-center">
                                {{ $s_l[0]->rel_reologia[0]->temp_ensayo_punto_cedencia ? $s_l[0]->rel_reologia[0]->temp_ensayo_punto_cedencia : '-' }}
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 px-1 text-center">Gel 10 segundos</td>
                            <td class="py-2 px-1 text-center">
                                {{ $s_l[0]->rel_reologia[0]->temp_ambiente_gel_10_seg ? $s_l[0]->rel_reologia[0]->temp_ambiente_gel_10_seg : '-' }}
                            </td>
                            <td class="py-2 px-1 text-center">
                                {{ $s_l[0]->rel_reologia[0]->temp_ensayo_gel_10_seg ? $s_l[0]->rel_reologia[0]->temp_ensayo_gel_10_seg : '-' }}
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 px-1 text-center">Gel 10 minutos</td>
                            <td class="py-2 px-1 text-center">
                                {{ $s_l[0]->rel_reologia[0]->temp_ambiente_gel_10_min ? $s_l[0]->rel_reologia[0]->temp_ambiente_gel_10_min : '-' }}
                            </td>
                            <td class="py-2 px-1 text-center">
                                {{ $s_l[0]->rel_reologia[0]->temp_ensayo_gel_10_min ? $s_l[0]->rel_reologia[0]->temp_ensayo_gel_10_min : '-' }}
                            </td>
                        </tr>
                    </tbody>
                </table> --}}
                {{-- <br>
                <div class="mb-2">
                    <h5 class="mb-1 text-center">Reología (up reads)</h5>
                </div>
                    <table class="w-full text-sm border border-gray-300">
                        <thead class="bg-gray-200 text-gray-700">
                            <tr>
                                <th class="border border-gray-300"></th>
                                <th class="p-1 text-center border border-gray-300">RPM</th>
                                <th class="p-1 text-center border border-gray-300">300</th>
                                <th class="p-1 text-center border border-gray-300">200</th>
                                <th class="p-1 text-center border border-gray-300">100</th>
                                <th class="p-1 text-center border border-gray-300">60</th>
                                <th class="p-1 text-center border border-gray-300">30</th>
                                <th class="p-1 text-center border border-gray-300">6</th>
                                <th class="p-1 text-center border border-gray-300">3</th>
                            </tr>
                        </thead>
                        <tbody class="bg-gray-50">
                            <tr class="border-b">
                                <td class="py-2 px-1 text-center">T° Ambiente</td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ambiente_rpm_up . '°C' ? $s_l[0]->rel_reologia[0]->tem_ambiente_rpm_up : '-' }}°C
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ambiente_300_up ? $s_l[0]->rel_reologia[0]->tem_ambiente_300_up : '-' }}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ambiente_200_up ? $s_l[0]->rel_reologia[0]->tem_ambiente_200_up : '-' }}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ambiente_100_up ? $s_l[0]->rel_reologia[0]->tem_ambiente_100_up : '-' }}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ambiente_60_up ? $s_l[0]->rel_reologia[0]->tem_ambiente_60_up : '-' }}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ambiente_30_up ? $s_l[0]->rel_reologia[0]->tem_ambiente_30_up : '-' }}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ambiente_6_up ? $s_l[0]->rel_reologia[0]->tem_ambiente_6_up : '-' }}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ambiente_3_up ? $s_l[0]->rel_reologia[0]->tem_ambiente_3_up : '-' }}
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2 px-1 text-center">T° Ensayo</td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ensayo_rpm_up . '°C' ? $s_l[0]->rel_reologia[0]->tem_ensayo_rpm_up : '-' }}°C
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ensayo_300_up ? $s_l[0]->rel_reologia[0]->tem_ensayo_300_up : '-' }}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ensayo_200_up ? $s_l[0]->rel_reologia[0]->tem_ensayo_200_up : '-' }}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ensayo_100_up ? $s_l[0]->rel_reologia[0]->tem_ensayo_100_up : '-' }}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ensayo_60_up ? $s_l[0]->rel_reologia[0]->tem_ensayo_60_up : '-' }}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ensayo_30_up ? $s_l[0]->rel_reologia[0]->tem_ensayo_30_up : '-' }}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ensayo_6_up ? $s_l[0]->rel_reologia[0]->tem_ensayo_6_up : '-' }}
                                </td>
                                <td class="py-2 px-1 text-center">
                                    {{ $s_l[0]->rel_reologia[0]->tem_ensayo_3_up ? $s_l[0]->rel_reologia[0]->tem_ensayo_3_up : '-' }}
                                </td>
                            </tr>
                        </tbody>
                    </table> --}}
                    <div class="mb-2 mt-2 text-center">
                        <h5 class="mb-1">Adjunto</h5>
                        <section>
                            <div
                                class="relative md:w-1/2 xl:w-1/3 mx-auto flex items-center p-2 border rounded-md border-gray-200 hover:bg-gray-50 ">
                                <div class="w-12 h-12 rounded-full bg-gray-100 flex-shrink-0">
                                    <img src="{{ asset('uploads/ensayos/') . '/' . $s_l[0]->rel_reologia[0]->img_up }}"
                                        class="w-12 h-12 object-cover rounded-full cursor-pointer" alt=""
                                        onclick="openModal('myModalReologiaUp', 'modalImgReologiaUp', '{{ asset('uploads/ensayos') . '/' . $s_l[0]->rel_reologia[0]->img_up }}')"> 
                                </div>
                                <div class="text-left w-full ms-2">
                                    <h6 class="text-md">Archivo adjunto</h6>
                                    <div class="flex justify-between items-center text-gray-500 text-sm">
                                        <p class="mb-0">{{ $s_l[0]->rel_reologia[0]->img_up }}</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                <div class="mb-2 text-center">
                    <br>
                    <h5 class="mb-1 text-center ">Reología Descendente<span class="text-red-500"> *</span></h5>
                    <br>
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
                                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_300_up ? $s_l[0]->rel_reologia[0]->tem_ensayo_300_up : '-' }}
                            </td>
                            <td class="py-2 px-1 text-center"></td>
                            <td class="py-2 px-1 text-center"></td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 px-1 text-center">200</td>
                            <td class="py-2 px-1 text-center">
                                {{ $s_l[0]->rel_reologia[0]->tem_ambiente_200_up ? $s_l[0]->rel_reologia[0]->tem_ambiente_200_up : '-' }}
                            </td>
                            <td class="py-2 px-1 text-center">
                                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_200_up ? $s_l[0]->rel_reologia[0]->tem_ensayo_200_up : '-' }}
                            </td>
                            <td class="py-2 px-1 text-center"></td>
                            <td class="py-2 px-1 text-center"></td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 px-1 text-center">100</td>
                            <td class="py-2 px-1 text-center">
                                {{ $s_l[0]->rel_reologia[0]->tem_ambiente_100_up ? $s_l[0]->rel_reologia[0]->tem_ambiente_100_up : '-' }}
                            </td>
                            <td class="py-2 px-1 text-center">
                                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_100_up ? $s_l[0]->rel_reologia[0]->tem_ensayo_100_up : '-' }}
                            </td>
                            <td class="py-2 px-1 text-center"></td>
                            <td class="py-2 px-1 text-center"></td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 px-1 text-center">60</td>
                            <td class="py-2 px-1 text-center">
                                {{ $s_l[0]->rel_reologia[0]->tem_ambiente_60_up ? $s_l[0]->rel_reologia[0]->tem_ambiente_60_up : '-' }}
                            </td>
                            <td class="py-2 px-1 text-center">
                                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_60_up ? $s_l[0]->rel_reologia[0]->tem_ensayo_60_up : '-' }}
                            </td>
                            <td class="py-2 px-1 text-center"></td>
                            <td class="py-2 px-1 text-center"></td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 px-1 text-center">30</td>
                            <td class="py-2 px-1 text-center">
                                {{ $s_l[0]->rel_reologia[0]->tem_ambiente_30_up ? $s_l[0]->rel_reologia[0]->tem_ambiente_30_up : '-' }}
                            </td>
                            <td class="py-2 px-1 text-center">
                                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_30_up ? $s_l[0]->rel_reologia[0]->tem_ensayo_30_up : '-' }}
                            </td>
                            <td class="py-2 px-1 text-center"></td>
                            <td class="py-2 px-1 text-center"></td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 px-1 text-center">6</td>
                            <td class="py-2 px-1 text-center">
                                {{ $s_l[0]->rel_reologia[0]->tem_ambiente_6_up ? $s_l[0]->rel_reologia[0]->tem_ambiente_6_up : '-' }}
                            </td>
                            <td class="py-2 px-1 text-center">
                                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_6_up ? $s_l[0]->rel_reologia[0]->tem_ensayo_6_up : '-' }}
                            </td>
                            <td class="py-2 px-1 text-center"></td>
                            <td class="py-2 px-1 text-center"></td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2 px-1 text-center">3</td>
                            <td class="py-2 px-1 text-center">
                                {{ $s_l[0]->rel_reologia[0]->tem_ambiente_3_up ? $s_l[0]->rel_reologia[0]->tem_ambiente_3_up : '-' }}
                            </td>
                            <td class="py-2 px-1 text-center">
                                {{ $s_l[0]->rel_reologia[0]->tem_ensayo_3_up ? $s_l[0]->rel_reologia[0]->tem_ensayo_3_up : '-' }}
                            </td>
                            <td class="py-2 px-1 text-center"></td>
                            <td class="py-2 px-1 text-center"></td>
                        </tr>
                    </tbody>
                </table>


                    {{-- <br>
                    <div class="mb-2 ">
                        <h5 class="mb-1 text-center">Reología (down reads)</h5>
 
                    </div>
                        <table class="w-full text-sm border border-gray-300">
                            <thead class="bg-gray-200 text-gray-700">
                                <tr>
                                    <th class="border border-gray-300"></th>
                                    <th class="p-1 text-center border border-gray-300">RPM</th>
                                    <th class="p-1 text-center border border-gray-300">300</th>
                                    <th class="p-1 text-center border border-gray-300">200</th>
                                    <th class="p-1 text-center border border-gray-300">100</th>
                                    <th class="p-1 text-center border border-gray-300">60</th>
                                    <th class="p-1 text-center border border-gray-300">30</th>
                                    <th class="p-1 text-center border border-gray-300">6</th>
                                    <th class="p-1 text-center border border-gray-300">3</th>
                                </tr>
                            </thead>
                            <tbody class="bg-gray-50">
                                <tr class="border-b">
                                    <td class="py-2 px-1 text-center">T° Ambiente</td>
                                    <td class="py-2 px-1 text-center">
                                        {{ $s_l[0]->rel_reologia[0]->tem_ambiente_rpm_down . '°C' ? $s_l[0]->rel_reologia[0]->tem_ambiente_rpm_down : '-' }}°C
                                    </td>
                                    <td class="py-2 px-1 text-center">
                                        {{ $s_l[0]->rel_reologia[0]->tem_ambiente_300_down ? $s_l[0]->rel_reologia[0]->tem_ambiente_300_down : '-' }}
                                    </td>
                                    <td class="py-2 px-1 text-center">
                                        {{ $s_l[0]->rel_reologia[0]->tem_ambiente_200_down ? $s_l[0]->rel_reologia[0]->tem_ambiente_200_down : '-' }}
                                    </td>
                                    <td class="py-2 px-1 text-center">
                                        {{ $s_l[0]->rel_reologia[0]->tem_ambiente_100_down ? $s_l[0]->rel_reologia[0]->tem_ambiente_100_down : '-' }}
                                    </td>
                                    <td class="py-2 px-1 text-center">
                                        {{ $s_l[0]->rel_reologia[0]->tem_ambiente_60_down ? $s_l[0]->rel_reologia[0]->tem_ambiente_60_down : '-' }}
                                    </td>
                                    <td class="py-2 px-1 text-center">
                                        {{ $s_l[0]->rel_reologia[0]->tem_ambiente_30_down ? $s_l[0]->rel_reologia[0]->tem_ambiente_30_down : '-' }}
                                    </td>
                                    <td class="py-2 px-1 text-center">
                                        {{ $s_l[0]->rel_reologia[0]->tem_ambiente_6_down ? $s_l[0]->rel_reologia[0]->tem_ambiente_6_down : '-' }}
                                    </td>
                                    <td class="py-2 px-1 text-center">
                                        {{ $s_l[0]->rel_reologia[0]->tem_ambiente_6_down ? $s_l[0]->rel_reologia[0]->tem_ambiente_3_down : '-' }}
                                    </td>
                                </tr>
                                <tr class="border-b">
                                    <td class="py-2 px-1 text-center">T° Ensayo</td>
                                    <td class="py-2 px-1 text-center">
                                        {{ $s_l[0]->rel_reologia[0]->tem_ensayo_rpm_down . '°C' ? $s_l[0]->rel_reologia[0]->tem_ensayo_rpm_down : '-' }}°C
                                    </td>
                                    <td class="py-2 px-1 text-center">
                                        {{ $s_l[0]->rel_reologia[0]->tem_ensayo_300_down ? $s_l[0]->rel_reologia[0]->tem_ensayo_300_down : '-' }}
                                    </td>
                                    <td class="py-2 px-1 text-center">
                                        {{ $s_l[0]->rel_reologia[0]->tem_ensayo_200_down ? $s_l[0]->rel_reologia[0]->tem_ensayo_200_down : '-' }}
                                    </td>
                                    <td class="py-2 px-1 text-center">
                                        {{ $s_l[0]->rel_reologia[0]->tem_ensayo_100_down ? $s_l[0]->rel_reologia[0]->tem_ensayo_100_down : '-' }}
                                    </td>
                                    <td class="py-2 px-1 text-center">
                                        {{ $s_l[0]->rel_reologia[0]->tem_ensayo_60_down ? $s_l[0]->rel_reologia[0]->tem_ensayo_60_down : '-' }}
                                    </td>
                                    <td class="py-2 px-1 text-center">
                                        {{ $s_l[0]->rel_reologia[0]->tem_ensayo_30_down ? $s_l[0]->rel_reologia[0]->tem_ensayo_30_down : '-' }}
                                    </td>
                                    <td class="py-2 px-1 text-center">
                                        {{ $s_l[0]->rel_reologia[0]->tem_ensayo_6_down ? $s_l[0]->rel_reologia[0]->tem_ensayo_6_down : '-' }}
                                    </td>
                                    <td class="py-2 px-1 text-center">
                                        {{ $s_l[0]->rel_reologia[0]->tem_ensayo_3_down ? $s_l[0]->rel_reologia[0]->tem_ensayo_3_down : '-' }}
                                    </td>
                                </tr>
                            </tbody>
                    </table> --}}
                    <div class="mb-2 mt-2 text-center">
                        <h5 class="mb-1">Adjunto</h5>
                        <section>
                            <div
                                class="relative md:w-1/2 xl:w-1/3 mx-auto flex items-center p-2 border rounded-md border-gray-200 hover:bg-gray-50 ">
                                <div class="w-12 h-12 rounded-full bg-gray-100 flex-shrink-0">
                                    <img src="{{ asset('uploads/ensayos/') . '/' . $s_l[0]->rel_reologia[0]->img_down }}"
                                        class="w-12 h-12 object-cover rounded-full cursor-pointer" alt=""
                                        onclick="openModal('myModalReologiaDown', 'modalImgReologiaDown', '{{ asset('uploads/ensayos/') . '/' . $s_l[0]->rel_reologia[0]->img_down }}')">
                                </div>
                                <div class="text-left w-full ms-2">
                                    <h6 class="text-md">Archivo adjunto</h6>
                                    <div class="flex justify-between items-center text-gray-500 text-sm">
                                        <p class="mb-0">{{ $s_l[0]->rel_reologia[0]->img_down }}</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
            </div>
        </div>
    @else
        <div class="accordion" id="accordionReologia"></div>
    @endif

    @if (count($s_l[0]->rel_reologia) == 0)
        <form id="form_reologia" method="POST">
            @csrf
            <div class="mb-2 text-center">
                <h5 class="mb-1">Registros de Reologías</h5>
                <br>
            </div>
            {{--Reporte: los nombres de las variables, no coinciden con las nuevas tablas, ya que todo estaba creado y pidieron cambios.
            Estos afectaron directamente a las variables ya declaradas en las migraciones de la db, por lo que me es muy dificil cambiarlo a esta altura,
            lo que antiguamente era avg reads, ahora es la tabla Ascendente, y la que era Up, es Descendente --}}
        {{-- <form action="{{ route('store_reologia') }}" method="POST"> NO DESCOMENTAR--}}
            <div class="mb-2 text-center">
                <h5 class="mb-1">Reología Ascendente <span class="text-red-500"> *<small> requerido</small></span></h5>
            </div>
            <input type="hidden" name="solicitud_lechada_id" value="{{ $s_l[0]->id }}">
            <div class="row mt-3 py-2 px-5">
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
                                placeholder="Ingrese un resultado" name="tem_ambiente_300"></td>
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
                                placeholder="Ingrese un resultado" name="tem_ambiente_200"></td>
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
                                placeholder="Ingrese un resultado" name="tem_ambiente_100"></td>
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
                                placeholder="Ingrese un resultado" name="tem_ambiente_60"></td>
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
                                placeholder="Ingrese un resultado" name="tem_ambiente_30"></td>
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
                                placeholder="Ingrese un resultado" name="tem_ambiente_6"></td>
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
                                placeholder="Ingrese un resultado" name="tem_ambiente_3"></td>
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

                <div class="mb-2 mt-2 text-center">
                    <h5 class="mb-1">Adjuntos a cargar <span class="text-red-500"><small>(Requerido)</small></span></h5>
                    <section id="container_file_reologia_up">
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
                    <div id="myModalReologiaUp" class="modal">
                        <div class="modal-content">
                            <span id="closeImgReologiaUp" class="closeImg">&times;</span>
                            <img id="modalImgReologiaUp" style="width: auto;">
                        </div>
                    </div>
    
                    <div class="bg-gray-50 w-1/2 mx-auto py-8 flex items-center justify-center rounded-md border border-gray-200 hover:bg-gray-100 cursor-pointer transition-all duration-100"
                        onclick="createFile('file_upload_reologiaup')" id="section_upload_image_reologia_up">
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
                    <input type="file" id="file_upload_reologiaup" name="file_upload_reologiaup" onchange="_listenChange(event, 'container_file_reologia_up', 'section_upload_image_reologia_up', 'myModalReologiaUp', 'modalImgReologiaUp')"
                        hidden>
                </div>
                <br>
                <div class="mb-2 text-center">
                    <br>
                    <h5 class="mb-1">Reología Descendente</h5>
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
                                placeholder="Ingrese un resultado" name="tem_ambiente_300_up"></td>
                            <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                placeholder="Ingrese un resultado" name="tem_ensayo_300_up"></td>
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
                                placeholder="Ingrese un resultado" name="tem_ensayo_200_up"></td>
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
                                placeholder="Ingrese un resultado" name="tem_ensayo_100_up"></td>
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
                                    placeholder="Ingrese un resultado" name="tem_ensayo_60_up"></td>
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
                                placeholder="Ingrese un resultado" name="tem_ensayo_30_up"></td>
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
                                placeholder="Ingrese un resultado" name="tem_ensayo_6_up"></td>
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
                                placeholder="Ingrese un resultado" name="tem_ensayo_3_up"></td>
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
                

                <div class="mb-2 mt-2 text-center">
                    <h5 class="mb-1">Adjuntos a cargar <span class="text-red-500"><small>(Requerido)</small></span></h5>
                    <section id="container_file_reologia_down">
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
                    <div id="myModalReologiaDown" class="modal">
                        <div class="modal-content">
                            <span id="closeImgReologiaDown" class="closeImg">&times;</span>
                            <img id="modalImgReologiaDown" style="width: auto;">
                        </div>
                    </div>
    
                    <div class="bg-gray-50 w-1/2 mx-auto py-8 flex items-center justify-center rounded-md border border-gray-200 hover:bg-gray-100 cursor-pointer transition-all duration-100"
                        onclick="createFile('file_upload_reologiadown')" id="section_upload_image_reologia_down">
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
                    <input type="file" id="file_upload_reologiadown" name="file_upload_reologiadown" onchange="_listenChange(event, 'container_file_reologia_down', 'section_upload_image_reologia_down', 'myModalReologiaDown', 'modalImgReologiaDown')"
                        hidden>
                </div>
                
            </div>
            <div class="flex justify-center">
                <x-button type="click" id="btn_submit_reologia"
                    style="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-sm">Crear
                    Registro</x-button>
            </div>
        </form>
    @endif

</div> <!-- Reología -->
<script>
      // Modal open img Reología Up
    let myModalReologiaUp = document.querySelector('#myModalReologiaUp');
    let modalImgReologiaUp = document.querySelector('#modalImgReologiaUp');
    let spanImgCloseReologiaUp = document.querySelector('#closeImgReologiaUp');

    if (spanImgCloseReologiaUp) {
        spanImgCloseReologiaUp.onclick = function() {
            myModalReologiaUp.style.display = "none";
            document.body.classList.remove('modal-open');
        }
    }

    // Modal open img Reología Down
    let myModalReologiaDown = document.querySelector('#myModalReologiaDown');
    let modalImgReologiaDown = document.querySelector('#modalImgReologiaDown');
    let spanImgCloseReologiaDown = document.querySelector('#closeImgReologiaDown');

    if (spanImgCloseReologiaDown) {
        spanImgCloseReologiaDown.onclick = function() {
            myModalReologiaDown.style.display = "none";
            document.body.classList.remove('modal-open');
        }
    }
</script>

{{-- <script src="{{ asset('js/upload_one_img.js') }}"></script> --}}
{{-- Vieja configuracion
 <script> 

    let myModalReologiaUp = document.querySelector('#myModalReologiaUp');
    let modalImgReologiaUp = document.querySelector('#modalImgReologiaUp');
    let spanImgCloseReologiaUp = document.querySelector('#closeImgReologiaUp');

    if (spanImgCloseReologiaUp) {
        spanImgCloseReologiaUp.onclick = function() {
            myModalReologiaUp .style.display = "none";
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
    let myModalReologiaDown = document.querySelector('#myModalReologiaDown');
    let modalImgReologiaDown = document.querySelector('#modalImgReologiaDown');
    let spanImgCloseReologiaDown = document.querySelector('#closeImgReologiaDown');

    if (spanImgCloseReologiaDown) {
        spanImgCloseReologiaDown.onclick = function() {
            myModalReologiaDown.style.display = "none";
            document.body.classList.remove('modal-open');
        }
    }

    // window.onclick = function(event) {
    //     if (event.target == modal) {
    //         myModalUca.style.display = "none";
    //         document.body.classList.remove('modal-open');
    //     }
    // }
</script> --}}

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
