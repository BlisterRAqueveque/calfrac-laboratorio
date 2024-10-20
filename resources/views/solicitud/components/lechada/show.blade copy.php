@extends('layouts.app')

@section('titulo')
    Solicitud Lechada #{{ $solicitud->id }}
@endsection

@section('contenido')
    @vite('resources/css/solicitud.css')
    <section class="p-2 pb-0 mb-0 relative shadow-sm section_bg dark:bg-blue-800 dark:bg-opacity-20"
        style="width: 90%; margin: 0 auto; margin-top: 1px;">
        <section class="p-2 mx-auto pb-0 section_solicitud" style="width: 97%;">
            <div class="flex gap-3">
                <div class="flex justify-center items-center w-16 h-16 rounded-full bg-white shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                    </svg>
                </div>
                <div class="flex flex-col">
                    <div class="flex flex-col md:flex-row md:gap-4">
                        <span
                            class="text-md xl:text-xl flex items-center gap-3 font-bold text-gray-700 dark:text-white">Solicitud de Lechada -
                            #{{ $solicitud->id }}
                            @php
                                switch ($solicitud->estado->id) {
                                    case '1':
                                        $estado = $solicitud->estado->nombre;
                                        $clase = 'bg-blue-300 dark:bg-blue-500 dark:bg-opacity-50 dark:text-sky-200';
                                        break;
                                    case '2':
                                        $clase =
                                            'solicitud_aprobada';
                                        $estado = $solicitud->estado->nombre;
                                        break;
                                    case '3':
                                        $clase = 'solicitud_finalizada';
                                        $estado = $solicitud->estado->nombre;
                                        break;
                                }
                            @endphp
                        </span>
                        <small
                            class="{{ $clase }} text-white text-xs px-2 rounded-md p-1 m-0 text-center justify-center flex md:items-center tracking-wide gap-1">
                            @if ($solicitud->estado->id == 3)
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                                </svg>
                            @endif
                            @if ($solicitud->estado->id == 1)
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            @endif
                            {{ $estado }}
                        </small>
                    </div>
                    <div class="grid grid-cols-3 text-xs md:text-sm md:items-center gap-3 lg:gap-10">
                        <article class="flex items-center gap-1 dark:text-white">
                            <x-icons.user class="w-4 h-4" stroke-width="1.5"/> {{ $solicitud->user->nombre }} {{ $solicitud->user->apellido }}
                        </article>

                        <article class="flex items-center gap-1 dark:text-white">
                            <x-icons.calendar class="w-4 h-4" stroke-width="1.5"/>
                            Fecha de Carga: <b
                                class="text-gray-700 dark:text-gray-300">{{ $solicitud->created_at->format('d') }} de
                                {{ $solicitud->created_at->format('M') }}, {{ $solicitud->created_at->format('Y') }}</b>
                        </article>
                        <article class="flex items-center gap-1 dark:text-white">
                            <x-icons.map class="w-4 h-4" stroke-width="1.5"/>
                            Locación: <b class="text-gray-700 dark:text-gray-300">{{ $solicitud->locacion }}</b>
                        </article>
                    {{-- </div> --}}

                    {{-- <div class="flex mt-2 text-xs md:text-sm items-center gap-3 lg:gap-10"> --}}
                        <article class="flex items-center gap-1 dark:text-white">
                            <x-icons.pencil class="w-4 h-4" stroke-width="1.5"/>
                            Última edición: <b
                                class="text-gray-700 dark:text-gray-300">{{ $solicitud->updated_at->format('d') }} de
                                {{ $solicitud->updated_at->format('M') }}, {{ $solicitud->updated_at->format('Y') }}</b>
                        </article>
                    {{-- </div> --}}

                    <div class="col-span-3flex flex-col md:flex-row mt-2 text-xs md:text-sm md:items-center gap-2 md:gap-10">

                        <article class="flex items-center gap-1 dark:text-white">
                            <x-icons.check class="w-4 h-4" stroke-width="1.5"/>
                            Solicitud Aprobada: <b class="text-gray-700 dark:text-gray-300">
                                @if (!$solicitud->aprobada)
                                    En espera
                                @else
                                    {{ $solicitud->fecha_aprobada->format('d') }} de
                                    {{ $solicitud->fecha_aprobada->format('M') }},
                                    {{ $solicitud->fecha_aprobada->format('Y') }}
                                @endif
                            </b>
                        </article>

                        @if ($solicitud->ensayo_asignado_id)
                            <article class="flex items-center gap-1 dark:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                                Ensayo Asignado: <b class="text-gray-700 dark:text-gray-300">
                                    {{ $solicitud->ensayo->tipo }}-{{ $solicitud->ensayo->incrementable }}-{{ $solicitud->ensayo->anio }}</b>
                            </article>
                        @endif
                    </div>
                </div>

            </div>

            <br>

            <ul role="tablist" aria-owns="nav-tab1 nav-tab2 nav-tab3 nav-tab4" class="nav nav-tabs text-sm md:text-md"
                id="nav-tab-with-nested-tabs" style="z-index: 999">
                <li class="nav-item w-full text-center md:w-auto" role="presentation">
                    <a class="nav-link nav_tab_mod text-violet-800 dark:text-violet-400 @if (!session('success')) active @endif"
                        aria-current="page" id="nav-tab1" href="#tab1-content" data-bs-toggle="tab"
                        data-bs-target="#tab1-content" role="tab" aria-controls="tab1-content"
                        aria-selected="true">Información de la Solicitud</a>
                </li>
                @if ($solicitud->aprobada == 1)
                    <li class="nav-item w-full text-center md:w-auto" role="presentation">
                        <a class="nav-link nav_tab_mod text-violet-800 dark:text-violet-400 @if (session('success')) active @endif"
                            aria-current="page" id="nav-tab2" href="#tab2-content" data-bs-toggle="tab"
                            data-bs-target="#tab2-content" role="tab" aria" id="nav-tab2" data-bs-toggle="tab"
                            role="tab">Ensayo</a>
                    </li>
                @else
                    <div class="flex flex-col md:flex-row text-center items-center">
                        <li data-tooltip-target="tooltip-default" class="w-full text-center md:w-auto cursor-not-allowed"
                            role="presentation">
                            <a class="nav-link nav_tab_mod text-violet-800 dark:text-violet-400 cursor-not-allowed"
                                aria-current="page" aria-selected="false">Ensayos </a>
                        </li>
                        <small class="text-gray-700 text-sm dark:text-gray-200 tracking-wide">(Debe aprobar la solicitud
                            para asignar un ensayo)</small>
                    </div>
                @endif
            </ul>

        </section>

    </section>

    <div class="tab-content" id="nav-tabs-content">
        <div class="container_mod border dark:border-none bg-white dark:tab_bg p-3 mt-4 shadow-sm tab-pane fade @if (!session('success')) show active @endif"
            id="tab1-content" role="tabpanel" aria-labelledby="nav-tab1">

            <div class="flex items-center justify-between">
                <div class="flex w-full items-center justify-between flex-col md:flex-row">
                    <p class="m-0 font-bold text-lg tracking-wide dark:text-gray-300">Información General</p>
                    @if (!$solicitud->aprobada)
                        <div class="flex gap-3">
                            <button
                                class="bg-cyan-600 dark:bg-blue-600 dark:hover:bg-blue-700 dark:bg-opacity-70 dark:text-blue-300 text-white font-bold tracking-wide px-3 py-1 rounded-sm flex gap-2 hover:bg-cyan-700 transition-all duration-200"
                                id="btnHabilitarEdicion">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                                Habilitar Edición
                            </button>
                            
                            <button
                                class="bg-red-400 dark:bg-red-700 dark:bg-opacity-50 dark:text-red-600 text-white font-bold tracking-wide px-3 py-1 rounded-sm flex gap-2 hover:bg-red-500 transition-all duration-200 hidden"
                                id="btnDeshabilitarEdicion">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                                Deshabilitar Edición
                            </button>
                        </div>
                    @endif
                </div>
            </div>

            <form action="{{ route('solicitud.update') }}" method="POST">
                @csrf
                <input type="hidden" value="" name="solicitud_id">

                <div class="grid xs:grid-cols-2 md:grid-cols-6 gap-3 mt-3">
                    <div class="col-span-2 xl:col-span-1">
                        <label for="cliente_lechada"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Cliente <span
                                class="text-red-500">*</span></label>
                        <select name="cliente_lechada" id="cliente_lechada" class="text-sm inp_edit" disabled>
                            @foreach ($clientes as $c)
                                <option value="{{ $c->id }}">{{ $c->nombre }}</option>
                            @endforeach
                        </select>
                        @error('cliente_lechada')
                            <small class="text-xs text-red-600">El cliente es requerido</small>
                        @enderror
                    </div>
                    <div class="col-span-2 xl:col-span-1">
                        <label for="locacion_lechada"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Yacimiento / Locación <span
                                class="text-red-500">*</span></label>
                        <select name="locacion_lechada" id="locacion_lechada" class="text-sm" disabled>
                            <option value="">-- Seleccione --</option>
                            <option value="1" {{ $solicitud->locacion == 1 ? 'selected' : '' }}>Yacimiento 1</option>
                            <option value="2" {{ $solicitud->locacion == 2 ? 'selected' : '' }}>Yacimiento 2</option>
                        </select>
                        @error('locacion_lechada')
                            <small class="text-xs text-red-600">La locación es requerida</small>
                        @enderror
                    </div>
                    <div class="col-span-2 xl:col-span-1">
                        <label for="programa_lechada"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Programa <span
                                class="text-red-500">*</span></label>
                        <input type="text" name="programa_lechada" id="programa_lechada"
                            class="form-control text-sm p-2" placeholder="Programa" value="{{ $solicitud->programa }}"
                            readonly>
                        @error('programa_lechada')
                            <small class="text-xs text-red-600">El programa es requerido</small>
                        @enderror
                    </div>
                    <div class="col-span-2 xl:col-span-1">
                        <label for="fecha_solicitud_lechada"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fecha de
                            Solicitud <span class="text-red-500">*</span></label>
                        <input type="date" name="fecha_solicitud_lechada" id="fecha_solicitud_lechada"
                            class="form-control text-sm p-2" value="{{ $solicitud->fecha_solicitud->format('Y-m-d') }}"
                            readonly>
                        @error('fecha_solicitud_lechada')
                            <small class="text-xs text-red-600">La fecha de solicitud es requerida</small>
                        @enderror
                    </div>

                    <div class="col-span-2">
                        <label for="empresa_lechada"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Empresa <span
                                class="text-red-500">*</span></label>
                        <input type="text" name="empresa_lechada" id="empresa_lechada"
                            class="form-control text-sm p-2" placeholder="Empresa / Compañía"
                            value="{{ $solicitud->empresa }}" readonly>
                        @error('empresa_lechada')
                            <small class="text-xs text-red-600">La empresa es requerida</small>
                        @enderror
                    </div>

                    <div class="col-span-2 xl:col-span-1">
                        <label for="pozo_lechada" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Pozo
                            <span class="text-red-500">*</span></label>
                        <input type="text" name="pozo_lechada" id="pozo_lechada"
                            class="form-control text-sm p-2"placeholder="Pozo" value="{{ $solicitud->pozo }}" readonly>
                        @error('pozo_lechada')
                            <small class="text-xs text-red-600">El pozo es requerido</small>
                        @enderror
                    </div>

                    <div class="col-span-2 xl:col-span-1">
                        <label for="fecha_resultados_lechada"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fecha
                            de
                            Resultados <span class="text-red-500">*</span></label>
                        <input type="date" name="fecha_resultados_lechada" id="fecha_resultados_lechada"
                            class="form-control text-sm p-2" value="{{ $solicitud->fecha_resultados }}" readonly>
                        @error('fecha_resultados_lechada')
                            <small class="text-xs text-red-600">La fecha de resultados es requerida</small>
                        @enderror
                    </div>

                    <div class="col-span-2 xl:col-span-1">
                        <label for="equipo_lechada" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Equipo
                            <span class="text-red-500">*</span></label>
                        <input type="text" name="equipo_lechada" id="equipo_lechada" class="form-control text-sm p-2"
                            placeholder="Ingrese el equipo" value="{{ $solicitud->equipo }}" readonly>
                        @error('equipo_lechada')
                            <small class="text-xs text-red-600">El equipo es requerido</small>
                        @enderror
                    </div>

                    <div class="col-span-2 xl:col-span-1">
                        <label for="servicio_lechada"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Servicio
                            <span class="text-red-500">*</span></label>
                        <input type="text" name="servicio_lechada" id="servicio_lechada"
                            class="form-control text-sm p-2" placeholder="Ingrese el servicio"
                            value="{{ $solicitud->servicio }}" readonly>
                        @error('servicio_lechada')
                            <small class="text-xs text-red-600">El servicio es requerido</small>
                        @enderror
                    </div>

                    <div class="col-span-2 xl:col-span-1">
                        <label for="tipo_requerimiento_lechada"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Tipo de Requerimiento <span
                                class="text-red-500">*</span></label>
                        <select name="tipo_requerimiento_lechada" id="tipo_requerimiento_lechada" disabled>
                            @foreach ($tipo_requerimiento_cemento as $tipo)
                                <option value="{{ $tipo->id }}"
                                    {{ $solicitud->tipo_requerimiento_cemento_id == $tipo->id ? 'selected' : '' }}>
                                    {{ $tipo->nombre }}</option>
                            @endforeach
                        </select>
                        @error('tipo_requerimiento_lechada')
                            <small class="text-xs text-red-600">El tipo de requerimiento es requerido</small>
                        @enderror
                    </div>

                    <div class="col-span-2 xl:col-span-1">
                        <label for="tipo_trabajo_lechada"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Tipo de
                            Trabajo <span class="text-red-500">*</span></label>
                        <select name="tipo_trabajo_lechada" id="tipo_trabajo_lechada" class="text-sm" disabled>
                            @foreach ($tipo_trabajos as $tipo)
                                <option value="{{ $tipo->id }}"
                                    {{ $solicitud->tipo_trabajo == $tipo->id ? 'selected' : '' }}>{{ $tipo->nombre }}
                                </option>
                            @endforeach
                        </select>
                        @error('tipo_trabajo_lechada')
                            <small class="text-xs text-red-600">El tipo de trabajo es requerido</small>
                        @enderror
                    </div>

                    <div class="col-span-2 md:col-span-2 xl:col-span-1">
                        <label for="tipo_cementacion_lechada"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Tipo
                            de Cementación <span class="text-red-500">*</span></label>
                        <select name="tipo_cementacion_lechada" id="tipo_cementacion_lechada" class="text-sm" disabled>
                            <option value="">-- Seleccione --</option>
                            @foreach ($tipo_cementacion as $tipo)
                                <option value="{{ $tipo->id }}"
                                    {{ $solicitud->tipo_cementacion_id == $tipo->id ? 'selected' : '' }}>
                                    {{ $tipo->nombre }}</option>
                            @endforeach
                        </select>
                        @error('tipo_cementacion_lechada')
                            <small class="text-xs text-red-600">El tipo de cementación es requerido</small>
                        @enderror
                    </div>


                    <div class="col-span-2 md:col-span-2 xl:col-span-1">
                        <label for="ensayo_requerido_lechada"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Ensayos
                            Requeridos <span class="text-red-500">*</span></label>
                        <div class="flex gap-1">
                            <label for="ensayo_requerido_principal"
                                class="bg-gray-200 p-1 w-full max-w-28 text-center rounded-md flex items-center gap-1 border border-gray-300 cursor-pointer hover:bg-opacity-80">
                                <input type="checkbox" name="ensayo_requerido_principal" id="ensayo_requerido_principal"
                                    {{ $s_l[0]->ensayo_requerido_principal == 1 ? 'checked' : '' }} disabled>
                                Principal</label>
                            <label for="ensayo_requerido_bullheading"
                                class="bg-gray-200 p-1 w-full max-w-28 text-center rounded-md flex items-center gap-1 border border-gray-300 cursor-pointer hover:bg-opacity-80">
                                <input type="checkbox" name="ensayo_requerido_bullheading"
                                    id="ensayo_requerido_bullheading"
                                    {{ $s_l[0]->ensayo_requerido_relleno == 1 ? 'checked' : '' }} disabled>
                                Bullheading</label>
                        </div>
                        @error('ensayo_requerido_lechada')
                            <small class="text-xs text-red-600">El ensayo es requerido</small>
                        @enderror
                    </div>
                </div>

                <hr class="my-4">

                <p class="m-0 font-bold text-lg my-3 tracking-wide">Ensayos de Referencia</p>

                @foreach ($ensayos_referencia as $e_r)
                    <div class="grid md:grid-cols-6 gap-3 mt-4 relative">
                        <div>
                            <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2"
                                for="ensayo_id">Seleccione el Ensayo</label>
                            <input type="text" name="" class="form-control text-sm p-2"
                                value="Ensayo Nº{{ $e_r->id }}" readonly>
                        </div>
                        <div class="md:col-span-3 xl:col-span-2"><label
                                class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Top of Slurry (m)</label>
                            <div class="grid grid-cols-2 gap-2">
                                <input class="form-control text-sm p-2 testing_1 top_of_slurry_tvd_1" min="0"
                                    value="{{ $e_r->top_of_slurry_tvd }}" placeholder="TVD" readonly="true">
                                <input class="form-control text-sm p-2 testing_1" value="{{ $e_r->top_of_slurry_md }}"
                                    min="0" placeholder="MD" readonly="true">
                            </div>
                        </div>
                        <div class="md:col-span-2 xl:col-span-1">
                            <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Densidad (m)</label>
                            <input class="form-control text-sm p-2 testing_1" placeholder="Ingrese la densidad"
                                readonly="true" value="{{ $e_r->densidad }}">
                        </div>
                        <div class="md:col-span-2 xl:col-span-1"><label
                                class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Grado de Temperatura
                                (Cº)
                            </label>
                            <input class="form-control text-sm p-2 testing_1" placeholder="Ingrese la Temperatura ºC"
                                readonly="true" value="{{ $e_r->grado_temperatura }}">
                        </div>
                        <div class="grid col-span-1 grid-cols-2 gap-3">
                            <div>
                                <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">BHCE Cº
                                </label>
                                <input class="form-control text-sm p-2 testing_1" placeholder="BHCE" readonly="true"
                                    value="{{ $e_r->bhce }}">
                            </div>
                            <div>
                                <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">BHCT Cº</label>
                                <input class="form-control text-sm p-2 testing_1" placeholder="BHCT" readonly="true"
                                    value="{{ $e_r->bhct }}">
                            </div>
                        </div>
                    </div>
                    <hr class="my-3">
                @endforeach

                <p class="m-0 font-bold text-lg my-3 tracking-wide">Ensayo Solicitado</p>

                <div class="grid md:grid-cols-5 gap-3 mt-3">
                    <div>
                        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">OH / Trepano
                            <small>(in)</small></label>
                        <div class="grid grid-cols-2 gap-3">
                            <input type="number" name="OH" class="form-control text-sm p-2" placeholder="OH"
                                step=".01" value="{{ $s_l[0]->OH }}" readonly>
                            <input type="number" name="trepano" id="" class="form-control text-sm p-2"
                                placeholder="Trepano" step=".01" value="{{ $s_l[0]->trepano }}" readonly>
                        </div>
                    </div>

                    <div class="">
                        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Casing ID y
                            OD</label>
                        <div class="grid grid-cols-2 gap-3">
                            <input type="number" name="casing_id" class="form-control text-sm p-2"
                                placeholder="Casing ID" step=".01" value="{{ $s_l[0]->casing_id }}" readonly>
                            <input type="number" name="casing_od" class="form-control text-sm p-2"
                                placeholder="Casing OD" step=".01" value="{{ $s_l[0]->casing_od }}" readonly>
                        </div>
                    </div>

                    <div class="">
                        <label for="densidad_lodo" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Densidad
                            del Lodo (ppg)</label>
                        <input type="number" name="densidad_lodo" id="densidad_lodo" class="form-control text-sm p-2"
                            placeholder="Densidad del lodo" step=".01" value="{{ $s_l[0]->densidad_lodo }}"
                            readonly>
                    </div>

                    <div class="">
                        <label for="tipo_lodo" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Tipo de
                            lodo</label>
                        <input type="text" name="tipo_lodo" id="tipo_lodo" class="form-control text-sm p-2"
                            placeholder="Lodo" value="{{ $s_l[0]->tipo_lodo }}" readonly>
                    </div>

                    <div class="">
                        <label for="cia" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">CIA</label>
                        <input type="text" name="cia" id="cia" class="form-control text-sm p-2"
                            placeholder="CIA" value="{{ $s_l[0]->cia }}" readonly>
                    </div>

                    <div class="md:col-span-2 xl:col-span-1">
                        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Profundidad
                            Pozo (MD / TVD) (m)</label>
                        <div class="grid grid-cols-2 gap-3">
                            <input type="number" min="0" name="profundidad_pozo_md"
                                class="form-control text-sm p-2" placeholder="MD" step=".01"
                                value="{{ $s_l[0]->profundidad_pozo_md }}" readonly>
                            <input type="number" min="0" name="profundidad_pozo_tvd"
                                class="form-control text-sm p-2" placeholder="TVD" step=".01"
                                value="{{ $s_l[0]->profundidad_pozo_tvd }}" readonly>
                        </div>
                    </div>

                    <div class="">
                        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Base (MD
                            /
                            TVD) (m)</label>
                        <div class="grid grid-cols-2 gap-3">
                            <input type="number" name="base_md" class="form-control text-sm p-2" placeholder="MD"
                                step=".01" value="{{ $s_l[0]->base_md }}" readonly>
                            <input type="number" name="base_tvd" class="form-control text-sm p-2" placeholder="TVD"
                                step=".01" value="{{ $s_l[0]->base_tvd }}" readonly>
                        </div>
                    </div>

                    <div class="md:col-span-2 xl:col-span-1">
                        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Top of
                            Slurry
                            (TVD / MD) (m)</label>
                        <div class="grid grid-cols-2 gap-3">
                            <input type="number" name="top_of_slurry_tvd" class="form-control text-sm p-2"
                                placeholder="TVD" step=".01" value="{{ $s_l[0]->top_of_slurry_tvd }}" readonly>
                            <input type="number" name="top_of_slurry_md" class="form-control text-sm p-2"
                                placeholder="MD" step=".01" value="{{ $s_l[0]->top_of_slurry_md }}" readonly>
                        </div>
                    </div>

                    <div class="">
                        <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Volumen</label>
                        <input type="number" name="volumen" class="form-control text-sm p-2" placeholder="Volumen"
                            step=".01" value="{{ $s_l[0]->volumen }}" readonly>
                    </div>

                    <div class="">
                        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Pump
                            Rate</label>
                        <input type="number" name="pump_rate" class="form-control text-sm p-2" placeholder="Pump Rate"
                            step=".01" value="{{ $s_l[0]->pump_rate }}" readonly>
                    </div>

                    <div class="md:col-span-2 xl:col-span-1">
                        <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Grado de
                            Temperatura Cº</label>
                        <input type="number" name="grado_temperatura" class="form-control sz p-2" placeholder="Cº"
                            step=".01" value="{{ $s_l[0]->grado_temperatura }}" readonly>
                    </div>

                    <div class="grid grid-cols-2 col-span-2 xl:col-span-1 gap-3">
                        <div class="xl:col-span-1">
                            <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">BHST
                                Cº</label>
                            <input type="number" name="bhst" id="" class="form-control text-sm p-2"
                                placeholder="Cº" step=".01" value="{{ $s_l[0]->bhst }}" readonly>
                        </div>

                        <div class="xl:col-span-1">
                            <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">BHCT
                                Cº</label>
                            <input type="number" name="bhct" id="" class="form-control sz p-2"
                                placeholder="Cº" step=".01" value="{{ $s_l[0]->bhct }}" readonly>
                        </div>
                    </div>
                </div>

                <hr class="my-4">

                <p class="m-0 font-bold text-lg my-3 tracking-wide">Requerimientos de Lechada</p>

                @include('solicitud.components.lechada.requerimientos')

                <p class="m-0 font-bold text-lg my-3 tracking-wide">Observación / Comentarios</p>

                <div class="grid mt-3">
                    <div class="col-span-2 md:col-span-1">
                        <textarea name="observacion_lechada" rows="5" class="form-control text-sm" placeholder="Máximo 500 caracteres"
                            readonly> {{ $s_l[0]->observacion }}</textarea>
                    </div>
                </div>

                <hr class="my-4">
                <p class="m-0 font-bold text-lg my-3 tracking-wide">Firma de Autorización para realizar el trabajo</p>

                <div class="grid grid-cols-2 gap-3 mt-3">
                    <div>
                        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">¿Quién
                            autoriza?</label>
                        <select name="firma_autorizacion_lechada" class="form-select text-sm" disabled>
                            <option value="">-- Seleccione --</option>
                            @foreach ($users as $e)
                                @if ($e->id == $s_l[0]->firma_autorizacion_id)
                                    <option value="{{ $e->id }}" selected>{{ $e->nombre }}
                                        {{ $e->apellido }}
                                    </option>
                                @else
                                    <option value="{{ $e->id }}">{{ $e->nombre }} {{ $e->apellido }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fecha de
                            Autorización</label>
                        <input type="date" name="fecha_autorizacion_autorizacion"
                            value="{{ $s_l[0]->fecha_autorizacion }}" readonly class="form-control text-sm">
                    </div>
                </div>

                <p class="m-0 font-bold text-lg my-3 tracking-wide">Reconocimiento de que el trabajo fue realizado</p>

                <div class="grid grid-cols-2 gap-3 mt-3">
                    <div>
                        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">¿Quién
                            reconoce el trabajo?</label>
                        <select name="firma_reconocimiento_lechada" class="form-select text-sm" disabled>
                            <option value="">-- Seleccione --</option>
                            @foreach ($users as $e)
                                @if ($e->id == $s_l[0]->firma_reconocimiento_id)
                                    <option value="{{ $e->id }}" selected>{{ $e->nombre }}
                                        {{ $e->apellido }}
                                    </option>
                                @else
                                    <option value="{{ $e->id }}">{{ $e->nombre }} {{ $e->apellido }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fecha de
                            Reconocimiento</label>
                        <input type="date" name="fecha_reconocimiento_lechada"
                            value="{{ $s_l[0]->fecha_reconocimiento }}" readonly class="form-control text-sm">
                    </div>
                </div>

                <hr class="my-4">

            </form>

            @if ($solicitud->aprobada)
                <div
                    class="mt-3 flex items-center justify-center flex-col md:flex-row gap-3 text-center bg-green-500 bg-opacity-40 dark:bg-green-600 dark:bg-opacity-10 border-1 p-1 rounded-sm w-full md:w-1/2 mx-auto border-green-500 text-green-800 dark:text-green-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 ">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <span>Solicitud aprobada por {{ $solicitud->user_aprobo->nombre }}
                        {{ $solicitud->user_aprobo->apellido }} el día {{ $solicitud->fecha_aprobada->format('d') }}
                        de
                        {{ $solicitud->fecha_aprobada->format('M') }},
                        {{ $solicitud->fecha_aprobada->format('Y') }}</span>
                </div>
            @else
                <div class="row mt-3">
                    <div class="flex flex-col items-center gap-2">
                        <form id="form_aprobar_solicitud">
                            @csrf
                            <input type="hidden" name="solicitud_id" value="{{ $solicitud->id }}">
                            <input type="button" id="btnAprobarSolicitud" value="Aprobar Solicitud"
                                class="bg-emerald-400 dark:bg-emerald-600 dark:bg-opacity-40 text-white font-bold tracking-wide px-3 py-1 rounded-sm flex gap-2 hover:bg-emerald-500 dark:hover:bg-emerald-600 transition-all duration-200 disabled:bg-gray-400 disabled:cursor-not-allowed">
                        </form>
                        <p
                            class="mb-0 flex flex-col text-center md:flex-row items-center gap-2 text-gray-600 dark:text-gray-300 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.8" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                            </svg>
                            Al aprobar la solicitud, da por confirmado que la misma se encuentra en condiciones de
                            asignarle
                            un
                            ensayo. (La misma ya no se podrá editar)
                        </p>
                    </div>
                </div>
            @endif
        </div>

        {{-- @if ($ensayos->count() > 0)
            @include('ensayo.show')
            @else
            @endif --}}
            @include('ensayo.create')
        <br>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            VirtualSelect.init({
                ele: "#cliente_lechada",
                placeholder: "Seleccione el cliente",
            });
            VirtualSelect.init({
                ele: "#locacion_lechada",
                placeholder: "Seleccione el yacimiento",
            });
            VirtualSelect.init({
                ele: "#tipo_requerimiento_lechada",
                placeholder: "Seleccione el tipo de requerimiento",
            });
            VirtualSelect.init({
                ele: "#tipo_trabajo_lechada",
                placeholder: "Seleccione el tipo de trabajo",
            });
            VirtualSelect.init({
                ele: "#tipo_cementacion_lechada",
                placeholder: "Seleccione el tipo de cementación",
            });
        })
    </script>

    <!-- Función para aprobar la solicitud -->
    <script>
        const btnAprobarSolicitud = document.getElementById('btnAprobarSolicitud');
        if (btnAprobarSolicitud) {
            btnAprobarSolicitud.addEventListener('click', e => {
                e.preventDefault();

                let form = new FormData(document.getElementById('form_aprobar_solicitud'))
                confirmAlert('¿Está seguro de aprobar la solicitud?',
                    'Una vez aprobado, la misma no se podrá editar más', 1, 'Aprobar Solicitud').then((
                    confirmed) => {
                    if (confirmed) {
                        loadingAlert('Aprobación en progreso, por favor espere',
                            'Se están almacenando los cambios y notificando vía email');

                        fetch("{{ route('solicitud.aprobar') }}", {
                                method: 'POST',
                                body: form
                            }).then((response) => response.json())
                            .then((data) => {
                                if (data) {
                                    Swal.close();
                                    successAlert('¡Solicitud Aprobada!',
                                        'La solicitud fue aprobada correctamente').then((
                                        confirmed) => {
                                        window.location.reload();
                                    })
                                }
                            })
                    }
                })

            })
        }
    </script>
@endsection
