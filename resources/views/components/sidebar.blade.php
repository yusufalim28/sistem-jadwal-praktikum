@props(['role' => 'admin'])

@php
    $menus = [];
    
    // Konfigurasi Menu berdasarkan Role
    if ($role === 'admin') {
        $menus = [
            ['title' => 'Dashboard', 'url' => route('dashboard', ['role' => $role]), 'icon' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6'],
            ['title' => 'Kelola Jadwal', 'url' => route('kelola-jadwal', ['role' => $role]), 'icon' => 'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z'],
            ['title' => 'Pengajuan Perubahan', 'url' => route('pengajuan-perubahan', ['role' => $role]), 'icon' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z'],
            ['title' => 'Informasi Ruang', 'url' => route('informasi-ruang', ['role' => $role]), 'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4'],
            ['title' => 'Data Master', 'url' => route('data-master', ['role' => $role]), 'icon' => 'M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4'],
            ['title' => 'User Management', 'url' => route('user-management', ['role' => $role]), 'icon' => 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z'],
            ['title' => 'Role & Permission', 'url' => route('role-permission', ['role' => $role]), 'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'],
        ];
    } elseif ($role === 'operator') {
        $menus = [
            ['title' => 'Dashboard', 'url' => route('dashboard', ['role' => $role]), 'icon' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6'],
            ['title' => 'Kelola Jadwal', 'url' => route('kelola-jadwal', ['role' => $role]), 'icon' => 'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z'],
            ['title' => 'Pengajuan Perubahan', 'url' => route('pengajuan-perubahan', ['role' => $role]), 'icon' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z'],
            ['title' => 'Informasi Ruang', 'url' => route('informasi-ruang', ['role' => $role]), 'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4'],
            ['title' => 'Data Master', 'url' => route('data-master', ['role' => $role]), 'icon' => 'M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4'],
        ];
    } elseif ($role === 'dosen') {
        $menus = [
            ['title' => 'Dashboard', 'url' => route('dashboard', ['role' => $role]), 'icon' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6'],
            ['title' => 'Jadwal Mengajar', 'url' => route('jadwal-personal', ['role' => $role]), 'icon' => 'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z'],
            ['title' => 'Pengajuan Perubahan', 'url' => route('pengajuan-perubahan', ['role' => $role]), 'icon' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z'],
        ];
    } elseif ($role === 'mahasiswa') {
        $menus = [
            ['title' => 'Dashboard', 'url' => route('dashboard', ['role' => $role]), 'icon' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6'],
            ['title' => 'Jadwal Saya', 'url' => route('jadwal-personal', ['role' => $role]), 'icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253'],
        ];
    }
@endphp

<!-- Mobile Sidebar Overlay -->
<div id="sidebar-overlay" class="fixed inset-0 bg-slate-900/50 z-40 hidden lg:hidden backdrop-blur-sm transition-opacity"></div>

<!-- Sidebar -->
<aside id="admin-sidebar" class="fixed lg:static inset-y-0 left-0 z-50 w-72 bg-[#1e293b] text-slate-300 transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out flex flex-col shadow-2xl lg:shadow-none">
    
    <!-- Sidebar Header (Logo) -->
    <div class="h-16 flex items-center justify-between px-6 bg-slate-900 border-b border-slate-800/50">
        <a href="{{ route('home') }}" class="text-white font-bold text-lg tracking-tight flex items-center gap-2">
            <div class="w-8 h-8 bg-amber-500 rounded-lg flex items-center justify-center shadow-lg shadow-amber-500/30">
                <span class="text-white text-sm font-extrabold">SJP</span>
            </div>
            <span>Jadwal Praktikum</span>
        </a>
        <button id="sidebar-close-btn" class="lg:hidden text-slate-400 hover:text-white">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>
    </div>

    <!-- User Info Brief -->
    <div class="px-6 py-5 border-b border-slate-800/50 flex flex-col items-center text-center">
        <div class="w-16 h-16 rounded-full bg-slate-800 border-2 border-amber-500 flex items-center justify-center text-xl font-bold text-white mb-3 shadow-lg">
            {{ strtoupper(substr($role, 0, 1)) }}
        </div>
        <h3 class="text-white font-semibold text-sm">{{ ucfirst($role) }} User</h3>
        <p class="text-xs text-slate-500 mt-1 uppercase tracking-wider font-bold bg-slate-800 px-2.5 py-0.5 rounded-full">{{ $role }}</p>
    </div>

    <!-- Navigation Links -->
    <div class="flex-1 overflow-y-auto py-4 scrollbar-thin scrollbar-thumb-slate-700">
        <ul class="px-3 space-y-1">
            <li class="px-3 mb-2 text-xs font-semibold text-slate-500 uppercase tracking-wider">Menu Utama</li>
            
            @foreach ($menus as $menu)
                <li>
                    <a href="{{ $menu['url'] }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl transition-all duration-200 
                        {{ request()->url() == $menu['url'] ? 'bg-amber-600 text-white shadow-md shadow-amber-900/50 font-medium' : 'hover:bg-slate-800 hover:text-white text-slate-400' }}">
                        <svg class="w-5 h-5 {{ request()->url() == $menu['url'] ? 'text-white' : 'text-slate-500' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $menu['icon'] }}"></path>
                        </svg>
                        <span class="text-sm">{{ $menu['title'] }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
        
        <!-- Separator -->
        <hr class="border-slate-800 my-4 mx-6">
        
        <ul class="px-3 space-y-1">
            <li class="px-3 mb-2 text-xs font-semibold text-slate-500 uppercase tracking-wider">Pengaturan</li>
            <li>
                <a href="{{ route('profile', ['role' => $role]) }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl transition-all duration-200 
                    {{ request()->url() == route('profile', ['role' => $role]) ? 'bg-amber-600 text-white shadow-md shadow-amber-900/50 font-medium' : 'hover:bg-slate-800 hover:text-white text-slate-400' }}">
                    <svg class="w-5 h-5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    <span class="text-sm">Profil Saya</span>
                </a>
            </li>
        </ul>
    </div>
    
    
    <!-- Logout -->
    <div class="p-4 bg-slate-900 border-t border-slate-800/50 mt-auto">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="w-full flex items-center gap-3 px-3 py-2 text-slate-400 hover:text-red-400 hover:bg-red-500/10 rounded-xl transition cursor-pointer">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                <span class="text-sm font-medium">Log out</span>
            </button>
        </form>
    </div>

</aside>
