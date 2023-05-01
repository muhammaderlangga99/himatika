@extends('layouts.main')

@section('content')
    <style>
        .link-underline {
            background-image: linear-gradient(to right, #000 0%, #000 100%) !important; // warna garis bawah
            background-size:  !important; // ukuran garis bawah
            background-repeat: no-repeat !important;
            background-position: 0 100% !important;
            background-repeat: no-repeat !important;
            background-position: 0 100% !important;
            background-size: 0 3px !important;
            transition: .5s ease-in-out !important;
        }

        a.card:hover .link-underline {
            background-size: 100% 3px !important;
        }
    </style>
    <section class="pt-20 md:pt-28 font-poppins relative">
        <i class="bi bi-chat-square-text text-9xl block absolute right-24 top-20 shaadow text-blue-100 opacity-30"></i>
        <div class="absolute top-0 w-96 h-96 bg-blue-100 blur-3xl -translate-x-36 -z-30 rounded-full hidden md:inline-block">
        </div>
        <header class="md:h-[20vh] lg:h-[50vh] w-full px-3 max-w-screen-md mx-auto flex flex-col justify-center">
            <h1 class="text-4xl md:text-7xl lg:text-8xl font-bold text-slate-900 text-center z-10">Blog Himatika</h1>
            <p class="text-xs text-center md:max-w-xl md:text-lg lg:max-w-2xl mt-5 mx-auto z-10">Lorem ipsum dolor sit
                amet
                consectetur
                adipisicing elit.
                Molestias
                necessitatibus
                in,
                aspernatur non.
            </p>

            {{-- search form --}}
            <form class="flex items-center mt-5" method="get" action="/anggota">
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <i class="bi bi-search"></i>
                    </div>
                    <input type="text" id="simple-search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 inline-block w-full pl-10 p-2.5"
                        placeholder="Cari article" autocomplete="off" name="search" value="{{ old('search') }}">
                </div>
                <button type="submit"
                    class="p-2.5 px-3 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <i class="bi bi-search"></i>
                    <span class="sr-only">Search</span>
                </button>
            </form>


        </header>

        {{-- jumbo section --}}
        <a href="/tulisan/{{ $articles[0]->slug }}"
            class="group header-article card m-auto max-w-7xl mt-10 flex flex-col md:flex-row-reverse space-y-5 md:space-y-0 px-3 mb-20 gap-x-10 items-center">
            <div
                class="img-header md:w-10/12 group-hover:shadow-2xl transition-all duration-300 h-60 md:h-80 bg-red-400 overflow-hidden rounded-2xl items-center flex">
                <img src="{{ $articles[0]->thumbnail }}"
                    class="object-cover min-h-full group-hover:scale-125 transition-all duration-300" alt="blog">
            </div>

            <div class="title-header md:w-10/12 space-y-3">
                <div class="date flex w-10/12 font-base mt-2 text-white space-x-2">
                    <p class="category text-white px-3 py-1 rounded-full bg-red-600 text-xs font-medium">
                        {{ $articles[0]->category->name }}</p>
                    <p class="font-mono text-xs text-slate-900 font-light my-auto">
                        {{ $articles[0]->updated_at->diffForHumans() }}</p>
                </div>
                <h1 class="text-xl font-bold md:text-3xl tracking-wide">
                    <span class="link-underline">{{ $articles[0]->title }}
                    </span>
                </h1>
                <p class="text-sm leading-relaxed tracking-wide mt-3">{!! Str::of($articles[0]->body)->limit(160) !!}
                </p>
            </div>
        </a>
        {{-- end jumbo section --}}

        {{--  artikel --}}
        <section class="article mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 max-w-7xl gap-4 m-auto">
            @foreach ($articles->skip(1) as $article)
                <div class="card group">
                    <a href="/tulisan/{{ $article->slug }}" class="card">
                        <img src="https://source.unsplash.com/random/900×700/?code" alt=""
                            class="object-cover m-auto thumb w-11/12 md:w-10/12 h-44 rounded-xl bg-white group-hover:shadow-lg group-hover:shadow-slate-300 transition-all duration-300">
                        <div class="date flex w-11/12 md:w-10/12 font-base m-auto mt-2 text-white space-x-2">
                            <p
                                class="category text-white px-3 py-1 rounded-full bg-{{ $article->category->color }}-600 text-xs font-medium">
                                {{ $article->category->name }}</p>
                            <p class="font-mono text-xs text-slate-900 font-light my-auto">
                                {{ $article->updated_at->diffForHumans() }}</p>
                        </div>
                        <div class="title w-11/12 md:w-10/12 m-auto mt-3 pb-3">
                            <h4
                                class="tulisan inline-block text-lg font-semibold font-poppins leading-tight tracking-normal duration-500">
                                <span class="link link-underline link-underline-black">
                                    {{ $article->title }}
                                </span>
                            </h4>
                        </div>
                    </a>
                </div>
            @endforeach
        </section>
        <div class="mt-5 mb-20 max-w-7xl m-auto px-3">
            {{ $articles->links() }}
        </div>

    </section>
@endsection
