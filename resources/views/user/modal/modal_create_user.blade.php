<div class="modal fade" id="modalCreateUser" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">

        <style>
            @media (100px < width < 2000px) {
                .container_permisos {
                    max-height: 450px
                }
            }
        </style>
        <form action="{{ route('usuario.store') }}" id="form_user_store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header" style="background-color: #dff0fa">
                    <h1 class="modal-title fs-5 text-md font-bold tracking-wide m-0">Crear Usuario</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 border-r">
                            <div class="row">

                                <!-- Imagen Perfil -->
                                <div class="flex relative flex-col justify-center p-4">

                                    <div class="flex justify-center items-center w-32 h-32 mx-auto">
                                        <img src="{{ asset('img/img_default.jpg') }}"
                                            class="rounded-full object-cover w-32 h-32 img_default_profile" alt="">
                                    </div>

                                    <button class="absolute" style="right: 225px; bottom: 25px;"
                                        onclick="setFileImg('imagen_perfil')">
                                        <div class="flex justify-center mx-auto p-2 border-1 bg-gray-50 rounded-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                            </svg>
                                        </div>
                                    </button>
                                    <input type="file" name="imagen_perfil"
                                        onChange="displayImage(this, 'img_default_profile')" id="imagen_perfil" hidden >
                                </div>

                                <!-- Información del Usuario -->
                                <div class="col-xs-12 col-md-6 my-2">
                                    <label for="apellido" class="text-sm">Apellido <span
                                            class="text-red-500">*</span></label>
                                    <input type="text" name="apellido" id="apellido" class="form-control sz py-2"
                                        placeholder="Ingrese el apellido">
                                    @error('apellido')
                                        <small class="text-sm text-red-600">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-xs-12 col-md-6 my-2">
                                    <label for="name" class="text-sm">Nombre <span
                                            class="text-red-500">*</span></label>
                                    <input type="text" name="name" id="name" class="form-control sz py-2"
                                        placeholder="Ingrese el nombre">
                                    @error('name')
                                        <small class="text-sm text-red-600">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-xs-12 col-md-6 my-2">
                                    <label for="username" class="text-sm">Usuario <span
                                            class="text-red-500">*</span></label>
                                    <input type="text" name="username" id="username" class="form-control sz py-2"
                                        placeholder="Ingrese el usuario">
                                    @error('username')
                                        <small class="text-sm text-red-600">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-xs-12 col-md-6 my-2">
                                    <label for="email" class="text-sm">Correo <span
                                            class="text-red-500">*</span></label>
                                    <input type="email" name="email" id="email" class="form-control sz py-2"
                                        placeholder="Ingrese el correo">
                                    @error('email')
                                        <small class="text-sm text-red-600">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-xs-12 col-md-6 my-2">
                                    <label for="telefono" class="text-sm">Teléfono
                                        <small>(Opcional)</small></label>
                                    <input type="number" name="telefono" id="telefono" class="form-control sz py-2"
                                        placeholder="Ingrese el teléfono">
                                </div>
                                <div class="col-xs-12 col-md-6 my-2">
                                    <label for="password" class="text-sm">Contraseña <span
                                            class="text-red-500">*</span></label>
                                    <input type="password" name="password" id="password" class="form-control sz py-2"
                                        placeholder="Ingrese la contraseña">
                                    @error('password')
                                        <small class="text-sm text-red-600">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-12 my-2">
                                    <label for="grupo" class="text-sm">Grupo <span
                                            class="text-red-500">*</span></label>
                                    <select name="grupo" id="grupo" class="form-select sz py-2">
                                        <option value="">-- Seleccione --</option>
                                        @foreach ($grupos as $g)
                                            <option value="{{ $g->id }}">{{ $g->nombre }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('grupo')
                                        <small class="text-sm text-red-600">{{ $message }}</small>
                                    @enderror
                                </div>

                                 <!-- firma Perfil -->
                                 <div class="flex relative flex-col justify-center p-4">
                                    Firma:
                                    <div class="flex justify-center items-center w-32 h-32 mx-auto">
                                        <img src="{{ asset('img/img_default.jpg') }}"
                                            class="rounded-full object-cover w-32 h-32 img_default_firma" alt="">
                                    </div>

                                    <button class="absolute" style="right: 225px; bottom: 25px;"
                                        onclick="setFirma('imagen_firma')">
                                        <div class="flex justify-center mx-auto p-2 border-1 bg-gray-50 rounded-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                            </svg>
                                        </div>
                                    </button>
                                    <input type="file" name="imagen_firma"
                                        onChange="displayFirma(this, 'img_default_firma')" id="imagen_firma" hidden >
                                </div>
                            </div>


                        </div>

                        <div class="col-xs-12 col-md-6 text-sm">
                            <p class="text-center border-b mb-1">¿Que permisos tendrá asignado el usuario?</p>
                            <div class="row overflow-y-auto container_permisos">
                                <table>
                                    <tbody>
                                        @foreach ($permisos as $p)
                                            <tr style="border-bottom: 3px solid white;">
                                                <td class="cursor-pointer rounded-md p-1"
                                                    data-permiso="{{ $p->id }}"
                                                    onclick="_assignedPermissionNewUser(this)">
                                                    <div
                                                        class="flex justify-between items-center border p-1 bg-gray-50 rounded-sm">
                                                        <p class="mb-0">
                                                            {{ $p->nombre }}
                                                        </p>
                                                        <span
                                                            class="text-xs uppercase bg-white px-2 py-1 rounded-full border border-gray-500">
                                                            sin asignar
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="user_permissions_new[]" id="user_permissions_new">
                <div class="modal-footer">
                    <button
                        class="text-sm rounded flex items-center gap-1 p-2 hover:bg-orange-200 text-orange-400 transition-all duration-300"
                        data-bs-dismiss="modal" onclick="event.preventDefault();"><svg
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                        Cancelar
                    </button>
                    <input type="submit"
                        class="text-sm w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold"
                        value="Crear Usuario" >
                </div>
            </div>
        </form>
    </div>
</div>
