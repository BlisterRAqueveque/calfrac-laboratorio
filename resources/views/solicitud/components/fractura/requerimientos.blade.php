
    <label for="" class="text-sm mt-3 text-gray-700 font-semibold tracking-wide mb-2">Formulación
        Tentativa</label>

        <div class="col-xs-12 col-md-6 my-2">
            <label for="base_guar"
                class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Carga Polimérica de Sistema base Guar (#)</label>
            <input type="text" placeholder="Ingrese carga polimérica"
                class="form-control sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2"
                name="base_guar" id="base_guar"
                value="{{ $solicitud_fractura[0]->base_guar ?? 'No Aplica' }}" readonly>
        </div>
        <div class="col-xs-12 col-md-6 my-2">
            <label for="base_hvfr"
                class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Carga Polimérica de Sistema base HVFR (gpt o ppt)</label>
            <input type="text" placeholder="Ingrese carga polimérica"
                class="form-control sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2"
                name="base_hvfr" id="base_hvfr" value="{{ $solicitud_fractura[0]->base_hvfr ?? 'No Aplica' }}"
                readonly>
        </div>

<div class="grid grid-cols-3 text-center bg-gray-100 py-2 my-3">
    <p>Lote</p>
    <p>Aditivo</p>
    <p>Conc (gpt o ppt)</p>
</div>

<style>
    .btn_del_formulacion.inactive {
        display: none;
    }

    .btn_add_formulacion.inactive {
        display: none;
    }
</style>
<div id="container_formulaciones_tentativas_delete"></div>
<div id="container_formulaciones_tentativas">
    @php
        $inc = 0;
    @endphp
    @if (!is_null($solicitud_fractura[0]->formulacion_tentativa) && (is_array($solicitud_fractura[0]->formulacion_tentativa) || is_object($solicitud_fractura[0]->formulacion_tentativa)))
    @foreach ($solicitud_fractura[0]->formulacion_tentativa as $formulacion)
        <div class="flex justify-between mb-2 border">
            <div class="w-full grid grid-cols-3 bg-gray-100 gap-3 p-2">
                <input type="hidden" value="{{ $formulacion->id }}" name="aditivos[{{$inc}}][id]">
                <div class="col-span-3 text-right btn_del_formulacion inactive">
                    <button class="bg-red-700 text-white rounded-md font-semibold px-3"
                        onclick="btnDeleteFormulacion(this, {{ $formulacion }})">Eliminar</button>
                </div>
                <input type="text" class="form-control text-xs rounded-l-none p-2 col-span-3 md:col-span-1"
                    placeholder="Lote" value="{{ $formulacion->lote }}" name="aditivos[{{$inc}}][lote]" readonly>
                <input type="text" class="form-control text-xs p-2 col-span-3 md:col-span-1"
                    value="{{ $formulacion->aditivo }}" placeholder="Aditivo" name="aditivos[{{$inc}}][aditivo]" readonly>
                <input type="text" class="form-control text-xs p-2 col-span-3 md:col-span-1"
                    placeholder="Concentración" value="{{ $formulacion->concentracion }}" name="aditivos[{{$inc}}][concentracion]" readonly>
            </div>
        </div>
        @php
            $inc++;
        @endphp
    @endforeach
@else
    <p>Formulaciones tentativas no disponibles.</p>
@endif

    {{--Vieja configuracion
    @foreach ($solicitud_fractura[0]->formulacion_tentativa as $formulacion)
        <div class="flex justify-between mb-2 border">
            <div class="w-full grid grid-cols-3 bg-gray-100 gap-3 p-2">
                <input type="hidden" value="{{ $formulacion->id }}" name="aditivos[{{$inc}}][id]">
                <div class="col-span-3 text-right btn_del_formulacion inactive">
                    <button class="bg-red-700 text-white rounded-md font-semibold px-3"
                        onclick="btnDeleteFormulacion(this, {{ $formulacion }})">Eliminar</button>
                </div>
                <input type="text" class="form-control text-xs rounded-l-none p-2 col-span-3 md:col-span-1"
                    placeholder="Lote" value="{{ $formulacion->lote }}" name="aditivos[{{$inc}}][lote]" readonly>
                <input type="text" class="form-control text-xs p-2 col-span-3 md:col-span-1"
                    value="{{ $formulacion->aditivo }}" placeholder="Aditivo" name="aditivos[{{$inc}}][aditivo]" readonly>
                <input type="text" class="form-control text-xs p-2 col-span-3 md:col-span-1"
                    placeholder="Concentración" value="{{ $formulacion->concentracion }}" name="aditivos[{{$inc}}][concentracion]" readonly>
            </div>
        </div>
        @php
            $inc++;
        @endphp
    @endforeach--}}
    <div class="container_formulaciones_new"></div>
    {{-- <div class="flex justify-between mb-2 border">
        <div class="w-full grid grid-cols-3 bg-gray-100 gap-3 p-2">
            <div class="col-span-3 text-right btn_del_formulacion inactive">
                <button class="bg-red-700 text-white rounded-md font-semibold px-3" onclick="btnDeleteFormulacion(this)">Eliminar</button>
            </div>
            <input type="text" class="form-control text-xs rounded-l-none p-2 col-span-3 md:col-span-1"
                placeholder="Lote">
            <input type="text" class="form-control text-xs p-2 col-span-3 md:col-span-1"  placeholder="Aditivo"
            >
            <input type="text" class="form-control text-xs p-2 col-span-3 md:col-span-1"
                placeholder="Concentración" >
        </div>
    </div> --}}

    <div class="text-center mt-3 btn_add_formulacion inactive">
        <button id="btnAddFormulacion"
            class="text-sm mt-2 bg-gray-200 hover:bg-gray-300 text-gray-600 p-1 rounded-md px-3 border transition-all duration-200 border-gray-300">
            Agregar Otra Formulación
        </button>
    </div>
</div>

<script>
    const container_formulaciones_tentativas_delete = document.getElementById(
        'container_formulaciones_tentativas_delete');
    const container_formulaciones_new = document.querySelector('.container_formulaciones_new');

    // Elimina la Formulación Tentativa al escuchar por el btn de Eliminar
    const btnDeleteFormulacion = (e, formulacion) => {
        event.preventDefault();
        mount(container_formulaciones_tentativas_delete, el('input', {
            value: formulacion.id,
            name: `formulacion_tentativa_del[]`,
            type: 'hidden'
        }))
        e.parentElement.parentElement.parentElement.remove()
    }
    const btnAddFormulacion = document.getElementById('btnAddFormulacion');
    let aux = 0;
    btnAddFormulacion.addEventListener('click', e => {
        e.preventDefault();
        container_formulaciones_new.innerHTML +=`
        <div class="flex justify-between mb-2 border">
        <div class="w-full grid grid-cols-3 bg-gray-100 gap-3 p-2">
            <div class="col-span-3 text-right btn_del_formulacion">
                <button class="bg-red-700 text-white rounded-md font-semibold px-3" onclick="btnDeleteFormulacion(this.parentElement.parentElement.parentElement.remove())">Eliminar</button>
            </div>
            <input type="text" class="form-control text-xs rounded-l-none p-2 col-span-3 md:col-span-1"
                placeholder="Lote" name="formulacion_new[${aux}][lote]">
            <input type="text" class="form-control text-xs p-2 col-span-3 md:col-span-1" placeholder="Aditivo" name="formulacion_new[${aux}][aditivo]">
            <input type="text" class="form-control text-xs p-2 col-span-3 md:col-span-1" placeholder="Concentración" name="formulacion_new[${aux}][concentracion]">
        </div>
    </div>`
    });
</script>
