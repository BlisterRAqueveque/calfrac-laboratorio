@extends('layouts.app')

@section('titulo')
    Laboratorio - Clientes
@endsection

@section('contenido')
    <section class="container_mod pt-3">
        <p class="font-bold uppercase dark:text-gray-300 text-sm">Histórico de Clientes</p>

        <div class="card dark:border-none mt-4">
            <div class="card-header dark:card-bg-head bg-white p-3 flex items-center justify-between">
                <p class="mb-0 font-bold uppercase dark:text-gray-300 text-sm">
                    Todos los Clientes
                </p>
                <button data-bs-toggle="modal" data-bs-target="#modalCreateCliente"
                    class="flex gap-1 items-center text-sm w-full md:w-auto bg-green-700 bg-opacity-60 dark:bg-opacity-50 dark:text-green-500 dark:hover:text-gray-300 text-white p-2 rounded-sm hover:shadow-md transition-all duration-75 font-bold cursor-pointer"
                    style="text-decoration: none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-3 h-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Crear Cliente</button>
            </div>

            <div class="card-body dark:tab_bg p-0">
                <div class="row p-3">
                    <div class="col-xs-12 col-md-4 my-2">
                        <input type="text" class="form-control sz p-2 bg-gray-50 border-none dark:inp_bg_2"
                            placeholder="Buscar por cliente">
                    </div>
                    <div class="col-xs-12 col-md-4 my-2">
                        <input type="date" class="form-control sz p-2 dark:inp_bg_2 bg-gray-50  dark:text-gray-400 border-none">
                    </div>
                    <div class="col-xs-12 col-md-4 my-2">
                        <select class="form-select sz p-2 dark:inp_bg_2 dark:text-gray-400 bg-gray-50 border-none">
                            <option value="">-- Todo --</option>
                        </select>
                    </div>
                </div>

                <div class="text-gray-500 text-xs xl:text-sm">
                    <table class="w-full">
                        <thead class="dark:card-bg-head" style="background-color: #f3f9f5">
                            <th class="p-3">#ID</th>
                            <th class="p-3">Cliente</th>
                            <th class="p-3">Usuario Carga</th>
                            <th class="p-3">Fecha de Carga</th>
                            <th class="p-3">Última Edición</th>
                            <th class="p-3">Estado</th>
                        </thead>

                        <tbody>
                            @foreach ($clientes as $c)
                                <tr>
                                    <td class="p-3">1</td>
                                    <td class="p-3">
                                        <div class="flex justify-between">
                                            {{ $c->nombre }}
                                            <div class="flex items-center gap-3">
                                                <button data-bs-toggle="modal" data-bs-target="#modalEditarCliente" onclick="editarCliente({{ $c }})">
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
                                    <td class="p-3">{{ $c->user->nombre }} {{ $c->user->apellido }}</td>
                                    <td class="p-3">{{ $c->created_at->format('d/m/Y') }} a las
                                        {{ $c->created_at->format('H:i') }} hs</td>
                                        <td class="p-3">{{ $c->updated_at->format('d/m/Y') }} a las
                                            {{ $c->updated_at->format('H:i') }} hs</td>
                                    <td class="p-3">Activo</td>
                                    <td></td>
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

    <!-- Modal para crear un cliente -->
    @include('cliente.modal.modal_create_cliente')

    <!-- Modal para editar un cliente -->
    @include('cliente.modal.modal_edit_cliente')


    <script src="{{ asset('js/Cliente/cliente.js') }}"></script>
    <script>
        function redirectToViewSolicitud(solicitud_id) {
            event.preventDefault();
            window.location.replace(`solicitud/fractura/${solicitud_id}`);
        }
    </script>
@endsection
