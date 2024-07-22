@extends('layouts.app')

@section('titulo')
    Laboratorio - Histórico Ensayos
@endsection

@section('contenido')
    <section class="container_mod pt-10 md:pt-5">
        <p class="font-bold uppercase text-sm xl:text-md dark:text-gray-200 mb-2">Histórico de Ensayos</p>
        <div class="flex flex-col md:flex-row gap-3"> <!-- Panel de Ventanas -->
            
            <article class="dark:tab_bg border dark:border-none shadow-sm rounded-md p-3 w-full text-xs xl:text-sm">
                <div class="flex justify-between">
                    <div class="flex flex-col gap-2">
                        <p class="font-medium text-gray-700 dark:text-gray-400">Total de Ensayos</p>
                        <span class="fw-bold dark:text-white">413</span>
                        <small class="dark:text-gray-400"><span class="fw-bold dark:text-white" [style.color]="color">45 creadas</span> | Este mes</small>
                    </div>
                    <span class="bg-blue-200 dark:bg-blue-600 dark:bg-opacity-50 w-10 h-10 rounded-full">
                        <svg class="w-7 m-auto pt-1.5 text-sky-500 dark:text-sky-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 0 1-1.125-1.125v-3.75ZM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-8.25ZM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-2.25Z" />
                        </svg>
                    </span>
                </div>
            </article>

            <article class="dark:tab_bg border dark:border-none shadow-sm rounded-md p-3 w-full text-xs xl:text-sm">
                <div class="flex justify-between">
                    <div class="flex flex-col gap-2">
                        <p class="font-medium text-gray-700 dark:text-gray-400">Ensayos sin asignar</p>
                        <span class="fw-bold dark:text-white">153</span>
                        <small class="dark:text-gray-400"><span class="fw-bold dark:text-white" [style.color]="color">5 nuevos</span> | Hoy</small>
                    </div>
                    <span class="bg-orange-200 dark:bg-orange-500 dark:bg-opacity-50 w-10 h-10 rounded-full">
                        <svg class="w-7 m-auto pt-1.5 text-orange-300 dark:text-orange-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </span>
                </div>
            </article>

            <article class="dark:tab_bg border dark:border-none shadow-sm rounded-md p-3 w-full text-xs xl:text-sm">
                <div class="flex justify-between">
                    <div class="flex flex-col gap-2">
                        <p class="font-medium text-gray-700 dark:text-gray-400">Ensayos Completados</p>
                        <span class="fw-bold dark:text-white">43</span>
                        <small class="dark:text-gray-400"><span class="fw-bold dark:text-white" [style.color]="color">2 completadas</span> | Hoy</small>
                    </div>
                    <span class="bg-green-200 dark:bg-green-500 dark:bg-opacity-50 w-10 h-10 rounded-full">

                        <svg class="w-7 m-auto pt-1.5 text-green-600 dark:text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>

                    </span>
                </div>
            </article>

            <article class="dark:tab_bg border dark:border-none shadow-sm rounded-md p-3 w-full text-xs xl:text-sm">
                <div class="flex justify-between">
                    <div class="flex flex-col gap-2">
                        <p class="font-medium text-gray-700 dark:text-gray-400">Ensayos Eliminados / Cancelados</p>
                        <span class="fw-bold dark:text-white">43</span>
                        <small class="dark:text-gray-400"><span class="fw-bold dark:text-white" [style.color]="color">1 eliminada</span> | Hoy</small>
                    </div>
                    <span class="bg-red-200 dark:bg-red-600 dark:bg-opacity-50 w-10 h-10 rounded-full">
                        <svg class="w-7 m-auto pt-1.5 text-red-400 dark:text-red-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </span>
                </div>
            </article>
        </div>

        @if (session('success'))
            <div
                class="mt-3 bg-green-500 opacity-50 text-white p-2 text-center uppercase border-1 border-green-500 rounded-md font-semibold tracking-wide">
                {{ session('success') }}
            </div>
        @endif

        <div class="card border dark:border-none mt-4">
            <div class="card-header dark:card-bg-head p-3 flex flex-col md:flex-row items-center justify-between" style="background-color: white">
                <p class="mb-0 font-bold uppercase text-sm xl:text-md dark:text-gray-300">
                    Todos los Ensayos
                </p>
            </div>
{{--
            <div class="card-body dark:tab_bg p-0">
                <div class="row p-3">
                    <div class="col-xs-12 col-md-4 my-2">
                        <input type="text" class="form-control sz p-2 bg-gray-50 border-none dark:inp_bg_2"
                            placeholder="Buscar por ensayos">
                    </div>
                    <div class="col-xs-12 col-md-4 my-2">
                        <input type="date" class="form-control sz p-2 dark:inp_bg_2 bg-gray-50  dark:text-gray-400 border-none">
                    </div>
                    <div class="col-xs-12 col-md-4 my-2">
                        <select class="form-select sz p-2 dark:inp_bg_2 dark:text-gray-400 bg-gray-50 border-none">
                            <option value="">-- Todo --</option>
                        </select>
                    </div>
                </div>--}}

                <div class="text-gray-500 text-xs xl:text-sm overflow-x-scroll md:overflow-hidden">
                    <table class="w-full">
                        <thead class="dark:card-bg-head" style="background-color: #f3f9f5">
                            <th class="p-3">#ID</th>
                            <th class="p-3">Nombre del Ensayo</th>
                            <th class="p-3">Solicitud Asignada</th>
                            <th class="p-3">¿Quien realizó el ensayo?</th>
                            <th class="p-3">Fecha de Carga</th>
                        </thead>

                        <tbody>
                            @foreach ($ensayos as $e)
                                <tr>
                                    <td class="p-3">{{ $e->id }}</td>
                                    <td class="p-3">{{$e->tipo}}-{{$e->incrementable}}-{{$e->anio}} </td>
                                       {{--  <div class="flex justify-between">
                                            {{ $e->tipo_trabajo }}
                                            <div class="flex items-center gap-3">
                                               
                                                <a class="text-gray-500">
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
                                                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>--}}
                                    
                                    <td class="p-3">
                                        <div class="table_btn table_btn_pendiente">
                                            <div class="w-2 h-2 rounded-full point_pendiente"></div>
                                            Sin solicitud
                                        </div>
                                    </td>
                                    <td class="p-3">{{ $e->user->nombre }} {{ $e->user->apellido }}</td>

                                    <td>
                                        {{ $e->created_at->format('d/m/Y H:i') }} hs
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    {{-- <div class="flex gap-3 text-xs xl:text-sm justify-end p-2 px-4">
                        <button>Anterior</button>
                        <select name="" id="" class="form-control sz p-2 max-w-16 text-center">
                            <option value="">1</option>
                        </select>
                        <button>Siguiente</button>
                    </div> --}}
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
