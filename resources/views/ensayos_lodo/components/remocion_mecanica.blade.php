<div class="mt-4 tab-pane fade show active" id="tab-remocion_mecanica" role="tabpanel"> <!-- remocion_mecanica (3) -->
    <!-- @ if (count(algo[0]->rel_remocion_mecanica)>0)-->
        <div class="accordion" id="accordionCaracterizacion">

        </div>
    <!-- @ Else -->
        <div class="accordion" id="accordionCaracterizacion"></div>
    <!-- @ endif -->

     <!-- @ if (count(algo[0]->rel_remocion_mecanica)==0)-->
     <form id='form_remocion_mecanica' method="POST">
        @csrf

     </form>
<!-- @ endif -->

</div><!-- remocion_mecanica del Lodo (1) -->

<script>
    //Aca iria el boton de submit el form
</script>