<form action="{{ route('solicitud.lodo') }}" method="POST">
    @csrf
    <section class="card shadow-sm">
        <div class="card-header bg-white p-3">
            <p class="m-0">Formulario para crear una nueva solicitud de lodo</p>
        </div>
        <div class="card-body">
            <p class="m-0 font-bold text-lg tracking-wide">Información General</p>

            <div class="grid xs:grid-cols-2 md:grid-cols-5 gap-3 mt-3">
                <div class="col-span-2 xl:col-span-2">
                    <label for="cliente_lodo" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Cliente
                        <span class="text-red-500">*</span></label>
                    <select name="cliente_lodo" id="cliente_lodo" class="text-sm" data-search="true" data-silent-initial-value-set="true">
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
                        <label for="pozo_lodo" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Pozo
                            <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Ingrese el pozo"
                        class="form-control text-sm p-2" p name="pozo_lodo"
                            id="pozo_lodo">
                        @error('pozo_lodo')
                            <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
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
                        <label for="equipo_lodo" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Equipo
                            <span class="text-red-500">*</span></label>
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
                            <span class="text-red-500">*</span></label>
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
                            <span class="text-red-500">*</span></label>
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
                            <span class="text-red-500">*</span></label>
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
                        <label for="densidad_lodo_3" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Densidad del Lodo <small>(ppg)</small>
                            <span class="text-red-500">*</span></label>
                            <input type="number" name="densidad_lodo_3" id="densidad_lodo_3"
                            value="{{ old('densidad_lodo_3') }}" class="form-control text-sm p-2"
                            placeholder="Ingrese la densidad del lodo" step=".01">
                        @error('densidad_lodo_3')
                            <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                        @enderror
                    </div>

                </div>
                <div class="row p-2">
                <hr class="my-4">
                <p class="m-0 font-bold text-lg my-3 tracking-wide">Condiciones del Test</p>
                <div class="grid md:grid-cols-5 gap-3 mt-3">
                    <div class="md:col-span-2 xl:col-span-1">
                        <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Grado de
                            Temperatura <small>(°C)</small></label>
                        <input type="number" name="temperatura" value="{{ old('temperatura') }}" class="form-control sz p-2" placeholder="(C°)" step=".01">
                    </div>

                    <div class="">
                        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Profundidad
                            <small>(MD/TVD) (m)</small></label>
                        <div class="grid grid-cols-2 gap-3">
                            <input type="number" min="0" name="profundidad_md" class="form-control text-sm p-2" value="{{ old('profundidad_md') }}" placeholder="MD" step=".01">
                            <input type="number" min="0" name="profundidad_tvd" class="form-control text-sm p-2" value="{{ old('profundidad_tvd') }}" placeholder="TVD" step=".01">
                        </div>
                    </div>
                    {{-- 
                    Vieja conf - luego del test delete 
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
                    </div

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
                    --}}
                </div>
            </div>
            
                <hr class="my-4">
                
                <p class="m-0 font-bold text-lg my-3 tracking-wide">Ensayo Referencia</p>

                <section class="container_ensayo_referencia_lodo rounded-md">
                </section>
                <div class="text-center mt-3">
                    <button id="btnAddEnsayoRefLodo" class="text-sm mt-2 bg-gray-200 hover:bg-gray-300 text-gray-600 p-1 rounded-md border transition-all duration-200 border-gray-300">
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
                        <input type="number" placeholder="Ingrese el volumen de Colchón"
                            class="form-control sz placeholder:text-gray-300 placeholder:font-light" name="vol_colchon"
                            id="vol_colchon">
                        @error('vol_colchon')
                            <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                        @enderror
                    </div>
                
                    <div class="col-span-2 xl:col-span-1">
                        <label for="densidad_colchon" class="text-sm text-gray-700 font-semibold tracking-wide">Densidad de Colchón
                            <small>(ppg)</small></label>
                        <input type="number" placeholder="Ingrese la densidad de Colchón"
                            class="form-control sz placeholder:text-gray-300 placeholder:font-light" name="densidad_colchon"
                            id="densidad_colchon">
                        @error('densidad_colchon')
                            <small class="text-red-700 font-semibold"><em>{{ $message }}</em></small>
                        @enderror
                    </div>
        
                    <div class="col-span-2 xl:col-span-1">
                        <label for="tiempo_contacto" class="text-sm text-gray-700 font-semibold tracking-wide">Tiempo de contacto
                            <small>(min)</small></label>
                        <input type="number" placeholder="Ingrese el tiempo de contacto"
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
    
                <p class="m-0 font-bold text-lg my-3 tracking-wide">Reconocimiento de que el trabajo fue solicitado</p>
                <div class="grid grid-cols-2 gap-3 mt-3">
                <div class="grid">
                    <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Nombre <small>(Solicitado por)</small></label>
                        <select name="firma_solicitante_lodo" id="firma_solicitante_lodo" data-search="true" data-silent-initial-value-set="true">
                            @foreach ($names_ingenieros as $name)
                            <option value="{{ $name->id }}" {{ old('firma_solicitante_lodo') == $name->id ? 'selected' : '' }}>
                                {{ $name->nombre }} {{ $name->apellido }} 
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fecha de la
                            firma</label>
                        <input type="date" name="fecha_solicitante_lodo" value="{{ old('fecha_solicitante_lodo') }}" class="form-control text-sm">
                    </div>
        
                </div>
                <div class="grid grid-cols-2 gap-3 mt-3">
                    <div class="grid">
                        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Nombre <small>(Laboratorio)</small></label>
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
                        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fecha de la
                            firma</label>
                        <input type="date" name="fecha_reconocimiento_lodo"
                            value="{{ old('fecha_reconocimiento_lodo') }}" class="form-control text-sm">
                    </div>
                </div>

                <p class="m-0 font-bold text-lg my-3 tracking-wide">Firma de Autorización para realizar el trabajo</p>
                <div class="grid grid-cols-2 gap-3 mt-3">
                    <div class="grid">
                        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Nombre <small>(Autoriza)</small></label>
                        <input type="text" class="form-control text-sm"
                            value="{{ auth()->user()->nombre }} {{ auth()->user()->apellido }}" readonly>
                        </select>
                    </div>
    
                    <div>
                        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fecha de la
                            firma</label>
                        <input type="date" name="fecha_autorizacion_lodo" class="form-control text-sm"
                            value="@php echo date('Y-m-d') @endphp" readonly>
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
        VirtualSelect.init({
            ele: "#firma_solicitante_lodo",
            placeholder: "Seleccione quien solicita",
        });
             
        document.getElementById("cliente_lodo").setValue(0);
        document.getElementById("locacion_lodo").setValue(0);
        document.getElementById("equipo_lodo").setValue(0);
        document.getElementById("tipo_lodo").setValue(0);
        document.getElementById("servicios_lodo").setValue(0);
        document.getElementById("mud_company").setValue(0);
        document.getElementById("ensayos").setValue(0);
        document.getElementById("firma_reconocimiento_lodo").setValue(0);
        document.getElementById("firma_solicitante_lodo").setValue(0);
    })
</script>
<script>
    // Datos de aditivos pasados desde el controlador
    const aditivos_lodo = @json($aditivos);
</script>
<script>
    let ensayos_referencia_lodo = {!! json_encode($ensayos_sol_lodo) !!}
    const btnAddEnsayoRefLodo = document.querySelector('#btnAddEnsayoRefLodo');
    const container_ensayo_referencia_lodo = document.querySelector('.container_ensayo_referencia_lodo');
    let aux_lodo = 1;

    //{{-- OJO, si formatean el código para acomodarlo, esta línea se convierte en 3 líneas y tira error, para acomodarlo tiene que ser en este formato "{!! json_encode($ensayos) !!}" TAL CUAL, con los mismos espacios. --}}
    //{{-- Incluso poner el comentario en la misma línea lo rompió --}}
    //{!! json_encode($ensayos) !!}


    btnAddEnsayoRefLodo.addEventListener('click', e => {
        e.preventDefault();
        let div = el('div.grid grid-cols-3 items-center', {
            id: `div_ens_ref_${aux_lodo}`
        });
        let colSpan = el('div.col-span-2');
        let label = el('label.text-sm text-gray-700 font-semibold tracking-wide mb-2', 'Seleccione el Ensayo');
        let flex = el('div.flex items-center flex-1 gap-3');
        let select = el('select.form-select text-sm p-2', {
            id: 'ensayos_ref_lodo',
            name: 'ensayos_ref_lodo[]'
        }, el('option', {
            value: ''
        }, '-- Seleccione --'));

        ensayos.forEach(ens => {
            const {
                id,
                tipo,
                incrementable,
                anio
            } = ens;
            mount(select, el('option', {
                value: id
            }, `${tipo}-${incrementable}-${anio}`));
        });

        // Agrego la opción "S/D" al final
        mount(select, el('option.bg-red-200', {
            value: 'sd'
        }, 'S/D'));

        select.setAttribute('onChange', `selectEnsayoLodo(this, ${aux_lodo})`);

        mount(flex, select);
        mount(flex, el('div.w-1/2 flex justify-center gap-2 items-center', {
            id: `flex_ensayo_${aux_lodo}`
        }));

        mount(colSpan, label);
        mount(colSpan, flex);
        mount(div, colSpan);
        mount(container_ensayo_referencia_lodo, div);
        aux_lodo++;
    });

    // Función para crear el div y los botones
    const selectEnsayoLodo = (e, aux_lodo) => {

        event.preventDefault();

        let flex_div = document.getElementById(`flex_ensayo_${aux_lodo}`);
        flex_div.innerHTML = ''; // Limpiar el contenido anterior

        if (e.value === '') {
            // No hacer nada si la selección es vacía
            return;
        } else if (e.value === 'sd') {
            // Si el valor es 'S/D', agregar el textarea para comentarios
            let divGrid = el('div.grid grid-cols-2 gap-3 md:grid-cols-2');
            let textarea = el('textarea.textarea.form-control.text-sm.p-2', {
                name: 'comentarios_lodo[]',
                placeholder: 'Comentarios',
                rows: 1,
            });
            mount(divGrid, textarea);

            // Crear el botón de borrar
            let button = el('button.bg-red-600.text-white.font-semibold.px-10.hover:bg-red-700.transition-all.md:px-5.lg:px-7', 'Borrar');
            button.addEventListener('click', e => {
                event.preventDefault();
                document.getElementById(`div_ens_ref_${aux_lodo}`).remove();
            });
            mount(divGrid, button);
            setChildren(flex_div, divGrid);
        } else {
            // Si el valor es otro ensayo, mostrar los botones de visualizar y borrar
            let divGrid = el('div.grid.grid-cols-2.gap-3.md:grid-cols-2');

            // Agregar el párrafo en miniatura arriba de los botones
            let pMiniatura = el('p.text-xs.text-gray-500.mb-2.col-span-2', 'Visualizará una solicitud que incluya este ensayo');
            mount(divGrid, pMiniatura);

            let a = el('a.bg-slate-100.w-full.text-gray-700.border.py-1.rounded-sm.hover:bg-slate-200.hover:text-gray-700.cursor-pointer.transition-all.duration-200.px-3.md:px-5.lg:px-7', 'Visualizar');
            a.setAttribute('data-ensayo-id', e.value);

            a.addEventListener('click', async (event) => {
                event.preventDefault();
                const ensayoId = event.currentTarget.getAttribute('data-ensayo-id'); //Capturo el valor del ensayo seleccionado
                try {
                    const response = await fetch(`/obtenerIDSolicitud/${ensayoId}`); //Realizo el fetch con la consulta al back, pidiendo una solicitud que contenga el ensayo seleccionado.
                    const data = await response.json(); //Recibo el json enviado desde el back (funcion obtenerIDSolicitud en el controlador de lechada)
                    if (data.error) {
                        showModalLodo('No hay solicitudes con este ensayo asignado'); //Si no encuentra una solicitud con ese ensayo, muestra un modal
                    } else {
                        const solicitud_id = data.id; // Guardo el valor del id recibido en otra variable
                        const url = `/solicitud/lechada/${solicitud_id}`; //Seteo URL con el ID recibido
                        window.open(url, '_blank'); //Abro la solicitud en otra pestaña
                    }
                } catch (error) {
                    console.error('Error al obtener la URL:', error);
                }
            });

            let button = el('button.bg-red-600.text-white.font-semibold.px-10.hover:bg-red-700.transition-all.md:px-5.lg:px-7', 'Borrar');
            button.addEventListener('click', e => {
                event.preventDefault();
                document.getElementById(`div_ens_ref_${aux}`).remove();
            });

            mount(divGrid, a);
            mount(divGrid, button);
            setChildren(flex_div, divGrid);
        }
    };

    // Función para mostrar el modal
    const showModalLodo = (message) => {
        // Crear el contenedor del modal
        let modal = el('div.fixed.inset-0.flex.items-center.justify-center.z-50', {
            id: 'modal'
        });
        let modalBg = el('div.fixed.inset-0.bg-black.opacity-50.z-40');
        let modalContent = el('div.bg-white.p-5.rounded.shadow-lg.max-w-md.mx-auto.z-50');

        // Agregar el mensaje
        let modalMessage = el('p.text-center.mb-4', message);
        let closeButton = el('button.bg-blue-500.text-white.px-4.py-2.rounded', 'Cerrar');

        closeButton.addEventListener('click', () => {
            document.body.removeChild(modal);
        });

        mount(modalContent, modalMessage);
        mount(modalContent, closeButton);
        mount(modal, modalBg);
        mount(modal, modalContent);

        document.body.appendChild(modal);
    };


</script>