<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Dashboard') - SJP</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts / Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased">
    
    <div class="flex h-screen overflow-hidden">
        
        <!-- Sidebar Component -->
        <!-- Kita oper variabel $role agar sidebar tahu menu apa yang harus ditampilkan -->
        <x-sidebar :role="$role ?? 'admin'" />

        <!-- Main Content Area -->
        <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden">
            
            <!-- Topbar (Header) -->
            <header class="sticky top-0 z-30 flex items-center justify-between px-4 py-4 sm:px-6 bg-white border-b border-slate-200 shadow-sm">
                
                <div class="flex items-center">
                    <!-- Mobile Hamburger Button to toggle sidebar -->
                    <button id="sidebar-toggle" class="lg:hidden text-slate-500 hover:text-slate-700 focus:outline-none mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    </button>
                    <h2 class="text-xl font-bold text-slate-800">@yield('header_title', 'Dashboard')</h2>
                </div>

                <!-- User Profile Dropdown / Top right -->
                <div class="flex items-center gap-4">
                    <!-- Notification Bell -->
                    <button class="text-slate-400 hover:text-amber-600 transition relative">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                        <span class="absolute top-0 right-0 w-2 h-2 bg-red-500 rounded-full border border-white"></span>
                    </button>
                    
                    <!-- Profile Button -->
                    <div class="flex items-center gap-2 cursor-pointer hover:bg-slate-50 p-1.5 rounded-lg transition">
                        <div class="w-8 h-8 rounded-full bg-amber-100 text-amber-700 flex items-center justify-center font-bold text-sm">
                            A
                        </div>
                        <div class="hidden sm:block text-left">
                            <div class="text-sm font-semibold text-slate-700 leading-tight">Admin SJP</div>
                            <div class="text-xs text-slate-500">Super Admin</div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="w-full max-w-7xl mx-auto p-4 sm:p-6 lg:p-8">
                @yield('content')
            </main>
            
        </div>
    </div>

    <!-- Script for mobile sidebar toggle -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarToggle = document.getElementById('sidebar-toggle');
            const sidebar = document.getElementById('admin-sidebar');
            const sidebarOverlay = document.getElementById('sidebar-overlay');
            const sidebarCloseBtn = document.getElementById('sidebar-close-btn');

            function toggleSidebar() {
                sidebar.classList.toggle('-translate-x-full');
                sidebarOverlay.classList.toggle('hidden');
            }

            if (sidebarToggle && sidebar && sidebarOverlay) {
                sidebarToggle.addEventListener('click', toggleSidebar);
                sidebarOverlay.addEventListener('click', toggleSidebar);
                if(sidebarCloseBtn) sidebarCloseBtn.addEventListener('click', toggleSidebar);
            }
        });
    </script>
</body>
</html>
