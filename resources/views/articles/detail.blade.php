<section class="container max-w-6xl m-auto grid grid-cols-1 md:grid-cols-6 gap-10">
    <section class="content col-span-4">

        <div class="title border-b mb-10 border-slate-800">
            <h1 class="text-4xl md:text-6xl tracking-wide leading-tight font-bold font-poppins mb-5">
                {{ $article->title }}</h1>
            <p class="mb-1 text-sm tracking-wide">ditulis oleh <a href="/anggota/{{ $article->user->name }}"
                    class="ml-1 hover:underline font-poppins font-semibold">{{ Str::upper($article->user->name) }}</a>
            </p>
            <p class="mb-8 text-sm tracking-wide">dalam Kategori <a href="/kategori/{{ $article->category->slug }}"
                    class="ml-1 hover:underline font-semibold font-poppins">{{ Str::upper($article->category->name) }}</a>
            </p>
        </div>


        <div
            class="first-letter:text-5xl first-letter:font-bold first-letter:float-left first-letter:mr-2 text-lg space-y-6 tracking-wide font-serif">
            {!! $article->body !!}</div>
    </section>
    <section class="sidebar max-w-md col-span-2 hidden md:flex flex-col items-center border-l border-slate-800">
        <div class="w-8/12 space-y-4 mt-9">
            <p class="font-medium font-poppins uppercase">about author</p>
            <div class="font-serif text-sm tracking-wide font-light leading-relaxed">
                {!! $article->user->bio !!}
            </div>

            <div class="flex justify-between items-center">
                <a href="/anggota/{{ $article->user->name }}"
                    class="inline-block uppercase font-poppins font-semibold text-sm hover:underline no-underline
                ">Lihat
                    Profile</a>

                <div class="socialmedia flex gap-3 justify-center items-center">
                    <a href="https://instagram.com/{{ $article->user->instagram }}" class="hover:text-blue-600">
                        <i class="bi bi-instagram inline-block"></i>
                    </a>
                    <a href="https://github.com/{{ $article->user->github }}" class="hover:text-blue-600">
                        <i class="bi bi-github inline-block"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
</section>
