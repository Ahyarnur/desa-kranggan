<x-tail/>
<body class="bg-gray-50 antialiased"> 
<x-nav/>
<style>
    /* Gradien overlay untuk teks */
    .bg-gradient-to-t {
        background: linear-gradient(to top, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.2));
    }

    /* Teks yang berada di atas overlay */
    .carousel-caption h2 {
        font-size: 1.25rem;
        font-weight: bold;
        color: #fff;
    }

    .carousel-caption p {
        font-size: 0.875rem;
        color: #d1d5db;
    }
</style>

    <!-- Kontainer Utama -->
    <div class="container mx-auto p-6 mt-6">
       

        <!-- Header Berita Utama -->
        <div id="latest-carousel" class="relative rounded-lg overflow-hidden shadow-lg" data-carousel="slide">
            <!-- Carousel Wrapper -->
            <div class="relative h-80 md:h-96" data-carousel-inner>
                @foreach ($data as $index => $item)
                <div class="{{ $index == 0 ? 'block' : 'hidden' }} duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ url('/storage/' . $item->foto) }}" class="object-cover w-full h-full" alt="{{ $item->judul }}">
                    <!-- Overlay -->
                    <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black via-transparent to-transparent p-4">
                        <p class="text-sm text-gray-300">{{ $item->created_at->diffForHumans() }}</p>
                        <div class="flex items-center px-3 border-l-4 border-rose-700">
                            
                            <h2 class="text-xl font-bold text-white">{{ $item->judul }}</h2>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        
            <!-- Slider Indicators -->
            {{-- <div class="flex absolute bottom-5 left-1/2 z-30 -translate-x-1/2 space-x-2" data-carousel-indicators>
                @foreach ($data as $index => $item)
                <button type="button" class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition"
                    aria-current="{{ $index == 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}" data-carousel-slide-to="{{ $index }}"></button>
                @endforeach
            </div> --}}
        
            <!-- Slider Controls -->
           
        </div>
        
        
        

        <div class="mb-8 mt-9">
            <div class="px-2 border-l-4 border-rose-700 mb-5">

                <h1 class="text-2xl font-bold text-gray-900">Berita Terbaru</h1>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-4">
                <!-- Berita Utama 1 -->
                @foreach ($data as $item)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="{{ url('/storage/' . $item->foto) }}" alt="Image 1" class="w-full h-40 object-cover">
                    <div class="p-4 flex flex-col justify-between h-36">
                        <a href="/detail/{{ $item->id }}" class="font-semibold text-lg text-gray-800 hover:text-indigo-900">{{ $item->judul }}</a>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" viewBox="0 0 24 24" fill="currentColor"><path d="M2 11H22V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V11ZM17 3H21C21.5523 3 22 3.44772 22 4V9H2V4C2 3.44772 2.44772 3 3 3H7V1H9V3H15V1H17V3Z"></path></svg>   
                                <p class="text-sm text-nav2">{{\App\Models\User::find($item->user_id)->name}}</p>
                            </div>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" viewBox="0 0 24 24" fill="currentColor"><path d="M2 11H22V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V11ZM17 3H21C21.5523 3 22 3.44772 22 4V9H2V4C2 3.44772 2.44772 3 3 3H7V1H9V3H15V1H17V3Z"></path></svg>
                                <p class="text-xs">{{ \Carbon\Carbon::parse($item->created_at)->locale('id')->isoFormat('dddd, D MMMM Y')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach

                <!-- Berita Utama 2 -->
        </div>
        </div>
    </div>
<x-footer/>
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const carousel = document.querySelector('[data-carousel="slide"]');
        let items = carousel.querySelectorAll('[data-carousel-item]');
        let currentIndex = 0;

        function showNextSlide() {
            items[currentIndex].classList.add('hidden');
            items[currentIndex].classList.remove('block');
            currentIndex = (currentIndex + 1) % items.length;
            items[currentIndex].classList.add('block');
            items[currentIndex].classList.remove('hidden');
        }

        // Set interval for automatic slide transition
        setInterval(showNextSlide, 3000); // Change slide every 5 seconds
    });
</script>

</body>