    <style>
        .marquee {
        --gap: 1rem;
        display: flex;
        overflow: hidden;
        user-select: none;
        gap: var(--gap);
        }

        .marquee__content {
        flex-shrink: 0;
        display: flex;
        justify-content: space-around;
        min-width: 100%;
        gap: var(--gap);
        animation: scroll 10s linear infinite;
        }

        @keyframes scroll {
        from {
            transform: translateX(0);
        }
        to {
            transform: translateX(calc(-100% - var(--gap)));
        }
        }
    </style>
    
    <section class="-z-20">
        <div class="max-w-screen-xl px-4 pb-8 mx-auto lg:pb-16">
            <div class="animate-marquee overflow-x-hidden grid grid-cols-2 gap-8 text-gray-500 sm:gap-12 sm:grid-cols-3 lg:grid-cols-6">
                <a href="#" class="flex items-center lg:justify-center m-auto">
                    <img src="{{ asset('img/HIMATIKA-Trilogi.png') }}" alt="" class="w-16 lg:w-24 saturate-0 hover:saturate-100">
                </a>
                <a href="#" class="flex items-center lg:justify-center m-auto">
                    <img src="{{ asset('img/gdsc.png') }}" alt="" class="w-16 lg:w-24 saturate-0 hover:saturate-100">
                </a>
                <a href="#" class="flex items-center lg:justify-center m-auto">
                    <img src="{{ asset('img/trilogi.png') }}" alt="" class="w-16 lg:w-24 saturate-0 hover:saturate-100">
                </a>
                <a href="#" class="flex items-center lg:justify-center m-auto">
                    <img src="{{ asset('img/dicoding-header-logo.png') }}" alt="" class="w-16 lg:w-28 saturate-0 hover:saturate-100">
                </a>
                <a href="#" class="flex items-center lg:justify-center m-auto">
                    <img src="{{ asset('img/sekolahkoding.png') }}" alt="" class="w-16 lg:w-24 saturate-0 hover:saturate-100">
                </a>
                <a href="#" class="flex items-center lg:justify-center m-auto">
                    <img src="{{ asset('img/kawankoding.png') }}" alt="" class="w-16 lg:w-24 saturate-0 hover:saturate-100">
                </a>
            </div>
        </div>
    </section>
    <div class="marquee">
        <ul class="marquee__content">
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
        </ul>
        <!-- Mirrors the content above -->
        <ul class="marquee__content" aria-hidden="true">
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
        </ul>
    </div>