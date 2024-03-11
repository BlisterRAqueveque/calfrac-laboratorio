@extends('layouts.app')

@section('titulo')
Laboratorio - Crear Solicitud
@endsection

@section('contenido')
    <section class="container_mod pt-3">

        <h1 class="text-3xl text-center tracking-wide title mt-4">Crear Nueva Solicitud</h1>
        {{-- <h5 class="text-center">Seleccione que tipo de solicitud va a realizar</h5> --}}

        <style>
            .solicitud-label {
                background: white;
                border: 1px solid #f1f1f1;
                border-radius: 5px;
                box-shadow: 0px 0px 5px 0px rgb(217, 217, 217);
                cursor: pointer;
                padding: 10px 40px;
            }

            .select-solicitud_inps:checked + .solicitud-label {
                box-shadow: inset 0px 0px 5px 0px rgba(217,217,217,1);
                border: 1px solid #d6d6d6;
            }
        </style>

        <div class="flex flex-col md:flex-row justify-center items-center gap-10 my-5">
            <input type="radio" class="select-solicitud_inps" name="select-solicitudes" id="solicitud-fractura" value="1" checked hidden>
            <label for="solicitud-fractura" class="solicitud-label w-full text-center max-w-60">Solicitud Fractura</label>
            <input type="radio" class="select-solicitud_inps" name="select-solicitudes" id="solicitud-lechada" value="2" hidden>
            <label for="solicitud-lechada" class="solicitud-label w-full text-center max-w-60">Solicitud Lechada</label>
            <input type="radio" class="select-solicitud_inps" name="select-solicitudes" id="solicitud-lodo" value="3" hidden>
            <label for="solicitud-lodo" class="solicitud-label w-full text-center max-w-60">Solicitud Lodo</label>
        </div>

        {{-- <div class="flex flex-col gap-4 md:flex-row justify-between w-1/2 mx-auto my-10">
            <button class="p-2 border rounded-xl shadow-sm bg-white cursor-pointer hover:bg-sky-100 btnTypeSolicitud" data-id='fractura'>Solicitud de
                Ensayo Fractura</button>
            <button class="p-2 border rounded-xl shadow-sm bg-white cursor-pointer hover:bg-sky-100 btnTypeSolicitud" data-id='lechada'>Solicitud de
                Ensayo Lechada</button>
            <button class="p-2 border rounded-xl shadow-sm bg-white cursor-pointer hover:bg-sky-100 btnTypeSolicitud" data-id='lodo'>Solicitud de Ensayo
                Lodo</button>
        </div> --}}

        <section class="solicitud_contenedor" style="display: block">@include('solicitud.components.fractura.create')</section>
        <section class="solicitud_contenedor" style="display: none">@include('solicitud.components.lechada.create')</section>
        <section class="solicitud_contenedor" style="display: none">@include('solicitud.components.lodo.create')</section>

    </section>
    <script>
        // Este script, cambia entre las diferentes solicitudes mostrando el formulario de carga de cada una
        const btnTypeSolicitud = document.querySelectorAll('.select-solicitud_inps');
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
