<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="grid md:grid-rows-2 lg:grid-rows-none lg:grid-cols-5 h-screen">
        <div class="col-span-5 lg:col-span-2 flex items-center justify-center md:row-start-2 lg:row-start-auto">
            <div class="login w-10/12 md:w-7/12 m-auto">
                <a href="{{ route('home') }}" class="-translate-y-10 flex justify-center items-center">
                    <x-application-logo class="font-poppins h-9 w-auto fill-current text-gray-800" />
                    <h3 class="text-xl font-poppins font-bold text-blue-600 ml-2 inline">Akademi</h3>
                </a>
                {{ $slot }}
            </div>
        </div>
        <div class="col-span-3 hidden md:flex bg-slate-100 row-start-1 w-screen lg:w-auto">
            @if (Route::is('login'))
                <img src="{{ asset('img/login.svg') }}" alt="" class="w-full m-auto">
            @elseif(Route::is('register'))
                <img src="{{ asset('img/registration.svg') }}" alt="" class="w-full m-auto">
            @endif
        </div>
    </div>

    </div>
</body>

</html>
