<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset('css/apexcharts.css') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/css/bootstrap.min.css')
    <script src="{{ asset('css/sweetalert2.css') }}"></script>
</head>

{{-- <body class="bg-gradient-to-br from-green-50 to-gray-100"> --}}
<style>
    .contenido-con-margen {
        margin-top: 250px;
        /* Ajusta este valor según el tamaño de tu barra de navegación */
    }
</style>

<body class="bg-test">
    <!-- Barra de Navegación -->
    <nav class="bg-white navegacion fixed top-0 w-full" style="z-index: 1;">
        <div class="container_mod flex justify-between items-center py-2">

            <div class="flex items-center">
                <img src="{{ asset('/img/logo.ico') }}" class="mr-20" alt="Imagen Logo"
                    style="border-radius: 5px; box-shadow: 1px -1px 0px 0px rgba(148,148,148,0.75);">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
                <input type="text" class="ms-2 bg-gray-100 p-1 ps-3" placeholder="Buscar...">
            </div>

            <ul class="flex p-0 m-0 gap-2 items-center">
                <li class="p-2 rounded-full text-gray-500 hover:bg-blue-50 transition-all duration-250 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15" />
                    </svg>
                </li>

                <li class="p-2 rounded-full text-gray-500 hover:bg-blue-50 transition-all duration-250 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                    </svg>
                </li>

                <li class="p-2 rounded-full text-gray-500 hover:bg-blue-50 transition-all duration-250 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                    </svg>
                </li>

                <li class="relative p-2 flex gap-3 cursor-pointer rounded-md" id="miPerfilNav">
                    <div class="flex justify-center items-center w-10 h-10 mx-auto">
                        <img src="{{ asset('uploads/perfiles') . '/' . auth()->user()->img }}"
                            class="rounded-full object-cover w-10 h-10" alt="">
                    </div>
                    <div class="flex flex-col">
                        <span class="text-sm font-semibold tracking-wide">{{ auth()->user()->nombre }}
                            {{ auth()->user()->apellido }}</span>
                        <small class="text-sm text-gray-400">{{ auth()->user()->grupo->nombre }}</small>
                    </div>

                    <div class="absolute z-50 text-sm mt-1 rounded bg-white shadow-md w-56 hidden" id="miPerfilConfig"
                        style="box-shadow: 0px 0px 2px 0px rgba(171,171,171,1); top: 55px; left: 0; right: 0;">
                        <ul class="ps-0 p-2 pe-0">
                            <small class="font-semibold text-sm text-gray-700 ps-3">Bienvenido
                                {{ auth()->user()->nombre }}</small>
                            <li class="ps-3 mt-2 hover:bg-gray-100 py-2">
                                <a href=""
                                    class="text-gray-600 hover:text-green-900 text-sm flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    Mi perfil
                                </a>
                            </li>

                            <li class="ps-3 hover:bg-gray-100 py-2 z-50">
                                <form action="{{ route('logout.store') }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="text-gray-600 hover:text-green-900 text-sm flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
                                        </svg>
                                        Cerrar Sesión
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>

        <hr class="my-0">

        <div class="container_mod">
            <ul class="flex text-xs xl:text-sm p-0 m-0 gap-4">
                <li class="py-2">
                    <a href="{{ route('dashboard') }}"
                        class="flex items-center gap-2 text-gray-500 hover:text-green-900">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        Dashboard
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg> --}}
                    </a>
                </li>

                <li class="relative py-2 nav_list">

                    <a href="" class="flex items-center gap-2 text-gray-600 hover:text-green-900">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 0-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                        </svg>
                        Ensayo
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>
                    </a>

                    <div class="absolute z-50 text-sm mt-1 rounded bg-white shadow-md w-48 hidden nav_list_0"
                        style="box-shadow: 0px 0px 2px 0px rgba(171,171,171,1);">
                        <ul class="ps-0 p-2">
                            <li class="ps-3 ">
                                <a href=""
                                    class="text-gray-600 hover:text-green-900 flex items-center justify-between">Histórico

                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" class="w-3 h-3">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                    </svg> --}}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="relative py-2 nav_list">
                    <a href="" class="flex items-center gap-2 text-gray-500 hover:text-green-900">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                        </svg>
                        Solicitudes
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>
                    </a>

                    <div class="absolute text-sm z-50 mt-1 rounded bg-white shadow-md w-48 hidden nav_list_1"
                        style="box-shadow: 0px 0px 2px 0px rgba(171,171,171,1);">
                        <ul class="ps-0 p-2">
                            <li class="ps-3 py-2">
                                <a href="{{ route('solicitud.create.show') }}"
                                    class="text-gray-600 hover:text-green-900 flex items-center justify-between">Crear
                                    solicitud</a>
                            </li>
                            <li class="ps-3 py-2">
                                <a href="{{ route('solicitudes') }}"
                                    class="text-gray-600 hover:text-green-900 flex items-center justify-between">Histórico</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="relative py-2 nav_list">
                    <a href="" class="flex items-center gap-2 text-gray-500 hover:text-green-900">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                        </svg>
                        Reportes
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>
                    </a>

                    <div class="absolute text-sm z-50 mt-1 rounded bg-white shadow-md w-48 hidden nav_list_2"
                        style="box-shadow: 0px 0px 2px 0px rgba(171,171,171,1);"></div>
                </li>

                <li class="relative py-2 nav_list">
                    <a href="" class="flex items-center gap-2 text-gray-500 hover:text-green-900">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        Parámetros
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>
                    </a>

                    <div class="absolute text-sm z-50 mt-1 rounded bg-white shadow-md w-48 hidden nav_list_3"
                        style="box-shadow: 0px 0px 2px 0px rgba(171,171,171,1);">
                        <ul class="ps-0 p-2">

                            <li class="ps-3 py-2 cursor-pointer">
                                <a href="{{ route('aditivos') }}"
                                    class="text-gray-600 hover:text-green-900 flex items-center justify-between">Aditivos</a>
                            </li>
                            <li class="ps-3 py-2 cursor-pointer">
                                <a href="{{ route('clientes') }}"
                                    class="text-gray-600 hover:text-green-900 flex items-center justify-between">Clientes</a>
                            </li>
                            <li class="ps-3 py-2 cursor-pointer">
                                <a href="{{ route('solicitudes') }}"
                                    class="text-gray-600 hover:text-green-900 flex items-center justify-between">Movimientos</a>
                            </li>
                            <li class="ps-3 py-2 cursor-pointer">
                                <a href="{{ route('usuarios') }}"
                                    class="text-gray-600 hover:text-green-900 flex items-center justify-between">Usuarios</a>
                            </li>
                            <li class="ps-3 py-2 cursor-pointer">
                                <a href="{{ route('yacimientos') }}"
                                    class="text-gray-600 hover:text-green-900 flex items-center justify-between">Yacimientos</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>

        </div>
    </nav>
    <script src="{{ asset('js/redom.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
    <script>
        const {
            el,
            mount
        } = redom;
    </script>
    <style>
        .top_cs {
            margin-top: 107px
        }

        @media (100px < width < 1200px) {
            .top_cs {
                margin-top: 113px
            }
        }
    </style>
    <div class="top_cs">
        @yield('contenido')
    </div>
    @yield('scripts')
</body>

</html>
@vite('resources/js/bootstrap.bundle.min.js')

<script src="{{ asset('js/alerts.js') }}"></script>
<script>
    const navHeader = document.querySelectorAll('.nav_list');

    for (let i = 0; i < navHeader.length; i++) {
        navHeader[i].addEventListener('mouseenter', e => {
            let navChild = document.querySelector(`.nav_list_${i}`);
            navChild.classList.remove('hidden');
        })

        navHeader[i].addEventListener('mouseleave', e => {
            let navChild = document.querySelector(`.nav_list_${i}`);
            navChild.classList.add('hidden');
        });
    }
</script>

<script>
    const miPerfilNav = document.getElementById('miPerfilNav');
    const miPerfilConfig = document.getElementById('miPerfilConfig');

    miPerfilNav.addEventListener('click', e => {
        miPerfilConfig.classList.remove('hidden');
    })
</script>
