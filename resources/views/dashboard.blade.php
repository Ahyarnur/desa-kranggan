<x-app-layout>
    <body class="">
<div class="container max-w-7xl mx-auto sm:px-6 lg:px-8 px-2 pb-96">
                <!-- Header -->
                <div class="bg-white p-6 rounded-lg shadow-md mb-8 mt-14">
                    <h1 class="text-2xl font-bold">Admin Panel - Kelola Berita</h1>
                </div>
                <div class="flex mt-6">
                    <h2 class="font-semibold text-xl">Tambah Berita</h2>
                    
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
                                <x-text-area id="deskripsi" class="block mt-1 w-full" type="text"  name="deskripsi">{{old('deskripsi')}}</x-text-area>
                                <x-input-error :messages="$errors->get('deskripsi')" class="mt-2" />
                            </div>
                            <x-primary-button class="justify-center mt-4 w-full">
                                {{ __('Submit') }}
                            </x-primary-button>
                           </div>
                        
                        </form>
                </div>

               
                <div class="overflow-x-auto mt-24">
                    <table class="table">
                      <!-- head -->
                      <thead>
                        <tr>
                          <th class="border-b border-gray-400">NO</th>
                          <th class="border-b border-gray-400">Foto</th>
                          <th class="border-b border-gray-400">Judul</th>
                          <th class="border-b border-gray-400">Deskripsi</th>
                          <th class="border-b border-gray-400">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($detail as $data)
                        <!-- row 1 -->
                        <tr>
                          <th>{{$data->id}}</th>
                          <td> <img  src="{{ url('/storage/' . $data->foto) }}" class="w-16 h-16 object-cover"></td>
                          <td>{{$data->judul}}</td>
                          <td>{{$data->deskripsi}}</td>
                          <td>
                            <a href="/edit/{{$data->id}}" class="text-lime-500 hover:text-lime-800">
                                Edit
                            </a>
                            <a href="{{ route('delete', $data->id) }}" class="text-red-600 hover:text-red-800">
                                Hapus
                            </a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
            </body>
</x-app-layout>


