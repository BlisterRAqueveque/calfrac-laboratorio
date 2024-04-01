<ul role="tablist" aria-owns="nav-tab1 nav-tab2 nav-tab3 nav-tab4" class="nav mt-4 nav-tabs" id="nav-tab-with-nested-tabs"
    style="z-index: 999">
    <li class="nav-item w-full md:w-auto text-xs xl:text-sm" role="presentation">
        <a class="nav-link nav_tab_mod d-flex items-center gap-2 justify-center active text-violet-700" aria-current="page" id="nav-tab1"
            href="#tab-carga_informacion" data-bs-toggle="tab" data-bs-target="#tab-carga_informacion" role="tab"
            aria-controls="tab-carga_informacion" aria-selected="true">
            <div class="w-4 h-4 xl:w-6 xl:h-6 bg-gray-300 dark:bg-gray-700 rounded-full flex justify-center text-white ">
                1
            </div>
            Carga de Información
        </a>
    </li>
    <li class="nav-item w-full md:w-auto text-xs xl:text-sm" role="presentation">
        <a class="nav-link nav_tab_mod d-flex items-center justify-center gap-2 text-violet-700" id="nav-tab2" data-bs-toggle="tab"
            href="#tab-condiciones_test" data-bs-target="#tab-condiciones_test" role="tab"
            aria-controls="tab-condiciones_test" aria-selected="false">
            <div class="w-4 h-4 xl:w-6 xl:h-6 bg-gray-300 dark:bg-gray-700 rounded-full flex justify-center text-white">
                2
            </div>
            Condiciones del Test
        </a>
    </li>
    <li class="nav-item w-full md:w-auto text-xs xl:text-sm" role="presentation">
        <a class="nav-link nav_tab_mod d-flex items-center justify-center gap-2 text-violet-700" id="nav-tab2" data-bs-toggle="tab"
            href="#tab-aditivos" data-bs-target="#tab-aditivos" role="tab" aria-controls="tab-aditivos"
            aria-selected="false">
            <div class="w-4 h-4 xl:w-6 xl:h-6 bg-gray-300 dark:bg-gray-700 rounded-full flex justify-center text-white">
                3
            </div>
            Aditivos
        </a>
    </li>
    <li class="nav-item w-full md:w-auto text-xs xl:text-sm" role="presentation">
        <a class="nav-link nav_tab_mod d-flex items-center justify-center gap-2 text-violet-700" id="nav-tab2" data-bs-toggle="tab"
            href="#tab-requerimientos_ensayo" data-bs-target="#tab-requerimientos_ensayo" role="tab"
            aria-controls="tab-requerimientos_ensayo" aria-selected="false">
            <div class="w-4 h-4 xl:w-6 xl:h-6 bg-gray-300 dark:bg-gray-700 rounded-full flex justify-center text-white">
                4
            </div>
            Requerimientos del Ensayo
        </a>
    </li>
    <li class="nav-item w-full md:w-auto text-xs xl:text-sm" role="presentation">
        <a class="nav-link nav_tab_mod d-flex items-center justify-center gap-2 text-violet-700" id="nav-tab2" data-bs-toggle="tab"
            href="#tab-cierre" data-bs-target="#tab-cierre" role="tab" aria-controls="tab-cierre"
            aria-selected="false">
            <div class="w-4 h-4 xl:w-6 xl:h-6 bg-gray-300 dark:bg-gray-700 rounded-full flex justify-center text-white">
                5
            </div>
            Cierre de Ensayo
        </a>
    </li>
</ul>

<form action="{{ route('ensayo.store') }}" method="POST"> 
    @csrf
    <div class="tab-content" id="nav-tabs-content">
        <input type="hidden" value="{{ $solicitud->id }}" name="solicitud_id">
        <div class="mt-4 tab-pane fade show active" id="tab-carga_informacion" role="tabpanel"
            aria-labelledby="nav-tab_carga_informacion"> <!-- Carga de Información -->
            <div class="row mt-3">
                <div class="col-xs-12 col-md-3 my-2">
                    <label for="uso" class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">¿Cuál
                        será el uso?</label>
                    <select name="uso" id="uso" class="form-select sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none">
                        <option value="">-- Seleccione --</option>
                        <option value="1">Uso 1</option>
                        <option value="2">Uso 2</option>
                    </select>
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="cliente" class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">Cliente</label>
                    <select name="cliente" id="cliente" class="form-select sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none">
                        <option value="">-- Seleccione --</option>
                        <option value="1">Cliente 1</option>
                        <option value="2">Cliente 2</option>
                    </select>
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="estado" class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">Estado</label>
                    <select name="estado" id="estado" class="form-select sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none">
                        <option value="">-- Seleccione --</option>
                        <option value="1">Estado 1</option>
                        <option value="2">Estado 2</option>
                    </select>
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="numero_lodo" class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">Nº de
                        Lodo</label>
                    <input type="number" class="form-control sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none" name="numero_lodo" id="numero_lodo"
                        placeholder="Ingrese el Nº de lodo">
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="tipo_trabajo" class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">Tipo
                        de
                        Trabajo</label>
                    <select name="tipo_trabajo" id="tipo_trabajo" class="form-select sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none">
                        <option value="">-- Seleccione --</option>
                        <option value="1">Tipo de Trabajo 1</option>
                        <option value="2">Tipo de Trabajo 2</option>
                    </select>
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="nombre_lodo" class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">Nombre
                        del Lodo</label>
                    <input type="text" class="form-control sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none" name="nombre_lodo" id="nombre_lodo"
                        placeholder="Ingrese el Nº de lodo">
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="fecha_solicitado" class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">Fecha
                        Solicitado</label>
                    <input type="date" class="form-control sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none" name="fecha_solicitado" id="fecha_solicitado"
                        max="@php echo date('Y-m-d') @endphp">
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="requerido_por"
                        class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">Requerido
                        por</label>
                    <input type="text" class="form-control sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none" name="requerido_por" id="requerido_por"
                        placeholder="Requerido por..">
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="tipo_requerimiento"
                        class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">Tipo de
                        Requerimiento</label>
                    <select name="tipo_requerimiento" id="tipo_requerimiento" class="form-select sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none">
                        <option value="">-- Seleccione --</option>
                        <option value="1">Tipo de Requerimiento 1</option>
                        <option value="2">Tipo de Requerimiento 2</option>
                    </select>
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="laboratorio"
                        class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">Laboratorio</label>
                    <select name="laboratorio" id="laboratorio" class="form-select sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none">
                        <option value="">-- Seleccione --</option>
                        <option value="1">Laboratorio 1</option>
                        <option value="2">Laboratorio 2</option>
                    </select>
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="well_name" class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">Well
                        Name</label>
                    <input type="text" class="form-control sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none" name="well_name" id="well_name"
                        placeholder="Well Name">
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="ingeniero"
                        class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">Ingeniero</label>
                    <input type="text" class="form-control sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none" name="ingeniero" id="ingeniero"
                        placeholder="Ingeniero">
                </div>

            </div>
        </div> <!-- Carga de Información -->

        <div class="mt-4 tab-pane fade" id="tab-condiciones_test" role="tabpanel"
            aria-labelledby="nav-tab_condiciones_test"> <!-- Condiciones del Test -->

            <span class="ms-1 mb-0 font-light tracking-wide dark:text-gray-300">Datos del Pozo</span>
            <hr class="mt-1 w-auto dark:bg-gray-500">

            <div class="grid gap-2 grid-cols-1 md:grid-cols-5 mt-3">

                <div class="col-span-1 my-2">
                    <label for="open_hole" class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">Open
                        Hole</label>
                    <input type="text" class="form-control sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none" name="open_hole" id="open_hole"
                        placeholder="Open Hole">
                </div>

                <div class="col-span-1 my-2">
                    <label for="densidad_lodo" class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">Densidad
                        del Lodo <small>(lbm/gal)</small></label>
                    <input type="number" class="form-control sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none" name="densidad_lodo" id="densidad_lodo"
                        placeholder="Ingrese la densidad del lodo">
                </div>

                <div class="col-span-1 my-2">
                    <label for="md" class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">MD
                        <small>(ft)</small></label>
                    <input type="number" class="form-control sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none" name="md" id="md"
                        placeholder="MD">
                </div>

                <div class="col-span-1 my-2">
                    <label for="tvd" class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">TVD
                        <small>(ft)</small></label>
                    <input type="number" class="form-control sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none" name="tvd" id="tvd"
                        placeholder="TVD">
                </div>

                <div class="col-span-1 my-2">
                    <label for="proveedor_lodo"
                        class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">Proveedor
                        del Lodo</label>
                    <select name="proveedor_lodo" id="proveedor_lodo" class="form-select sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none">
                        <option value="">-- Seleccione --</option>
                    </select>
                </div>

            </div>

            <span class="ms-1 mb-0 font-light tracking-wide dark:text-gray-300">Datos de la Temperatura</span>
            <hr class="mt-1 w-auto dark:bg-gray-500">

            <div class="grid gap-2 grid-cols-1 md:grid-cols-3 mt-3">

                <div class="col-span-1 my-2">
                    <label for="bhse" class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">BHSE
                        <small>(degf)</small></label>
                    <input type="number" class="form-control sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none" name="bhse" id="bhse"
                        placeholder="BHSE">
                </div>

                <div class="col-span-1 my-2">
                    <label for="bhct" class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">BHCT
                        <small>(degf)</small></label>
                    <input type="number" class="form-control sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none" name="bhct" id="bhct"
                        placeholder="BHCT">
                </div>

                <div class="col-span-1 my-2">
                    <label for="grado_temperatura" class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">Grad
                        Tº</label>
                    <input type="number" class="form-control sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none" name="grado_temperatura"
                        id="grado_temperatura" placeholder="Grad">
                </div>
            </div>
            
            <span class="ms-1 mb-0 font-light tracking-wide dark:text-gray-300">Datos Complementarios</span>
            <hr class="mt-1 w-auto dark:bg-gray-500">

            <div class="grid gap-2 grid-cols-1 md:grid-cols-5 mt-3">
                <div class="col-span-1 my-2">
                    <label for="volumen"
                        class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">Volumen</label>
                    <input type="number" class="form-control sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none" name="volumen" id="volumen"
                        placeholder="Volumen">
                </div>

                <div class="col-span-1 my-2">
                    <label for="caudal"
                        class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">Caudal</label>
                    <input type="number" class="form-control sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none" name="caudal" id="caudal"
                        placeholder="Caudal">
                </div>

                <div class="col-span-1 my-2">
                    <label for="tope_lechada" class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">Tope
                        de
                        Lechada</label>
                    <input type="number" class="form-control sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none" name="tope_lechada" id="tope_lechada"
                        placeholder="Tope de Lechada">
                </div>

                <div class="col-span-1 my-2">
                    <label for="base_lechada" class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">Base
                        de
                        Lechada</label>
                    <input type="number" class="form-control sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none" name="base_lechada" id="base_lechada"
                        placeholder="Base de Lechada">
                </div>

                <div class="col-span-1 my-2">
                    <label for="densidad_lechada"
                        class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">Densidad
                        de Lechada</label>
                    <input type="number" class="form-control sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none" name="densidad_lechada" id="densidad_lechada"
                        placeholder="Densidad de Lechada">
                </div>

                <div class="col-span-5 my-2">
                    <label for="comentario" class="text-xs xl:text-sm text-gray-700 font-semibold tracking-wide mb-2 dark:text-gray-300">Comentarios
                        /
                        Observaciones</label>
                    <textarea name="comentario" id="comentario" cols="30" rows="4" class="form-control sz p-2 dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none"
                        placeholder="Ingrese un breve comentario - Máximo 200 caracteres"></textarea>
                </div>
            </div>
        </div> <!-- Condiciones del Test -->

        <div class="mt-4 tab-pane fade" id="tab-aditivos" role="tabpanel" aria-labelledby="nav-tab_aditivos">
            <!-- Aditivos -->
            <span class="ms-1 mb-0 font-light tracking-wide dark:text-gray-300">Datos Esenciales</span>
            <hr class="ms-1 mt-1 dark:bg-gray-500">

            <div class="mb-3 px-3" id="contenedor_aditivos"></div>
            <div class="text-center">
                <button class="bg-gray-300 rounded-full p-2 border-1 border-gray-300" id="btnAddAditivo"><svg
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </button>
            </div>

        </div> <!-- Aditivos -->

        <div class="mt-4 tab-pane fade" id="tab-requerimientos_ensayo" role="tabpanel"
            aria-labelledby="nav-tab_requerimientos_ensayo"> <!-- Requerimientos de Ensayo -->
            <span class="ms-1 mb-0 font-light tracking-wide dark:text-gray-300">Tests Requeridos</span>
            <hr class="ms-1 mt-1 dark:bg-gray-500">

            <div id="contenedor_tests_requeridos" class="mt-2"></div>

            <div class="text-center">
                <button class="bg-gray-300 rounded-full p-2 border-1 border-gray-300" id="btnAddTest"><svg
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </button>
            </div>

        </div>

        <div class="mt-4 tab-pane fade" id="tab-cierre" role="tabpanel">
            <div class="flex flex-col text-center justify-center w-1/4 mx-auto">
                <span class="text-sm mb-2 dark:text-gray-300">Una vez completado todos los campos del ensayo, dar por finalizado el
                    mismo.</span>
                <button data-bs-toggle="modal" data-bs-target="#modalSubmitEnsayo"
                    class="text-sm bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold"
                    onclick="event.preventDefault()">
                    Crear Ensayo
                </button>
            </div>
        </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="modalSubmitEnsayo" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header py-2 px-3">
                    Confirmación de carga de ensayo
                </div>
                <div class="modal-body text-center">
                    <p class="font-semibold tracking-wide mb-2">¿Confirma crear el ensayo?</p>
                </div>
                <div class="modal-footer p-2">
                    <button
                        class=" rounded flex items-center gap-1 p-2 hover:bg-orange-200 text-orange-400 transition-all duration-300 text-sm"
                        data-bs-dismiss="modal" onclick="event.preventDefault()">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                        Cancelar</button>
                    <button type="submit"
                        class="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-sm">Confirmar</button>
                </div>
            </div>
        </div>
    </div>
</form>
