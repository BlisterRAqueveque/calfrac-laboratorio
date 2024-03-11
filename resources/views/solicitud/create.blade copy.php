@extends('layouts.app')

@section('titulo')
Laboratorio - Crear Solicitud
@endsection

@section('contenido')
    <section class="container_mod">

        <h1 class="text-3xl text-center tracking-wide title">Crear Nueva Solicitud</h1>
        {{-- <h5 class="text-center">Seleccione que tipo de solicitud va a realizar</h5> --}}

        <div class="flex flex-col gap-4 md:flex-row justify-between w-1/2 mx-auto my-10">
            <button class="p-3 border rounded-xl shadow-sm cursor-pointer btnTypeSolicitud" data-id='fractura'>Solicitud de
                Ensayo Fractura</button>
            <button class="p-3 border rounded-xl shadow-sm cursor-pointer btnTypeSolicitud" data-id='lechada'>Solicitud de
                Ensayo Lechada</button>
            <button class="p-3 border rounded-xl shadow-sm cursor-pointer btnTypeSolicitud" data-id='lodo'>Solicitud de Ensayo
                Lodo</button>
        </div>

        <section class="solicitud_contenedor" style="display: block">@include('solicitud.components.fractura.create')</section>
        <section class="solicitud_contenedor" style="display: none">@include('solicitud.components.lechada.create')</section>
        <section class="solicitud_contenedor" style="display: none">@include('solicitud.components.lodo.create')</section>

    </section>
    <script>
        // Este script, cambia entre las diferentes solicitudes mostrando el formulario de carga de cada una
        const btnTypeSolicitud = document.querySelectorAll('.btnTypeSolicitud');
        const solicitudesContenedor = document.querySelectorAll('.solicitud_contenedor');

        for (let i = 0; i < btnTypeSolicitud.length; i++) {
            btnTypeSolicitud[i].addEventListener('click', e => {
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
