{{--
    Hi :) 
    Acá esta la view en Información de la Solicitud
    Parte: Requerimientos de Lechada
--}}

<div class="grid grid-cols-5 gap-3">

    <div class="col-span-5 md:col-span-1">
        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Reología <small>(Si/No)</small></label>
        <input type="text" name="reologia" value="{{ $s_l[0]->reologia }}" class="form-control text-sm"
            placeholder="Ingrese la reología" readonly>
    </div>

    <div class="col-span-5 md:col-span-1">
        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Densidad <small>(ppg)</small></label>
        <input type="text" name="densidad" value="{{ $s_l[0]->densidad }}" class="form-control text-sm"
            placeholder="Ingrese la densidad" readonly>
    </div>

    <div class="col-span-5 md:col-span-1">
        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Filtrado <small>&ltmL</small></label>
        <input type="text" name="filtrado" value="{{ $s_l[0]->filtrado }}" class="form-control text-sm"
            placeholder="Ingrese el filtrado" readonly>
    </div>

    <div class="col-span-5 md:col-span-2">
        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Bombeabilidad <small>Tiempo Acondicionamiento + Tiempo Operación</small></label>
        <input type="text" name="bombeabilidad" value="{{ $s_l[0]->bombeabilidad }}" class="form-control text-sm"
            placeholder="Tiempo (min)" readonly>
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
            <input type="checkbox" {{ $s_l[0]->tiempo_50_psi == 1 ? 'checked' : '' }} name="tiempo_50_psi"
                id="tiempo_50_psi" class='inp_edit' disabled>
            <label for="tiempo_50_psi" class="text-sm cursor-pointer">Tiempo @ 50 psi</label>
        </div>
        <div class="flex items-center gap-2 col-span-5 md:col-span-1">
            <input type="checkbox" {{ $s_l[0]->tiempo_500_psi == 1 ? 'checked' : '' }} name="tiempo_500_psi"
                id="tiempo_500_psi" class='inp_edit' disabled>
            <label for="tiempo_500_psi" class="text-sm cursor-pointer">Tiempo @ 500 psi</label>
        </div>
        <div class="flex items-center gap-2 col-span-5 md:col-span-1">
            <input type="checkbox" {{ $s_l[0]->tiempo_1000_psi == 1 ? 'checked' : '' }} name="tiempo_1000_psi"
                id="tiempo_500_psi" class='inp_edit' disabled>
            <label for="tiempo_1000_psi" class="text-sm cursor-pointer">Tiempo @ 1000 psi</label>
        </div>
        <div class="flex items-center gap-2 col-span-5 md:col-span-1">
            <input type="checkbox" {{ $s_l[0]->resistencia_12_hs == 1 ? 'checked' : '' }} name="resistencia_12_hs"
                id="resistencia_12_hs" class='inp_edit' disabled>
            <label for="resistencia_12_hs" class="text-sm cursor-pointer">Resistencia a las 12 hs.</label>
        </div>
        <div class="flex items-center gap-2 col-span-5 md:col-span-1">
            <input type="checkbox" {{ $s_l[0]->resistencia_24_hs == 1 ? 'checked' : '' }} name="resistencia_24_hs"
                id="resistencia_24_hs" class='inp_edit' disabled>
            <label for="resistencia_24_hs" class="text-sm cursor-pointer">Resistencia a las 24 hs.</label>
        </div>
    </div>
</div>

<div class="grid grid-cols-4 gap-3 mt-2">
    <div class="col-span-4 md:col-span-2">
        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Agua
            Libre <small>%</small></label>
        <input type="text" name="agua_libre" value="{{ $s_l[0]->agua_libre ? $s_l[0]->agua_libre : 'No aplica' }}"
            class="form-control text-sm" placeholder="0.0%" readonly>
    </div>
    <div class="col-span-4 md:col-span-2">
        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">SGS <small>(min)</small></label>
        <input type="text" name="sgs" value="{{ $s_l[0]->sgs ? $s_l[0]->sgs : 'No aplica' }}"
            class="form-control text-sm" placeholder="SGS" readonly>
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
            <input type="text" name="tipo_cemento"
                value="{{ $s_l[0]->tipo_cemento ? $s_l[0]->tipo_cemento : 'No aplica' }}" class="form-control text-sm"
                placeholder="Ingrese el tipo de cemento" readonly>
        </div>
    </div>
</div>


<div class="grid grid-cols-4 text-center bg-gray-100 py-2 my-3">
    <p>Lote</p>
    <p>Aditivo</p>
    <p>Conc (% BWOC)</p>
    <p>Blend</p>
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
    @foreach ($s_l[0]->formulacion_tentativa as $formulacion)
        <div class="flex gap-2 justify-between mb-2 border">
            <div class="w-full flex gap-2 bg-gray-100 p-2">
                <input type="hidden" value="{{ $formulacion->id }}" name="aditivos[{{$inc}}][id]">
                <div class="col-span-3 text-right btn_del_formulacion inactive">
                    <button class="bg-red-700 text-white rounded-md font-semibold px-3"
                        onclick="btnDeleteFormulacion(this, {{ $formulacion }})">Eliminar</button>
                </div>
                <input type="text" class="form-control text-xs rounded-l-none p-2 col-span-4 md:col-span-1"
                    placeholder="Lote" value="{{ $formulacion->lote }}" name="aditivos[{{$inc}}][lote]" readonly>
                <!-- Aditivo -->
                <input type="text" 
                       class="form-control text-xs p-2 {{ $formulacion->aditivo == 'SD' ? 'w-1/2' : '' }}"
                       value="{{ $formulacion->aditivos->nombre ?? $formulacion->aditivo }}" 
                       placeholder="Aditivo" name="aditivos[{{$inc}}][aditivo]" readonly>
                <!-- Comentario (se muestra solo si el aditivo es 'SD') -->
                @if($formulacion->aditivo == 'SD')
                <input type="text" class="form-control text-xs p-2 w-1/2"
                    placeholder="Comentario" value="{{ $formulacion->comentario }}" name="aditivos[{{$inc}}][comentario]" readonly>
                @endif
                <input type="text" class="form-control text-xs p-2 col-span-4 md:col-span-1"
                    placeholder="Concentración" value="{{ $formulacion->concentracion }}" name="aditivos[{{$inc}}][concentracion]" readonly>
                <input type="text" class="form-control text-xs p-2 col-span-4 md:col-span-1"
                    placeholder="Blend" value="{{ $formulacion->blend }}" name="aditivos[{{$inc}}][blend]" readonly>
            </div>
        </div>
        @php
            $inc++;
        @endphp
    @endforeach
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
