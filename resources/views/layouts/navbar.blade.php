@if ($page == 'dashboard')
    
@else
<header class="fixed w-full z-50">
        <nav class="backdrop-blur-lg @if(!Request::is(['home', '/'])) bg-white @endif border-gray-200 py-2.5">
            <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
                <a href="/home" class="flex items-center">
                    <img src="{{ asset('img/HIMATIKA-Trilogi.png') }}" class="h-6 mr-3 sm:h-9" alt="Landwind Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap">HIMATIKA</span>
                </a>

                <div class="flex items-center lg:order-2">
                @auth
                    <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="flex bg-white items-center text-sm font-medium text-gray-900 rounded-full hover:text-blue-600 md:mr-0 focus:ring-4 focus:ring-gray-100" type="button">
                        <span class="sr-only">Open user menu</span>
                        <div class="img w-8 h-8 mr-2 rounded-full overflow-hidden">
                             <img src="@if (auth()->user()->profile) {{asset("storage/".auth()->user()->profile)}} @else {{asset('img/HIMATIKA-Trilogi.png')}} @endif" class="w-full" alt="">
                        </div>
                        {{ auth()->user()->name}}
                        <svg class="w-4 h-4 mx-1.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownAvatarName" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                        <div class="px-4 py-3 text-sm text-gray-900">
                        <div class="font-medium ">{{auth()->user()->name}}</div>
                        <div class="truncate">{{auth()->user()->email}}</div>
                        </div>
                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                            <li>
                                <a href="/dashboard" class="block px-4 py-2 hover:bg-gray-100">Dashboard</a>
                            </li>
                            <li>
                                <a href="/anggota/{{auth()->user()->instagram}}" class="block px-4 py-2 hover:bg-gray-100">profile</a>
                            </li>
                            </ul>
                        <div class="py-2">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="/register" class="hidden lg:inline-block text-blue-700 ring-2 ring-blue-600 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2 sm:mr-2 lg:mr-0 focus:outline-none hover:text-white">Sign Up</a>
                    
                    <a href="/login" class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 focus:outline-none  mx-4">Log in</a>
                @endauth
                    <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <i class="bi bi-list"></i>
                    </button>
                </div>

                <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a href="/home" class="block py-2 pl-3 pr-4 text-grey-700 rounded lg:bg-transparent hover:text-blue-500 @if (Request::is(['home', '/'])) text-blue-700 @endif lg:p-0" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="/anggota" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 @if (Request::is('anggota')) text-blue-700 @endif">Anggota</a>
                        </li>
                        <li>
                            <a href="/blog" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0  @if (Request::is('blog')) text-blue-700 @endif">Blog</a>
                        </li>
                        <li>
                            <a href="/ngumpul" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0  @if (Request::is('ngumpul')) text-blue-700 @endif">Ngumpul</a>
                        </li>
                        <li>
                            <a href="/event" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0  @if (Request::is('event')) text-blue-700 @endif">Event Himatika</a>
                        </li>
                        <li>
                            <a href="/contact" class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0  @if (Request::is('contact')) text-blue-700 @endif">Contact</a>
                        </li>
                        @guest
                        <li>
                            <a href="https://themesberg.com/product/tailwind-css/landing-page" class="inline-block lg:hidden w-full text-slate-800 ring-2 ring-blue-600 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm lg:px-5 px-3 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 focus:outline-none hover:text-white">Sign Up</a>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header>
@endif
