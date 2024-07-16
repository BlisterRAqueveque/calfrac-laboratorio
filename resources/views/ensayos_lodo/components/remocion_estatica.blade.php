<div class="mt-4 tab-pane fade show active" id="tab-remocion_estatica" role="tabpanel"> <!-- remocion_estatica  (4) -->
    <!-- @ if (count(algo[0]->rel_remocion_estatica)>0)-->
        <div class="accordion" id="accordionCaracterizacion">

        </div>
    <!-- @ Else -->
        <div class="accordion" id="accordionCaracterizacion"></div>
    <!-- @ endif -->

     <!-- @ if (count(algo[0]->rel_remocion_estatica)==0)-->
     <form id='form_remocion_estatica' method="POST">
        @csrf

     </form>
<!-- @ endif -->

</div><!-- remocion_estatica del Lodo (1) -->

<script>
    //Aca iria el boton de submit el form
</script>