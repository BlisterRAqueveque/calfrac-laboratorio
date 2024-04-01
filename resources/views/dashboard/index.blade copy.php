@extends('layouts.app')

@section('titulo')
    Laboratorio - Dashboard
@endsection

@section('contenido')
    <section class="container_mod pt-4">
        <h6 class="font-bold uppercase">¡Buenas Noches Mirko!</h6>

        <div class="flex gap-3">

            <div class="flex flex-col w-1/3 gap-3">
                <article class="bg-white shadow-sm">
                    <div class="bg-orange-50 p-2 flex gap-2 text-orange-400 text-sm tracking-wide font-light">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                        </svg>
                        Testing (Encabezado Gráfico)
                    </div>

                    <div class="p-2">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum, recusandae!
                    </div>

                    <div class="p-2">
                        <button class="bg-emerald-500 px-3 py-1 text-white rounded hover:bg-emerald-600">Botón
                            Gráfico</button>
                    </div>
                </article>
                <div class="flex gap-2">
                    <article class="bg-white shadow-sm border rounded-md p-3 w-full">
                        <div class="flex justify-between">
                            <div class="flex flex-col">
                                <p class="font-medium text-gray-700">Solicitados</p>
                                <span class="fw-bold">413</span>
                                <small><span class="fw-bold" [style.color]="color">14 nuevos</span> | hace 2hs</small>
                            </div>
                            <span class="bg-green-200 w-10 h-10 rounded-full">
                                <svg class="ms-1 mt-1 w-8 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 0 1-1.125-1.125v-3.75ZM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-8.25ZM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-2.25Z" />
                                </svg>
                            </span>
                        </div>
                    </article>
                    <article class="bg-white shadow-sm border rounded-md p-3 w-full">
                        <div class="flex justify-between">
                            <div class="flex flex-col">
                                <p class="font-medium text-gray-700">En Curso</p>
                                <span class="fw-bold">10</span>
                                <small><span class="fw-bold" [style.color]="color">2 nuevos</span> | hace 2hs</small>
                            </div>
                            <span class="bg-orange-200 w-10 h-10 rounded-full">
                                <svg class="ms-1 mt-1 w-8 text-orange-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                                </svg>

                            </span>
                        </div>
                    </article>
                </div>

                <div class="flex gap-2">
                    <article class="bg-white shadow-sm border rounded-md p-3 w-full">
                        <div class="flex justify-between">
                            <div class="flex flex-col">
                                <p class="font-medium text-gray-700">Pendientes de Aprobación</p>
                                <span class="fw-bold">10</span>
                                <small><span class="fw-bold" [style.color]="color">2 nuevos</span> | hace 2hs</small>
                            </div>
                            <span class="bg-blue-200 w-10 h-10 rounded-full">
                                <svg class="ms-1 mt-1 w-8 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>

                            </span>
                        </div>
                    </article>
                    <article class="bg-white shadow-sm border rounded-md p-3 w-full">
                        <div class="flex justify-between">
                            <div class="flex flex-col">
                                <p class="font-medium text-gray-700">Rechazados</p>
                                <span class="fw-bold">10</span>
                                <small><span class="fw-bold" [style.color]="color">2 nuevos</span> | hace 2hs</small>
                            </div>
                            <span class="bg-red-200 w-10 h-10 rounded-full">
                                <svg class="ms-1 mt-1 w-8 text-red-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </span>
                        </div>
                    </article>
                </div>
            </div>

            <div class="w-1/3 bg-white rounded shadow-sm">
                <p class="border-b p-3">Solicitudes de esta semana</p>
                <div class="bg-white p-3 shadow-md  rounded-md" id="first_graphic"></div>
            </div>

            <div class="w-1/3 bg-white rounded shadow-sm">
                <p class="border-b p-3">Ensayos <small class="text-gray-300">/ Este mes</small></p>
                <div class="bg-white p-3 rounded-md" id="second_graphic"></div>
                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-50 border-y">
                            <th class="p-1">Ensayo</th>
                            <th class="p-1">Cantidad</th>
                            <th class="p-1">...</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="p-1">
                                Fractura
                            </td>
                            <td class="p-1">
                                123
                            </td>
                            <td class="p-1">
                                test
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1">
                                Lechada
                            </td>
                            <td class="p-1">
                                123
                            </td>
                            <td class="p-1">
                                test
                            </td>
                        </tr>
                        <tr>
                            <td class="p-1">
                                Lodo
                            </td>
                            <td class="p-1">
                                123
                            </td>
                            <td class="p-1">
                                test
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </section>

    <section class="container_mod mt-3">
        <div class="bg-white shadow-md rounded-md">
            <table class="w-100 rounded-md">
                <thead class="bg-gray-200 p-3 rounded-md text-center">
                    <th class="p-3" style="border-radius: 5px 0 0 0">Código</th>
                    <th class="p-3">Fecha de Requerimiento</th>
                    <th class="p-3">Tipo de Trabajo</th>
                    <th class="p-3">Cliente</th>
                    <th class="p-3">Pozo</th>
                    <th class="p-3" style="border-radius: 0 5px 0 0">Solicitante</th>
                </thead>

                <tbody class="text-center">
                    <tr>
                        <td class="p-3">CG-231-FS</td>
                        <td class="p-3">26/02/2024</td>
                        <td class="p-3">Testing</td>
                        <td class="p-3">Cliente prueba</td>
                        <td class="p-3">Pozo</td>
                        <td class="p-3">Mirko Dinamarca</td>
                    </tr>

                    <tr>
                        <td class="p-3">CG-231-FS</td>
                        <td class="p-3">26/02/2024</td>
                        <td class="p-3">Testing</td>
                        <td class="p-3">Cliente prueba</td>
                        <td class="p-3">Pozo</td>
                        <td class="p-3">Mirko Dinamarca</td>
                    </tr>

                    <tr>
                        <td class="p-3">CG-231-FS</td>
                        <td class="p-3">26/02/2024</td>
                        <td class="p-3">Testing</td>
                        <td class="p-3">Cliente prueba</td>
                        <td class="p-3">Pozo</td>
                        <td class="p-3">Mirko Dinamarca</td>
                    </tr>

                    <tr>
                        <td class="p-3">CG-231-FS</td>
                        <td class="p-3">26/02/2024</td>
                        <td class="p-3">Testing</td>
                        <td class="p-3">Cliente prueba</td>
                        <td class="p-3">Pozo</td>
                        <td class="p-3">Mirko Dinamarca</td>
                    </tr>
                </tbody>
            </table>


        </div>
    </section>

    <!-- Gráficos -->
    {{-- <section class="flex gap-5 container_mod">
        <section class="mt-4 w-full">
        </section>
        <section class="mt-4 w-full">
            <div class="bg-white p-3 shadow-md border rounded-md" id="second_graphic"></div>
        </section>
    </section> --}}

    <script src="{{ asset('js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('js/Dashboard/graphics.js') }}"></script>
@endsection
