<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Jadwal Praktikum</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts / Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased">

    <x-nav>
    </x-nav>
    
    <!-- Main Content -->
    <!-- Main Content -->
    <main class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        
        <!-- Hero Section -->
        <section class="relative bg-gray-900 rounded-[2rem] overflow-hidden shadow-sm">
            <!-- Background Image -->
            <div class="absolute inset-0 z-0">
                <img src="{{ asset('img/gedungSIber.jpeg') }}" alt="Gedung Siber" class="w-full h-full object-cover object-center opacity-50">
                <div class="absolute inset-0 bg-gradient-to-r from-gray-900/90 to-transparent"></div>
            </div>
            
            <div class="relative z-10 px-8 py-20 md:py-32 lg:px-16 w-full max-w-3xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white tracking-tight mb-6 leading-tight">
                    Sistem Jadwal<br>Praktikum
                </h1>
                <p class="text-lg md:text-xl text-gray-300 mb-10 leading-relaxed font-light">
                    Sistem Informasi Manajemen Jadwal Praktikum (SJP) membantu Anda menemukan informasi jadwal perkuliahan dan penggunaan ruang dengan data yang selalu up-to-date.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#" class="px-8 py-3.5 bg-white text-gray-900 rounded-full font-medium hover:bg-gray-100 transition shadow-sm flex items-center justify-center gap-2 text-sm">
                        Mulai Cari Jadwal
                    </a>
                </div>
            </div>
        </section>

        <!-- Quick Search / Filter Bar -->
        <section class="mt-12 md:mt-16">
            <h2 class="text-2xl md:text-3xl font-bold text-slate-900 mb-6">Pencarian Cepat</h2>
            <div class="bg-white p-6 rounded-2xl border border-slate-200 flex flex-col md:flex-row gap-4 shadow-sm">
                <div class="flex-1">
                    <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2">Mata Kuliah</label>
                    <input type="text" placeholder="Ketik nama mata kuliah..." class="w-full border-0 border-b-2 border-slate-200 focus:border-slate-900 focus:ring-0 py-2 px-0 bg-transparent transition text-sm">
                </div>
                <div class="flex-1">
                    <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2">Fakultas</label>
                    <select class="w-full border-0 border-b-2 border-slate-200 focus:border-slate-900 focus:ring-0 py-2 px-0 bg-transparent transition text-sm">
                        <option>Semua Fakultas</option>
                        <option>FITK</option>
                        <option>FASYA</option>
                        <option>FDKI</option>
                        <option>FUA</option>
                        <option>FEBI</option>
                        <option>FATHIH</option>
                    </select>
                </div>
                <div class="flex-1">
                    <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2">Program Studi</label>
                    <select class="w-full border-0 border-b-2 border-slate-200 focus:border-slate-900 focus:ring-0 py-2 px-0 bg-transparent transition text-sm">
                        <option>Semua Program Studi</option>
                        <option>Teknik Informatika</option>
                        <option>Sistem Informasi</option>
                        <option>Ilmu Komputer</option>
                    </select>
                </div>
                <div class="flex items-end mt-4 md:mt-0">
                    <button class="w-full md:w-auto px-8 py-3 bg-slate-900 text-white rounded-full font-medium hover:bg-slate-800 transition text-sm">Cari</button>
                </div>
            </div>
        </section>

        <!-- Features / About Section -->
        <section class="py-16 md:py-24 flex flex-col md:flex-row gap-12 md:gap-24">
            <div class="md:w-1/3">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4 tracking-tight">Kenapa Menggunakan SJP?</h2>
                <p class="text-slate-600 text-sm leading-relaxed">Kami menyediakan berbagai fitur untuk memudahkan Anda dalam melihat dan mengelola jadwal praktikum agar proses akademik berjalan lancar dan transparan.</p>
            </div>
            
            <div class="md:w-2/3 grid grid-cols-1 sm:grid-cols-2 gap-8 md:gap-12">
                <div>
                    <h3 class="text-4xl font-bold text-slate-900 mb-2">Terstruktur</h3>
                    <p class="text-slate-600 text-sm">Lihat jadwal berdasarkan program studi, kelas, dan waktu dengan mudah.</p>
                </div>
                <div>
                    <h3 class="text-4xl font-bold text-slate-900 mb-2">Mudah</h3>
                    <p class="text-slate-600 text-sm">Pencarian jadwal spesifik dengan cepat menggunakan fitur canggih.</p>
                </div>
                <div>
                    <h3 class="text-4xl font-bold text-slate-900 mb-2">Akurat</h3>
                    <p class="text-slate-600 text-sm">Informasi ruang kelas dan lab yang selalu up-to-date setiap saat.</p>
                </div>
                <div>
                    <h3 class="text-4xl font-bold text-slate-900 mb-2">Responsif</h3>
                    <p class="text-slate-600 text-sm">Akses dari perangkat apa saja tanpa mengurangi kualitas tampilan.</p>
                </div>
            </div>
        </section>

        <!-- Today's Highlights (Cards style like Catalog) -->
        <section class="py-12 border-t border-slate-200 mb-16">
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-end mb-10 gap-4">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-2 tracking-tight">Jadwal Hari Ini</h2>
                    <p class="text-slate-600 text-sm">Jadwal yang sedang atau akan berlangsung hari ini.</p>
                </div>
                <div class="flex gap-2">
                    <button class="w-10 h-10 rounded-full border border-slate-300 flex items-center justify-center hover:bg-slate-100 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg></button>
                    <button class="w-10 h-10 rounded-full bg-slate-900 text-white flex items-center justify-center hover:bg-slate-800 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></button>
                </div>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-white rounded-[1.5rem] overflow-hidden border border-slate-200 hover:shadow-lg transition-all duration-300 flex flex-col group cursor-pointer">
                    <div class="h-48 bg-slate-100 relative overflow-hidden">
                        <img src="{{ asset('img/gedungSIber.jpeg') }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-white/90 backdrop-blur-sm text-slate-900 text-xs font-bold rounded-full">Sedang Berlangsung</span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex justify-between items-start mb-2">
                            <h4 class="text-lg font-bold text-slate-900 leading-tight">Pemrograman Web Lanjut</h4>
                        </div>
                        <p class="text-sm text-slate-500 mb-4 flex-grow">Kelas TI-3A • Budi Santoso, M.Kom.</p>
                        
                        <div class="flex items-center gap-3 pt-4 border-t border-slate-100 text-sm font-medium text-slate-700">
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                08:00
                            </div>
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                Lab Komputer Dasar
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-[1.5rem] overflow-hidden border border-slate-200 hover:shadow-lg transition-all duration-300 flex flex-col group cursor-pointer">
                    <div class="h-48 bg-slate-100 relative overflow-hidden">
                        <div class="absolute inset-0 bg-slate-200 flex items-center justify-center text-slate-400">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-white/90 backdrop-blur-sm text-slate-900 text-xs font-bold rounded-full">Akan Datang</span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex justify-between items-start mb-2">
                            <h4 class="text-lg font-bold text-slate-900 leading-tight">Jaringan Komputer Dasar</h4>
                        </div>
                        <p class="text-sm text-slate-500 mb-4 flex-grow">Kelas SI-2B • Andi Susanto, M.T.</p>
                        
                        <div class="flex items-center gap-3 pt-4 border-t border-slate-100 text-sm font-medium text-slate-700">
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                10:00
                            </div>
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                Lab Jaringan 1
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-[1.5rem] overflow-hidden border border-slate-200 hover:shadow-lg transition-all duration-300 flex flex-col group cursor-pointer">
                    <div class="h-48 bg-slate-100 relative overflow-hidden">
                        <div class="absolute inset-0 bg-slate-200 flex items-center justify-center text-slate-400">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-white/90 backdrop-blur-sm text-slate-900 text-xs font-bold rounded-full">Akan Datang</span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex justify-between items-start mb-2">
                            <h4 class="text-lg font-bold text-slate-900 leading-tight">Kecerdasan Buatan</h4>
                        </div>
                        <p class="text-sm text-slate-500 mb-4 flex-grow">Kelas TI-5A • Dr. Citra Lestari</p>
                        
                        <div class="flex items-center gap-3 pt-4 border-t border-slate-100 text-sm font-medium text-slate-700">
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                13:00
                            </div>
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                Lab AI & Big Data
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>


</body>
</html>
