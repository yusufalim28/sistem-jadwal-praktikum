@extends('layouts.admin')

@section('title', 'Jadwal Saya - SJP')
@section('header_title', $role === 'dosen' ? 'Jadwal Mengajar' : 'Jadwal Praktikum Saya')

@section('content')

    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
        <div>
            <h1 class="text-2xl font-bold text-slate-900">
                {{ $role === 'dosen' ? 'Jadwal Mengajar' : 'Jadwal Praktikum Saya' }}
            </h1>
            <p class="text-sm text-slate-500 mt-1">
                {{ $role === 'dosen' ? 'Daftar jadwal kelas praktikum yang Anda ampu semester ini.' : 'Daftar jadwal praktikum yang Anda ikuti semester ini.' }}
            </p>
        </div>
        
        <div class="flex gap-2 w-full sm:w-auto">
            <button class="w-full sm:w-auto px-4 py-2 bg-white border border-slate-300 text-slate-700 rounded-xl hover:bg-slate-50 transition shadow-sm font-medium text-sm flex items-center justify-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                Unduh PDF
            </button>
            <a href="{{ route('kalender', ['role' => $role]) }}" class="w-full sm:w-auto px-4 py-2 bg-amber-600 text-white rounded-xl hover:bg-amber-700 transition shadow-sm shadow-amber-600/20 font-medium text-sm flex items-center justify-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                Lihat Kalender
            </a>
        </div>
    </div>

    <!-- Timeline Jadwal per Hari -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        
        <!-- Kolom Kiri: Ringkasan Hari -->
        <div class="lg:col-span-1 space-y-4">
            <div class="bg-white rounded-2xl border border-amber-200 shadow-md p-5 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-amber-50 rounded-full -mr-10 -mt-10"></div>
                <h3 class="font-bold text-lg text-slate-900 mb-1 relative z-10">Hari Ini, Senin</h3>
                <p class="text-sm text-slate-600 mb-3 relative z-10">14 September 2026</p>
                <div class="inline-flex items-center px-3 py-1.5 rounded-lg text-sm font-semibold bg-amber-100 text-amber-800 relative z-10">
                    2 Jadwal Praktikum
                </div>
            </div>
            
            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 hover:border-amber-200 transition">
                <h3 class="font-bold text-slate-900 mb-1">Besok, Selasa</h3>
                <p class="text-sm text-slate-500 mb-3">15 September 2026</p>
                <div class="inline-flex items-center px-3 py-1.5 rounded-lg text-sm font-semibold bg-slate-100 text-slate-600">
                    1 Jadwal Praktikum
                </div>
            </div>
            
            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 hover:border-amber-200 transition">
                <h3 class="font-bold text-slate-900 mb-1">Rabu</h3>
                <p class="text-sm text-slate-500 mb-3">16 September 2026</p>
                <div class="inline-flex items-center px-3 py-1.5 rounded-lg text-sm font-semibold bg-emerald-100 text-emerald-800">
                    Libur (Tidak ada jadwal)
                </div>
            </div>
        </div>
        
        <!-- Kolom Kanan: Detail Jadwal (Card based) -->
        <div class="lg:col-span-2 space-y-4">
            <h3 class="font-bold text-slate-800 text-lg mb-4 flex items-center gap-2">
                <svg class="w-5 h-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                Detail Jadwal Hari Ini
            </h3>
            
            <!-- Item Jadwal 1 -->
            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden flex flex-col md:flex-row group hover:shadow-md transition">
                <!-- Sisi Waktu -->
                <div class="bg-slate-50 border-b md:border-b-0 md:border-r border-slate-200 p-5 md:w-48 flex flex-row md:flex-col justify-between md:justify-center items-center">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-amber-600">08:00</div>
                        <div class="text-xs text-slate-500 font-medium">WIB</div>
                    </div>
                    <div class="hidden md:block h-8 w-px bg-slate-300 my-2"></div>
                    <div class="text-center">
                        <div class="text-lg font-bold text-slate-600">10:30</div>
                        <div class="text-xs text-slate-500 font-medium">WIB</div>
                    </div>
                </div>
                
                <!-- Sisi Info -->
                <div class="p-5 flex-1 relative">
                    <span class="absolute top-5 right-5 inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-emerald-100 text-emerald-800">
                        Sedang Berlangsung
                    </span>
                    
                    <h4 class="text-xl font-bold text-slate-900 mb-1">Pemrograman Web</h4>
                    <div class="text-sm font-medium text-amber-600 mb-3">TI-5A • S1 Teknik Informatika</div>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mt-4">
                        <div class="flex items-center gap-2 text-slate-600 text-sm">
                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span>Lab Komputer 1</span>
                        </div>
                        <div class="flex items-center gap-2 text-slate-600 text-sm">
                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            <span>{{ $role === 'dosen' ? 'Asisten: Budi Santoso' : 'Dosen: Dr. Andi Wijaya' }}</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Item Jadwal 2 -->
            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden flex flex-col md:flex-row group hover:shadow-md transition opacity-80">
                <!-- Sisi Waktu -->
                <div class="bg-slate-50 border-b md:border-b-0 md:border-r border-slate-200 p-5 md:w-48 flex flex-row md:flex-col justify-between md:justify-center items-center">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-slate-600">13:00</div>
                        <div class="text-xs text-slate-500 font-medium">WIB</div>
                    </div>
                    <div class="hidden md:block h-8 w-px bg-slate-300 my-2"></div>
                    <div class="text-center">
                        <div class="text-lg font-bold text-slate-400">15:30</div>
                        <div class="text-xs text-slate-500 font-medium">WIB</div>
                    </div>
                </div>
                
                <!-- Sisi Info -->
                <div class="p-5 flex-1 relative">
                    <span class="absolute top-5 right-5 inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-slate-100 text-slate-600">
                        Akan Datang
                    </span>
                    
                    <h4 class="text-xl font-bold text-slate-900 mb-1">Kecerdasan Buatan</h4>
                    <div class="text-sm font-medium text-amber-600 mb-3">TI-5C • S1 Teknik Informatika</div>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mt-4">
                        <div class="flex items-center gap-2 text-slate-600 text-sm">
                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span>Lab Komputer Dasar</span>
                        </div>
                        <div class="flex items-center gap-2 text-slate-600 text-sm">
                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            <span>{{ $role === 'dosen' ? 'Asisten: Ahmad' : 'Dosen: Prof. Budi' }}</span>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

@endsection
