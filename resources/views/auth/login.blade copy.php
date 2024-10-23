<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laboratorio - Iniciar Sesión</title>
    @vite('resources/css/app.css')
</head>

<style>
    body {
        background: url("{{ asset('img/login.jpg') }}");
        background-size: cover;
        height: 100vh;
        backdrop-filter: blur(5px);
    }
</style>

<body>
    <section>
        <div>
            <div class="flex justify-center w-1/2 mx-auto h-screen items-center relative">

                <div class="border-2 h-auto w-full py-32 px-16">
                    <h5>Bienvenido a Laboratorio</h5>

                    <p>Inicia sesión para ver todas las novedades del sistema</p>
                </div>

                <div class="absolute bg-white shadow-sm h-96 p-16 right-10">
                    <h5 class="uppercase bold">Iniciar Sesión</h5>
                    <form action="{{ route('login') }}" method="POST" class="mt-3">
                        @csrf

                        @if (session('mensaje'))
                            <p class="bg-red-500 text-white rounded-lg p-2 text-center my-2 font-semibold text-sm">
                                {{ session('mensaje') }}</p>
                        @endif

                        <div>
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="block border w-full p-2"
                                placeholder="Ingrese su email">
                            @error('email')
                                <small class="text-red-500 font-medium">
                                    {{ $message }}
                                </small>
                                {{-- <p class="bg-red-500 text-white rounded-lg p-2 text-center my-2 font-semibold text-sm">
                                    {{ $message }}</p> --}}
                            @enderror
                        </div>

                        <div>
                            <label for="password">Contraseña</label>
                            <input type="password" id="password" name="password" class="block border w-full p-2" placeholder="Ingrese la contraseña">
                            @error('password')
                                <small class="text-red-500 font-medium">
                                    {{ $message }}
                                </small>
                            @enderror

                        </div>

                        <div class="mt-2 flex justify-between items-center">
                            <a href="" class="p-3">¿Olvidaste tu contraseña?</a>
                            <input type="submit" value="Iniciar Sesión" class="cursor-pointer border p-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
