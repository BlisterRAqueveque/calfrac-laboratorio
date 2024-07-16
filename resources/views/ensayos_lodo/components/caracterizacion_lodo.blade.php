<div class="mt-4 tab-pane fade show active" id="tab-caracterizacion" role="tabpanel"> <!-- caracterizacion del Lodo (1) -->
    <!-- @ if (count(algo[0]->rel_caracterizacion)>0)-->
        <div class="accordion" id="accordionCaracterizacion">

        </div>
    <!-- @ Else -->
        <div class="accordion" id="accordionCaracterizacion"></div>
    <!-- @ endif -->

     <!-- @ if (count(algo[0]->rel_caracterizacion)==0)-->
     <form id='form_caracterizacion' method="POST">
        @csrf

     </form>
<!-- @ endif -->

</div><!-- caracterizacion del Lodo (1) -->

<script>
    //Aca iria el boton de submit el form
</script>