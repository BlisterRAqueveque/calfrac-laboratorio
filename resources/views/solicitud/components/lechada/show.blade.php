@extends('layouts.app')

@section('titulo')
    Solicitud Lechada #1- Laboratorio
@endsection

@section('contenido')
    <!-- TODO | Pasar estos estilos a otro lado -->
    <style>
        .estado_pendiente {
            background: rgb(118, 158, 201);
            letter-spacing: .5px;
        }

        .estado_aprobada {
            background: rgb(170, 214, 209);
            letter-spacing: .5px;
        }

        .estado_finalizada {
            background: rgb(170, 214, 170);
            letter-spacing: .5px;
        }

        .section_solicitud {
            margin-top: 0px
        }

        @media (100px < width < 1200px) {
            .section_solicitud {
                margin-top: 15px
            }
        }

        .section_bg {
            background-color: #fdf4e5;
        }
    </style>
    {{-- style="background-color: #fdf4e5; width: 90%; margin: 0 auto; margin-top: 1px;" --}}
    <section class="p-2 pb-0 mb-0 relative shadow-sm section_bg dark:bg-blue-800 dark:bg-opacity-20"
        style="width: 90%; margin: 0 auto; margin-top: 1px;">
        <section class="p-2 mx-auto pb-0 section_solicitud" style="width: 97%;">
            <div class="flex gap-3">
                <div class="flex justify-center items-center w-16 h-16 rounded-full bg-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                    </svg>
                </div>
                <div class="flex flex-col">
                    <div class="flex flex-col md:flex-row md:gap-4">
                        <span
                            class="text-md xl:text-xl flex items-center gap-3 font-bold text-gray-700 dark:text-white">Solicitud
                            de
                            Lechada -
                            #2
                            @php
                                switch ($solicitud->estado->id) {
                                    case '1':
                                        $estado = $solicitud->estado->nombre;
                                        $clase = 'bg-blue-300 dark:bg-blue-500 dark:bg-opacity-50 dark:text-sky-200';
                                        break;
                                    case '2':
                                        $clase =
                                            'bg-green-500 bg-opacity-50 dark:bg-green-500 dark:bg-opacity-50 dark:text-green-200';
                                        $estado = $solicitud->estado->nombre;
                                        break;
                                    case '3':
                                        $clase =
                                            'bg-green-500 bg-opacity-50 dark:bg-green-500 dark:bg-opacity-50 dark:text-green-200';
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
                    <div class="flex flex-col mt-2 md:flex-row text-xs md:text-sm md:items-center gap-3 md:gap-10">
                        <article class="flex items-center gap-1 dark:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                            {{ $solicitud->user->nombre }} {{ $solicitud->user->apellido }}
                        </article>

                        <article class="flex items-center gap-1 dark:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                            </svg>
                            Fecha de Carga: <b
                                class="text-gray-700 dark:text-gray-300">{{ $solicitud->created_at->format('d') }} de
                                {{ $solicitud->created_at->format('M') }}, {{ $solicitud->created_at->format('Y') }}</b>
                        </article>
                        <article class="flex items-center gap-1 dark:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 6.75V15m6-6v8.25m.503 3.498 4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 0 0-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0Z" />
                            </svg>
                            Locación: <b class="text-gray-700 dark:text-gray-300">{{ $solicitud->locacion }}</b>
                        </article>
                    </div>

                    <div class="flex mt-2 text-xs md:text-sm items-center gap-10">
                        <article class="flex items-center gap-1 dark:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                            </svg>
                            Última edición: <b
                                class="text-gray-700 dark:text-gray-300">{{ $solicitud->updated_at->format('d') }} de
                                {{ $solicitud->updated_at->format('M') }}, {{ $solicitud->updated_at->format('Y') }}</b>
                        </article>
                    </div>

                    <div class="flex flex-col md:flex-row mt-2 text-xs md:text-sm md:items-center gap-2 md:gap-10">

                        <article class="flex items-center gap-1 dark:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
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
                                    #{{ $solicitud->ensayo_asignado_id }}</b>
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
                            role="tab">Ensayos</a>
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
                    {{-- @if (!$solicitud->aprobada) --}}
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
                    {{-- @endif --}}
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
                        <select name="cliente_lechada" id="cliente_lechada" class="form-select text-sm p-2" disabled>
                            <option value="">-- Seleccione --</option>
                        </select>
                        @error('cliente_lechada')
                            <small class="text-xs text-red-600">El cliente es requerido</small>
                        @enderror
                    </div>
                    <div class="col-span-2 xl:col-span-1">
                        <label for="locacion_lechada"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Yacimiento / Locación</label>
                        <input type="text" name="locacion_lechada" id="locacion_lechada"
                            class="form-control text-sm p-2" placeholder="Programa" value="{{ $solicitud->locacion }}"
                            readonly>
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
                            class="form-control text-sm p-2" value="{{ $solicitud->fecha_solicitud }}" readonly>
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
                        <label for="fecha_tratamiento_lechada"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fecha
                            de Tratamiento <span class="text-red-500">*</span></label>
                        <input type="date" name="fecha_tratamiento_lechada" id="fecha_tratamiento_lechada"
                            class="form-control text-sm p-2" value="{{ $solicitud->fecha_tratamiento }}" readonly>
                        @error('fecha_tratamiento_lechada')
                            <small class="text-xs text-red-600">La fecha de tratamiento es requerida</small>
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
                        <label for="fecha_reporte_lechada"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Fecha de
                            Reporte <span class="text-red-500">*</span></label>
                        <input type="date" name="fecha_reporte_lechada" id="fecha_reporte_lechada"
                            class="form-control text-sm p-2" value="{{ $solicitud->fecha_reporte }}" readonly>
                        @error('fecha_reporte_lechada')
                            <small class="text-xs text-red-600">La fecha de reporte es requerida</small>
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

                    <div class="col-span-2 md:col-span-2 xl:col-span-1">
                        <label for="reporte_lab_tall_lechada"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Reporte
                            Laboratorio Tall <span class="text-red-500">*</span></label>
                        <input type="text" name="reporte_lab_tall_lechada" id="reporte_lab_tall_lechada"
                            class="form-control text-sm p-2" placeholder="Ingrese el reporte"
                            value="{{ $solicitud->reporte_lab_tall }}" readonly>
                        @error('reporte_lab_tall_lechada')
                            <small class="text-xs text-red-600">El Reporte Tall es requerido</small>
                        @enderror
                    </div>

                    <div class="col-span-2 md:col-span-2 xl:col-span-1">
                        <label for="reporte_lab_lead_lechada"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Reporte
                            Laboratorio Lead <span class="text-red-500">*</span></label>
                        <input type="text" name="reporte_lab_lead_lechada" id="reporte_lab_lead_lechada"
                            class="form-control text-sm p-2" placeholder="Ingrese el reporte"
                            value="{{ $solicitud->reporte_lab_lead }}" readonly>
                        @error('reporte_lab_lead_lechada')
                            <small class="text-xs text-red-600">El Reporte Lead es requerido</small>
                        @enderror
                    </div>

                    <div class="col-span-2 xl:col-span-1">
                        <label for="tipo_trabajo_lechada"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Tipo de
                            Trabajo <span class="text-red-500">*</span></label>
                        <select name="tipo_trabajo_lechada" id="tipo_trabajo_lechada" class="form-select text-sm p-2"
                            disabled>
                            <option value="">-- Seleccione --</option>
                            <option value="1" {{ $solicitud->tipo_trabajo == '1' ? 'selected' : '' }}>Tipo de Trabajo
                                1</option>
                            <option value="2" {{ $solicitud->tipo_trabajo == '2' ? 'selected' : '' }}>Tipo de Trabajo
                                2</option>
                            {{-- @foreach ($tipo_trabajo as $tipo)
                                <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                            @endforeach --}}
                        </select>
                        @error('tipo_trabajo_lechada')
                            <small class="text-xs text-red-600">El tipo de trabajo es requerido</small>
                        @enderror
                    </div>

                    <div class="col-span-2 md:col-span-2 xl:col-span-1">
                        <label for="tipo_cementacion_lechada"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Tipo
                            de Cementación <span class="text-red-500">*</span></label>
                        <select name="tipo_cementacion_lechada" id="tipo_cementacion_lechada"
                            class="form-select text-sm p-2" disabled>
                            <option value="">-- Seleccione --</option>
                            <option value="1" {{ $solicitud->tipo_cementacion == '1' ? 'selected' : '' }}>Tipo de
                                Cementación 1</option>
                            <option value="2" {{ $solicitud->tipo_cementacion == '2' ? 'selected' : '' }}>Tipo de
                                Cementación 2</option>
                            {{-- @foreach ($tipo_trabajo as $tipo)
                                <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                            @endforeach --}}
                        </select>
                        @error('tipo_cementacion_lechada')
                            <small class="text-xs text-red-600">El tipo de cementación es requerido</small>
                        @enderror
                    </div>


                    <div class="col-span-2 md:col-span-2 xl:col-span-1">
                        <label for="ensayo_requerido_lechada"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Ensayos
                            Requeridos <span class="text-red-500">*</span></label>
                        <select name="ensayo_requerido_lechada" id="ensayo_requerido_lechada"
                            class="form-select text-sm p-2" disabled>
                            <option value="">-- Seleccione --</option>
                            <option value="1" {{ $solicitud->ensayo_requerido == '1' ? 'selected' : '' }}>Ensayo
                                Requerido 1</option>
                            <option value="2" {{ $solicitud->ensayo_requerido == '2' ? 'selected' : '' }}>Ensayo
                                Requerido 2</option>
                            {{-- @foreach ($tipo_trabajo as $tipo)
                                            <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                                        @endforeach --}}
                        </select>
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
                                step=".01" value="{{ $solicitud_lechada[0]->OH }}" readonly>
                            <input type="number" name="trepano" id="" class="form-control text-sm p-2"
                                placeholder="Trepano" step=".01" value="{{ $solicitud_lechada[0]->trepano }}"
                                readonly>
                        </div>
                    </div>

                    <div class="">
                        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Casing ID y
                            OD</label>
                        <div class="grid grid-cols-2 gap-3">
                            <input type="number" name="casing_id" class="form-control text-sm p-2"
                                placeholder="Casing ID" step=".01" value="{{ $solicitud_lechada[0]->casing_id }}"
                                readonly>
                            <input type="number" name="casing_od" class="form-control text-sm p-2"
                                placeholder="Casing OD" step=".01" value="{{ $solicitud_lechada[0]->casing_od }}"
                                readonly>
                        </div>
                    </div>

                    <div class="">
                        <label for="densidad_lodo" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Densidad
                            del Lodo (ppg)</label>
                        <input type="number" name="densidad_lodo" id="densidad_lodo" class="form-control text-sm p-2"
                            placeholder="Densidad del lodo" step=".01"
                            value="{{ $solicitud_lechada[0]->densidad_lodo }}" readonly>
                    </div>

                    <div class="">
                        <label for="tipo_lodo" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Tipo de
                            lodo</label>
                        <input type="text" name="tipo_lodo" id="tipo_lodo" class="form-control text-sm p-2"
                            placeholder="Lodo" value="{{ $solicitud_lechada[0]->tipo_lodo }}" readonly>
                    </div>

                    <div class="">
                        <label for="cia" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">CIA</label>
                        <input type="text" name="cia" id="cia" class="form-control text-sm p-2"
                            placeholder="CIA" value="{{ $solicitud_lechada[0]->cia }}" readonly>
                    </div>

                    <div class="md:col-span-2 xl:col-span-1">
                        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Profundidad
                            Pozo (MD / TVD) (m)</label>
                        <div class="grid grid-cols-2 gap-3">
                            <input type="number" min="0" name="profundidad_pozo_md"
                                class="form-control text-sm p-2" placeholder="MD" step=".01"
                                value="{{ $solicitud_lechada[0]->profundidad_pozo_md }}" readonly>
                            <input type="number" min="0" name="profundidad_pozo_tvd"
                                class="form-control text-sm p-2" placeholder="TVD" step=".01"
                                value="{{ $solicitud_lechada[0]->profundidad_pozo_tvd }}" readonly>
                        </div>
                    </div>

                    <div class="">
                        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Base (MD
                            /
                            TVD) (m)</label>
                        <div class="grid grid-cols-2 gap-3">
                            <input type="number" name="base_md" class="form-control text-sm p-2" placeholder="MD"
                                step=".01" value="{{ $solicitud_lechada[0]->base_md }}" readonly>
                            <input type="number" name="base_tvd" class="form-control text-sm p-2" placeholder="TVD"
                                step=".01" value="{{ $solicitud_lechada[0]->base_tvd }}" readonly>
                        </div>
                    </div>

                    <div class="md:col-span-2 xl:col-span-1">
                        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Top of
                            Slurry
                            (TVD / MD) (m)</label>
                        <div class="grid grid-cols-2 gap-3">
                            <input type="number" name="top_of_slurry_tvd" class="form-control text-sm p-2"
                                placeholder="TVD" step=".01" value="{{ $solicitud_lechada[0]->top_of_slurry_tvd }}"
                                readonly>
                            <input type="number" name="top_of_slurry_md" class="form-control text-sm p-2"
                                placeholder="MD" step=".01" value="{{ $solicitud_lechada[0]->top_of_slurry_md }}"
                                readonly>
                        </div>
                    </div>

                    <div class="">
                        <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Volumen</label>
                        <input type="number" name="volumen" class="form-control text-sm p-2" placeholder="Volumen"
                            step=".01" value="{{ $solicitud_lechada[0]->volumen }}" readonly>
                    </div>

                    <div class="">
                        <label for="" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Pump
                            Rate</label>
                        <input type="number" name="pump_rate" class="form-control text-sm p-2" placeholder="Pump Rate"
                            step=".01" value="{{ $solicitud_lechada[0]->pump_rate }}" readonly>
                    </div>

                    <div class="md:col-span-2 xl:col-span-1">
                        <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Grado de
                            Temperatura Cº</label>
                        <input type="number" name="grado_temperatura" class="form-control sz p-2" placeholder="Cº"
                            step=".01" value="{{ $solicitud_lechada[0]->grado_temperatura }}" readonly>
                    </div>

                    <div class="grid grid-cols-2 col-span-2 xl:col-span-1 gap-3">
                        <div class="xl:col-span-1">
                            <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">BHST
                                Cº</label>
                            <input type="number" name="bhst" id="" class="form-control text-sm p-2"
                                placeholder="Cº" step=".01" value="{{ $solicitud_lechada[0]->bhst }}" readonly>
                        </div>

                        <div class="xl:col-span-1">
                            <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">BHCT
                                Cº</label>
                            <input type="number" name="bhct" id="" class="form-control sz p-2"
                                placeholder="Cº" step=".01" value="{{ $solicitud_lechada[0]->bhct }}" readonly>
                        </div>
                    </div>
                </div>

                <hr class="my-4">

                <p class="m-0 font-bold text-lg my-3 tracking-wide">Requerimientos de Lechada</p>

                <section id="section_desktop_requerimiento">
                    @include('solicitud.components.lechada.desktop.show_requerimientos_dk')
                </section>

                <hr class="my-4">

                <p class="m-0 font-bold text-lg my-3 tracking-wide">Observación / Comentarios</p>

                <div class="grid mt-3">
                    <div class="col-span-2 md:col-span-1">
                        <textarea name="observacion_lechada" rows="5" class="form-control text-sm" placeholder="Máximo 500 caracteres"
                            readonly> {{ $solicitud_lechada[0]->observacion }}</textarea>
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
                                @if ($e->id == $solicitud_lechada[0]->firma_autorizacion_id)
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
                            value="{{ $solicitud_lechada[0]->fecha_reconocimiento }}" readonly
                            class="form-control text-sm">
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
                                @if ($e->id == $solicitud_lechada[0]->firma_reconocimiento_id)
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
                            value="{{ $solicitud_lechada[0]->fecha_reconocimiento }}" readonly
                            class="form-control text-sm">
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

        @if ($ensayos->count() > 0)
            @include('ensayo.show')
        @else
            @include('ensayo.create')
        @endif
        <br>
    </div>

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
