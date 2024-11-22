<x-app-layout>
<div class="container max-w-7xl mx-auto sm:px-6 lg:px-8 px-2 pb-96">
    <p class="flex justify-center font-bold text-3xl mt-20">Halaman Kelola Data</p>

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
                          <td class="flex">
                            <a href="/edit/{{$data->id}}" class="text-lime-500 hover:text-lime-800">
                              <x-bx-edit class="h-6 w-6" />
                            </a>
                            
                            <a href="{{ route('delete', $data->id) }}" class="text-red-600 hover:text-red-800">
                              <x-eos-delete class="h-6 w-6" />
                            </a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
</div>
</x-app-layout>