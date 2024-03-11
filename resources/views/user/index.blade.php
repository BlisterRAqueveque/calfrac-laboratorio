@extends('layouts.app')

@section('titulo')
    Laboratorio - Usuarios
@endsection

@section('contenido')
    <section class="container_mod pt-3">
        <p class="font-bold uppercase">Histórico de Usuarios</p>

        <div class="mt-4 bg-white px-3 py-2 border shadow-sm rounded-sm">
            <div class="flex items-center justify-between">
                <p class="mb-0 font-bold uppercase">
                    Todos los usuarios
                </p>
                <button data-bs-toggle="modal" data-bs-target="#modalCreateUser"
                    class="flex gap-1 items-center text-sm w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-md transition-all duration-75 font-bold cursor-pointer"
                    style="text-decoration: none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-3 h-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Crear Usuario</button>
                
            </div>
        </div>

        <section class="flex gap-3 mt-4">
            <!-- Tabla de todos los usuarios -->
            <div class="card w-3/4">
                <div class="card-body p-0">
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

                    <div class="text-gray-500 text-sm">
                        <table class="w-full">
                            <thead style="background-color: #f3f9f5">
                                <th class="p-3">#ID</th>
                                <th class="p-3">Nombre y Apellido</th>
                                <th class="p-3">Correo</th>
                                <th class="p-3">Grupo</th>
                                <th class="p-3">Estado</th>
                            </thead>

                            <tbody>
                                @foreach ($usuarios as $u)
                                    <tr>
                                        <td class="p-3">{{ $u->id }}</td>
                                        <td class="p-3">
                                            <div class="flex justify-between">
                                                {{ $u->nombre }} {{ $u->apellido }}

                                                <div class="flex items-center gap-3">
                                                    <button href="" class="text-gray-500"
                                                        onclick="viewPerfilUser('{{ $u->nombre }}', '{{ $u->apellido }}', '{{ $u->grupo->nombre }}', '{{ $u->email }}', '{{ $u->telefono }}', '{{ $u->img }}', '{{ $u->created_at->format('d') }} {{ $u->created_at->format('M') }}, {{ $u->created_at->format('Y') }} a las {{ $u->created_at->format('H:i') }} hs', '{{ $u->user_carga->nombre }} {{ $u->user_carga->apellido }}')">
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
                                                    <button data-bs-toggle="modal" data-bs-target="#modalEditUser" onclick="editarUsuario({{ $u }})">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-4 h-4">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                        </svg>

                                                    </button>
                                                    <!-- Botón de Eliminar -->
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
                                        <td class="p-3">{{ $u->email }}</td>
                                        <td class="p-3">{{ $u->grupo->nombre }}</td>
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
                                        <td class="p-3">
                                            <div class="table_btn {{ $class }}">
                                                <div class="w-2 h-2 rounded-full point_success"></div>
                                                {{ $estado }}
                                            </div>
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

            <!-- Información del usuario -->
            <div class="card w-1/4">

                <ul role="tablist" aria-owns="nav-tab1 nav-tab2 nav-tab3 nav-tab4 w-full" class="nav nav-tabs"
                    id="nav-tab-with-nested-tabs" style="z-index: 999">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link nav_tab_mod active" aria-current="page" id="nav-tab1" href="#tab1-content"
                            data-bs-toggle="tab" data-bs-target="#tab1-content" role="tab"
                            aria-controls="tab1-content" aria-selected="true">Información</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link nav_tab_mod" id="nav-tab2" data-bs-toggle="tab" href="#tab2-content"
                            data-bs-target="#tab2-content" role="tab" aria-controls="tab2-content"
                            aria-selected="false">Permisos</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link nav_tab_mod" id="nav-tab2" data-bs-toggle="tab" href="#tab2-content"
                            data-bs-target="#tab2-content" role="tab" aria-controls="tab2-content"
                            aria-selected="false">Movimientos</a>
                    </li>
                </ul>

                <!-- Imagen de perfil -->
                <div class="flex flex-col justify-center p-4">
                    <div class="flex flex-col justify-center items-center w-20 h-20 mx-auto">
                        <img src="{{ asset('img/img_default.jpg') }}"
                            class="rounded-full object-cover w-20 h-20" id="setImg" alt="">
                    </div>
                    <p class="mb-0 text-center mt-1" id="setNombre">-</p>
                    <p class="mb-0 text-center text-sm text-gray-400" id="setGrupo">-</p>
                </div>

                {{-- <div class="flex flex-col justify-center p-4">
                    <div class="w-20 h-20 mx-auto rounded-full bg-gray-300">
                    </div>
                    <p class="mb-0 text-center mt-1" id="setNombre">-</p>
                    <p class="mb-0 text-center text-sm text-gray-400" id="setGrupo">-</p>
                </div> --}}

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

    <script>
        function viewPerfilUser(nombre, apellido, grupo, email, telefono, img, fecha_alta, usuario_alta) {
            document.getElementById('setImg').src = img ? `{{ asset('uploads/perfiles/${img}') }}` : "{{ asset('img/img_default.jpg') }}";
            document.getElementById('setNombre').textContent = nombre + ' ' + apellido;
            document.getElementById('setGrupo').textContent = grupo;
            document.getElementById('setEmail').innerHTML = `<b>Email :</b> ${email}`;
            document.getElementById('setTelefono').innerHTML = telefono != 0 ? `<b>Teléfono :</b> ${telefono}` : `<b>Teléfono :</b> -`;
            document.getElementById('setFechaAlta').innerHTML = `<b>Fecha de alta :</b> ${fecha_alta}`;
            document.getElementById('setUsuarioAlta').innerHTML = `<b>¿Quién lo dio de alta? :</b> ${usuario_alta}`;
        }

        function editarUsuario(user) {
            event.preventDefault();
            document.getElementById('user_id').value = user.id;
            if (user.img) {
                document.getElementById('img_edit').src = `{{ asset('uploads/perfiles/${user.img}') }}`;
                console.log(document.getElementById('img_edit'))
            } else {
                document.getElementById('img_edit').src = "{{ asset('img/img_default.jpg') }}";
            }
            document.getElementById('edit_apellido').value = user.apellido;
            document.getElementById('edit_name').value = user.nombre;
            document.getElementById('edit_username').value = user.username;
            document.getElementById('edit_email').value = user.email;
            document.getElementById('edit_telefono').value = user.telefono;
            document.getElementById('edit_grupo').value = user.grupo_id;
        }
    </script>
@endsection
