<div class="mt-4 tab-pane fade show active" id="tab-comportamiento_inhibidor" role="tabpanel"> <!-- comportamiento_inhibidor del Lodo (7) -->
    <!-- @ if (count(algo[0]->rel_comportamiento_inhibidor)>0)-->
        <div class="accordion" id="accordionCaracterizacion">

        </div>
    <!-- @ Else -->
        <div class="accordion" id="accordionCaracterizacion"></div>
    <!-- @ endif -->

     <!-- @ if (count(algo[0]->rel_comportamiento_inhibidor)==0)-->
     <form id='form_comportamiento_inhibidor' method="POST">
        @csrf

     </form>
<!-- @ endif -->

</div><!-- comportamiento_inhibidor del Lodo (1) -->

<script>
    //Aca iria el boton de submit el form
</script>