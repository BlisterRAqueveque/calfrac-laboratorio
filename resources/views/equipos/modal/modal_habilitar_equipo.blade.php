<div class="modal hidden" id="modalHabilitarEquipo" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <form action="{{ route('equipos.habilitar') }}" method="POST" enctype="multipart/form-data" id="form_habilitar_equipo">
        @csrf
        <div class="modal-content">
          <div class="modal-header dark:bg-violet-950 dark:bg-opacity-90 dark:text-gray-300">
            <h1 class="modal-title fs-5 text-md font-bold tracking-wide m-0">Habilitar Equipo</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body dark:dark_bg">
            <div class="row">
              <div class="col-12">
                <input type="text" name="equipo3_id" id="equipo3_id" hidden>
                <label for="habilitar_equipo" class="text-sm dark:text-gray-300">Nombre del Equipo <span class="text-red-500">*</span></label>
                <input type="text" name="habilitar_equipo" id="habilitar_equipo" class="form-control sz py-2 mt-1 dark:inp_bg_2 bg-gray-50 dark:text-gray-400 border-none">
                @error('habilitar_equipo')
                  <small class="text-sm text-red-600">{{ $message }}</small>
                @enderror
              </div>
            </div>
          </div>
          <div class="modal-footer dark:dark_bg">
            <button type="button" class="text-xs xl:text-sm rounded flex items-center gap-1 p-2 hover:bg-orange-200 text-orange-400 transition-all duration-300" data-bs-dismiss="modal">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
              </svg>
              Cancelar
            </button>
            <input type="submit" value="Habilitar Equipo" class="text-xs xl:text-sm w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold">
          </div>
        </div>
      </form>
    </div>
  </div>