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
    
   

    <script src="{{ asset('js/equipos/equipos.js') }}"></script>
    
     <!-- Desactivar el equipo -->
     <script>
        const btnEliminarEquipo = document.getElementById('botonEliminar');     
    
        btnEliminarEquipo.addEventListener('click', (e) => {
        e.preventDefault();
    
        const form = document.getElementById('form_deshabilitar_equipo');
        const formData = new FormData(form); // Create FormData from the form
        
            fetch(`${route('equipos.deshabilitar')}`, {
                method: 'POST',
                body: formData,
                });
        });
        
       /* confirmAlert('¿Está seguro de eliminar al equipo?', '', 1, 'Desactivar')
            .then((confirmed) => {
            if (confirmed) {
                loadingAlert('Desactivando equipo', 'Por favor espere');
    
                fetch(`${route('equipos.deshabilitar')}`, {
                method: 'POST',
                body: formData,
                })
                .then((response) => response.json())
                .then((data) => {
                    Swal.close();
                    successAlert('Equipo eliminado!', 'El Equipo ha sido eliminado del sistema')
                    .then((confirmed) => {
                        if (confirmed) {
                        window.location.reload();
                        }
                    });
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
            }
            });
        });*/
    
    </script>
    <!-- Habilitar el equipo -->
    <script>
        const btnHabilitarEquipo = document.getElementById('botonHabilitar');     
    
        btnHabilitarEquipo.addEventListener('click', (e) => {
        e.preventDefault();
    
        const form = document.getElementById('form_habilitar_equipo'); 
        const formData = new FormData(form); // Create FormData from the form
        fetch(`${route('equipos.habilitar')}`, {
                method: 'POST',
                body: formData,
                });
            });
       /* confirmAlert('¿Está seguro de habilitar al equipo?', '', 1, 'Desactivar')
            .then((confirmed) => {
            if (confirmed) {
                loadingAlert('Habilitando equipo', 'Por favor espere');
    
                fetch(`${route('equipos.habilitar')}`, {
                method: 'POST',
                body: formData,
                })
                .then((response) => response.json())
                .then((data) => {
                    Swal.close();
                    successAlert('Equipo habilitado!', 'El Equipo ha sido habilitado del sistema')
                    .then((confirmed) => {
                        if (confirmed) {
                        window.location.reload();
                        }
                    });
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
            }
            });
        });*/
    
    </script>
    
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
            serverSide: true,
            ajax: "{{ route('equipos.filtro') }}",
            columns: [
                { data: 'id' },
                { data: 'nombre' },
                { data: 'usuario' }, // Mostrar nombre completo del usuario
                { data: 'estado' },
                { data: 'created_at' },
                { data: 'updated_at' }
        ],
            language: {
                "url": "https://cdn.datatables.net/plug-ins/2.0.2/i18n/es-ES.json"
            }

            });
    });
    </script>
   
@endsection




