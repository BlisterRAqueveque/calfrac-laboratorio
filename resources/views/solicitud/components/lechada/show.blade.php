@extends('layouts.app')

@section('titulo')
    Solicitud Lechada #{{ $solicitud->id }}
@endsection

@section('contenido')
    @vite('resources/css/solicitud.css')

    <style>
        #tipo_lodo,
        #cliente_lechada,
        #locacion_lechada,
        #tipo_requerimiento_lechada,
        #tipo_trabajo_lechada,
        #tipo_cementacion_lechada,
        #sgs,
        #agua_libre,
        #equipo_lechada,
        #mud_company {
            background: #b9b9b9;
            border-radius: 5px;
        }

        .mode_edicion.active {
            display: none;
        }
    </style>
    {{--
        Aca esta la view de Infromacion de la Solicitud cuando das click en el ojito en historico
    --}}
    <section class="p-2 pb-0 mb-0 relative shadow-sm section_bg dark:bg-blue-800 dark:bg-opacity-20 w-11/12 mx-auto">
        <section class="p-2 mx-auto pb-0 section_solicitud w-11/12">
            <div class="flex gap-3">
                <div class="flex justify-center items-center w-16 h-16 rounded-full bg-white shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                    </svg>
                </div>

                <div class="flex flex-col">
                    <div class="flex flex-col md:flex-row gap-1 md:gap-3">
                        <span
                            class="text-md xl:text-xl flex items-center gap-3 font-bold text-gray-700 dark:text-white">Solicitud
                            de Lechada -
                            #{{ $solicitud->id }}
                            @php
                                switch ($solicitud->estado->id) {
                                    case '1':
                                        $estado = $solicitud->estado->nombre;
                                        $clase = 'bg-blue-300 dark:bg-blue-500 dark:bg-opacity-50 dark:text-sky-200';
                                        break;
                                    case '2':
                                        $clase = 'solicitud_aprobada';
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
                    <div class="grid md:grid-cols-2 xl:grid-cols-3 text-xs md:text-sm md:items-center gap-3 lg:gap-10 mt-3">
                        <article class="col-span-3 md:col-span-1  flex items-center gap-1 dark:text-white">
                            <x-icons.user class="w-4 h-4" stroke-width="1.5" /> {{ $solicitud->user->nombre }}
                            {{ $solicitud->user->apellido }}
                        </article>

                        <article class="col-span-3 md:col-span-1 flex items-center gap-1 dark:text-white">
                            <x-icons.calendar class="w-4 h-4" stroke-width="1.5" />
                            Fecha de Carga: <b
                                class="text-gray-700 dark:text-gray-300">{{ $solicitud->created_at->format('d') }} de
                                {{ $solicitud->created_at->locale('es')->monthName }},
                                {{ $solicitud->created_at->format('Y') }}</b>
                        </article>
                        <article class="col-span-3 md:col-span-1 flex items-center gap-1 dark:text-white">
                            <x-icons.map class="w-4 h-4" stroke-width="1.5" />
                            Locación: <b
                                class="text-gray-700 dark:text-gray-300">{{ $solicitud->locacion ? $solicitud->locacion->nombre : '' }}</b>
                        </article>
                        <article class="col-span-3 md:col-span-1 flex items-center gap-1 dark:text-white">
                            <x-icons.pencil class="w-4 h-4" stroke-width="1.5" />
                            Última edición: <b
                                class="text-gray-700 dark:text-gray-300">{{ $solicitud->updated_at->format('d') }} de
                                {{ $solicitud->updated_at->locale('es')->monthName }},
                                {{ $solicitud->updated_at->format('Y') }}</b>
                        </article>
                        <article class="col-span-3 md:col-span-1 flex items-center gap-1 dark:text-white">
                            <x-icons.check class="w-4 h-4" stroke-width="1.5" />
                            Solicitud Aprobada: <b class="text-gray-700 dark:text-gray-300">
                                @if (!$solicitud->aprobada)
                                    En espera
                                @else
                                    {{ $solicitud->fecha_aprobada->format('d') }} de
                                    {{ $solicitud->fecha_aprobada->locale('es')->monthName }},
                                    {{ $solicitud->fecha_aprobada->format('Y') }}
                                @endif
                            </b>
                        </article>
                        <article class="col-span-3 md:col-span-1 flex items-center gap-1 dark:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                            Ensayo Asignado: <b class="text-gray-700 dark:text-gray-300">
                                @if ($solicitud->ensayo)
                                    {{ $solicitud->ensayo->tipo }}-{{ $solicitud->ensayo->incrementable }}-{{ $solicitud->ensayo->anio }}
                            </b>
                        @else
                            En espera
                            @endif
                        </article>
                    </div>
                </div>
            </div>
            <br>

            <ul role="tablist" aria-owns="nav-tab1 nav-tab2 nav-tab3 nav-tab4" class="nav nav-tabs text-sm md:text-md"
                id="nav-tab-with-nested-tabs" style="z-index: 999">
                <li class="nav-item w-full text-center md:w-auto" role="presentation">
                    <a class="nav-link nav_tab_mod text-violet-800 dark:text-violet-400 active" aria-current="page"
                        id="nav-tab1" href="#tab1-content" data-bs-toggle="tab" data-bs-target="#tab1-content"
                        role="tab" aria-controls="tab1-content" aria-selected="true">Información de la Solicitud</a>
                </li>
                @if ($solicitud->aprobada == 1)
                    <li class="nav-item w-full text-center md:w-auto" role="presentation">
                        <a class="nav-link nav_tab_mod text-violet-800 dark:text-violet-400 @if (session('success')) active @endif"
                            aria-current="page" id="nav-tab2" href="#tab2-content" data-bs-toggle="tab"
                            data-bs-target="#tab2-content" role="tab aria" id="nav-tab2" data-bs-toggle="tab"
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
        <div class="container_mod border dark:border-none bg-white dark:tab_bg p-3 mt-4 shadow-sm tab-pane fade show active"
            id="tab1-content" role="tabpanel" aria-labelledby="nav-tab1">

            <div class="flex items-center justify-between">
                <div class="flex w-full items-center justify-between flex-col md:flex-row">
                    <p class="m-0 font-bold text-lg tracking-wide dark:text-gray-300">Información General</p>
                    @if (!$solicitud->aprobada)
                        <div class="flex gap-3">
                            <button
                                class="bg-cyan-600 dark:bg-blue-600 dark:hover:bg-blue-700 dark:bg-opacity-70 dark:text-blue-300 text-white font-bold tracking-wide px-3 py-1 rounded-sm flex gap-2 hover:bg-cyan-700 transition-all duration-200"
                                id="btnHabilitarEdicionLechada">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                                Habilitar Edición
                            </button>
                            <button
                                class="bg-red-400 dark:bg-red-700 dark:bg-opacity-50 dark:text-red-600 text-white font-bold tracking-wide px-3 py-1 rounded-sm flex gap-2 hover:bg-red-500 transition-all duration-200 hidden"
                                id="btnDeshabilitarEdicionLechada">
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

            <form action="{{ route('solicitud.update.lechada') }}" method="POST">
                @csrf
                <input type="hidden" value="{{ $solicitud->id }}" name="solicitud_id">

                <div class="grid xs:grid-cols-2 md:grid-cols-6 gap-3 mt-3">
                    <div class="col-span-2 xl:col-span-1">
                        <label for="cliente_lechada"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Cliente
                            <span class="text-red-500">*</span></label>
                        <select name="cliente_lechada" id="cliente_lechada" class="text-sm inp_edit" disabled>
                            @foreach ($clientes as $c)
                                <option value="{{ $c->id }}"
                                    {{ $c->id == $solicitud->cliente_id ? 'selected' : '' }}>{{ $c->nombre }}
                                </option>
                            @endforeach
                        </select>
                        @error('cliente_lechada')
                            <small class="text-xs text-red-600">El cliente es requerido</small>
                        @enderror
                    </div>
                    <div class="col-span-2 xl:col-span-1">
                        <label for="locacion_lechada"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Yacimiento/Locación <span
                                class="text-red-500">*</span></label>
                        <select name="locacion_lechada" id="locacion_lechada" class="text-sm inp_edit" disabled>
                            @foreach ($yacimientos as $y)
                                <option value="{{ $y->id }}"
                                    {{ $y->id == $solicitud->locacion_id ? 'selected' : '' }}>{{ $y->nombre }}</option>
                            @endforeach
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

                    {{-- <div class="col-span-2">
                        <label for="empresa_lechada"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Empresa
                            <span class="text-red-500">*</span></label>
                        <input type="text" name="empresa_lechada" id="empresa_lechada"
                            class="form-control text-sm p-2" placeholder="Empresa / Compañía"
                            value="{{ $solicitud->empresa }}" readonly>
                        @error('empresa_lechada')
                            <small class="text-xs text-red-600">La empresa es requerida</small>
                        @enderror
                    </div> --}}

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
                        {{-- <input type="text" name="equipo_lechada" id="equipo_lechada" class="form-control text-sm p-2"
                            placeholder="Ingrese el equipo" value="{{ $solicitud->equipo }}" readonly> --}}
                        <select name="equipo_lechada" id="equipo_lechada" class="text-sm inp_edit" disabled>
                            @foreach ($equipos as $equipo)
                               <option value="{{ $equipo->id }}"
                                {{ $equipo->id == $solicitud->equipo ? 'selected' : '' }}>{{ $equipo->nombre }}
                                </option>
                            @endforeach
                        </select>
                        {{-- <2?php echo "<pre>"; var_dump($equipos); echo "</pre>"; ?> --}}
                    
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
                    {{--
                    <div class="col-span-2 xl:col-span-1">
                        <label for="programa_lechada"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Programa <span
                                class="text-red-500">*</span></label>
                        <input type="text" name="programa_lechada" id="programa_lechada"
                            class="form-control text-sm p-2" placeholder="Programa" value="{{ $solicitud->programa }}"
                            readonly>
                        @error('programa_lechada')
                            <small class="text-xs text-red-600">El programa es requerido</small>
                        @enderro
                    --}}
                    <div class="col-span-2 xl:col-span-1">
                        <label for="tipo_requerimiento_lechada"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Tipo de Requerimiento <span
                                class="text-red-500">*</span></label>
                        <select name="tipo_requerimiento_lechada" id="tipo_requerimiento_lechada" class="inp_edit"
                            disabled>
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
                        <select name="tipo_trabajo_lechada" id="tipo_trabajo_lechada" class="text-sm inp_edit" disabled>
                            @foreach ($tipo_trabajos as $tipo)
                                <option value="{{ $tipo->id }} "
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
                        <select name="tipo_cementacion_lechada" id="tipo_cementacion_lechada" class="text-sm inp_edit"
                            disabled>
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

                    <br>

                    <div class="col-span-2 md:col-span-2 xl:col-span-1">
                        <label for="ensayo_requerido_lechada"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Ensayos
                            Requeridos <span class="text-red-500">*</span></label>
                        <div class="flex gap-1">
                            <label for="ensayo_requerido_principal"
                                class="bg-gray-200 p-1 w-full max-w-28 text-center rounded-md flex items-center gap-1 border border-gray-300 cursor-pointer hover:bg-opacity-80">
                                <input type="checkbox" name="ensayo_requerido_principal" id="ensayo_requerido_principal"
                                    class="inp_edit" {{ $s_l[0]->ensayo_requerido_principal == 1 ? 'checked' : '' }}
                                    disabled>
                                Principal</label>
                            <label for="ensayo_requerido_bullheading"
                                class="bg-gray-200 p-1 w-full max-w-28 text-center rounded-md flex items-center gap-1 border border-gray-300 cursor-pointer hover:bg-opacity-80">
                                <input type="checkbox" name="ensayo_requerido_bullheading"
                                    id="ensayo_requerido_bullheading" class="inp_edit"
                                    {{ $s_l[0]->ensayo_requerido_bullheading== 1 ? 'checked' : '' }} disabled>
                                Bullheading</label>
                            <label for="ensayo_requerido_tapon"
                                class="bg-gray-200 p-1 w-full max-w-28 text-center rounded-md flex items-center gap-1 border border-gray-300 cursor-pointer hover:bg-opacity-80">
                                <input type="checkbox" name="ensayo_requerido_tapon" id="ensayo_requerido_tapon"
                                    class="inp_edit" {{ $s_l[0]->ensayo_requerido_tapon == 1 ? 'checked' : '' }} disabled>
                                Tapón</label>
                            <label for="ensayo_requerido_relleno"
                                class="bg-gray-200 p-1 w-full max-w-28 text-center rounded-md flex items-center gap-1 border border-gray-300 cursor-pointer hover:bg-opacity-80">
                                <input type="checkbox" name="ensayo_requerido_relleno" id="ensayo_requerido_relleno"
                                    class="inp_edit" {{ $s_l[0]->ensayo_requerido_relleno == 1 ? 'checked' : '' }} disabled>
                                Relleno</label>
                        </div>
                        @error('ensayo_requerido_lechada')
                            <small class="text-xs text-red-600">El ensayo es requerido</small>
                        @enderror
                    </div>
                </div>

                <hr class="my-4">

                <p class="m-0 font-bold text-lg my-3 tracking-wide">Ensayos de Referencia</p>

                <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2" for="ensayo_id">Ensayos seleccionados:</label>
                <div class="grid md:grid-cols-6 gap-3 mt-4 relative">
                    @foreach ($ensayos_referencia as $e_r)
                    <div>
                        <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2" for="ensayo_id_{{ $loop->index }}"></label>
                        <select name="ensayo_id[]" class="form-control text-sm p-2"  disabled>
                            @foreach ($ensayos as $ensayo)
                                <option value="{{ $ensayo->id }}" {{ $ensayo->id == $e_r->ensayo_id ? 'selected' : '' }}>{{ $ensayo->tipo . "-" . $ensayo->incrementable . "-" . $ensayo->anio}}</option>
                            @endforeach
                        </select>
                    </div>
                    @endforeach
                </div>
                <br>
                <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2" for="ensayo_id">Comentarios ingresados:</label>
                <div class="grid md:grid-cols-6 gap-3 mt-4 relative">
                    @foreach ($comentarios as $comentario)
                        <div>
                            <input type="text" name="" class="form-control text-sm p-2"
                            value="{{ $comentario->comentario_ensayo }}" readonly>
                        </div>
                    @endforeach
                </div>

                <hr class="my-3">
                <p class="m-0 font-bold text-lg my-3 tracking-wide">Ensayo Solicitado</p>

                <div class="grid md:grid-cols-5 gap-3 mt-3">
                    <div>
                        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">OH/Trepano
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
                            OD <small>(in)</small></label>
                        <div class="grid grid-cols-2 gap-3">
                            <input type="number" name="casing_id" class="form-control text-sm p-2"
                                placeholder="Casing ID" step=".01" value="{{ $s_l[0]->casing_id }}" readonly>
                            <input type="number" name="casing_od" class="form-control text-sm p-2"
                                placeholder="Casing OD" step=".01" value="{{ $s_l[0]->casing_od }}" readonly>
                        </div>
                    </div>

                    <div class="">
                        <label for="densidad_lodo" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Densidad
                            del Lodo <small>(ppg)</small></label>
                        <input type="number" name="densidad_lodo" id="densidad_lodo" class="form-control text-sm p-2"
                            placeholder="Densidad del lodo" step=".01" value="{{ $s_l[0]->densidad_lodo }}"
                            readonly>
                    </div>


                    <div class="">
                        <label for="tipo_lodo" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Tipo de lodo</label>
                        <select name="tipo_lodo" id="tipo_lodo" class="text-sm inp_edit" disabled>
                            <option value="" selected disabled>Seleccione un tipo de lodo</option> <!-- Opción predeterminada -->
                            @foreach ($tipo_lodo as $tipo)
                                <option value="{{ $tipo->id }}" {{ isset($s_l[0]->tipo) && $tipo->id == $s_l[0]->tipo ? 'selected' : '' }}>
                                    {{ $tipo->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="">
                        <label for="mud_company" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Compañía de Lodos</label>
                        <select name="mud_company" id="mud_company" class="text-sm inp_edit" disabled>
                            <option value="" selected disabled {{ $s_l[0]->mud_company_id == null ? 'selected' : '' }}>Seleccione la compañía</option>
                            @foreach ($mud_company as $mud)
                                <option value="{{ $mud->id }}" {{ $mud->id == $s_l[0]->mud_company_id ? 'selected' : '' }}>
                                    {{ $mud->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    {{--
                    Vieja configuracion Lodos
                    <div class="">
                        <label for="tipo_lodo" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Tipo de
                            lodo</label>
                        <select name="tipo_lodo" id="tipo_lodo" class="text-sm inp_edit" disabled>
                            @foreach ($tipo_lodo as $tipo)
                                <option value="{{ $tipo->id }}"
                                    {{ $tipo->id == $s_l[0]->tipo ? 'selected' : '' }}>
                                    {{ $tipo->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    Vieja configuracion mud_company
                    <div class="">
                        <label for="mud_company" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Compañía de
                            Lodos</label>
                        <select name="mud_company" id="mud_company" class="text-sm inp_edit" disabled>
                            @foreach ($mud_company as $mud)
                                <option value="{{ $mud->id }}"
                                    {{ $mud->id == $s_l[0]->mud_company_id ? 'selected' : '' }}>
                                    {{ $mud->nombre }}</option>
                            @endforeach
                        </select>
                    </div>                    
                    --}}
                    <div class="md:col-span-2 xl:col-span-1">
                        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Profundidad
                            Pozo <small>(MD/TVD) (m)</small></label>
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
                        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Base de
                            Lechada <small>(MD/TVD) (m)</small></label>
                        <div class="grid grid-cols-2 gap-3">
                            <input type="number" name="base_md" class="form-control text-sm p-2" placeholder="MD"
                                step=".01" value="{{ $s_l[0]->base_md }}" readonly>
                            <input type="number" name="base_tvd" class="form-control text-sm p-2" placeholder="TVD"
                                step=".01" value="{{ $s_l[0]->base_tvd }}" readonly>
                        </div>
                    </div>

                    <div class="md:col-span-2 xl:col-span-1">
                        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Tope de
                            Lechada <small>(MD/TVD) (m)</small></label>
                        <div class="grid grid-cols-2 gap-3">
                            <input type="number" name="top_of_slurry_md" class="form-control text-sm p-2"
                                placeholder="MD" step=".01" value="{{ $s_l[0]->top_of_slurry_md }}" readonly>
                            <input type="number" name="top_of_slurry_tvd" class="form-control text-sm p-2"
                                placeholder="TVD" step=".01" value="{{ $s_l[0]->top_of_slurry_tvd }}" readonly>
                        </div>
                    </div>

                    <div class="">
                        <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Volumen
                            <small>(bbl)</small></label>
                        <input type="number" name="volumen" class="form-control text-sm p-2" placeholder="Volumen"
                            step=".01" value="{{ $s_l[0]->volumen }}" readonly>
                    </div>

                    <div class="">
                        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Caudal
                            <small>(bpm)</small></label>
                        <input type="number" name="pump_rate" class="form-control text-sm p-2" placeholder="Pump Rate"
                            step=".01" value="{{ $s_l[0]->pump_rate }}" readonly>
                    </div>

                    <div class="md:col-span-2 xl:col-span-1">
                        <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Grado de
                            Temperatura <small>(°C)</small></label>
                        <input type="number" name="grado_temperatura" class="form-control sz p-2" placeholder="Cº"
                            step=".01" value="{{ $s_l[0]->grado_temperatura }}" readonly>
                    </div>

                    <div class="xl:col-span-1">
                        <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">BHCT
                            <small>(°C)</small></label>
                        <input type="number" name="bhct" id="" class="form-control sz p-2"
                            placeholder="Cº" step=".01" value="{{ $s_l[0]->bhct }}" readonly>
                    </div>

                    <div class="grid grid-cols-2 col-span-2 xl:col-span-1 gap-3">
                        <div class="xl:col-span-1">
                            <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">BHST
                                <small>(°C)</small></label>
                            <input type="number" name="bhst" id="" class="form-control text-sm p-2"
                                placeholder="Cº" step=".01" value="{{ $s_l[0]->bhst }}" readonly>
                        </div>

                    </div>
                </div>

                <hr class="my-4">

                <p class="m-0 font-bold text-lg my-3 tracking-wide">Requerimientos de Lechada</p>

                @include('solicitud.components.lechada.requerimientos')

                <p class="m-0 font-bold text-lg my-3 tracking-wide">Observación/Comentarios</p>

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

                <div class="div_sector_edicion hidden">
                    @include('solicitud.components.lechada.comments')
                </div>

            </form>

            @if ($solicitud->fundamento->count() > 0)
                <p class="m-0 mt-3 font-bold text-lg tracking-wide dark:text-gray-300">Sector de Comentarios</p>

                <div class="row md:w-1/2 mt-1 mb-2">
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($solicitud->fundamento as $c)
                        <article class="flex gap-3 mt-3">
                            @if ($c->user_fundamento->img)
                                <div class="flex justify-center items-center w-12 h-12 mx-auto">
                                    <img src="{{ asset('uploads/perfiles') . '/' . $c->user_fundamento->img }}"
                                        class="rounded-full object-cover w-12 h-12" alt="">
                                </div>
                            @else
                                <div class="flex justify-center items-center w-14 h-14 mx-auto">
                                    <img src="{{ asset('img/img_default.jpg') }}"
                                        class="rounded-full object-cover w-14 h-14" alt="">
                                </div>
                            @endif
                            <div class="text-sm flex-1">

                                <p class="m-0 flex flex-col md:flex-row md:gap-2 font-bold dark:text-gray-300">
                                    {{ $c->user_fundamento->nombre }}
                                    {{ $c->user_fundamento->apellido }} <small class="text-gray-400"> Realizó una edición
                                        el día {{ $c->created_at->format('d') }}
                                        {{ $c->created_at->locale('es')->monthName }}
                                        {{ $c->created_at->format('Y') }} -
                                        {{ $c->created_at->format('H:i') }} hs</small></p>
                                <p class="mb-0 dark:text-gray-400">
                                    {{ $c->fundamento }}
                                </p>

                                <div class="containerRta">
                                    @if ($c->respuesta)
                                        <article class="flex gap-3 mt-4">
                                            @if ($c->user_rta->img)
                                                <div class="flex justify-center items-center w-12 h-12">
                                                    <img src="{{ asset('uploads/perfiles') . '/' . $c->user_rta->img }}"
                                                        class="rounded-full object-cover w-12 h-12">
                                                </div>
                                            @else
                                                <div class="flex justify-center items-center w-14 h-14 pb-3">
                                                    <img src="{{ asset('img/img_default.jpg') }}"
                                                        class="rounded-full object-cover w-14 h-14" alt="">
                                                </div>
                                            @endif
                                            <div class="text-sm flex flex-col">
                                                <p class="m-0 font-bold dark:text-gray-300">{{ $c->user_rta->nombre }}
                                                    {{ $c->user_rta->apellido }} <small
                                                        class="text-gray-400">{{ $c->updated_at->format('d') }}
                                                        {{ $c->updated_at->locale('es')->monthName }}
                                                        {{ $c->updated_at->format('Y') }} -
                                                        {{ $c->updated_at->format('H:i') }} hs</small></p>
                                                <p class="mb-0 dark:text-gray-400">
                                                    {{ $c->respuesta }}
                                                </p>
                                            </div>
                                        </article>
                                    @else
                                        @if (auth()->user()->id != $c->user_fundamento->id || (auth()->user()->is_admin && $solicitud->estado->id == 1))
                                            <div
                                                class="bg-gray-200 inline-block px-2 rounded-md mt-3 cursor-pointer hover:bg-gray-300 transition-all duration-300">
                                                <button class="flex gap-2 items-center rtaComment">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-4 h-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                                                    </svg>
                                                    Responder
                                                </button>
                                            </div>
                                            <form action="{{ route('fundamento.rta', auth()->user()->id) }}"
                                                method="POST" class="mt-3 formRta_{{ $i }} hidden"
                                                data-btn-rta="{{ $i }}">
                                                @csrf
                                                <input type="hidden" name="fundamento_id" value="{{ $c->id }}">
                                                <textarea name="respuesta" id="respuesta" cols="30" rows="3" class="form-control sz p-2"
                                                    placeholder="Ingrese una respuesta" required></textarea>
                                                <div class="flex gap-3 justify-end mt-2">
                                                    <button
                                                        class="text-sm rounded flex items-center gap-1 px-2 py-1 hover:bg-orange-200 text-orange-400 transition-all duration-300"
                                                        onclick="removeRta(this)">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-4 h-4">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M6 18 18 6M6 6l12 12" />
                                                        </svg>
                                                        Cancelar</button>
                                                    <input type="submit"
                                                        class="bg-green-700 bg-opacity-60 text-white font-bold px-2 py-1 rounded-sm hover:shadow-lg transition-all duration-75"
                                                        value="Responder">
                                                </div>
                                            </form>
                                            @php
                                                $i++;
                                            @endphp
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            @endif

            <div class="mode_edicion">

                @if ($solicitud->aprobada)
                    <div class="mt-3 flex items-center justify-center flex-col md:flex-row gap-3 text-center bg_approved">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 ">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span>Solicitud aprobada por {{ $solicitud->user_aprobo->nombre }}
                            {{ $solicitud->user_aprobo->apellido }} el día {{ $solicitud->fecha_aprobada->format('d') }}
                            de
                            {{ $solicitud->fecha_aprobada->locale('es')->monthName }},
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

        </div>
        @if ($solicitud->aprobada == 1)
            @include('ensayo.create')
        @endif

    </div>
    <br>
    <div class="container">
        <div class="inline-block">
            <a href="{{ route('solicitudes') }}"
                class="flex gap-1 items-center btn_submit font-semibold tracking-wide py-1 px-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8"
                    stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                </svg>

                Volver al histórico
            </a>
        </div>
    </div>
    <br>
    <script src="{{ asset('js/Solicitud/comment.js') }}"></script>
    <script src="{{ asset('js/Solicitud/lechada/edition.js') }}"></script>

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
            VirtualSelect.init({
                ele: "#mud_company",
                placeholder: "Seleccione la compañía",
            });
            VirtualSelect.init({
                ele: "#equipo_lechada",
                placeholder: "Seleccione equipo",
            });
            VirtualSelect.init({
                ele: "#tipo_lodo",
                placeholder: "Seleccione tipo de lodo",
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
