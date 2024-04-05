<form action="" method="POST">
    @csrf

    <section class="card shadow-sm">
        <div class="card-header bg-white p-3">
            <p class="m-0">Formulario para crear una nueva solicitud de lechada</p>
        </div>
        <div class="card-body">
            <p class="m-0 font-bold text-lg tracking-wide">Información General</p>

            <div class="grid sm:grid-cols-2 xl:grid-cols-6 gap-3 mt-3">
                <div class="col-span-2 xl:col-span-1">
                    <label for="cliente" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Cliente <span
                            class="text-red-500">*</span></label>
                    <select name="cliente" id="cliente" class="form-select sz p-2">
                        <option value="">-- Seleccione --</option>
                        @foreach ($clientes as $c)
                            <option value="{{ $c->id }}">{{ $c->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-span-2 xl:col-span-1">
                    <label for="yacimiento" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Yacimiento
                        <span class="text-red-500">*</span></label>
                    <select name="yacimiento" id="yacimiento" class="form-select sz p-2">
                        <option value="">-- Seleccione --</option>
                        @foreach ($yacimientos as $y)
                            <option value="{{ $y->id }}">{{ $y->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-span-2 xl:col-span-1">
                    <label for="programa" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Programa <span
                            class="text-red-500">*</span></label>
                    <input type="text" name="programa" id="programa" class="form-control sz p-2"
                        placeholder="Programa">
                </div>
                <div class="col-span-2 xl:col-span-1">
                    <label for="fecha_solicitud" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fecha de
                        Solicitud <span class="text-red-500">*</span></label>
                    <input type="date" name="fecha_solicitud" id="fecha_solicitud" class="form-control sz p-2">
                </div>
                <div class="col-span-2">
                    <label for="empresa" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Empresa <span
                            class="text-red-500">*</span></label>
                    <input type="text" name="empresa" id="empresa" class="form-control sz p-2"
                        placeholder="Empresa / Compañía">
                </div>
            </div>

            <div class="grid xl:grid-cols-6 gap-3 mt-3">
                <div class="col-span-2 xl:col-span-1">
                    <label for="fecha_tratamiento" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fecha
                        de Tratamiento <span class="text-red-500">*</span></label>
                    <input type="date" name="fecha_tratamiento" id="fecha_tratamiento" class="form-control sz p-2">
                </div>

                <div class="col-span-2 xl:col-span-1">
                    <label for="pozo" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Pozo <span
                            class="text-red-500">*</span></label>
                    <input type="text" name="pozo" id="pozo" class="form-control sz p-2" placeholder="Pozo">
                </div>

                <div class="col-span-2 xl:col-span-1">
                    <label for="fecha_reporte" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fecha de
                        Reporte <span class="text-red-500">*</span></label>
                    <input type="date" name="fecha_reporte" id="fecha_reporte" class="form-control sz p-2">
                </div>

                <div class="col-span-2 xl:col-span-1">
                    <label for="fecha_resultado" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fecha de
                        Resultados <span class="text-red-500">*</span></label>
                    <input type="date" name="fecha_resultado" id="fecha_resultado" class="form-control sz p-2">
                </div>

                <div class="col-span-2 xl:col-span-1">
                    <label for="equipo" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Equipo <span
                            class="text-red-500">*</span></label>
                    <input type="text" name="equipo" id="equipo" class="form-control sz p-2"
                        placeholder="Ingrese el equipo">
                </div>

                <div class="col-span-2 xl:col-span-1">
                    <label for="servicio" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Servicio <span
                            class="text-red-500">*</span></label>
                    <input type="text" name="servicio" id="servicio" class="form-control sz p-2"
                        placeholder="Ingrese el servicio">
                </div>
            </div>

            <div class="grid xl:grid-cols-6 gap-3 mt-3">
                <div class="col-span-2 xl:col-span-1">
                    <label for="equipo" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Reporte
                        Laboratorio Tall <span class="text-red-500">*</span></label>
                    <input type="text" name="equipo" id="equipo" class="form-control sz p-2"
                        placeholder="Ingrese el reporte">
                </div>

                <div class="col-span-2 xl:col-span-1">
                    <label for="servicio" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Reporte
                        Laboratorio Lead <span class="text-red-500">*</span></label>
                    <input type="text" name="servicio" id="servicio" class="form-control sz p-2"
                        placeholder="Ingrese el reporte">
                </div>

                <div class="col-span-2 xl:col-span-1">
                    <label for="tipo_trabajo" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Tipo de
                        Trabajo <span class="text-red-500">*</span></label>
                    <select name="tipo_trabajo" id="tipo_trabajo" class="form-select sz p-2">
                        <option value="">-- Seleccione --</option>
                        {{-- @foreach ($tipo_trabajo as $tipo)
                            <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                        @endforeach --}}
                    </select>
                </div>

                <div class="col-span-2 xl:col-span-1">
                    <label for="tipo_cementacion" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Tipo
                        de Cementación <span class="text-red-500">*</span></label>
                    <select name="tipo_cementacion" id="tipo_cementacion" class="form-select sz p-2">
                        <option value="">-- Seleccione --</option>
                        {{-- @foreach ($tipo_trabajo as $tipo)
                            <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                        @endforeach --}}
                    </select>
                </div>

                <div class="col-span-2 xl:col-span-1">
                    <label for="ensayo_requerido"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Ensayos Requeridos <span
                            class="text-red-500">*</span></label>
                    <select name="ensayo_requerido" id="ensayo_requerido" class="form-select sz p-2">
                        <option value="">-- Seleccione --</option>
                        {{-- @foreach ($tipo_trabajo as $tipo)
                        <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                    @endforeach --}}
                    </select>
                </div>
            </div>

            <hr class="my-4">

            <p class="m-0 font-bold text-lg my-3 tracking-wide">Ensayo Referencia</p>
            <div class="grid xl:grid-cols-6 gap-3 mt-3">

                <div>
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Top
                        of Slurry (m)</label>
                    <div class="grid grid-cols-2 gap-2">
                        <input type="text" name="" id="" class="form-control sz p-2"
                            placeholder="TVD">
                        <input type="text" class="form-control sz P-2" placeholder="MD" name="cliente"
                            id="cliente">
                    </div>
                </div>

                <div>
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Densidad
                        (m)</label>
                    <input type="text" name="" id="" class="form-control sz p-2"
                        placeholder="Ingrese la densidad">
                </div>

                <div>
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Grado de
                        Temperatura (Cº)</label>
                    <input type="text" name="" id="" class="form-control sz p-2"
                        placeholder="Ingrese la densidad">
                </div>

                <div>
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">BHCS</label>
                    <input type="text" name="" id="" class="form-control sz p-2"
                        placeholder="BHCS">
                </div>

                <div>
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">BHCT</label>
                    <input type="text" name="" id="" class="form-control sz p-2"
                        placeholder="BHCT">
                </div>
            </div>

            <hr class="my-4">

            <p class="m-0 font-bold text-lg my-3 tracking-wide">Ensayo Solicitado</p>
            <div class="grid xl:grid-cols-5 gap-3 mt-3">
                <div class="">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">OH /
                        Trepano</label>
                    <input type="text" name="" id="" class="form-control sz p-2"
                        placeholder="OH / Trepano">
                </div>

                <div class="">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Casing ID y
                        OD</label>
                    <input type="text" name="" id="" class="form-control sz p-2"
                        placeholder="Casing ID y OD">
                </div>

                <div class="">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Lodo</label>
                    <input type="text" name="" id="" class="form-control sz p-2"
                        placeholder="Lodo">
                </div>

                <div class="">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Profundidad
                        Pozo (MD / TVD)</label>
                    <input type="text" name="" id="" class="form-control sz p-2"
                        placeholder="OH / Trepano">
                </div>

                <div class="">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Base (MD /
                        TVD)</label>
                    <input type="text" name="" id="" class="form-control sz p-2"
                        placeholder="OH / Trepano">
                </div>

                <div class="">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Top of Slurry
                        (TVD / MD)</label>
                    <input type="text" name="" id="" class="form-control sz p-2"
                        placeholder="Top of Slurry (TVD / MD)">
                </div>

                <div class="">
                    <label for=""
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Volumen</label>
                    <input type="text" name="" id="" class="form-control sz p-2"
                        placeholder="Volumen">
                </div>

                <div class="">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Pump
                        Rate</label>
                    <input type="text" name="" id="" class="form-control sz p-2"
                        placeholder="Pump Rate">
                </div>

                <div class="">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Grado de
                        Temperatura Cº</label>
                    <input type="text" name="" id="" class="form-control sz p-2"
                        placeholder="Cº">
                </div>

                <div class="grid grid-cols-2 gap-2">
                    <div>
                        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">BHST
                            Cº</label>
                        <input type="text" name="" id="" class="form-control sz p-2"
                            placeholder="Cº">
                    </div>
    
                    <div class="">
                        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">BHCT
                            Cº</label>
                        <input type="text" name="" id="" class="form-control sz p-2"
                            placeholder="Cº">
                    </div>
                </div>
            </div>

            <hr class="my-4">

            <p class="m-0 font-bold text-lg my-3 tracking-wide">Requerimientos de Lechada</p>

            <div class="grid items-center gap-3">
                <div class="grid grid-cols-3">
                    <div></div>
                    <div class="col-span-2 grid grid-cols-2">
                        <div class="flex gap-2 items-center">
                            Principal
                            <input type="radio">
                        </div>
                        <div class="flex gap-2 items-center">
                            Relleno
                            <input type="radio">
                        </div>
                    </div>
                    <div></div>
                </div>

                <!-- Reología -->
                <div class="grid grid-cols-3">
                    <div class="flex items-center gap-3">
                        <div class="w-4 h-4 xl:w-6 xl:h-6 bg-gray-400 dark:bg-gray-700 rounded-full flex justify-center text-white items-center">
                            <span>
                                1
                            </span>
                        </div>
                        <h5 class="tracking-wide">Reología</h5>
                    </div>

                    <div class="col-span-2 grid grid-cols-2 gap-3">
                        <input type="text" class="form-control text-sm" placeholder="Ingrese la reología principal">
                        <input type="text" class="form-control text-sm" placeholder="Ingrese la reología relleno">
                    </div>
                </div>

                <!-- Densidad -->
                <div class="grid grid-cols-3">
                    <div class="flex items-center gap-3">
                        <div class="w-4 h-4 xl:w-6 xl:h-6 bg-gray-400 dark:bg-gray-700 rounded-full flex justify-center text-white items-center">
                            <span>
                                2
                            </span>
                        </div>
                        <h5 class="tracking-wide">Densidad</h5>
                    </div>

                    <div class="col-span-2 grid grid-cols-2 gap-3">
                        <input type="text" class="form-control text-sm" placeholder="Ingrese la densidad principal">
                        <input type="text" class="form-control text-sm" placeholder="Ingrese la densidad de relleno">
                    </div>
                </div>

                <!-- Filtrado -->
                <div class="grid grid-cols-3">
                    <div class="flex items-center gap-3">
                        <div class="w-4 h-4 xl:w-6 xl:h-6 bg-gray-400 dark:bg-gray-700 rounded-full flex justify-center text-white items-center">
                            <span>
                                3
                            </span>
                        </div>
                        <h5 class="tracking-wide">Filtrado</h5>
                    </div>

                    <div class="col-span-2 grid grid-cols-2 gap-3">
                        <input type="text" class="form-control text-sm" placeholder="Ingrese el filtrado principal">
                        <input type="text" class="form-control text-sm" placeholder="Ingrese el filtrado de relleno">
                    </div>
                </div>

                <!-- Bombeabilidad -->
                <div class="grid grid-cols-3">
                    <div class="flex items-center gap-3">
                        <div class="w-4 h-4 xl:w-6 xl:h-6 bg-gray-400 dark:bg-gray-700 rounded-full flex justify-center text-white items-center">
                            <span>
                                3
                            </span>
                        </div>
                        <h5 class="tracking-wide">Bombeabilidad</h5>
                    </div>

                    <div class="col-span-2 grid grid-cols-2 gap-3">
                        <input type="text" class="form-control text-sm" placeholder="Ingrese la bombeabilidad principal">
                        <input type="text" class="form-control text-sm" placeholder="Ingrese la bombeabilidad de relleno">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
</form>
