<div class="grid grid-cols-5 gap-3">

    <div class="col-span-5 md:col-span-1">
        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Reología</label>
        <input type="text" name="reologia" value="{{ $s_l[0]->reologia }}" class="form-control text-sm"
            placeholder="Ingrese la reología" readonly>
    </div>

    <div class="col-span-5 md:col-span-1">
        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Densidad</label>
        <input type="text" name="densidad" value="{{ $s_l[0]->densidad }}" class="form-control text-sm"
            placeholder="Ingrese la densidad" readonly>
    </div>

    <div class="col-span-5 md:col-span-1">
        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Filtrado</label>
        <input type="text" name="filtrado" value="{{ $s_l[0]->filtrado }}" class="form-control text-sm"
            placeholder="Ingrese el filtrado" readonly>
    </div>

    <div class="col-span-5 md:col-span-1">
        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Bombeabilidad</label>
        <input type="text" name="bombeabilidad" value="{{ $s_l[0]->bombeabilidad }}"
            class="form-control text-sm" placeholder="Ingrese la bombeabilidad" readonly>
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
                id="tiempo_50_psi" disabled>
            <label for="tiempo_50_psi" class="text-sm cursor-pointer">Tiempo @ 50 psi</label>
        </div>
        <div class="flex items-center gap-2 col-span-5 md:col-span-1">
            <input type="checkbox" {{ $s_l[0]->tiempo_500_psi == 1 ? 'checked' : '' }}
                name="tiempo_500_psi" id="tiempo_500_psi" disabled>
            <label for="tiempo_500_psi" class="text-sm cursor-pointer">Tiempo @ 500 psi</label>
        </div>
        <div class="flex items-center gap-2 col-span-5 md:col-span-1">
            <input type="checkbox" {{ $s_l[0]->resistencia_12_hs == 1 ? 'checked' : '' }}
                name="resistencia_12_hs" id="resistencia_12_hs" disabled>
            <label for="resistencia_12_hs" class="text-sm cursor-pointer">Resistencia a las 12 hs.</label>
        </div>
        <div class="flex items-center gap-2 col-span-5 md:col-span-1">
            <input type="checkbox" {{ $s_l[0]->resistencia_24_hs == 1 ? 'checked' : '' }}
                name="resistencia_24_hs" id="resistencia_24_hs" disabled>
            <label for="resistencia_24_hs" class="text-sm cursor-pointer">Resistencia a las 24 hs.</label>
        </div>
    </div>
</div>

<div class="grid grid-cols-4 gap-3 mt-2">
    <div class="col-span-4 md:col-span-1">
        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Agua
            Libre</label>
        <input type="text" name="agua_libre"
            value="{{ $s_l[0]->agua_libre ? $s_l[0]->agua_libre : 'No aplica' }}"
            class="form-control text-sm" placeholder="0.0%" readonly>
    </div>
    <div class="col-span-4 md:col-span-1">
        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">SGS</label>
        <input type="text" name="sgs"
            value="{{ $s_l[0]->sgs ? $s_l[0]->sgs : 'No aplica' }}"
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
                value="{{ $s_l[0]->tipo_cemento ? $s_l[0]->tipo_cemento : 'No aplica' }}"
                class="form-control text-sm" placeholder="Ingrese el tipo de cemento" readonly>
        </div>
    </div>
</div>

<div class="grid grid-cols-3 text-center bg-gray-100 py-2 my-3">
    <p>Lote</p>
    <p>Aditivo</p>
    <p>Conc (% BWOC)</p>
</div>
<div id="container_formulaciones_tentativas">
    @foreach ($s_l[0]->formulacion_tentativa as $formulacion)
        <div class="flex justify-between mb-2">
            <div class="w-full grid grid-cols-3 bg-gray-100 gap-3 p-2">
                <input type="text" class="form-control text-xs rounded-l-none p-2 col-span-3 md:col-span-1"
                    placeholder="Lote" value="{{ $formulacion->lote }}" readonly>
                <input type="text" class="form-control text-xs p-2 col-span-3 md:col-span-1" value="{{ $formulacion->aditivo }}" placeholder="Aditivo"
                    readonly>
                <input type="text" class="form-control text-xs p-2 col-span-3 md:col-span-1"
                    placeholder="Concentración" value="{{ $formulacion->concentracion }}" readonly>
            </div>
        </div>
    @endforeach
</div>
