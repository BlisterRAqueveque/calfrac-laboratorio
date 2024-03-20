<div class="container_mod bg-white p-3 mt-4 shadow-sm tab-pane fade" id="tab2-content" role="tabpanel"
    aria-labelledby="nav-tab2">
    <p class="m-0 mt-1 font-bold text-lg tracking-wide">Formulario para crear un Ensayo</p>

    @include('ensayo.components.create.form')
    
</div>  

<!-- Agrega aditivos -->
<script>
    let aditivos = {!! json_encode($aditivos) !!}
</script>
<script src="{{ asset('js/ensayo/add_aditivo.js') }}"></script>
<script src="{{ asset('js/ensayo/test_requerido.js') }}"></script>