<form action="{{ route('solicitud.lechada') }}" method="POST">
    @csrf

    <section class="card shadow-sm">
        <div class="card-header bg-white p-3">
            <p class="m-0">Formulario para crear una nueva solicitud de lechada</p>
        </div>
        <div class="card-body">
            <p class="m-0 font-bold text-lg tracking-wide">Información General</p>

            <div class="grid xs:grid-cols-2 md:grid-cols-6 gap-3 mt-3">
                <div class="col-span-2 xl:col-span-1">
                    <label for="cliente_lechada" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Cliente
                        <span class="text-red-500">*</span></label>
                    <select name="cliente_lechada" id="cliente_lechada" class="text-sm" data-search="true" data-silent-initial-value-set="true">
                        @foreach ($clientes as $c)
                            <option value="{{ $c->id }}"
                                {{ old('cliente_lechada') == $c->id ? 'selected' : '' }}>{{ $c->nombre }}</option>
                        @endforeach
                    </select>
                    @error('cliente_lechada')
                        <small class="text-xs text-red-600">El cliente es requerido</small>
                    @enderror
                </div>
                <div class="col-span-2 xl:col-span-1">
                    <label for="locacion_lechada"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Yacimiento /
                        Locación
                        <span class="text-red-500">*</span></label>
                    <select name="locacion_lechada" id="locacion_lechada" class="form-select text-sm p-2">
                        <option value="">-- Seleccione --</option>
                        <option value="1" {{ old('locacion_lechada') == '1' ? 'selected' : '' }}>Yacimiento 1
                        </option>
                        <option value="2" {{ old('locacion_lechada') == '2' ? 'selected' : '' }}>Yacimiento 2
                        </option>
                        {{-- @foreach ($yacimientos as $y)
                            <option value="{{ $y->id }}">{{ $y->nombre }}</option>
                        @endforeach --}}
                    </select>
                    @error('locacion_lechada')
                        <small class="text-xs text-red-600">La locación es requerida</small>
                    @enderror
                </div>
                <div class="col-span-2 xl:col-span-1">
                    <label for="programa_lechada"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Programa <span
                            class="text-red-500">*</span></label>
                    <input type="text" name="programa_lechada" id="programa_lechada" class="form-control text-sm p-2"
                        placeholder="Programa" value="{{ old('programa_lechada') }}">
                    @error('programa_lechada')
                        <small class="text-xs text-red-600">El programa es requerido</small>
                    @enderror
                </div>
                <div class="col-span-2 xl:col-span-1">
                    <label for="fecha_solicitud_lechada"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fecha de
                        Solicitud</label>
                    <input type="date" name="fecha_solicitud_lechada" id="fecha_solicitud_lechada"
                        class="form-control text-sm p-2" value="@php echo date('Y-m-d') @endphp" readonly>

                </div>

                <div class="col-span-2">
                    <label for="empresa_lechada" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Empresa / Compañía
                        <span class="text-red-500">*</span></label>
                    <input type="text" name="empresa_lechada" id="empresa_lechada" class="form-control text-sm p-2"
                        placeholder="Empresa / Compañía" value="{{ old('empresa_lechada') }}">
                    @error('empresa_lechada')
                        <small class="text-xs text-red-600">La empresa es requerida</small>
                    @enderror
                </div>

                {{-- <div class="col-span-2 xl:col-span-1">
                    <label for="fecha_tratamiento_lechada"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fecha
                        de Tratamiento <span class="text-red-500">*</span></label>
                    <input type="date" name="fecha_tratamiento_lechada" id="fecha_tratamiento_lechada"
                        class="form-control text-sm p-2" value="{{ old('fecha_tratamiento_lechada') }}">
                    @error('fecha_tratamiento_lechada')
                        <small class="text-xs text-red-600">La fecha de tratamiento es requerida</small>
                    @enderror
                </div> --}}

                <div class="col-span-2 xl:col-span-1">
                    <label for="pozo_lechada" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Pozo <span
                            class="text-red-500">*</span></label>
                    <input type="text" name="pozo_lechada" id="pozo_lechada"
                        class="form-control text-sm p-2"placeholder="Pozo" value="{{ old('pozo_lechada') }}">
                    @error('pozo_lechada')
                        <small class="text-xs text-red-600">El pozo es requerido</small>
                    @enderror
                </div>

                {{-- <div class="col-span-2 xl:col-span-1">
                    <label for="fecha_reporte_lechada"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fecha de
                        Reporte <span class="text-red-500">*</span></label>
                    <input type="date" name="fecha_reporte_lechada" id="fecha_reporte_lechada"
                        class="form-control text-sm p-2" value="{{ old('fecha_reporte_lechada') }}">
                    @error('fecha_reporte_lechada')
                        <small class="text-xs text-red-600">La fecha de reporte es requerida</small>
                    @enderror
                </div> --}}

                <div class="col-span-2 xl:col-span-1">
                    <label for="fecha_resultados_lechada"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fecha
                        de
                        Resultados <span class="text-red-500">*</span></label>
                    <input type="date" name="fecha_resultados_lechada" id="fecha_resultados_lechada"
                        class="form-control text-sm p-2" min="@php echo date('Y-m-d') @endphp"
                        value="{{ old('fecha_resultados_lechada') }}">
                    @error('fecha_resultados_lechada')
                        <small class="text-xs text-red-600">La fecha de resultados es requerida</small>
                    @enderror
                </div>

                <div class="col-span-2 xl:col-span-1">
                    <label for="equipo_lechada" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Equipo
                        <span class="text-red-500">*</span></label>
                    <input type="text" name="equipo_lechada" id="equipo_lechada" class="form-control text-sm p-2"
                        placeholder="Ingrese el equipo" value="{{ old('equipo_lechada') }}">
                    @error('equipo_lechada')
                        <small class="text-xs text-red-600">El equipo es requerido</small>
                    @enderror
                </div>

                <div class="col-span-2 xl:col-span-1">
                    <label for="servicio_lechada"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Servicio
                        <span class="text-red-500">*</span></label>
                    <input type="text" name="servicio_lechada" id="servicio_lechada" class="form-control text-sm p-2"
                        placeholder="Ingrese el servicio" value="{{ old('servicio_lechada') }}">
                    @error('servicio_lechada')
                        <small class="text-xs text-red-600">El servicio es requerido</small>
                    @enderror
                </div>

                <div class="col-span-2 xl:col-span-1">
                    <label for="tipo_requerimiento_lechada"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Tipo de Requerimiento <span class="text-red-500">*</span></label>
                    <select name="tipo_requerimiento_lechada" id="tipo_requerimiento_lechada">
                        @foreach ($tipo_requerimiento_cemento as $tipo)
                            <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                        @endforeach
                    </select>
                    @error('tipo_requerimiento_lechada')
                        <small class="text-xs text-red-600">El tipo de requerimiento es requerido</small>
                    @enderror
                </div>

                {{-- <div class="col-span-2 md:col-span-2 xl:col-span-1">
                    <label for="reporte_lab_tall_lechada"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Reporte
                        Laboratorio Tall <span class="text-red-500">*</span></label>
                    <input type="text" name="reporte_lab_tall_lechada" id="reporte_lab_tall_lechada"
                        class="form-control text-sm p-2" placeholder="Ingrese el reporte"
                        value="{{ old('reporte_lab_tall_lechada') }}">
                    @error('reporte_lab_tall_lechada')
                        <small class="text-xs text-red-600">El Reporte Tall es requerido</small>
                    @enderror
                </div>

                <div class="col-span-2 md:col-span-2 xl:col-span-1">
                    <label for="reporte_lab_lead_lechada"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Reporte
                        Laboratorio Lead <span class="text-red-500">*</span></label>
                    <input type="text" name="reporte_lab_lead_lechada" id="reporte_lab_lead_lechada"
                        class="form-control text-sm p-2" placeholder="Ingrese el reporte"
                        value="{{ old('reporte_lab_lead_lechada') }}">
                    @error('reporte_lab_lead_lechada')
                        <small class="text-xs text-red-600">El Reporte Lead es requerido</small>
                    @enderror
                </div> --}}

                <div class="col-span-2 xl:col-span-1">
                    <label for="tipo_trabajo_lechada"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Tipo de
                        Trabajo <span class="text-red-500">*</span></label>
                    <select name="tipo_trabajo_lechada" id="tipo_trabajo_lechada">
                        @foreach ($tipo_trabajo_cemento as $tipo)
                            <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                        @endforeach
                    </select>
                    @error('tipo_trabajo_lechada')
                        <small class="text-xs text-red-600">El tipo de trabajo es requerido</small>
                    @enderror
                </div>

                <div class="col-span-2 md:col-span-2 xl:col-span-1">
                    <label for="tipo_cementacion_lechada"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Tipo
                        de Cementación <span class="text-red-500">*</span></label>
                    <select name="tipo_cementacion_lechada" id="tipo_cementacion_lechada">
                        @foreach ($tipo_cementacion as $tipo)
                            <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                        @endforeach 
                    </select>
                    @error('tipo_cementacion_lechada')
                        <small class="text-xs text-red-600">El tipo de cementación es requerido</small>
                    @enderror
                </div>

                <div class="col-span-1 md:col-span-2 xl:col-span-1">
                    <label for="ensayo_requerido_lechada"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Ensayos
                        Requeridos <span class="text-red-500">*</span></label>
                    <div class="flex gap-1">
                        <label for="ensayo_requerido_principal" class="bg-gray-200 p-1 w-full max-w-28 text-center rounded-md flex items-center gap-1 border border-gray-300 cursor-pointer hover:bg-opacity-80">
                            <input type="checkbox" name="ensayo_requerido_principal" id="ensayo_requerido_principal">
                            Principal</label>
                        <label for="ensayo_requerido_bullheading" class="bg-gray-200 p-1 w-full max-w-28 text-center rounded-md flex items-center gap-1 border border-gray-300 cursor-pointer hover:bg-opacity-80">
                            <input type="checkbox" name="ensayo_requerido_bullheading" id="ensayo_requerido_bullheading">
                            Bullheading</label>
                    </div>
                </div>
            </div>

            <hr class="my-4">

            <p class="m-0 font-bold text-lg my-3 tracking-wide">Ensayo Referencia</p>

            <section class="container_ensayo_referencia rounded-md"></section>

            <div class="text-center mt-3">
                <button id="btnAddEnsayoRef"
                    class="text-sm mt-2 bg-gray-200 hover:bg-gray-300 text-gray-600 p-1 rounded-md border transition-all duration-200 border-gray-300">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg> --}}
                    Agregar Ensayo de Referencia
                </button>
            </div>

            <hr class="my-4">

            <p class="m-0 font-bold text-lg my-3 tracking-wide">Ensayo Solicitado</p>
            <div class="grid md:grid-cols-5 gap-3 mt-3">
                <div>
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">OH / Trepano
                        <small>(in)</small></label>
                    <div class="grid grid-cols-2 gap-3">
                        <input type="number" name="OH" class="form-control text-sm p-2" value="{{ old('OH') }}" placeholder="OH"
                            step=".01">
                        <input type="number" name="trepano" value="{{ old('trepano') }}" class="form-control text-sm p-2"
                            placeholder="Trepano" step=".01">
                    </div>
                </div>

                <div class="">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Casing ID y
                        OD</label>
                    <div class="grid grid-cols-2 gap-3">
                        <input type="number" name="casing_id" class="form-control text-sm p-2"
                            placeholder="Casing ID" value="{{ old('casing_id') }}" step=".01">
                        <input type="number" name="casing_od" class="form-control text-sm p-2"
                            placeholder="Casing OD" value="{{ old('casing_od') }}" step=".01">
                    </div>
                </div>

                <div class="">
                    <label for="densidad_lodo" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Densidad
                        del Lodo (ppg)</label>
                    <input type="number" name="densidad_lodo" id="densidad_lodo" value="{{ old('densidad_lodo') }}" class="form-control text-sm p-2"
                        placeholder="Densidad del lodo" step=".01">
                </div>

                <div class="">
                    <label for="tipo_lodo" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Tipo de
                        lodo</label>
                    <select name="tipo_lodo" id="tipo_lodo">
                        @foreach ($tipo_lodo as $tipo)
                            <option value="{{ $tipo->id }}" {{ old('tipo_lodo') == $tipo->id ? 'selected' : '' }}>{{ $tipo->nombre }}</option>
                        @endforeach 
                    </select>
                </div>

                <div class="md:col-span-2 xl:col-span-1">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Profundidad
                        Pozo (MD / TVD) (m)</label>
                    <div class="grid grid-cols-2 gap-3">
                        <input type="number" min="0" name="profundidad_pozo_md"
                            class="form-control text-sm p-2" value="{{ old('profundidad_pozo_md') }}" placeholder="MD" step=".01">
                        <input type="number" min="0" name="profundidad_pozo_tvd"
                            class="form-control text-sm p-2" value="{{ old('profundidad_pozo_tvd') }}" placeholder="TVD" step=".01">
                    </div>
                </div>

                <div class="">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Base (MD
                        /
                        TVD) (m)</label>
                    <div class="grid grid-cols-2 gap-3">
                        <input type="number" name="base_md" value="{{ old('base_md') }}" class="form-control text-sm p-2" placeholder="MD"
                            step=".01">
                        <input type="number" name="base_tvd" value="{{ old('base_tvd') }}" class="form-control text-sm p-2" placeholder="TVD"
                            step=".01">
                    </div>
                </div>

                <div class="md:col-span-2 xl:col-span-1">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Top of
                        Slurry
                        (TVD / MD) (m)</label>
                    <div class="grid grid-cols-2 gap-3">
                        <input type="number" name="top_of_slurry_tvd" value="{{ old('top_of_slurry_tvd') }}" class="form-control text-sm p-2"
                            placeholder="TVD" step=".01">
                        <input type="number" name="top_of_slurry_md" value="{{ old('top_of_slurry_md') }}" class="form-control text-sm p-2"
                            placeholder="MD" step=".01">
                    </div>
                </div>

                <div class="">
                    <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Volumen</label>
                    <input type="number" name="volumen" class="form-control text-sm p-2" value="{{ old('volumen') }}" placeholder="Volumen"
                        step=".01">
                </div>

                <div class="">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Pump
                        Rate</label>
                    <input type="number" name="pump_rate" value="{{ old('pump_rate') }}" class="form-control text-sm p-2" placeholder="Pump Rate"
                        step=".01">
                </div>

                <div class="md:col-span-2 xl:col-span-1">
                    <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Gradiente de
                        Temperatura Cº</label>
                    <input type="number" name="grado_temperatura" value="{{ old('grado_temperatura') }}" class="form-control sz p-2" placeholder="Cº"
                        step=".01">
                </div>

                <div class="grid grid-cols-2 col-span-2 xl:col-span-1 gap-3">
                    <div class="xl:col-span-1">
                        <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">BHST
                            Cº</label>
                        <input type="number" name="bhst" value="{{ old('bhst') }}" class="form-control text-sm p-2"
                            placeholder="Cº" step=".01">
                    </div>

                    <div class="xl:col-span-1">
                        <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">BHCT
                            Cº</label>
                        <input type="number" name="bhct" value="{{ old('bhct') }}" class="form-control sz p-2"
                            placeholder="Cº" step=".01">
                    </div>
                </div>
            </div>

            <hr class="my-4">

            <p class="m-0 font-bold text-lg my-3 tracking-wide">Requerimientos de Lechada</p>

            <div class="grid grid-cols-5 gap-3">

                <div class="col-span-5 md:col-span-1">
                    <label for=""
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Reología</label>
                    <input type="text" name="reologia" value="{{ old('reologia') }}" class="form-control text-sm"
                        placeholder="Ingrese la reología">
                </div>

                <div class="col-span-5 md:col-span-1">
                    <label for=""
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Densidad</label>
                    <input type="text" name="densidad" value="{{ old('densidad') }}" class="form-control text-sm"
                        placeholder="Ingrese la densidad">
                </div>

                <div class="col-span-5 md:col-span-1">
                    <label for=""
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Filtrado</label>
                    <input type="text" name="filtrado" value="{{ old('filtrado') }}" class="form-control text-sm"
                        placeholder="Ingrese el filtrado">
                </div>

                <div class="col-span-5 md:col-span-1">
                    <label for=""
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Bombeabilidad</label>
                    <input type="text" name="bombeabilidad" value="{{ old('bombeabilidad') }}" class="form-control text-sm"
                        placeholder="Ingrese la bombeabilidad">
                </div>
            </div>

            <div class="grid gap-2 bg-gray-300 bg-opacity-20 p-2 my-3 border rounded-md">
                <label for="" class="text-sm mt-2 text-gray-700 font-semibold tracking-wide mb-2">Resistencia
                    a
                    la
                    Compresión</label>
                <p class="text-sm pb-1">Reportar a las 24 hr, bajo la siguiente consideración:</p>
                <div class="grid grid-cols-5 gap-2">
                    <div class="flex items-center gap-2 col-span-5 md:col-span-1">
                        <input type="checkbox" {{ old('tiempo_50_psi') ? 'checked' : '' }} name="tiempo_50_psi" id="tiempo_50_psi">
                        <label for="tiempo_50_psi" class="text-sm cursor-pointer">Tiempo @ 50 psi</label>
                    </div>
                    <div class="flex items-center gap-2 col-span-5 md:col-span-1">
                        <input type="checkbox" {{ old('tiempo_500_psi') ? 'checked' : '' }} name="tiempo_500_psi" id="tiempo_500_psi">
                        <label for="tiempo_500_psi" class="text-sm cursor-pointer">Tiempo @ 500 psi</label>
                    </div>
                    <div class="flex items-center gap-2 col-span-5 md:col-span-1">
                        <input type="checkbox" {{ old('resistencia_12_hs') ? 'checked' : '' }} name="resistencia_12_hs" id="resistencia_12_hs">
                        <label for="resistencia_12_hs" class="text-sm cursor-pointer">Resistencia a las 12 hs.</label>
                    </div>
                    <div class="flex items-center gap-2 col-span-5 md:col-span-1">
                        <input type="checkbox" {{ old('resistencia_24_hs') ? 'checked' : '' }} name="resistencia_24_hs" id="resistencia_24_hs">
                        <label for="resistencia_24_hs" class="text-sm cursor-pointer">Resistencia a las 24 hs.</label>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-4 gap-3 mt-2">
                <div class="col-span-4 md:col-span-1">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Agua
                        Libre</label>
                    <input type="text" name="agua_libre" value="{{ old('agua_libre') }}" class="form-control text-sm" placeholder="0.0%">
                </div>
                <div class="col-span-4 md:col-span-1">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">SGS</label>
                    <input type="text" name="sgs" value="{{ old('sgs') }}" class="form-control text-sm" placeholder="SGS">
                </div>
            </div>

            <div class="grid">
                <label for="" class="text-sm mt-3 text-gray-700 font-semibold tracking-wide mb-2">Formulación
                    Tentativa</label>

                <div class="grid grid-cols-4">
                    <div class="col-span-4 md:col-span-1">
                        <label for="" class="text-sm mt-3 text-gray-700 font-semibold tracking-wide mb-2">Tipo
                            de
                            Cemento</label>
                        <input type="text" name="tipo_cemento" value="{{ old('sgs') }}" class="form-control text-sm" placeholder="Ingrese el tipo de cemento">
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-3 text-center bg-gray-100 py-2 my-3">
                <p>Lote</p>
                <p>Aditivo</p>
                <p>Conc (% BWOC)</p>
            </div>
            <div id="container_formulaciones_tentativas">
                {{-- <div class="flex justify-between mb-2">
                    <button
                        class="bg-red-600 bg-opacity-70 border border-red-600 w-7 h-auto text-white flex justify-center items-center rounded-l-md hover:bg-red-500 cursor-pointer transition-all duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                        </svg>
                    </button>
                    <div class="w-full grid grid-cols-3 bg-gray-100 gap-3 p-2">
                        <input type="text" class="form-control text-xs rounded-l-none p-2 col-span-3 md:col-span-1"
                            placeholder="Lote">
                        <input type="text" class="form-control text-xs p-2 col-span-3 md:col-span-1"
                            placeholder="Aditivo">
                        <input type="text" class="form-control text-xs p-2 col-span-3 md:col-span-1"
                            placeholder="Concentración">
                    </div>
                </div> --}}
            </div>

            <div class="text-center mt-3">
                <button id="btnAddFormulacion"
                    class="text-sm mt-2 bg-gray-200 hover:bg-gray-300 text-gray-600 p-1 rounded-md px-3 border transition-all duration-200 border-gray-300">
                    Agregar Formulación
                </button>
            </div>

            {{-- <section id="section_desktop_requerimiento">
                @include('solicitud.components.lechada.desktop.requerimientos')
            </section> --}}

            {{-- <section id="section_movil_requerimiento">
                @include('solicitud.components.lechada.movil.requerimientos')
            </section> --}}

            <hr class="my-4">

            <p class="m-0 font-bold text-lg my-3 tracking-wide">Observación / Comentarios</p>

            <div class="grid mt-3">
                <div class="col-span-2 md:col-span-1">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Ingrese una
                        observación (Opcional)</label>
                    <textarea name="observacion_lechada" rows="5" class="form-control text-sm"
                        placeholder="Máximo 500 caracteres">{{ old('observacion_lechada') }}</textarea>
                </div>
            </div>

            <hr class="my-4">
            <p class="m-0 font-bold text-lg my-3 tracking-wide">Firma de Autorización para realizar el trabajo</p>

            <div class="grid grid-cols-2 gap-3 mt-3">
                <div class="grid">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">¿Quién
                        autoriza?</label>
                    <input type="text" class="form-control text-sm" value="{{ auth()->user()->nombre }} {{ auth()->user()->apellido }}" readonly>
                    </select>
                </div>

                <div>
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fecha de
                        Autorización</label>
                    <input type="date" name="fecha_autorizacion_autorizacion" class="form-control text-sm" value="@php echo date('Y-m-d') @endphp" readonly>
                </div>
            </div>

            <p class="m-0 font-bold text-lg my-3 tracking-wide">Reconocimiento de que el trabajo fue realizado</p>

            <div class="grid grid-cols-2 gap-3 mt-3">
                <div class="grid">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">¿Quién
                        reconoce el trabajo?</label>
                    <select name="firma_reconocimiento_lechada" id="firma_reconocimiento_lechada" data-search="true" data-silent-initial-value-set="true">
                        @foreach ($users as $u)
                        <option value="{{ $u->id }}" {{ old('firma_reconocimiento_lechada') == $u->id ? 'selected' : '' }}>{{ $u->nombre }} {{ $u->apellido }}</option>
                    @endforeach
                    </select>
                </div>

                <div>
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fecha de
                        Reconocimiento</label>
                    <input type="date" name="fecha_reconocimiento_lechada" value="{{ old('fecha_reconocimiento_lechada') }}" class="form-control text-sm">
                </div>
            </div>
        </div>
    </section>

    <div class="flex items-center gap-3 md:justify-end mt-4 px-3 md:px-auto">
        <button id="btnSubmitSolicitud"
            class="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold"
            data-bs-toggle="modal" data-bs-target="#modal_confirm_lechada" onclick="event.preventDefault()">Enviar
            Solicitud</button>
    </div>
    <br>

    <!-- Modal -->
    <div class="modal fade" id="modal_confirm_lechada" tabindex="-1" aria-hidden="true">
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
                    <button type="submit" id="btnSendSolicitudLechada" data-bs-dismiss="modal"
                        class="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-xs xl:text-sm">Confirmar</button>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Script para agregar una formulación tentativa cuando se escuche por un click -->
{{-- <script src="{{ asset('js/Solicitud/lechada.js') }}"></script> --}}
<script>
    
    document.addEventListener('DOMContentLoaded', () => {
        VirtualSelect.init({
          ele: "#cliente_lechada",
          placeholder: "Seleccione el cliente",
        });
        VirtualSelect.init({
          ele: "#tipo_requerimiento_lechada",
          placeholder: "Seleccione el tipo de requerimiento",
        });
        VirtualSelect.init({
          ele: "#tipo_trabajo_lechada",
          placeholder: "Seleccione el tipo de trabajo",
        });
        VirtualSelect.init({
          ele: "#tipo_cementacion_lechada",
          placeholder: "Seleccione el tipo de cementación",
        });
        
        VirtualSelect.init({
          ele: "#firma_reconocimiento_lechada",
          placeholder: "Seleccione quien reconoce",
        });
        VirtualSelect.init({
          ele: "#tipo_lodo",
          placeholder: "Seleccione el tipo de lodo",
        });
        document.getElementById("cliente_lechada").setValue(0);
        document.getElementById("tipo_requerimiento_lechada").setValue(0);
        document.getElementById("tipo_trabajo_lechada").setValue(0);
        document.getElementById("tipo_cementacion_lechada").setValue(0);
        document.getElementById("firma_reconocimiento_lechada").setValue(0);
        document.getElementById("tipo_lodo").setValue(0);
        
    })
    
</script>

<!-- Create formulación tentativa -->
<script>
    const container_formulaciones_tentativas = document.getElementById('container_formulaciones_tentativas');
    const btnAddFormulacion = document.getElementById('btnAddFormulacion');
    let aux_aditivo = 0
    btnAddFormulacion.addEventListener('click', e => {
        e.preventDefault();
        let flex, button, div, input;

        flex = el('div.flex justify-between mb-2')
        button = el('button.bg-red-600 bg-opacity-70 border border-red-600 w-7 h-auto text-white flex justify-center items-center rounded-l-md hover:bg-red-500 cursor-pointer transition-all duration-500', '-')
        div = el('div.w-full grid grid-cols-3 bg-gray-100 gap-3 p-2')
        
        // Lote
        input = el('input.form-control text-xs rounded-l-none p-2 col-span-3 md:col-span-1', {placeholder: 'Lote', 'name': `aditivos[${aux_aditivo}][lote]`})
        mount(div, input)

        // Aditivo
        input = el('input.form-control text-xs rounded-l-none p-2 col-span-3 md:col-span-1', {placeholder: 'Aditivo', 'name': `aditivos[${aux_aditivo}][aditivo]`})
        mount(div, input)
        
        // Concentración
        input = el('input.form-control text-xs rounded-l-none p-2 col-span-3 md:col-span-1', {placeholder: 'Concentración', 'name': `aditivos[${aux_aditivo}][concentracion]`})
        mount(div, input)

        mount(flex, button)
        mount(flex, div)
        mount(container_formulaciones_tentativas, flex)
        
        aux_aditivo++
    })

</script>

<script>
    // const ensayos = {!! json_encode($ensayos) !!}
    // const btnAddEnsayoRef = document.querySelector('#btnAddEnsayoRef');
    // const container_ensayo_referencia = document.querySelector('.container_ensayo_referencia');
    // let aux = 1;
    // btnAddEnsayoRef.addEventListener('click', e => {
    //     e.preventDefault();
    //     let div_grid, div, div_grid_second, second_div, select, input;

    //     div_grid = el('div.grid md:grid-cols-6 gap-3 mt-4 relative');

    //     // Seleccione el Ensayo
    //     div = el('div', el('label.text-sm text-gray-700 font-semibold tracking-wide mb-2', {
    //         for: 'ensayo_id'
    //     }, 'Seleccione el Ensayo'));
    //     select = el('select.form-select py-2 text-sm', {
    //         name: `ensayo_referencia[${aux}][ensayo_id]`,
    //         'data-aux': aux,
    //         id: 'ensayo_id',
    //     }, el('option', {
    //         value: ''
    //     }, '-- Seleccione --'));


    //     ensayos.forEach(e => {
    //         let option = el('option', {
    //             value: e.id
    //         }, `Ensayo Nº${e.id}`);
    //         mount(select, option);
    //     });
    //     let data_aux = select.getAttribute('data-aux');

    //     select.addEventListener('change', s => {
    //         if (select.value != '') {

    //             let ensayo_find = ensayos.filter(function(element) {
    //                 return element.id == select.value;
    //             });
    //             const {
    //                 id,
    //                 tvd,
    //                 md,
    //                 densidad_lechada,
    //                 grado_temperatura,
    //                 bhse,
    //                 bhct
    //             } = ensayo_find[0];

    //             let all_fields = document.querySelectorAll(`.testing_${data_aux}`);
    //             all_fields[0].value = tvd;
    //             all_fields[1].value = md;
    //             all_fields[2].value = densidad_lechada;
    //             all_fields[3].value = grado_temperatura;
    //             all_fields[4].value = bhse;
    //             all_fields[5].value = bhct;
    //         }
    //     })

    //     mount(div, select);
    //     mount(div_grid, div);

    //     // Top of Slurry (m)
    //     div = el('div.md:col-span-3 xl:col-span-2', el(
    //         'label.text-sm text-gray-700 font-semibold tracking-wide mb-2', 'Top of Slurry (m)'));
    //     div_grid_second = el('div.grid grid-cols-2 gap-2');
    //     input = el(`input.form-control text-sm p-2 testing_${data_aux} top_of_slurry_tvd_${data_aux}`, {
    //         min: '0',
    //         name: `ensayo_referencia[${aux}][top_of_slurry_tvd]`,
    //         placeholder: 'TVD',
    //         readonly: 'true'
    //     });
    //     mount(div_grid_second, input);
    //     input = el(`input.form-control text-sm p-2 testing_${data_aux}`, {
    //         min: '0',
    //         name: `ensayo_referencia[${aux}][top_of_slurry_md]`,
    //         placeholder: 'MD',
    //         readonly: 'true'
    //     });
    //     mount(div_grid_second, input);
    //     mount(div, div_grid_second);
    //     mount(div_grid, div);

    //     // Densidad
    //     div = el('div.md:col-span-2 xl:col-span-1', el(
    //         'label.text-sm text-gray-700 font-semibold tracking-wide mb-2', 'Densidad (m)'));
    //     input = el(`input.form-control text-sm p-2 testing_${data_aux}`, {
    //         placeholder: 'Ingrese la densidad',
    //         name: `ensayo_referencia[${aux}][densidad]`,
    //         readonly: 'true'
    //     });

    //     mount(div, input);
    //     mount(div_grid, div);

    //     // Grado de Temperatura
    //     div = el('div.md:col-span-2 xl:col-span-1', el(
    //         'label.text-sm text-gray-700 font-semibold tracking-wide mb-2', 'Grado de Temperatura (Cº)'
    //     ));
    //     input = el(`input.form-control text-sm p-2 testing_${data_aux}`, {
    //         placeholder: 'Ingrese la Temperatura ºC',
    //         name: `ensayo_referencia[${aux}][grado_temperatura]`,
    //         readonly: 'true'
    //     });
    //     mount(div, input);
    //     mount(div_grid, div);

    //     // BHCS
    //     div = el('div.grid col-span-1 grid-cols-2 gap-3');
    //     second_div = el('div', el('label.text-sm text-gray-700 font-semibold tracking-wide mb-2', 'BHCE Cº'));
    //     input = el(`input.form-control text-sm p-2 testing_${data_aux}`, {
    //         placeholder: 'BHCE',
    //         name: `ensayo_referencia[${aux}][bhce]`,
    //         readonly: 'true'
    //     });

    //     mount(second_div, input);
    //     mount(div, second_div);

    //     // BHCT
    //     second_div = el('div', el('label.text-sm text-gray-700 font-semibold tracking-wide mb-2', 'BHCT Cº'));
    //     input = el(`input.form-control text-sm p-2 testing_${data_aux}`, {
    //         placeholder: 'BHCT',
    //         name: `ensayo_referencia[${aux}][bhct]`,
    //         readonly: 'true'
    //     });
    //     mount(second_div, input);
    //     mount(div, second_div);

    //     mount(div_grid, div);

    //     // Requerimientos de Lechada


    //     // Botón de eliminar
    //     div = el(
    //         'div.w-6 h-6 absolute -top-4 right-0 bg-red-800 bg-opacity-70 rounded-full flex justify-center items-center'
    //     );
    //     let button = el('button.font-bold text-gray-300 rounded-full', 'X');
    //     button.addEventListener('click', b => {
    //         div_grid.remove();
    //     })
    //     mount(div, button);
    //     mount(div_grid, div);

    //     mount(container_ensayo_referencia, div_grid);
    //     aux++;
    // })
</script>

<!-- Cartel de carga mientras se carga el formulario de la solicitud -->
<script>
    // const btnSendSolicitudLechada = document.getElementById('btnSendSolicitudLechada');
    // btnSendSolicitudLechada.addEventListener('click', e => {
    //     loadingAlert('Creando la solicitud, por favor espere',
    //         'Se están enviando los correos desde el sistema');
    // })
</script>

<!-- Cartel que muestra que la solicitud fue creada/editada correctamente cuando se hace el submit -->
<script>
    // document.addEventListener('DOMContentLoaded', () => {
    //     if (screen.width <= 768) {
    //         document.getElementById('section_desktop_requerimiento').remove();
    //     } else {
    //         document.getElementById('section_movil_requerimiento').remove();
    //     }
    // });

    // @if ($message = session('success'))
    //     successAlert('¡Solicitud Creada!', 'La Solicitud de Lechada fue creada correctamente').then(
    //         (confirmed) => {
    //             window.location.replace('solicitudes');
    //         })
    // @endif
</script>
