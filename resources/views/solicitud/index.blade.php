@extends('layouts.app')

@section('titulo')
    Laboratorio - Histórico Solicitudes
@endsection
{{-- Vieja conf Franco 
<style>
        /* CSS para hacer toda la fila clickeable */
    #tabla_solicitudes tbody tr {
        cursor: pointer; /* Muestra el cursor de mano para indicar que es clickeable */
    }

    #tabla_solicitudes tbody tr:hover {
        background-color: #f0f0f0; /* Cambia el color de fondo al pasar el ratón sobre la fila */
    }
</style> --}}
@section('contenido')
    <section class="container_mod pt-10 md:pt-5">
        <p class="font-bold uppercase text-sm xl:text-md dark:text-gray-200 mb-2">Histórico de Solicitudes</p>
        <div class="flex flex-col md:flex-row gap-3 text-xs xl:text-sm"> <!-- Panel de Ventanas -->

            <article class="dark:tab_bg bg-white shadow-sm border dark:border-gray-800 rounded-md p-3 w-full">
                <div class="flex justify-between">
                    <div class="flex flex-col">
                        <p class="font-medium text-gray-700 dark:text-gray-400">Total de Solicitudes</p>
                        <span class="fw-bold dark:text-white">413</span>
                        <small class="dark:text-gray-400"><span class="fw-bold dark:text-white" [style.color]="color">45
                                creadas</span> | Este mes</small>
                    </div>
                    <span class="bg-blue-200 dark:bg-blue-600 dark:bg-opacity-50 w-10 h-10 rounded-full">
                        <svg class="w-7 m-auto pt-1.5 text-sky-500 dark:text-sky-500" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 0 1-1.125-1.125v-3.75ZM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-8.25ZM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-2.25Z" />
                        </svg>
                    </span>
                </div>
            </article>

            <article class="dark:tab_bg bg-white dark:border-gray-800 shadow-sm border rounded-md p-3 w-full">
                <div class="flex justify-between">
                    <div class="flex flex-col">
                        <p class="font-medium text-gray-700 dark:text-gray-400">Solicitudes Pendientes de Respuesta</p>
                        <span class="fw-bold dark:text-whit">153</span>
                        <small class="dark:text-gray-400"><span class="fw-bold dark:text-white" [style.color]="color">5
                                nuevos</span> | Hoy</small>
                    </div>
                    <span
                        class="bg-orange-200 dark:bg-orange-500 dark:text-orange-400 dark:bg-opacity-50 w-10 h-10 rounded-full">
                        <svg class="w-7 m-auto pt-1.5 text-orange-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </span>
                </div>
            </article>

            <article class="dark:tab_bg bg-white dark:border-gray-800 shadow-sm border rounded-md p-3 w-full">
                <div class="flex justify-between">
                    <div class="flex flex-col gap-2">
                        <p class="font-medium text-gray-700 dark:text-gray-400">Solicitudes Completadas</p>
                        <span class="fw-bold dark:text-white">43</span>
                        <small class="dark:text-gray-400"><span class="fw-bold dark:text-white" [style.color]="color">2
                                completadas</span> | Hoy</small>
                    </div>
                    <span class="bg-green-200 dark:bg-green-500 dark:bg-opacity-50 w-10 h-10 rounded-full">

                        <svg class="w-7 m-auto pt-1.5 text-green-600 dark:text-green-500" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>

                    </span>
                </div>
            </article>

            <article class="dark:tab_bg bg-white dark:border-gray-800 shadow-sm border rounded-md p-3 w-full">
                <div class="flex justify-between">
                    <div class="flex flex-col gap-2">
                        <p class="font-medium text-gray-700 dark:text-gray-400">Solicitudes Eliminadas / Canceladas</p>
                        <span class="fw-bold dark:text-white">43</span>
                        <small class="dark:text-gray-400"><span class="fw-bold dark:text-white" [style.color]="color">1
                                eliminada</span> | Hoy</small>
                    </div>
                    <span class="bg-red-200 dark:bg-red-600 dark:bg-opacity-50 w-10 h-10 rounded-full">
                        <svg class="w-7 m-auto pt-1.5 text-red-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </span>
                </div>
            </article>
        </div>


        {{-- @if (session('success'))
        <div
        id="alert_success"
            class="mt-3 bg-green-500 opacity-50 text-white p-2 text-center uppercase border-1 border-green-500 rounded-md font-semibold tracking-wide">
            {{ session('success') }}
        </div>
        @endif --}}

        <div class="card border dark:border-none mt-4">
            <div class="card-header dark:card-bg-head bg-white p-3 flex flex-col md:flex-row items-center justify-between">
                <p class="mb-0 font-bold uppercase text-xs xl:text-sm dark:text-gray-300">
                    Todas las Solicitudes
                </p>
                @can('create', App\Models\Solicitud::class)
                    <a href="{{ route('solicitud.create.show') }}"
                        class="flex gap-1 items-center text-xs xl:text-sm justify-center mt-2 md:mt-0 w-full md:w-auto bg-green-700 hover:text-white bg-opacity-60 dark:bg-opacity-50 dark:text-green-500 dark:hover:text-gray-300 text-white p-2 rounded-sm hover:shadow-md transition-all duration-75 font-bold cursor-pointer"
                        style="text-decoration: none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-3 h-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        Crear Solicitud</a>
                @endcan
            </div>

            {{-- <div class="card-body dark:tab_bg p-0">
                <div class="row p-3">
                    <div class="col-xs-12 col-md-4 my-2">
                        <input type="text" class="form-control sz p-2 bg-gray-50 border-none dark:inp_bg_2"
                            placeholder="Buscar por solicitud">
                    </div>
                    <div class="col-xs-12 col-md-4 my-2">
                        <input type="date"
                            class="form-control sz p-2 dark:inp_bg_2 bg-gray-50  dark:text-gray-400 border-none">
                    </div>
                    <div class="col-xs-12 col-md-4 my-2">
                        <select class="form-select sz p-2 dark:inp_bg_2 dark:text-gray-400 bg-gray-50 border-none">
                            <option value="">-- Todo --</option>
                        </select>
                    </div>
                </div> --}}


                <div class="text-gray-500 text-xs xl:text-sm overflow-x-scroll md:overflow-x-hidden">
                    <table class="w-full" >
                        <thead class="dark:card-bg-head" style="background-color: #f3f9f5">
                            <th class="p-3">#ID</th>
                            <th class="p-3">Tipo de Solicitud</th>
                            <th class="p-3">Fecha de Solicitud</th>
                            <th class="p-3">¿Quien solicitó?</th>
                            <th class="p-3">Ensayo Asignado</th>
                            <th class="p-3">Fecha de Carga</th>
                            <th class="p-3"></th>
                        </thead>
                        <tbody>
                            @if ($solicitudes->count() > 0)
                                @foreach ($solicitudes as $s)
                                    <tr>
                                        <td class="p-3">{{ $s->id }}</td>
                                        <td class="p-3">
                                            <div class="flex justify-between">
                                                @php
                                                    switch ($s->tipo) {
                                                        case '1':
                                                            echo 'Solicitud de Fractura';
                                                            $url = 'solicitud.fractura.show';
                                                            break;
                                                        case '2':
                                                            echo 'Solicitud de Lechada';
                                                            $url = 'solicitud.lechada.show';
                                                            break;
                                                        case '3':
                                                            echo 'Solicitud de Lodo';
                                                            break;
                                                    }
                                                @endphp
                                                <div class="flex items-center gap-3">
                                                    {{-- <button>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-4 h-4">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                        </svg>
                                                    </button> --}}
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-3">{{ $s->fecha_solicitud->format('d/m/Y') }}</td>
                                        <td class="p-3">{{ $s->user->nombre }} {{ $s->user->apellido }}</td>

                                        @if ($s->tipo != 1)
                                            @if ($s->ensayo_asignado_id)
                                                <td class="p-3 w-72 md:w-96">
                                                    <div class="table_btn table_btn_success">
                                                        <div class="w-2 h-2 rounded-full point_success"></div>
                                                        {{ $s->ensayo->tipo }}-{{ $s->ensayo->incrementable }}-{{ $s->ensayo->anio }}
                                                    </div>
                                                </td>
                                            @else
                                                <td class="p-3 w-72 md:w-96">
                                                    <div class="table_btn table_btn_pendiente dark:bg-gray-700">
                                                        <div class="w-2 h-2 rounded-full point_pendiente"></div>
                                                        Sin ensayo asignado
                                                    </div>
                                                </td>
                                            @endif
                                        @else
                                            <td class="p-3 w-72 md:w-96">
                                                <em>No Aplica</em>
                                            </td>
                                        @endif
                                        <td>
                                            {{ $s->created_at->format('d/m/Y H:i')}}
                                        </td>
                                        <td>
                                            <a href="{{ route($url, $s->id) }}" class="text-gray-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td class="text-center p-2" colspan="6">
                                        <em>No se agregaron solicitudes aún</em>
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <div class="px-4 pt-2 pb-1 border-t">
                        {{ $solicitudes->links() }}
                    </div>
                   
                    {{-- No se que onda esto xD 
                    <div class="flex gap-3 justify-end p-2 px-4">
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
    <br>
    <script>
        function redirectToViewSolicitud(solicitud_id) {
            event.preventDefault();
            window.location.replace(`solicitud/fractura/${solicitud_id}`);
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', e => {
            if (document.querySelector('#alert_success')) {
                setTimeout(() => {
                    document.querySelector('#alert_success').remove()
                }, 4000);
            }
        })
    </script>
@endsection

    {{-- Vieja configuracion de Franco 
    <script>
        function redirectToViewSolicitud(solicitud_id) {
            event.preventDefault();
            window.location.replace(`solicitud/fractura/${solicitud_id}`);
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', e => {
            if (document.querySelector('#alert_success')) {
                setTimeout(() => {
                    document.querySelector('#alert_success').remove()
                }, 4000);
            }
        })
    </script>


    <script>
       $(document).ready(function() {
          let table=  $('#tabla_solicitudes').DataTable({
                processing: true,
                responsive:true,
                serverSide: true,
                ajax: {
                    url: "{{ route('solicitudes.tabla') }}",
                    type: "GET",
                    data: function (d) {
                        // Puedes agregar parámetros adicionales aquí si es necesario
                        return $.extend({}, d, {
                            // Agregar parámetros adicionales
                        });
                    }
                },
                columns: [
                    { data: 'id' },
                    { data: 'tipo_solicitud' },
                    { data: 'fecha_solicitud' },
                    { data: 'nombre_solicitante' },
                    { data: 'ensayo_asignado' },
                    { data: 'fecha_carga' },
                // { data: 'acciones', orderable: false, searchable: false }
                {
                        data: 'acciones',
                        render: function(data) {
                            return '<a href="' + data + '" class="text-gray-500"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /></svg></a>';
                        }
                    }
                ],
                order: [[0, 'desc']],
                language: {
                    "url": "https://cdn.datatables.net/plug-ins/2.0.2/i18n/es-ES.json"
                }
            });

            // Manejar clic en la fila
            $('#tabla_solicitudes tbody').on('click', 'tr', function() {
                var url = table.row(this).data().acciones;
                if (url) {
                    $('#loadingModal').removeClass('hidden'); // Muestra el modal de carga
                    setTimeout(function() { // Timeout para mostrar el modal antes de redirigir
                        window.location.href = url; // Redirige al URL especificado
                    }, 500); // Ajusta el tiempo según sea necesario
                }
            });
        });

    </script>

    <!-- Modal de Cargando -->
        <div id="loadingModal" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-75 z-50 hidden">
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
            <div class="flex items-center justify-center">
                <svg class="animate-spin h-8 w-8 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12a8 8 0 1016 0A8 8 0 004 12zm8 0h4M8 12H4" />
                </svg>
            </div>
            <p class="mt-4 text-gray-700">Cargando...</p>
            </div>
        </div>
  
@endsection --}}
