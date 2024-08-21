@extends('layouts.app')

@section('titulo')
    Laboratorio - Dashboard
@endsection

@section('contenido')

<style>
    .bg_ventana_chiquita {
        background: #212529;
    }
</style>
    <section class="container_mod pt-4 ">
        <h6 class="font-bold dark:text-white flex items-center gap-1">
            ¡Buenos días!
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
              </svg>
              
        </h6>

        <div class="grid grid-cols-4 gap-3">

            <div class="grid col-span-4 md:grid-cols-2 md:col-span-2 gap-3">
                <article class="md:col-span-2 border dark:tab_bg shadow-sm dark:border-none">
                    <div class="bg-orange-50 dark:card-bg-head p-2 flex gap-2 text-orange-400 dark:text-orange-200 dark:border-b dark:border-gray-900 text-sm tracking-wide font-light">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                        </svg>
                        Testing (Encabezado Gráfico)
                    </div>

                    <div class="p-2 dark:text-gray-400">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum, recusandae!
                    </div>

                    <div class="p-2">
                        <button class="bg-emerald-500 px-3 py-1 rounded hover:bg-emerald-600 text-white dark:bg-emerald-800 dark:bg-opacity-60 dark:text-emerald-400 dark:hover:text-emerald-50 transition-all duration-100">Botón
                            Gráfico</button>
                    </div> 
                </article>

                <article class="dark:tab_bg border dark:border-none shadow-sm rounded-md p-3 w-full">
                    <div class="flex justify-between">
                        <div class="flex flex-col">
                            <p class="font-medium text-gray-700 dark:text-gray-400">Solicitados</p>
                            <span class="fw-bold dark:text-white">413</span>
                            <small class="dark:text-gray-400"><span class="fw-bold dark:text-white" [style.color]="color">14 nuevos</span> | hace 2hs</small>
                        </div>
                        <span class="bg-green-200 dark:bg-green-500 dark:bg-opacity-50 w-10 h-10 rounded-full">
                            <svg class="ms-1 mt-1 w-8 text-green-600 dark:text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 0 1-1.125-1.125v-3.75ZM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-8.25ZM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-2.25Z" />
                            </svg>
                        </span>
                    </div>
                </article>
                <article class="dark:tab_bg border dark:border-none shadow-sm rounded-md p-3 w-full">
                    <div class="flex justify-between">
                        <div class="flex flex-col">
                            <p class="font-medium text-gray-700 dark:text-gray-400">En Curso</p>
                            <span class="fw-bold dark:text-white">10</span>
                            <small class="dark:text-gray-400"><span class="fw-bold dark:text-white" [style.color]="color">2 nuevos</span> | hace 2hs</small>
                        </div>
                        <span class="bg-orange-200 dark:bg-orange-500 dark:bg-opacity-50 w-10 h-10 rounded-full">
                            <svg class="ms-1 mt-1 w-8 text-orange-600 dark:text-orange-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                            </svg>

                        </span>
                    </div>
                </article>
                <article class="dark:tab_bg border dark:border-none shadow-sm rounded-md p-3 w-full">
                    <div class="flex justify-between">
                        <div class="flex flex-col">
                            <p class="font-medium text-gray-700 dark:text-gray-400">Pendientes de Aprobación</p>
                            <span class="fw-bold dark:text-white">10</span>
                            <small class="dark:text-gray-400"><span class="fw-bold dark:text-white" [style.color]="color">2 nuevos</span> | hace 2hs</small>
                        </div>
                        <span class="bg-blue-200 dark:bg-blue-600 dark:bg-opacity-50 w-10 h-10 rounded-full">
                            <svg class="ms-1 mt-1 w-8 text-blue-500 dark:text-sky-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>

                        </span>
                    </div>
                </article>
                <article class="dark:tab_bg border dark:border-none shadow-sm rounded-md p-3 w-full">
                    <div class="flex justify-between">
                        <div class="flex flex-col">
                            <p class="font-medium text-gray-700 dark:text-gray-400">Rechazados</p>
                            <span class="fw-bold dark:text-white">10</span>
                            <small class="dark:text-gray-400"><span class="fw-bold dark:text-white" [style.color]="color">2 nuevos</span> | hace 2hs</small>
                        </div>
                        <span class="bg-red-200 dark:bg-red-600 dark:bg-opacity-50 w-10 h-10 rounded-full">
                            <svg class="ms-1 mt-1 w-8 text-red-700 dark:text-red-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </span>
                    </div>
                </article>
            </div>

            <div class="col-span-4 md:col-span-2">
                <div class="dark:card-bg-head border dark:border-none rounded shadow-sm">
                    <p class="border-b p-3 dark:text-gray-400 dark:border-b-gray-900">Solicitudes de esta semana</p>
                    <div class="dark:tab_bg dark:text-gray-400 p-3 shadow-md  rounded-md" id="first_graphic"></div>
                </div>
            </div>

            <div class="col-span-4 md:col-span-2 dark:tab_bg rounded shadow-sm">
                <p class="p-3 dark:text-gray-300 border dark:border-none border-b dark:border-b-gray-900">Ensayos <small class="text-gray-400">/ Este mes</small></p>
                <div class="dark:tab_bg dark:text-gray-400 p-3 rounded-md" id="second_graphic"></div>
                <table class="w-full dark:text-gray-400">
                    <thead class="dark:card-bg-head dark:text-gray-300">
                        <tr class="border-y dark:border-y-gray-700">
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
         
            <div class="col-span-4 md:col-span-2">
                <div class="dark:tab_bg shadow-md rounded-md overflow-x-auto">
                    <table class="w-100 rounded-md">
                        <thead class="bg-gray-200 dark:card-bg-head dark:text-gray-300 p-3 rounded-md text-center">
                            <th class="p-3" style="border-radius: 5px 0 0 0">Código</th>
                            <th class="p-3">Fecha de Requerimiento</th>
                            <th class="p-3">Tipo de Trabajo</th>
                            <th class="p-3">Cliente</th>
                            <th class="p-3">Pozo</th>
                            <th class="p-3" style="border-radius: 0 5px 0 0">Solicitante</th>
                        </thead>
        
                        <tbody class="text-center dark:text-gray-400">
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
            </div>
        </div>
        <br>

    </section>
    <script src="{{ asset('js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('js/Dashboard/graphics.js') }}"></script>
@endsection
