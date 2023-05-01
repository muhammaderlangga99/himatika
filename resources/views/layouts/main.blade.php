<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Himatika ~ {{ $page }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    {{-- font poppins --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Source+Code+Pro&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-50 overflow-x-hidden">
    @include('layouts.navbar')

    <div class="content -z-10 overflow-x-hidden">
        @yield('content')
    </div>

    @include('layouts.footer')

    <script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>
    <script>
        var typed = new Typed('#type', {
            strings: [
                'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore cumque quas cupiditate molestias laboriosam recusandae repellendus repellat.'
            ],
            typeSpeed: 10,
            showCursor: false,
        });
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
        });
    </script>
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
</body>

</html>
