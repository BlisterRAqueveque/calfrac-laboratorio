<section>
    <div class="row md:w-1/2 mx-auto">
        <p class="m-0 font-bold text-lg text-center tracking-wide">Fundamento de la Respuesta</p>

        <div class="col-12">
            <label for="fundamento_edicion" class="text-sm">Ingrese el motivo por el cual realiza la edición de la solicitud <span
                    class="text-red-600">*</span></label>
            <textarea name="fundamento_edicion" id="fundamento_edicion" class="form-control sz p-2 mt-1" rows="3"
                placeholder="Ingrese el motivo - Máximo 300 caracteres" maxlength="300" required></textarea>
                @error('fundamento_edicion')
                <small class="text-sm text-red-600">El Fundamento es requerido para tener trazabilidad en cuanto a las ediciones</small>
            @enderror
        </div>
        <div class="flex justify-end mt-2">
            <input type="submit"
                class="text-sm w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold"
                value="Editar Solicitud">
        </div>
    </div>

</section>
