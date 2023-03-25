<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'HIMATIKA') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    {{-- trix editor --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

    {{-- update photo profile --}}
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>

    <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.3.x/dist/index.js"></script>

    {{-- icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    {{-- datatable --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.2/r-2.4.0/datatables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">


    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>


    {{-- flowbite --}}
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    {{-- datatables --}}
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jqzuery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.2/r-2.4.0/datatables.min.js"></script>
    <script src="https://cdn.datatables.net/plug-ins/1.13.3/pagination/scrolling.js"></script>
    <script>
        $(document).ready(function() {
            $('#article').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('articles.index') }}',
                columns: [
                    // satu kolom untuk nomor urut
                    {
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'category.name',
                        name: 'category.name'
                    },
                    {
                        data: 'user.name',
                        name: 'user.name'
                    },
                    {
                        data: 'id',
                        name: 'id'
                    },
                ],
                columnDefs: [{
                        targets: 0,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        target: 1,
                        render: function(data, type, row) {
                            return '<a href="/articles/' + row.slug +
                                '" class="font-semibold text-slate-900">' + row.title + '</a>';
                        }
                    },
                    {
                        targets: 4,
                        render: function(data, type, row) {
                            return '<div class="hidden lg:flex justify-content-evenly"><a href="/articles/' +
                                row.slug +
                                '/edit" class="btn btn-sm hover:bg-blue-600  rounded-circle border-1 border-blue-600 text-blue-600 hover:text-white shadow-md"><i class="bi bi-pen"></i></a> <form action="/articles/' +
                                row.slug +
                                '" method="post" onClick="konfirm()">@method('delete') @csrf <button type="submit" class="btn btn-sm hover:bg-red-600 rounded-circle border-1 border-red-600 text-red-600 hover:text-white shadow-md"><i class="bi bi-trash2"></i></button></form> <a href="/article/' +
                                row.slug +
                                '" class="shadow-md btn btn-sm hover:bg-green-600  rounded-circle border-1 border-green-600 text-green-600 hover:text-white"><i class="bi bi-arrow-right"></i></a> </div>'
                        }
                    }
                ],
                buttons: [],
            });
        });

        function konfirm() {
            return confirm('yakin?');
        }
    </script>
</body>

</html>
