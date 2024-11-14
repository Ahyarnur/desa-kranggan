<x-tail/>
<body>
<x-nav/>

<section class="container mx-auto mt-20 p-8 bg-white rounded-lg shadow-lg">

    <!-- Article Title -->
    <h1 class="text-4xl font-bold text-gray-900 mb-2">{{$detail->judul}}</h1>

    <!-- Metadata (Date, Author) -->
    <div class="flex items-center text-sm text-gray-600 mb-6">
        <span>Diposting {{ \Carbon\Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y')}}</span>
        <span class="mx-2">|</span>
        <span>Oleh: {{\App\Models\User::find($detail->user_id)->name}}</span>
    </div>

    <!-- Article Image -->
    <img src="{{ url('/storage/' . $detail->foto) }}" class="w-[1200px] h-[500px] rounded-lg mb-6">

    <!-- Article Content -->
    <div class="text-lg leading-relaxed text-gray-700">
        <p class="mb-4">
           {{$detail->deskripsi}}
</p>

</div>

    <!-- Back to Articles -->
    <div class="mt-10 mb-14">
        <a href="/berita" class="text-indigo-800 font-medium hover:underline">&larr; Kembali ke Artikel Dakwah</a>
    </div>
</section>
    <x-footer/>
</body>