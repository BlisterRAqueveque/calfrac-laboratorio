@extends('layouts.app')

@section('titulo')
Laboratorio - Crear Solicitud
@endsection

@section('contenido')

    <section class="container_mod pt-3">

        <h1 class="text-3xl text-center tracking-wide title mt-4 dark:text-gray-300">Crear Nueva Solicitud</h1>

        <div class="flex flex-col md:flex-row justify-center items-center gap-10 my-5">
            {{-- Botones habilitados --}}
            <input type="radio" class="select-solicitud_inps" name="select-solicitudes" id="solicitud-fractura" value="1" checked hidden>
            <label for="solicitud-fractura" class="solicitud-label shadow-md dark:shadow-gray-700 p-3 rounded-md border dark:border-gray-600 dark:tab_bg dark:text-gray-400 w-full cursor-pointer text-center max-w-60">Solicitud Fractura</label>
            <input type="radio" class="select-solicitud_inps" name="select-solicitudes" id="solicitud-lechada" value="2" hidden>
            <label for="solicitud-lechada" class="solicitud-label dark:shadow-gray-700 p-3 rounded-md border dark:border-gray-600 dark:tab_bg dark:text-gray-400 w-full cursor-pointer text-center max-w-60">Solicitud Lechada</label> 
            <input type="radio" class="select-solicitud_inps" name="select-solicitudes" id="solicitud-lodo" value="3" hidden>
            <label for="solicitud-lodo" class="solicitud-label dark:shadow-gray-700 p-3 rounded-md border dark:border-gray-600 dark:tab_bg dark:text-gray-400 w-full cursor-pointer text-center max-w-60">Solicitud Lodo</label>
            {{-- Botones deshabilitados 
            <input type="radio" class="select-solicitud_inps" name="select-solicitudes" id="solicitud-fractura" value="1" hidden>
            <label for="solicitud-fractura" class="solicitud-label dark:shadow-gray-700 p-3 rounded-md border dark:border-gray-600 dark:tab_bg dark:text-gray-400 w-full cursor-pointer text-center max-w-60">Solicitud Fractura</label>
            <input type="radio" class="select-solicitud_inps" name="select-solicitudes" id="solicitud-lechada" value="2" checked hidden>
            <label for="solicitud-lechada" class="solicitud-label shadow-md dark:shadow-gray-700 p-3 rounded-md border dark:border-gray-600 dark:tab_bg dark:text-gray-400 w-full cursor-pointer text-center max-w-60">Solicitud Lechada</label> 
            <input type="radio" class="select-solicitud_inps" name="select-solicitudes" id="solicitud-lodo" value="3" hidden>
            <label for="solicitud-lodo" class="solicitud-label dark:shadow-gray-700 p-3 rounded-md border dark:border-gray-600 dark:tab_bg dark:text-gray-400 w-full cursor-pointer text-center max-w-60">Solicitud Lodo</label>--}}
        </div>
      
        <section class="solicitud_contenedor" style="display: block">@include('solicitud.components.fractura.create')</section>
        <section class="solicitud_contenedor" style="display: none">@include('solicitud.components.lechada.create')</section>
        <section class="solicitud_contenedor" style="display: none">@include('solicitud.components.lodo.create')</section>

    </section>

    {{-- <script>
        // Configuracion para deshabilitar fractura y lodo
        // Este script cambia entre las diferentes solicitudes mostrando el formulario de carga solo para "Lechada"
        const btnTypeSolicitud = document.querySelectorAll('.select-solicitud_inps');
        const solicitudesContenedor = document.querySelectorAll('.solicitud_contenedor');
        const solicitud_label = document.querySelectorAll('.solicitud-label');
        
        for (let i = 0; i < btnTypeSolicitud.length; i++) {
            btnTypeSolicitud[i].addEventListener('click', e => {
                // Quitar el sombreado de todos los botones
                for (let j = 0; j < solicitud_label.length; j++) {
                    solicitud_label[j].classList.remove('shadow-md');
                }
                //solicitud_label[i].classList.add('shadow-md');
    
                // Mostrar solo el formulario de Lechada (value = 2)
                if (btnTypeSolicitud[i].value == '2') {
                    for (let j = 0; j < solicitudesContenedor.length; j++) {
                        solicitudesContenedor[j].style.display = 'none';
                    }
                    solicitudesContenedor[i].style.display = 'block'; // Mostrar solo el de Lechada
                }
            });
        }
    </script> --}}

    {{-- Botones habilitados --}}
    <script>
        // Este script, cambia entre las diferentes solicitudes mostrando el formulario de carga de cada una
        const btnTypeSolicitud = document.querySelectorAll('.select-solicitud_inps');
        const solicitudesContenedor = document.querySelectorAll('.solicitud_contenedor');
        const solicitud_label = document.querySelectorAll('.solicitud-label');
        
        for (let i = 0; i < btnTypeSolicitud.length; i++) {
            btnTypeSolicitud[i].addEventListener('click', e => {
                for (let j = 0; j < solicitud_label.length; j++) {
                    //console.log(solicitud_label[j].classList.remove('shadow-md'));
                }
                solicitud_label[i].classList.add('shadow-md')
                for (let j = 0; j < solicitudesContenedor.length; j++) {
                    solicitudesContenedor[j].style.display = 'none';                    
                }
                for (let j = 0; j < solicitudesContenedor.length; j++) {
                    if (i == j) {
                        solicitudesContenedor[j].style.display = 'block';                    
                    }
                }
            })

        }
    </script> 
@endsection