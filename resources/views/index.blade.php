@vite('resources/css/app.css')
<link href="https://fonts.bunny.net/css?family=poppins:400,500,600&display=swap" rel="stylesheet" />
<body class="bg-abu">

    <!-- Header -->
    <x-nav/>



    <!-- Hero Section -->
    

<section class="bg-center bg-no-repeat bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg')] bg-gray-700 bg-blend-multiply">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Selamat Datang Di Desa Kranggan</h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Kranggan adalah desa di kecamatan Pekuncen, Banyumas, Jawa Tengah, Indonesia. Desa Desa Kranggan merupakan desa dengan luas wilayah terkecil di kecamatan Pekuncen sehingga hanya memiliki dua wilayah pedukuhan saja.</p>
        
    </div>
</section>


    <!-- Main Content -->
    <main class="container mx-auto py-10 px-4">

        {{-- <h2 class="text-4xl font-bold text-gray-800 text-center mb-8">Statistik Desa Kranggan</h2>

        <!-- Kependudukan Section -->
        <section class="mb-12">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Kependudukan</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h4 class="text-xl font-semibold text-gray-700">Jumlah Penduduk</h4>
                    <p class="text-2xl font-bold text-green-700 mt-2">1,234</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h4 class="text-xl font-semibold text-gray-700">Laki-laki</h4>
                    <p class="text-2xl font-bold text-green-700 mt-2">678</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h4 class="text-xl font-semibold text-gray-700">Perempuan</h4>
                    <p class="text-2xl font-bold text-green-700 mt-2">556</p>
                </div>
            </div>
        </section>

        <!-- Pendidikan Section -->
        <section class="mb-12">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Pendidikan</h3>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h4 class="text-xl font-semibold text-gray-700">Tidak Sekolah</h4>
                    <p class="text-2xl font-bold text-green-700 mt-2">120</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h4 class="text-xl font-semibold text-gray-700">SD</h4>
                    <p class="text-2xl font-bold text-green-700 mt-2">300</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h4 class="text-xl font-semibold text-gray-700">SMP</h4>
                    <p class="text-2xl font-bold text-green-700 mt-2">250</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h4 class="text-xl font-semibold text-gray-700">SMA</h4>
                    <p class="text-2xl font-bold text-green-700 mt-2">200</p>
                </div>
            </div>
        </section>

        <!-- Pekerjaan Section -->
        <section class="mb-12">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Pekerjaan</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h4 class="text-xl font-semibold text-gray-700">Petani</h4>
                    <p class="text-2xl font-bold text-green-700 mt-2">400</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h4 class="text-xl font-semibold text-gray-700">Pedagang</h4>
                    <p class="text-2xl font-bold text-green-700 mt-2">150</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h4 class="text-xl font-semibold text-gray-700">Karyawan Swasta</h4>
                    <p class="text-2xl font-bold text-green-700 mt-2">220</p>
                </div>
            </div>
        </section>

        <!-- Kondisi Sosial-Ekonomi Section -->
        <section class="mb-12">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Kondisi Sosial Ekonomi</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h4 class="text-xl font-semibold text-gray-700">Pendapatan Rata-Rata</h4>
                    <p class="text-2xl font-bold text-green-700 mt-2">Rp 3,500,000</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h4 class="text-xl font-semibold text-gray-700">Tingkat Kemiskinan</h4>
                    <p class="text-2xl font-bold text-green-700 mt-2">12%</p>
                </div>
            </div>
        </section>
        
        <section>
            <h3 class="text-3xl font-bold text-text mb-4">Tentang Desa</h3>
            <p class="text-gray-700">Kranggan adalah desa di kecamatan Pekuncen, Banyumas, Jawa Tengah, Indonesia. Desa Desa Kranggan merupakan desa dengan luas wilayah terkecil di kecamatan Pekuncen sehingga hanya memiliki dua wilayah pedukuhan saja.</p>
        </section>

        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-10">
            <!-- Statistik Card -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h4 class="text-xl font-bold text-text">Statistik Desa</h4>
                <p class="text-gray-600 mt-2">Informasi tentang statistik kependudukan, pekerjaan, dan kondisi sosial ekonomi masyarakat desa.</p>
            </div>

            <!-- Layanan Card -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h4 class="text-xl font-bold text-text">Layanan Publik</h4>
                <p class="text-gray-600 mt-2">Daftar layanan publik yang tersedia untuk masyarakat, termasuk pengurusan surat dan bantuan sosial.</p>
            </div>

            <!-- Produk Hukum Card -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h4 class="text-xl font-bold text-text">Produk Hukum</h4>
                <p class="text-gray-600 mt-2">Dokumen produk hukum desa, seperti peraturan desa dan keputusan kepala desa.</p>
            </div>

            <!-- Berita Card -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h4 class="text-xl font-bold text-text">Berita Desa</h4>
                <p class="text-gray-600 mt-2">Berita terbaru tentang kegiatan dan perkembangan di Desa Mandong.</p>
            </div>

            <!-- Galeri Card -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h4 class="text-xl font-bold text-text">Galeri Foto</h4>
                <p class="text-gray-600 mt-2">Kumpulan foto kegiatan dan pemandangan di Desa Mandong.</p>
            </div>
        </section> --}}

        <section class="mt-12">
            <h3 class="text-3xl font-bold text-gray-800 mb-6">Berita Terbaru</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Berita Item 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://source.unsplash.com/400x300/?village" alt="Gambar Berita" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Judul Berita 1</h4>
                        <p class="text-gray-600 mb-4">Deskripsi singkat berita yang menarik untuk pembaca, memberikan gambaran awal tentang isi berita ini.</p>
                        <p class="text-gray-500 text-sm">Penulis: John Doe</p>
                    </div>
                </div>

                <!-- Berita Item 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="" alt="Gambar Berita" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Judul Berita 2</h4>
                        <p class="text-gray-600 mb-4">Deskripsi singkat berita yang menarik untuk pembaca, memberikan gambaran awal tentang isi berita ini.</p>
                        <p class="text-gray-500 text-sm">Penulis: Jane Doe</p>
                    </div>
                </div>

                <!-- Berita Item 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://source.unsplash.com/400x300/?community" alt="Gambar Berita" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Judul Berita 3</h4>
                        <p class="text-gray-600 mb-4">Deskripsi singkat berita yang menarik untuk pembaca, memberikan gambaran awal tentang isi berita ini.</p>
                        <p class="text-gray-500 text-sm">Penulis: Alex Doe</p>
                    </div>
                </div>
            </div>
        </section>


        
    </main>
    <x-footer/>
</body>