<x-app-layout>
    <div class="flex flex-col items-center justify-center min-h-screen pt-20">
        <h1 class="text-4xl font-bold mb-6 pt-5 text-center">Statistik Data Penduduk</h1>
  
        <div class="bg-white p-6 rounded-md shadow-lg w-full max-w-md flex flex-col">
            <h1 class="font-bold mb-6 text-2xl text-center">Edit Statistik Penduduk</h1>
            <form method="POST" action="/updatesta" class="flex-grow">
                @csrf
                @method('PUT')
                <div class="mb-5">
                    <label for="kategori" class="mb-3 block text-base font-medium text-[#07074D]">
                        Kategori
                    </label>
                    <select name="kategori">
                        @foreach ($statis as $item)
                            <option value="{{$item->id}}">{{$item->kategori}}</option>
                        @endforeach
                    </select>
                </div>
        
                <div class="mb-5">
                    <label for="jumlah" class="mb-3 block text-base font-medium text-[#07074D]">
                        Jumlah
                    </label>
                    
                    <input type="number" id="jumlah" name="jumlah" value=""
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-indigo-600 focus:shadow-md" />
                </div>
        
                <div>
                    <button
                        class="hover:shadow-form w-full rounded-md bg-indigo-600 hover:bg-indigo-700 py-3 px-8 text-center text-base font-semibold text-white outline-none">
                        Update Statistik
                    </button>
                </div>
            </form>
        </div>
        
    </div>

  
  </x-app-layout>