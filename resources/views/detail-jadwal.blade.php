@extends('layouts.admin')

@section('title', 'Detail Jadwal Praktikum - SJP')
@section('header_title', 'Detail Jadwal')

@section('content')
    <div class="mb-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <a href="javascript:history.back()" class="text-sm font-medium text-slate-500 hover:text-amber-600 flex items-center gap-1 mb-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Kembali
            </a>
            <h1 class="text-2xl font-bold text-slate-900">Detail Jadwal Praktikum</h1>
        </div>
        
        <div class="flex gap-2">
            @if(isset($role) && ($role === 'admin' || $role === 'operator'))
                <button class="px-4 py-2 bg-white text-amber-600 border border-amber-200 rounded-xl hover:bg-amber-50 transition shadow-sm font-medium text-sm flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                    Edit Jadwal
                </button>
            @elseif(isset($role) && $role === 'dosen')
                <button class="px-4 py-2 bg-amber-600 text-white border border-amber-600 rounded-xl hover:bg-amber-700 transition shadow-sm font-medium text-sm flex items-center gap-2">
                    Ajukan Perubahan
                </button>
            @endif
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        
        <!-- Info Utama -->
        <div class="lg:col-span-2 space-y-6">
            
            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
                <div class="p-6 border-b border-slate-100 flex justify-between items-start">
                    <div>
                        <div class="flex items-center gap-3 mb-2">
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-emerald-100 text-emerald-800">Aktif</span>
                            <span class="text-sm text-slate-500 font-medium">S1 Teknik Informatika</span>
                        </div>
                        <h2 class="text-2xl font-bold text-slate-900 mb-1">Pemrograman Web</h2>
                        <p class="text-slate-500 font-medium">TI-5A • Semester 5 • 3 SKS</p>
                    </div>
                </div>
                
                <div class="p-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                        <div>
                            <div class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Waktu & Tempat</div>
                            <div class="flex flex-col gap-3">
                                <div class="flex items-start gap-3">
                                    <div class="mt-0.5 text-amber-500">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-slate-800">Senin</div>
                                        <div class="text-sm text-slate-500">08:00 - 10:30 WIB</div>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div class="mt-0.5 text-amber-500">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-slate-800">Lab Komputer 1</div>
                                        <div class="text-sm text-slate-500">Lantai 1 Gedung Fakultas Teknik</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <div class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">Pengajar</div>
                            <div class="flex flex-col gap-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-sm font-bold text-slate-600">A</div>
                                    <div>
                                        <div class="font-semibold text-slate-800">Dr. Andi Wijaya</div>
                                        <div class="text-xs text-slate-500">Dosen Pengampu</div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-sm font-bold text-slate-600">B</div>
                                    <div>
                                        <div class="font-semibold text-slate-800">Budi Santoso</div>
                                        <div class="text-xs text-slate-500">Asisten Praktikum</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
                <div class="p-5 border-b border-slate-100">
                    <h3 class="font-bold text-slate-900">Mahasiswa Terdaftar</h3>
                </div>
                <div class="p-5">
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-sm text-slate-500">Total 32 Mahasiswa di Kelas TI-5A</span>
                        <button class="text-sm font-medium text-amber-600 hover:text-amber-700">Lihat Semua</button>
                    </div>
                    
                    <div class="flex flex-wrap gap-2">
                        @for($i=1; $i<=10; $i++)
                            <div class="w-8 h-8 rounded-full bg-slate-200 border-2 border-white flex items-center justify-center text-xs font-bold text-slate-500 -ml-2 first:ml-0" title="Mahasiswa {{ $i }}">
                                {{ $i }}
                            </div>
                        @endfor
                        <div class="w-8 h-8 rounded-full bg-slate-100 border-2 border-white flex items-center justify-center text-xs font-bold text-slate-500 -ml-2" title="Dan 22 lainnya">
                            +22
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
        <!-- Sidebar Detail -->
        <div class="lg:col-span-1 space-y-6">
            
            <!-- Aksi Cepat -->
            <div class="bg-slate-900 text-white rounded-2xl shadow-sm p-6 relative overflow-hidden">
                <div class="absolute -right-4 -top-4 w-24 h-24 bg-amber-500 rounded-full blur-2xl opacity-20"></div>
                <h3 class="font-bold text-lg mb-4 relative z-10">Tindakan</h3>
                
                <div class="space-y-3 relative z-10">
                    <button class="w-full py-2.5 bg-slate-800 hover:bg-slate-700 rounded-xl text-sm font-medium transition text-left px-4 flex justify-between items-center">
                        Unduh Absensi (PDF)
                        <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                    </button>
                    <button class="w-full py-2.5 bg-slate-800 hover:bg-slate-700 rounded-xl text-sm font-medium transition text-left px-4 flex justify-between items-center">
                        Unduh SAP/RPS
                        <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                    </button>
                </div>
            </div>
            
            <!-- Riwayat -->
            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6">
                <h3 class="font-bold text-slate-900 mb-4">Riwayat Perubahan</h3>
                
                <div class="relative pl-4 border-l border-slate-200 space-y-4">
                    <div class="relative">
                        <div class="absolute -left-6 top-1 w-4 h-4 bg-white border-2 border-emerald-500 rounded-full"></div>
                        <div class="text-sm font-bold text-slate-900">Jadwal Dibuat</div>
                        <div class="text-xs text-slate-500">Oleh Admin SJP pada 10 Agt 2026, 09:15</div>
                    </div>
                    <div class="relative">
                        <div class="absolute -left-6 top-1 w-4 h-4 bg-white border-2 border-slate-300 rounded-full"></div>
                        <div class="text-sm font-bold text-slate-900">Perubahan Asisten</div>
                        <div class="text-xs text-slate-500">Oleh Operator pada 25 Agt 2026, 14:20</div>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>

@endsection
