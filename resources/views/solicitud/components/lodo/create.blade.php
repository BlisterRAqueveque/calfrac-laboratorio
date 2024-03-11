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
                    <label for="pozo" class="text-sm text-gray-700 font-semibold tracking-wide">Pozo
                        <small>(*)</small></label>
                    <input type="text" placeholder="Ingrese el pozo"
                        class="form-control sz placeholder:text-gray-300 placeholder:font-light" name="pozo"
                        id="pozo">
                    @error('pozo')
                        <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                    @enderror
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="equipo" class="text-sm text-gray-700 font-semibold tracking-wide">Equipo
                        <small>(*)</small></label>
                    <input type="text" placeholder="Ingrese el equipo"
                        class="form-control sz placeholder:text-gray-300 placeholder:font-light" name="equipo"
                        id="equipo">
                    @error('equipo')
                        <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                    @enderror
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="empresa" class="text-sm text-gray-700 font-semibold tracking-wide">Empresa
                        <small>(*)</small></label>
                    <input type="text" placeholder="Ingrese el equipo"
                        class="form-control sz placeholder:text-gray-300 placeholder:font-light" name="empresa"
                        id="empresa">
                    @error('empresa')
                        <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                    @enderror
                </div>



                <!-- TODO Hay que agregar el Tipo de Lodo en la tabla SOLICITUD -->
                <div class="col-xs-12 col-md-2 my-2">
                    <label for="tipo_lodo" class="text-sm text-gray-700 font-semibold tracking-wide">Tipo de Lodo
                        <small>(*)</small></label>
                    <input type="text" placeholder="Ingrese el tipo de lodo"
                        class="form-control sz placeholder:text-gray-300 placeholder:font-light" name="tipo_lodo"
                        id="tipo_lodo">
                    @error('tipo_lodo')
                        <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                    @enderror
                </div>

                <div class="col-xs-12 col-md-2 my-2">
                    <label for="servicio" class="text-sm text-gray-700 font-semibold tracking-wide">Servicio
                        <small>(*)</small></label>
                    <input type="text" placeholder="Ingrese el servicio"
                        class="form-control sz placeholder:text-gray-300 placeholder:font-light" name="servicio"
                        id="servicio">
                    @error('servicio')
                        <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                    @enderror
                </div>

            </div>

            <span class="ms-2 mb-0 font-light tracking-wide">Condiciones del Test</span>
            <hr class="ms-2 mt-1">

            <div class="row p-2">
                <div class="col-xs-12 col-md-3 my-2">
                    <label for="temperatura" class="text-sm text-gray-700 font-semibold tracking-wide">Temperatura
                        <small>(*)</small></label>
                    <input type="number" placeholder="Ingrese la temperatura"
                        class="form-control sz placeholder:text-gray-300 placeholder:font-light" name="temperatura"
                        id="temperatura">
                    @error('temperatura')
                        <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                    @enderror
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="profundidad" class="text-sm text-gray-700 font-semibold tracking-wide">Profundidad
                        <small>(*) - mt</small></label>
                    <input type="number" placeholder="Ingrese la profundidad (mt)"
                        class="form-control sz placeholder:text-gray-300 placeholder:font-light" name="profundidad"
                        id="profundidad">
                    @error('profundidad')
                        <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                    @enderror
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="tipo_trabajo" class="text-sm text-gray-700 font-semibold tracking-wide">Tipo de Trabajo
                        <small>(*)</small></label>
                    <input type="text" placeholder="Ingrese el tipo de trabajo"
                        class="form-control sz placeholder:text-gray-300 placeholder:font-light" name="tipo_trabajo"
                        id="tipo_trabajo">
                    @error('tipo_trabajo')
                        <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                    @enderror
                </div>

                <div class="col-xs-12 col-md-3 my-2">
                    <label for="tipo-cementacion" class="text-sm text-gray-700 font-semibold tracking-wide">Tipo de Cementación
                        <small>(*)</small></label>
                    <input type="text" placeholder="Ingrese el tipo de cementación"
                        class="form-control sz placeholder:text-gray-300 placeholder:font-light" name="tipo_cementacion"
                        id="tipo-cementacion">
                    @error('tipo_trabajo')
                        <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                    @enderror
                </div>
            </div>
        </section>
    </fieldset>
</form>
