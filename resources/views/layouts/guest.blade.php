<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    {{-- font poppins --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Source+Code+Pro&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-poppins text-gray-900 antialiased">
    <div class="grid md:grid-rows-2 lg:grid-rows-none lg:grid-cols-5 h-screen">
        <div
            class="col-span-5 lg:col-span-2 relative flex items-center justify-center md:row-start-2 lg:row-start-auto">


            <div class="login w-10/12 md:w-7/12 m-auto flex flex-col justify-center space-y-5 h-full">
                <div class="title">
                    @if (Route::is('login'))
                        <h2 class="text-xl font-semibold text-slate-900 text-center">Welcome back!</h2>
                    @else
                        <h2 class="text-xl font-semibold text-slate-900 text-center">Create an account</h2>
                    @endif
                    <p class="text-xs text-slate-500 text-center my-1">login untuk berikan yang terbaik untuk
                        himatika</p>
                    <a href="{{ route('github.index') }}"
                        class="w-full bg-gray-900 rounded-full mt-2 text-white inline-block text-center py-2 text-sm"><i
                            class="text-base bi bi-github mr-2"></i> Login
                        with
                        Github</a>
                </div>
                <div class="or flex justify-center items-center">
                    <div class="w-4/12 h-0.5 bg-slate-200"></div>
                    <p class="text-xs text-slate-500 text-center my-1 mx-5">or</p>
                    <div class="w-4/12 h-0.5 bg-slate-200"></div>
                </div>

                {{ $slot }}
            </div>


        </div>


        <div class="col-span-3 hidden relative md:flex bg-blue-50 row-start-1 w-screen lg:w-auto">
            <a href="{{ route('home') }}" class="absolute flex justify-center items-center top-5 left-3 lg:flex">
                <x-application-logo class="fill-current text-gray-800" />
                <h3 class="text-lg font-semibold text-blue-600 ml-2 inline">Akademi</h3>
            </a>
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
