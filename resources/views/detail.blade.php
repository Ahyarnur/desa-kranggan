<x-tail/>
<body>
    <x-nav/>

    <section class="container mx-auto mt-5 p-6 sm:p-4 bg-white rounded-lg shadow-lg">

        <!-- Article Title -->
        <h1 class="text-3xl sm:text-2xl font-bold text-gray-900 mb-3">{{$detail->judul}}</h1>

        <!-- Metadata (Date, Author) -->
        <div class="flex flex-wrap sm:flex-col sm:items-start items-center text-sm text-gray-600 mb-6">
            <div class="flex items-center mb-2 sm:mb-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M2 11H22V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V11ZM17 3H21C21.5523 3 22 3.44772 22 4V9H2V4C2 3.44772 2.44772 3 3 3H7V1H9V3H15V1H17V3Z"></path>
                </svg>
                <span>Diposting {{ \Carbon\Carbon::parse($detail->created_at)->locale('id')->isoFormat('dddd, D MMMM Y')}}</span>
                <span class="mx-2 hidden sm:block">|</span>
                <span>Oleh: {{\App\Models\User::find($detail->user_id)->name}}</span>
            </div>
            
        </div>

        <!-- Article Image -->
        <img src="{{ url('/storage/' . $detail->foto) }}" 
             class="w-full h-[300px] sm:h-[200px] lg:h-[400px] xl:h-[500px] object-cover rounded-lg mb-6">

        <!-- Article Content -->
        <div class="text-base sm:text-sm md:text-lg leading-relaxed text-gray-700">
            <p class="mb-4">
                {{$detail->deskripsi}}
            </p>
        </div>

        <!-- Back to Articles -->
        <div class="mt-10 mb-14 text-center sm:text-left">
            <a href="/berita" class="text-indigo-800 font-medium hover:underline">&larr; Kembali ke Berita</a>
        </div>
    </section>

    <x-footer/>
</body>
