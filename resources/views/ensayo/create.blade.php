{{-- <div class="container_mod border dark:border-none bg-white dark:tab_bg p-3 mt-4 shadow-sm tab-pane fade @if (session('success')) show active @endif" id="tab2-content" role="tabpanel"
    aria-labelledby="nav-tab2">
    <p class="m-0 mt-1 font-bold text-lg tracking-wide dark:text-gray-300">Formulario para crear un Ensayo</p>

    @include('ensayo.components.create.form')
</div>   --}}

<!-- Agrega aditivos -->
{{-- <script>
    let aditivos = {!! json_encode($aditivos) !!}
</script> --}}


 @if($solicitud->tipo == 2)
    <div class="container_mod border dark:border-none bg-white dark:tab_bg p-3 mt-4 shadow-sm tab-pane fade @if (session('success')) show active @endif" id="tab2-content" role="tabpanel"
    aria-labelledby="nav-tab2">
    <p class="m-0 mt-1 font-bold text-lg tracking-wide dark:text-gray-300">Formulario para crear un Ensayo</p>
        @include('ensayo.components.create.form')
    </div>
    <script>
        let aditivos = {!! json_encode($aditivos) !!}
    </script>
@elseif($solicitud->tipo == 3)
    <div class="container_mod border dark:border-none bg-white dark:tab_bg p-3 mt-4 shadow-sm tab-pane fade @if (session('success')) show active @endif" id="tab-content-lodo" role="tabpanel"
    aria-labelledby="nav-tab-content-lodo">
    <p class="m-0 mt-1 font-bold text-lg tracking-wide dark:text-gray-300">Formulario para crear un Ensayo</p>
        @include('ensayo.components.createlodo.form')
    </div>
        
@else
        <p>No hay un formulario disponible para este tipo de solicitud.</p>
@endif
