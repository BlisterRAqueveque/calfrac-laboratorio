<div class="mt-4 tab-pane fade show active" id="tab-compatibilidad_espaciador" role="tabpanel"> <!-- compatibilidad_espaciador  (2) -->
    <!-- @ if (count(algo[0]->rel_compatibilidad_espaciador)>0)-->
        <div class="accordion" id="accordionCaracterizacion">

        </div>
    <!-- @ Else -->
        <div class="accordion" id="accordionCaracterizacion"></div>
    <!-- @ endif -->

     <!-- @ if (count(algo[0]->rel_compatibilidad_espaciador)==0)-->
     <form id='form_compatibilidad_espaciador' method="POST">
        @csrf

     </form>
<!-- @ endif -->

</div><!-- compatibilidad_espaciador del Lodo (1) -->

<script>
    //Aca iria el boton de submit el form
</script>