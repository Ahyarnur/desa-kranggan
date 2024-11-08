<x-tail/>
<body class="bg-abu text-sm">
<x-nav withoutBg/>
<section class="bg-center bg-no-repeat bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg')] bg-gray-700 bg-blend-multiply -mt-20">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Selamat Datang Di Desa Kranggan</h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Kranggan adalah desa di kecamatan Pekuncen, Banyumas, Jawa Tengah, Indonesia. Desa Desa Kranggan merupakan desa dengan luas wilayah terkecil di kecamatan Pekuncen sehingga hanya memiliki dua wilayah pedukuhan saja.</p>
        
    </div>
</section>
    <main class="container mx-auto py-10 px-4">
        <section class="mt-12">
            <h3 class="text-3xl font-bold text-gray-800 mb-6">Berita Terbaru</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Berita Item 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ url('humam.jpeg') }}" alt="bingung" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Judul Berita 1</h4>
                        <p class="text-gray-600 mb-4">Lorem ipsum dolor</p>
                        <p class="text-gray-500 text-sm">Penulis: ahyar</p>
                    </div>
                </div>

                <!-- Berita Item 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ url('humam.jpeg') }}" alt="bingung" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Judul Berita 2</h4>
                        <p class="text-gray-600 mb-4">Lorem ipsum dolor sit </p>
                        <p class="text-gray-500 text-sm">Penulis: ahyar</p>
                    </div>
                </div>

                <!-- Berita Item 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ url('humam.jpeg') }}" alt="bingung" class="w-full h-48 object-cover">
                    
                    <div class="p-6">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Judul Berita 3</h4>
                        <p class="text-gray-600 mb-4">Lorem ipsum dolor sit ?</p>
                        <p class="text-gray-500 text-sm">Penulis: ahyar</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ url('humam.jpeg') }}" alt="bingung" class="w-full h-48 object-cover">
                    
                    <div class="p-6">
                        <h4 class="text-xl font-semibold text-gray-800 mb-2">Judul Berita 3</h4>
                        <p class="text-gray-600 mb-4">Lorem ipsum dolor sit ?</p>
                        <p class="text-gray-500 text-sm">Penulis: ahyar</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="container mx-auto py-10 px-4">
            <h2 class="text-2xl font-semibold text-gray-800 mb-8 text-center mt-32">Lokasi dan Kontak Balai Desa Kranggan</h2>
            
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
            if (window.scrollY > 50) {
              navbar.classList.remove('bg-transparent');
              navbar.classList.add('bg-nav');
            } else {
              navbar.classList.remove('bg-nav');
              navbar.classList.add('bg-transparent');
            }
          });
    </script>
</body>