
<div class="grid grid-cols-4 text-center bg-gray-100 py-2 my-3">
<p>Lote</p>
<p>Aditivo</p>
<p>Conc (gpt o ppt)</p>
<p>Unidad<small> (lt/m³ o kg/m³)</small></p>
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
<div id="container_formulaciones_tentativas_lodo">
@php
    $inc = 0;
@endphp
@if (!is_null($solicitud_lodo[0]->formulacion_tentativa) && (is_array($solicitud_lodo[0]->formulacion_tentativa) || is_object($solicitud_lodo[0]->formulacion_tentativa)))
@foreach ($solicitud_lodo[0]->formulacion_tentativa as $formulacion)
    <div class="flex gap-2 justify-between mb-2 border">
        <div class="w-full flex gap-2 bg-gray-100 p-2">
            <input type="hidden" value="{{ $formulacion->id }}" name="aditivos[{{$inc}}][id]">
            <div class="col-span-3 text-right btn_del_formulacion inactive">
                <button class="bg-red-700 text-white rounded-md font-semibold px-3"
                    onclick="btnDeleteFormulacion(this, {{ $formulacion }})">Eliminar</button>
            </div>
            <input type="text" class="form-control text-xs rounded-l-none p-2 col-span-3 md:col-span-1"
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
            <input type="text" class="form-control text-xs p-2 col-span-3 md:col-span-1"
                placeholder="Concentración" value="{{ $formulacion->concentracion }}" name="aditivos[{{$inc}}][concentracion]" readonly>
                <input type="text" class="form-control text-xs p-2 col-span-3 md:col-span-1"
                placeholder="Unidad" value="{{ $formulacion->unidad }}" name="aditivos[{{$inc}}][unidad]" readonly>
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
    <button id="btnAddFormulacionLodo"
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
const btnAddFormulacionLodo = document.getElementById('btnAddFormulacionLodo');
let aux_lodo = 0;
btnAddFormulacionLodo.addEventListener('click', e => {
    e.preventDefault();
    container_formulaciones_new.innerHTML +=`
    <div class="flex justify-between mb-2 border">
    <div class="w-full grid grid-cols-3 bg-gray-100 gap-3 p-2">
        <div class="col-span-3 text-right btn_del_formulacion">
            <button class="bg-red-700 text-white rounded-md font-semibold px-3" onclick="btnDeleteFormulacion(this.parentElement.parentElement.parentElement.remove())">Eliminar</button>
        </div>
        <input type="text" class="form-control text-xs rounded-l-none p-2 col-span-3 md:col-span-1"
            placeholder="Lote" name="formulacion_new[${aux_lodo}][lote]">
        <input type="text" class="form-control text-xs p-2 col-span-3 md:col-span-1" placeholder="Aditivo" name="formulacion_new[${aux_lodo}][aditivo]">
        <input type="text" class="form-control text-xs p-2 col-span-3 md:col-span-1" placeholder="Concentración" name="formulacion_new[${aux_lodo}][concentracion]">
    </div>
</div>`
});
</script>
