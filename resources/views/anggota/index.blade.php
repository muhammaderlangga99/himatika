@extends('layouts.main')

@section('content')
    <!-- Start block -->
    <section class="bg-slate-50">
        <div class="max-w-screen-xl px-4 py-24 mx-auto lg:px-6">
            <div class="max-w-screen-md mx-auto mb-8 text-center lg:mb-12">
                <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900">Struktur Himpunan Mahasiswa Teknik
                    Informatika</h2>
                <p class="mb-5 font-light text-gray-500 sm:text-xl">Here at Landwind we focus on markets where technology,
                    innovation, and capital can unlock long-term value and drive economic growth.</p>

                {{-- search form --}}

                <form class="flex items-center mt-5" method="get" action="/anggota">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <i class="bi bi-search"></i>
                        </div>
                        <input type="text" id="simple-search"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5"
                            placeholder="Cari anggota" autocomplete="off" name="search" value="{{ old('search') }}">
                    </div>
                    <button type="submit"
                        class="p-2.5 px-3 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <i class="bi bi-search"></i>
                        <span class="sr-only">Search</span>
                    </button>
                </form>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-3 lg:grid-cols-4 sm:gap-6 xl:gap-10 lg:space-y-0">
                {{-- hitung user lebih dari 0 --}}
                @if ($user->count() > 0)
                    @foreach ($user as $use)
                        <!-- member Card -->
                        <div
                            class="max-w-sm bg-slate-50 border border-gray-200 rounded-lg shadow-lg shadow-blue-50 md:w-full md:max-w-none lg:w-72">
                            <div class="flex justify-end px-4 pt-4">
                                <button id="dropdownButton" data-dropdown-toggle="{{ $use->name }}"
                                    class="inline-block text-gray-500 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg text-sm p-1.5"
                                    type="button">
                                    <span class="sr-only">Open dropdown</span>
                                    <i class="bi bi-three-dots text-lg"></i>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="{{ $use->name }}"
                                    class="z-10 hidden text-base list-none backdrop-blur-xl divide-y divide-gray-100 rounded-lg shadow-lg shadow-slate-200 w-44">
                                    <ul class="py-2" aria-labelledby="dropdownButton">
                                        @if ($use->instagram > 0 && $use->github > 0)
                                            <li>
                                                <a href="https://instagram.com/{{ $use->instagram }}"
                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"><i
                                                        class="bi bi-instagram mr-2"></i> Instagram</a>
                                            </li>
                                            <li>
                                                <a href="https://github.com/{{ $use->github }}"
                                                    class="block px-4 py-2 text-sm hover:bg-gray-100"><i
                                                        class="bi bi-github mr-2"></i> Github</a>
                                            </li>
                                        @elseif($use->github > 0)
                                            <li>
                                                <a href="https://github.com/{{ $use->github }}"
                                                    class="block px-4 py-2 text-sm hover:bg-gray-100"><i
                                                        class="bi bi-github mr-2"></i> Github</a>
                                            </li>
                                        @elseif($use->instagram > 0)
                                            <li>
                                                <a href="https://instagram.com/{{ $use->instagram }}"
                                                    class="block px-4 py-2 text-sm hover:bg-gray-100"><i
                                                        class="bi bi-instagram mr-2"></i> Instagram</a>
                                            </li>
                                        @else
                                            <li>
                                                <p class="px-3 text-xs font-medium font-poppins text-slate-400">media
                                                    sosial belum
                                                    dicantumkan</p>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <div class="flex flex-col items-center pb-10">
                                <div class="img w-16 h-16 md:w-24 md:h-24 mb-3 rounded-full overflow-hidden">
                                    <img src="@if ($use->profile) {{ asset("storage/$use->profile") }} @else {{ asset('img/HIMATIKA-Trilogi.png') }} @endif "
                                        class="w-full" alt="">
                                </div>
                                <h5 class="mb-1 md:text-xl font-medium text-gray-900 mx-auto text-center truncate w-9/12">
                                    {{ $use->name }}</h5>
                                <span class="text-sm text-gray-500">Ketua Himatika</span>
                                @if ($use->instagram > 0)
                                    <span class="text-sm text-gray-500">{{ '@' . $use->instagram }}</span>
                                @elseif($use->github > 0)
                                    <span class="text-sm text-gray-500">{{ '@' . $use->github }}</span>
                                @elseif($use->instagram > 0 && $use->github > 0)
                                    <span class="text-sm text-gray-500">{{ '@' . $use->instagram }}</span>
                                @else
                                    <span class="text-sm text-gray-500">Tidak ada username</span>
                                @endif
                                <div class="flex mt-4 space-x-3 md:mt-6">
                                    <a href="/anggota/{{ $use->name }}"
                                        class="inline-flex items-center px-4 py-2 text-xs md:text-sm font-medium text-center text-gray-900 border border-gray-300 shadow-inner rounded-xl hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200">Detail</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h3 class="text-md text-slate-400 font-medium m-auto">Tidak Ada User</h3>
                @endif
            </div>
            <div class="mt-5">
                {{ $user->links() }}
            </div>
        </div>
    </section>
@endsection
