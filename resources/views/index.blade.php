<x-tail/>
<x-nav withoutBg logoWhite navWhite/>
<body class="">


<section class="relative bg-center bg-no-repeat bg-[url('/public/ya.png')] bg-zinc-600 bg-blend-multiply -mt-24">
    <!-- Konten Teks -->
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-5xl">
            Selamat Datang Di Desa Kranggan
        </h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-sm sm:px-16 lg:px-48">
            Kranggan adalah desa di kecamatan Pekuncen, Banyumas, Jawa Tengah, Indonesia. Desa Desa Kranggan merupakan desa dengan luas wilayah terkecil di kecamatan Pekuncen sehingga hanya memiliki dua wilayah pedukuhan saja.
        </p>
    </div>

    <!-- SVG Lengkungan Custom -->
    <div class="absolute -bottom-2 left-0 w-full overflow-hidden leading-[0]">
        <svg width="1350" height="45" viewBox="0 0 1920 45" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0.0444336L0 44.9999H1920V0.517933C1821.31 11.6701 1429.87 19.9999 962 19.9999C487.534 19.9999 91.6605 11.4335 0 0.0444336Z" fill="white"/>
        </svg>
    </div>
</section>

        <section class="flex flex-col lg:flex-row justify-center items-center gap-8 min-h-screen pt-28 px-4 lg:px-36">
            <div class="w-full lg:w-1/2 flex justify-center">
                <img src="{{url('leaf1.jpg')}}" alt="" class="rounded-3xl shadow-lg hover:scale-105 transition duration-500 w-96 lg:w-[250px]">
            </div>
            <div class="w-full lg:w-1/2">
                <h2 class="text-3xl text-center font-bold mb-4 text-nav2">Visi</h2>

                <p class="text-lg mt-4 text-neutral-500">"Mewujudkan Desa yang Mandiri, Sejahtera, dan Berbudaya Berbasis pada Kearifan Lokal dan Pembangunan Berkelanjutan"</p
            </div>
        </section>
    
        <!-- Visi Section -->
        <section class="flex flex-col lg:flex-row justify-center items-center gap-10 min-h-screen py-8 mb-24 px-4 bg-nav2 lg:px-36">
            <div class="w-full lg:w-1/2">
                <h2 class="text-3xl text-center font-bold mb-4 text-white pt-16">Misi</h2>
                <ul class="text-lg mt-4 text-text list-disc list-outside">
                    <li class="text-white">
                        Mengembangkan potensi ekonomi desa melalui usaha kecil dan menengah, pertanian, pariwisata, serta industri kreatif berbasis sumber daya lokal.
                    </li>
                    <li class="text-white">
                        Mendorong pembentukan koperasi dan usaha desa (BUMDes) yang berperan aktif dalam meningkatkan pendapatan masyarakat.
                    </li>
                    <li class="text-white">
                        Mengembangkan potensi ekonomi desa melalui usaha kecil dan menengah, pertanian, pariwisata, serta industri kreatif berbasis sumber daya lokal.
                    </li>
                    <li class="mb-36 text-white">
                        Mengembangkan potensi ekonomi desa melalui usaha kecil dan menengah, pertanian, pariwisata, serta industri kreatif berbasis sumber daya lokal.
                    </li>
    
                </ul>
            </div>
            <div class="w-full lg:w-1/2 flex justify-center">
                <img src="{{url('leaf1.jpg')}}" alt="" class="rounded-3xl shadow-lg mb-24 hover:scale-105 transition duration-500 w-96 lg:w-[350px]">
            </div>
        </section>
        
        {{-- <section class=" mx-auto py-10 px-24">
            <h3 class="text-3xl font-bold flex justify-center text-nav2 mb-10">Berita Terbaru</h3>
            <div class=""> --}}
                <!-- Berita Item 1 -->
                {{-- <div class=" grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6"> --}}
                    {{-- <div class="bg-white rounded-lg shadow-lg overflow-hidden">

                        <img  src="{{ url('/storage/' . $data->foto) }}"  class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h4 class="text-xl font-semibold text-gray-800 mb-2">{{$data->judul}}</h4>
                            <p class="text-gray-600 mb-4 line-clamp-2">{{ $data->deskripsi }}</p>
                            <div class="flex justify-between items-center">
                                <p class="text-gray-500 -mb-2 text-sm">Penulis: {{\App\Models\User::find($data->user_id)->name}}</p>
                            <a href="#" class="inline-flex items-center px-2 py-1 text-sm mt-3 font-medium text-center text-white bg-nav2 rounded-lg hover:bg-indigo-900 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                </svg>
                            </a>
                            </div>
                        </div>
                    </div> --}}
                    <section class=" mx-auto py-10 px-24">
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
                </div>
            </div>
       </section>
    
        <div class="container mx-auto py-10 px-24">
            <h2 class="text-2xl font-semibold text-nav2 mb-8 text-center mt-32">Lokasi dan Kontak Balai Desa Kranggan</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
                
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Kontak Kami</h3>
                    <p class="text-gray-600 mb-4">Balai Desa Kranggan, Kec. Pekuncen, Kab. Banyumas</p>
                    
                    <ul class="space-y-3">
                        <li>
                            <strong class="text-gray-700">Alamat:</strong>
                            <p class="text-gray-600">Jl. Raya Kranggan No. 123, Kranggan, Pekuncen, Banyumas, Jawa Tengah</p>
                        </li>
                        <li>
                            <strong class="text-gray-700">Telepon:</strong>
                            <p class="text-gray-600">(+62) 123-456-789</p>
                        </li>
                        <li>
                            <strong class="text-gray-700">Email:</strong>
                            <p class="text-gray-600">info@desa-kranggan.id</p>
                        </li>
                        <li>
                            <strong class="text-gray-700">Jam Operasional:</strong>
                            <p class="text-gray-600">Senin - Jumat, 08:00 - 16:00 WIB</p>
                        </li>
                    </ul>
                </div>
        
                
                <div class=" rounded-lg shadow-lg overflow-hidden">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!4v1730981135572!6m8!1m7!1svpO2zxpszLWuzM-NH2MWzg!2m2!1d-7.33872100130951!2d109.0694498355559!3f110.13256191109394!4f-9.058191244821103!5f0.7820865974627469"
                        width="100%" 
                        height="250" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                    <p class="text-center text-gray-600 mt-4 mb-10">Balai Desa Kranggan, Kec. Pekuncen, Kab. Banyumas</p>
                </div>
            </div>
        
        </div>
    </main>
    <x-footer/>
    <script>
        window.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar');
        const navbarlink = document.getElementById('navbarlink');
        const logoTitle = document.getElementById('logoTitle');
        const logoSubtitle = document.getElementById('logoSubtitle');
        
        if (window.scrollY > 50) {
            // Tambahkan latar belakang putih pada navbar
            navbar.classList.remove('bg-transparent');
            navbar.classList.add('bg-nav');
            navbar.classList.add('shadow-md');
            navbar.classList.add('text-black');
            
            
            // Ubah teks menjadi hitam
            logoTitle.classList.remove('text-white');
            logoTitle.classList.add('text-black');
            logoSubtitle.classList.remove('text-white');
            logoSubtitle.classList.add('text-black');

            navbarlink.classList.add("text-black");
            navbarlink.classList.remove("text-white");
        } else {
            // Kembalikan latar belakang transparan pada navbar
            navbar.classList.remove('bg-nav');
            navbar.classList.remove('shadow-md');
            navbar.classList.add('text-white');
            

            navbar.classList.add('bg-transparent');

            // Kembalikan teks menjadi putih
            logoTitle.classList.remove('text-black');
            logoTitle.classList.add('text-white');
            logoSubtitle.classList.remove('text-black');
            logoSubtitle.classList.add('text-white');

            navbarlink.classList.remove("text-black");
            navbarlink.classList.add("text-white");
        }
    });
    </script>
</body>