    <nav class="bg-[#F8F9FA] text-slate-800 px-6 py-5 flex items-center justify-between border-b border-slate-200">
        
        <!-- Logo & Text (Kiri) -->
        <div class="flex items-center gap-3">
            <span class="font-bold text-xl tracking-tight text-slate-900">Sistem Jadwal Praktikum</span>
        </div>

        <!-- Menu (Desktop) -->
        <div class="hidden md:flex items-center gap-8 font-medium text-sm">
            <a href="{{ route('home') }}" class="text-slate-600 hover:text-slate-900 transition-colors">Home</a>
            <a href="{{ route('jadwal') }}" class="text-slate-600 hover:text-slate-900 transition-colors">Jadwal</a>
            <a href="{{ route('kalender') }}" class="text-slate-600 hover:text-slate-900 transition-colors">Kalender</a>
            <a href="#" class="text-slate-600 hover:text-slate-900 transition-colors">Informasi Ruang</a>
        </div>

        <!-- Auth (Desktop) -->
        <div class="hidden md:flex items-center gap-4 text-sm font-semibold">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-slate-600 hover:text-slate-900 transition-colors">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-slate-600 hover:text-slate-900 transition-colors">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="bg-slate-900 text-white px-5 py-2.5 rounded-full hover:bg-slate-800 transition shadow-sm">Register</a>
                    @endif
                @endauth
            @endif
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden flex items-center">
            <button id="mobile-menu-btn" class="text-slate-600 hover:text-slate-900 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </nav>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="hidden md:hidden bg-white border-b border-slate-200 absolute w-full z-50 shadow-lg">
        <div class="flex flex-col px-6 py-4 space-y-4 font-medium text-sm">
            <a href="{{ route('home') }}" class="text-slate-600 hover:text-slate-900">Home</a>
            <a href="{{ route('jadwal') }}" class="text-slate-600 hover:text-slate-900">Jadwal</a>
            <a href="{{ route('kalender') }}" class="text-slate-600 hover:text-slate-900">Kalender</a>
            <a href="#" class="text-slate-600 hover:text-slate-900">Informasi Ruang</a>
            <hr class="border-slate-100">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-slate-600 hover:text-slate-900">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-slate-600 hover:text-slate-900">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-slate-900 font-bold">Register</a>
                    @endif
                @endauth
            @endif
        </div>
    </div>

    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            var menu = document.getElementById('mobile-menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        });
    </script>