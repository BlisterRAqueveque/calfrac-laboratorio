@extends('layouts.app')

@section('titulo')
    Laboratorio - Yacimientos
@endsection

@section('contenido')
    <section class="container_mod pt-3">
        <p class="font-bold uppercase">Histórico de Yacimientos</p>

        <div class="card mt-4">
            <div class="card-header bg-white p-3 flex items-center justify-between">
                <p class="mb-0 font-bold uppercase">
                    Todos los Yacimientos
                </p>
                <button data-bs-toggle="modal" data-bs-target="#modalCreateYacimiento"
                    class="flex gap-1 items-center text-sm w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-md transition-all duration-75 font-bold cursor-pointer"
                    style="text-decoration: none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-3 h-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Crear Yacimiento</button>
            </div>

            <div class="card-body p-0">
                

                <div class="text-gray-500 text-sm">
                    <table class="w-full" id="tabla_yacimiento">
                        <thead style="background-color: #f3f9f5">
                            <th class="p-3">#ID</th>
                            <th class="p-3">Yacimiento</th>
                            <th class="p-3">Usuario Carga</th>
                            <th class="p-3">Estado</th>
                            <th class="p-3">Fecha de Carga</th>
                            <th class="p-3">Última Edición</th>
                            <th class="p-3">Opciones</th>
                        </thead>

                    </table>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- Modal para crear un yacimiento -->
    @include('yacimiento.modal.modal_create_yacimiento')

    <!-- Modal para editar un Yacimiento -->
    @include('yacimiento.modal.modal_edit_yacimiento')

    @include('yacimiento.modal.modal_delete_yacimiento')

    @include('yacimiento.modal.modal_habilitar_yacimiento')



    <script src="{{ asset('js/Yacimiento/yacimiento.js') }}"></script>
    <script>
        function redirectToViewSolicitud(solicitud_id) {
            event.preventDefault();
            window.location.replace(`solicitud/fractura/${solicitud_id}`);
        }
    </script>

    <!-- Deshabilitar Yacimento -->
<script>
   let tabla = document.getElementById("tabla_yacimiento");

    $(document).ready(function() {
        $('#tabla_yacimiento').DataTable({
            processing:true,
            responsive:true,
            serverSide: true,
            ajax: "{{ route('yacimiento.tabla') }}",
            columns: [
                { data: 'id' },
                { data: 'nombre' },
                { data: 'usuario' }, // Mostrar nombre completo del usuario
                { data: 'estado' },
                { data: 'created_at' },
                { data: 'updated_at' },
                { 
                data: null,
                render: function(data, type, row) {
                    return `
                        <button class="btn-editar" data-id="${row.id}" data-nombre="${row.nombre}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-4 h-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                    </svg>
                        </button>
                        <button class="btn-habilitar" data-id="${row.id}" data-nombre="${row.nombre}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" 
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                                    </svg>
                        </button>
                        <button class="btn-deshabilitar" data-id="${row.id}" data-nombre="${row.nombre}">                      
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" 
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                                    </svg>
                        </button>
                    `;
                }
            }
        ],
            language: {
                "url": "https://cdn.datatables.net/plug-ins/2.0.2/i18n/es-ES.json"
            }

            });

            // Evento para abrir modal de editar
        $('#tabla_yacimiento').on('click', '.btn-editar', function() {
            let yacimientoId = $(this).data('id');
            let yacimientoNombre = $(this).data('nombre');
            // Lógica para abrir el modal de editar con el ID de yacimientoId
            abrirModalEditar(yacimientoId,yacimientoNombre);
        });

        // Evento para abrir modal de habilitar
        $('#tabla_yacimiento').on('click', '.btn-habilitar', function() {
            let yacimientoId = $(this).data('id');
            let yacimientoNombre = $(this).data('nombre');
            // Lógica para abrir el modal de habilitar con el ID de yacimientoId
            abrirModalHabilitar(yacimientoId,yacimientoNombre);
        });

        // Evento para abrir modal de deshabilitar
        $('#tabla_yacimiento').on('click', '.btn-deshabilitar', function() {
            let yacimientoId = $(this).data('id');
            let yacimientoNombre = $(this).data('nombre');
            // Lógica para abrir el modal de deshabilitar con el ID de yacimientoId
            abrirModalDeshabilitar(yacimientoId,yacimientoNombre);
        });

        // Función para abrir el modal de editar
        function abrirModalEditar(id,nombre) {
            // Asigna el ID del yacimiento al input oculto en el modal
            $('#yacimiento_id').val(id);
            $('#edit_yacimiento').val(nombre);
            // Abre el modal de deshabilitar
            $('#modalEditarYacimiento').modal('show');
        }

        // Función para abrir el modal de habilitar
        function abrirModalHabilitar(id,nombre) {
            // Asigna el ID del yacimiento al input oculto en el modal
            $('#yacimiento3_id').val(id);
            $('#habilitar_yacimiento').val(nombre);
            // Abre el modal de deshabilitar
            $('#modalHabilitarYacimiento').modal('show');
        }

        // Función para abrir el modal de deshabilitar
        function abrirModalDeshabilitar(id,nombre) {
            // Asigna el ID del yacimiento al input oculto en el modal
            $('#yacimiento2_id').val(id);
            $('#delete_yacimiento').val(nombre);
            // Abre el modal de deshabilitar
            $('#modalEliminarYacimiento').modal('show');
        }
    }); 
</script>
@endsection

