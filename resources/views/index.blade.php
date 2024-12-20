<x-tail/>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<x-nav withoutBg logoWhite navWhite/>
<body class="">


<section class="relative bg-center bg-no-repeat bg-[url('/public/ya.png')] bg-zinc-600 bg-blend-multiply -mt-24">
    <!-- Konten Teks -->
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-5xl md:mt-0 mt-20">
            Selamat Datang Di Desa Kranggan
        </h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-sm sm:px-16 lg:px-48">
            Kranggan adalah desa di kecamatan Pekuncen, Banyumas, Jawa Tengah, Indonesia. Desa Desa Kranggan merupakan desa dengan luas wilayah terkecil di kecamatan Pekuncen sehingga hanya memiliki dua wilayah pedukuhan saja.
        </p>
    </div>

    <!-- SVG Lengkungan Custom -->
    <div class="absolute -bottom-5 md:-bottom-2 left-0 overflow-hidden leading-[0]">
        <svg width="1350" height="45" class="w-full" viewBox="0 0 1920 45" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0.0444336L0 44.9999H1920V0.517933C1821.31 11.6701 1429.87 19.9999 962 19.9999C487.534 19.9999 91.6605 11.4335 0 0.0444336Z" fill="white"/>
        </svg>
    </div>
</section>

        <section class="flex flex-col lg:flex-row justify-center items-center gap-8 min-h-screen pt-28 px-4 lg:px-36">
            <div data-aos="fade-right"
            data-aos-offset="200"
            data-aos-easing="ease-in-sine" class="w-full lg:w-1/2 flex justify-center">
                <img src="{{url('leaf1.jpg')}}" alt="" class="rounded-3xl shadow-lg hover:scale-105 transition duration-500 w-96 lg:w-[250px]">
            </div>
            <div data-aos="fade-left"
            data-aos-offset="200"
            data-aos-easing="ease-in-sine" class="w-full lg:w-1/2">
                <h2 class="text-3xl text-center font-bold mb-4 text-nav2">Visi</h2>

                <p class="text-lg mt-4 text-neutral-500">"Mewujudkan Desa yang Mandiri, Sejahtera, dan Berbudaya Berbasis pada Kearifan Lokal dan Pembangunan Berkelanjutan"</p
            </div>
        </section>
    
        <!-- Visi Section -->
        <section class="flex flex-col lg:flex-row justify-center items-center gap-10 min-h-screen py-8 mb-24 px-4 bg-nav2 lg:px-36">
            <div data-aos="fade-right"
            data-aos-offset="200"
            data-aos-easing="ease-in-sine" class="w-full lg:w-1/2">
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
            <div data-aos="fade-left"
            data-aos-offset="200"
            data-aos-easing="ease-in-sine" class="w-full lg:w-1/2 flex justify-center">
                <img src="{{url('leaf1.jpg')}}" alt="" class="rounded-3xl shadow-lg mb-24 hover:scale-105 transition duration-500 w-96 lg:w-[350px]">
            </div>
        </section>
        <section class=" mx-auto py-10 px-4 md:px-24">
                    <div class="px-3 border-l-4 border-rose-700">
                            <h1 class="text-2xl font-bold text-gray-900 ">Berita Terbaru</h1>
                     </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-4">
                <!-- Berita Utama 1 -->
                @foreach ($data as $data)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="{{ url('/storage/' . $data->foto) }}" alt="Image 1" class="w-full h-44 object-cover">
                    <div class="p-4 flex flex-col justify-between h-40">
                            <a href="/detail/{{ $data->id }}" class="font-semibold text-lg text-gray-800 hover:text-indigo-900">{{ $data->judul }}</a>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" viewBox="0 0 24 24" fill="currentColor"><path d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13Z"></path></svg>
                                    <p class="text-sm text-nav2">{{\App\Models\User::find($data->user_id)->name}}</p>
                                </div>
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" viewBox="0 0 24 24" fill="currentColor"><path d="M2 11H22V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V11ZM17 3H21C21.5523 3 22 3.44772 22 4V9H2V4C2 3.44772 2.44772 3 3 3H7V1H9V3H15V1H17V3Z"></path></svg>
                                    <p class="text-xs">{{ \Carbon\Carbon::parse($data->created_at)->locale('id')->isoFormat('dddd, D MMMM Y')}}</p>
                                </div>
                            </div>

                    </div>
                </div>
                    @endforeach
                </div>
                <div class="flex justify-center mt-8">
                    <a href="/berita">

                        <button class="rounded-lg flex items-center gap-1 bg-nav2 text-white py-1,5 px-3">Lihat Lainnya <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-4 w-4" fill="currentColor"><path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path></svg></button>
                    </a>
                </div>
            </div>
       </section>
    
       <section class="py-16 px-4 sm:px-8 lg:px-24">
        <h2 class="text-2xl font-bold text-nav2 text-center mb-10">Lokasi dan Kontak Balai Desa Kranggan</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-lg sm:text-xl font-semibold text-gray-800 mb-4">Kontak Kami</h3>
                <ul class="text-sm sm:text-base text-gray-600 space-y-2">
                    <li><strong>Alamat:</strong> Jl. Raya Kranggan No. 123, Kranggan, Pekuncen, Banyumas</li>
                    <li><strong>Telepon:</strong> (+62) 123-456-789</li>
                    <li><strong>Email:</strong> info@desa-kranggan.id</li>
                    <li><strong>Jam Operasional:</strong> Senin - Jumat, 08:00 - 16:00 WIB</li>
                </ul>
            </div>
            <div class="rounded-lg shadow-lg overflow-hidden">
                <iframe src="https://www.google.com/maps/embed?pb=!4v1730981135572!6m8!1m7!1svpO2zxpszLWuzM-NH2MWzg!2m2!1d-7.33872100130951!2d109.14876118377414!3f242.39!4f-6.28!5f0.7820865974627469"
                    class="w-full h-64 border-0" allowfullscreen></iframe>
            </div>
        </div>
    </section>
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
</body>