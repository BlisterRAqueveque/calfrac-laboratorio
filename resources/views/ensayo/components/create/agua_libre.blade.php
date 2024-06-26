<div class="mt-4 tab-pane fade" id="tab_agua_libre" role="tabpanel"> <!-- Agua Libre -->
    @if (count($s_l[0]->rel_agua_libre) > 0)
        <div class="grid grid-cols-3 gap-3 my-3" id="registro_agua_libre">
            <div>
                <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Agua Libre
                    °C</label>
                <input type="number" value="{{ $s_l[0]->rel_agua_libre[0]->agua_libre }}"
                    class="form-control text-sm p-2" placeholder="Temperatura °C" readonly>
            </div>
            <div>
                <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Volumen
                    mL</label>
                <input type="number" class="form-control text-sm p-2"
                    value="{{ $s_l[0]->rel_agua_libre[0]->volumen ? $s_l[0]->rel_agua_libre[0]->volumen : '0' }}"
                    readonly>
            </div>
            <div>
                <label class="text-sm text-gray-700 font-semibold tracking-wide mb-2">API Agua Libre %</label>
                <input type="number" class="form-control text-sm p-2"
                    value="{{ $s_l[0]->rel_agua_libre[0]->api_agua_libre ? $s_l[0]->rel_agua_libre[0]->api_agua_libre : '0' }}"
                    readonly>
            </div>
        </div>
    @else
        <div class="grid grid-cols-3 gap-3 my-3" id="registro_agua_libre"></div>
    @endif

    <hr class="my-3">

    @if (count($s_l[0]->rel_agua_libre) == 0)
        <form id="form_agua_libre" class="mt-3">
            {{-- <form action="{{ route('store_agua_libre') }}" class="mt-3" method="POST"> --}}
            @csrf
            <input type="hidden" name="solicitud_lechada_id" value="{{ $s_l[0]->id }}">

            <div class="grid grid-cols-3 gap-3 mb-3">
                <div>
                    <label for="agua_libre" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Agua Libre
                        °C</label>
                    <input type="number" name="agua_libre" id="agua_libre" class="form-control text-sm p-2"
                        placeholder="Agua Libre °C" step=".01">
                </div>
                <div>
                    <label for="agua_libre_volumen"
                        class="text-sm text-gray-700 font-semibold tracking-wide mb-2">Volumen
                        mL</label>
                    <input type="number" name="agua_libre_volumen" id="agua_libre_volumen"
                        class="form-control text-sm p-2" placeholder="Ingrese el Volumen" step=".01">
                </div>
                <div>
                    <label for="api_agua_libre" class="text-sm text-gray-700 font-semibold tracking-wide mb-2">API Agua
                        Libre %</label>
                    <input type="number" name="api_agua_libre" id="api_agua_libre" class="form-control text-sm p-2"
                        placeholder="Filtrado API" step=".01">
                </div>
            </div>
            <div class="flex justify-center">
                <x-button type="button"
                    id="btn_submit_agua_libre"
                    style="w-full md:w-auto bg-green-700 bg-opacity-60 text-white p-2 rounded-sm hover:shadow-lg transition-all duration-75 font-bold text-sm">Crear
                    Registro</x-button>
            </div>
        </form>
    @endif
</div>

<script>
    const btn_submit_agua_libre = document.getElementById('btn_submit_agua_libre');

    if (btn_submit_agua_libre) {
        btn_submit_agua_libre.addEventListener('click', e => {
            e.preventDefault();
            let form = new FormData(document.getElementById('form_agua_libre'))

            confirmAlert().then((confirmed) => {
                if (confirmed) {
                    fetch("{{ route('store_agua_libre') }}", {
                            method: 'POST',
                            body: form
                        }).then((response) => response.json())
                        .then((data) => {
                            if (data) {
                                componentAguaLibre(data.success_agua_libre)
                                let generate_report = checkGenerateReport();
                                document.getElementById('form_agua_libre').style.display = 'none'
                                successAlert('¡Registro Asignado!','El registro se asignó correctamente.')
                                
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