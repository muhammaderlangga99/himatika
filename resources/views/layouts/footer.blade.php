<div
    class="relative bg-blue-600  @if (Request::is('anggota/*')) mt-24 @endif @if (Request::is('dashboard')) hidden @endif">
    <svg class="absolute top-0 w-full h-6 -mt-5 sm:-mt-10 sm:h-16 bg-red @if (Request::is('home')) bg-blue-50 @endif text-blue-600"
        preserveAspectRatio="none" viewBox="0 0 1440 54">
        <path fill="currentColor"
            d="M0 22L120 16.7C240 11 480 1.00001 720 0.700012C960 1.00001 1200 11 1320 16.7L1440 22V54H1320C1200 54 960 54 720 54C480 54 240 54 120 54H0V22Z">
        </path>
    </svg>
    <div class="px-4 pt-44 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
        <div class="grid gap-16 row-gap-10 mb-8 lg:grid-cols-6 text-white">
            <div class="md:max-w-md lg:col-span-2">
                <a href="/" aria-label="Go home" title="Company" class="inline-flex items-center">
                    <span
                        class="text-xl font-poppins font-semibold items-center flex tracking-wide text-gray-100 gap-3">
                        <img src="{{ asset('img/HIMATIKA-Trilogi.png') }}" alt="himatika" class="w-10 grayscale invert">
                        <span>Akademi</span>
                    </span>
                </a>
                <div class="mt-4 lg:max-w-sm">
                    <p class="text-sm text-deep-purple-50">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam.
                    </p>
                    <p class="mt-4 text-sm text-deep-purple-50">
                        Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                        explicabo.
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-2 text-lg gap-5 row-gap-8 lg:col-span-4 md:grid-cols-4">
                <div>
                    <p class="font-bold tracking-wide text-teal">
                        Category
                    </p>
                    <ul class="mt-2 space-y-2">
                        <li>
                            <a href="/"
                                class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">News</a>
                        </li>
                        <li>
                            <a href="/"
                                class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">World</a>
                        </li>
                        <li>
                            <a href="/"
                                class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Games</a>
                        </li>
                        <li>
                            <a href="/"
                                class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">References</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-bold tracking-wide text-teal-accent-400">Cherry</p>
                    <ul class="mt-2 space-y-2">
                        <li>
                            <a href="/"
                                class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Web</a>
                        </li>
                        <li>
                            <a href="/"
                                class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">eCommerce</a>
                        </li>
                        <li>
                            <a href="/"
                                class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Business</a>
                        </li>
                        <li>
                            <a href="/"
                                class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Entertainment</a>
                        </li>
                        <li>
                            <a href="/"
                                class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Portfolio</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-bold tracking-wide text-teal-accent-400">Apples</p>
                    <ul class="mt-2 space-y-2">
                        <li>
                            <a href="/"
                                class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Media</a>
                        </li>
                        <li>
                            <a href="/"
                                class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Brochure</a>
                        </li>
                        <li>
                            <a href="/"
                                class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Nonprofit</a>
                        </li>
                        <li>
                            <a href="/"
                                class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Educational</a>
                        </li>
                        <li>
                            <a href="/"
                                class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Projects</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-bold tracking-wide text-teal-accent-400">
                        Business
                    </p>
                    <ul class="mt-2 space-y-2">
                        <li>
                            <a href="/"
                                class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Infopreneur</a>
                        </li>
                        <li>
                            <a href="/"
                                class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Personal</a>
                        </li>
                        <li>
                            <a href="/"
                                class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Wiki</a>
                        </li>
                        <li>
                            <a href="/"
                                class="transition-colors duration-300 text-deep-purple-50 hover:text-teal-accent-400">Forum</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="flex flex-col justify-between pt-5 pb-10 border-t border-deep-purple-accent-200 sm:flex-row">
            <p class="text-sm text-gray-100">
                © Copyright 2020 Lorem Inc. All rights reserved.
            </p>
            <div class="flex items-center mt-4 space-x-4 sm:mt-0">
                <a href="/"
                    class="transition-colors duration-300 text-deep-purple-100 hover:text-teal-accent-400">
                    <i class="bi bi-instagram text-white text-xl"></i>
                </a>
                <a href="/"
                    class="transition-colors duration-300 text-deep-purple-100 hover:text-teal-accent-400">
                    <i class="bi bi-github text-white text-xl"></i>

                </a>
            </div>
        </div>
    </div>
</div>
