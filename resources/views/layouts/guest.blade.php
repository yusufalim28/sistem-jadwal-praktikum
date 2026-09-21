<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Sistem Jadwal Praktikum')</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts / Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
    
    <div class="w-full sm:max-w-md mt-6 px-6 py-8 bg-white shadow-lg shadow-slate-200/50 sm:rounded-3xl border border-slate-100 relative overflow-hidden">
        
        <!-- Decorative Background -->
        <div class="absolute -top-24 -right-24 w-48 h-48 bg-amber-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
        <div class="absolute -bottom-24 -left-24 w-48 h-48 bg-emerald-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
        
        <div class="relative z-10 flex flex-col items-center mb-8">
            <div class="w-16 h-16 bg-amber-500 rounded-2xl flex items-center justify-center shadow-lg shadow-amber-500/30 mb-4">
                <span class="text-white text-2xl font-extrabold tracking-tighter">SJP</span>
            </div>
            <h2 class="text-2xl font-bold text-slate-900 text-center">Selamat Datang Kembali</h2>
            <p class="text-sm text-slate-500 mt-1 text-center">Masuk ke Sistem Jadwal Praktikum</p>
        </div>

        <div class="relative z-10">
            @yield('content')
        </div>
        
    </div>

</body>
</html>
