<form action="" method="POST">
    @csrf
    <fieldset class="shadow border bg-gray-50 rounded-md ps-5">
        <legend class="fieldset_bg text-white rounded p-1 float-none">
            <h6 class="font-semibold m-0 text-lg ps-3">
                Informacion General <small>(Complete todos los que correspondan)</small>
            </h6>
        </legend>

        <section class="my-3 me-3">

            <span class="ms-2 mb-0 font-light tracking-wide">Datos del Pozo</span>
            <hr class="ms-2 mt-1">

            <div class="grid xs:grid-cols-2 md:grid-cols-3 gap-3 mt-3">
                <div class="col-span-2 xl:col-span-1">
                    <label for="cliente_lechada" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Cliente
                        <span class="text-red-500">*</span></label>
                    <select name="cliente_lechada" id="cliente_lechada" class="text-sm" data-search="true"
                        data-silent-initial-value-set="true" multiple="multiple">
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
                    <select name="locacion_lechada" id="locacion_lechada" class="text-sm" data-search="true" >
                        
                        @foreach ($yacimientos as $y)
                        <option value="{{ $y->id }}"
                            {{ old('locacion_lechada') == $y->id ? 'selected' : '' }}>{{ $y->nombre }}</option>
                    @endforeach
                    </select>
                    @error('locacion_lechada')
                        <small class="text-xs text-red-600">La locación es requerida</small>
                    @enderror
                </div>

                <div class="col-span-2 xl:col-span-1">
                    <label for="pozo" class="text-sm text-gray-700 font-semibold tracking-wide">Pozo
                        <small>(*)</small></label>
                    <input type="text" placeholder="Ingrese el pozo"
                        class="form-control sz placeholder:text-gray-300 placeholder:font-light" name="pozo"
                        id="pozo">
                    @error('pozo')
                        <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                    @enderror
                </div>

                <div class="col-span-2 xl:col-span-1">
                    <label for="equipo" class="text-sm text-gray-700 font-semibold tracking-wide">Equipo
                        <small>(*)</small></label>
                    <input type="text" placeholder="Ingrese el equipo"
                        class="form-control sz placeholder:text-gray-300 placeholder:font-light" name="equipo"
                        id="equipo">
                    @error('equipo')
                        <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                    @enderror
                </div>
                <!-- TODO Hay que agregar el Tipo de Lodo en la tabla SOLICITUD -->
                <div class="col-span-2 xl:col-span-1">
                    <label for="tipo_lodo" class="text-sm text-gray-700 font-semibold tracking-wide">Tipo de Lodo
                        <small>(*)</small></label>
                    <input type="text" placeholder="Ingrese el tipo de lodo"
                        class="form-control sz placeholder:text-gray-300 placeholder:font-light" name="tipo_lodo"
                        id="tipo_lodo">
                    @error('tipo_lodo')
                        <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                    @enderror
                </div>

                <div class="col-span-2 xl:col-span-1">
                    <label for="servicios_lodo" class="text-sm text-gray-700 font-semibold tracking-wide">Servicio
                        <small>(*)</small></label>
                    <select name="servicios_lodo" id="servicios_lodo" class="text-sm" data-search="true">
                            @foreach($servicios as $s)
                            <option value="{{$s->id}}"
                                {{old('servicios_lodo')== $s->id ? 'selected' : ''}}> {{$s->nombre}} </option>
                            @endforeach
                    </select>
                    @error('servicios_lodo')
                        <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                    @enderror
                </div>

                <div class="col-span-2 xl:col-span-1">
                    <label for="tipo_lodo" class="text-sm text-gray-700 font-semibold tracking-wide">Compañia de Lodo
                        <small>(*)</small></label>
                    <input type="text" placeholder="Ingrese el tipo de lodo"
                        class="form-control sz placeholder:text-gray-300 placeholder:font-light" name="tipo_lodo"
                        id="tipo_lodo">
                    @error('tipo_lodo')
                        <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                    @enderror
                </div>

                <div class="col-span-2 xl:col-span-1">
                    <label for="tipo_lodo" class="text-sm text-gray-700 font-semibold tracking-wide">Densidad del Lodo (ppg)
                        <small>(*)</small></label>
                        <input type="number" name="densidad_lodo" id="densidad_lodo"
                        value="{{ old('densidad_lodo') }}" class="form-control text-sm p-2"
                        placeholder="Densidad del lodo" step=".01">
                    @error('tipo_lodo')
                        <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                    @enderror
                </div>

            </div>

            <span class="ms-2 mb-0 font-light tracking-wide">Condiciones del Test</span>
            <hr class="ms-2 mt-1">
            
            <div class="row p-2">
                <div class="col-xs-12 col-md-3 my-2">
                    <label for="temperatura" class="text-sm text-gray-700 font-semibold tracking-wide">Temperatura °C
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
                <div class="col-xs-12 col-md-9 my-2 d-flex no-bot-padding">
                    <select name="cliente_lechada" id="cliente_lechada" class="text-sm" data-search="true"
                    data-silent-initial-value-set="true">
                    @foreach ($clientes as $c)
                        <option value="{{ $c->id }}"
                            {{ old('cliente_lechada') == $c->id ? 'selected' : '' }}>{{ $c->nombre }}</option>
                    @endforeach
                 <select name="cliente_lechada2" id="cliente_lechada2" class="text-sm" data-search="true"
                data-silent-initial-value-set="true">
                @foreach ($clientes as $d)
                    <option value="{{ $d->id }}"
                        {{ old('cliente_lechada') == $d->id ? 'selected' : '' }}>{{ $d->nombre }}</option>
                @endforeach 
                </div>
                    @error('profundidad')
                        <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                    @enderror
                </div>
            </div>
            <span class="ms-2 mb-0 font-light tracking-wide">Ensayos requeridos</span>
            <hr class="ms-2 mt-1">
                <div class="row p-2">
                    <div class="col-xs-12 col-md-3 my-2">
                        <label for="ensayos" class="text-sm text-gray-700 font-semibold tracking-wide">Ensayos Requeridos
                            <small>(*)</small></label>
                        <select name='ensayos' type="text" placeholder="Ingrese el ensayo"
                            class="form-control sz placeholder:text-gray-300 placeholder:font-light" name="ensayos"
                            id="ensayos" multiple='multiple'>
                        </select>
                        @error('ensayos')
                            <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                        @enderror
                    </div>
                
                 </div>


            <span class="ms-2 mb-0 font-light tracking-wide">Requerimientos de Lodo</span>
            <hr class="ms-2 mt-1">

                <div class="grid grid-cols-3 text-center bg-gray-100 py-2 my-3">
                    <p>Lote</p>
                    <p>Aditivo</p>
                    <p>Conc (% BWOC)</p>
                </div>
            <div id="container_formulaciones_tentativas"></div>

            <div class="text-center mt-3">
                <button id="btnAddFormulacion"
                    class="text-sm mt-2 bg-gray-200 hover:bg-gray-300 text-gray-600 p-1 rounded-md px-3 border transition-all duration-200 border-gray-300">
                    Agregar Formulación del Colchón
                </button>
            </div>

        <hr class="my-4">
        <span class="ms-2 mb-0 font-light tracking-wide">Colchon</span>
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
                    <input type="text" class="form-control text-sm"
                        value="{{ auth()->user()->nombre }} {{ auth()->user()->apellido }}" readonly>
                    </select>
                </div>

                <div>
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fecha de
                        Autorización</label>
                    <input type="date" name="fecha_autorizacion_autorizacion" class="form-control text-sm"
                        value="@php echo date('Y-m-d') @endphp" readonly>
                </div>
            </div>

            <p class="m-0 font-bold text-lg my-3 tracking-wide">Reconocimiento de que el trabajo fue realizado</p>

            <div class="grid grid-cols-2 gap-3 mt-3">
                <div class="grid">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">¿Quién
                        reconoce el trabajo?</label>
                    <select name="firma_reconocimiento_lechada" id="firma_reconocimiento_lechada" data-search="true"
                        data-silent-initial-value-set="true">
                        @foreach ($users as $u)
                            <option value="{{ $u->id }}"
                                {{ old('firma_reconocimiento_lechada') == $u->id ? 'selected' : '' }}>
                                {{ $u->nombre }} {{ $u->apellido }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fecha de
                        Reconocimiento</label>
                    <input type="date" name="fecha_reconocimiento_lechada"
                        value="{{ old('fecha_reconocimiento_lechada') }}" class="form-control text-sm">
                </div>
            </div>
        </section>
    </fieldset>
</form>

