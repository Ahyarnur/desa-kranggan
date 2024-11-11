<x-app-layout>
    <body class="bg-gray-100">
    {{-- <div class="container max-w-7xl mx-auto sm:px-6 lg:px-8 px-2 pb-96">
            <!-- Header -->
            <div class="bg-white p-6 rounded-lg shadow-md mb-8 mt-14">
                <h1 class="text-2xl font-bold">Admin Panel - Kelola Berita</h1>
            </div>
            
        
            <div class="container mx-auto mt-8 px-4">
                <!-- Form Tambah/Edit Berita -->
                <div class="bg-white p-6 rounded-lg shadow-md mb-8">
                    <h2 class="text-xl font-semibold mb-4" id="form-title">Tambah Berita</h2>
                    <form id="news-form">
                        <input type="hidden" id="news-id">
                        
                        <div class="mb-4">
                            <label class="block text-gray-700">Judul Berita:</label>
                            <input type="text" id="title" class="w-full px-4 py-2 border rounded-md" placeholder="Masukkan judul berita" required>
                        </div>
                        
                        <div class="mb-4">
                            <label class="block text-gray-700">Konten Berita:</label>
                            <textarea id="content" class="w-full px-4 py-2 border rounded-md" placeholder="Masukkan konten berita" rows="5" required></textarea>
                        </div>
                        
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700" id="save-button">Simpan</button>
                        <button type="button" onclick="resetForm()" class="bg-gray-600 text-white px-4 py-2 rounded-md hover:bg-gray-700 ml-2">Batal</button>
                    </form>
                </div>
        
                <!-- Tabel Daftar Berita -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold mb-4">Daftar Berita</h2>
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 bg-gray-200 text-left">No</th>
                                <th class="py-2 px-4 bg-gray-200 text-left">Judul</th>
                                <th class="py-2 px-4 bg-gray-200 text-left">Konten</th>
                                <th class="py-2 px-4 bg-gray-200 text-left">Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="news-table-body">
                            <!-- Data berita akan diisi secara dinamis oleh JavaScript -->
                        </tbody>
                    </table>
                </div>
            </div>
            </div> --}}
            


            <div class="container max-w-7xl mx-auto sm:px-6 lg:px-8 px-2 pb-96">
                <!-- Header -->
                <div class="bg-white p-6 rounded-lg shadow-md mb-8 mt-14">
                    <h1 class="text-2xl font-bold">Admin Panel - Kelola Berita</h1>
                </div>
                <div class="flex mt-6">
                    <h2 class="font-semibold text-xl">Add Products</h2>
                    
                </div>
        
        
                <div class="mt-4" x-data="{ imageUrl: '/storage/noimage.png' }">
                    <form enctype="multipart/form-data" action="{{ route('createpost')}}" method="post" class="flex gap-8">
                        @csrf
                        <div class="w-1/2">
                            <img :src="imageUrl" class="rounded-md" />
                        </div>
        
                        <div class="w-1/2">
                            <div class="mt-4">
                                <x-input-label for="foto"
                                 :value="__('foto')" />
                                <x-text-input accept="image/*" id="foto"
                                 class="block mt-1 w-full border p-2" 
                                 type="file" name="foto" :value="old('foto')" required @change="imageUrl = URL.createObjectURL($event.target.files[0])" />
                                <x-input-error :messages="$errors->get('foto')" class="mt-2" />
                            </div>
                            
                            <div class="mt-4">
                                <x-input-label for="judul" :value="__('judul')" />
                                <x-text-input id="judul" class="w-full px-4 py-2 border rounded-md" placeholder="Masukkan judul berita" type="text" name="judul" :value="old('judul')" required />
                                <x-input-error :messages="$errors->get('judul')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="deskripsi" :value="__('Deskripsi')" />
                                <x-text-area id="deskripsi" class="block mt-1 w-full" type="text" name="deskripsi">{{old('deskripsi')}}</x-text-area>
                                <x-input-error :messages="$errors->get('deskripsi')" class="mt-2" />
                            </div>
                            <x-primary-button class="justify-center mt-4 w-full">
                                {{ __('Submit') }}
                            </x-primary-button>
                           </div>
                        
                        </form>
                </div>
            </div>
            </body>
</x-app-layout>


