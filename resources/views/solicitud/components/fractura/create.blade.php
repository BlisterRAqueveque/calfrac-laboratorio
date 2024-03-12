<form action="{{ route('solicitud.fractura') }}" method="POST">
    @csrf

    <section class="card">
        <div class="card-header bg-white p-3">
            <p class="m-0">Formulario para crear una nueva solicitud de fractura</p>
        </div>
        <div class="card-body">
            <p class="m-0 font-bold text-lg tracking-wide">Información General</p>

            <div class="row mt-3"> <!-- Información General -->
                <div class="col-xs-12 col-md-6 my-2">
                    <label for="proyecto_number" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Solo uso
                        de
                        Laboratorio - Nº de Proyecto <span class="text-red-500">*</span></label>
                    <input type="number" placeholder="Ingrese el número" class="sz form-control sz p-2"
                        name="proyecto_number" id="proyecto_number" min="0">
                </div>
                <div class="col-xs-12 col-md-6 my-2">
                    <label for="servicio_number" class=" text-gray-700 text-sm font-semibold tracking-wide mb-2">Nº
                        Revisión de Solicitud de Servicio <span class="text-red-500">*</span></label>
                    <input type="number" placeholder="Ingrese el número" class="sz form-control p-2"
                        name="servicio_number" id="servicio_number" min="0">
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="cliente" class=" text-gray-700 text-sm font-semibold tracking-wide mb-2">Cliente <span
                            class="text-red-500">*</span></label>
                    <input type="text" placeholder="Ingrese el cliente" class="sz form-control p-2" name="cliente"
                        id="cliente">
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="locacion" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Yacimiento /
                        Locación <span class="text-red-500">*</span></label>
                    <input type="text" placeholder="Ingrese el yacimiento / locación" class="sz form-control p-2"
                        name="locacion" id="locacion" min="0">
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="programa" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Programa <span class="text-red-500">*</span></label>
                    <input type="text" placeholder="Ingrese el programa" class="sz form-control p-2"
                        name="programa" id="programa" min="0">
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="fecha_solicitud" class=" text-gray-700 font-semibold tracking-wide mb-2 text-sm">Fecha de
                        Solicitud <span class="text-red-500">*</span></label>
                    <input type="date" class="form-control sz p-2"
                        name="fecha_solicitud" id="fecha_solicitud">
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="empresa" class=" text-gray-700 font-semibold tracking-wide mb-2 text-sm">Compañía /
                        Empresa <span class="text-red-500">*</span></label>
                    <input type="text" placeholder="Ingrese la empresa" class="sz form-control p-2" name="empresa"
                        id="empresa">
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="fecha_tratamiento" class=" text-gray-700 font-semibold tracking-wide mb-2 text-sm">Fecha
                        del
                        Tratamiento <span class="text-red-500">*</span></label>
                    <input type="date" class="form-control p-2 sz" name="fecha_tratamiento" id="fecha_tratamiento">
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="pozo" class=" text-gray-700 text-sm font-semibold tracking-wide mb-2">Pozo <span
                            class="text-red-500">*</span></label>
                    <input type="text" class="form-control p-2" name="pozo" id="pozo"
                        placeholder="Ingrese el Pozo">
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="rep_compania" class=" text-gray-700 text-sm font-semibold tracking-wide mb-2">Rep
                        Compañía <span class="text-red-500">*</span></label>
                    <input type="text" class="form-control p-2 sz" name="rep_compania" id="rep_compania"
                        placeholder="Rep Compañía">
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="fecha_reporte" class=" text-gray-700 text-sm font-semibold tracking-wide mb-2">Fecha del
                        Reporte <span class="text-red-500">*</span></label>
                    <input type="date" class="form-control p-2 sz" name="fecha_reporte" id="fecha_reporte">
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="rep_venta" class=" text-gray-700 text-sm font-semibold tracking-wide mb-2">Rep Ventas
                        <span class="text-red-500">*</span></label>
                    <input type="text" class="form-control p-2 sz" name="rep_venta" id="rep_venta"
                        placeholder="Rep Ventas">
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="fecha_resultados" class=" text-gray-700 text-sm font-semibold tracking-wide mb-2">Fecha
                        Resultados <span class="text-red-500">*</span></label>
                    <input type="date" class="form-control p-2 sz" name="fecha_resultados" id="fecha_resultados">
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="equipo" class=" text-gray-700 text-sm font-semibold tracking-wide mb-2">Equipo <span
                            class="text-red-500">*</span></label>
                    <input type="text" class="form-control p-2 sz" name="equipo" id="equipo"
                        placeholder="Ingrese el equipo">
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="servicio" class=" text-gray-700 text-sm font-semibold tracking-wide mb-2">Servicio
                        <span class="text-red-500">*</span></label>
                    <input type="text" class="form-control p-2 sz" name="servicio" id="servicio"
                        placeholder="Ingrese el servicio">
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="reporte_lab_tall"
                        class=" text-gray-700 text-sm font-semibold tracking-wide mb-2">Reporte
                        Laboratorio Tall <span class="text-red-500">*</span></label>
                    <input type="text" class="form-control p-2 sz" name="reporte_lab_tall" id="reporte_lab_tall"
                        placeholder="Ingrese el reporte">
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="reporte_lab_lead"
                        class=" text-gray-700 text-sm font-semibold tracking-wide mb-2">Reporte
                        Laboratorio Lead <span class="text-red-500">*</span></label>
                    <input type="text" class="form-control p-2 sz" name="reporte_lab_lead" id="reporte_lab_lead"
                        placeholder="Ingrese el reporte">
                </div>

            </div> <!-- Información General -->

            <p class="m-0 mt-3 font-bold text-lg tracking-wide">Informacion del Pozo y Ensayos</p>
            <div class="row mt-3">
                <div class="col-xs-12 col-md-3 my-2">
                    <label for="fluido" class=" text-gray-700 text-sm font-semibold tracking-wide mb-2">Fluido del
                        Reservorio</label>
                    <input type="text" placeholder="Ingrese el fluido" class="form-control p-2 sz" name="fluido"
                        id="fluido">
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="formacion"
                        class=" text-gray-700 text-sm font-semibold tracking-wide mb-2">Formación</label>
                    <input type="text" placeholder="Ingrese la formación" class="form-control p-2 sz"
                        name="formacion" id="formacion">
                </div>
                <div class="col-xs-12 col-md-3 my-2">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <label for="bhst"
                            class=" text-gray-700 text-sm font-semibold tracking-wide mb-2">BHST</label>
                        <input type="number" placeholder="Cº / Fº" class="form-control p-2 sz" name="bhst"
                            id="bhst">
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <label for="tipo_temp_bhst"
                            class=" text-gray-700 text-sm font-semibold tracking-wide mb-2">Tipo</label>
                        <select name="tipo_temp_bhst" id="tipo_temp_bhst" class="form-select p-2">
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
                            class=" text-gray-700 text-sm font-semibold tracking-wide mb-2">Temp.
                            Ensayo</label>
                        <input type="number" placeholder="Cº / Fº" class="form-control p-2 sz" name="temp_ensayo"
                            id="temp_ensayo">
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <label for="tipo_temp_ensayo"
                            class=" text-gray-700 text-sm font-semibold tracking-wide mb-2">Tipo</label>
                        <select name="tipo_temp_ensayo" id="tipo_temp_ensayo" class="form-select p-2">
                            <option value="">-- Tipo --</option>
                            <option value="1">Cº</option>
                            <option value="2">Fº</option>
                        </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 my-2 text-center">
                    <span class="w-full items-center m-0">¿Hay algún aditivo que no sea de Calfrac para ser usado en
                        este proyecto?</span>
                        <select name="aditivo_extra" id="aditivo_extra" class="form-select sz p-2 mt-1 md:w-1/4 w-full" onchange="aditivoExtra()">
                            <option value="">-- Seleccione --</option>
                            <option value="1">Si</option>
                            <option value="0">No</option>
                        </select>
                </div>

                <div class="col-xs-12 col-md-4 my-2">
                    <label for="proveedor"
                        class=" text-gray-700 text-sm font-semibold tracking-wide mb-2">Nombre del
                        Proveedor</label>
                    <input type="text" placeholder="Ingrese el proveedor" class="form-control p-2 sz"
                        name="proveedor" id="proveedor">
                </div>
                <div class="col-xs-12 col-md-4 my-2">
                    <label for="producto"
                        class=" text-gray-700 text-sm font-semibold tracking-wide mb-2">Nombre del
                        Producto</label>
                    <input type="text" placeholder="Ingrese el producto" class="form-control p-2 sz"
                        name="producto" id="producto">
                </div>
                <div class="col-xs-12 col-md-4 my-2">
                    <label for="concentracion"
                        class=" text-gray-700 text-sm font-semibold tracking-wide mb-2">Concentración
                        a Ensayar</label>
                    <input type="text" placeholder="Ingrese la concentración" class="form-control p-2 sz"
                        name="concentracion" id="concentracion">
                </div>
            </div> <!-- Información del Pozo -->

            <p class="m-0 mt-3 font-bold text-lg tracking-wide">Análisis Requerido</p>
        
            <div class="row mt-3"> <!-- Análisis Requerido -->
                <div class="col-xs-12 col-md-3 my-2">
                    <label for="sistema_fluido" class=" text-gray-700 text-sm font-semibold tracking-wide mb-2">Compatibilidad con sistemas de
                        fluidos</label>
                        <select name="sistema_fluido" id="sistema_fluido" class="form-select sz p-2">
                            <option value="">-- Seleccione --</option>
                            @foreach ($sistemas_fluidos as $e)
                                <option value="{{ $e->id }}">{{ $e->nombre }}</option>
                            @endforeach
                        </select>
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="analisis_microbial" class=" text-gray-700 text-sm font-semibold tracking-wide mb-2">Análisis
                        de Agua y Ensayo Microbial</label>
                        <select name="analisis_microbial" id="analisis_microbial" class="form-select sz p-2">
                            <option value="">-- Seleccione --</option>
                            @foreach ($analisis_microbial as $e)
                                <option value="{{ $e->id }}">{{ $e->nombre }}</option>
                            @endforeach
                        </select>
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="agente_sosten" class=" text-gray-700 text-sm font-semibold tracking-wide mb-2">Agente de
                        Sostén</label>
                        <select name="agente_sosten" id="agente_sosten" class="form-select sz p-2">
                            <option value="">-- Seleccione --</option>
                            @foreach ($agente_sosten as $e)
                                <option value="{{ $e->id }}">{{ $e->nombre }}</option>
                            @endforeach
                        </select>
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="otros" class=" text-gray-700 text-sm font-semibold tracking-wide mb-2">Otros Análisis</label>
                        <select name="otros" id="otros" class="form-select sz p-2">
                            <option value="">-- Seleccione --</option>
                            @foreach ($otros_analisis as $e)
                                <option value="{{ $e->id }}">{{ $e->nombre }}</option>
                            @endforeach
                        </select>
                </div>

                <div class="col-12 my-2">
                    <label for="comentario" class="text-gray-700 text-sm font-semibold tracking-wide mb-2">Comentario /
                        Instrucciones</label>
                        <textarea name="comentario" id="comentario" class="form-control p-2 sz" rows="3" placeholder="Ingrese un comentario / instrucciones - Máximo 300 caracteres"></textarea>
                </div>
            </div> <!-- Análisis Requerido -->

            <p class="m-0 mt-3 font-bold text-lg tracking-wide">Firmas de Autorización</p>

            <div class="row mt-3">
                <div class="col-xs-12 col-md-6 my-2">
                    <label for="firma_iniciado_por" class=" text-gray-700 text-sm font-semibold tracking-wide mb-2">Nombre
                        <small>(Iniciado por)</small></label>
                        <select name="firma_iniciado_por" id="firma_iniciado_por" class="form-select p-2 sz">
                            <option value="">-- Seleccione --</option>
                        @foreach ($users as $e)
                            <option value="{{ $e->id }}">{{ $e->nombre . ' ' . $e->apellido }}</option>
                        @endforeach
                        </select>
                </div>

                <div class="col-xs-12 col-md-6 my-2">
                    <label for="fecha_firma_iniciado_por"
                        class=" text-gray-700 text-sm font-semibold tracking-wide mb-2">Fecha de la Firma
                        <small>(*)</small></label>
                    <input type="date" name="fecha_firma_iniciado_por" id="fecha_firma_iniciado_por"
                        class="form-control p-2 sz">
                </div>

                <div class="col-xs-12 col-md-6 my-2">
                    <label for="firma_servicios_tecnicos" class=" text-gray-700 text-sm font-semibold tracking-wide mb-2">Nombre
                        <small>(Servicios Técnicos)</small></label>
                        <select name="firma_servicios_tecnicos" id="firma_servicios_tecnicos" class="form-select p-2 sz">
                            <option value="">-- Seleccione --</option>
                        @foreach ($users as $e)
                            <option value="{{ $e->id }}">{{ $e->nombre . ' ' . $e->apellido }}</option>
                        @endforeach
                        </select>
                </div>

                <div class="col-xs-12 col-md-6 my-2">
                    <label for="fecha_firma_servicios_tecnicos"
                        class=" text-gray-700 text-sm font-semibold tracking-wide mb-2">Fecha de la Firma
                        <small>(*)</small></label>
                    <input type="date" name="fecha_firma_servicios_tecnicos" id="fecha_firma_servicios_tecnicos"
                        class="form-control p-2 sz">
                </div>

                <div class="col-xs-12 col-md-6 my-2">
                    <label for="firma_laboratorio" class=" text-gray-700 text-sm font-semibold tracking-wide mb-2">Nombre
                        <small>(Laboratorio)</small></label>
                        <select name="firma_laboratorio" id="firma_laboratorio" class="form-select p-2 sz">
                            <option value="">-- Seleccione --</option>
                        @foreach ($users as $e)
                            <option value="{{ $e->id }}">{{ $e->nombre . ' ' . $e->apellido }}</option>
                        @endforeach
                        </select>
                </div>

                <div class="col-xs-12 col-md-6 my-2">
                    <label for="fecha_firma_laboratorio"
                        class=" text-gray-700 text-sm font-semibold tracking-wide mb-2">Fecha de la Firma
                        <small>(*)</small></label>
                    <input type="date" name="fecha_firma_laboratorio" id="fecha_firma_laboratorio"
                        class="form-control p-2 sz">
                </div>
            </div>

            <p class="m-0 mt-3 font-bold text-lg tracking-wide">Reconocimiento</p>
            <div class="row mt-3">
                <div class="col-xs-12 col-md-6 my-2">
                    <label for="firma_reconocimiento" class=" text-gray-700 text-sm font-semibold tracking-wide mb-2">Nombre
                        <small>(Reconocimiento)</small></label>
                        <select name="firma_reconocimiento" id="firma_reconocimiento" class="form-select p-2 sz">
                            <option value="">-- Seleccione --</option>
                        @foreach ($users as $e)
                            <option value="{{ $e->id }}">{{ $e->nombre . ' ' . $e->apellido }}</option>
                        @endforeach
                        </select>
                </div>

                <div class="col-xs-12 col-md-6 my-2">
                    <label for="fecha_firma_reconocimiento"
                        class=" text-gray-700 text-sm font-semibold tracking-wide mb-2">Fecha de la Firma
                        <small>(*)</small></label>
                    <input type="date" name="fecha_firma_reconocimiento" id="fecha_firma_reconocimiento"
                        class="form-control p-2 sz">
                </div>
            </div>


        </div>
    </section>

    <div class="flex items-center gap-3 md:justify-end mt-4 px-3 md:px-auto">
        <button class=" rounded flex items-center gap-1 p-2 hover:bg-orange-200 text-orange-400 transition-all duration-300"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
          </svg>
           Cancelar</button>
        <input type="submit"
            class=" w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold"
            value="Enviar Solicitud">
    </div>
</form>
<br>
