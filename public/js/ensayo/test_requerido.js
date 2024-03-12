const btnAddTest = document.getElementById('btnAddTest');
const contenedor_tests_requeridos = document.getElementById('contenedor_tests_requeridos');

let aux = 1;
btnAddTest.addEventListener('click', e => {
    e.preventDefault();
    let html = `
    <div class="mb-3 px-3">

    <div class="row rounded-md p-3 bg-gray-50 border border-gray-100 mb-3">
        <article class="col-xs-12 col-md-3 my-2">
            <label for="test" class="font-semibold tracking-wide sz">Test ${aux}</label>
            <select name="requerimientos[${aux}][test]" id="test" class="form-select sz">
                <option value="">-- Seleccione --</option>
                <option value="1">Test 1</option>
                <option value="2">Test 2</option>
                <option value="3">Test 3</option>
            </select>
        </article>

        <article class="col-xs-12 col-md-2 my-2">
            <label for="" class="font-semibold tracking-wide sz">Temp (ºF)</label>
            <input type="text" name="requerimientos[${aux}][temperatura]"
                class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                placeholder="ºF" min="0">
        </article>

        <article class="col-xs-12 col-md-3 my-2">
            <label for="condicion" class="font-semibold tracking-wide sz">Condiciones</label>
            <select name="requerimientos[${aux}][condicion]" id="condicion" class="form-select sz">
                <option value="">-- Seleccione --</option>
                <option value="1">Condicion 1</option>
                <option value="2">Condicion 2</option>
                <option value="3">Condicion 3</option>
            </select>
        </article>

        <article class="col-xs-12 col-md-4 text-center my-2">
            <label for="" class="font-semibold tracking-wide sz">Resultados</label>
            <div class="flex justify-center">
                <button class="text-center bg-gray-200 border rounded-lg px-10 py-1"
                    data-bs-toggle="modal" data-bs-target="#modal_resultado" onclick="event.preventDefault()">Mostrar
                    Resultados</button>
            </div>
        </article>

    </div>
    <!-- Modal de los Resultados -->
    <div class="modal fade" id="modal_resultado" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header p-2">
                    <h6 class="modal-title flex gap-3" id="exampleModalLabel">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                        </svg>
                        Información Requerida de los Resultados
                    </h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span class="ms-1 mb-0 font-light tracking-wide">Tiempo de Bombeabilidad</span>
                    <hr class="ms-1 mt-1">

                    <div class="row px-3 mb-2">
                        <div class="col-xs-12 col-md-2 my-2">
                            <label for="" class="font-semibold tracking-wide sz">Planilla</label>
                            <input type="number"
                                class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                placeholder="Nº" min="0" name="requerimientos[${aux}][resultados][planilla]">
                        </div>

                        <div class="col-xs-12 col-md-2 my-2">
                            <label for="" class="font-semibold tracking-wide sz">Consistómetro
                                Nº</label>
                            <input type="number"
                                class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                placeholder="Nº" requerimientos[${aux}][resultados][consistometro] min="0">
                        </div>

                        <div class="col-xs-12 col-md-3 my-2">
                            <label for="" class="font-semibold tracking-wide sz">Tiempo de
                                Acondicionamiento</label>
                            <input type="text"
                                class="form-control sz placeholder:text-gray-300 placeholder:font-light"
                                placeholder="Ingrese el tiempo" name="requerimientos[${aux}][resultados][tiempo_acondicionamiento]">
                        </div>

                        <div class="col-xs-12 col-md-2 my-2">
                            <label for="" class="font-semibold tracking-wide sz">Gradiente
                                <small>(ºF/100
                                    ft)</small></label>
                            <input type="number"
                                class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                placeholder="Nº" min="0" name="requerimientos[${aux}][resultados][gradiente]">
                        </div>

                        <div class="col-xs-12 col-md-2 my-2">
                            <label for="" class="font-semibold tracking-wide sz">Temperatura
                                <small>(ºC)</small></label>
                            <input type="number"
                                class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                placeholder="ºC" min="0" requerimientos[${aux}][resultados][temperatura_bombeabilidad]>
                        </div>

                        <div class="col-xs-12 col-md-2 my-2">
                            <label for="" class="font-semibold tracking-wide sz">Presión
                                <small>(psi)</small></label>
                            <input type="number"
                                class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                placeholder="Nº" min="0" requerimientos[${aux}][resultados][presion]>
                        </div>

                        <div class="col-xs-12 col-md-2 my-2">
                            <label for="" class="font-semibold tracking-wide sz">40 Bc
                                <small>(hh:mm)</small></label>
                            <input type="text"
                                class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                placeholder="hh:mm" requerimientos[${aux}][resultados][40_bc]>
                        </div>

                        <div class="col-xs-12 col-md-2 my-2">
                            <label for="" class="font-semibold tracking-wide sz">70 Bc
                                <small>(hh:mm)</small></label>
                            <input type="text"
                                class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                placeholder="hh:mm" requerimientos[${aux}][resultados][70_bc]>
                        </div>

                        <div class="col-xs-12 col-md-2 my-2">
                            <label for="" class="font-semibold tracking-wide sz">100 Bc
                                <small>(hh:mm)</small></label>
                            <input type="text"
                                class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                placeholder="hh:mm" requerimientos[${aux}][resultados][100_bc]>
                        </div>
                    </div>

                    <span class="ms-1 mb-0 font-light tracking-wide">UCA - Resistencia a la
                        Compresión</span>
                    <hr class="ms-1 mt-1">

                    <div class="row px-3 mb-2">
                        <div class="col-xs-12 col-md-2 text-center my-2">
                            <label for="" class="font-semibold tracking-wide sz">UCA Nº</label>
                            <div class="flex gap-3">
                                <input type="number"
                                    class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                    placeholder="Nº" min="0" name="requerimientos[${aux}][resultados][uca_numero]">
                                <input type="number"
                                    class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                    placeholder="ºC" min="0" name="requerimientos[${aux}][resultados][uca_temperatura]">
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-2 my-2">
                            <label for="" class="font-semibold tracking-wide sz">50 psi
                                <small>(hh:mm)</small></label>
                            <input type="text"
                                class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                placeholder="hh:mm" name="requerimientos[${aux}][resultados][uca_50_psi]">
                        </div>

                        <div class="col-xs-12 col-md-2 my-2">
                            <label for="" class="font-semibold tracking-wide sz">500 psi
                                <small>(hh:mm)</small></label>
                            <input type="text"
                                class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                placeholder="hh:mm" name="requerimientos[${aux}][resultados][uca_500_psi]">
                        </div>

                        <div class="col-xs-12 col-md-2 my-2">
                            <label for="" class="font-semibold tracking-wide sz">1000 psi
                                <small>(hh:mm)</small></label>
                            <input type="text"
                                class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                placeholder="hh:mm" name="requerimientos[${aux}][resultados][uca_1000_psi]">
                        </div>

                        <div class="col-xs-12 col-md-2 my-2">
                            <label for="" class="font-semibold tracking-wide sz">12 hr
                                <small>(psi)</small></label>
                            <input type="number"
                                class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                placeholder="psi" min="0" name="requerimientos[${aux}][resultados][uca_12_hr]">
                        </div>

                        <div class="col-xs-12 col-md-2 my-2">
                            <label for="" class="font-semibold tracking-wide sz">24 hr
                                <small>(psi)</small></label>
                            <input type="number"
                                class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                placeholder="psi" min="0" name="requerimientos[${aux}][resultados][uca_24_hr]">
                        </div>

                        <div class="col-xs-12 col-md-3 my-2">
                            <label for="" class="font-semibold tracking-wide sz">Impedancia
                                Acústica
                                <small>(M/rayls)</small></label>
                            <input type="text"
                                class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                placeholder="M/rayls" name="requerimientos[${aux}][resultados][uca_impedancia_acustica]">
                        </div>

                        <div class="col-xs-12 col-md-3 my-2">
                            <label for="" class="font-semibold tracking-wide sz">SGC cero
                                <small>(hh:mm)</small></label>
                            <input type="text"
                                class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                placeholder="hh:mm" name="requerimientos[${aux}][resultados][uca_sgc_cero]">
                        </div>

                        <div class="col-xs-12 col-md-3 my-2">
                            <label for="" class="font-semibold tracking-wide sz">SGC max
                                <small>(hh:mm)</small></label>
                            <input type="text"
                                class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                placeholder="hh:mm" name="requerimientos[${aux}][resultados][uca_sgc_max]">
                        </div>

                        <div class="col-xs-12 col-md-3 my-2">
                            <label for="" class="font-semibold tracking-wide sz">Tiempo
                                <small>(hh:mm)</small></label>
                            <input type="text"
                                class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                placeholder="hh:mm" name="requerimientos[${aux}][resultados][uca_tiempo]">
                        </div>


                    </div>

                    <span class="ms-1 mb-0 font-light tracking-wide">Radiología</span>
                    <hr class="ms-1 mt-1">

                    <div class="row px-3 mb-2">
                        <table>
                            <thead>
                                <th></th>
                                <th>RPM</th>
                                <th>300</th>
                                <th>200</th>
                                <th>100</th>
                                <th>60</th>
                                <th>30</th>
                                <th>6</th>
                                <th>3</th>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="w-40">Tº Amb</td>
                                    <td><input type="number" class="form-control sz" placeholder="Cº" name="requerimientos[${aux}][resultados][radiologia_temp_amb_rpm]">
                                    </td>
                                    <td><input type="number" class="form-control sz" placeholder="Nº" name="requerimientos[${aux}][resultados][radiologia_temp_amb_300]">
                                    </td>
                                    <td><input type="number" class="form-control sz" placeholder="Nº" name="requerimientos[${aux}][resultados][radiologia_temp_amb_200]">
                                    </td>
                                    <td><input type="number" class="form-control sz" placeholder="Nº" name="requerimientos[${aux}][resultados][radiologia_temp_amb_100]">
                                    </td>
                                    <td><input type="number" class="form-control sz" placeholder="Nº" name="requerimientos[${aux}][resultados][radiologia_temp_amb_60]">
                                    </td>
                                    <td><input type="number" class="form-control sz" placeholder="Nº" name="requerimientos[${aux}][resultados][radiologia_temp_amb_30]"></td>
                                    <td><input type="number" class="form-control sz" placeholder="Nº" name="requerimientos[${aux}][resultados][radiologia_temp_amb_6]"></td>
                                    <td><input type="number" class="form-control sz" placeholder="Nº" name="requerimientos[${aux}][resultados][radiologia_temp_amb_3]"></td>
                                </tr>

                                <tr>
                                    <td class="w-42">Tº Ens</td>
                                    <td><input type="number" class="form-control sz" placeholder="Cº" name="requerimientos[${aux}][resultados][radiologia_temp_ens_rpm]"></td>
                                    <td><input type="number" class="form-control sz" placeholder="Nº" name="requerimientos[${aux}][resultados][radiologia_temp_ens_300]"></td>
                                    <td><input type="number" class="form-control sz" placeholder="Nº" name="requerimientos[${aux}][resultados][radiologia_temp_ens_200]"></td>
                                    <td><input type="number" class="form-control sz" placeholder="Nº" name="requerimientos[${aux}][resultados][radiologia_temp_ens_100]"></td>
                                    <td><input type="number" class="form-control sz" placeholder="Nº" name="requerimientos[${aux}][resultados][radiologia_temp_ens_60]"></td>
                                    <td><input type="number" class="form-control sz" placeholder="Nº" name="requerimientos[${aux}][resultados][radiologia_temp_ens_30]"></td>
                                    <td><input type="number" class="form-control sz" placeholder="Nº" name="requerimientos[${aux}][resultados][radiologia_temp_ens_6]"></td>
                                    <td><input type="number" class="form-control sz" placeholder="Nº" name="requerimientos[${aux}][resultados][radiologia_temp_ens_3]"></td>
                                </tr>
                            </tbody>
                        </table>

                        <hr class="ms-1 mt-1">

                        <table class="w-full">
                            <thead>
                                <th></th>
                                <th>Tº Amb</th>
                                <th>Tº Ens</th>
                            </thead>

                            <tbody>
                                <tr>
                                    <td></td>
                                    <td><input type="number" class="form-control sz" placeholder="Cº" name="requerimientos[${aux}][resultados][radiologia_temp_amb]"></td>
                                    <td><input type="number" class="form-control sz" placeholder="Cº" name="requerimientos[${aux}][resultados][radiologia_temp_ens]"></td>
                                </tr>
                                <tr>
                                    <td>Punto de Cedencia <small>(lb/100ft2)</small></td>
                                    <td><input type="number" class="form-control sz" placeholder="Nº" name="requerimientos[${aux}][resultados][radiologia_temp_amb_cedencia]"></td>
                                    <td><input type="number" class="form-control sz" placeholder="Nº" name="requerimientos[${aux}][resultados][radiologia_temp_ens_cedencia]"></td>
                                </tr>
                                <tr>
                                    <td>Gel 10 seg</td>
                                    <td><input type="number" class="form-control sz" placeholder="Nº" name="requerimientos[${aux}][resultados][radiologia_temp_amb_gel_10_seg]"></td>
                                    <td><input type="number" class="form-control sz" placeholder="Nº" name="requerimientos[${aux}][resultados][radiologia_temp_ens_gel_10_seg]"></td>
                                </tr>
                                <tr>
                                    <td>Gel 10 min</td>
                                    <td><input type="number" class="form-control sz" placeholder="Nº" name="requerimientos[${aux}][resultados][radiologia_temp_amb_gel_10_min]"></td>
                                    <td><input type="number" class="form-control sz" placeholder="Nº" name="requerimientos[${aux}][resultados][radiologia_temp_ens_gel_10_min]"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="row mt-3">
                        <div class="col-xs-12 col-md-6">
                            <span class="ms-1 mb-0 font-light tracking-wide">Pérdida de Filtrado</span>
                            <hr class="ms-1 mt-1">

                            <div class="row px-3 mb-2">
                                <div class="col-xs-12 col-md-4 text-center my-2">
                                    <label for="" class="font-semibold tracking-wide sz">Temperatura
                                        <small>(ºC)</small></label>
                                    <input type="number"
                                        class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                        placeholder="ºC" min="0" name="requerimientos[${aux}][resultados][perdida_filtrado_temp]">
                                </div>

                                <div class="col-xs-12 col-md-4 text-center my-2">
                                    <label for="" class="font-semibold tracking-wide sz">Fluido
                                        acumulado
                                        <small>(ml)</small></label>
                                    <input type="number"
                                        class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                        placeholder="ml" min="0" name="requerimientos[${aux}][resultados][perdida_fluido_acumulado]">
                                </div>

                                <div class="col-xs-12 col-md-4 text-center my-2">
                                    <label for="" class="font-semibold tracking-wide sz">Filtrado
                                        API</label>
                                    <input type="number"
                                        class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                        placeholder="ml / 30min" min="0" name="requerimientos[${aux}][resultados][perdida_filtrado_api]">
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-6">
                            <span class="ms-1 mb-0 font-light tracking-wide">Agua Libre</span>
                            <hr class="ms-1 mt-1">

                            <div class="row px-3 mb-2">
                                <div class="col-xs-12 col-md-4 text-center my-2">
                                    <label for="" class="font-semibold tracking-wide sz">Agua Libre
                                        <small>(ml)</small></label>
                                    <input type="number"
                                        class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                        placeholder="ml" min="0" name="requerimientos[${aux}][resultados][perdida_agua_libre]">
                                </div>

                                <div class="col-xs-12 col-md-4 text-center my-2">
                                    <label for="" class="font-semibold tracking-wide sz">Volumen
                                        <small>(ml)</small></label>
                                    <input type="number"
                                        class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                        placeholder="ml" min="0" name="requerimientos[${aux}][resultados][perdida_volumen]">
                                </div>

                                <div class="col-xs-12 col-md-4 text-center my-2">
                                    <label for="" class="font-semibold tracking-wide sz">API
                                        Agua Libre</label>
                                    <input type="number"
                                        class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                        placeholder="%" min="0" name="requerimientos[${aux}][resultados][perdida_api_agua_libre]">
                                </div>
                            </div>
                        </div>
                    </div>

                    <span class="ms-1 mb-0 font-light tracking-wide">Mezclabilidad</span>
                    <hr class="ms-1 mt-1">

                    <div class="row px-3">
                        <div class="col-xs-12 col-md-3 my-2">
                            <label for="" class="font-semibold tracking-wide sz">Mezclabilidad</label>
                            <input type="text"
                                class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                placeholder="Ingrese algún valor" name="requerimientos[${aux}][resultados][mezclabilidad]">
                        </div>
                        <div class="col-xs-12 col-md-6 my-2">
                            <div class="flex gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                                </svg>
                                <span>Mezclabilidad <b>5</b> es si la lechada se mezcla muy bien / <b>1</b>
                                    es si cuesta mezclar</span>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer p-2">
                        <div class="flex flex-col justify-center md:flex-row md:justify-end gap-3">
                            <button type="button"
                                class="px-4 py-2 w-full md:w-auto bg-gray-300 hover:bg-gray-400 transition-all duration-100 border text-sm uppercase tracking-tight font-bold rounded-md"
                                data-bs-dismiss="modal">Cerrar</button>
                            <button type="button"
                                class="px-4 py-2 w-full md:w-auto bg-blue-400 hover:bg-blue-500 transition-all duration-100 border text-sm uppercase tracking-tight font-bold rounded-md text-white">Guardar
                                Resultados</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- Requerimientos de Ensayo -->
</div>
    `   
    contenedor_tests_requeridos.innerHTML += html;
    aux++;
})