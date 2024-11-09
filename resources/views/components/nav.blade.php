@props(['withoutBg' => false])

<header class="{{ $withoutBg ? '' : 'bg-nav' }} sticky top-0 z-50 transition-colors duration-500 ease-in-out" id="navbar">
    <div class="container mx-auto flex justify-between items-center h-20 px-6 lg:px-8">
        <!-- Logo -->
        <div class="flex items-center space-x-2">
            <img src="{{ url('logo.png') }}" alt="" class="h-16 w-16">
            <div>
                <h1 class="text-lg font-bold text-black transition-colors duration-300 ease-in-out" id="logoTitle">Desa Kranggan</h1>
                <p class="text-sm text-black transition-colors duration-300 ease-in-out" id="logoSubtitle">Kec. Pekuncen, Kab. Banyumas</p>
            </div>
        </div>

        <!-- Navigation Links -->
        <nav class="hidden md:flex space-x-6 text-textnav font-medium" id="navbar">
            <a href="/index" class="hover:text-nav2 transition duration-300 {{request()->routeIs('index') ? 'text-nav2' : ''}}">Beranda</a>
            <a href="pemerintah" class="hover:text-nav2 transition duration-300 {{ request()->routeIs('pemerintah') ? 'text-nav2' : ''}}">Pemerintahan</a>
            <a href="/statistik" class="hover:text-nav2 transition duration-300 {{ request()->routeIs('statistik') ? 'text-nav2' : ''}}">Statistik</a>
            <a href="/layanan" class="hover:text-nav2 transition duration-300 {{ request()->routeIs('layanan') ? 'text-nav2' : ''}}">Layanan</a>
            <a href="#" class="hover:text-amber-400 transition duration-300">Berita</a>
            <a href="#" class="hover:text-amber-400 transition duration-300">Galeri</a>
        </nav>

        <!-- Mobile Menu Button -->
        <button id="mobileMenuButton" class="md:hidden text-neutral-50 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="md:hidden bg-white shadow-lg hidden">
        <nav class="flex flex-col items-start px-6 py-4 space-y-2 text-gray-700">
            <a href="#" class="hover:text-green-600 transition duration-300 w-full">Desa</a>
            <a href="#" class="hover:text-green-600 transition duration-300 w-full">Pemerintahan</a>
            <a href="#" class="hover:text-green-600 transition duration-300 w-full">Statistik</a>
            <a href="#" class="hover:text-green-600 transition duration-300 w-full">Layanan</a>
            <a href="#" class="hover:text-green-600 transition duration-300 w-full">Produk Hukum</a>
            <a href="#" class="hover:text-green-600 transition duration-300 w-full">Berita</a>
            <a href="#" class="hover:text-green-600 transition duration-300 w-full">Galeri</a>
        </nav>
    </div>
</header>
<script>
    // Toggle Mobile Menu
    const mobileMenuButton = document.getElementById('mobileMenuButton');
    const mobileMenu = document.getElementById('mobileMenu');
    
    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    
</script>