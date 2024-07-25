@extends('layouts.app')
@section('titulo')
    Laboratorio - Equipos
@endsection


@section('contenido')
    <section class="container_mod pt-3">
        <p class="font-bold uppercase dark:text-gray-300 text-sm">Equipos</p>

        <div class="card dark:border-none mt-4">
            <div class="card-header dark:card-bg-head bg-white p-3 flex items-center justify-between">
                <p class="mb-0 font-bold uppercase dark:text-gray-300 text-sm">
                    Todos los equipos
                </p>
                <button data-bs-toggle="modal" data-bs-target="#modalCreateEquipo"
                    class="flex gap-1 items-center text-sm w-full md:w-auto bg-green-700 bg-opacity-60 dark:bg-opacity-50 dark:text-green-500 dark:hover:text-gray-300 text-white p-2 rounded-sm hover:shadow-md transition-all duration-75 font-bold cursor-pointer"
                    style="text-decoration: none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-3 h-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Crear nuevo equipo</button>
            </div>

        <div class="card-body dark:tab_bg p-0">
            <div>

                <div class="text-gray-500 text-xs xl:text-sm">
                    <table class="w-full>" id="tabla_equipo">
                        <thead class="dark:card-bg-head" style="background-color: #f3f9f5">
                            <th class="p-3">#ID</th>
                            <th class="p-3">Equipo</th>
                            <th class="p-3">Usuario Carga</th>
                            <th class="p-3">Estado</th>
                            <th class="p-3">Fecha de Carga</th>
                            <th class="p-3">Ultima Edición</th>
                            <th class="p-3">Opciones</th>

                        </thead>
                    </table>         
                </div>
            </div>
        </div>

        
    </section>
    @include('equipos.modal.modal_create_equipo')

    @include('equipos.modal.modal_edit_equipo')
    
    @include('equipos.modal.modal_delete_equipo')
    @include('equipos.modal.modal_habilitar_equipo')
    
   

    
    <!--Validar creacion de equipo 
    <script>
        //Escuchar el submit del modal
        //Si es incorrecto, volver a abrir el modal
        const btnCrearEquipo = document.getElementById('btn_crear_equipo');

        btnCrearEquipo.addEventListener('click',(e)=>{
            e.preventDefault();


        })
    </script -->

    <script>
                
        let tabla = document.getElementById("tabla_equipo");

        //let table = new DataTable('#tabla_equipo')

        $(document).ready(function() {
            $('#tabla_equipo').DataTable({
            processing:true,
            responsive:true,
            serverSide: true,
            ajax: "{{ route('equipos.filtro') }}",
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
        $('#tabla_equipo').on('click', '.btn-editar', function() {
            let equipoId = $(this).data('id');
            let equipoNombre = $(this).data('nombre');
            // Lógica para abrir el modal de editar con el ID de equipoId
            abrirModalEditar(equipoId,equipoNombre);
        });

        // Evento para abrir modal de habilitar
        $('#tabla_equipo').on('click', '.btn-habilitar', function() {
            let equipoId = $(this).data('id');
            let equipoNombre = $(this).data('nombre');
            // Lógica para abrir el modal de habilitar con el ID de equipoId
            abrirModalHabilitar(equipoId,equipoNombre);
        });

        // Evento para abrir modal de deshabilitar
        $('#tabla_equipo').on('click', '.btn-deshabilitar', function() {
            let equipoId = $(this).data('id');
            let equipoNombre = $(this).data('nombre');
            // Lógica para abrir el modal de deshabilitar con el ID de equipoId
            abrirModalDeshabilitar(equipoId,equipoNombre);
        });

        // Función para abrir el modal de editar
        function abrirModalEditar(id,nombre) {
             // Asigna el ID del equipo al input oculto en el modal
            $('#equipo_id').val(id);
            $('#edit_equipo').val(nombre);
            // Abre el modal de deshabilitar
            $('#modalEditarEquipo').modal('show');
        }

        // Función para abrir el modal de habilitar
        function abrirModalHabilitar(id,nombre) {
              // Asigna el ID del equipo al input oculto en el modal
            $('#equipo3_id').val(id);
            $('#habilitar_equipo').val(nombre);
            // Abre el modal de deshabilitar
            $('#modalHabilitarEquipo').modal('show');
        }

        // Función para abrir el modal de deshabilitar
        function abrirModalDeshabilitar(id,nombre) {
             // Asigna el ID del equipo al input oculto en el modal
            $('#equipo2_id').val(id);
            $('#delete_equipo').val(nombre);
            // Abre el modal de deshabilitar
            $('#modalEliminarEquipo').modal('show');
        }
    }); 
    </script>
   
@endsection




