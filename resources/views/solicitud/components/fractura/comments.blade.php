<section>
    <div class="row md:w-1/2 my-3 mx-auto">
        <p class="m-0 font-bold text-lg text-center tracking-wide">Fundamento de la Respuesta</p>

        <div class="col-12">
            <label for="fundamento_edicion" class="text-sm text-gray-300">Ingrese el motivo por el cual realiza la edición de la
                solicitud <span class="text-red-600">*</span></label>
            <textarea name="fundamento_edicion" id="fundamento_edicion" class="form-control sz dark:inp_bg_2 dark:text-gray-300 dark:placeholder:text-gray-400 dark:border-none mt-1" rows="3"
                placeholder="Ingrese el motivo - Máximo 300 caracteres" maxlength="300" required></textarea>
            @error('fundamento_edicion')
                <small class="text-sm text-red-600">El Fundamento es requerido para tener trazabilidad en cuanto a las
                    ediciones</small>
            @enderror
        </div>
        <div class="flex justify-end mt-2">
            <button onclick="event.preventDefault()"
                class="text-sm w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold"
                data-bs-toggle="modal" data-bs-target="#modalEdicionConfirm">
                Editar Solicitud
            </button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalEdicionConfirm" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content dark:dark_bg text-xs xl:text-sm">
                <div class="modal-header py-2 px-3 dark:card-bg-head dark:text-gray-300">
                    Confirmación de edición
                </div>
                <div class="modal-body text-center">
                    <p class="font-semibold tracking-wide mb-2 dark:text-gray-300">¿Confirma editar la solicitud?</p>
                    <p class="mb-0 text-sm dark:text-gray-300">Una vez modificada la solicitud, se generará un comentario para comenzar el seguimiento de la misma</p>
                </div>
                <div class="modal-footer p-2">
                    <button
                        class="rounded flex items-center gap-1 p-2 hover:bg-orange-200 text-orange-400 transition-all duration-300 text-xs xl:text-sm"
                        data-bs-dismiss="modal" onclick="event.preventDefault()">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                        Cancelar</button>
                    <button type="submit"
                        class="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-xs xl:text-sm">Confirmar</button>
                </div>
            </div>
        </div>
    </div>
</section>
