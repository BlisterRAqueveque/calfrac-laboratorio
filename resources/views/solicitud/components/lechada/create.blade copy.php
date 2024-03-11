<form action="" method="POST">
    @csrf
    <fieldset class="shadow border bg-gray-50 rounded-md ps-5">
        <legend class="fieldset_bg text-white rounded p-1 float-none">
            <h6 class="font-semibold m-0 text-lg ps-3">
                Informacion General <small>(Complete todos los que correspondan)</small>
            </h6>
        </legend>

        <section class="my-3 me-3">

            {{-- <span class="ms-2 mb-0 font-light tracking-wide">Datos del Pozo</span>
            <hr class="ms-2 mt-1"> --}}

            <div class="row p-2">
                <div class="col-xs-12 col-md-3 my-2">
                    <label for="cliente" class="text-sm text-gray-700 font-semibold tracking-wide">Cliente
                        <small>(*)</small></label>
                    <input type="text" class="form-control sz placeholder:text-gray-300 placeholder:font-light"
                        placeholder="Ingrese el cliente" name="cliente" id="cliente">
                    @error('cliente')
                        <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                    @enderror
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="locacion" class="text-sm text-gray-700 font-semibold tracking-wide">Yacimiento /
                        Locación <small>(*)</small></label>
                    <input type="text" placeholder="Ingrese el yacimiento"
                        class="form-control sz placeholder:text-gray-300 placeholder:font-light" name="locacion"
                        id="locacion">
                    @error('locacion')
                        <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                    @enderror
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="programa" class="text-sm text-gray-700 font-semibold tracking-wide">Programa
                        <small>(*)</small></label>
                    <input type="text" placeholder="Ingresar el programa"
                        class="form-control sz placeholder:text-gray-300 placeholder:font-light" name="programa"
                        id="programa">
                    @error('programa')
                        <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                    @enderror
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="fecha-solicitud" class="text-sm text-gray-700 font-semibold tracking-wide">Fecha de
                        Solicitud <small>(*)</small></label>
                    <input type="date" class="form-control sz" name="fecha_solicitud" id="fecha-solicitud">
                    @error('fecha_solicitud')
                        <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                    @enderror
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="empresa" class="text-sm text-gray-700 font-semibold tracking-wide">Empresa
                        <small>(*)</small></label>
                    <input type="text" placeholder="Ingresar la empresa"
                        class="form-control sz placeholder:text-gray-300 placeholder:font-light" name="empresa"
                        id="empresa">
                    @error('empresa')
                        <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                    @enderror
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="fecha-tratamiento" class="text-sm text-gray-700 font-semibold tracking-wide">Fecha de
                        Tratamiento <small>(*)</small></label>
                    <input type="date" class="form-control sz" name="fecha_tratamiento" id="fecha-tratamiento">
                    @error('fecha_tratamiento')
                        <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                    @enderror
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="pozo" class="text-sm text-gray-700 font-semibold tracking-wide">Pozo
                        <small>(*)</small></label>
                    <input type="text" placeholder="Ingresar el pozo"
                        class="form-control sz placeholder:text-gray-300 placeholder:font-light" name="pozo"
                        id="pozo">
                    @error('pozo')
                        <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                    @enderror
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="fecha-reporte" class="text-sm text-gray-700 font-semibold tracking-wide">Fecha de
                        Reporte <small>(*)</small></label>
                    <input type="date" class="form-control sz" name="fecha_reporte" id="fecha-reporte">
                    @error('fecha_reporte')
                        <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                    @enderror
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="fecha-resultados" class="text-sm text-gray-700 font-semibold tracking-wide">Fecha de
                        Resultados <small>(*)</small></label>
                    <input type="date" class="form-control sz" name="fecha_resultados" id="fecha-resultados">
                    @error('fecha_resultados')
                        <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                    @enderror
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="equipo" class="text-sm text-gray-700 font-semibold tracking-wide">Equipo
                        <small>(*)</small></label>
                    <input type="text" placeholder="Ingresar el equipo"
                        class="form-control sz placeholder:text-gray-300 placeholder:font-light" name="equipo"
                        id="equipo">
                    @error('equipo')
                        <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                    @enderror
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="servicio" class="text-sm text-gray-700 font-semibold tracking-wide">Servicio
                        <small>(*)</small></label>
                    <input type="text" placeholder="Ingresar el servicio"
                        class="form-control sz placeholder:text-gray-300 placeholder:font-light" name="servicio"
                        id="servicio">
                    @error('servicio')
                        <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                    @enderror
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="reporte-lab-tall" class="text-sm text-gray-700 font-semibold tracking-wide">Reporte
                        Laboratorio Tall <small>(*)</small></label>
                    <input type="text" placeholder="Reporte Tall"
                        class="form-control sz placeholder:text-gray-300 placeholder:font-light"
                        name="reporte_lab_tall" id="reporte-lab-tall">
                    @error('reporte_lab_tall')
                        <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                    @enderror
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="reporte-lab-lead" class="text-sm text-gray-700 font-semibold tracking-wide">Reporte
                        Laboratorio Lead <small>(*)</small></label>
                    <input type="text" placeholder="Reporte Lead"
                        class="form-control sz placeholder:text-gray-300 placeholder:font-light"
                        name="reporte_lab_lead" id="reporte-lab-lead">
                    @error('reporte_lab_lead')
                        <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                    @enderror
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="tipo-trabajo" class="text-sm text-gray-700 font-semibold tracking-wide">Tipo de
                        Trabajo <small>(*)</small></label>
                    <select name="tipo_trabajo" id="tipo-trabajo" class="form-control sz">
                        <option value="">-- Seleccione --</option>
                    </select>
                    @error('tipo_trabajo')
                        <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                    @enderror
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="tipo-cementacion" class="text-sm text-gray-700 font-semibold tracking-wide">Tipo de
                        Cementación <small>(*)</small></label>
                    <select name="tipo_cementacion" id="tipo-cementacion" class="form-control sz">
                        <option value="">-- Seleccione --</option>
                    </select>
                    @error('tipo_cementacion')
                        <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                    @enderror
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="ensayo-requerido" class="text-sm text-gray-700 font-semibold tracking-wide">Ensayos
                        Requeridos <small>(*)</small></label>
                    <select name="ensayo_requerido" id="ensayo-requerido" class="form-control sz">
                        <option value="">-- Seleccione --</option>
                    </select>
                    @error('ensayo_requerido')
                        <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                    @enderror
                </div>

            </div>
        </section>
    </fieldset>

    <fieldset class="shadow border bg-gray-50 rounded-md ps-5 mt-4">
        <legend class="fieldset_bg text-white rounded p-1 float-none">
            <h6 class="font-semibold m-0 text-lg ps-3">
                Ensayo de Referencia <small>(Complete todos los que correspondan)</small>
            </h6>
        </legend>

        <section class="my-3 me-3">
            <div class="row p-2">
                <div class="col-xs-12 col-md-3 my-2">
                    <label for="cliente" class="text-sm text-gray-700 font-semibold tracking-wide">Top of Slurry (m)</label>
                    <div class="flex gap-3">
                        <input type="text" class="form-control sz placeholder:text-gray-300 placeholder:font-light"
                            placeholder="TVD" name="cliente" id="cliente">
                        <input type="text" class="form-control sz placeholder:text-gray-300 placeholder:font-light"
                            placeholder="MD" name="cliente" id="cliente">
                    </div>
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="cliente" class="text-sm text-gray-700 font-semibold tracking-wide">Densidad (m)</label>
                    <input type="text" class="form-control sz placeholder:text-gray-300 placeholder:font-light"
                        placeholder="Ingrese la densidad">
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="cliente" class="text-sm text-gray-700 font-semibold tracking-wide">Grado de Temperatura (Cº)</label>
                    <input type="text" class="form-control sz placeholder:text-gray-300 placeholder:font-light"
                        placeholder="Cº">
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="cliente" class="text-sm text-gray-700 font-semibold tracking-wide">BHCT</label>
                    <input type="text" class="form-control sz placeholder:text-gray-300 placeholder:font-light"
                        placeholder="BHCT">
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="cliente" class="text-sm text-gray-700 font-semibold tracking-wide">BHST</label>
                    <input type="text" class="form-control sz placeholder:text-gray-300 placeholder:font-light"
                        placeholder="BHST">
                </div>
            </div>
        </section>
    </fieldset> <!-- Ensayo de Referencia -->

    <fieldset class="shadow border bg-gray-50 rounded-md ps-5 mt-4">
        <legend class="fieldset_bg text-white rounded p-1 float-none">
            <h6 class="font-semibold m-0 text-lg ps-3">
                Ensayo Solicitado <small>(Complete todos los que correspondan)</small>
            </h6>
        </legend>

        <section class="my-3 me-3">
            <div class="row p-2">
                <div class="col-xs-12 col-md-3 my-2">
                    <label for="cliente" class="text-sm text-gray-700 font-semibold tracking-wide">OH / Trepano</label>
                        <input type="text" class="form-control sz placeholder:text-gray-300 placeholder:font-light"
                            placeholder="OH / Trepano" name="cliente" id="cliente">
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="cliente" class="text-sm text-gray-700 font-semibold tracking-wide">Casing ID y OD</label>
                    <input type="text" class="form-control sz placeholder:text-gray-300 placeholder:font-light"
                        placeholder="Casing ID y OD">
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="cliente" class="text-sm text-gray-700 font-semibold tracking-wide">Lodo</label>
                    <input type="text" class="form-control sz placeholder:text-gray-300 placeholder:font-light"
                        placeholder="Ingrese el lodo">
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="cliente" class="text-sm text-gray-700 font-semibold tracking-wide">Profundidad Pozo (MD / TVD)</label>
                    <input type="text" class="form-control sz placeholder:text-gray-300 placeholder:font-light"
                        placeholder="Ingrese la profundidad del pozo">
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="cliente" class="text-sm text-gray-700 font-semibold tracking-wide">Base (TVD / MD)</label>
                    <input type="text" class="form-control sz placeholder:text-gray-300 placeholder:font-light"
                        placeholder="Ingrese la base">
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="cliente" class="text-sm text-gray-700 font-semibold tracking-wide">Top of Slurry (TVD / MD)</label>
                    <input type="text" class="form-control sz placeholder:text-gray-300 placeholder:font-light"
                        placeholder="(TVD / MD)">
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="cliente" class="text-sm text-gray-700 font-semibold tracking-wide">Volumen</label>
                    <input type="text" class="form-control sz placeholder:text-gray-300 placeholder:font-light"
                        placeholder="Volumen">
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="cliente" class="text-sm text-gray-700 font-semibold tracking-wide">Pump Rate</label>
                    <input type="text" class="form-control sz placeholder:text-gray-300 placeholder:font-light"
                        placeholder="Pump Rate">
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="cliente" class="text-sm text-gray-700 font-semibold tracking-wide">Grado de Temperatura (Cº)</label>
                    <input type="text" class="form-control sz placeholder:text-gray-300 placeholder:font-light"
                        placeholder="Cº">
                </div>

                <div class="col-xs-12 col-md-1 my-2">
                    <label for="cliente" class="text-sm text-gray-700 font-semibold tracking-wide">BHST</label>
                    <input type="text" class="form-control sz placeholder:text-gray-300 placeholder:font-light"
                        placeholder="Cº">
                </div>

                <div class="col-xs-12 col-md-1 my-2">
                    <label for="cliente" class="text-sm text-gray-700 font-semibold tracking-wide">BHCT</label>
                    <input type="text" class="form-control sz placeholder:text-gray-300 placeholder:font-light"
                        placeholder="Cº">
                </div>
            </div>
        </section>
    </fieldset> <!-- Ensayo Solicitado -->

    <fieldset class="shadow border bg-gray-50 rounded-md ps-5 mt-4">
        <legend class="fieldset_bg text-white rounded p-1 float-none">
            <h6 class="font-semibold m-0 text-lg ps-3">
                Requerimientos de Lechada <small>(Complete todos los que correspondan)</small>
            </h6>
        </legend>

        <section class="my-3 me-3">
            <div class="row p-2">
                <div class="col-xs-12 col-md-4"></div>
                <div class="col-xs-12 col-md-4">Principal</div>
                <div class="col-xs-12 col-md-4">Relleno</div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-md-4 my-2">1. Reología</div>
                <div class="col-xs-12 col-md-4 my-2"><input type="text" class="form-control sz placeholder:text-gray-300 placeholder:font-light" placeholder="Ingrese la reología"></div>
                <div class="col-xs-12 col-md-4 my-2"><input type="text" class="form-control sz placeholder:text-gray-300 placeholder:font-light" placeholder="Ingrese la reología"></div>

                <div class="col-xs-12 col-md-4 my-2">1. Densidad</div>
                <div class="col-xs-12 col-md-4 my-2"><input type="text" class="form-control sz placeholder:text-gray-300 placeholder:font-light" placeholder="Ingrese la densidad"></div>
                <div class="col-xs-12 col-md-4 my-2"><input type="text" class="form-control sz placeholder:text-gray-300 placeholder:font-light" placeholder="Ingrese la densidad"></div>
            </div>
        </section>
    </fieldset> <!-- Requerimientos de Lechada -->

</form>
