<form action="{{ route('solicitud.fractura') }}" method="POST">
    @csrf
    <section class="card border dark:border-gray-800">
        <div class="card-header bg-white dark:card-bg-head dark:text-gray-200 p-3">
            <p class="m-0">Formulario para crear una nueva solicitud de fractura</p>
        </div>
        <div class="card-body dark:tab_bg">
            <p class="m-0 font-bold text-lg tracking-wide">Información General</p>

            <div class="row mt-3"> <!-- Información General -->
                <div class="col-xs-12 col-md-6 my-2">
                    <label for="proyecto_number"
                        class="text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Solo uso
                        de
                        Laboratorio - Nº de Proyecto <span class="text-red-500">*</span></label>
                    <input type="number" placeholder="Ingrese el número"
                        class="sz form-control dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none sz p-2"
                        name="proyecto_number" id="proyecto_number" min="0">
                    @error('proyecto_number')
                        <small class="text-xs text-red-600">El Nº del Proyecto es requerido</small>
                    @enderror
                </div>
                <div class="col-xs-12 col-md-6 my-2">
                    <label for="servicio_number"
                        class=" text-gray-700 dark:text-gray-300 text-sm font-semibold tracking-wide mb-2">Nº
                        Revisión de Solicitud de Servicio <span class="text-red-500">*</span></label>
                    <input type="number" placeholder="Ingrese el número"
                        class="sz form-control dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2"
                        name="servicio_number" id="servicio_number" min="0">
                    @error('servicio_number')
                        <small class="text-xs text-red-600">El Nº de Revisión es requerido</small>
                    @enderror
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="cliente"
                        class=" text-gray-700 dark:text-gray-300 text-sm font-semibold tracking-wide mb-2">Cliente <span
                            class="text-red-500">*</span></label>
                    <select name="cliente_fractura" id="cliente_fractura" class="text-sm" data-search="true"
                        data-silent-initial-value-set="true">
                        @foreach ($clientes as $c)
                            <option value="{{ $c->id }}"
                                {{ old('cliente_fractura') == $c->id ? 'selected' : '' }}>{{ $c->nombre }}</option>
                        @endforeach
                    </select>
                    @error('cliente_fractura')
                        <small class="text-xs text-red-600">El cliente es requerido</small>
                    @enderror
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="locacion"
                        class="text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Yacimiento /
                        Locación <span class="text-red-500">*</span></label>
                        <select name="locacion_fractura" id="locacion_fractura" class="text-sm" data-search="true">
                            @foreach ($yacimientos as $y)
                            <option value="{{ $y->id }}"
                                {{ old('locacion_fractura') == $y->id ? 'selected' : '' }}>{{ $y->nombre }}</option>
                        @endforeach
                        </select>
                        @error('locacion_fractura')
                            <small class="text-xs text-red-600">La locación es requerida</small>
                        @enderror
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="programa"
                        class="text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Programa <span
                            class="text-red-500">*</span></label>
                    <input type="text" placeholder="Ingrese el programa"
                        class="sz form-control dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2"
                        name="programa" id="programa" min="0">
                    @error('programa')
                        <small class="text-xs text-red-600">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="fecha_solicitud"
                        class=" text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2 text-sm">Fecha
                        de Solicitud <span class="text-red-500">*</span></label>
                    <input type="date"
                        class="form-control dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none sz p-2"
                        max="@php echo date('Y-m-d') @endphp" name="fecha_solicitud" id="fecha_solicitud">
                    @error('fecha_solicitud')
                        <small class="text-xs text-red-600">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="empresa"
                        class=" text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2 text-sm">Compañía /
                        Empresa <span class="text-red-500">*</span></label>
                    <input type="text" placeholder="Ingrese la empresa"
                        class="sz form-control dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2"
                        name="empresa" id="empresa">
                    @error('empresa')
                        <small class="text-xs text-red-600">{{ $message }}</small>
                    @enderror
                </div>

                {{-- <div class="col-xs-12 col-md-2 my-2">
                    <label for="fecha_tratamiento"
                        class=" text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2 text-sm">Fecha
                        del
                        Tratamiento <span class="text-red-500">*</span></label>
                    <input type="date"
                        class="form-control dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2 sz"
                        name="fecha_tratamiento" id="fecha_tratamiento">
                    @error('fecha_tratamiento')
                        <small class="text-xs text-red-600">{{ $message }}</small>
                    @enderror
                </div> --}}

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="pozo"
                        class=" text-gray-700 dark:text-gray-300 text-sm font-semibold tracking-wide mb-2">Pozo <span
                            class="text-red-500">*</span></label>
                    <input type="text"
                        class="form-control dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2 sz"
                        name="pozo" id="pozo" placeholder="Ingrese el Pozo">
                    @error('pozo')
                        <small class="text-xs text-red-600">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="rep_compania"
                        class=" text-gray-700 dark:text-gray-300 text-sm font-semibold tracking-wide mb-2">Rep
                        Compañía <span class="text-red-500">*</span></label>
                    <input type="text"
                        class="form-control dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2 sz"
                        name="rep_compania" id="rep_compania" placeholder="Rep Compañía">
                    @error('rep_compania')
                        <small class="text-xs text-red-600">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="fecha_reporte"
                        class=" text-gray-700 dark:text-gray-300 text-sm font-semibold tracking-wide mb-2">Fecha
                        del
                        Reporte <span class="text-red-500">*</span></label>
                    <input type="date"
                        class="form-control dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2 sz"
                        name="fecha_reporte" id="fecha_reporte">
                    @error('fecha_reporte')
                        <small class="text-xs text-red-600">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="rep_venta"
                        class=" text-gray-700 dark:text-gray-300 text-sm font-semibold tracking-wide mb-2">Rep Ventas
                        <span class="text-red-500">*</span></label>
                    <input type="text"
                        class="form-control dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2 sz"
                        name="rep_venta" id="rep_venta" placeholder="Rep Ventas">
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="fecha_resultados"
                        class=" text-gray-700 dark:text-gray-300 text-sm font-semibold tracking-wide mb-2">Fecha
                        Resultados <span class="text-red-500">*</span></label>
                    <input type="date"
                        class="form-control dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2 sz"
                        min="@php echo date('Y-m-d') @endphp" name="fecha_resultados" id="fecha_resultados">
                    @error('fecha_resultados')
                        <small class="text-xs text-red-600">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="equipo"
                        class=" text-gray-700 dark:text-gray-300 text-sm font-semibold tracking-wide mb-2">Equipo <span
                            class="text-red-500">*</span></label>
                    <input type="text"
                        class="form-control dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2 sz"
                        name="equipo" id="equipo" placeholder="Ingrese el equipo">
                    @error('equipo')
                        <small class="text-xs text-red-600">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="servicio"
                        class=" text-gray-700 dark:text-gray-300 text-sm font-semibold tracking-wide mb-2">Servicio
                        <span class="text-red-500">*</span></label>
                    <input type="text"
                        class="form-control dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2 sz"
                        name="servicio" id="servicio" placeholder="Ingrese el servicio">
                    @error('servicio')
                        <small class="text-xs text-red-600">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="reporte_lab_tall"
                        class=" text-gray-700 dark:text-gray-300 text-sm font-semibold tracking-wide mb-2">Reporte
                        Laboratorio Tall <span class="text-red-500">*</span></label>
                    <input type="text"
                        class="form-control dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2 sz"
                        name="reporte_lab_tall" id="reporte_lab_tall" placeholder="Ingrese el reporte">
                    @error('reporte_lab_tall')
                        <small class="text-xs text-red-600">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="reporte_lab_lead"
                        class=" text-gray-700 dark:text-gray-300 text-sm font-semibold tracking-wide mb-2">Reporte
                        Laboratorio Lead <span class="text-red-500">*</span></label>
                    <input type="text"
                        class="form-control dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2 sz"
                        name="reporte_lab_lead" id="reporte_lab_lead" placeholder="Ingrese el reporte">
                    @error('reporte_lab_lead')
                        <small class="text-xs text-red-600">{{ $message }}</small>
                    @enderror
                </div>

            </div> <!-- Información General -->

            <p class="m-0 mt-3 font-bold text-lg tracking-wide">Informacion del Pozo y Ensayos</p>
            <div class="row mt-3">
                <div class="col-xs-12 col-md-3 my-2">
                    <label for="fluido"
                        class=" text-gray-700 dark:text-gray-300 text-sm font-semibold tracking-wide mb-2">Fluido del
                        Reservorio</label>
                    <input type="text" placeholder="Ingrese el fluido"
                        class="form-control dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2 sz"
                        name="fluido" id="fluido">
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="formacion"
                        class=" text-gray-700 dark:text-gray-300 text-sm font-semibold tracking-wide mb-2">Formación</label>
                    <input type="text" placeholder="Ingrese la formación"
                        class="form-control dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2 sz"
                        name="formacion" id="formacion">
                </div>
                <div class="col-xs-12 col-md-3 my-2">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <label for="bhst"
                                class=" text-gray-700 dark:text-gray-300 text-sm font-semibold tracking-wide mb-2">BHST</label>
                            <input type="number" placeholder="Cº / Fº"
                                class="form-control dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2 sz"
                                name="bhst" id="bhst">
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <label for="tipo_temp_bhst"
                                class=" text-gray-700 dark:text-gray-300 text-sm font-semibold tracking-wide mb-2">Tipo</label>
                            <select name="tipo_temp_bhst" id="tipo_temp_bhst"
                                class="form-select dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2 sz">
                                <option value="">-- Tipo --</option>
                                <option value="1">Cº</option>
                                <option value="2">Fº</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 my-2">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <label for="temp_ensayo"
                                class=" text-gray-700 dark:text-gray-300 text-sm font-semibold tracking-wide mb-2">Temp.
                                Ensayo</label>
                            <input type="number" placeholder="Cº / Fº"
                                class="form-control dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2 sz"
                                name="temp_ensayo" id="temp_ensayo">
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <label for="tipo_temp_ensayo"
                                class=" text-gray-700 dark:text-gray-300 text-sm font-semibold tracking-wide mb-2">Tipo</label>
                            <select name="tipo_temp_ensayo" id="tipo_temp_ensayo"
                                class="form-select dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2 sz">
                                <option value="">-- Tipo --</option>
                                <option value="1">Cº</option>
                                <option value="2">Fº</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 my-2 text-center">
                    <span class="w-full items-center m-0 dark:text-gray-300">¿Hay algún aditivo que no sea de Calfrac
                        para ser usado en
                        este proyecto?</span>
                    <div class="flex justify-center">
                        <select name="aditivo_extra" id="aditivo_extra"
                            class="form-select dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none sz p-2 mt-1 md:w-1/4 w-full"
                            onchange="aditivoExtra(this)">
                            <option value="1">Si</option>
                            <option value="0" selected>No</option>
                        </select>
                    </div>
                </div>

                <div class="col-xs-12 col-md-4 my-2">
                    <label for="proveedor"
                        class=" text-gray-700 dark:text-gray-300 text-sm font-semibold tracking-wide mb-2">Nombre del
                        Proveedor</label>
                    <input type="text" placeholder="Ingrese el proveedor"
                        class="form-control dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2 sz aditivo_extra_inp"
                        name="proveedor" id="proveedor" readonly>
                </div>
                <div class="col-xs-12 col-md-4 my-2">
                    <label for="producto"
                        class=" text-gray-700 dark:text-gray-300 text-sm font-semibold tracking-wide mb-2">Nombre del
                        Producto</label>
                    <input type="text" placeholder="Ingrese el producto"
                        class="form-control dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2 sz aditivo_extra_inp"
                        name="producto" id="producto" readonly>
                </div>
                <div class="col-xs-12 col-md-4 my-2">
                    <label for="concentracion"
                        class=" text-gray-700 dark:text-gray-300 text-sm font-semibold tracking-wide mb-2">Concentración
                        a Ensayar</label>
                    <input type="text" placeholder="Ingrese la concentración"
                        class="form-control dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2 sz aditivo_extra_inp"
                        name="concentracion" id="concentracion" readonly>
                </div>
            </div> <!-- Información del Pozo -->

            <p class="m-0 mt-3 font-bold text-lg tracking-wide">Análisis Requerido</p>

            <div class="row mt-3"> <!-- Análisis Requerido -->
                <div class="col-xs-12 col-md-3 my-2">
                    <label for="sistema_fluido"
                        class=" text-gray-700 dark:text-gray-300 text-sm font-semibold tracking-wide mb-2">Compatibilidad
                        con sistemas de
                        fluidos</label>
                    <select name="sistema_fluido" id="sistema_fluido"
                        class="form-select dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none sz p-2">
                        <option value="">-- Seleccione --</option>
                        @foreach ($sistemas_fluidos as $e)
                            <option value="{{ $e->id }}">{{ $e->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="analisis_microbial"
                        class=" text-gray-700 dark:text-gray-300 text-sm font-semibold tracking-wide mb-2">Análisis
                        de Agua y Ensayo Microbial</label>
                    <select name="analisis_microbial" id="analisis_microbial"
                        class="form-select dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none sz p-2">
                        <option value="">-- Seleccione --</option>
                        @foreach ($analisis_microbial as $e)
                            <option value="{{ $e->id }}">{{ $e->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="agente_sosten"
                        class=" text-gray-700 dark:text-gray-300 text-sm font-semibold tracking-wide mb-2">Agente
                        de
                        Sostén</label>
                    <select name="agente_sosten" id="agente_sosten"
                        class="form-select dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none sz p-2">
                        <option value="">-- Seleccione --</option>
                        @foreach ($agente_sosten as $e)
                            <option value="{{ $e->id }}">{{ $e->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="otros"
                        class=" text-gray-700 dark:text-gray-300 text-sm font-semibold tracking-wide mb-2">Otros
                        Análisis</label>
                    <select name="otros" id="otros"
                        class="form-select dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none sz p-2">
                        <option value="">-- Seleccione --</option>
                        @foreach ($otros_analisis as $e)
                            <option value="{{ $e->id }}">{{ $e->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-12 my-2">
                    <label for="comentario"
                        class="text-gray-700 dark:text-gray-300 text-sm font-semibold tracking-wide mb-2">Comentario
                        /
                        Instrucciones</label>
                    <textarea name="comentario" id="comentario"
                        class="form-control dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2 sz"
                        rows="3" placeholder="Ingrese un comentario / instrucciones - Máximo 300 caracteres"></textarea>
                </div>
            </div> <!-- Análisis Requerido -->

            <p class="m-0 mt-3 font-bold text-lg tracking-wide">Firmas de Autorización</p>

            <div class="row mt-3">
                <div class="col-xs-12 col-md-6 my-2">
                    <label for="firma_iniciado_por"
                        class=" text-gray-700 dark:text-gray-300  text-sm font-semibold tracking-wide mb-2">Nombre
                        <small>(Iniciado por)</small></label>
                    <select name="firma_iniciado_por" id="firma_iniciado_por"
                        class="form-select dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2 sz">
                        <option value="">-- Seleccione --</option>
                        @foreach ($users as $e)
                            <option value="{{ $e->id }}">{{ $e->nombre . ' ' . $e->apellido }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-xs-12 col-md-6 my-2">
                    <label for="fecha_firma_iniciado_por"
                        class=" text-gray-700 dark:text-gray-300  text-sm font-semibold tracking-wide mb-2">Fecha de la
                        Firma
                        <small>(*)</small></label>
                    <input type="date" name="fecha_firma_iniciado_por" id="fecha_firma_iniciado_por"
                        class="form-control dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2 sz">
                </div>

                <div class="col-xs-12 col-md-6 my-2">
                    <label for="firma_servicios_tecnicos"
                        class=" text-gray-700 dark:text-gray-300  text-sm font-semibold tracking-wide mb-2">Nombre
                        <small>(Servicios Técnicos)</small></label>
                    <select name="firma_servicios_tecnicos" id="firma_servicios_tecnicos"
                        class="form-select dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2 sz">
                        <option value="">-- Seleccione --</option>
                        @foreach ($users as $e)
                            <option value="{{ $e->id }}">{{ $e->nombre . ' ' . $e->apellido }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-xs-12 col-md-6 my-2">
                    <label for="fecha_firma_servicios_tecnicos"
                        class=" text-gray-700 dark:text-gray-300  text-sm font-semibold tracking-wide mb-2">Fecha de la
                        Firma
                        <small>(*)</small></label>
                    <input type="date" name="fecha_firma_servicios_tecnicos" id="fecha_firma_servicios_tecnicos"
                        class="form-control dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2 sz">
                </div>

                <div class="col-xs-12 col-md-6 my-2">
                    <label for="firma_laboratorio"
                        class=" text-gray-700 dark:text-gray-300  text-sm font-semibold tracking-wide mb-2">Nombre
                        <small>(Laboratorio)</small></label>
                    <select name="firma_laboratorio" id="firma_laboratorio"
                        class="form-select dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2 sz">
                        <option value="">-- Seleccione --</option>
                        @foreach ($users as $e)
                            <option value="{{ $e->id }}">{{ $e->nombre . ' ' . $e->apellido }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-xs-12 col-md-6 my-2">
                    <label for="fecha_firma_laboratorio"
                        class=" text-gray-700 dark:text-gray-300  text-sm font-semibold tracking-wide mb-2">Fecha de la
                        Firma
                        <small>(*)</small></label>
                    <input type="date" name="fecha_firma_laboratorio" id="fecha_firma_laboratorio"
                        class="form-control dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2 sz">
                </div>
            </div>

            <p class="m-0 mt-3 font-bold text-lg tracking-wide">Reconocimiento</p>
            <div class="row mt-3">
                <div class="col-xs-12 col-md-6 my-2">
                    <label for="firma_reconocimiento"
                        class=" text-gray-700 dark:text-gray-300  text-sm font-semibold tracking-wide mb-2">Nombre
                        <small>(Reconocimiento)</small></label>
                    <select name="firma_reconocimiento" id="firma_reconocimiento"
                        class="form-select dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2 sz">
                        <option value="">-- Seleccione --</option>
                        @foreach ($users as $e)
                            <option value="{{ $e->id }}">{{ $e->nombre . ' ' . $e->apellido }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-xs-12 col-md-6 my-2">
                    <label for="fecha_firma_reconocimiento"
                        class=" text-gray-700 dark:text-gray-300 text-sm font-semibold tracking-wide mb-2">Fecha de la
                        Firma
                        <small>(*)</small></label>
                    <input type="date" name="fecha_firma_reconocimiento" id="fecha_firma_reconocimiento"
                        class="form-control dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2 sz">
                </div>
            </div>

        </div>
    </section>

    <div class="flex items-center gap-3 md:justify-end mt-4 px-3 md:px-auto">
        <button id="btnSubmitSolicitud"
            class="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold"
            data-bs-toggle="modal" data-bs-target="#modalSubmit" onclick="event.preventDefault()">Enviar
            Solicitud</button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalSubmit" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content dark:dark_bg text-xs xl:text-sm dark:text-gray-300">
                <div class="modal-header py-2 px-3 dark:card-bg-head">
                    Confirmación de carga
                </div>
                <div class="modal-body text-center">
                    <p class="font-semibold tracking-wide mb-2">¿Confirma enviar la solicitud?</p>
                    <p class="mb-0">Una vez creada la solicitud, comienza la gestión para asignarle el ensayo
                        correspondiente</p>
                </div>
                <div class="modal-footer">
                    <button
                        class=" rounded flex items-center gap-1 p-2 hover:bg-orange-200 text-orange-400 transition-all duration-300 text-xs xl:text-sm"
                        data-bs-dismiss="modal" onclick="event.preventDefault()">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                        Cancelar</button>
                    <button type="submit" id="btnSendSolicitud" data-bs-dismiss="modal"
                        class="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-xs xl:text-sm">Confirmar</button>
                </div>
            </div>
        </div>
    </div>
</form>
<br>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        VirtualSelect.init({
            ele: "#cliente_fractura",
            placeholder: "Seleccione el cliente",
        });
        VirtualSelect.init({
            ele: "#locacion_fractura",
            placeholder: "Seleccione el Yacimiento",
        });
        document.getElementById("cliente_fractura").setValue(0);
        document.getElementById("locacion_fractura").setValue(0);
    })
</script>

<script>
    const aditivo_extra_inp = document.querySelectorAll('.aditivo_extra_inp');

    function aditivoExtra(e) {
        event.preventDefault();
        console.log(e.value);

        if (e.value == 1) {
            for (let i = 0; i < aditivo_extra_inp.length; i++) {
                aditivo_extra_inp[i].removeAttribute('readonly');
            }
        } else {
            for (let i = 0; i < aditivo_extra_inp.length; i++) {
                aditivo_extra_inp[i].value = '';
                aditivo_extra_inp[i].setAttribute('readonly', 'true');
            }
        }
    }
</script>

<!-- Cartel de carga mientras se carga el formulario de la solicitud -->
<script>
    const btnSendSolicitud = document.getElementById('btnSendSolicitud');
    btnSendSolicitud.addEventListener('click', e => {
        loadingAlert('Creando la solicitud, por favor espere',
        'Se están enviando los correos desde el sistema');
    })
</script>

<!-- Cartel que muestra que la solicitud fue creada/editada correctamente cuando se hace el submit -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        @if ($message = session('success'))
            successAlert('¡Solicitud Creada!', 'La Solicitud de Fractura fue creada correctamente').then(
                (confirmed) => {
                    window.location.replace('solicitudes');
                })
        @endif
    })
</script>
