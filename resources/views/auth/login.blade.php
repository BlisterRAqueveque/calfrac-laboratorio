<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laboratorio - Iniciar Sesión</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<style>
    /* body {
        background: url("{{ asset('img/login.jpg') }}");
        background-size: cover;
        height: 100vh;
        backdrop-filter: blur(5px);
    } */
</style>

<body class="relative flex justify-center bg-gray-50 items-center h-screen">


    <section class="bg-white shadow-md absolute rounded w-1/4 p-5 z-10">
        <div class="flex flex-col items-center justify-center">
            <p class="font-semibold text-sky-600 tracking-wide">¡Bienvenido!</p>
            <p class="tracking-wide text-sm text-gray-600">Inicia sesión para ingresar al sistema</p>
        </div>
        <div>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                @if (session('mensaje'))
                    <p class="bg-red-500 text-white rounded-lg p-2 text-center my-2 font-semibold text-sm">
                        {{ session('mensaje') }}</p>
                @endif

                <div class="row">
                    <div class="mt-4">
                        <label for="email" class="text-sm font-semibold text-gray-800 tracking-wider"
                            style="font-size: 13px">Email</label>
                        <input type="email" id="email" name="email"
                            class="border border-gray-300 p-2 rounded-md text-sm block mt-1 w-full tracking-wider"
                            placeholder="Ingrese el email">
                        @error('email')
                            <small class="text-red-600 font-medium">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                    <div class="mt-4 mb-3">
                        <div class="flex justify-between items-center">
                            <label for="password" class="text-sm font-semibold text-gray-800 tracking-wider"
                                style="font-size: 13px">Contraseña</label>
                            <a class="text-gray-400 font-semibold tracking-wider" href=""
                                style="font-size: 12px">¿Olvidaste tu contraseña?</a>
                        </div>
                        <input type="password" id="password" name="password"
                            class="border border-gray-300 p-2 rounded-md text-sm block mt-1 w-full tracking-wider"
                            placeholder="Ingrese la contraseña">
                        @error('password')
                            <small class="text-red-600 font-medium">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <input type="submit" value="Iniciar Sesión"
                        class="bg-teal-400 text-white uppercase text-sm font-bold tracking-wide p-2 shadow-sm rounded-md w-full cursor-pointer hover:bg-teal-500 hover:shadow-md">
                </div>
            </form>
        </div>
    </section>

</body>

</html>
