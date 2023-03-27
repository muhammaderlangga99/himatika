@extends('layouts.main')

@section('content')
    <header>
        <div class="max-w-screen-xl pt-20 pb-8 mx-auto lg:py-5 lg:pt-20">
            @auth
                @if ($page == 'dashboard')
                @else
                    @if ($user->id == auth()->user()->id)
                        <a href="{{ route('profile.edit') }}"
                            class="bg-slate-200 inline-block p-2 rounded-lg right-14 absolute"><i
                                class="bi bi-pen mr-2"></i>edit</a>
                    @endif
                @endif
            @endauth
            <div class="img w-40 h-40 rounded-full overflow-hidden m-auto">

                <img src="@if ($user->profile) {{ asset("storage/$user->profile") }} @else {{ asset('img/HIMATIKA-Trilogi.png') }} @endif"
                    class="w-full" alt="">
            </div>

            <div class="text-center mt-5">
                <h1 class="text-3xl font-bold">{{ $user->name }}</h1>
                <p class="text-gray-500 text-lg italic">Anggota</p>
            </div>

            <div class="flex mt-3 justify-evenly m-auto w-80">
                <a href="https://instagram.com/{{ $user->instagram }}"><i class="bi bi-instagram mr-2"></i>Instagram</a>
                <a href="https://github.com/{{ $user->github }}"><i class="bi bi-github mr-2"></i>Github</a>
                <a href="https://gmail.com/{{ $user->email }}"><i class="bi bi-envelope mr-2"></i>Email</a>
            </div>
    </header>

    <section
        class="content max-w-xl m-auto p-3 @if (Request::is('dashboard')) bg-slate-100 @else bg-white mx-3 lg:mx-auto @endif md:rounded-xl tracking-wide text-lg lg:text-base">
        {!! $user->bio !!}
    </section>
@endsection
