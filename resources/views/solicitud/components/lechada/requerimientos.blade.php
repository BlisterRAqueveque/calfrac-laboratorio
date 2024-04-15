<div class="grid grid-cols-5 gap-3">

    <div class="col-span-5 md:col-span-1">
        <label for=""
            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Reología</label>
        <input type="text" name="reologia" value="{{ $solicitud_lechada[0]->reologia }}" class="form-control text-sm"
            placeholder="Ingrese la reología" readonly>
    </div>

    <div class="col-span-5 md:col-span-1">
        <label for=""
            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Densidad</label>
        <input type="text" name="densidad" value="{{ $solicitud_lechada[0]->densidad }}" class="form-control text-sm"
            placeholder="Ingrese la densidad" readonly>
    </div>

    <div class="col-span-5 md:col-span-1">
        <label for=""
            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Filtrado</label>
        <input type="text" name="filtrado" value="{{ $solicitud_lechada[0]->filtrado }}" class="form-control text-sm"
            placeholder="Ingrese el filtrado" readonly>
    </div>

    <div class="col-span-5 md:col-span-1">
        <label for=""
            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Bombeabilidad</label>
        <input type="text" name="bombeabilidad" value="{{ $solicitud_lechada[0]->bombeabilidad }}" class="form-control text-sm"
            placeholder="Ingrese la bombeabilidad" readonly>
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
            <input type="checkbox" {{ $solicitud_lechada[0]->tiempo_50_psi == 1 ? 'checked' : '' }} name="tiempo_50_psi" id="tiempo_50_psi" disabled>
            <label for="tiempo_50_psi" class="text-sm cursor-pointer">Tiempo @ 50 psi</label>
        </div>
        <div class="flex items-center gap-2 col-span-5 md:col-span-1">
            <input type="checkbox" {{ $solicitud_lechada[0]->tiempo_500_psi == 1 ? 'checked' : '' }} name="tiempo_500_psi" id="tiempo_500_psi" disabled>
            <label for="tiempo_500_psi" class="text-sm cursor-pointer">Tiempo @ 500 psi</label>
        </div>
        <div class="flex items-center gap-2 col-span-5 md:col-span-1">
            <input type="checkbox" {{ $solicitud_lechada[0]->resistencia_12_hs == 1 ? 'checked' : '' }} name="resistencia_12_hs" id="resistencia_12_hs" disabled>
            <label for="resistencia_12_hs" class="text-sm cursor-pointer">Resistencia a las 12 hs.</label>
        </div>
        <div class="flex items-center gap-2 col-span-5 md:col-span-1">
            <input type="checkbox" {{ $solicitud_lechada[0]->resistencia_24_hs == 1 ? 'checked' : '' }} name="resistencia_24_hs" id="resistencia_24_hs" disabled>
            <label for="resistencia_24_hs" class="text-sm cursor-pointer">Resistencia a las 24 hs.</label>
        </div>
    </div>
</div>

<div class="grid grid-cols-4 gap-3 mt-2">
    <div class="col-span-4 md:col-span-1">
        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Agua
            Libre</label>
        <input type="text" name="agua_libre" value="{{ $solicitud_lechada[0]->agua_libre ? $solicitud_lechada[0]->agua_libre : 'No aplica'  }}" class="form-control text-sm" placeholder="0.0%" readonly>
    </div>
    <div class="col-span-4 md:col-span-1">
        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">SGS</label>
        <input type="text" name="sgs" value="{{ $solicitud_lechada[0]->sgs ? $solicitud_lechada[0]->sgs : 'No aplica'  }}" class="form-control text-sm" placeholder="SGS" readonly>
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
            <input type="text" name="tipo_cemento" value="{{ $solicitud_lechada[0]->tipo_cemento ? $solicitud_lechada[0]->tipo_cemento : 'No aplica'  }}" class="form-control text-sm" placeholder="Ingrese el tipo de cemento" readonly>
        </div>
    </div>
</div>

<div class="grid grid-cols-3 text-center bg-gray-100 py-2 my-3">
    <p>Lote</p>
    <p>Aditivo</p>
    <p>Conc (% BWOC)</p>
</div>
<div id="container_formulaciones_tentativas"></div>