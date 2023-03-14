<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-center text-gray-800 leading-tight">
            {{ __('📝 Buat Article') }}
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
                                    <form method="POST" action="action.php">
                                        
                                        <div class="flex mb-6 items-center justify-center w-full">
                                            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                    <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                                                    <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Upload gambar untuk thumbnail artikel</span></p>
                                                    <p class="text-xs text-gray-500">SVG, PNG, JPG</p>
                                                </div>
                                                <input id="dropzone-file" type="file" class="hidden" />
                                            </label>
                                        </div> 

                                        <div class="mb-4">
                                            <label class="text-lg text-gray-600">Title <span class="text-red-500">*</span></label></br>
                                            <input type="text" class="border-2 border-blue-300 w-full rounded-xl" name="title" id="title" value="" required>
                                        </div>

                                        <div class="mb-4">
                                            
                                        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900">Pilih Kategori</label>
                                        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                            <option selected>Article</option>
                                            <option value="US">News</option>
                                            <option value="CA">Stories</option>
                                        </select>

                                        </div>

                                        <div class="mb-8">
                                            <label class="text-xl text-gray-600">Content <span class="text-red-500">*</span></label></br>
                                            <textarea name="content" class="border-2 border-gray-500">
                                                
                                            </textarea>
                                        </div>

                                        <div class="flex p-1">
                                            <select class="border-2 border-blue-300 border-r p-2" name="action">
                                                <option>Save and Publish</option>
                                                <option>Save Draft</option>
                                            </select>
                                            <button role="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400" required>Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace( 'content' );
    </script>
            </div>
        </div>
    </div>
</x-app-layout>