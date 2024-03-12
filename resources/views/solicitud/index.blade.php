@extends('layouts.app')

@section('titulo')
    Laboratorio - Histórico Solicitudes
@endsection

@section('contenido')
    <section class="container_mod pt-3">
        <p class="font-bold uppercase">Histórico de Solicitudes</p>
        <div class="flex gap-3"> <!-- Panel de Ventanas -->
            <article class="bg-white shadow-sm border rounded-md p-3 w-full">
                <div class="flex justify-between">
                    <div class="flex flex-col">
                        <p class="font-medium text-gray-700">Total de Solicitudes</p>
                        <span class="fw-bold">413</span>
                        <small><span class="fw-bold" [style.color]="color">45 creadas</span> | Este mes</small>
                    </div>
                    <span class="bg-blue-200 w-10 h-10 rounded-full">
                        <svg class="w-7 m-auto pt-1.5 text-sky-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 0 1-1.125-1.125v-3.75ZM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-8.25ZM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-2.25Z" />
                        </svg>
                    </span>
                </div>
            </article>

            <article class="bg-white shadow-sm border rounded-md p-3 w-full">
                <div class="flex justify-between">
                    <div class="flex flex-col">
                        <p class="font-medium text-gray-700">Solicitudes Pendientes de Respuesta</p>
                        <span class="fw-bold">153</span>
                        <small><span class="fw-bold" [style.color]="color">5 nuevos</span> | Hoy</small>
                    </div>
                    <span class="bg-orange-200 w-10 h-10 rounded-full">
                        <svg class="w-7 m-auto pt-1.5 text-orange-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </span>
                </div>
            </article>

            <article class="bg-white shadow-sm border rounded-md p-3 w-full">
                <div class="flex justify-between">
                    <div class="flex flex-col">
                        <p class="font-medium text-gray-700">Solicitudes Completadas</p>
                        <span class="fw-bold">43</span>
                        <small><span class="fw-bold" [style.color]="color">2 completadas</span> | Hoy</small>
                    </div>
                    <span class="bg-green-200 w-10 h-10 rounded-full">

                        <svg class="w-7 m-auto pt-1.5 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>

                    </span>
                </div>
            </article>

            <article class="bg-white shadow-sm border rounded-md p-3 w-full">
                <div class="flex justify-between">
                    <div class="flex flex-col">
                        <p class="font-medium text-gray-700">Solicitudes Eliminadas / Canceladas</p>
                        <span class="fw-bold">43</span>
                        <small><span class="fw-bold" [style.color]="color">1 eliminada</span> | Hoy</small>
                    </div>
                    <span class="bg-red-200 w-10 h-10 rounded-full">
                        <svg class="w-7 m-auto pt-1.5 text-red-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </span>
                </div>
            </article>
        </div>

        <div class="card mt-4">
            <div class="card-header bg-white p-3 flex items-center justify-between">
                <p class="mb-0 font-bold uppercase">
                    Todas las Solicitudes
                </p>
                <a href="{{ route('solicitud.create.show') }}"
                    class="flex gap-1 items-center text-sm w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-md transition-all duration-75 font-bold cursor-pointer" style="text-decoration: none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-3 h-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Crear Solicitud</a>
            </div>

            <div class="card-body p-0">
                <div class="row p-3">
                    <div class="col-xs-12 col-md-4 my-2">
                        <input type="text" class="form-control sz p-2 " style="background-color: #f3f9f5; border: none;"
                            placeholder="Buscar por solicitudes">
                    </div>
                    <div class="col-xs-12 col-md-4 my-2">
                        <input type="date" class="form-control sz p-2 " style="background-color: #f3f9f5; border: none;">
                    </div>
                    <div class="col-xs-12 col-md-4 my-2">
                        <select class="form-select sz p-2" style="background-color: #f3f9f5; border: none;">
                            <option value="">-- Todo --</option>
                        </select>
                    </div>
                </div>

                <div class="text-gray-500 text-sm">
                    <table class="w-full">
                        <thead style="background-color: #f3f9f5">
                            <th class="p-3">#ID</th>
                            <th class="p-3">Tipo de Solicitud</th>
                            <th class="p-3">Fecha de Solicitud</th>
                            <th class="p-3">¿Quien solicitó?</th>
                            <th class="p-3">Ensayo Asignado</th>
                            <th class="p-3">Fecha de Carga</th>
                        </thead>

                        <tbody>
                            @foreach ($solicitudes as $s)
                                <tr>
                                    <td class="p-3">{{ $s->id }}</td>
                                    <td class="p-3">
                                        <div class="flex justify-between">
                                            @php
                                                switch ($s->tipo) {
                                                    case '1':
                                                        echo 'Solicitud de Fractura';
                                                        break;
                                                    case '2':
                                                        echo 'Solicitud de Lechada';
                                                        break;
                                                    case '3':
                                                        echo 'Solicitud de Lodo';
                                                        break;
                                                }
                                            @endphp
                                            <div class="flex items-center gap-3">
                                                <a href="{{ route('solicitud.fractura.show', $s->id) }}" class="text-gray-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-4 h-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                    </svg>
                                                </a>
                                                <button>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-4 h-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                    </svg>
                                                </button>
                                                <button>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-4 h-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-3">{{ $s->fecha_solicitud }}</td>
                                    <td class="p-3">{{ $s->user->nombre }} {{ $s->user->apellido }}</td>
                                    <td class="p-3">
                                        <div class="table_btn table_btn_pendiente">
                                            <div class="w-2 h-2 rounded-full point_pendiente"></div>
                                            Sin ensayo asignado
                                        </div>
                                    </td>
                                    <td>
                                        {{ $s->created_at->format('d/m/Y H:i') }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="flex gap-3 justify-end p-2 px-4">
                        <button>Anterior</button>
                        <select name="" id="" class="form-control sz p-2 max-w-16 text-center">
                            <option value="">1</option>
                        </select>
                        <button>Siguiente</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function redirectToViewSolicitud(solicitud_id) {
            event.preventDefault();
            window.location.replace(`solicitud/fractura/${solicitud_id}`);
        }
    </script>
@endsection