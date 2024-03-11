<span class="ms-1 mb-0 font-light tracking-wide">Tests Requeridos</span>
<hr class="ms-1 mt-1">

<div class="mb-3 px-3">

    <div class="row rounded-md p-3 bg-gray-50 border border-gray-100 mb-3">
        <article class="col-xs-12 col-md-3 my-2">
            <label for="" class="font-semibold tracking-wide sz">Test 1</label>
            <select name="" id="" class="form-control sz">
                <option value="">-- Seleccione --</option>
            </select>
        </article>

        <article class="col-xs-12 col-md-2 my-2">
            <label for="" class="font-semibold tracking-wide sz">Temp (ºF)</label>
            <input type="text" class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                placeholder="ºF" min="0">
        </article>

        <article class="col-xs-12 col-md-3 my-2">
            <label for="" class="font-semibold tracking-wide sz">Condiciones</label>
            <select name="" id="" class="form-control sz">
                <option value="">-- Seleccione --</option>
            </select>
        </article>

        <article class="col-xs-12 col-md-4 text-center my-2">
            <label for="" class="font-semibold tracking-wide sz">Resultados</label>
            <div class="flex justify-center">
                <button class="text-center bg-gray-200 border rounded-lg px-10 py-1" data-bs-toggle="modal"
                    data-bs-target="#modal_resultado">Mostrar
                    Resultados</button>
            </div>
        </article>

    </div>

    <div class="text-center">
        <button class="bg-gray-300 rounded-full p-2 border-1 border-gray-300"><svg xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
        </button>
    </div>
</div>

<!-- Modal de los Resultados -->
   <!-- Modal de los Resultados -->
   <div class="modal fade" id="modal_resultado" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header p-2">
                <h6 class="modal-title flex gap-3" id="exampleModalLabel">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                    </svg>
                    Información Requerida de los Resultados
                </h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <span class="ms-1 mb-0 font-light tracking-wide">Tiempo de Bombeabilidad</span>
                <hr class="ms-1 mt-1">

                <div class="row px-3 mb-2">
                    <div class="col-xs-12 col-md-2 my-2">
                        <label for="" class="font-semibold tracking-wide sz">Planilla</label>
                        <input type="number"
                            class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                            placeholder="Nº" min="0">
                    </div>

                    <div class="col-xs-12 col-md-2 my-2">
                        <label for="" class="font-semibold tracking-wide sz">Consistómetro Nº</label>
                        <input type="number"
                            class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                            placeholder="Nº" min="0">
                    </div>

                    <div class="col-xs-12 col-md-3 my-2">
                        <label for="" class="font-semibold tracking-wide sz">Tiempo de
                            Acondicionamiento</label>
                        <input type="text" class="form-control sz placeholder:text-gray-300 placeholder:font-light"
                            placeholder="Ingrese el tiempo">
                    </div>

                    <div class="col-xs-12 col-md-2 my-2">
                        <label for="" class="font-semibold tracking-wide sz">Gradiente <small>(ºF/100
                                ft)</small></label>
                        <input type="number"
                            class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                            placeholder="Nº" min="0">
                    </div>

                    <div class="col-xs-12 col-md-2 my-2">
                        <label for="" class="font-semibold tracking-wide sz">Temperatura
                            <small>(ºC)</small></label>
                        <input type="number"
                            class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                            placeholder="ºC" min="0">
                    </div>

                    <div class="col-xs-12 col-md-2 my-2">
                        <label for="" class="font-semibold tracking-wide sz">Presión
                            <small>(psi)</small></label>
                        <input type="number"
                            class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                            placeholder="Nº" min="0">
                    </div>

                    <div class="col-xs-12 col-md-2 my-2">
                        <label for="" class="font-semibold tracking-wide sz">40 Bc
                            <small>(hh:mm)</small></label>
                        <input type="text"
                            class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                            placeholder="hh:mm">
                    </div>

                    <div class="col-xs-12 col-md-2 my-2">
                        <label for="" class="font-semibold tracking-wide sz">70 Bc
                            <small>(hh:mm)</small></label>
                        <input type="text"
                            class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                            placeholder="hh:mm">
                    </div>

                    <div class="col-xs-12 col-md-2 my-2">
                        <label for="" class="font-semibold tracking-wide sz">100 Bc
                            <small>(hh:mm)</small></label>
                        <input type="text"
                            class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                            placeholder="hh:mm">
                    </div>
                </div>

                <span class="ms-1 mb-0 font-light tracking-wide">UCA - Resistencia a la Compresión</span>
                <hr class="ms-1 mt-1">

                <div class="row px-3 mb-2">
                    <div class="col-xs-12 col-md-2 text-center my-2">
                        <label for="" class="font-semibold tracking-wide sz">UCA Nº</label>
                        <div class="flex gap-3">
                            <input type="number"
                                class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                placeholder="Nº" min="0">
                            <input type="number"
                                class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                placeholder="ºC" min="0">
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-2 my-2">
                        <label for="" class="font-semibold tracking-wide sz">50 psi
                            <small>(hh:mm)</small></label>
                        <input type="text"
                            class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                            placeholder="hh:mm">
                    </div>

                    <div class="col-xs-12 col-md-2 my-2">
                        <label for="" class="font-semibold tracking-wide sz">500 psi
                            <small>(hh:mm)</small></label>
                        <input type="text"
                            class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                            placeholder="hh:mm">
                    </div>

                    <div class="col-xs-12 col-md-2 my-2">
                        <label for="" class="font-semibold tracking-wide sz">1000 psi
                            <small>(hh:mm)</small></label>
                        <input type="text"
                            class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                            placeholder="hh:mm">
                    </div>

                    <div class="col-xs-12 col-md-2 my-2">
                        <label for="" class="font-semibold tracking-wide sz">12 hr
                            <small>(psi)</small></label>
                        <input type="text"
                            class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                            placeholder="psi">
                    </div>

                    <div class="col-xs-12 col-md-2 my-2">
                        <label for="" class="font-semibold tracking-wide sz">24 hr
                            <small>(psi)</small></label>
                        <input type="text"
                            class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                            placeholder="psi">
                    </div>

                    <div class="col-xs-12 col-md-3 my-2">
                        <label for="" class="font-semibold tracking-wide sz">Impedancia Acústica
                            <small>(M/rayls)</small></label>
                        <input type="text"
                            class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                            placeholder="psi">
                    </div>

                    <div class="col-xs-12 col-md-3 my-2">
                        <label for="" class="font-semibold tracking-wide sz">SGC cero
                            <small>(hh:mm)</small></label>
                        <input type="text"
                            class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                            placeholder="hh:mm">
                    </div>

                    <div class="col-xs-12 col-md-3 my-2">
                        <label for="" class="font-semibold tracking-wide sz">SGC max
                            <small>(hh:mm)</small></label>
                        <input type="text"
                            class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                            placeholder="hh:mm">
                    </div>

                    <div class="col-xs-12 col-md-3 my-2">
                        <label for="" class="font-semibold tracking-wide sz">Tiempo
                            <small>(hh:mm)</small></label>
                        <input type="text"
                            class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                            placeholder="hh:mm">
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
                                <td><input type="number" class="form-control sz" placeholder="Cº"></td>
                                <td><input type="number" class="form-control sz" placeholder="Nº"></td>
                                <td><input type="number" class="form-control sz" placeholder="Nº"></td>
                                <td><input type="number" class="form-control sz" placeholder="Nº"></td>
                                <td><input type="number" class="form-control sz" placeholder="Nº"></td>
                                <td><input type="number" class="form-control sz" placeholder="Nº"></td>
                                <td><input type="number" class="form-control sz" placeholder="Nº"></td>
                                <td><input type="number" class="form-control sz" placeholder="Nº"></td>
                            </tr>

                            <tr>
                                <td class="w-42">Tº Ens</td>
                                <td><input type="number" class="form-control sz" placeholder="Cº"></td>
                                <td><input type="number" class="form-control sz" placeholder="Nº"></td>
                                <td><input type="number" class="form-control sz" placeholder="Nº"></td>
                                <td><input type="number" class="form-control sz" placeholder="Nº"></td>
                                <td><input type="number" class="form-control sz" placeholder="Nº"></td>
                                <td><input type="number" class="form-control sz" placeholder="Nº"></td>
                                <td><input type="number" class="form-control sz" placeholder="Nº"></td>
                                <td><input type="number" class="form-control sz" placeholder="Nº"></td>
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
                                <td><input type="number" class="form-control sz" placeholder="Cº"></td>
                                <td><input type="number" class="form-control sz" placeholder="Cº"></td>
                            </tr>
                            <tr>
                                <td>Punto de Cedencia <small>(lb/100ft2)</small></td>
                                <td><input type="number" class="form-control sz" placeholder="Nº"></td>
                                <td><input type="number" class="form-control sz" placeholder="Nº"></td>
                            </tr>
                            <tr>
                                <td>Gel 10 seg</td>
                                <td><input type="number" class="form-control sz" placeholder="Nº"></td>
                                <td><input type="number" class="form-control sz" placeholder="Nº"></td>
                            </tr>
                            <tr>
                                <td>Gel 10 min</td>
                                <td><input type="number" class="form-control sz" placeholder="Nº"></td>
                                <td><input type="number" class="form-control sz" placeholder="Nº"></td>
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
                                    placeholder="ºC" min="0">
                            </div>

                            <div class="col-xs-12 col-md-4 text-center my-2">
                                <label for="" class="font-semibold tracking-wide sz">Fluido acumulado
                                    <small>(ml)</small></label>
                                <input type="number"
                                    class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                    placeholder="ml" min="0">
                            </div>

                            <div class="col-xs-12 col-md-4 text-center my-2">
                                <label for="" class="font-semibold tracking-wide sz">Filtrado API</label>
                                <input type="number"
                                    class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                    placeholder="ml / 30min" min="0">
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6">
                        <span class="ms-1 mb-0 font-light tracking-wide">Agua Libre</span>
                        <hr class="ms-1 mt-1">

                        <div class="row px-3 mb-2">
                            <div class="col-xs-12 col-md-4 text-center my-2">
                                <label for="" class="font-semibold tracking-wide sz">Agua lIBRE
                                    <small>(ml)</small></label>
                                <input type="number"
                                    class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                    placeholder="ml" min="0">
                            </div>

                            <div class="col-xs-12 col-md-4 text-center my-2">
                                <label for="" class="font-semibold tracking-wide sz">Volumen
                                    <small>(ml)</small></label>
                                <input type="number"
                                    class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                    placeholder="ml" min="0">
                            </div>

                            <div class="col-xs-12 col-md-4 text-center my-2">
                                <label for="" class="font-semibold tracking-wide sz">API Agua Libre</label>
                                <input type="number"
                                    class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                    placeholder="%" min="0">
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
                            placeholder="Ingrese algún valor">
                    </div>
                    <div class="col-xs-12 col-md-6 my-2">
                        <div class="flex gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                        </svg>
                            <span>Mezclabilidad <b>5</b> es si la lechada se mezcla muy bien / <b>1</b> es si cuesta mezclar</span>
                        </div>
                    </div>
                </div>

                <div class="modal-footer p-2">
                    <div class="flex flex-col justify-center md:flex-row md:justify-end gap-3">
                        <button type="button" class="px-4 py-2 w-full md:w-auto bg-gray-300 hover:bg-gray-400 transition-all duration-100 border text-sm uppercase tracking-tight font-bold rounded-md" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="px-4 py-2 w-full md:w-auto bg-blue-400 hover:bg-blue-500 transition-all duration-100 border text-sm uppercase tracking-tight font-bold rounded-md text-white">Guardar Resultados</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
