@props(['withoutBg' => false, 'logoWhite' => false, 'navWhite' => false])

<header class="{{ $withoutBg ? '' : 'bg-nav' }} sticky top-0 z-50 transition-colors duration-500 ease-in-out" id="navbar">
    <div class="container mx-auto flex justify-between items-center h-20 px-6 lg:px-8">
        <!-- Logo -->
        <div class="flex items-center space-x-2">
            <img src="{{ url('logo.png') }}" alt="" class="h-16 w-16">
            <div>
                <h1 class="text-lg font-bold {{ $logoWhite ? 'text-white' : 'text-black' }} transition-colors duration-300 ease-in-out" id="logoTitle">Desa Kranggan</h1>
                <p class="text-sm {{ $logoWhite ? 'text-white' : 'text-black' }} transition-colors duration-300 ease-in-out" id="logoSubtitle">Kec. Pekuncen, Kab. Banyumas</p>
            </div>
        </div>

        <!-- Navigation Links -->
        <nav class="hidden md:flex space-x-6  {{ $navWhite ? 'text-white' : 'text-black' }} font-medium " id="navbarlink">
            <a href="/index" class="hover:text-nav2  duration-300 relative  cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-gray-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-gray-400 after:origin-center after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%] {{request()->routeIs('index') ? 'text-nav2' : ''}}">Beranda</a>
            <a href="pemerintah" class="hover:text-nav2  duration-300 relative   cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-gray-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-gray-400 after:origin-center after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%] {{ request()->routeIs('pemerintah') ? 'text-nav2' : ''}}">Pemerintahan</a>
            <a href="/statistik" class="hover:text-nav2  duration-300 relative cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-gray-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-gray-400 after:origin-center after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%] {{ request()->routeIs('statistik') ? 'text-nav2' : ''}}">Statistik</a>
            <a href="/layanan" class="hover:text-nav2  duration-300 relative cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-gray-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-gray-400 after:origin-center after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%] {{ request()->routeIs('layanan') ? 'text-nav2' : ''}}">Layanan</a>
            <a href="/berita" class="hover:text-nav2  duration-300 relative  cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-gray-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-gray-400 after:origin-center after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%] {{ request()->routeIs('berita') ? 'text-nav2' : ''}}">Berita</a>
        </nav>

        <!-- Mobile Menu Button -->
        <button id="mobileMenuButton" class="md:hidden {{ $logoWhite ? 'text-white' : 'text-black'}} focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="md:hidden bg-white shadow-lg hidden">
        <nav class="flex flex-col items-start px-6 py-4 space-y-2 text-gray-700">
            <a href="/beranda" class="hover:text-green-600 transition duration-300 w-full">Beranda</a>
            <a href="/pemerintah" class="hover:text-green-600 transition duration-300 w-full">Pemerintahan</a>
            <a href="/statistik" class="hover:text-green-600 transition duration-300 w-full">Statistik</a>
            <a href="/layanan" class="hover:text-green-600 transition duration-300 w-full">Layanan</a>
            <a href="/berita" class="hover:text-green-600 transition duration-300 w-full">Berita</a>
        </nav>
    </div>
</header>
<script>
    // Toggle Mobile Menu
    const mobileMenuButton = document.getElementById('mobileMenuButton');
    const mobileMenu = document.getElementById('mobileMenu');
    
    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        document.getElementById('mobileMenuButton').classList.toggle('!text-black')
        document.getElementById('logoSubtitle').classList.toggle('!text-black')
        document.getElementById('logoTitle').classList.toggle('!text-black')
    });

    
</script>