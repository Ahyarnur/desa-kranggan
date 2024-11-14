<x-tail/>
<body class="bg-gray-50 antialiased">
<x-nav/>
    <!-- Kontainer Utama -->
    <div class="container mx-auto p-6">
        <!-- Header Berita Utama -->
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-gray-900">Berita Terbaru</h1>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-4">
                <!-- Berita Utama 1 -->
                @foreach ($data as $data)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="{{ url('/storage/' . $data->foto) }}" alt="Image 1" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <a href="/detail/{{ $data->id }}" class="font-semibold text-lg text-gray-800 hover:text-indigo-900">{{ $data->judul }}</a>
                        <div class="flex justify-between items-center">
                            <p class="text-sm text-nav2">{{\App\Models\User::find($data->user_id)->name}}</p>
                        </div>
                    </div>
                </div>
                    @endforeach

                <!-- Berita Utama 2 -->
        </div>
        </div>

        <!-- Section Terkini dan Terpopuler -->
        <div class="flex flex-col md:flex-row gap-8">
            <!-- Kolom Terkini -->
            <div class="w-full md:w-2/3">
                <h2 class="text-xl font-bold text-gray-900 mb-4">Terkini</h2>
                <div class="space-y-4">
                    <!-- Berita Terkini Item -->
                    <div class="flex items-start space-x-4">
                        <img src="https://via.placeholder.com/100x60" alt="Image" class="w-24 h-16 object-cover rounded">
                        <div>
                            <h3 class="font-semibold text-gray-800">Kemenag Kalsel kirim kontingen ke Kemah Pramuka Madrasah Nasional 2024</h3>
                            <p class="text-sm text-gray-600">1 menit lalu</p>
                        </div>
                    </div>
                    <!-- Berita Terkini Item -->
                    <div class="flex items-start space-x-4">
                        <img src="https://via.placeholder.com/100x60" alt="Image" class="w-24 h-16 object-cover rounded">
                        <div>
                            <h3 class="font-semibold text-gray-800">BIG selesaikan pemetaan geospasial dukung strategi iklim Indonesia</h3>
                            <p class="text-sm text-gray-600">5 menit lalu</p>
                        </div>
                    </div>
                    <!-- Tambah berita lainnya seperti di atas -->
                </div>
            </div>

            <!-- Kolom Terpopuler -->
            <div class="w-full md:w-1/3">
                <h2 class="text-xl font-bold text-gray-900 mb-4">Terpopuler</h2>
                <div class="space-y-4">
                    <!-- Berita Terpopuler Item -->
                    <div>
                        <h3 class="font-semibold text-gray-800">Polisi pasang rambu peringatan di jalur tanjakan ekstrem Trenggalek</h3>
                        <p class="text-sm text-gray-600">20 jam lalu</p>
                    </div>
                    <!-- Berita Terpopuler Item -->
                    <div>
                        <h3 class="font-semibold text-gray-800">600 member jadi korban di Superstar Fitness, rugi hingga Rp4,6 miliar</h3>
                        <p class="text-sm text-gray-600">21 jam lalu</p>
                    </div>
                    <!-- Tambah berita terpopuler lainnya seperti di atas -->
                </div>
            </div>
        </div>
    </div>
<x-footer/>
</body>