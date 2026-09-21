<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kalender Akademik & Jadwal - SJP</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts / Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased min-h-screen flex flex-col">

    <x-nav></x-nav>
    
    <!-- Main Content -->
    <main class="flex-grow w-full max-w-7xl mx-auto px-6 py-8 mt-15">
        
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-slate-900 mb-2">Kalender Praktikum</h1>
            <p class="text-slate-600">Lihat jadwal kegiatan praktikum dalam format kalender mingguan atau bulanan.</p>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200 min-h-[600px] flex items-center justify-center">
            <div class="text-center text-slate-500">
                <svg class="w-16 h-16 mx-auto mb-4 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                <h2 class="text-xl font-bold text-slate-700 mb-2">Kalender Sedang Dalam Pengembangan</h2>
                <p>Fitur integrasi kalender penuh akan segera hadir di tahap pengembangan selanjutnya.</p>
            </div>
        </div>
        
    </main>

</body>
</html>
