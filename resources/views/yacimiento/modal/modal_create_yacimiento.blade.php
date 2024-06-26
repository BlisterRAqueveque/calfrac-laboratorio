<div class="modal fade" id="modalCreateYacimiento" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('yacimiento.store') }}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header" style="background-color: #dff0fa">
                    <h1 class="modal-title fs-5 text-md font-bold tracking-wide m-0">Crear Yacimiento</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <label for="yacimiento" class="text-sm">Nombre del Yacimiento <span
                                    class="text-red-500">*</span></label>
                            <input type="text" name="yacimiento" id="yacimiento" class="form-control sz py-2 mt-1"
                                placeholder="Ingrese el yacimiento">
                            @error('yacimiento')
                                <small class="text-sm text-red-600">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button
                        class="text-sm rounded flex items-center gap-1 p-2 hover:bg-orange-200 text-orange-400 transition-all duration-300"
                        data-bs-dismiss="modal" onclick="event.preventDefault();">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                        Cancelar</button>
                    <input type="submit"
                        class="text-sm w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold"
                        value="Crear Yacimiento">
                </div>
            </div>
        </form>
    </div>
</div>
