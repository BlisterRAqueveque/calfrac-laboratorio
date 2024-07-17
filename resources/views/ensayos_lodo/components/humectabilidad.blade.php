<div class="mt-4 tab-pane fade show active" id="tab-humectabilidad" role="tabpanel"> <!-- humectabilidad (5) -->
    <!-- @ if (count(algo[0]->rel_humectabilidad)>0)-->
        <div class="accordion" id="accordionCaracterizacion">

        </div>
    <!-- @ Else -->
        <div class="accordion" id="accordionCaracterizacion"></div>
    <!-- @ endif -->

     <!-- @ if (count(algo[0]->rel_humectabilidad)==0)-->
     <form id='form_humectabilidad' method="POST">
        @csrf

     </form>
<!-- @ endif -->

</div><!-- humectabilidad del Lodo (1) -->

<script>
    //Aca iria el boton de submit el form
</script>