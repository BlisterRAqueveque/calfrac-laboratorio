@extends('layouts.app')

@section('titulo')
    Laboratorio - Usuarios
@endsection

@section('contenido')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        .permission_selected {
            background: #c0ddef;
            border: 1px solid #8db7d1;
        }

        .permission_new {
            background: #d0f5d5;
            border: 1px solid #a4d6aa
        }

        .permission_remove {
            background: #fae5e5;
            border: 1px solid #e0b9b9;
        }
    </style>

    <section class="container_mod pt-3">
        <p class="font-bold uppercase">Histórico de Usuarios</p>

        <div class="mt-4 bg-white px-3 py-2 border shadow-sm rounded-sm">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <p class="mb-0 font-bold uppercase">
                    Todos los usuarios
                </p>
                @can('create', App\Models\User::class)
                    <button data-bs-toggle="modal" data-bs-target="#modalCreateUser"
                        class="flex justify-center gap-1 items-center text-sm w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-md transition-all duration-75 font-bold cursor-pointer"
                        style="text-decoration: none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-3 h-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        Crear Usuario</button>
                @endcan

            </div>
        </div>

        <section class="flex flex-col md:flex-row gap-3 mt-4 h-screen" style="max-height: 70vh">

            <!-- Tabla de todos los usuarios -->
            <div class="card w-full md:w-1/2">
                <div class="row p-3">
                    <div class="col-xs-12 col-md-4 my-2">
                        <input type="text" class="form-control sz p-2 "
                            style="background-color: #f3f9f5; border: none;" placeholder="Buscar por nombre">
                    </div>
                    <div class="col-xs-12 col-md-4 my-2">
                        <input type="date" class="form-control sz p-2 "
                            style="background-color: #f3f9f5; border: none;">
                    </div>
                    <div class="col-xs-12 col-md-4 my-2">
                        <select class="form-select sz p-2" style="background-color: #f3f9f5; border: none;">
                            <option value="">-- Todo --</option>
                        </select>
                    </div>
                </div>

                <table class="w-full text-sm">
                    <thead style="background-color: #f3f9f5">
                        <th class="p-3">#ID</th>
                        <th class="p-3">Nombre y Apellido</th>
                        <th class="p-3">Estado</th>
                    </thead>
                </table>
                <div class="card-body p-0 overflow-auto">

                    <div style="max-height: 70vh;">
                        <div>
                            <table class="w-full text-sm">
                                <tbody style="max-height: 70vh;overflow-y: scroll">
                                    @foreach ($usuarios as $u)
                                        <tr>
                                            <td class="p-3">{{ $u->id }}
                                            </td>
                                            <td class="p-3">
                                                <div class="flex justify-between">
                                                    {{ $u->nombre }} {{ $u->apellido }}

                                                    <div class="flex items-center gap-3">
                                                        <button href="" class="text-gray-500"
                                                            onclick="viewPerfilUser('{{ $u->id }}', '{{ $u->nombre }}', '{{ $u->apellido }}', '{{ $u->grupo->nombre }}', '{{ $u->email }}', '{{ $u->telefono }}','{{ $u->permisos }}', '{{ $u->img }}', '{{ $u->created_at->format('d') }} {{ $u->created_at->format('M') }}, {{ $u->created_at->format('Y') }} a las {{ $u->created_at->format('H:i') }} hs', '{{ $u->user_carga->nombre }} {{ $u->user_carga->apellido }}')">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                                class="w-4 h-4">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                            </svg>
                                                        </button>
                                                        <!-- Botón de Editar -->
                                                        @can('update', App\Models\User::class)
                                                            <button data-bs-toggle="modal" data-bs-target="#modalEditUser"
                                                                onclick="editarUsuario({{ $u }})">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                                    class="w-4 h-4">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                                </svg>

                                                            </button>
                                                        @endcan
                                                        <!-- Botón de Eliminar -->
                                                        @can('delete', App\Models\User::class)
                                                            <button>
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                                    class="w-4 h-4">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                                </svg>
                                                            </button>
                                                        @endcan
                                                    </div>
                                                </div>
                                            </td>
                                            @php
                                                switch ($u->estado) {
                                                    case '1':
                                                        $estado = 'Activo';
                                                        $class = 'table_btn_success';
                                                        break;
                                                    case '0':
                                                        $class = 'table_btn_danger';
                                                        $estado = 'Inactivo';
                                                        break;
                                                }
                                            @endphp
                                            <td class="p-3 sm:w-52 xl:w-auto mx-auto my-0">
                                                <div class="table_btn text-xs xl:text-sm {{ $class }}">
                                                    <div
                                                        class=" w-1 h-1 sm:w-1 sm:h-1 xl:w-2 xl:h-2 rounded-full point_success">
                                                    </div>
                                                    {{ $estado }}
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
                <div class="px-4 pt-2 pb-1 border-t">
                    {{ $usuarios->links() }}
                </div>
            </div>

            <!-- Información del usuario -->
            <div class="card w-full md:w-1/2" style="max-height: 70vh;">
                <ul role="tablist" class="nav nav-tabs flex  text-center" id="nav-tab-with-nested-tabs"
                    style="z-index: 999">
                    <li class="nav-item flex-1" role="presentation">
                        <a class="nav-link nav_tab_mod active" aria-current="page" id="nav-tab1" href="#tab_informacion"
                            data-bs-toggle="tab" data-bs-target="#tab_informacion" role="tab"
                            aria-controls="tab_informacion" aria-selected="true">Información</a>
                    </li>
                    <li class="nav-item flex-1" role="presentation">
                        <a class="nav-link nav_tab_mod" id="nav-tab2" data-bs-toggle="tab" href="#tab_permisos"
                            data-bs-target="#tab_permisos" role="tab" aria-controls="tab_permisos"
                            aria-selected="false">Permisos</a>
                    </li>
                    <li class="nav-item flex-1" role="presentation">
                        <a class="nav-link nav_tab_mod" id="nav-tab2" data-bs-toggle="tab" href="#tab_movimientos"
                            data-bs-target="#tab_movimientos" role="tab" aria-controls="tab_movimientos"
                            aria-selected="false">Movimientos</a>
                    </li>
                </ul>
                <div style="max-height: 70vh; overflow: auto">

                    <div class="tab-content" id="nav-tabs-content">
                        <!-- Información del usuario TAB -->
                        <div class="mt-4 tab-pane fade show active" id="tab_informacion" role="tabpanel">
                            <input type="hidden" value="" name="solicitud_id">
                            <!-- Carga de Información -->
                            <!-- Imagen de perfil -->
                            <div class="flex flex-col justify-center p-4">
                                <div class="flex flex-col justify-center items-center w-20 h-20 mx-auto">
                                    <img src="{{ asset('img/img_default.jpg') }}"
                                        class="rounded-full object-cover w-20 h-20" id="setImg" alt="">
                                </div>
                                <p class="mb-0 text-center mt-1" id="setNombre">-</p>
                                <p class="mb-0 text-center text-sm text-gray-400" id="setGrupo">-</p>
                            </div>

                            <!-- Información -->
                            <div class="p-3 text-sm">
                                <p class="mb-0 uppercase text-gray-500 font-bold">Información del Usuario</p>
                                <div class="mt-2">
                                    <p id="setEmail"><b>Email :</b> -</p>
                                    <p id="setTelefono"><b>Teléfono :</b> -</p>
                                    <p id="setFechaAlta"><b>Fecha de alta :</b> -</p>
                                    <p id="setUsuarioAlta"><b>¿Quién lo dio de alta? : </b> -</p>
                                    <p id="setUltimaModificacion"><b>Última Modificación :</b> -</p>
                                </div>
                            </div>
                        </div>

                        <!-- Permisos TAB -->
                        <div class="mt-4 tab-pane p-1 fade overflow-auto" id="tab_permisos" role="tabpanel">
                            <table class="w-full">

                                <thead>
                                    <th
                                        class="p-2 text-center bg-gray-100 rounded border-gray-100 border-b-4 border-b-white">
                                        Permisos</th>
                                </thead>

                                <tbody id="container_permisos" class="text-sm font-bold text-gray-700">
                                    <tr class="text-center">
                                        <td class="py-3"><em class="semibold">Seleccione un usuario para visualizar los
                                                permisos</em></td>
                                    </tr>
                                </tbody>
                            </table>
                            @can('update', App\Models\User::class)
                                <form method="POST" id="form_permissions_update">
                                    @csrf
                                    <input type="hidden" class="user_id_permission" name="user_id">
                                    <div class="flex justify-center mt-3">
                                        <button id="btnSubmitUserPermissions" style="display: none"
                                            class="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-xs uppercase">Actualizar
                                            Permisos del Usuario</button>
                                    </div>
                                </form>
                            @endcan
                        </div>

                        <!-- Movimientos TAB -->
                        <div class="mt-4 tab-pane p-1 fade overflow-auto" id="tab_movimientos" role="tabpanel">
                            <table class="w-full">
                                <thead>
                                    <tr>
                                        <th>Movimiento</th>
                                        <th>ID Afectado</th>
                                        <th>Fecha</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Realizó una carga de solicitud de fractura</td>
                                        <td>15</td>
                                        <td>05 Mar, 2024 a las 16:54 hs</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <!-- Modal para crear usuario -->
    @include('user.modal.modal_create_user')

    <!-- Modal para editar usuario -->
    @include('user.modal.modal_edit_user')

    <script>
        function redirectToViewSolicitud(solicitud_id) {
            event.preventDefault();
            window.location.replace(`solicitud/fractura/${solicitud_id}`);
        }
    </script>
    <script>
        var user_permissions_assigned = [];

        function _setUrl(url, value) {
            return `{{ asset('${url}/${value}') }}`;
        }
    </script>

    <!-- Perfil de usuario en 'Información' y también edición del mismo -->
    <script src="{{ asset('js/User/profileUserPermission.js') }}"></script>

    <!-- Setea la imagen en el file -->
    <script>
        function setFileImg(id) {
            event.preventDefault();
            document.getElementById(id).click();
        }

        function displayImage(e, id_img) {
            if (e.files[0]) {
                let reader = new FileReader();
                reader.onload = function(e) {
                    document.querySelector(`.${id_img}`).setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(e.files[0]);
            }
        }
    </script>

    <!-- Permisos desde la BD -->
    <script>
        let permisos_bd = {!! json_encode($permisos) !!}
    </script>

    <!-- Crea la ventana de 'Permisos' y también poder asignar o remover permisos del usuario -->
    <script src="{{ asset('js/User/createTabPermission.js') }}"></script>
    <script src="{{ asset('js/User/assignedPermission.js') }}"></script>


    <script>
        var user_permissions_new_user = [];
        let user_permissions_new = document.getElementById('user_permissions_new');

        function _assignedPermissionNewUser(permiso) {

            let permiso_id = permiso.getAttribute('data-permiso');
            let div_permiso = permiso.firstElementChild;
            let span = div_permiso.getElementsByTagName("span")[0];

            if (user_permissions_new_user.includes(permiso_id)) {
                let permiso_remove = user_permissions_new_user.indexOf(permiso_id);

                if (permiso_remove !== -1) {
                    user_permissions_new_user.splice(permiso_remove, 1);
                }
                div_permiso.classList.add("border");
                div_permiso.classList.remove("permission_new");
                span.classList.add("bg-white", "border-gray-500");
                span.classList.remove(
                    "bg-green-50",
                    "text-green-900",
                    "border-green-500"
                );
                span.textContent = "sin asignar";
            } else {
                div_permiso.classList.remove("border");
                div_permiso.classList.add("permission_new");
                span.classList.remove("bg-white", "border-gray-500");
                span.classList.add("bg-green-50", "text-green-900", "border-green-500");
                span.textContent = "asignar";
                user_permissions_new_user.push(permiso_id);
            }

            user_permissions_new.value = user_permissions_new_user;
        }
    </script>


    <!-- Submit para agregar los permisos al usuario -->
    <script>
        const btnSubmitUserPermissions = document.getElementById('btnSubmitUserPermissions');

        if (btnSubmitUserPermissions) {
            btnSubmitUserPermissions.addEventListener('click', e => {
                e.preventDefault();

                let user_id = document.querySelector('.user_id_permission').value;
                let form = new FormData(document.getElementById('form_permissions_update'));

                remove_permissions.forEach(function(permission) {
                    form.append('remove_permissions[]', permission);
                });
                new_permissions.forEach(function(permission) {
                    form.append('new_permissions[]', permission);
                });

                confirmAlert().then((confirmed) => {
                    if (confirmed) {
                        fetch("{{ route('permisos.user.store') }}", {
                                method: 'POST',
                                body: form,
                            }).then((response) => response.json())
                            .then((data) => {
                                console.log(data);
                                if (data) {
                                    successAlert('¡Permisos actualizados correctamente!',
                                        'Se actualizaron los permisos para el usuario').then(
                                        (confirmed) => {
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
