@extends('layouts.app')

@section('titulo')
    Solicitud Lodo #{{ $solicitud->id }} - Laboratorio
@endsection

@section('contenido')
    @vite('resources/css/solicitud.css')

    <style>
        #cliente_lodo,
        #locacion_lodo,
        #equipo_lodo,
        #servicio_lodo {
            background: #b9b9b9;
            border-radius: 5px;
        }

        .mode_edicion.active {
            display: none;
        }
    </style>
    <!-- Esto seria el primer rectangulo de arriba con la info de la solicitud y los botones de pagina -->
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
                            de Lodo -
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
            <!-- Botones de info y ver los ensayos -->
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
                            aria-current="page" id="nav-tab-lodo" href="#tab-content-lodo" data-bs-toggle="tab"
                            data-bs-target="#tab-content-lodo" role="tab" aria" id="nav-tab-lodo" data-bs-toggle="tab"
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
                                id="btnHabilitarEdicionLodo">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                                Habilitar Edición
                            </button>
                            <button
                                class="bg-red-400 dark:bg-red-700 dark:bg-opacity-50 dark:text-red-600 text-white font-bold tracking-wide px-3 py-1 rounded-sm flex gap-2 hover:bg-red-500 transition-all duration-200 hidden"
                                id="btnDeshabilitarEdicionLodo">
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
                <input type="hidden" value="{{ $solicitud->id }}" name="solicitud_id">

                <div class="grid xs:grid-cols-2 md:grid-cols-6 gap-3 mt-3">
                    <div class="col-span-2 xl:col-span-1">
                        <label for="cliente_lodo"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Cliente
                            <span class="text-red-500">*</span></label>
                        <select name="cliente_lodo" id="cliente_lodo" class="text-sm inp_edit" disabled>
                            @foreach ($clientes as $c)
                                <option value="{{ $c->id }}"
                                    {{ $c->id == $solicitud->cliente_id ? 'selected' : '' }}>{{ $c->nombre }}
                                </option>
                            @endforeach
                        </select>
                        @error('cliente_lodo')
                            <small class="text-xs text-red-600">El cliente es requerido</small>
                        @enderror
                    </div>
                    <div class="col-span-2 xl:col-span-1">
                        <label for="locacion_lodo"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Yacimiento/Locación <span
                                class="text-red-500">*</span></label>
                        <select name="locacion_lodo" id="locacion_lodo" class="text-sm inp_edit" disabled>
                            @foreach ($yacimientos as $y)
                                <option value="{{ $y->id }}"
                                    {{ $y->id == $solicitud->locacion_id ? 'selected' : '' }}>{{ $y->nombre }}</option>
                            @endforeach
                        </select>
                        @error('locacion_lodo')
                            <small class="text-xs text-red-600">La locación es requerida</small>
                        @enderror
                    </div>
                    <div class="col-span-2 xl:col-span-1">
                        <label for="fecha_solicitud_lodo"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fecha de
                            Solicitud <span class="text-red-500">*</span></label>
                        <input type="date" name="fecha_solicitud_lodo" id="fecha_solicitud_lodo"
                            class="form-control text-sm p-2" value="{{ $solicitud->fecha_solicitud->format('Y-m-d') }}"
                            readonly>
                        @error('fecha_solicitud_lodo')
                            <small class="text-xs text-red-600">La fecha de solicitud es requerida</small>
                        @enderror
                    </div>

                    <div class="col-span-2 xl:col-span-1">
                        <label for="pozo_lodo" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Pozo
                            <span class="text-red-500">*</span></label>
                        <input type="text" name="pozo_lodo" id="pozo_lodo"
                            class="form-control text-sm p-2"placeholder="Pozo" value="{{ $solicitud->pozo }}" readonly>
                        @error('pozo_lodo')
                            <small class="text-xs text-red-600">El pozo es requerido</small>
                        @enderror
                    </div>

                    <div class="col-span-2 xl:col-span-1">
                        <label for="fecha_resultados_lodo"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fecha
                            de
                            Resultados <span class="text-red-500">*</span></label>
                        <input type="date" name="fecha_resultados_lodo" id="fecha_resultados_lodo"
                            class="form-control text-sm p-2" value="{{ $solicitud->fecha_resultados }}" readonly>
                        @error('fecha_resultados_lodo')
                            <small class="text-xs text-red-600">La fecha de resultados es requerida</small>
                        @enderror
                    </div>

                    <div class="col-span-2 xl:col-span-1">
                        <label for="equipo_lodo" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Equipo
                            <span class="text-red-500">*</span></label>
                        {{-- <input type="text" name="equipo_lodo" id="equipo_lodo" class="form-control text-sm p-2"
                            placeholder="Ingrese el equipo" value="{{ $solicitud->equipo }}" readonly> --}}
                        <select name="equipo_lodo" id="equipo_lodo" class="text-sm inp_edit" disabled>
                            @foreach ($equipos as $equipo)
                               <option value="{{ $equipo->id }}"
                                {{ $equipo->id == $solicitud->equipo ? 'selected' : '' }}>{{ $equipo->nombre }}
                                </option>
                            @endforeach
                        </select>
                    
                        @error('equipo_lodo')
                            <small class="text-xs text-red-600">El equipo es requerido</small>
                        @enderror
                    </div>


                    <div class="col-span-2 xl:col-span-1">
                        <label for="servicio_lodo"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Servicio
                            <span class="text-red-500">*</span></label>
                       {{--<input type="text" name="servicio_lodo" id="servicio_lodo"
                            class="form-control text-sm p-2" placeholder="Ingrese el servicio"
                            value="{{ $servicios->nombre }}" readonly>--}}
                            <select name="servicio_lodo" id="servicio_lodo" class="text-sm inp_edit" disabled>
                                @foreach ($servicios as $servicio)
                                   <option value="{{ $servicio->id }}"
                                    {{ $servicio->id == $solicitud->servicio ? 'selected' : '' }}>{{ $servicio->nombre }}
                                    </option>
                                @endforeach
                            </select>
                        @error('servicio_lodo')
                            <small class="text-xs text-red-600">El servicio es requerido</small>
                        @enderror
                    </div>

                    <div class="col-span-2 xl:col-span-1">
                        <label for="mud_company"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Compania de Lodo <span class="text-red-500">*</span></label>
                        <input type="text" name="mud_company" id="mud_company"
                            class="form-control text-sm p-2" value="{{ $solicitud->mud_company ?? 'No seleccionado'}}  " readonly>
                        @error('mud_company')
                            <small class="text-xs text-red-600">La compania de lodo es requerida</small>
                        @enderror
                    </div>

                    <div class="col-span-2 xl:col-span-1">
                        <label for="densidad_lodo"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Densidad del lodo <span class="text-red-500">*</span></label>
                        <input type="number" name="densidad_lodo" id="densidad_lodo"
                            class="form-control text-sm p-2" value="{{ $solicitud->densidad_lodo ?? 0}}" readonly>
                        @error('densidad_lodo')
                            <small class="text-xs text-red-600">La densidad del lodo es requerida</small>
                        @enderror
                    </div>

                   
                </div>
                <p class="m-0 font-bold text-lg my-3 tracking-wide">Algo para separar</p>

                <p class="m-0 mt-3 font-bold text-lg tracking-wide dark:text-gray-300">Firmas de Autorización</p>

                <div class="row mt-3">
                    <div class="col-xs-12 col-md-6 my-2">
                        <label for="firma_autorizacion"
                            class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Nombre
                            <small>(Quien autoriza)</small></label>
                        <select name="firma_autorizacion" id="firma_autorizacion"
                            class="form-select sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2"
                            disabled>
                            <option value="">-- Seleccione --</option>
                            @foreach ($users as $e)
                                @if ($e->id == $solicitud_lodo[0]->firma_autorizacion_id)
                                    <option value="{{ $e->id }}" selected>{{ $e->nombre }} {{ $e->apellido }}
                                    </option>
                                @else
                                    <option value="{{ $e->id }}">{{ $e->nombre }} {{ $e->apellido }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="col-xs-12 col-md-6 my-2">
                        <label for="fecha_autorizacion"
                            class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Fecha
                            de la Firma
                            <small>(*)</small></label>
                        <input type="date" name="fecha_autorizacion" id="fecha_autorizacion"
                            class="form-control sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2"
                            value="{{ $solicitud_lodo[0]->fecha_autorizacion }}" readonly>
                    </div>

                  

                <p class="m-0 mt-3 font-bold text-lg tracking-wide dark:text-gray-300">Reconocimiento</p>
                <div class="row mt-3">
                    <div class="col-xs-12 col-md-6 my-2">
                        <label for="firma_reconocimiento"
                            class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Nombre
                            <small>(Reconocimiento)</small></label>
                        <select name="firma_reconocimiento" id="firma_reconocimiento"
                            class="form-select sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2"
                            disabled>
                            <option value="">-- Seleccione --</option>
                            @foreach ($users as $e)
                                @if ($e->id == $solicitud_lodo[0]->firma_reconocimiento_id)
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

                    <div class="col-xs-12 col-md-6 my-2">
                        <label for="fecha_reconocimiento"
                            class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Fecha
                            de la Firma
                            <small>(*)</small></label>
                        <input type="date" name="fecha_reconocimiento" id="fecha_reconocimiento"
                            class="form-control sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2"
                            value="{{ $solicitud_lodo[0]->fecha_reconocimiento }}" readonly>
                    </div>
                </div>

                <hr>

            </div>
        </form>
   

<!-- aca iria toda la info de la solicitud de lodo para mostrar jeje -->
            <hr class="dark:bg-gray-400">


                    <!-- Aprobar la solicitud -->
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
                        <form id="form_aprobar_solicitud" enctype="multipart/form-data">
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
                            Al aprobar la solicitud, da por confirmado que la misma se encuentra en condiciones de finalizar
                            el reporte
                        </p>
                    </div>
                </div>
            @endif
        

    </div>
    @if ($solicitud->aprobada == 1)
            @include('ensayos_lodo.create')
        @endif
    <br>

   


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            VirtualSelect.init({
                ele: "#cliente_lodo",
                placeholder: "Seleccione el cliente",
            });
            VirtualSelect.init({
                ele: "#locacion_lodo",
                placeholder: "Seleccione el yacimiento",
            });
           /* VirtualSelect.init({
                ele: "#mud_company",
                placeholder: "Seleccione la compañía",
            });*/
            VirtualSelect.init({
                ele: "#equipo_lodo",
                placeholder: "Seleccione equipo",
            });
            VirtualSelect.init({
                ele: "#servicio_lodo",
                placeholder: "Seleccione servicio",
            });
        })
    </script>

     <!-- Función para aprobar la solicitud -->
     <script>
        const btnAprobarSolicitudLodo = document.getElementById('btnAprobarSolicitud');
        if (btnAprobarSolicitudLodo) {
            btnAprobarSolicitudLodo.addEventListener('click', e => {
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
      <!-- Cartel que muestra que la solicitud fue creada/editada correctamente cuando se hace el submit -->
      <script>
        document.addEventListener('DOMContentLoaded', () => {
            @if ($message = session('success'))
                successAlert('¡Solicitud Editada!', 'La Solicitud de Fractura fue editada correctamente')
            @endif
        })
     </script>
@endsection