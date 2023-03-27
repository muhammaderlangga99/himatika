<section class="container max-w-6xl m-auto grid grid-cols-1 md:grid-cols-5 gap-10">
    <section class="content space-y-6 col-span-3">

        <div class="title border-b border-slate-800">
            <h1 class="text-4xl font-bold mb-3">{{ $article->title }}</h1>
            <p class="mb-1 text-sm">Ditulis oleh <a href="/anggota/{{ $article->user->instagram }}"
                    class="ml-1 hover:underline font-semibold">{{ Str::upper($article->user->name) }}</a></p>
            <p class="mb-3 text-sm">Dalam Kategori <a href="/kategori/{{ $article->category->slug }}"
                    class="ml-1 hover:underline font-semibold">{{ Str::upper($article->category->name) }}</a>
            </p>
        </div>


        {!! $article->body !!}
    </section>
    <section class="sidebar max-w-md col-span-2 hidden md:flex flex-col items-center border-l border-slate-800">
        <div class="w-8/12 space-y-4">
            <p class="font-semibold text-lg">TENTANG PENULIS</p>
            {!! $article->user->bio !!}
            <a href="/anggota/{{ $article->user->instagram }}"
                class="inline-block uppercase font-semibold text-sm underline hover:no-underline
                ">Lihat
                {{ $article->user->name }}</a>

            <div class="socialmedia flex gap-3">
                <a href="https://instagram.com/{{ $article->user->instagram }}" class="hover:text-blue-600">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="https://github.com/{{ $article->user->github }}" class="hover:text-blue-600">
                    <i class="bi bi-github"></i>
                </a>
            </div>
        </div>
    </section>
</section>
