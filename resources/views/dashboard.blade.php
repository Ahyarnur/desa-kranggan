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


                <section class="mb-12 mt-32">
                  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
               
                
                  
                <div class="max-w-sm p-3 bg-white border h-52 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                  <div class="p-4 flex flex-col justify-between h-28">
                    <div class="p-2 rounded-lg ">
                      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">kelola Berita</h5>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lihat data berita yang sudah anda buat disini</p>
                </div>
                <div class="flex ml-1">
                  <a href="/kelola" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      Kelola Data
                      <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                      </svg>
                  </a>
                </div>
                  </div>
                  </div>

                <div class="max-w-sm p-3 bg-white border h-52 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                  <div class="p-4 flex flex-col">
                    <div class="p-2 rounded-lg ">
                      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">kelola Data</h5>
                  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">sesuaikan dan atur data statistik desa anda disini </p>
                </div>
                <div class="flex ml-1">
                  <a href="/datasta" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      Kelola Data Statistik Desa
                      <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                      </svg>
                  </a>
                </div>
                  </div>
                  </div>
                </div>

              </section>
               
                
            </body>
          </x-app-layout>
          <x-footer/>

