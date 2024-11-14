<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-2">

        <div class="flex mt-6">
            <h2 class="font-semibold text-xl">Add Products</h2>
            
        </div>


        <div class="mt-4" x-data="{ imageUrl: '/storage/{{$edit->foto}}' }">
            <form enctype="multipart/form-data" action="{{ route('update', ['id'=>$edit])}}" method="post" class="flex gap-8">
                @csrf
                @method('PUT')


                
                <div class="w-1/2">
                    <img :src="imageUrl" class="rounded-md" />
                </div>

                <div class="w-1/2">
                    <div class="mt-4">
                        <x-input-label for="foto"
                         :value="__('foto')" />
                        <x-text-input accept="image/*" id="foto"
                         class="block mt-1 w-full border p-2" 
                         type="file" name="foto" value="{{$edit->foto}}"  @change="imageUrl = URL.createObjectURL($event.target.files[0])" />
                        <x-input-error :messages="$errors->get('foto')" class="mt-2" />
                    </div>
                    
                    <div class="mt-4">
                        <x-input-label for="nama" :value="__('judul')" />
                        <x-text-input id="nama" class="block mt-1 w-full" type="text" name="judul" value="{{$edit->judul}}" required />
                        <x-input-error :messages="$errors->get('judul')" class="mt-2" />
                    </div>
                    
                    <div class="mt-4">
                        <x-input-label for="deskripsi" :value="__('Deskripsi')" />
                        <x-text-area id="deskripsi" class="block mt-1 w-full" type="text" name="deskripsi">{{$edit->deskripsi}}</x-text-area>
                        <x-input-error :messages="$errors->get('deskripsi')" class="mt-2" />
                    </div>


                    <x-primary-button class="justify-center mt-4 w-full">
                        {{ __('Submit') }}
                    </x-primary-button>
                   </div>
                
                </form>
        </div>
    </div>
</x-app-layout>