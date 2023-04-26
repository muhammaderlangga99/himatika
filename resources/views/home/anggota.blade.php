<!-- Start block -->
<section class="-mt-40 lg:mt-0">
    <div class="max-w-screen-xl px-4 py-16 lg:py-24 mx-auto lg:px-6">
        <div class="max-w-screen-md mx-auto mb-8 text-center lg:mb-12">
            <i class="bi bi-people text-2xl block text-blue-600"></i>
            <p class="text-blue-500 font-medium">Anggota</p>
            <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900">Struktur Himpunan Mahasiswa Teknik
                Informatika</h2>
            <p class="mb-5 font-light text-gray-500 sm:text-xl">Here at Landwind we focus on markets where technology,
                innovation, and capital can unlock long-term value and drive economic growth.</p>

            {{-- search form --}}

        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-3 lg:grid-cols-4 sm:gap-6 xl:gap-10 lg:space-y-0">
            {{-- hitung user lebih dari 0 --}}
            @if ($user->count() > 0)
                @foreach ($user as $use)
                    <!-- member Card -->
                    <div class="card max-w-sm  border border-gray-200 rounded-2xl shadow-xl shadow-blue-50 md:w-full md:max-w-none lg:w-72"
                        data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="500">
                        <div class="flex justify-end px-4 pt-4">
                            <button id="dropdownButton" data-dropdown-toggle="{{ $use->name }}"
                                class="inline-block text-gray-500 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg text-sm p-1.5"
                                type="button">
                                <span class="sr-only">Open dropdown</span>
                                <i class="bi bi-three-dots text-lg"></i>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="{{ $use->name }}"
                                class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                <ul class="py-2" aria-labelledby="dropdownButton">
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
                                </ul>
                            </div>
                        </div>
                        <div class="flex flex-col items-center pb-10">
                            <div class="img w-16 h-16 lg:w-24 lg:h-24 mb-3 rounded-full overflow-hidden">
                                <img src="@if ($use->profile) {{ asset("storage/$use->profile") }} @else {{ asset('img/HIMATIKA-Trilogi.png') }} @endif "
                                    class="w-full" alt="">
                            </div>
                            <h5
                                class="mb-1 text-lg lg:text-xl mx-auto text-center w-9/12 truncate font-medium text-gray-900">
                                {{ $use->name }}</h5>
                            <span class="text-sm text-gray-500">Ketua Himatika</span>
                            <span class="text-sm text-gray-500">{{ '@' . $use->instagram }}</span>
                            <div class="flex mt-4 space-x-3 md:mt-6">
                                <a href="/anggota/{{ $use->name }}"
                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 shadow-inner bg-white border border-gray-300 rounded-full hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-200">Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h3 class="text-md text-slate-400 font-medium">Tidak Ada User</h3>
            @endif


            <div class="group hover:bg-white max-w-sm border h-80 lg:h-auto border-gray-200 md:w-full md:max-w-none lg:p-0 lg:w-72 flex flex-col justify-center gap-6 rounded-2xl shadow-2xl shadow-blue-100 md:hidden lg:flex"
                data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-duration="500">
                <i class="bi bi-arrow-right text-5xl lg:text-8xl text-blue-600 font-bold mx-auto animate-next"></i>
                <h5 class="text-lg md:text-xl font-medium text-gray-900 text-center">Semua anggota</h5>
                <span class="text-sm text-gray-500 text-center">adipisicing elit. <br> Facere, maxime!</span>
                <a href="/anggota"
                    class="inline-flex text-sm items-center px-4 py-2 text-md font-medium text-center bg-blue-600 text-white border border-gray-300 rounded-full hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-gray-200 mx-auto">Explore</a>
            </div>

        </div>
    </div>
</section>
