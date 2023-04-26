<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('Edit Article') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white  sm:rounded-lg">
                <!-- component -->
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden">
                            <div class="p-6 bg-white border-b border-gray-200">
                                {{-- FORM --}}
                                <form method="POST" action="/articles/{{ $article->slug }}"
                                    enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="flex mb-6 items-center justify-center w-full">
                                        <label for="dropzone-file"
                                            class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 text-gray-400 @if ($errors->has('thumbnail')) text-red-600 border-red-600 @endif border-dashed rounded-lg cursor-pointer bg-gray-50">
                                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                <svg aria-hidden="true" class="w-10 h-10 mb-3" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                                    </path>
                                                </svg>
                                                <p class="mb-2 text-sm"><span class="font-semibold">Upload
                                                        gambar untuk thumbnail artikel</span></p>
                                                <p class="text-xs">SVG, PNG, JPG</p>
                                            </div>
                                            <input id="dropzone-file" type="file" class="hidden" name="thumbnail" />
                                            @if ($errors->has('thumbnail'))
                                                <span class="text-red-500">*{{ $errors->first('thumbnail') }}</span>
                                            @endif
                                        </label>
                                    </div>

                                    <div class="mb-4">
                                        <label class="text-md text-gray-600">Title <span
                                                class="text-red-500">*</span></label></br>
                                        <input type="text"
                                            class="border-2 border-blue-300 w-full rounded-xl @if ($errors->has('title')) border-red-500 @endif"
                                            name="title" id="title" value="{{ old('title', $article->title) }}">
                                        @if ($errors->has('title'))
                                            <span class="text-red-500">*{{ $errors->first('title') }}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4">

                                        <label for="countries"
                                            class="block mb-2 text-md font-medium text-gray-900">Pilih Kategori <span
                                                class="text-red-600">*</span> </label>
                                        <select id="countries" name="category"
                                            class="bg-gray-50 border border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  p-2.5 @if ($errors->has('category')) text-white bg-red-600 @endif">
                                            <option value="">Category</option>
                                            @foreach ($category as $cat)
                                                @if (old('category', $article->category_id) == $cat->id)
                                                    <option value="{{ $cat->id }}" selected>{{ $cat->name }}
                                                    </option>
                                                @else
                                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @if ($errors->has('category'))
                                            <span class="text-red-500">*{{ $errors->first('category') }}</span>
                                        @endif
                                    </div>

                                    <div class="mb-8">
                                        <label class="text-md text-gray-600">Content <span
                                                class="text-red-500">*</span></label></br>
                                        <textarea name="content" class="border-2 rounded-2xl">
                                            {{ $article->body }}
                                        </textarea>
                                        @if ($errors->has('content'))
                                            <span class="text-red-500">*{{ $errors->first('content') }}</span>
                                        @endif
                                    </div>

                                    <div class="flex p-1">
                                        <button role="submit"
                                            class="py-1 px-3 rounded-xl text-lg bg-blue-600 text-white hover:bg-blue-800 shadow">Upload</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

                <script>
                    CKEDITOR.replace('content');
                </script>
            </div>
        </div>
    </div>
</x-app-layout>
