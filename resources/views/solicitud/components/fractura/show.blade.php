@extends('layouts.app')

@section('titulo')
    Solicitud Fractura #{{ $solicitud->id }} - Laboratorio
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
    <section class="p-2 pb-0 mb-0 relative shadow-sm section_bg dark:bg-blue-800 dark:bg-opacity-10" style="width: 90%; margin: 0 auto; margin-top: 1px;">
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
                        <span class="text-md xl:text-xl flex items-center gap-3 font-bold text-gray-700 dark:text-white">Solicitud de
                            Fractura -
                            #{{ $solicitud->id }}
                            @php
                                switch ($solicitud->estado->id) {
                                    case '1':
                                        $estado = $solicitud->estado->nombre;
                                        $clase = 'bg-blue-300 dark:bg-blue-500 dark:bg-opacity-50 dark:text-sky-200';
                                        break;
                                    case '2':
                                        $clase = 'bg-green-300 dark:bg-green-500 dark:bg-opacity-50 dark:text-green-200';
                                        $estado = $solicitud->estado->nombre;
                                        break;
                                    case '3':
                                        $clase = 'bg-green-300 dark:bg-green-500 dark:bg-opacity-50 dark:text-green-200';
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
                            Fecha de Carga: <b class="text-gray-700 dark:text-gray-300">{{ $solicitud->created_at->format('d') }} de
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

                            Última edición: <b class="text-gray-700 dark:text-gray-300">{{ $solicitud->updated_at->format('d') }} de
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
                                Ensayo Asignado: <b class="text-gray-700 dark:text-gray-300"> #{{ $solicitud->ensayo_asignado_id }}</b>
                            </article>
                        @endif
                    </div>
                </div>

            </div>

            <br>

            <ul role="tablist" aria-owns="nav-tab1 nav-tab2 nav-tab3 nav-tab4" class="nav nav-tabs text-sm md:text-md"
                id="nav-tab-with-nested-tabs" style="z-index: 999">
                <li class="nav-item w-full text-center md:w-auto" role="presentation">
                    <a class="nav-link nav_tab_mod text-violet-800 dark:text-violet-400 active" aria-current="page" id="nav-tab1" href="#tab1-content"
                        data-bs-toggle="tab" data-bs-target="#tab1-content" role="tab" aria-controls="tab1-content"
                        aria-selected="true">Información de la Solicitud</a>
                </li>
                @if ($solicitud->aprobada == 1)
                    <li class="nav-item w-full text-center md:w-auto" role="presentation">
                        <a class="nav-link nav_tab_mod text-violet-800 dark:text-violet-400" aria-current="page" id="nav-tab1" href="#tab2-content"
                        data-bs-toggle="tab" data-bs-target="#tab2-content" role="tab" aria" id="nav-tab2" data-bs-toggle="tab"
                             role="tab">Ensayos</a>
                    </li>
                @else
                    <div class="flex flex-col md:flex-row text-center items-center">
                        <li data-tooltip-target="tooltip-default"
                            class="nav-item w-full text-center md:w-auto cursor-not-allowed"
                            tooltip="Debe aprobar la solicitud para asignar un ensayo" role="presentation">
                            <a class="nav-link nav_tab_mod text-violet-800 dark:text-violet-400 active" aria-current="page" id="nav-tab1" href="#tab1-content"
                            data-bs-toggle="tab" data-bs-target="#tab1-content" role="tab" aria-selected="false">Ensayos </a>
                        </li>
                        <small class="text-gray-700 dark:text-gray-300">(Debe aprobar la solicitud para asignar un ensayo)</small>
                    </div>
                @endif
            </ul>

        </section>

    </section>

    <div class="tab-content" id="nav-tabs-content">
        <div class="container_mod border dark:border-none bg-white dark:tab_bg p-3 mt-4 shadow-sm tab-pane fade show active" id="tab1-content"
            role="tabpanel" aria-labelledby="nav-tab1">

            @if (session('success'))
                <div
                    class="mt-3 bg-green-500 opacity-50 text-white p-2 text-center uppercase border-1 border-green-500 rounded-md font-semibold tracking-wide mb-3">
                    {{ session('success') }}
                </div>
            @endif

            <div class="flex items-center justify-between">
                <div class="flex w-full items-center justify-between flex-col md:flex-row">
                    <p class="m-0 font-bold text-lg tracking-wide dark:text-gray-300">Información General</p>
                    @if (!$solicitud->aprobada)
                        <div class="flex gap-3">
                            <button
                                class="bg-cyan-600 dark:bg-blue-700 dark:bg-opacity-50 dark:text-blue-500 text-white font-bold tracking-wide px-3 py-1 rounded-sm flex gap-2 hover:bg-cyan-700 transition-all duration-200"
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
                <input type="hidden" value="{{ $solicitud->id }}" name="solicitud_id">
                <div class="row mt-3"> <!-- Información General -->
                    <div class="col-xs-12 col-md-6 my-2">
                        <label for="proyecto_number" class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Solo
                            uso
                            de
                            Laboratorio - Nº de Proyecto</label>
                        <input type="number" placeholder="Ingrese el número" class="form-control dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2 sz"
                            name="proyecto_number" id="proyecto_number" min="0"
                            value="{{ $solicitud->proyecto_number }}" readonly>
                        @error('proyecto_number')
                            <small class="text-sm text-red-600">El Nº del Proyecto es requerido</small>
                        @enderror
                    </div>

                    <div class="col-xs-12 col-md-6 my-2">
                        <label for="servicio_number" class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Nº
                            Revisión de Solicitud de Servicio</label>
                        <input type="number" placeholder="Ingrese el número" class="form-control dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2 sz"
                            name="servicio_number" id="servicio_number" min="0"
                            value="{{ $solicitud->servicio_number }}" readonly>
                        @error('servicio_number')
                            <small class="text-sm text-red-600">El Nº de Revisión es requerido</small>
                        @enderror
                    </div>

                    <div class="col-xs-12 col-md-3 my-2">
                        <label for="cliente"
                            class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Cliente</label>
                        <input type="text" placeholder="Ingrese el cliente" class="form-control sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2"
                            name="cliente" id="cliente" value="{{ $solicitud->cliente }}" readonly>
                        @error('cliente')
                            <small class="text-xs xl:text-sm text-red-600">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-xs-12 col-md-2 my-2">
                        <label for="locacion" class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Yacimiento /
                            Locación</label>
                        <input type="text" placeholder="Ingrese el yacimiento / locación" class="form-control sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2"
                            name="locacion" id="locacion" value="{{ $solicitud->locacion }}" readonly>
                        @error('locacion')
                            <small class="text-xs xl:text-sm text-red-600">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-xs-12 col-md-2 my-2">
                        <label for="programa"
                            class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Programa</label>
                        <input type="text" placeholder="Ingrese el programa" class="form-control sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2"
                            name="programa" id="programa" value="{{ $solicitud->programa }}" readonly>
                        @error('programa')
                            <small class="text-xs xl:text-sm text-red-600">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-xs-12 col-md-2 my-2">
                        <label for="fecha_solicitud" class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Fecha
                            de
                            Solicitud</label>
                        <input type="date" class="form-control sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2" name="fecha_solicitud" id="fecha_solicitud"
                            value="{{ $solicitud->fecha_solicitud->format('Y-m-d') }}" readonly>
                        @error('fecha_solicitud')
                            <small class="text-xs xl:text-sm text-red-600">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-xs-12 col-md-3 my-2">
                        <label for="empresa" class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Compañía /
                            Empresa</label>
                        <input type="text" placeholder="Ingrese la empresa" class="form-control sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2"
                            name="empresa" id="empresa" value="{{ $solicitud->empresa }}" readonly>
                        @error('empresa')
                            <small class="text-xs xl:text-sm text-red-600">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-xs-12 col-md-2 my-2">
                        <label for="fecha_tratamiento"
                            class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Fecha
                            del
                            Tratamiento</label>
                        <input type="date" class="form-control sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2" name="fecha_tratamiento"
                            id="fecha_tratamiento" value="{{ $solicitud->fecha_tratamiento }}" readonly>
                        @error('fecha_tratamiento')
                            <small class="text-xs xl:text-sm text-red-600">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-xs-12 col-md-2 my-2">
                        <label for="pozo" class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Pozo</label>
                        <input type="text" class="form-control sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2" name="pozo" id="pozo"
                            placeholder="Ingrese el Pozo" value="{{ $solicitud->pozo }}" readonly>
                        @error('pozo')
                            <small class="text-xs xl:text-sm text-red-600">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-xs-12 col-md-3 my-2">
                        <label for="rep_compania" class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Rep
                            Compañía</label>
                        <input type="text" class="form-control sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2" name="rep_compania" id="rep_compania"
                            placeholder="Rep Compañía" value="{{ $solicitud->rep_compania }}" readonly>
                        @error('rep_compania')
                            <small class="text-xs xl:text-sm text-red-600">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-xs-12 col-md-2 my-2">
                        <label for="fecha_reporte" class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Fecha
                            del
                            Reporte</label>
                        <input type="date" class="form-control sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2" name="fecha_reporte" id="fecha_reporte"
                            value="{{ $solicitud->fecha_reporte }}" readonly>
                        @error('fecha_reporte')
                            <small class="text-xs xl:text-sm text-red-600">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-xs-12 col-md-3 my-2">
                        <label for="rep_venta" class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Rep
                            Ventas</label>
                        <input type="text" class="form-control sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2" name="rep_venta" id="rep_venta"
                            placeholder="Rep Ventas" value="{{ $solicitud->rep_venta }}" readonly>
                        @error('rep_venta')
                            <small class="text-xs xl:text-sm text-red-600">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-xs-12 col-md-2 my-2">
                        <label for="fecha_resultados" class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Fecha
                            Resultados</label>
                        <input type="date" class="form-control sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2" name="fecha_resultados" id="fecha_resultados"
                            value="{{ $solicitud->fecha_resultados }}" readonly>
                        @error('fecha_resultados')
                            <small class="text-xs xl:text-sm text-red-600">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-xs-12 col-md-3 my-2">
                        <label for="equipo"
                            class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Equipo</label>
                        <input type="text" class="form-control sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2" name="equipo" id="equipo"
                            placeholder="Ingrese el equipo" value="{{ $solicitud->equipo }}" readonly>
                        @error('equipo')
                            <small class="text-xs xl:text-sm text-red-600">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-xs-12 col-md-3 my-2">
                        <label for="servicio"
                            class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Servicio</label>
                        <input type="text" class="form-control sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2" name="servicio" id="servicio"
                            placeholder="Ingrese el servicio" value="{{ $solicitud->servicio }}" readonly>
                        @error('servicio')
                            <small class="text-xs xl:text-sm text-red-600">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-xs-12 col-md-2 my-2">
                        <label for="reporte_lab_tall"
                            class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Reporte
                            Laboratorio Tall</label>
                        <input type="text" class="form-control sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2" name="reporte_lab_tall" id="reporte_lab_tall"
                            placeholder="Ingrese el reporte" value="{{ $solicitud->reporte_lab_tall }}" readonly>
                        @error('reporte_lab_tall')
                            <small class="text-xs xl:text-sm text-red-600">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-xs-12 col-md-2 my-2">
                        <label for="reporte_lab_lead"
                            class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Reporte
                            Laboratorio Lead</label>
                        <input type="text" class="form-control sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2" name="reporte_lab_lead" id="reporte_lab_lead"
                            placeholder="Ingrese el reporte" value="{{ $solicitud->reporte_lab_lead }}" readonly>
                        @error('reporte_lab_lead')
                            <small class="text-xs xl:text-sm text-red-600">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <p class="m-0 mt-3 font-bold text-lg tracking-wide dark:text-gray-300">Informacion del Pozo y Ensayos</p>
                <div class="row mt-3">
                    <div class="col-xs-12 col-md-3 my-2">
                        <label for="fluido" class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Fluido del
                            Reservorio</label>
                        <input type="text" placeholder="Ingrese el fluido" class="form-control sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2" name="fluido"
                            id="fluido" value="{{ $solicitud_fractura[0]->fluido ?? 'No Aplica' }}" readonly>
                    </div>

                    <div class="col-xs-12 col-md-3 my-2">
                        <label for="formacion"
                            class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Formación</label>
                        <input type="text" placeholder="Ingrese la formación" class="form-control sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2"
                            name="formacion" id="formacion"
                            value="{{ $solicitud_fractura[0]->formacion ?? 'No Aplica' }}" readonly>
                    </div>
                    <div class="col-xs-12 col-md-3 my-2">
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <label for="bhst"
                                    class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">BHST</label>
                                <input type="number" placeholder="Cº / Fº" class="form-control sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2" name="bhst"
                                    id="bhst" value="{{ $solicitud_fractura[0]->bhst ?? 'No Aplica' }}" readonly>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <label for="tipo_temp_bhst"
                                    class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Tipo</label>
                                <select name="tipo_temp_bhst" id="tipo_temp_bhst" class="form-select sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2" disabled>
                                    <option value="">-- Tipo --</option>
                                    <option value="1"
                                        {{ $solicitud_fractura[0]->tipo_temp_bhst == 1 ? 'selected' : '' }}>Cº</option>
                                    <option value="2"
                                        {{ $solicitud_fractura[0]->tipo_temp_bhst == 2 ? 'selected' : '' }}>Fº</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 my-2">
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <label for="temp_ensayo"
                                    class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Temp.
                                    Ensayo</label>
                                <input type="number" placeholder="Cº / Fº" class="form-control sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2"
                                    name="temp_ensayo" id="temp_ensayo"
                                    value="{{ $solicitud_fractura[0]->temp_ensayo ?? 'No Aplica' }}" readonly>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <label for="tipo_temp_ensayo"
                                    class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Tipo</label>
                                <select name="tipo_temp_ensayo" id="tipo_temp_ensayo" class="form-select sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2"
                                    disabled>
                                    <option value="">-- Tipo --</option>
                                    <option value="1"
                                        {{ $solicitud_fractura[0]->tipo_temp_ensayo == 1 ? 'selected' : '' }}>Cº</option>
                                    <option value="2"
                                        {{ $solicitud_fractura[0]->tipo_temp_ensayo == 1 ? 'selected' : '' }}>Fº</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-2 text-center">
                        <span class="w-full items-center m-0 text-xs xl:text-sm dark:text-gray-300">¿Hay algún aditivo que no sea de Calfrac para ser
                            usado
                            en
                            este proyecto?</span>
                        <select name="" id="" class="form-select sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2 md:w-1/4 w-full" disabled>
                            <option value="">-- Seleccione --</option>
                            <option value="1">Si</option>
                            <option value="2">No</option>
                        </select>
                    </div>

                    <div class="col-xs-12 col-md-4 my-2">
                        <label for="proveedor" class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Nombre del
                            Proveedor</label>
                        <input type="text" placeholder="Ingrese el proveedor" class="form-control sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2"
                            name="proveedor" id="proveedor"
                            value="{{ $solicitud_fractura[0]->proveedor ?? 'No Aplica' }}" readonly>
                    </div>
                    <div class="col-xs-12 col-md-4 my-2">
                        <label for="producto" class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Nombre del
                            Producto</label>
                        <input type="text" placeholder="Ingrese el producto" class="form-control sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2"
                            name="producto" id="producto" value="{{ $solicitud_fractura[0]->producto ?? 'No Aplica' }}"
                            readonly>
                    </div>
                    <div class="col-xs-12 col-md-4 my-2">
                        <label for="concentracion"
                            class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Concentración
                            a Ensayar</label>
                        <input type="text" placeholder="Ingrese la concentración" class="form-control sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2"
                            name="concentracion" id="concentracion"
                            value="{{ $solicitud_fractura[0]->concentracion ?? 'No Aplica' }}" readonly>
                    </div>
                </div> <!-- Información del Pozo -->

                <p class="m-0 mt-3 font-bold text-lg tracking-wide">Análisis Requerido</p>

                <div class="row mt-3"> <!-- Análisis Requerido -->
                    <div class="col-xs-12 col-md-3 my-2">
                        <label for="sistema_fluido"
                            class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Compatibilidad con sistemas de
                            fluidos</label>
                        <select name="sistema_fluido" id="sistema_fluido" class="form-select sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2" disabled>
                            <option value="">-- Seleccione --</option>
                            @foreach ($sistemas_fluidos as $e)
                                @if ($e->id == $solicitud_fractura[0]->sistema_fluido_id)
                                    <option value="{{ $e->id }}" selected>{{ $e->nombre }}</option>
                                @else
                                    <option value="{{ $e->id }}">{{ $e->nombre }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="col-xs-12 col-md-3 my-2">
                        <label for="analisis_microbial"
                            class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Análisis
                            de Agua y Ensayo Microbial</label>
                        <select name="analisis_microbial" id="analisis_microbial" class="form-select sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2" disabled>
                            <option value="">-- Seleccione --</option>
                            @foreach ($analisis_microbial as $e)
                                @if ($e->id == $solicitud_fractura[0]->analisis_microbial_id)
                                    <option value="{{ $e->id }}" selected>{{ $e->nombre }}</option>
                                @else
                                    <option value="{{ $e->id }}">{{ $e->nombre }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="col-xs-12 col-md-3 my-2">
                        <label for="agente_sosten" class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Agente
                            de
                            Sostén</label>
                        <select name="agente_sosten" id="agente_sosten" class="form-select sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2" disabled>
                            <option value="">-- Seleccione --</option>
                            @foreach ($agente_sosten as $e)
                                @if ($e->id == $solicitud_fractura[0]->agente_sosten_id)
                                    <option value="{{ $e->id }}" selected>{{ $e->nombre }}</option>
                                @else
                                    <option value="{{ $e->id }}">{{ $e->nombre }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="col-xs-12 col-md-3 my-2">
                        <label for="otros" class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Otros
                            Análisis</label>
                        <select name="otros" id="otros" class="form-select sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2" disabled>
                            <option value="">-- Seleccione --</option>
                            @foreach ($otros_analisis as $e)
                                @if ($e->id == $solicitud_fractura[0]->otro_analisis_id)
                                    <option value="{{ $e->id }}" selected>{{ $e->nombre }}</option>
                                @else
                                    <option value="{{ $e->id }}">{{ $e->nombre }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="col-12 my-2">
                        <label for="comentario" class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Comentario
                            /
                            Instrucciones</label>
                        <textarea name="comentario" id="comentario" class="form-control sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2" rows="3"
                            placeholder="Ingrese un comentario / instrucciones - Máximo 300 caracteres" readonly>{{ $solicitud_fractura[0]->comentario ?? 'No hubieron comentarios' }}</textarea>
                    </div>
                </div> <!-- Análisis Requerido -->

                <p class="m-0 mt-3 font-bold text-lg tracking-wide dark:text-gray-300">Firmas de Autorización</p>

                <div class="row mt-3">
                    <div class="col-xs-12 col-md-6 my-2">
                        <label for="firma_iniciado_por"
                            class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Nombre
                            <small>(Iniciado por)</small></label>
                        <select name="firma_iniciado_por" id="firma_iniciado_por" class="form-select sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2" disabled>
                            <option value="">-- Seleccione --</option>
                            @foreach ($users as $e)
                                @if ($e->id == $solicitud_fractura[0]->firma_iniciado_por_id)
                                    <option value="{{ $e->id }}" selected>{{ $e->nombre }} {{ $e->apellido }}
                                    </option>
                                @else
                                    <option value="{{ $e->id }}">{{ $e->nombre }} {{ $e->apellido }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="col-xs-12 col-md-6 my-2">
                        <label for="fecha_firma_iniciado_por"
                            class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Fecha de la Firma
                            <small>(*)</small></label>
                        <input type="date" name="fecha_firma_iniciado_por" id="fecha_firma_iniciado_por"
                            class="form-control sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2" value="{{ $solicitud_fractura[0]->fecha_firma_iniciado_por }}"
                            readonly>
                    </div>

                    <div class="col-xs-12 col-md-6 my-2">
                        <label for="firma_servicios_tecnicos"
                            class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Nombre
                            <small>(Servicios Técnicos)</small></label>
                        <select name="firma_servicios_tecnicos" id="firma_servicios_tecnicos" class="form-select sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2"
                            disabled>
                            <option value="">-- Seleccione --</option>
                            @foreach ($users as $e)
                                @if ($e->id == $solicitud_fractura[0]->firma_servicio_tecnico_id)
                                    <option value="{{ $e->id }}" selected>{{ $e->nombre }} {{ $e->apellido }}
                                    </option>
                                @else
                                    <option value="{{ $e->id }}">{{ $e->nombre }} {{ $e->apellido }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="col-xs-12 col-md-6 my-2">
                        <label for="fecha_firma_servicios_tecnicos"
                            class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Fecha de la Firma
                            <small>(*)</small></label>
                        <input type="date" name="fecha_firma_servicios_tecnicos" id="fecha_firma_servicios_tecnicos"
                            class="form-control sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2"
                            value="{{ $solicitud_fractura[0]->fecha_firma_servicios_tecnicos }}" readonly>
                    </div>

                    <div class="col-xs-12 col-md-6 my-2">
                        <label for="firma_laboratorio"
                            class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Nombre
                            <small>(Laboratorio)</small></label>
                        <select name="firma_laboratorio" id="firma_laboratorio" class="form-select sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2" disabled>
                            <option value="">-- Seleccione --</option>
                            @foreach ($users as $e)
                                @if ($e->id == $solicitud_fractura[0]->firma_laboratorio_id)
                                    <option value="{{ $e->id }}" selected>{{ $e->nombre }} {{ $e->apellido }}
                                    </option>
                                @else
                                    <option value="{{ $e->id }}">{{ $e->nombre }} {{ $e->apellido }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="col-xs-12 col-md-6 my-2">
                        <label for="fecha_firma_laboratorio"
                            class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Fecha de la Firma
                            <small>(*)</small></label>
                        <input type="date" name="fecha_firma_laboratorio" id="fecha_firma_laboratorio"
                            class="form-control sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2" value="{{ $solicitud_fractura[0]->fecha_firma_laboratorio }}"
                            readonly>
                    </div>
                </div>

                <p class="m-0 mt-3 font-bold text-lg tracking-wide dark:text-gray-300">Reconocimiento</p>
                <div class="row mt-3">
                    <div class="col-xs-12 col-md-6 my-2">
                        <label for="firma_reconocimiento"
                            class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Nombre
                            <small>(Reconocimiento)</small></label>
                        <select name="firma_reconocimiento" id="firma_reconocimiento" class="form-select sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2"
                            disabled>
                            <option value="">-- Seleccione --</option>
                            @foreach ($users as $e)
                                @if ($e->id == $solicitud_fractura[0]->firma_reconocimiento_id)
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
                        <label for="fecha_firma_reconocimiento"
                            class="text-xs xl:text-sm text-gray-700 dark:text-gray-300 font-semibold tracking-wide mb-2">Fecha de la Firma
                            <small>(*)</small></label>
                        <input type="date" name="fecha_firma_reconocimiento" id="fecha_firma_reconocimiento"
                            class="form-control sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none p-2" value="{{ $solicitud_fractura[0]->fecha_firma_reconocimiento }}"
                            readonly>
                    </div>
                </div>

                <hr>

                <div class="div_sector_edicion hidden">
                    @include('solicitud.components.fractura.comments')
                </div>
            </form>

            @if ($solicitud->fundamento->count() > 0)
                <p class="m-0 mt-3 font-bold text-lg tracking-wide dark:text-gray-300">Sector de Comentarios</p>

                <div class="row md:w-1/2 mt-1">
                    @foreach ($solicitud->fundamento as $c)
                        <article class="flex gap-3 mt-3">
                            @if ($c->user_fundamento->img)
                            <div class="flex justify-center items-center w-12 h-12 mx-auto">
                                <img src="{{  asset('uploads/perfiles') . '/' . $c->user_fundamento->img }}"
                                    class="rounded-full object-cover w-12 h-12" alt="">
                            </div>
                            @else
                            <div class="flex justify-center items-center w-14 h-14 mx-auto">
                                <img src="{{  asset('img/img_default.jpg') }}"
                                    class="rounded-full object-cover w-14 h-14" alt="">
                            </div>
                            @endif
                            <div class="text-sm flex-1">

                                <p class="m-0 flex flex-col md:flex-row md:gap-2 font-bold dark:text-gray-300">
                                    {{ $c->user_fundamento->nombre }}
                                    {{ $c->user_fundamento->apellido }} <small class="text-gray-400"> Realizó una edición
                                        el día {{ $c->created_at->format('d') }}
                                        {{ $c->created_at->format('M') }}
                                        {{ $c->created_at->format('Y') }} -
                                        {{ $c->created_at->format('H:i') }}</small></p>
                                <p class="mb-0 dark:text-gray-400">
                                    {{ $c->fundamento }}
                                </p>

                                <div class="containerRta">
                                    @if ($c->respuesta)
                                        <article class="flex gap-3 mt-4">
                                            <div class="flex justify-center items-center w-12 h-12">
                                                <img src="{{ asset('uploads/perfiles') . '/' . $c->user_rta->img }}"
                                                    class="rounded-full object-cover w-12 h-12">
                                            </div>
                                            <div class="text-sm flex flex-col">
                                                <p class="m-0 font-bold dark:text-gray-300">{{ $c->user_rta->nombre }}
                                                    {{ $c->user_rta->apellido }} <small
                                                        class="text-gray-400">{{ $c->updated_at->format('d') }}
                                                        {{ $c->updated_at->format('M') }}
                                                        {{ $c->updated_at->format('Y') }} -
                                                        {{ $c->updated_at->format('H:i') }}</small></p>
                                                <p class="mb-0 dark:text-gray-400">
                                                    {{ $c->respuesta }}
                                                </p>
                                            </div>
                                        </article>
                                    @else
                                        @if (auth()->user()->id != $c->user_fundamento->id)
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
                                            {{-- <form id="form_fundamento" class="mt-3 formRta_0 hidden"> --}}
                                                <form action="{{ route('fundamento.rta', auth()->user()->id) }}"
                                                    method="POST" class="mt-3 formRta_0 hidden">
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
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            @endif

            <hr>
            <!-- Aprobar la solicitud -->
            @if ($solicitud->aprobada)
                <div
                    class="mt-3 flex items-center justify-center flex-col md:flex-row gap-3 text-center bg-green-200 dark:bg-green-600 dark:bg-opacity-10 border-1 p-1 rounded-sm w-full md:w-1/2 mx-auto border-green-500 text-green-800 dark:text-green-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 ">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <span>Solicitud aprobada por {{ $solicitud->user_aprobo->nombre }}
                        {{ $solicitud->user_aprobo->apellido }} el día {{ $solicitud->fecha_aprobada->format('d') }} de
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
                        <p class="mb-0 flex flex-col text-center md:flex-row items-center gap-2 text-gray-600 dark:text-gray-300 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.8" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                            </svg>
                            Al aprobar la solicitud, da por confirmado que la misma se encuentra en condiciones de asignarle
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

        <script src="{{ asset('js/Solicitud/comment.js') }}"></script>
        <script src="{{ asset('js/Solicitud/edition.js') }}"></script>

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
                            fetch("{{ route('solicitud.aprobar') }}", {
                                    method: 'POST',
                                    body: form
                                }).then((response) => response.json())
                                .then((data) => {
                                    if (data) {
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
