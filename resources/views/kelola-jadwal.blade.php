@extends('layouts.admin')

@section('title', 'Kelola Jadwal Praktikum - SJP')
@section('header_title', 'Kelola Jadwal Praktikum')

@section('content')

    <!-- Top Action Bar -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
        <div>
            <h1 class="text-2xl font-bold text-slate-900">Jadwal Praktikum</h1>
            <p class="text-sm text-slate-500 mt-1">Kelola semua jadwal praktikum untuk semester aktif.</p>
        </div>
        <div class="flex gap-2 w-full sm:w-auto">
            <button class="w-full sm:w-auto px-4 py-2 bg-white border border-slate-300 text-slate-700 rounded-xl hover:bg-slate-50 transition shadow-sm font-medium text-sm flex items-center justify-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                Export
            </button>
            <button class="w-full sm:w-auto px-4 py-2 bg-amber-600 text-white rounded-xl hover:bg-amber-700 transition shadow-sm shadow-amber-600/20 font-medium text-sm flex items-center justify-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Tambah Jadwal
            </button>
        </div>
    </div>

    <!-- Filters Section -->
    <div class="bg-white p-4 rounded-2xl border border-slate-200 shadow-sm mb-6 flex flex-col md:flex-row gap-4">
        <div class="flex-1 relative">
            <svg class="w-5 h-5 absolute left-3 top-1/2 transform -translate-y-1/2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            <input type="text" placeholder="Cari Mata Kuliah, Dosen, atau Kelas..." class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-300 focus:ring focus:ring-amber-500/20 focus:border-amber-500 transition text-sm">
        </div>
        <select class="md:w-48 py-2.5 px-4 rounded-xl border border-slate-300 focus:ring focus:ring-amber-500/20 focus:border-amber-500 transition text-sm bg-white">
            <option>Semua Program Studi</option>
            <option>Teknik Informatika</option>
            <option>Sistem Informasi</option>
        </select>
        <select class="md:w-36 py-2.5 px-4 rounded-xl border border-slate-300 focus:ring focus:ring-amber-500/20 focus:border-amber-500 transition text-sm bg-white">
            <option>Semua Hari</option>
            <option>Senin</option>
            <option>Selasa</option>
        </select>
    </div>

    <!-- Data Table Card -->
    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse text-sm whitespace-nowrap">
                <thead class="bg-slate-50 border-b border-slate-200 text-slate-500">
                    <tr>
                        <th class="px-6 py-4 font-semibold">Mata Kuliah / Kelas</th>
                        <th class="px-6 py-4 font-semibold">Waktu & Tempat</th>
                        <th class="px-6 py-4 font-semibold">Dosen Pengampu</th>
                        <th class="px-6 py-4 font-semibold">Status</th>
                        <th class="px-6 py-4 font-semibold text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    <!-- Row 1 -->
                    <tr class="hover:bg-slate-50/50 transition">
                        <td class="px-6 py-4">
                            <div class="font-bold text-slate-900">Pemrograman Web</div>
                            <div class="text-xs text-slate-500 mt-1">TI-5A • S1 Teknik Informatika</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="font-medium text-slate-800">Senin, 08:00 - 10:30</div>
                            <div class="text-xs text-slate-500 mt-1">Lab Komputer 1</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="font-medium text-slate-800">Dr. Andi Wijaya</div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-emerald-100 text-emerald-800">
                                Aktif
                            </span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex items-center justify-end gap-2">
                                <button class="p-1.5 text-slate-400 hover:text-amber-600 hover:bg-amber-50 rounded-lg transition" title="Edit">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                </button>
                                <button class="p-1.5 text-slate-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition" title="Hapus">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Row 2 -->
                    <tr class="hover:bg-slate-50/50 transition">
                        <td class="px-6 py-4">
                            <div class="font-bold text-slate-900">Basis Data Lanjut</div>
                            <div class="text-xs text-slate-500 mt-1">SI-3C • S1 Sistem Informasi</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="font-medium text-slate-800">Selasa, 13:00 - 15:30</div>
                            <div class="text-xs text-slate-500 mt-1">Lab Oracle</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="font-medium text-slate-800">Budi Santoso, M.Kom</div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-emerald-100 text-emerald-800">
                                Aktif
                            </span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex items-center justify-end gap-2">
                                <button class="p-1.5 text-slate-400 hover:text-amber-600 hover:bg-amber-50 rounded-lg transition" title="Edit">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                </button>
                                <button class="p-1.5 text-slate-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition" title="Hapus">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Row 3 -->
                    <tr class="hover:bg-slate-50/50 transition">
                        <td class="px-6 py-4">
                            <div class="font-bold text-slate-900">Jaringan Komputer</div>
                            <div class="text-xs text-slate-500 mt-1">TI-5B • S1 Teknik Informatika</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="font-medium text-slate-800">Rabu, 10:00 - 12:30</div>
                            <div class="text-xs text-slate-500 mt-1">Lab Jaringan Cisco</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="font-medium text-slate-800">Diana Rosita, MT</div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-yellow-100 text-yellow-800">
                                Pending (Ubah Jadwal)
                            </span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex items-center justify-end gap-2">
                                <button class="p-1.5 text-slate-400 hover:text-amber-600 hover:bg-amber-50 rounded-lg transition" title="Edit">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                </button>
                                <button class="p-1.5 text-slate-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition" title="Hapus">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <!-- Pagination Placeholder -->
        <div class="px-6 py-4 border-t border-slate-200 flex items-center justify-between">
            <span class="text-sm text-slate-500">Menampilkan 1 hingga 3 dari 45 jadwal</span>
            <div class="flex items-center gap-1">
                <button class="px-3 py-1 rounded-lg border border-slate-200 text-slate-500 hover:bg-slate-50 text-sm disabled:opacity-50" disabled>Sebelumnnya</button>
                <button class="px-3 py-1 rounded-lg bg-amber-600 text-white font-medium text-sm">1</button>
                <button class="px-3 py-1 rounded-lg border border-slate-200 text-slate-700 hover:bg-slate-50 text-sm">2</button>
                <button class="px-3 py-1 rounded-lg border border-slate-200 text-slate-700 hover:bg-slate-50 text-sm">3</button>
                <button class="px-3 py-1 rounded-lg border border-slate-200 text-slate-700 hover:bg-slate-50 text-sm">Selanjutnya</button>
            </div>
        </div>
    </div>

@endsection
