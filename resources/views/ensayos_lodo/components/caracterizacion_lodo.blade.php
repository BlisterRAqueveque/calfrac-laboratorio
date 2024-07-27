<div class="mt-4 tab-pane fade show active" id="tab-caracterizacion" role="tabpanel"> <!-- caracterizacion del Lodo (1) -->
    <!-- @ if (count(algo[0]->rel_caracterizacion)>0)-->
        <div class="accordion" id="accordionCaracterizacion">
            <div>
                <div class="mb-2 text-center">
                    <h5 class="mb-1 text-center ">Caracterizacion del Lodo<span class="text-red-500"> *</span></h5>
                </div>
                <table class="w-full text-sm border border-gray-300">
                    <thead class="bg-gray-200 text-gray-700">
                        <tr>
                            <th class="border border-gray-300"></th>
                            <th class="p-1 text-center border border-gray-300">Tipo de Lodo</th>
                            <th class="p-1 text-center border border-gray-300">Base</th>
                            <th class="p-1 text-center border border-gray-300">Dens.(ppg)</th>
                            <th class="p-1 text-center border border-gray-300">Compania de Lodos</th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-50">
                        
                        
                    </tbody>
                </table>
                <br>
                <table class="w-full text-sm border border-gray-300">
                    <thead class="bg-gray-200 text-gray-700">
                        <tr>
                            <th class="border border-gray-300"></th>
                            <th class="p-1 text-center border border-gray-300">Tiempo</th>
                            <th class="p-1 text-center border border-gray-300">10 seg</th>
                            <th class="p-1 text-center border border-gray-300">10 min</th>
                            <th class="p-1 text-center border border-gray-300">30 min</th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-50">
                        
                        
                    </tbody>
                </table>
                <br>
                <table class="w-full text-sm border border-gray-300">
                    <thead class="bg-gray-200 text-gray-700">
                        <tr>
                            <th class="border border-gray-300"></th>
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
                    <tbody class="bg-gray-50">
                        
                        
                    </tbody>
                </table>
            </div>
        </div>
    <!-- @ Else -->
        <div class="accordion" id="accordionCaracterizacion"></div>
    <!-- @ endif -->

     <!-- @ if (count(algo[0]->rel_caracterizacion)==0)-->
     <form id='form_caracterizacion' method="POST">
        @csrf
        <div class="mb-2 text-center">
            <h5 class="mb-1">Caracterizacion del Lodo</h5>
            <br>
        </div>
        <input type="hidden" name="solicitud_lodo_id" value="aca va el id entre {}">
        <div class="row mt-3 py-2 px-5">
            <table class="w-full text-sm border border-gray-300">
                <thead class="bg-gray-200 text-gray-700">
                    <tr>
                        <th class="p-1 text-center border border-gray-300">Tipo de Lodo</th>
                        <th class="p-1 text-center border border-gray-300">Base</th>
                        <th class="p-1 text-center border border-gray-300">Dens.(ppg)</th>
                        <th class="p-1 text-center border border-gray-300">Compania de Lodos</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-50">
                    
                <td class="py-2 px-1 text-center"> <select name="tipo_lodo" id="tipo_lodo" class="text-sm" data-search="true"
                    data-silent-initial-value-set="true"></td>
                <td class="py-2 px-1 text-center"><select name="base" id="base" class="text-sm" data-search="true"
                    data-silent-initial-value-set="true"></td>
                <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                        placeholder="Ingrese un resultado" name="densidad_lodo_ensayo" step=".01"></td>
                <td class="py-2 px-1 text-center"><select name="mud_company" id="mud_company" class="text-sm" data-search="true"
                    data-silent-initial-value-set="true"></td>
                    
                </tbody>
            </table>

            <table class="w-full text-sm border border-gray-300">
                <thead class="bg-gray-200 text-gray-700">
                    <tr>
                        <th class="p-1 text-center border border-gray-300">Tiempo</th>
                        <th class="p-1 text-center border border-gray-300">10 seg</th>
                        <th class="p-1 text-center border border-gray-300">10 min</th>
                        <th class="p-1 text-center border border-gray-300">30 min</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-50">
                    
                <td class="py-2 px-1 text-center"><input type="text" class="form-control text-sm"
                        placeholder="Cº" name="tiempo"></td>
                <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                        placeholder="Ingrese un resultado" name="tiempo_10seg"></td>
                <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                        placeholder="Ingrese un resultado" name="tiempo_10min"></td>
                <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                        placeholder="Ingrese un resultado" name="tiempo_30min"></td>
                    
                </tbody>
            </table>

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
                <tbody class="bg-gray-50">
                    
                <td class="py-2 px-1 text-center"><input type="text" class="form-control text-sm"
                        placeholder="Cº" name="temp_BHCT"></td>
                <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                        placeholder="Ingrese un resultado" name="rpm600"></td>
                <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                        placeholder="Ingrese un resultado" name="rpm300"></td>
                <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                        placeholder="Ingrese un resultado" name="rpm200"></td>
                <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese" name="rpm100"></td>
                <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                         placeholder="Ingrese un resultado" name="rpm60"></td>
                <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese un resultado" name="rpm30"></td>
                <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                            placeholder="Ingrese un resultado" name="rpm6"></td>
                <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                placeholder="Ingrese un resultado" name="rpm3"></td>
                <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                   placeholder="Ingrese un resultado" name="VP"></td>
                <td class="py-2 px-1 text-center"><input type="number" class="form-control text-sm"
                                   placeholder="Ingrese un resultado" name="YP"></td>
                    
                </tbody>
            </table>
        </div>
     </form>
<!-- @ endif -->

</div><!-- caracterizacion del Lodo (1) -->

<script>
    //Aca iria el boton de submit el form
</script>