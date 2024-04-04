<div class="modal fade" id="modal_credentials" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md">
        {{-- <form action="{{ route('usuario.credencial') }}" method="POST"> --}}
        <form id="form_credential">
            @csrf
            <div class="modal-content">
                <div class="modal-header" style="background-color: #dff0fa">
                    <h1 class="modal-title fs-6 text-md font-bold tracking-wide m-0">Enviar credenciales del usuario
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12 border-r">
                            <div class="grid gap-2">
                                <input type="hidden" name="user_id_credencial" id="user_id_credencial">

                                <div>
                                    <label class="text-sm font-semibold">Email de Ingreso</label>
                                    <input type="email" name="email_credencial" id="email_credencial"
                                        placeholder="Ej: correo@calfrac.com" class="form-control sz">
                                </div>

                                <div>
                                    <label class="text-sm font-semibold">Contraseña</label>
                                    <input type="text" name="password_credencial"
                                        placeholder="Ingrese la contraseña del usuario" class="form-control sz">
                                </div>

                                <div>
                                    <label class="text-sm font-semibold">Contraseña</label>
                                    <textarea name="fundamento" id="fundamento" rows="5" class="form-control sz"
                                        placeholder="Descripción de las credenciales">Estimado/da, se le adjunta las credenciales para poder ingresar al sistema. Cualquier duda o consulta, no dude en comunicarse con soporte.</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button
                        class="text-sm rounded flex items-center gap-1 p-2 hover:bg-orange-200 text-orange-400 transition-all duration-300"
                        data-bs-dismiss="modal" onclick="event.preventDefault();"><svg
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                        Cancelar</button>
                    <input type="submit"
                        id="btnSendCredential"
                        class="text-sm w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold"
                        value="Enviar Credenciales">
                </div>
            </div>
        </form>
    </div>
</div>
