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
                    <label for="cliente" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Cliente <span
                            class="text-red-500">*</span></label>
                    <select name="cliente" id="cliente" class="form-select text-sm p-2">
                        <option value="">-- Seleccione --</option>
                        @foreach ($clientes as $c)
                            <option value="{{ $c->id }}">{{ $c->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-span-2 xl:col-span-1">
                    <label for="locacion" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Yacimiento /
                        Locación
                        <span class="text-red-500">*</span></label>
                    <select name="locacion" id="locacion" class="form-select text-sm p-2">
                        <option value="">-- Seleccione --</option>
                        <option value="1">Yacimiento 1</option>
                        <option value="2">Yacimiento 2</option>
                        {{-- @foreach ($yacimientos as $y)
                            <option value="{{ $y->id }}">{{ $y->nombre }}</option>
                        @endforeach --}}
                    </select>
                </div>
                <div class="col-span-2 xl:col-span-1">
                    <label for="programa" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Programa <span
                            class="text-red-500">*</span></label>
                    <input type="text" name="programa" id="programa" class="form-control text-sm p-2"
                        placeholder="Programa">
                </div>
                <div class="col-span-2 xl:col-span-1">
                    <label for="fecha_solicitud" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fecha de
                        Solicitud <span class="text-red-500">*</span></label>
                    <input type="date" name="fecha_solicitud" id="fecha_solicitud" class="form-control text-sm p-2">
                </div>

                <div class="col-span-2">
                    <label for="empresa" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Empresa <span
                            class="text-red-500">*</span></label>
                    <input type="text" name="empresa" id="empresa" class="form-control text-sm p-2"
                        placeholder="Empresa / Compañía">
                </div>

                <div class="col-span-2 xl:col-span-1">
                    <label for="fecha_tratamiento" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fecha
                        de Tratamiento <span class="text-red-500">*</span></label>
                    <input type="date" name="fecha_tratamiento" id="fecha_tratamiento"
                        class="form-control text-sm p-2">
                </div>

                <div class="col-span-2 xl:col-span-1">
                    <label for="pozo" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Pozo <span
                            class="text-red-500">*</span></label>
                    <input type="text" name="pozo" id="pozo" class="form-control text-sm p-2"
                        placeholder="Pozo">
                </div>

                <div class="col-span-2 xl:col-span-1">
                    <label for="fecha_reporte" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fecha de
                        Reporte <span class="text-red-500">*</span></label>
                    <input type="date" name="fecha_reporte" id="fecha_reporte" class="form-control text-sm p-2">
                </div>

                <div class="col-span-2 xl:col-span-1">
                    <label for="fecha_resultados" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fecha
                        de
                        Resultados <span class="text-red-500">*</span></label>
                    <input type="date" name="fecha_resultados" id="fecha_resultados"
                        class="form-control text-sm p-2">
                </div>

                <div class="col-span-2 xl:col-span-1">
                    <label for="equipo" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Equipo <span
                            class="text-red-500">*</span></label>
                    <input type="text" name="equipo" id="equipo" class="form-control text-sm p-2"
                        placeholder="Ingrese el equipo">
                </div>

                <div class="col-span-2 xl:col-span-1">
                    <label for="servicio" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Servicio <span
                            class="text-red-500">*</span></label>
                    <input type="text" name="servicio" id="servicio" class="form-control text-sm p-2"
                        placeholder="Ingrese el servicio">
                </div>

                <div class="col-span-2 md:col-span-2 xl:col-span-1">
                    <label for="reporte_lab_tall"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Reporte
                        Laboratorio Tall <span class="text-red-500">*</span></label>
                    <input type="text" name="reporte_lab_tall" id="reporte_lab_tall"
                        class="form-control text-sm p-2" placeholder="Ingrese el reporte">
                </div>

                <div class="col-span-2 md:col-span-2 xl:col-span-1">
                    <label for="reporte_lab_lead"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Reporte
                        Laboratorio Lead <span class="text-red-500">*</span></label>
                    <input type="text" name="reporte_lab_lead" id="reporte_lab_lead"
                        class="form-control text-sm p-2" placeholder="Ingrese el reporte">
                </div>

                <div class="col-span-2 xl:col-span-1">
                    <label for="tipo_trabajo" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Tipo de
                        Trabajo <span class="text-red-500">*</span></label>
                    <select name="tipo_trabajo" id="tipo_trabajo" class="form-select text-sm p-2">
                        <option value="">-- Seleccione --</option>
                        <option value="1">Tipo de Trabajo 1</option>
                        <option value="2">Tipo de Trabajo 2</option>
                        {{-- @foreach ($tipo_trabajo as $tipo)
                            <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                        @endforeach --}}
                    </select>
                </div>

                <div class="col-span-2 md:col-span-2 xl:col-span-1">
                    <label for="tipo_cementacion" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Tipo
                        de Cementación <span class="text-red-500">*</span></label>
                    <select name="tipo_cementacion" id="tipo_cementacion" class="form-select text-sm p-2">
                        <option value="">-- Seleccione --</option>
                        <option value="1">Tipo de Cementación 1</option>
                        <option value="2">Tipo de Cementación 2</option>
                        {{-- @foreach ($tipo_trabajo as $tipo)
                            <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                        @endforeach --}}
                    </select>
                </div>


                <div class="col-span-2 md:col-span-2 xl:col-span-1">
                    <label for="ensayo_requerido"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Ensayos
                        Requeridos <span class="text-red-500">*</span></label>
                    <select name="ensayo_requerido" id="ensayo_requerido" class="form-select sz p-2">
                        <option value="">-- Seleccione --</option>
                        <option value="1">Ensayo Requerido 1</option>
                        <option value="2">Ensayo Requerido 2</option>
                        {{-- @foreach ($tipo_trabajo as $tipo)
                                        <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                                    @endforeach --}}
                    </select>
                </div>
            </div>

            <hr class="my-4">

            <p class="m-0 font-bold text-lg my-3 tracking-wide">Ensayo Referencia</p>

            <article class="container_ensayo_referencia"></article>

            <div class="text-center mt-3">
                <button id="btnAddEnsayoRef"
                    class="text-sm mt-2 bg-gray-200 hover:bg-gray-300 text-gray-600 p-1 rounded-full border border-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </button>
            </div>

            <hr class="my-4">

            <p class="m-0 font-bold text-lg my-3 tracking-wide">Ensayo Solicitado</p>
            <div class="grid md:grid-cols-5 gap-3 mt-3">
                <div>
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">OH / Trepano
                        <small>(in)</small></label>
                    <div class="grid grid-cols-2 gap-3">
                        <input type="number" name="OH"
                            class="form-control text-sm p-2" placeholder="OH">
                        <input type="number" name="trepano" id=""
                            class="form-control text-sm p-2" placeholder="Trepano">
                    </div>
                </div>

                <div class="">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Casing ID y
                        OD</label>
                    <div class="grid grid-cols-2 gap-3">
                        <input type="number" name="casing_id" class="form-control text-sm p-2"
                            placeholder="Casing ID">
                        <input type="number" name="casing_od" class="form-control text-sm p-2"
                            placeholder="Casing OD">
                    </div>
                </div>

                <div class="">
                    <label for="densidad_lodo" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Densidad
                        del Lodo (ppg)</label>
                    <input type="number" name="densidad_lodo" id="densidad_lodo" class="form-control text-sm p-2"
                        placeholder="Densidad del lodo">
                </div>

                <div class="">
                    <label for="tipo_lodo" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Tipo de
                        lodo</label>
                    <input type="text" name="tipo_lodo" id="tipo_lodo" class="form-control text-sm p-2"
                        placeholder="Lodo">
                </div>

                <div class="">
                    <label for="cia" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">CIA</label>
                    <input type="text" name="cia" id="cia" class="form-control text-sm p-2"
                        placeholder="CIA">
                </div>

                <div class="md:col-span-2 xl:col-span-1">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Profundidad
                        Pozo (MD / TVD) (m)</label>
                    <div class="grid grid-cols-2 gap-3">
                        <input type="number" min="0" name="profundidad_pozo_md" class="form-control text-sm p-2"
                            placeholder="MD">
                        <input type="number" min="0" name="profundidad_pozo_tvd" class="form-control text-sm p-2"
                            placeholder="TVD">
                    </div>
                </div>

                <div class="">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Base (MD
                        /
                        TVD) (m)</label>
                    <div class="grid grid-cols-2 gap-3">
                        <input type="text" name="base_md" class="form-control text-sm p-2"
                            placeholder="MD">
                        <input type="text" name="base_tvd" class="form-control text-sm p-2"
                            placeholder="TVD">
                    </div>
                </div>

                <div class="md:col-span-2 xl:col-span-1">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Top of
                        Slurry
                        (TVD / MD) (m)</label>
                    <div class="grid grid-cols-2 gap-3">
                        <input type="text" name="top_of_slurry_tvd" class="form-control text-sm p-2"
                            placeholder="TVD">
                        <input type="text" name="top_of_slurry_md" class="form-control text-sm p-2"
                            placeholder="MD">
                    </div>
                </div>

                <div class="">
                    <label
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Volumen</label>
                    <input type="text" name="volumen" class="form-control text-sm p-2"
                        placeholder="Volumen">
                </div>

                <div class="">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Pump
                        Rate</label>
                    <input type="text" name="pump_rate" class="form-control text-sm p-2"
                        placeholder="Pump Rate">
                </div>

                <div class="md:col-span-2 xl:col-span-1">
                    <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Grado de
                        Temperatura Cº</label>
                    <input type="text" name="grado_temperatura" class="form-control sz p-2"
                        placeholder="Cº">
                </div>

                <div class="grid grid-cols-2 col-span-2 xl:col-span-1 gap-3">
                    <div class="xl:col-span-1">
                        <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">BHST
                            Cº</label>
                        <input type="text" name="bhst" id="" class="form-control text-sm p-2"
                            placeholder="Cº">
                    </div>

                    <div class="xl:col-span-1">
                        <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">BHCT
                            Cº</label>
                        <input type="text" name="bhct" id="" class="form-control sz p-2"
                            placeholder="Cº">
                    </div>
                </div>
            </div>

            <hr class="my-4">

            <p class="m-0 font-bold text-lg my-3 tracking-wide">Requerimientos de Lechada</p>

            <section>
                @include('solicitud.components.lechada.desktop.requerimientos')
            </section>

            <section>
                @include('solicitud.components.lechada.movil.requerimientos')
            </section>

            <hr class="my-4">

            <p class="m-0 font-bold text-lg my-3 tracking-wide">Observación / Comentarios</p>

            <div class="grid mt-3">
                <div class="col-span-2 md:col-span-1">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Ingrese una
                        observación (Opcional)</label>
                    <textarea name="" id="" rows="5" class="form-control text-sm"
                        placeholder="Máximo 500 caracteres"></textarea>
                </div>
            </div>

            <hr class="my-4">
            <p class="m-0 font-bold text-lg my-3 tracking-wide">Firma de Autorización para realizar el trabajo</p>

            <div class="grid grid-cols-2 gap-3 mt-3">
                <div>
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">¿Quién
                        autoriza?</label>
                    <select name="" id="" class="form-select text-sm">
                        <option value="">-- Seleccione --</option>
                    </select>
                </div>

                <div>
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fecha de
                        Autorización</label>
                    <input type="date" class="form-control text-sm">
                </div>
            </div>

            <p class="m-0 font-bold text-lg my-3 tracking-wide">Reconocimiento de que el trabajo fue realizado</p>

            <div class="grid grid-cols-2 gap-3 mt-3">
                <div>
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">¿Quién
                        reconoce el trabajo?</label>
                    <select name="" id="" class="form-select text-sm">
                        <option value="">-- Seleccione --</option>
                    </select>
                </div>

                <div>
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fecha de
                        Reconocimiento</label>
                    <input type="date" class="form-control text-sm">
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
<script src="{{ asset('js/Solicitud/lechada.js') }}"></script>

<script>
    const ensayos = {!! json_encode($ensayos) !!}
    const btnAddEnsayoRef = document.querySelector('#btnAddEnsayoRef');
    const container_ensayo_referencia = document.querySelector('.container_ensayo_referencia');
    let aux = 1;
    btnAddEnsayoRef.addEventListener('click', e => {
        e.preventDefault();
        let div_grid, div, div_grid_second, second_div, select, input;

        div_grid = el('div.grid md:grid-cols-6 gap-3 mt-4 relative');

        // Seleccione el Ensayo
        div = el('div', el('label.text-sm text-gray-700 font-semibold tracking-wide mb-2', {
            for: 'ensayo_id'
        }, 'Seleccione el Ensayo'));
        select = el('select.form-select py-2 text-sm', {
            name: `ensayo_referencia[${aux}][ensayo_id]`,
            'data-aux': aux,
            id: 'ensayo_id',
        }, el('option', {
            value: ''
        }, '-- Seleccione --'));


        ensayos.forEach(e => {
            let option = el('option', {
                value: e.id
            }, `Ensayo Nº${e.id}`);
            mount(select, option);
        });
        let data_aux = select.getAttribute('data-aux');

        select.addEventListener('change', s => {
            if (select.value != '') {

                let ensayo_find = ensayos.filter(function(element) {
                    return element.id == select.value;
                });
                const {
                    id,
                    tvd,
                    md,
                    densidad_lechada,
                    grado_temperatura,
                    bhse,
                    bhct
                } = ensayo_find[0];

                let all_fields = document.querySelectorAll(`.testing_${data_aux}`);
                all_fields[0].value = tvd;
                all_fields[1].value = md;
                all_fields[2].value = densidad_lechada;
                all_fields[3].value = grado_temperatura;
                all_fields[4].value = bhse;
                all_fields[5].value = bhct;
            }
        })

        mount(div, select);
        mount(div_grid, div);

        // Top of Slurry (m)
        div = el('div.md:col-span-3 xl:col-span-2', el(
            'label.text-sm text-gray-700 font-semibold tracking-wide mb-2', 'Top of Slurry (m)'));
        div_grid_second = el('div.grid grid-cols-2 gap-2');
        input = el(`input.form-control text-sm p-2 testing_${data_aux} top_of_slurry_tvd_${data_aux}`, {
            min: '0',
            name: `ensayo_referencia[${aux}][top_of_slurry_tvd]`,
            placeholder: 'TVD',
            readonly: 'true'
        });
        mount(div_grid_second, input);
        input = el(`input.form-control text-sm p-2 testing_${data_aux}`, {
            min: '0',
            name: `ensayo_referencia[${aux}][top_of_slurry_md]`,
            placeholder: 'MD',
            readonly: 'true'
        });
        mount(div_grid_second, input);
        mount(div, div_grid_second);
        mount(div_grid, div);

        // Densidad
        div = el('div.md:col-span-2 xl:col-span-1', el(
            'label.text-sm text-gray-700 font-semibold tracking-wide mb-2', 'Densidad (m)'));
        input = el(`input.form-control text-sm p-2 testing_${data_aux}`, {
            placeholder: 'Ingrese la densidad',
            name: `ensayo_referencia[${aux}][densidad]`,
            readonly: 'true'
        });

        mount(div, input);
        mount(div_grid, div);

        // Grado de Temperatura
        div = el('div.md:col-span-2 xl:col-span-1', el(
            'label.text-sm text-gray-700 font-semibold tracking-wide mb-2', 'Grado de Temperatura (Cº)'
        ));
        input = el(`input.form-control text-sm p-2 testing_${data_aux}`, {
            placeholder: 'Ingrese la Temperatura ºC',
            name: `ensayo_referencia[${aux}][grado_temperatura]`,
            readonly: 'true'
        });
        mount(div, input);
        mount(div_grid, div);

        // BHCS
        div = el('div.grid col-span-1 grid-cols-2 gap-3');
        second_div = el('div', el('label.text-sm text-gray-700 font-semibold tracking-wide mb-2', 'BHCE Cº'));
        input = el(`input.form-control text-sm p-2 testing_${data_aux}`, {
            placeholder: 'BHCE',
            name: `ensayo_referencia[${aux}][bhce]`,
            readonly: 'true'
        });

        mount(second_div, input);
        mount(div, second_div);

        // BHCT
        second_div = el('div', el('label.text-sm text-gray-700 font-semibold tracking-wide mb-2', 'BHCT Cº'));
        input = el(`input.form-control text-sm p-2 testing_${data_aux}`, {
            placeholder: 'BHCT',
            name: `ensayo_referencia[${aux}][bhct]`,
            readonly: 'true'
        });
        mount(second_div, input);
        mount(div, second_div);

        mount(div_grid, div);

        // Botón de eliminar
        div = el(
            'div.w-6 h-6 absolute -top-4 right-0 bg-red-800 bg-opacity-70 rounded-full flex justify-center items-center'
        );
        let button = el('button.font-bold text-gray-300 rounded-full', 'X');
        button.addEventListener('click', b => {
            div_grid.remove();
        })
        mount(div, button);
        mount(div_grid, div);

        mount(container_ensayo_referencia, div_grid);
        aux++;
    })
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
    document.addEventListener('DOMContentLoaded', () => {
        // @if ($message = session('success'))
        //     successAlert('¡Solicitud Creada!', 'La Solicitud de Lechada fue creada correctamente').then(
        //         (confirmed) => {
        //             window.location.replace('solicitudes');
        //         })
        // @endif
    })
</script>
