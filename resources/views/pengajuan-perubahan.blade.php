@extends('layouts.admin')

@section('title', 'Pengajuan Perubahan Jadwal - SJP')
@section('header_title', 'Pengajuan Perubahan')

@section('content')

    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
        <div>
            <h1 class="text-2xl font-bold text-slate-900">Pengajuan Perubahan Jadwal</h1>
            <p class="text-sm text-slate-500 mt-1">
                @if($role === 'dosen')
                    Ajukan dan pantau status perubahan jadwal mengajar Anda.
                @else
                    Kelola dan validasi permintaan perubahan jadwal dari dosen.
                @endif
            </p>
        </div>
        
        @if($role === 'dosen')
            <button class="w-full sm:w-auto px-4 py-2 bg-amber-600 text-white rounded-xl hover:bg-amber-700 transition shadow-sm shadow-amber-600/20 font-medium text-sm flex items-center justify-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Buat Pengajuan Baru
            </button>
        @endif
    </div>

    @if($role === 'admin' || $role === 'operator')
        <!-- Tabs Status (Admin) -->
        <div class="flex border-b border-slate-200 mb-6 overflow-x-auto hide-scrollbars">
            <button class="px-4 py-3 text-sm font-semibold text-amber-600 border-b-2 border-amber-600 whitespace-nowrap">Menunggu Validasi (3)</button>
            <button class="px-4 py-3 text-sm font-medium text-slate-500 hover:text-slate-700 whitespace-nowrap">Disetujui (12)</button>
            <button class="px-4 py-3 text-sm font-medium text-slate-500 hover:text-slate-700 whitespace-nowrap">Ditolak (4)</button>
            <button class="px-4 py-3 text-sm font-medium text-slate-500 hover:text-slate-700 whitespace-nowrap">Semua Pengajuan</button>
        </div>
    @endif

    <div class="space-y-4">
        
        <!-- Card Pengajuan 1 -->
        <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm flex flex-col md:flex-row gap-6 hover:border-amber-300 transition">
            <div class="flex-1">
                <div class="flex items-center gap-3 mb-2">
                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-yellow-100 text-yellow-800">Menunggu</span>
                    <span class="text-xs text-slate-400 font-medium">Diajukan: 12 Sep 2026, 14:30</span>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-1">Jaringan Komputer - TI-5B</h3>
                
                @if($role === 'admin' || $role === 'operator')
                    <div class="text-sm text-slate-600 mb-4 font-medium flex items-center gap-2">
                        <div class="w-6 h-6 rounded-full bg-slate-100 flex items-center justify-center text-xs font-bold text-slate-600">D</div>
                        Oleh: Diana Rosita, MT
                    </div>
                @endif
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-4 bg-slate-50 p-4 rounded-xl border border-slate-100">
                    <div>
                        <div class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1">Jadwal Awal</div>
                        <div class="text-sm font-medium text-slate-700 line-through decoration-red-400">Rabu, 10:00 - 12:30</div>
                        <div class="text-xs text-slate-500">Lab Jaringan Cisco</div>
                    </div>
                    <div>
                        <div class="text-xs font-semibold text-amber-600 uppercase tracking-wider mb-1">Usulan Perubahan</div>
                        <div class="text-sm font-bold text-emerald-700">Kamis, 13:00 - 15:30</div>
                        <div class="text-xs text-slate-700 font-medium">Lab Jaringan Cisco</div>
                    </div>
                </div>
                
                <div class="mt-4">
                    <div class="text-xs font-semibold text-slate-500 mb-1">Alasan Perubahan:</div>
                    <p class="text-sm text-slate-700">Ada rapat fakultas mendadak yang diwajibkan untuk seluruh dosen prodi Teknik Informatika pada hari Rabu jam 10:00.</p>
                </div>
            </div>
            
            <div class="flex md:flex-col justify-end gap-2 border-t md:border-t-0 md:border-l border-slate-100 pt-4 md:pt-0 md:pl-6 min-w-[150px]">
                @if($role === 'admin' || $role === 'operator')
                    <button class="w-full px-4 py-2 bg-emerald-50 text-emerald-700 border border-emerald-200 rounded-xl hover:bg-emerald-100 transition font-medium text-sm">
                        Setujui
                    </button>
                    <button class="w-full px-4 py-2 bg-white text-red-600 border border-red-200 rounded-xl hover:bg-red-50 transition font-medium text-sm">
                        Tolak
                    </button>
                @else
                    <button class="w-full px-4 py-2 bg-white text-slate-600 border border-slate-200 rounded-xl hover:bg-slate-50 transition font-medium text-sm">
                        Detail
                    </button>
                    <button class="w-full px-4 py-2 bg-white text-red-600 border border-red-200 rounded-xl hover:bg-red-50 transition font-medium text-sm">
                        Batalkan
                    </button>
                @endif
            </div>
        </div>

        <!-- Card Pengajuan 2 (Selesai) -->
        <div class="bg-slate-50/50 p-5 rounded-2xl border border-slate-200 flex flex-col md:flex-row gap-6 opacity-75 hover:opacity-100 transition">
            <div class="flex-1">
                <div class="flex items-center gap-3 mb-2">
                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-emerald-100 text-emerald-800">Disetujui</span>
                    <span class="text-xs text-slate-400 font-medium">Diajukan: 05 Sep 2026, 09:15</span>
                </div>
                <h3 class="font-bold text-lg text-slate-900 mb-1">Pemrograman Web - TI-5A</h3>
                
                @if($role === 'admin' || $role === 'operator')
                    <div class="text-sm text-slate-600 mb-4 font-medium flex items-center gap-2">
                        <div class="w-6 h-6 rounded-full bg-slate-100 flex items-center justify-center text-xs font-bold text-slate-600">A</div>
                        Oleh: Dr. Andi Wijaya
                    </div>
                @endif
                
                <div class="text-sm text-slate-700 mt-2">
                    Perpindahan ruang dari <span class="font-medium line-through">Lab Komputer Dasar</span> ke <span class="font-bold text-emerald-700">Lab Komputer 1</span> karena AC rusak.
                </div>
                
                <div class="mt-4 bg-emerald-50/50 p-3 rounded-lg border border-emerald-100">
                    <div class="text-xs font-semibold text-emerald-800 mb-1">Catatan Admin (Bapak Operator):</div>
                    <p class="text-sm text-emerald-700">Disetujui. Ruang Lab Komputer 1 kosong pada jam tersebut. Jadwal di sistem sudah diperbarui otomatis.</p>
                </div>
            </div>
        </div>

    </div>

@endsection
