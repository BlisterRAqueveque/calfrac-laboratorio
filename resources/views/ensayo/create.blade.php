<div class="container_mod bg-white p-3 mt-4 shadow-sm tab-pane fade" id="tab2-content" role="tabpanel"
    aria-labelledby="nav-tab2">
    <p class="m-0 mt-1 font-bold text-lg tracking-wide">Formulario para crear un Ensayo</p>

    <ul role="tablist" aria-owns="nav-tab1 nav-tab2 nav-tab3 nav-tab4" class="nav mt-4 nav-tabs"
        id="nav-tab-with-nested-tabs" style="z-index: 999">
        <li class="nav-item" role="presentation">
            <a class="nav-link nav_tab_mod active" aria-current="page" id="nav-tab1" href="#tab-carga_informacion"
                data-bs-toggle="tab" data-bs-target="#tab-carga_informacion" role="tab"
                aria-controls="tab-carga_informacion" aria-selected="true">Carga de
                Información</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link nav_tab_mod" id="nav-tab2" data-bs-toggle="tab" href="#tab-condiciones_test"
                data-bs-target="#tab-condiciones_test" role="tab" aria-controls="tab-condiciones_test"
                aria-selected="false">Condiciones del Test</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link nav_tab_mod" id="nav-tab2" data-bs-toggle="tab" href="#tab-aditivos"
                data-bs-target="#tab-aditivos" role="tab" aria-controls="tab-aditivos"
                aria-selected="false">Aditivos</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link nav_tab_mod" id="nav-tab2" data-bs-toggle="tab" href="#tab-requerimientos_ensayo"
                data-bs-target="#tab-requerimientos_ensayo" role="tab" aria-controls="tab-requerimientos_ensayo"
                aria-selected="false">Requerimientos del Ensayo</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link nav_tab_mod" id="nav-tab2" data-bs-toggle="tab" href="#tab-cierre"
                data-bs-target="#tab-cierre" role="tab" aria-controls="tab-cierre"
                aria-selected="false">Cierre de Ensayo</a>
        </li>
    </ul>

    <div class="tab-content" id="nav-tabs-content">
        <div class="mt-4 tab-pane fade show active" id="tab-carga_informacion" role="tabpanel"
            aria-labelledby="nav-tab_carga_informacion"> <!-- Carga de Información -->
            <div class="row mt-3">
                <div class="col-xs-12 col-md-3 my-2">
                    <label for="cliente" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">¿Cuál
                        será el uso?</label>
                    <select name="" id="" class="form-select sz p-2">
                        <option value="">-- Seleccione --</option>
                    </select>
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="cliente" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Cliente</label>
                    <input type="text" placeholder="Ingrese el cliente" class="form-control sz p-2" name="cliente"
                        id="cliente">
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="cliente" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Estado</label>
                    <select name="" id="" class="form-select sz p-2">
                        <option value="">-- Seleccione --</option>
                    </select>
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="cliente" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Nº de
                        Lodo</label>
                    <input type="number" class="form-control sz p-2" placeholder="Ingrese el Nº de lodo">
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="cliente" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Tipo de
                        Trabajo</label>
                    <select name="" id="" class="form-select sz p-2">
                        <option value="">-- Seleccione --</option>
                    </select>
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="cliente" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Nombre
                        del Lodo</label>
                    <input type="text" class="form-control sz p-2" placeholder="Ingrese el Nº de lodo">
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="cliente" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fecha
                        Solicitado</label>
                    <input type="date" class="form-control sz p-2" placeholder="Ingrese el Nº de lodo">
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="cliente" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Requerido
                        por</label>
                    <input type="text" class="form-control sz p-2" placeholder="Ingrese el Nº de lodo">
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="cliente" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Tipo de
                        Requerimiento</label>
                    <select name="" id="" class="form-select sz p-2">
                        <option value="">-- Seleccione --</option>
                    </select>
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="cliente"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Laboratorio</label>
                    <select name="" id="" class="form-select sz p-2">
                        <option value="">-- Seleccione --</option>
                    </select>
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="cliente" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Well
                        Name</label>
                    <input type="text" class="form-control sz p-2" placeholder="Ingrese el Nº de lodo">
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="cliente"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Ingeniero</label>
                    <input type="text" class="form-control sz p-2" placeholder="Ingrese el Nº de lodo">
                </div>

            </div>
        </div> <!-- Carga de Información -->

        <div class="mt-4 tab-pane fade" id="tab-condiciones_test" role="tabpanel"
            aria-labelledby="nav-tab_condiciones_test"> <!-- Condiciones del Test -->
            <div class="row mt-3">
                <span class="ms-1 mb-0 font-light tracking-wide">Datos del Pozo</span>
                <hr class="mt-1 w-96">

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Open
                        Hole</label>
                    <input type="text" class="form-control sz p-2" placeholder="Open Hole">
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Densidad
                        del Lodo <small>(lbm/gal)</small></label>
                    <input type="text" class="form-control sz p-2" placeholder="Ingrese la densidad del lodo">
                </div>
                <div class="col-xs-12 col-md-2 my-2">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">MD
                        <small>(ft)</small></label>
                    <input type="text" class="form-control sz p-2" placeholder="MD">
                </div>
                <div class="col-xs-12 col-md-2 my-2">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">TVD
                        <small>(ft)</small></label>
                    <input type="text" class="form-control sz p-2" placeholder="TVD">
                </div>
                <div class="col-xs-12 col-md-2 my-2">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Proveedor
                        del Lodo</label>
                    <select name="" id="" class="form-select sz p-2">
                        <option value="">-- Seleccione --</option>
                    </select>
                </div>
            </div>

            <div class="row mt-3">
                <span class="ms-1 mb-0 font-light tracking-wide">Datos de la Temperatura</span>
                <hr class="mt-1 w-96">
                <div class="col-xs-12 col-md-2 my-2">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">BHSE
                        <small>(degf)</small></label>
                    <input type="text" class="form-control sz p-2" placeholder="BHSE">
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">BHCT
                        <small>(degf)</small></label>
                    <input type="text" class="form-control sz p-2" placeholder="BHCT">
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Grad
                        Tº</label>
                    <input type="text" class="form-control sz p-2" placeholder="Grad">
                </div>
            </div>

            <div class="row mt-3">
                <span class="ms-1 mb-0 font-light tracking-wide">Datos Complementarios</span>
                <hr class="mt-1 w-96">
                <div class="col-xs-12 col-md-2 my-2">
                    <label for=""
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Volumen</label>
                    <input type="text" class="form-control sz p-2" placeholder="Volumen">
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for=""
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Caudal</label>
                    <input type="text" class="form-control sz p-2" placeholder="Caudal">
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Tope de
                        Lechada</label>
                    <input type="text" class="form-control sz p-2" placeholder="Tope de Lechada">
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Base de
                        Lechada</label>
                    <input type="text" class="form-control sz p-2" placeholder="Base de Lechada">
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Densidad
                        de Lechada</label>
                    <input type="text" class="form-control sz p-2" placeholder="Densidad de Lechada">
                </div>

                <div class="col-12 my-2">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Comentarios /
                        Observaciones</label>
                    <textarea name="" id="" cols="30" rows="4" class="form-control sz p-2"
                        placeholder="Ingrese un breve comentario - Máximo 200 caracteres"></textarea>
                </div>
            </div>
        </div> <!-- Condiciones del Test -->

        <div class="mt-4 tab-pane fade" id="tab-aditivos" role="tabpanel" aria-labelledby="nav-tab_aditivos">
            <!-- Aditivos -->
            <span class="ms-1 mb-0 font-light tracking-wide">Datos Esenciales</span>
            <hr class="ms-1 mt-1">

            <div class="mb-3 px-3">

                <div class="row rounded-md p-3 bg-gray-50 border border-gray-100 mb-3">
                    <article class="col-xs-12 col-md-1 my-2">
                        <label for="" class="font-semibold tracking-wide sz">Orden</label>
                        <input type="text"
                            class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                            value="1" disabled>
                    </article>

                    <article class="col-xs-12 col-md-3 my-2">
                        <label for="" class="font-semibold tracking-wide sz">Material</label>
                        <select name="" id="" class="form-control sz">
                            <option value="">-- Seleccione --</option>
                        </select>
                    </article>

                    <article class="col-xs-12 col-md-3 my-2">
                        <label for="" class="font-semibold tracking-wide sz">Concentración</label>
                        <div class="flex gap-3">
                            <input type="number"
                                class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                placeholder="00.00" min="0">
                            <select name="" id="" class="form-control sz">
                                <option value="">-- Seleccione --</option>
                            </select>
                        </div>
                    </article>

                    <article class="col-xs-12 col-md-2 my-2">
                        <label for="" class="font-semibold tracking-wide sz">Agregado</label>
                        <select name="" id="" class="form-control sz">
                            <option value="">-- Seleccione --</option>
                        </select>
                    </article>

                    <article class="col-xs-12 col-md-2 my-2">
                        <label for="" class="font-semibold tracking-wide sz">Nº de Lote</label>
                        <input type="number"
                            class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                            placeholder="Ingrese el Nº" min="0">
                    </article>

                    <article class="col-xs-12 col-md-1 my-2 text-center">
                        <div class="flex flex-col justify-center">
                            <label for="" class="font-semibold tracking-wide sz">Acciones</label>
                            <button
                                class="bg-red-600 flex justify-center text-white p-2 rounded-md border border-red-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>
                            </button>
                        </div>
                    </article>
                </div>

                <div class="row rounded-md p-3 bg-gray-50 border border-gray-100 mb-3">
                    <article class="col-xs-12 col-md-1 my-2">
                        <label for="" class="font-semibold tracking-wide sz">Orden</label>
                        <input type="text"
                            class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                            value="2" disabled>
                    </article>

                    <article class="col-xs-12 col-md-3 my-2">
                        <label for="" class="font-semibold tracking-wide sz">Material</label>
                        <select name="" id="" class="form-control sz">
                            <option value="">-- Seleccione --</option>
                        </select>
                    </article>

                    <article class="col-xs-12 col-md-3 my-2">
                        <label for="" class="font-semibold tracking-wide sz">Concentración</label>
                        <div class="flex gap-3">
                            <input type="number"
                                class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                placeholder="00.00" min="0">
                            <select name="" id="" class="form-control sz">
                                <option value="">-- Seleccione --</option>
                            </select>
                        </div>
                    </article>

                    <article class="col-xs-12 col-md-2 my-2">
                        <label for="" class="font-semibold tracking-wide sz">Agregado</label>
                        <select name="" id="" class="form-control sz">
                            <option value="">-- Seleccione --</option>
                        </select>
                    </article>

                    <article class="col-xs-12 col-md-2 my-2">
                        <label for="" class="font-semibold tracking-wide sz">Nº de Lote</label>
                        <input type="number"
                            class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                            placeholder="Ingrese el Nº" min="0">
                    </article>

                    <article class="col-xs-12 col-md-1 my-2 text-center">
                        <div class="flex flex-col justify-center">
                            <label for="" class="font-semibold tracking-wide sz">Acciones</label>
                            <button
                                class="bg-red-600 flex justify-center text-white p-2 rounded-md border border-red-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>
                            </button>
                        </div>
                    </article>
                </div>

                <div class="text-center">
                    <button class="bg-gray-300 rounded-full p-2 border-1 border-gray-300"><svg
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                    </button>
                </div>
            </div>

        </div> <!-- Aditivos -->

        <div class="mt-4 tab-pane fade" id="tab-requerimientos_ensayo" role="tabpanel"
            aria-labelledby="nav-tab_requerimientos_ensayo"> <!-- Requerimientos de Ensayo -->
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
                        <input type="text"
                            class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
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
                            <button class="text-center bg-gray-200 border rounded-lg px-10 py-1"
                                data-bs-toggle="modal" data-bs-target="#modal_resultado">Mostrar
                                Resultados</button>
                        </div>
                    </article>

                </div>

                <div class="text-center">
                    <button class="bg-gray-300 rounded-full p-2 border-1 border-gray-300"><svg
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                    </button>
                </div>
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
                                        placeholder="Nº" min="0">
                                </div>

                                <div class="col-xs-12 col-md-2 my-2">
                                    <label for="" class="font-semibold tracking-wide sz">Consistómetro
                                        Nº</label>
                                    <input type="number"
                                        class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                        placeholder="Nº" min="0">
                                </div>

                                <div class="col-xs-12 col-md-3 my-2">
                                    <label for="" class="font-semibold tracking-wide sz">Tiempo de
                                        Acondicionamiento</label>
                                    <input type="text"
                                        class="form-control sz placeholder:text-gray-300 placeholder:font-light"
                                        placeholder="Ingrese el tiempo">
                                </div>

                                <div class="col-xs-12 col-md-2 my-2">
                                    <label for="" class="font-semibold tracking-wide sz">Gradiente
                                        <small>(ºF/100
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

                            <span class="ms-1 mb-0 font-light tracking-wide">UCA - Resistencia a la
                                Compresión</span>
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
                                    <label for="" class="font-semibold tracking-wide sz">Impedancia
                                        Acústica
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
                                            <td><input type="number" class="form-control sz" placeholder="Cº">
                                            </td>
                                            <td><input type="number" class="form-control sz" placeholder="Nº">
                                            </td>
                                            <td><input type="number" class="form-control sz" placeholder="Nº">
                                            </td>
                                            <td><input type="number" class="form-control sz" placeholder="Nº">
                                            </td>
                                            <td><input type="number" class="form-control sz" placeholder="Nº">
                                            </td>
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
                                            <label for="" class="font-semibold tracking-wide sz">Fluido
                                                acumulado
                                                <small>(ml)</small></label>
                                            <input type="number"
                                                class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                                placeholder="ml" min="0">
                                        </div>

                                        <div class="col-xs-12 col-md-4 text-center my-2">
                                            <label for="" class="font-semibold tracking-wide sz">Filtrado
                                                API</label>
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
                                            <label for="" class="font-semibold tracking-wide sz">Agua
                                                lIBRE
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
                                            <label for="" class="font-semibold tracking-wide sz">API
                                                Agua Libre</label>
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

        <div class="mt-4 tab-pane fade" id="tab-cierre" role="tabpanel">
            <div class="flex flex-col text-center justify-center w-1/4 mx-auto">
                <span class="text-sm mb-2">Una vez completado todos los campos del ensayo, dar por finalizado el mismo.</span>
                <input type="submit"
                    class="text-sm bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold"
                    value="Crear Ensayo">
            </div>
        </div>
    </div>

</div>
