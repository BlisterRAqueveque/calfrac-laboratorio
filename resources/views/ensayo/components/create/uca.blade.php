<div class="mt-4 tab-pane fade" id="tab_uca" role="tabpanel" aria-labelledby="nav-tab_uca">

    @if (count($s_l[0]->rel_uca) > 0)
        <div id="registro_uca">
            <div class="mb-2 text-center">
                <h5 class="mb-1">Registro de UCA</h5>
            </div>
            <div class="grid grid-cols-3 gap-3 my-3">
                <div class="col-span-3 grid gap-3 grid-cols-4">
                    <div>
                        <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Principal
                            (ºC)
                        </label>
                        <input type="text" class="form-control text-sm p-2"
                            value="{{ $s_l[0]->rel_uca[0]->principal ? $s_l[0]->rel_uca[0]->principal : 'No aplica' }}"
                            readonly>
                    </div>
                    <div>
                        <label for="uca_psi_50" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">50 psi
                            (hh:mm)</label>
                        <input type="time" name="uca_psi_50" id="uca_psi_50" class="form-control text-sm p-2"
                            value="{{ $s_l[0]->rel_uca[0]->psi_50 ? $s_l[0]->rel_uca[0]->psi_50 : '00:00' }}"
                            readonly>
                    </div>
                    <div>
                        <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">500
                            psi
                            (hh:mm)</label>
                        <input type="time" class="form-control text-sm p-2"
                            value="{{ $s_l[0]->rel_uca[0]->psi_500 ? $s_l[0]->rel_uca[0]->psi_500 : '00:00' }}"
                            readonly>
                    </div>
                    <div>
                        <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">1000
                            psi
                            (hh:mm)</label>
                        <input type="time" class="form-control text-sm p-2"
                            value="{{ $s_l[0]->rel_uca[0]->psi_1000 ? $s_l[0]->rel_uca[0]->psi_1000 : '00:00' }}"
                            readonly>
                    </div>
                </div>

                <div>
                    <label for="uca_hs_12" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">12 hs
                        (psi)</label>
                    <input type="text" class="form-control text-sm p-2"
                        value="{{ $s_l[0]->rel_uca[0]->hs_12 ? $s_l[0]->rel_uca[0]->hs_12 : 'No aplica' }}"
                        readonly>
                </div>
                <div>
                    <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">24 hs
                        (psi)</label>
                    <input type="text" class="form-control text-sm p-2"
                        value="{{ $s_l[0]->rel_uca[0]->hs_24 ? $s_l[0]->rel_uca[0]->hs_24 : 'No aplica' }}"
                        readonly>
                </div>
                <div>
                    <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Impedancia
                        Acústica (M/rayls)</label>
                    <input type="text" class="form-control text-sm p-2"
                        value="{{ $s_l[0]->rel_uca[0]->impedancia_acustica ? $s_l[0]->rel_uca[0]->impedancia_acustica : 'No aplica' }}"
                        readonly>
                </div>
                <div>
                    <label for="uca_sgs_cero" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">SGS
                        cero
                        (hh:mm)</label>
                    <input type="time" name="uca_sgs_cero" id="uca_sgs_cero" class="form-control text-sm p-2"
                        value="{{ $s_l[0]->rel_uca[0]->sgs_cero ? $s_l[0]->rel_uca[0]->sgs_cero : '00:00' }}"
                        readonly>
                </div>
                <div>
                    <label for="uca_sgs_max" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">SGS
                        max
                        (hh:mm)</label>
                    <input type="time" name="uca_sgs_max" id="uca_sgs_max" class="form-control text-sm p-2"
                        value="{{ $s_l[0]->rel_uca[0]->sgs_max ? $s_l[0]->rel_uca[0]->sgs_max : '00:00' }}"
                        readonly>
                </div>
                <div>
                    <label for="uca_tiempo" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Tiempo
                        (hh:mm)</label>
                    <input type="time" name="uca_tiempo" id="uca_tiempo" class="form-control text-sm p-2"
                        value="{{ $s_l[0]->rel_uca[0]->tiempo ? $s_l[0]->rel_uca[0]->tiempo : '00:00' }}"
                        readonly>
                </div>
            </div>
        </div>
    @else
        <div id="registro_uca"></div>
    @endif

    @if (count($s_l[0]->rel_uca) == 0)
        <form id="form_uca" class="mt-3">
            <hr class="my-3">
            <div class="mb-2 mt-2 text-center">
                <h5 class="mb-1">Formulario de Registro | UCA - Resistencia a la Compresión</h5>
            </div>
            @csrf
            <input type="hidden" name="solicitud_lechada_id" value="{{ $s_l[0]->id }}">
            <div class="grid grid-cols-3 gap-3 my-3">
                <div class="col-span-3 grid gap-3 grid-cols-4">
                    <div>
                        <label for="uca_principal"
                            class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Principal
                            (ºC)</label>
                        <input type="number" name="uca_principal" id="uca_principal" class="form-control text-sm p-2"
                            placeholder="Ingrese la temperatura principal">
                    </div>
                    <div>
                        <label for="uca_psi_50" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">50
                            psi
                            (hh:mm)</label>
                        <input type="time" name="uca_psi_50" id="uca_psi_50" class="form-control text-sm p-2">
                    </div>
                    <div>
                        <label for="uca_psi_500" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">500
                            psi
                            (hh:mm)</label>
                        <input type="time" name="uca_psi_500" id="uca_psi_500" class="form-control text-sm p-2">
                    </div>
                    <div>
                        <label for="uca_psi_1000" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">1000
                            psi
                            (hh:mm)</label>
                        <input type="time" name="uca_psi_1000" id="uca_psi_1000" class="form-control text-sm p-2">
                    </div>
                </div>

                <div>
                    <label for="uca_hs_12" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">12 hs
                        (psi)</label>
                    <input type="number" name="uca_hs_12" id="uca_hs_12" class="form-control text-sm p-2"
                        step=".01" placeholder="Ingresar las horas (si corresponde)">
                </div>
                <div>
                    <label for="uca_hs_24" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">24 hs
                        (psi)</label>
                    <input type="number" name="uca_hs_24" id="uca_hs_24" class="form-control text-sm p-2"
                        step=".01" placeholder="Ingresar las horas (si corresponde)">
                </div>
                <div>
                    <label for="uca_impedancia_acustica"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Impedancia
                        Acústica (M/rayls)</label>
                    <input type="number" name="uca_impedancia_acustica" id="uca_impedancia_acustica"
                        class="form-control text-sm p-2"
                        placeholder="Ingrese la Impedancia Acústica (si corresponde)">
                </div>
                <div>
                    <label for="uca_sgs_cero" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">SGS
                        cero
                        (hh:mm)</label>
                    <input type="time" name="uca_sgs_cero" id="uca_sgs_cero" class="form-control text-sm p-2">
                </div>
                <div>
                    <label for="uca_sgs_max" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">SGS
                        max
                        (hh:mm)</label>
                    <input type="time" name="uca_sgs_max" id="uca_sgs_max" class="form-control text-sm p-2">
                </div>
                <div>
                    <label for="uca_tiempo" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Tiempo
                        (hh:mm)</label>
                    <input type="time" name="uca_tiempo" id="uca_tiempo" class="form-control text-sm p-2">
                </div>
            </div>

            <div class="mb-2 mt-2 text-center">
                <h5 class="mb-1">Adjuntos a cargar (Opcional)</h5>
            </div>
            <hr>

            <div class="flex justify-center mt-3">
                <x-button type="button" id="btn_submit_uca"
                    style="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-sm">Crear
                    Registro</x-button>
            </div>
        </form>
    @endif
</div>

<script>
    const btn_submit_uca = document.getElementById('btn_submit_uca');

    if (btn_submit_uca) {
        btn_submit_uca.addEventListener('click', e => {
            e.preventDefault();
            let form = new FormData(document.getElementById('form_uca'))

            confirmAlert().then((confirmed) => {
                if (confirmed) {
                    fetch("{{ route('store_uca') }}", {
                            method: 'POST',
                            body: form
                        }).then((response) => response.json())
                        .then((data) => {
                            if (data) {
                                componentUCA(data.success_uca)
                                document.getElementById('form_uca').style.display = 'none'
                                console.log(data);
                                successAlert('¡Registro Asignado!',
                                    'El registro se asignó correctamente.').then(
                                    (confirmed) => {
                                        // window.location.reload();
                                    })
                                let solicitud_id = {!! json_encode($solicitud->id) !!}
                                checkGenerateReport(solicitud_id)
                                .then((data) => {
                                    if (data.generate_report) {
                                        document.querySelector('#tab_g_report_js').classList.remove('d-none')
                                    }
                                })
                            }
                        })
                }
            })
        })
    }
</script>
