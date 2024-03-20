<div class="container_mod bg-white p-3 mt-4 shadow-sm tab-pane fade" id="tab2-content" role="tabpanel"
    aria-labelledby="nav-tab2">
    <p class="m-0 mt-1 font-bold text-lg tracking-wide">Formulario para crear un Ensayo</p>

    <!-- Si ya tiene Ensayos asignados, entonces acá se van a ir iterando -->
    <ul role="tablist" class="nav mt-4 nav-tabs p-1 border-1 items-center rounded-3xl md:rounded-full gap-1"
        id="nav-tab-with-nested-tabs">
        @php
            $i = 1;
        @endphp

        @foreach ($ensayos as $e)
            @php
                if ($i == 1) {
                    $clase = 'border-1 shadow-sm';
                } else {
                    $clase = '';
                }
            @endphp
            @if ($solicitud->ensayo_asignado_id == $e->id)
                <li class="nav-item w-full md:w-auto py-1" role="presentation">
                    <a class="flex text-center justify-center items-center gap-2 text-green-700 py-1 px-4 rounded-full nav_tab_intentos hover:text-green-700"
                        aria-current="page" href="#tab-intento_{{ $e->id }}" data-bs-toggle="tab"
                        data-bs-target="#tab-intento_{{ $e->id }}" role="tab"
                        aria-controls="tab-intento_{{ $e->id }}" aria-selected="true">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                        </svg>
                        Intento Nº{{ $i }}
                    </a>
                </li>
            @else
                <li class="nav-item w-full md:w-auto py-1" role="presentation">
                    <a class="flex text-center justify-center text-gray-500 py-1 px-4 rounded-full nav_tab_intentos hover:text-gray-600 {{ $clase }}"
                        aria-current="page" href="#tab-intento_{{ $e->id }}" data-bs-toggle="tab"
                        data-bs-target="#tab-intento_{{ $e->id }}" role="tab"
                        aria-controls="tab-intento_{{ $e->id }}" aria-selected="true">
                        Intento Nº{{ $i }}
                    </a>
                </li>
            @endif
            @php
                $i++;
            @endphp
        @endforeach

        @if ($solicitud->estado_solicitud_id < 3)
            <li class="nav-item w-full md:w-auto" role="presentation">
                <a class="text-gray-500 py-1 px-4 rounded-full nav_tab_intentos hover:text-gray-600 flex items-center"
                    aria-current="page" id="nav-nuevo_ensayo" href="#tab-nuevo_ensayo" data-bs-toggle="tab"
                    data-bs-target="#tab-nuevo_ensayo" role="tab" aria-controls="tab-nuevo_ensayo"
                    aria-selected="true">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Nuevo Ensayo
                </a>
            </li>
        @endif

    </ul>

    <div class="tab-content" id="nav-tabs-content">
        @php
            $j = 1;
        @endphp
        @foreach ($ensayos as $e)
            @php
                if ($j == 1) {
                    $clase = 'show active';
                } else {
                    $clase = '';
                }
            @endphp
            <div class="mt-4 tab-pane fade {{ $clase }}" id="tab-intento_{{ $e->id }}" role="tabpanel">
                <ul role="tablist" aria-owns="nav-tab1 nav-tab2 nav-tab3 nav-tab4" class="nav mt-4 nav-tabs"
                    id="nav-tab-with-nested-tabs" style="z-index: 999">
                    <li class="nav-item w-full md:w-auto" role="presentation">
                        <a class="nav-link nav_tab_mod d-flex items-center gap-2 justify-center active"
                            aria-current="page" id="nav-tab1" href="#tab-carga_informacion_{{ $e->id }}"
                            data-bs-toggle="tab" data-bs-target="#tab-carga_informacion_{{ $e->id }}"
                            role="tab" aria-controls="tab-carga_informacion_{{ $e->id }}"
                            aria-selected="true">
                            Carga de Información
                        </a>
                    </li>
                    <li class="nav-item w-full md:w-auto" role="presentation">
                        <a class="nav-link nav_tab_mod d-flex items-center justify-center gap-2" id="nav-tab2"
                            data-bs-toggle="tab" href="#tab-condiciones_test_{{ $e->id }}"
                            data-bs-target="#tab-condiciones_test_{{ $e->id }}" role="tab"
                            aria-controls="tab-condiciones_test_{{ $e->id }}" aria-selected="false">
                            Condiciones del Test
                        </a>
                    </li>
                    <li class="nav-item w-full md:w-auto" role="presentation">
                        <a class="nav-link nav_tab_mod d-flex items-center justify-center gap-2" id="nav-tab2"
                            data-bs-toggle="tab" href="#tab-aditivos_{{ $e->id }}"
                            data-bs-target="#tab-aditivos_{{ $e->id }}" role="tab"
                            aria-controls="tab-aditivos_{{ $e->id }}" aria-selected="false">
                            Aditivos
                        </a>
                    </li>
                    <li class="nav-item w-full md:w-auto" role="presentation">
                        <a class="nav-link nav_tab_mod d-flex items-center justify-center gap-2" id="nav-tab2"
                            data-bs-toggle="tab" href="#tab-requerimientos_ensayo_{{ $e->id }}"
                            data-bs-target="#tab-requerimientos_ensayo_{{ $e->id }}" role="tab"
                            aria-controls="tab-requerimientos_ensayo_{{ $e->id }}" aria-selected="false">
                            Requerimientos del Ensayo
                        </a>
                    </li>
                    @if ($solicitud->estado_solicitud_id < 3)
                    <li class="nav-item w-full md:w-auto" role="presentation">
                        <a class="nav-link nav_tab_mod d-flex items-center justify-center gap-2" id="nav-tab2"
                            data-bs-toggle="tab" href="#tab-ensayo_asignado_{{ $e->id }}"
                            data-bs-target="#tab-ensayo_asignado_{{ $e->id }}" role="tab"
                            aria-selected="false">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.7" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                            </svg>
                            Asignar Ensayo
                        </a>
                    </li>
                    @endif
                </ul>

                <div class="tab-content" id="nav-tabs-content">
                    <div class="mt-4 tab-pane fade show active" id="tab-carga_informacion_{{ $e->id }}"
                        role="tabpanel" aria-labelledby="nav-tab_carga_informacion_{{ $e->id }}">
                        <!-- Carga de Información -->
                        <div class="row mt-3">
                            <div class="col-xs-12 col-md-3 my-2">
                                <label for="uso"
                                    class="text-sm text-gray-700 font-semibold tracking-wide mb-2">¿Cuál
                                    será el uso?</label>
                                <select name="uso" id="uso" class="form-select sz p-2" disabled>
                                    <option value="">-- Seleccione --</option>
                                    <option value="1" {{ $e->uso == 1 ? 'selected' : '' }}>Uso 1</option>
                                    <option value="2" {{ $e->uso == 2 ? 'selected' : '' }}>Uso 2</option>
                                </select>
                            </div>

                            <div class="col-xs-12 col-md-3 my-2">
                                <label for="cliente"
                                    class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Cliente</label>
                                <select name="cliente" id="cliente" class="form-select sz p-2" disabled>
                                    <option value="">-- Seleccione --</option>
                                    <option value="1" {{ $e->cliente == 1 ? 'selected' : '' }}>Cliente 1</option>
                                    <option value="2" {{ $e->cliente == 2 ? 'selected' : '' }}>Cliente 2</option>
                                </select>
                            </div>

                            <div class="col-xs-12 col-md-3 my-2">
                                <label for="estado"
                                    class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Estado</label>
                                <select name="estado" id="estado" class="form-select sz p-2" disabled>
                                    <option value="">-- Seleccione --</option>
                                    <option value="1" {{ $e->estado == 1 ? 'selected' : '' }}>Estado 1</option>
                                    <option value="2" {{ $e->estado == 2 ? 'selected' : '' }}>Estado 2</option>
                                </select>
                            </div>

                            <div class="col-xs-12 col-md-3 my-2">
                                <label for="numero_lodo"
                                    class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Nº
                                    de
                                    Lodo</label>
                                <input type="number" class="form-control sz p-2" name="numero_lodo"
                                    id="numero_lodo" placeholder="Ingrese el Nº de lodo"
                                    value="{{ $e->numero_lodo }}" readonly>
                            </div>

                            <div class="col-xs-12 col-md-3 my-2">
                                <label for="tipo_trabajo"
                                    class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Tipo
                                    de
                                    Trabajo</label>
                                <select name="tipo_trabajo" id="tipo_trabajo" class="form-select sz p-2" disabled>
                                    <option value="">-- Seleccione --</option>
                                    <option value="1" {{ $e->tipo_trabajo == 1 ? 'selected' : '' }}>Tipo de
                                        Trabajo 1
                                    </option>
                                    <option value="2" {{ $e->tipo_trabajo == 2 ? 'selected' : '' }}>Tipo de
                                        Trabajo 2
                                    </option>
                                </select>
                            </div>

                            <div class="col-xs-12 col-md-3 my-2">
                                <label for="nombre_lodo"
                                    class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Nombre
                                    del Lodo</label>
                                <input type="text" class="form-control sz p-2" name="nombre_lodo"
                                    id="nombre_lodo" placeholder="Ingrese el Nº de lodo"
                                    value="{{ $e->nombre_lodo }}" readonly>
                            </div>

                            <div class="col-xs-12 col-md-3 my-2">
                                <label for="fecha_solicitado"
                                    class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fecha
                                    Solicitado</label>
                                <input type="date" class="form-control sz p-2" name="fecha_solicitado"
                                    id="fecha_solicitado" value="{{ $e->fecha_solicitado }}" readonly>
                            </div>

                            <div class="col-xs-12 col-md-3 my-2">
                                <label for="requerido_por"
                                    class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Requerido
                                    por</label>
                                <input type="text" class="form-control sz p-2" name="requerido_por"
                                    id="requerido_por" value="{{ $e->requerido_por }}" readonly>
                            </div>

                            <div class="col-xs-12 col-md-3 my-2">
                                <label for="tipo_requerimiento"
                                    class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Tipo de
                                    Requerimiento</label>
                                <select name="tipo_requerimiento" id="tipo_requerimiento" class="form-select sz p-2"
                                    disabled>
                                    <option value="">-- Seleccione --</option>
                                    <option value="1" {{ $e->tipo_requerimiento == 1 ? 'selected' : '' }}>Tipo de
                                        Requerimiento 1</option>
                                    <option value="2" {{ $e->tipo_requerimiento == 2 ? 'selected' : '' }}>Tipo de
                                        Requerimiento 2</option>
                                </select>
                            </div>

                            <div class="col-xs-12 col-md-3 my-2">
                                <label for="laboratorio"
                                    class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Laboratorio</label>
                                <select name="laboratorio" id="laboratorio" class="form-select sz p-2" disabled>
                                    <option value="">-- Seleccione --</option>
                                    <option value="1" {{ $e->laboratorio == 1 ? 'selected' : '' }}>Laboratorio 1
                                    </option>
                                    <option value="2" {{ $e->laboratorio == 2 ? 'selected' : '' }}>Laboratorio 2
                                    </option>
                                </select>
                            </div>

                            <div class="col-xs-12 col-md-3 my-2">
                                <label for="well_name"
                                    class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Well
                                    Name</label>
                                <input type="text" class="form-control sz p-2" name="well_name" id="well_name"
                                    value="{{ $e->well_name }}" readonly>
                            </div>

                            <div class="col-xs-12 col-md-3 my-2">
                                <label for="ingeniero"
                                    class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Ingeniero</label>
                                <input type="text" class="form-control sz p-2" name="ingeniero" id="ingeniero"
                                    value="{{ $e->ingeniero }}" readonly>
                            </div>

                        </div>
                    </div> <!-- Carga de Información -->

                    <div class="mt-4 tab-pane fade" id="tab-condiciones_test_{{ $e->id }}" role="tabpanel">
                        <!-- Condiciones del Test -->
                        <div class="row mt-3">
                            <span class="ms-1 mb-0 font-light tracking-wide">Datos del Pozo</span>
                            <hr class="mt-1 w-96">

                            <div class="col-xs-12 col-md-2 my-2">
                                <label for="open_hole"
                                    class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Open
                                    Hole</label>
                                <input type="text" class="form-control sz p-2" name="open_hole" id="open_hole"
                                    value="{{ $e->open_hole ? $e->open_hole : 'No Aplica' }}" readonly>
                            </div>

                            <div class="col-xs-12 col-md-2 my-2">
                                <label for="densidad_lodo"
                                    class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Densidad
                                    del Lodo <small>(lbm/gal)</small></label>
                                <input type="text" class="form-control sz p-2" name="densidad_lodo"
                                    id="densidad_lodo"
                                    value="{{ $e->densidad_lodo ? $e->densidad_lodo : 'No Aplica' }}" readonly>
                            </div>
                            <div class="col-xs-12 col-md-2 my-2">
                                <label for="md"
                                    class="text-sm text-gray-700 font-semibold tracking-wide mb-2">MD
                                    <small>(ft)</small></label>
                                <input type="text" class="form-control sz p-2" name="md" id="md"
                                    value="{{ $e->md ? $e->md : 'No Aplica' }}" readonly>
                            </div>
                            <div class="col-xs-12 col-md-2 my-2">
                                <label for="tvd"
                                    class="text-sm text-gray-700 font-semibold tracking-wide mb-2">TVD
                                    <small>(ft)</small></label>
                                <input type="text" class="form-control sz p-2" name="tvd" id="tvd"
                                    value="{{ $e->tvd ? $e->tvd : 'No Aplica' }}" readonly>
                            </div>
                            <div class="col-xs-12 col-md-2 my-2">
                                <label for="proveedor_lodo"
                                    class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Proveedor del
                                    Lodo</label>
                                <select name="proveedor_lodo" id="proveedor_lodo" class="form-select sz p-2"
                                    disabled>
                                    <option value="">-- Seleccione --</option>
                                    <option value="1" {{ $e->proveedor_lodo == 1 ? 'selected' : '' }}>Proveedor 1
                                    </option>
                                    <option value="2" {{ $e->proveedor_lodo == 2 ? 'selected' : '' }}>Proveedor 2
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <span class="ms-1 mb-0 font-light tracking-wide">Datos de la Temperatura</span>
                            <hr class="mt-1 w-96">
                            <div class="col-xs-12 col-md-2 my-2">
                                <label for="bhse"
                                    class="text-sm text-gray-700 font-semibold tracking-wide mb-2">BHSE
                                    <small>(degf)</small></label>
                                <input type="text" class="form-control sz p-2" name="bhse" id="bhse"
                                    value="{{ $e->bhse ? $e->bhse : 'No Aplica' }}" readonly>
                            </div>

                            <div class="col-xs-12 col-md-2 my-2">
                                <label for="bhct"
                                    class="text-sm text-gray-700 font-semibold tracking-wide mb-2">BHCT
                                    <small>(degf)</small></label>
                                <input type="text" class="form-control sz p-2" name="bhct" id="bhct"
                                    value="{{ $e->bhct ? $e->bhct : 'No Aplica' }}" readonly>
                            </div>

                            <div class="col-xs-12 col-md-2 my-2">
                                <label for="grado_temperatura"
                                    class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Grad
                                    Tº</label>
                                <input type="text" class="form-control sz p-2" name="grado_temperatura"
                                    id="grado_temperatura"
                                    value="{{ $e->grado_temperatura ? $e->grado_temperatura : 'No Aplica' }}"
                                    readonly>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <span class="ms-1 mb-0 font-light tracking-wide">Datos Complementarios</span>
                            <hr class="mt-1 w-96">
                            <div class="col-xs-12 col-md-2 my-2">
                                <label for="volumen"
                                    class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Volumen</label>
                                <input type="text" class="form-control sz p-2" name="volumen" id="volumen"
                                    value="{{ $e->volumen ? $e->volumen : 'No Aplica' }}" readonly>
                            </div>

                            <div class="col-xs-12 col-md-2 my-2">
                                <label for="caudal"
                                    class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Caudal</label>
                                <input type="text" class="form-control sz p-2" name="caudal" id="caudal"
                                    value="{{ $e->caudal ? $e->caudal : 'No Aplica' }}" readonly>
                            </div>

                            <div class="col-xs-12 col-md-2 my-2">
                                <label for="tope_lechada"
                                    class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Tope
                                    de
                                    Lechada</label>
                                <input type="text" class="form-control sz p-2" name="tope_lechada"
                                    id="tope_lechada" value="{{ $e->tope_lechada ? $e->tope_lechada : 'No Aplica' }}"
                                    readonly>
                            </div>

                            <div class="col-xs-12 col-md-2 my-2">
                                <label for="base_lechada"
                                    class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Base
                                    de
                                    Lechada</label>
                                <input type="text" class="form-control sz p-2" name="base_lechada"
                                    id="base_lechada" value="{{ $e->base_lechada ? $e->base_lechada : 'No Aplica' }}"
                                    readonly>
                            </div>

                            <div class="col-xs-12 col-md-2 my-2">
                                <label for="densidad_lechada"
                                    class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Densidad
                                    de Lechada</label>
                                <input type="text" class="form-control sz p-2" name="densidad_lechada"
                                    id="densidad_lechada"
                                    value="{{ $e->base_lechada ? $e->base_lechada : 'No Aplica' }}" readonly>
                            </div>

                            <div class="col-12 my-2">
                                <label for="comentario"
                                    class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Comentarios /
                                    Observaciones</label>
                                <textarea name="comentario" id="comentario" cols="30" rows="4" class="form-control sz p-2" readonly>{{ $e->base_lechada ? $e->base_lechada : 'No Aplica' }}</textarea>
                            </div>
                        </div>
                    </div> <!-- Condiciones del Test -->

                    <div class="mt-4 tab-pane fade" id="tab-aditivos_{{ $e->id }}" role="tabpanel"
                        aria-labelledby="nav-tab_aditivos">
                        <!-- Aditivos -->
                        @if ($e->aditivos->count() > 0)
                            <span class="ms-1 mb-0 font-light tracking-wide">Datos Esenciales</span>
                            <hr class="ms-1 mt-1">
                            <div class="mb-3 px-3">
                                @foreach ($e->aditivos as $aditivo)
                                    <div class="row rounded-md p-3 bg-gray-50 border border-gray-100 mb-3">
                                        <article class="col-xs-12 col-md-1 my-2"><label
                                                class="font-semibold tracking-wide sz">Orden</label><input
                                                class="form-control orden sz text-center placeholder:text-gray-300 placeholder:font-light"
                                                value="{{ $aditivo->id }}" readonly></article>
                                        <article class="col-xs-12 col-md-3 my-2">
                                            <label class="font-semibold tracking-wide sz">Material</label>
                                            <input type="text" class="form-control sz p-2"
                                                value="{{ $aditivo->aditivo->nombre ? $aditivo->aditivo->nombre : 'No Aplica' }}"
                                                readonly>
                                        </article>
                                        <article class="col-xs-12 col-md-3 my-2"><label
                                                class="font-semibold tracking-wide sz">Concentración</label>
                                            <div class="flex gap-3">
                                                <input
                                                    class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                                    value="{{ $aditivo->concentracion ? $aditivo->concentracion : 'No Aplica' }}"
                                                    readonly>
                                                <input type="text" class="form-control sz p-2"
                                                    value="{{ $aditivo->concentracion_type ? $aditivo->concentracion_type : 'No Aplica' }}"
                                                    readonly>
                                            </div>
                                        </article>
                                        <article class="col-xs-12 col-md-2 my-2"><label
                                                class="font-semibold tracking-wide sz">Agregado</label>
                                            <input type="text" class="form-control sz p-2"
                                                value="{{ $aditivo->agregado ? $aditivo->agregado : 'No Aplica' }}"
                                                readonly>
                                        </article>
                                        <article class="col-xs-12 col-md-2 my-2">
                                            <label class="font-semibold tracking-wide sz">Nº de Lote</label>
                                            <input
                                                class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                                type="text"
                                                value="{{ $aditivo->numero_lote ? $aditivo->numero_lote : 'No Aplica' }}"
                                                readonly>
                                        </article>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="text-center">
                                No se han agregado aditivos
                            </div>
                        @endif

                    </div> <!-- Aditivos -->

                    <div class="mt-4 tab-pane fade" id="tab-requerimientos_ensayo_{{ $e->id }}"
                        role="tabpanel"> <!-- Requerimientos de Ensayo -->

                        @if ($e->requerimientos->count() > 0)
                            <span class="ms-1 mb-0 font-light tracking-wide">Tests Requeridos</span>
                            <hr class="ms-1 mt-1">
                            <div>
                                @foreach ($e->requerimientos as $req)
                                    <div class="mb-3 px-3">

                                        <div class="row rounded-md p-3 bg-gray-50 border border-gray-100 mb-3">
                                            <article class="col-xs-12 col-md-3 my-2">
                                                <label for="test" class="font-semibold tracking-wide sz">Test
                                                    1</label>
                                                <select class="form-select sz" disabled>
                                                    <option value="">-- Seleccione --</option>
                                                    <option value="1" {{ $req->test_id == 1 ? 'selected' : '' }}>
                                                        Test
                                                        1</option>
                                                    <option value="2" {{ $req->test_id == 2 ? 'selected' : '' }}>
                                                        Test
                                                        2</option>
                                                    <option value="3" {{ $req->test_id == 3 ? 'selected' : '' }}>
                                                        Test
                                                        3</option>
                                                </select>
                                            </article>

                                            <article class="col-xs-12 col-md-2 my-2">
                                                <label for="" class="font-semibold tracking-wide sz">Temp
                                                    (ºF)
                                                </label>
                                                <input type="text" name="requerimientos[1][temperatura]"
                                                    class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                                    value="{{ $req->temperatura ? $req->temperatura : 'No aplica' }}"
                                                    readonly>
                                            </article>

                                            <article class="col-xs-12 col-md-3 my-2">
                                                <label for="condicion"
                                                    class="font-semibold tracking-wide sz">Condiciones</label>
                                                <select name="requerimientos[1][condicion]" id="condicion"
                                                    class="form-select sz" disabled>
                                                    <option value="">-- Seleccione --</option>
                                                    <option value="1"
                                                        {{ $req->condicion == 1 ? 'selected' : '' }}>
                                                        Condicion 1</option>
                                                    <option value="2"
                                                        {{ $req->condicion == 2 ? 'selected' : '' }}>
                                                        Condicion 2</option>
                                                    <option value="3"
                                                        {{ $req->condicion == 3 ? 'selected' : '' }}>
                                                        Condicion 3</option>
                                                </select>
                                            </article>

                                            <article class="col-xs-12 col-md-4 text-center my-2">
                                                <label for=""
                                                    class="font-semibold tracking-wide sz">Resultados</label>
                                                <div class="flex justify-center">
                                                    <button
                                                        class="text-center bg-gray-200 border rounded-lg px-10 py-1"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modal_resultado_{{ $req->id }}"
                                                        onclick="event.preventDefault()">Mostrar
                                                        Resultados</button>
                                                </div>
                                            </article>

                                        </div>
                                        <!-- Modal de los Resultados -->
                                        <div class="modal fade" id="modal_resultado_{{ $req->id }}"
                                            tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header p-2">
                                                        <h6 class="modal-title flex gap-3" id="exampleModalLabel">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" class="w-6 h-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z">
                                                                </path>
                                                            </svg>
                                                            Información Requerida de los Resultados
                                                        </h6>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <span class="ms-1 mb-0 font-light tracking-wide">Tiempo de
                                                            Bombeabilidad</span>
                                                        <hr class="ms-1 mt-1">

                                                        <div class="row px-3 mb-2">
                                                            <div class="col-xs-12 col-md-2 my-2">
                                                                <label for=""
                                                                    class="font-semibold tracking-wide sz">Planilla</label>
                                                                <input type="text"
                                                                    class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                                                    value="{{ $req->planilla ? $req->planilla : 'No aplica' }}"
                                                                    readonly>
                                                            </div>

                                                            <div class="col-xs-12 col-md-2 my-2">
                                                                <label for=""
                                                                    class="font-semibold tracking-wide sz">Consistómetro
                                                                    Nº</label>
                                                                <input type="text"
                                                                    class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                                                    value="{{ $req->consistometro ? $req->consistometro : 'No aplica' }}"
                                                                    readonly>
                                                            </div>

                                                            <div class="col-xs-12 col-md-3 my-2">
                                                                <label for=""
                                                                    class="font-semibold tracking-wide sz">Tiempo de
                                                                    Acondicionamiento</label>
                                                                <input type="text"
                                                                    class="form-control sz placeholder:text-gray-300 placeholder:font-light"
                                                                    value="{{ $req->tiempo_acondicionamiento ? $req->tiempo_acondicionamiento : 'No aplica' }}"
                                                                    readonly>
                                                            </div>

                                                            <div class="col-xs-12 col-md-2 my-2">
                                                                <label for=""
                                                                    class="font-semibold tracking-wide sz">Gradiente
                                                                    <small>(ºF/100
                                                                        ft)</small></label>
                                                                <input type="text"
                                                                    class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                                                    value="{{ $req->gradiente ? $req->gradiente : 'No aplica' }}"
                                                                    readonly>
                                                            </div>

                                                            <div class="col-xs-12 col-md-2 my-2">
                                                                <label for=""
                                                                    class="font-semibold tracking-wide sz">Temperatura
                                                                    <small>(ºC)</small></label>
                                                                <input type="text"
                                                                    class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                                                    value="{{ $req->temperatura_bombeabilidad ? $req->temperatura_bombeabilidad : 'No aplica' }}"
                                                                    readonly>
                                                            </div>

                                                            <div class="col-xs-12 col-md-2 my-2">
                                                                <label for=""
                                                                    class="font-semibold tracking-wide sz">Presión
                                                                    <small>(psi)</small></label>
                                                                <input type="text"
                                                                    class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                                                    value="{{ $req->presion ? $req->presion : 'No aplica' }}"
                                                                    readonly>
                                                            </div>

                                                            <div class="col-xs-12 col-md-2 my-2">
                                                                <label for=""
                                                                    class="font-semibold tracking-wide sz">40 Bc
                                                                    <small>(hh:mm)</small></label>
                                                                <input type="text"
                                                                    class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                                                    value="{{ $req['40_bc'] ? $req['40_bc'] : 'No aplica' }}"
                                                                    readonly>
                                                            </div>

                                                            <div class="col-xs-12 col-md-2 my-2">
                                                                <label for=""
                                                                    class="font-semibold tracking-wide sz">70 Bc
                                                                    <small>(hh:mm)</small></label>
                                                                <input type="text"
                                                                    class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                                                    value="{{ $req['70_bc'] ? $req['70_bc'] : 'No aplica' }}"
                                                                    readonly>
                                                            </div>

                                                            <div class="col-xs-12 col-md-2 my-2">
                                                                <label for=""
                                                                    class="font-semibold tracking-wide sz">100 Bc
                                                                    <small>(hh:mm)</small></label>
                                                                <input type="text"
                                                                    class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                                                    value="{{ $req['100_bc'] ? $req['100_bc'] : 'No aplica' }}"
                                                                    readonly>
                                                            </div>
                                                        </div>

                                                        <span class="ms-1 mb-0 font-light tracking-wide">UCA -
                                                            Resistencia
                                                            a la
                                                            Compresión</span>
                                                        <hr class="ms-1 mt-1">

                                                        <div class="row px-3 mb-2">
                                                            <div class="col-xs-12 col-md-2 text-center my-2">
                                                                <label for=""
                                                                    class="font-semibold tracking-wide sz">UCA
                                                                    Nº</label>
                                                                <div class="flex gap-3">
                                                                    <input type="text"
                                                                        class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                                                        value="{{ $req->uca_numero ? $req->uca_numero : 'No aplica' }}"
                                                                        readonly>

                                                                    <input type="text"
                                                                        class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                                                        value="{{ $req->uca_temperatura ? $req->uca_temperatura : 'No aplica' }}"
                                                                        readonly>
                                                                </div>
                                                            </div>

                                                            <div class="col-xs-12 col-md-2 my-2">
                                                                <label for=""
                                                                    class="font-semibold tracking-wide sz">50 psi
                                                                    <small>(hh:mm)</small></label>
                                                                <input type="text"
                                                                    class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                                                    value="{{ $req->uca_50_psi ? $req->uca_50_psi : 'No aplica' }}"
                                                                    readonly>
                                                            </div>

                                                            <div class="col-xs-12 col-md-2 my-2">
                                                                <label for=""
                                                                    class="font-semibold tracking-wide sz">500 psi
                                                                    <small>(hh:mm)</small></label>
                                                                <input type="text"
                                                                    class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                                                    value="{{ $req->uca_500_psi ? $req->uca_500_psi : 'No aplica' }}"
                                                                    readonly>
                                                            </div>

                                                            <div class="col-xs-12 col-md-2 my-2">
                                                                <label for=""
                                                                    class="font-semibold tracking-wide sz">1000 psi
                                                                    <small>(hh:mm)</small></label>
                                                                <input type="text"
                                                                    class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                                                    value="{{ $req->uca_500_psi ? $req->uca_500_psi : 'No aplica' }}"
                                                                    readonly>
                                                            </div>

                                                            <div class="col-xs-12 col-md-2 my-2">
                                                                <label for=""
                                                                    class="font-semibold tracking-wide sz">12 hr
                                                                    <small>(psi)</small></label>
                                                                <input type="text"
                                                                    class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                                                    value="{{ $req->uca_12_hr ? $req->uca_12_hr : 'No aplica' }}"
                                                                    readonly>
                                                            </div>

                                                            <div class="col-xs-12 col-md-2 my-2">
                                                                <label for=""
                                                                    class="font-semibold tracking-wide sz">24 hr
                                                                    <small>(psi)</small></label>
                                                                <input type="text"
                                                                    class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                                                    value="{{ $req->uca_24_hr ? $req->uca_24_hr : 'No aplica' }}"
                                                                    readonly>
                                                            </div>

                                                            <div class="col-xs-12 col-md-3 my-2">
                                                                <label for=""
                                                                    class="font-semibold tracking-wide sz">Impedancia
                                                                    Acústica
                                                                    <small>(M/rayls)</small></label>
                                                                <input type="text"
                                                                    class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                                                    value="{{ $req->uca_impedancia_acustica ? $req->uca_impedancia_acustica : 'No aplica' }}"
                                                                    readonly>
                                                            </div>

                                                            <div class="col-xs-12 col-md-3 my-2">
                                                                <label for=""
                                                                    class="font-semibold tracking-wide sz">SGC cero
                                                                    <small>(hh:mm)</small></label>
                                                                <input type="text"
                                                                    class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                                                    value="{{ $req->uca_sgc_cero ? $req->uca_sgc_cero : 'No aplica' }}"
                                                                    readonly>
                                                            </div>

                                                            <div class="col-xs-12 col-md-3 my-2">
                                                                <label for=""
                                                                    class="font-semibold tracking-wide sz">SGC max
                                                                    <small>(hh:mm)</small></label>
                                                                <input type="text"
                                                                    class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                                                    value="{{ $req->uca_sgc_max ? $req->uca_sgc_max : 'No aplica' }}"
                                                                    readonly>
                                                            </div>

                                                            <div class="col-xs-12 col-md-3 my-2">
                                                                <label for=""
                                                                    class="font-semibold tracking-wide sz">Tiempo
                                                                    <small>(hh:mm)</small></label>
                                                                <input type="text"
                                                                    class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                                                    value="{{ $req->uca_tiempo ? $req->uca_tiempo : 'No aplica' }}"
                                                                    readonly>
                                                            </div>

                                                        </div>

                                                        <span
                                                            class="ms-1 mb-0 font-light tracking-wide">Radiología</span>
                                                        <hr class="ms-1 mt-1">

                                                        <div class="row px-3 mb-2">
                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <th></th>
                                                                        <th>RPM</th>
                                                                        <th>300</th>
                                                                        <th>200</th>
                                                                        <th>100</th>
                                                                        <th>60</th>
                                                                        <th>30</th>
                                                                        <th>6</th>
                                                                        <th>3</th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    <tr>
                                                                        <td class="w-40">Tº Amb</td>
                                                                        <td><input type="text"
                                                                                class="form-control sz"
                                                                                value="{{ $req->radiologia_temp_amb_rpm ? $req->radiologia_temp_amb_rpm : 'No aplica' }}"
                                                                                readonly>
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="form-control sz"
                                                                                value="{{ $req->radiologia_temp_amb_300 ? $req->radiologia_temp_amb_300 : 'No aplica' }}"
                                                                                readonly>
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="form-control sz"
                                                                                value="{{ $req->radiologia_temp_amb_200 ? $req->radiologia_temp_amb_200 : 'No aplica' }}"
                                                                                readonly>
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="form-control sz"
                                                                                value="{{ $req->radiologia_temp_amb_100 ? $req->radiologia_temp_amb_100 : 'No aplica' }}"
                                                                                readonly>
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="form-control sz"
                                                                                value="{{ $req->radiologia_temp_amb_60 ? $req->radiologia_temp_amb_60 : 'No aplica' }}"
                                                                                readonly>
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="form-control sz"
                                                                                value="{{ $req->radiologia_temp_amb_30 ? $req->radiologia_temp_amb_30 : 'No aplica' }}"
                                                                                readonly>
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="form-control sz"
                                                                                value="{{ $req->radiologia_temp_amb_6 ? $req->radiologia_temp_amb_6 : 'No aplica' }}"
                                                                                readonly>
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="form-control sz"
                                                                                value="{{ $req->radiologia_temp_amb_3 ? $req->radiologia_temp_amb_3 : 'No aplica' }}"
                                                                                readonly>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="w-42">Tº Ens</td>
                                                                        <td><input type="text"
                                                                                class="form-control sz"
                                                                                value="{{ $req->radiologia_temp_ens_rpm ? $req->radiologia_temp_ens_rpm : 'No aplica' }}"
                                                                                readonly>
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="form-control sz"
                                                                                value="{{ $req->radiologia_temp_ens_300 ? $req->radiologia_temp_ens_300 : 'No aplica' }}"
                                                                                readonly>
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="form-control sz"
                                                                                value="{{ $req->radiologia_temp_ens_200 ? $req->radiologia_temp_ens_200 : 'No aplica' }}"
                                                                                readonly>
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="form-control sz"
                                                                                value="{{ $req->radiologia_temp_ens_100 ? $req->radiologia_temp_ens_100 : 'No aplica' }}"
                                                                                readonly>
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="form-control sz"
                                                                                value="{{ $req->radiologia_temp_ens_60 ? $req->radiologia_temp_ens_60 : 'No aplica' }}"
                                                                                readonly>
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="form-control sz"
                                                                                value="{{ $req->radiologia_temp_ens_30 ? $req->radiologia_temp_ens_30 : 'No aplica' }}"
                                                                                readonly>
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="form-control sz"
                                                                                value="{{ $req->radiologia_temp_ens_6 ? $req->radiologia_temp_ens_6 : 'No aplica' }}"
                                                                                readonly>
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="form-control sz"
                                                                                value="{{ $req->radiologia_temp_ens_3 ? $req->radiologia_temp_ens_3 : 'No aplica' }}"
                                                                                readonly>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                            <hr class="ms-1 mt-1">

                                                            <table class="w-full">
                                                                <thead>
                                                                    <tr>
                                                                        <th></th>
                                                                        <th>Tº Amb</th>
                                                                        <th>Tº Ens</th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td><input type="text"
                                                                                class="form-control sz"
                                                                                value="{{ $req->radiologia_temp_amb ? $req->radiologia_temp_amb : 'No aplica' }}"
                                                                                readonly>
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="form-control sz"
                                                                                value="{{ $req->radiologia_temp_ens ? $req->radiologia_temp_ens : 'No aplica' }}"
                                                                                readonly>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Punto de Cedencia <small>(lb/100ft2)</small>
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="form-control sz"
                                                                                value="{{ $req->radiologia_temp_amb_cedencia ? $req->radiologia_temp_amb_cedencia : 'No aplica' }}"
                                                                                readonly>
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="form-control sz"
                                                                                value="{{ $req->radiologia_temp_amb_cedencia ? $req->radiologia_temp_amb_cedencia : 'No aplica' }}"
                                                                                readonly>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Gel 10 seg</td>
                                                                        <td><input type="text"
                                                                                class="form-control sz"
                                                                                value="{{ $req->radiologia_temp_amb_gel_10_seg ? $req->radiologia_temp_amb_gel_10_seg : 'No aplica' }}"
                                                                                readonly>
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="form-control sz"
                                                                                value="{{ $req->radiologia_temp_ens_gel_10_seg ? $req->radiologia_temp_ens_gel_10_seg : 'No aplica' }}"
                                                                                readonly>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Gel 10 min</td>
                                                                        <td><input type="text"
                                                                                class="form-control sz"
                                                                                value="{{ $req->radiologia_temp_amb_gel_10_min ? $req->radiologia_temp_amb_gel_10_min : 'No aplica' }}"
                                                                                readonly>
                                                                        </td>
                                                                        <td><input type="text"
                                                                                class="form-control sz"
                                                                                value="{{ $req->radiologia_temp_ens_gel_10_min ? $req->radiologia_temp_ens_gel_10_min : 'No aplica' }}"
                                                                                readonly>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div class="row mt-3">
                                                            <div class="col-xs-12 col-md-6">
                                                                <span
                                                                    class="ms-1 mb-0 font-light tracking-wide">Pérdida
                                                                    de
                                                                    Filtrado</span>
                                                                <hr class="ms-1 mt-1">

                                                                <div class="row px-3 mb-2">
                                                                    <div class="col-xs-12 col-md-4 text-center my-2">
                                                                        <label for=""
                                                                            class="font-semibold tracking-wide sz">Temperatura
                                                                            <small>(ºC)</small></label>
                                                                        <input type="text"
                                                                            class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                                                            value="{{ $req->perdida_filtrado_temp ? $req->perdida_filtrado_temp : 'No aplica' }}"
                                                                            readonly>
                                                                    </div>

                                                                    <div class="col-xs-12 col-md-4 text-center my-2">
                                                                        <label for=""
                                                                            class="font-semibold tracking-wide sz">Fluido
                                                                            acumulado
                                                                            <small>(ml)</small></label>
                                                                        <input type="text"
                                                                            class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                                                            value="{{ $req->perdida_fluido_acumulado ? $req->perdida_fluido_acumulado : 'No aplica' }}"
                                                                            readonly>
                                                                    </div>

                                                                    <div class="col-xs-12 col-md-4 text-center my-2">
                                                                        <label for=""
                                                                            class="font-semibold tracking-wide sz">Filtrado
                                                                            API</label>
                                                                        <input type="text"
                                                                            class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                                                            value="{{ $req->perdida_filtrado_api ? $req->perdida_filtrado_api : 'No aplica' }}"
                                                                            readonly>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-xs-12 col-md-6">
                                                                <span class="ms-1 mb-0 font-light tracking-wide">Agua
                                                                    Libre</span>
                                                                <hr class="ms-1 mt-1">

                                                                <div class="row px-3 mb-2">
                                                                    <div class="col-xs-12 col-md-4 text-center my-2">
                                                                        <label for=""
                                                                            class="font-semibold tracking-wide sz">Agua
                                                                            Libre
                                                                            <small>(ml)</small></label>
                                                                        <input type="text"
                                                                            class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                                                            value="{{ $req->perdida_agua_libre ? $req->perdida_agua_libre : 'No aplica' }}"
                                                                            readonly>
                                                                    </div>

                                                                    <div class="col-xs-12 col-md-4 text-center my-2">
                                                                        <label for=""
                                                                            class="font-semibold tracking-wide sz">Volumen
                                                                            <small>(ml)</small></label>
                                                                        <input type="text"
                                                                            class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                                                            value="{{ $req->perdida_volumen ? $req->perdida_volumen : 'No aplica' }}"
                                                                            readonly>
                                                                    </div>

                                                                    <div class="col-xs-12 col-md-4 text-center my-2">
                                                                        <label for=""
                                                                            class="font-semibold tracking-wide sz">API
                                                                            Agua Libre</label>
                                                                        <input type="text"
                                                                            class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                                                            value="{{ $req->perdida_api_agua_libre ? $req->perdida_api_agua_libre : 'No aplica' }}"
                                                                            readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <span
                                                            class="ms-1 mb-0 font-light tracking-wide">Mezclabilidad</span>
                                                        <hr class="ms-1 mt-1">

                                                        <div class="row px-3">
                                                            <div class="col-xs-12 col-md-3 my-2">
                                                                <label for=""
                                                                    class="font-semibold tracking-wide sz">Mezclabilidad</label>
                                                                <input type="text"
                                                                    class="form-control sz text-center placeholder:text-gray-300 placeholder:font-light"
                                                                    value="{{ $req->mezclabilidad ? $req->mezclabilidad : 'No aplica' }}"
                                                                    readonly>
                                                            </div>
                                                            <div class="col-xs-12 col-md-6 my-2">
                                                                <div class="flex gap-3">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="w-6 h-6">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z">
                                                                        </path>
                                                                    </svg>
                                                                    <span>Mezclabilidad <b>5</b> es si la lechada se
                                                                        mezcla
                                                                        muy
                                                                        bien / <b>1</b>
                                                                        es si cuesta mezclar</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div> <!-- Requerimientos de Ensayo -->
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="text-center">
                                No se han agregado tests
                            </div>
                        @endif

                    </div>

                    <div class="mt-4 tab-pane fade" id="tab-ensayo_asignado_{{ $e->id }}">
                        <form action="{{ route('ensayo.assigned') }}" method="POST"
                            class="flex flex-col justify-center items-center form_asignar_ensayo_{{ $e->id }}">
                            @csrf
                            <div class="row">

                            </div>
                            <input type="hidden" name="ensayo_id" value="{{ $e->id }}">
                            <input type="hidden" name="solicitud_id" value="{{ $e->solicitud_id }}">

                            <div class="col-xs-12 col-md-6 mb-2">
                                <label
                                    class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fundamento</label>
                                <textarea name="fundamento_asignacion" rows="3" class="form-control sz p-2"
                                    placeholder="Ingrese un breve fundamento - Max 250 caracteres (Opcional)" maxlength="250"></textarea>
                            </div>

                            <span class="text-md">Al asignar este ensayo para la solicitud queda concluida la misma
                                para realizar nuevos cambios</span>
                            <button data-id-ensayo="{{ $e->id }}" onclick="event.preventDefault()"
                                data-bs-toggle="modal" data-bs-target="#modalAsignacionEnsayo_{{ $e->id }}"
                                class="text-sm mt-2 bg-green-700 bg-opacity-60 text-white tracking-widest p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold btnAsignarSolicitud">Asignar
                                Ensayo</button>

                            <!-- Modal -->
                            <div class="modal fade" id="modalAsignacionEnsayo_{{ $e->id }}" tabindex="-1"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header py-2 px-3">
                                            Confirmación de Asignación de Ensayo
                                        </div>
                                        <div class="modal-body text-center">
                                            <p class="font-semibold tracking-wide mb-2">¿Confirma asignar el ensayo
                                                seleccionado?
                                            </p>
                                            <p class="mb-0 text-sm">Luego de la asignación del ensayo, la solicitud se
                                                considera completada para su evaluación y calificación.</p>


                                        </div>
                                        <div class="modal-footer p-2">
                                            <button
                                                class=" rounded flex items-center gap-1 p-2 hover:bg-orange-200 text-orange-400 transition-all duration-300 text-sm"
                                                data-bs-dismiss="modal" onclick="event.preventDefault()">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18 18 6M6 6l12 12" />
                                                </svg>
                                                Cancelar</button>
                                            <button type="submit"
                                                class="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-sm">Confirmar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @php
                $j++;
            @endphp
        @endforeach
        <div class="mt-4 tab-pane fade" id="tab-nuevo_ensayo" role="tabpanel"
            aria-labelledby="nav-tab_carga_informacion"> <!-- Carga de Información -->
            @include('ensayo.components.create.form')
        </div>
    </div> <!-- Carga de Información -->

</div>

<!-- Agrega aditivos -->
<script>
    let aditivos = {!! json_encode($aditivos) !!}
</script>
<script src="{{ asset('js/ensayo/add_aditivo.js') }}"></script>
<script src="{{ asset('js/ensayo/test_requerido.js') }}"></script>

<!-- Script que quita y agrega clases de la navegación de intentos -->
<script>
    const nav_tab_intentos = document.querySelectorAll('.nav_tab_intentos');

    for (let i = 0; i < nav_tab_intentos.length; i++) {
        nav_tab_intentos[i].addEventListener('click', e => {
            event.preventDefault();
            if (!nav_tab_intentos[i].classList.contains('border-1')) {
                for (let j = 0; j < nav_tab_intentos.length; j++) {
                    nav_tab_intentos[j].classList.remove('border-1', 'shadow-sm');
                }
                nav_tab_intentos[i].classList.add('border-1', 'shadow-sm');
            }
        })
    }
</script>

<!-- Crea el submit del ensayo -->
<script>
    const submitEnsayo = document.getElementById('submitEnsayo');

    submitEnsayo.addEventListener('click', e => {
        e.preventDefault();
        let form = new FormData(document.getElementById('form_ensayo'));

        confirmAlert().then((confirmed) => {
            if (confirmed) {
                fetch("{{ route('ensayo.store') }}", {
                        method: 'POST',
                        body: form
                    }).then((response) => response.json())
                    .then((data) => {
                        if (data) {
                            successAlert('¡Ensayo Creado!', 'El ensayo se creó correctamente').then(
                                (confirmed) => {
                                    window.location.reload();
                                })
                        }
                    })
            }
        })
    })
</script>
