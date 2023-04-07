<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
                {{-- edit profile --}}
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
                        {{ __('Edit Profile') }}
                    </x-nav-link>
                </div>
                {{-- tulis article --}}
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('articles.index')" :active="request()->routeIs('articles.*')">
                        {{ __('Article') }}
                    </x-nav-link>
                </div>
            </div>
            <div class="flex gap-x-2">
                <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName"
                    class="flex mx-3 text-sm bg-slate-100 rounded-full md:mr-0 h-8 my-auto focus:ring-4 focus:ring-gray-300"
                    type="button">
                    {{-- <span class="sr-only">Open user menu</span> --}}
                    <div class="img w-8 h-8 md:mr-2 rounded-full overflow-hidden">
                        <img src="@if (auth()->user()->profile) {{ asset('storage/' . auth()->user()->profile) }} @else {{ asset('img/HIMATIKA-Trilogi.png') }} @endif"
                            class="w-full" alt="">
                    </div>

                    <p class="my-auto mx-1 hidden font-semibold md:inline-block">
                        {{ Str::of(auth()->user()->name)->limit(10) }}
                        <svg class="w-5 h-5 ml-1 inline" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </p>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdownAvatarName"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                    <div class="px-4 py-3 text-sm text-gray-900">
                        <div class="font-medium ">{{ auth()->user()->name }}</div>
                        <div class="truncate">{{ auth()->user()->email }}</div>
                    </div>
                    <ul class="py-2 text-sm text-gray-700"
                        aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                        <li>
                            <a href="/home" class="block px-4 py-2 hover:bg-gray-100">Home</a>
                        </li>
                        <li>
                            <a href="/anggota/{{ auth()->user()->instagram }}"
                                class="block px-4 py-2 hover:bg-gray-100">profile</a>
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

                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                    class="focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xl py-0.5 my-auto px-1 md:hidden text-center inline-flex items-center"
                    type="button">
                    <i class="bi bi-list"></i>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                    <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="{{ route('dashboard') }}" class="block px-4 py-2 hover:bg-gray-100">Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 hover:bg-gray-100">Edit
                                Profile</a>
                        </li>
                        <li>
                            <a href="{{ route('articles.index') }}"
                                class="block px-4 py-2 hover:bg-gray-100">Article</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>





    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
