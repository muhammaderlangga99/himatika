<style>
    swiper-container {
        width: 320px;
    }

    swiper-slide {
        border-radius: 20px;
    }
</style>

<section class="bg-blue-50 border-b border-slate-700 border-t">
    <div class="max-w-screen-xl px-4 py-16 mx-auto space-y-12 lg:space-y-20 lg:py-28 lg:px-6">
        <div class="asd items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
            <div class="bg-slate-100 border border-slate-300 rounded-3xl p-5 lg:py-20 shadow flex flex-col relative">
                <div class="w-52 h-52 rounded-full bg-blue-200 blur-2xl absolute right-0"></div>
                {{-- slider --}}
                <swiper-container class="mySwiper" effect="cards" grab-cursor="true" id="event">
                    <swiper-slide class="bg-slate-100">
                        <div class="m-auto thumb w-80 h-48 rounded-2xl bg-white overflow-hidden">
                            <img src="{{ asset('img/toa-heftiba-O3ymvT7Wf9U-unsplash.jpg') }}" alt=""
                                class="w-full m-auto">
                        </div>
                        <div class="date flex w-72 font-base m-auto mt-1 text-white space-x-2">
                            <p class="category text-white px-3 rounded-full bg-red-600 text-sm font-medium">Article</p>
                            <p class="font-mono text-xs text-slate-900 font-light my-auto">14 Februari, 2023</p>
                        </div>
                        <div class="title w-72 m-auto mt-3 pb-3">
                            <a href=""
                                class="inline-block text-2xl font-semibold text-slate-800 leading-tight tracking-wide">
                                Accelerate critical solutions work</a>
                        </div>
                    </swiper-slide>
                    <swiper-slide class="bg-slate-100">
                        <div class="m-auto thumb w-80 h-48 rounded-2xl bg-white overflow-hidden">
                            <img src="{{ asset('img/rayul-_M6gy9oHgII-unsplash.jpg') }}" alt=""
                                class="w-full m-auto">
                        </div>
                        <div class="date flex w-72 font-base m-auto mt-1 text-white space-x-2">
                            <p class="category text-white px-3 rounded-full bg-red-600 text-sm font-medium">Article</p>
                            <p class="font-mono text-xs text-slate-900 font-light my-auto">14 Februari, 2023</p>
                        </div>
                        <div class="title w-72 m-auto mt-3 pb-3">
                            <a href=""
                                class="inline-block text-2xl font-semibold text-slate-800 leading-tight tracking-wide">
                                Accelerate critical solutions work</a>
                        </div>
                    </swiper-slide>
                    <swiper-slide class="bg-slate-100">
                        <div class="m-auto thumb w-80 h-48 rounded-2xl bg-white overflow-hidden">
                            <img src="{{ asset('img/aiony-haust-3TLl_97HNJo-unsplash.jpg') }}" alt=""
                                class="w-full m-auto">
                        </div>
                        <div class="date flex w-72 font-base m-auto mt-1 text-white space-x-2">
                            <p class="category text-white px-3 rounded-full bg-red-600 text-sm font-medium">Article</p>
                            <p class="font-mono text-xs text-slate-900 font-light my-auto">14 Februari, 2023</p>
                        </div>
                        <div class="title w-72 m-auto mt-3 pb-3">
                            <a href=""
                                class="inline-block text-2xl font-semibold text-slate-800 leading-tight tracking-wide">
                                Accelerate critical solutions work</a>
                        </div>
                    </swiper-slide>
                    <swiper-slide class="bg-slate-100">
                        <div class="m-auto thumb w-80 h-48 rounded-2xl bg-white overflow-hidden">
                            <img src="{{ asset('img/toa-heftiba-O3ymvT7Wf9U-unsplash.jpg') }}" alt=""
                                class="w-full m-auto">
                        </div>
                        <div class="date flex w-72 font-base m-auto mt-1 text-white space-x-2">
                            <p class="category text-white px-3 rounded-full bg-red-600 text-sm font-medium">Article</p>
                            <p class="font-mono text-xs text-slate-900 font-light my-auto">14 Februari, 2023</p>
                        </div>
                        <div class="title w-72 m-auto mt-3 pb-3">
                            <a href=""
                                class="inline-block text-2xl font-semibold text-slate-800 leading-tight tracking-wide">
                                Accelerate critical solutions work</a>
                        </div>
                    </swiper-slide>
                    <swiper-slide class="bg-slate-100">
                        <div class="m-auto thumb w-80 h-48 rounded-2xl bg-white overflow-hidden">
                            <img src="{{ asset('img/rayul-_M6gy9oHgII-unsplash.jpg') }}" alt=""
                                class="w-full m-auto">
                        </div>
                        <div class="date flex w-72 m-auto font-base mt-1 text-white space-x-2">
                            <p class="category text-white px-3 rounded-full bg-red-600 text-sm font-medium">Article</p>
                            <p class="font-mono text-xs text-slate-900 font-light my-auto">14 Februari, 2023</p>
                        </div>
                        <div class="title w-72 m-auto mt-3 pb-3">
                            <a href=""
                                class="inline-block text-2xl font-semibold text-slate-800 leading-tight tracking-wide">
                                Accelerate critical solutions work</a>
                        </div>
                    </swiper-slide>
                </swiper-container>
            </div>

            <div class="text-gray-500 sm:text-lg mt-4 lg:mt-0">
                <i class="bi bi-calendar-event text-2xl block text-blue-600"></i>
                <p class="text-blue-500">Himatika <span class="font-medium">event.</span></p>
                <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900">consectetur adipisicing elit
                    necessitatibus.</h2>
                <p class="mb-5 lg:text-lg">Deliver great service experiences fast - without the complexity of
                    traditional ITSM solutions. Accelerate critical development work, eliminate toil, and deploy changes
                    with ease.</p>
                <a href="https://www.figma.com/community/file/1125744163617429490"
                    class="inline-flex items-center justify-center w-full px-5 py-3 mb-2 mr-2 text-sm font-medium bg-blue-600 border border-gray-200 rounded-full sm:w-auto focus:outline-none hover:bg-blue-800 hover:text-slate-50 focus:z-10 focus:ring-4 focus:ring-gray-200 text-white">Lihat
                    semua <i class="bi bi-arrow-right pl-2 animate-next"></i></a>
            </div>
        </div>
    </div>
    </div>
</section>
<script>
    const event = document.querySelector('#event')
    Object.assign(event, {
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,

        }
    })

    event.initialize();
</script>
