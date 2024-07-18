<form action="{{ route('solicitud.lodo') }}" method="POST">
    @csrf
    <section class="card shadow-sm">
        <div class="card-header bg-white p-3">
            <p class="m-0">Formulario para crear una nueva solicitud de lodo</p>
        </div>
        <div class="card-body">
            <p class="m-0 font-bold text-lg tracking-wide">Información General</p>

                <div class="grid xs:grid-cols-2 md:grid-cols-4 gap-3 mt-3">
                    <div class="col-span-2 xl:col-span-1">
                        <label for="cliente_lodo" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Cliente
                            <span class="text-red-500">*</span></label>
                        <select name="cliente_lodo" id="cliente_lodo" class="text-sm" data-search="true"
                            data-silent-initial-value-set="true">
                            @foreach ($clientes as $c)
                                <option value="{{ $c->id }}"
                                    {{ old('cliente_lodo') == $c->id ? 'selected' : '' }}>{{ $c->nombre }}</option>
                            @endforeach
                        </select>
                        @error('cliente_lodo')
                            <small class="text-xs text-red-600">El cliente es requerido</small>
                        @enderror
                    </div>
    
                    <div class="col-span-2 xl:col-span-1">
                        <label for="locacion_lodo" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Yacimiento /
                            Locación
                            <span class="text-red-500">*</span></label>
                        <select name="locacion_lodo" id="locacion_lodo" class="text-sm" data-search="true" data-silent-initial-value-set="true" >  
                            @foreach ($yacimientos as $y)
                            <option value="{{ $y->id }}"
                                {{ old('locacion_lodo') == $y->id ? 'selected' : '' }}>{{ $y->nombre }}</option>
                        @endforeach
                        </select>
                        @error('locacion_lodo')
                            <small class="text-xs text-red-600">La locación es requerida</small>
                        @enderror
                    </div>
    
                    <div class="col-span-2 xl:col-span-1">
                        <label for="pozo_lodo" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Pozo
                            <small>(*)</small></label>
                        <input type="text" placeholder="Ingrese el pozo"
                            class="form-control sz placeholder:text-gray-300 placeholder:font-light" name="pozo_lodo"
                            id="pozo_lodo">
                        @error('pozo_lodo')
                            <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                        @enderror
                    </div>
    
                    <div class="col-span-2 xl:col-span-1">
                        <label for="equipo_lodo" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Equipo
                            <small>(*)</small></label>
                            <select name="equipo_lodo" id="equipo_lodo" class="text-sm" data-search="true" data-silent-initial-value-set="true" multiple="false">
                                @foreach($equipos as $eq)
                                <option value="{{$eq->id}}"
                                    {{ old('equipo_lodo') == $eq->id ? 'selected' : '' }}>{{ $eq->nombre }}</option>
                                @endforeach
                            </select>
                        @error('equipo_lodo')
                            <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                        @enderror
                    </div>
    
                    <div class="col-span-2 xl:col-span-1">
                        <label for="tipo_lodo" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Tipo de Lodo
                            <small>(*)</small></label>
                            <select name="tipo_lodo" id="tipo_lodo" class="text-sm" data-search="true" data-silent-initial-value-set="true" multiple="false">
                                @foreach($tipo_lodo_Lodos as $tl)
                                <option value="{{$tl->id}}"
                                    {{ old('tipo_lodo') == $tl->id ? 'selected' : '' }}>{{ $tl->nombre }}</option>
                                @endforeach
                            </select>
                        @error('tipo_lodo')
                            <small class="text-xs text-red-700 font-semibold"><em>{{ $message }}</em></small>
                        @enderror
                    </div>
    
                    <div class="col-span-2 xl:col-span-1">
                        <label for="servicios_lodo" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Servicio
                            <small>(*)</small></label>
                        <select name="servicios_lodo" id="servicios_lodo" class="text-sm" data-search="true"  data-silent-initial-value-set="true" >
                                @foreach($servicios as $sv)
                                <option value="{{$sv->id}}"
                                    {{ old('servicios_lodo') == $sv->id ? 'selected' : '' }}> {{$sv->nombre}}</option>
                                @endforeach
                        </select>
                        @error('servicios_lodo')
                            <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                        @enderror
                    </div>
    
                    <div class="col-span-2 xl:col-span-1">
                        <label for="mud_company" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Compañia de Lodo
                            <small>(*)</small></label>
                            <select name="mud_company" id="mud_company" class="text-sm" data-search="true"  data-silent-initial-value-set="true" multiple="false" >
                                @foreach($mud_company as $mc)
                                <option value="{{$mc->id}}"
                                    {{ old('mud_company') == $mc->id ? 'selected' : '' }}> {{$mc->nombre}}</option>
                                @endforeach
                        </select>
                        @error('mud_company')
                            <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                        @enderror
                    </div>
    
                    <div class="col-span-2 xl:col-span-1">
                        <label for="densidad_lodo_3" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Densidad del Lodo (ppg)
                            <small>(*)</small></label>
                            <input type="number" name="densidad_lodo_3" id="densidad_lodo_3"
                            value="{{ old('densidad_lodo_3') }}" class="form-control text-sm p-2"
                            placeholder="Ingrese la densidad del lodo" step=".01">
                        @error('densidad')
                            <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                        @enderror
                    </div>
                </div>

                <hr class="my-4">

                <p class="m-0 font-bold text-lg my-3 tracking-wide">Condiciones del Test</p>

                <div class="row p-2">
                    <div class="col-xs-12 col-md-3 my-2">
                        <label for="temperatura" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Temperatura °C
                            <small>(*)</small></label>
                        <input type="text" placeholder="Ingrese la temperatura"
                            class="form-control sz placeholder:text-gray-300 placeholder:font-light" name="temperatura"
                            id="temperatura">
                        @error('temperatura')
                            <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                        @enderror
                    </div>
    
                    <div class="col-xs-12 col-md-3 my-2" style="display: flex flex-direction: column; ">
                        <label for="profundidad" class="text-sm text-gray-700 font-semibold tracking-wide">Profundidad
                            <small>(*)(MD/TVD)(m)</small></label>
                    <div class="col-xs-12 col-md-9 my-2 d-flex no-bot-padding ">
                        <input type="text" placeholder="MD"
                            class="form-control sz placeholder:text-gray-300 placeholder:font-light" name="profundidad_md"
                            id="profundidad_md" style="margin-right: 10px;">
                        
                        <input type="text" placeholder="TVD"
                            class="form-control sz placeholder:text-gray-300 placeholder:font-light" name="profundidad_tvd"
                            id="profundidad_tvd" style="margin-left: 10px;">
                    </div>
                        @error('profundidad')
                            <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                        @enderror
                    </div>
                </div>

                <hr class="my-4">
                
                <p class="m-0 font-bold text-lg my-3 tracking-wide">Ensayo Referencia</p>

                <section class="container_ensayo_referencia_lodo rounded-md">
                </section>
                <div class="text-center mt-3">
                    <button id="btnAddEnsayoRef_lodo"
                        class="text-sm mt-2 bg-gray-200 hover:bg-gray-300 text-gray-600 p-1 rounded-md border transition-all duration-200 border-gray-300">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg> --}}
                        Agregar Ensayo de Referencia
                    </button>
                </div>

                <hr class="my-4">

                <p class="m-0 font-bold text-lg my-3 tracking-wide">Ensayo Requeridos</p>

                <div class="row p-2">
                    <div class="col-xs-12 col-md-6 my-2">
                        
                        <select name='ensayos' id="ensayos" class="text-sm" data-search="true"  data-silent-initial-value-set="true" multiple="true">
                        @foreach($ensayos_lodo as $sl)
                        <option value="{{$sl->id}}"
                            {{ old('ensayos_lodo') == $sl->id ? 'selected' : '' }}> {{$sl->nombre}}</option>
                        @endforeach
                    </select>

                        @error('ensayos')
                            <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                        @enderror
                    </div>
                
                 </div>

                <hr class="my-4">

                <p class="m-0 font-bold text-lg my-3 tracking-wide">Requerimientos del Colchon</p>
                <div class="grid grid-cols-3 text-center bg-gray-100 py-2 my-3">
                    <p>Lote</p>
                    <p>Aditivo</p>
                    <p>Conc (% BWOC)</p>
                </div>
                 <div id="container_formulaciones_tentativas_lodo"></div>

                <div class="text-center mt-3">
                    <button id="btnAddFormulacionLodo"
                        class="text-sm mt-2 bg-gray-200 hover:bg-gray-300 text-gray-600 p-1 rounded-md px-3 border transition-all duration-200 border-gray-300">
                        Agregar Formulación del Colchón
                    </button>
                </div>

                <hr class="my-4">

                <p class="m-0 font-bold text-lg my-3 tracking-wide">Colchon</p>

                <div class="grid xs:grid-cols-2 md:grid-cols-3 gap-3 mt-3">
                    <div class="col-span-2 xl:col-span-1">
                        <label for="vol_colchon" class="text-sm text-gray-700 font-semibold tracking-wide">Volumen de Colchón
                            <small>(bbl)</small></label>
                        <input type="text" placeholder="Ingrese el volumen de Colchón"
                            class="form-control sz placeholder:text-gray-300 placeholder:font-light" name="vol_colchon"
                            id="vol_colchon">
                        @error('vol_colchon')
                            <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                        @enderror
                    </div>
                
                    <div class="col-span-2 xl:col-span-1">
                        <label for="densidad_colchon" class="text-sm text-gray-700 font-semibold tracking-wide">Densidad de Colchón
                            <small>(ppg)</small></label>
                        <input type="text" placeholder="Ingrese la densidad de Colchón"
                            class="form-control sz placeholder:text-gray-300 placeholder:font-light" name="densidad_colchon"
                            id="densidad_colchon">
                        @error('densidad_colchon')
                            <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                        @enderror
                    </div>
        
                    <div class="col-span-2 xl:col-span-1">
                        <label for="tiempo_contacto" class="text-sm text-gray-700 font-semibold tracking-wide">Tiempo de contacto
                            <small>(min)</small></label>
                        <input type="text" placeholder="Ingrese el tiempo de contacto"
                            class="form-control sz placeholder:text-gray-300 placeholder:font-light" name="tiempo_contacto"
                            id="tiempo_contacto">
                        @error('tiempo_contacto')
                            <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                        @enderror
                    </div>
                </div>
        
                <hr class="my-4">

                <p class="m-0 font-bold text-lg my-3 tracking-wide">Observación / Comentarios</p>

                <div class="grid mt-3">
                    <div class="col-span-2 md:col-span-1">
                        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Ingrese una
                            observación (Opcional)</label>
                        <textarea name="observacion_lodo" rows="5" class="form-control text-sm"
                            placeholder="Máximo 500 caracteres">{{ old('observacion_lodo') }}</textarea>
                    </div>
                </div>

                <hr class="my-4">

                <p class="m-0 font-bold text-lg my-3 tracking-wide">Firma de Autorización para realizar el trabajo</p>
                <div class="grid grid-cols-2 gap-3 mt-3">
                    <div class="grid">
                        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">¿Quién
                            autoriza?</label>
                        <input type="text" class="form-control text-sm"
                            value="{{ auth()->user()->nombre }} {{ auth()->user()->apellido }}" readonly>
                        </select>
                    </div>
    
                    <div>
                        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fecha de
                            Autorización</label>
                        <input type="date" name="fecha_autorizacion_lodo" class="form-control text-sm"
                            value="@php echo date('Y-m-d') @endphp" readonly>
                    </div>
                </div>
    
                <p class="m-0 font-bold text-lg my-3 tracking-wide">Reconocimiento de que el trabajo fue realizado</p>
    
                <div class="grid grid-cols-2 gap-3 mt-3">
                    <div class="grid">
                        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">¿Quién
                            reconoce el trabajo?</label>
                        <select name="firma_reconocimiento_lodo" id="firma_reconocimiento_lodo" data-search="true"
                            data-silent-initial-value-set="true">
                            @foreach ($users as $u)
                                <option value="{{ $u->id }}"
                                    {{ old('firma_reconocimiento_lodo') == $u->id ? 'selected' : '' }}>
                                    {{ $u->nombre }} {{ $u->apellido }}</option>
                            @endforeach
                        </select>
                    </div>
    
                    <div>
                        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fecha de
                            Reconocimiento</label>
                        <input type="date" name="fecha_reconocimiento_lodo"
                            value="{{ old('fecha_reconocimiento_lodo') }}" class="form-control text-sm">
                    </div>
                </div>
        </div>    
    </section>
        <!-- ACA TERMINA EL COSO -->
        <div class="flex items-center gap-3 md:justify-end mt-4 px-3 md:px-auto">
            <button id="btnSubmitSolicitudLodo"
            class="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold">
            Enviar
            Solicitud
            </button>
        </div>
   
</form>
<script src="{{ asset('js/Solicitud/lodo/aditivos_lodo.js') }}"></script>
@include('solicitud.components.lodo.modal_confirmar_solicitud')

<script>
    document.addEventListener('DOMContentLoaded', () => {
        VirtualSelect.init({
            ele: "#cliente_lodo",
            placeholder: "Seleccione el cliente",
        });
        VirtualSelect.init({
            ele: "#locacion_lodo",
            placeholder: "Seleccione la Locación",
        });
        VirtualSelect.init({
            ele: "#equipo_lodo",
            placeholder: "Seleccione el equipo",
        });
        VirtualSelect.init({
            ele: "#tipo_lodo",
            placeholder: "Seleccione el tipo de lodo",
        });
        VirtualSelect.init({
            ele: "#servicios_lodo",
            placeholder: "Seleccione el servicio",
        });
        VirtualSelect.init({
            ele: "#mud_company",
            placeholder: "Seleccione la compañia de lodo",
        });
        VirtualSelect.init({
            ele: "#ensayos",
            placeholder: "Seleccione los ensayos",
        });
        VirtualSelect.init({
            ele: "#firma_reconocimiento_lodo",
            placeholder: "Seleccione quien reconoce",
        });
             
        document.getElementById("cliente_lodo").setValue(0);
        document.getElementById("locacion_lodo").setValue(0);
        document.getElementById("equipo_lodo").setValue(0);
        document.getElementById("tipo_lodo").setValue(0);
        document.getElementById("servicios_lodo").setValue(0);
        document.getElementById("mud_company").setValue(0);
        document.getElementById("ensayos").setValue(0);
        document.getElementById("firma_reconocimiento_lodo").setValue(0);

    })
</script>

