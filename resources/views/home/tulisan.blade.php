<style>
    #article {
        width: 100%;
        height: 100%;
    }

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
<section class="bg-blue-50 lg:pt-16 lg:pb-1 py-8 relative">
    <i class="bi bi-quote animate-pulse block text-blue-100 absolute right-96 top-10 text-8xl"></i>

    <div class="max-w-screen-xl px-4 mx-auto space-y-12 lg:space-y-20 lg:px-6 ">
        <!-- Row -->
        <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
            <div class="text-gray-500 sm:text-lg" data-aos="fade-right">
                <i class="bi bi-quote animate-pulse text-3xl block text-blue-600"></i>
                <p class="text-blue-500 font-medium">Tulisan anggota</p>
                <h2 class="mb-2 text-3xl font-extrabold tracking-tight text-gray-900">Ilmu kami ditulis di sini!</h2>
                <p class="mb-4 lg:text-lg">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis vero
                    illum ipsum id laudantium sunt omnis sequi inventore laboriosam, officia, fuga nam tenetur? Porro,
                    quos.</p>
                <a href="/blog"
                    class="inline-flex items-center justify-center w-full px-4 py-3 mb-6 mr-2 text-sm font-medium bg-blue-700 border border-gray-200 rounded-full sm:w-auto focus:outline-none hover:bg-blue-800 hover:text-slate-50 focus:z-10 focus:ring-4 focus:ring-gray-200 text-white shadow-2xl shadow-blue-500">Baca
                    artikel <i class="bi bi-arrow-right pl-2 animate-next"></i></a>
            </div>
            <!-- Add Navigation -->
            <div class="navigation justify-end space-x-6 self-end hidden lg:flex -translate-y-6">
                <i
                    class="bi bi-arrow-left-circle-fill text-blue-100 text-4xl hover:text-slate-300 active:text-slate-600"></i>
                <i
                    class="bi bi-arrow-right-circle-fill text-blue-100 text-4xl hover:text-slate-300 active:text-slate-600"></i>
            </div>
        </div>
    </div>


    <swiper-container id="article" init="false" class="container max-w-7xl m-auto overflow-x-hidden">
        @foreach ($articles as $article)
            <swiper-slide class="card group">
                <a href="/tulisan/{{ $article->slug }}" class="card">
                    <img src="{{ $article->thumbnail }}" alt=""
                        class="object-cover m-auto thumb w-10/12 h-44 rounded-2xl bg-white group-hover:shadow-lg  group-hover:shadow-slate-300 transition-all duration-300">
                    <div class="date flex w-10/12 font-base m-auto mt-2 text-white space-x-2">
                        <p
                            class="category text-white px-3 py-1 rounded-full bg-{{ $article->category->color }}-600 text-xs font-medium">
                            {{ $article->category->name }}</p>
                        <p class="font-mono text-xs text-slate-900 font-light my-auto">
                            {{ $article->updated_at->diffForHumans() }}</p>
                    </div>
                    <div class="title w-10/12 m-auto mt-3 pb-3">
                        <h4
                            class="tulisan inline-block text-xl font-semibold font-poppins leading-tight tracking-normal duration-500">
                            <span class="link link-underline link-underline-black">
                                {{ $article->title }}
                            </span>
                        </h4>
                    </div>
                </a>
            </swiper-slide>
        @endforeach
    </swiper-container>



    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
    <script>
        const swiperEl = document.querySelector('#article')
        Object.assign(swiperEl, {
            slidesPerView: 1,
            spaceBetween: 10,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                clickable: true,
            },
            navigation: {
                nextEl: ".bi-arrow-right-circle-fill",
                prevEl: ".bi-arrow-left-circle-fill",
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
            },
        });
        swiperEl.initialize();
    </script>
</section>
