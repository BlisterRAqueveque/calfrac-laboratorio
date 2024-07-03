 <!-- Modal -->
 <div class="modal fade" id="modal_confirm_lodo" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{route('solicitud.lodo')}}" method="POST">
            @csrf
            <div class="modal-content dark:dark_bg text-xs xl:text-sm dark:text-gray-300">
                <div class="modal-header py-2 px-3 dark:card-bg-head">
                    Confirmación de carga
                </div>
                <div class="modal-body text-center">
                    <p class="font-semibold tracking-wide mb-2">¿Confirma enviar la solicitud?</p>
                    <p class="mb-0">Una vez creada la solicitud, comienza la gestión para asignarle el ensayo
                        correspondiente</p>
                </div>
                <div class="modal-footer">
                    <button
                        class=" rounded flex items-center gap-1 p-2 hover:bg-orange-200 text-orange-400 transition-all duration-300 text-xs xl:text-sm"
                        data-bs-dismiss="modal" onclick="event.preventDefault()">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                        Cancelar</button>
                    <button type="submit" id="btnSendSolicitudLodo" data-bs-dismiss="modal"
                        class="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-xs xl:text-sm">Confirmar</button>
                </div>
            </div>
         </form>
    </div>
</div>