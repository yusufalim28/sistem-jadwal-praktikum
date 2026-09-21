@extends('layouts.admin')

@section('title', 'Informasi Ruang & Laboratorium - SJP')
@section('header_title', 'Informasi Ruang')

@section('content')

    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
        <div>
            <h1 class="text-2xl font-bold text-slate-900">Kelola Ruang & Laboratorium</h1>
            <p class="text-sm text-slate-500 mt-1">Data master ruangan yang digunakan untuk kegiatan praktikum.</p>
        </div>
        
        <button class="w-full sm:w-auto px-4 py-2 bg-amber-600 text-white rounded-xl hover:bg-amber-700 transition shadow-sm shadow-amber-600/20 font-medium text-sm flex items-center justify-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
            Tambah Ruang
        </button>
    </div>

    <!-- Stats Ruangan -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
        <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm">
            <div class="text-sm font-semibold text-slate-500 mb-1">Total Ruang</div>
            <div class="text-2xl font-bold text-slate-900">42</div>
        </div>
        <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm">
            <div class="text-sm font-semibold text-slate-500 mb-1">Lab Komputer</div>
            <div class="text-2xl font-bold text-slate-900">18</div>
        </div>
        <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm">
            <div class="text-sm font-semibold text-slate-500 mb-1">Lab Jaringan</div>
            <div class="text-2xl font-bold text-slate-900">5</div>
        </div>
        <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm">
            <div class="text-sm font-semibold text-slate-500 mb-1">Sedang Digunakan (Kini)</div>
            <div class="text-2xl font-bold text-emerald-600">12</div>
        </div>
    </div>

    <!-- List Ruangan -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        
        <!-- Card Ruang 1 -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden hover:shadow-md transition group">
            <div class="h-32 bg-slate-100 relative">
                <!-- Image placeholder / illustration -->
                <div class="absolute inset-0 bg-gradient-to-br from-amber-100 to-amber-50 opacity-80"></div>
                <svg class="absolute inset-0 w-full h-full text-amber-200 opacity-50" fill="currentColor" viewBox="0 0 24 24"><path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                
                <div class="absolute top-3 right-3">
                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-bold bg-emerald-500 text-white shadow-sm">
                        Tersedia
                    </span>
                </div>
            </div>
            
            <div class="p-5">
                <div class="flex justify-between items-start mb-2">
                    <div>
                        <h3 class="font-bold text-lg text-slate-900">Lab Komputer Dasar</h3>
                        <p class="text-xs text-slate-500 font-medium mt-0.5">Lantai 1 - Gedung Fakultas Teknik</p>
                    </div>
                </div>
                
                <div class="flex items-center gap-4 mt-4 text-sm text-slate-600">
                    <div class="flex items-center gap-1.5" title="Kapasitas">
                        <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        <span>40 PC</span>
                    </div>
                    <div class="flex items-center gap-1.5" title="Fasilitas">
                        <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        <span>Proyektor, AC</span>
                    </div>
                </div>
                
                <div class="mt-5 pt-4 border-t border-slate-100 flex justify-between items-center">
                    <span class="text-xs text-slate-500 font-medium">Pengelola: PUSTIKOM</span>
                    <div class="flex gap-2">
                        <button class="text-amber-600 hover:text-amber-800 font-medium text-xs">Edit</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card Ruang 2 -->
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden hover:shadow-md transition group">
            <div class="h-32 bg-slate-100 relative">
                <div class="absolute inset-0 bg-gradient-to-br from-amber-100 to-amber-50 opacity-80"></div>
                <svg class="absolute inset-0 w-full h-full text-amber-200 opacity-50" fill="currentColor" viewBox="0 0 24 24"><path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                
                <div class="absolute top-3 right-3">
                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-bold bg-rose-500 text-white shadow-sm">
                        Dipakai
                    </span>
                </div>
            </div>
            
            <div class="p-5">
                <div class="flex justify-between items-start mb-2">
                    <div>
                        <h3 class="font-bold text-lg text-slate-900">Lab Jaringan Cisco</h3>
                        <p class="text-xs text-slate-500 font-medium mt-0.5">Lantai 2 - Gedung Fakultas Teknik</p>
                    </div>
                </div>
                
                <div class="flex items-center gap-4 mt-4 text-sm text-slate-600">
                    <div class="flex items-center gap-1.5" title="Kapasitas">
                        <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        <span>30 PC</span>
                    </div>
                    <div class="flex items-center gap-1.5" title="Fasilitas">
                        <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        <span>Router Cisco, Switch</span>
                    </div>
                </div>
                
                <div class="mt-5 pt-4 border-t border-slate-100 flex justify-between items-center">
                    <span class="text-xs text-slate-500 font-medium">Pengelola: Prodi TI</span>
                    <div class="flex gap-2">
                        <button class="text-amber-600 hover:text-amber-800 font-medium text-xs">Edit</button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

@endsection
