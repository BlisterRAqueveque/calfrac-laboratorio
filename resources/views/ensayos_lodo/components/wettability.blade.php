<div class="mt-4 tab-pane fade show active" id="tab-wettability" role="tabpanel"> <!-- wettability (6) -->
    <!-- @ if (count(algo[0]->rel_wettability)>0)-->
        <div class="accordion" id="accordionCaracterizacion">

        </div>
    <!-- @ Else -->
        <div class="accordion" id="accordionCaracterizacion"></div>
    <!-- @ endif -->

     <!-- @ if (count(algo[0]->rel_wettability)==0)-->
     <form id='form_wettability' method="POST">
        @csrf

     </form>
<!-- @ endif -->

</div><!-- wettability del Lodo (1) -->

<script>
    //Aca iria el boton de submit el form
</script>