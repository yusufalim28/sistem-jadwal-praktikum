@extends('layouts.admin')

@section('title', 'Hak Akses & Peran - SJP')
@section('header_title', 'Role & Permission')

@section('content')
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-slate-900">Hak Akses dan Peran</h1>
        <p class="text-sm text-slate-500 mt-1">Konfigurasi batasan modul untuk masing-masing tipe pengguna.</p>
    </div>

    <div class="grid grid-cols-1 xl:grid-cols-4 gap-6">
        
        <!-- List Roles -->
        <div class="xl:col-span-1 space-y-3">
            <div class="bg-amber-50 border border-amber-200 rounded-xl p-4 cursor-pointer relative overflow-hidden group">
                <div class="absolute left-0 top-0 bottom-0 w-1 bg-amber-500"></div>
                <h3 class="font-bold text-slate-900 mb-1">Super Admin</h3>
                <p class="text-xs text-slate-500">Akses penuh sistem</p>
            </div>
            
            <div class="bg-white border border-slate-200 rounded-xl p-4 cursor-pointer hover:border-amber-200 hover:bg-slate-50 transition">
                <h3 class="font-bold text-slate-900 mb-1">Operator</h3>
                <p class="text-xs text-slate-500">Pengelola operasional jadwal</p>
            </div>
            
            <div class="bg-white border border-slate-200 rounded-xl p-4 cursor-pointer hover:border-amber-200 hover:bg-slate-50 transition">
                <h3 class="font-bold text-slate-900 mb-1">Dosen</h3>
                <p class="text-xs text-slate-500">Pengajar praktikum</p>
            </div>
            
            <div class="bg-white border border-slate-200 rounded-xl p-4 cursor-pointer hover:border-amber-200 hover:bg-slate-50 transition">
                <h3 class="font-bold text-slate-900 mb-1">Mahasiswa</h3>
                <p class="text-xs text-slate-500">Peserta praktikum</p>
            </div>
            
            <button class="w-full mt-4 px-4 py-2 bg-slate-100 border border-slate-200 text-slate-600 rounded-xl hover:bg-slate-200 transition font-medium text-sm flex items-center justify-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Tambah Role
            </button>
        </div>
        
        <!-- Detail Permissions -->
        <div class="xl:col-span-3">
            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
                <div class="p-6 border-b border-slate-100 flex justify-between items-center bg-slate-50">
                    <div>
                        <h2 class="text-lg font-bold text-slate-900">Hak Akses: Super Admin</h2>
                        <p class="text-sm text-slate-500">Centang kotak untuk memberikan izin akses modul.</p>
                    </div>
                    <button class="px-5 py-2 bg-amber-600 text-white rounded-xl font-medium hover:bg-amber-700 transition shadow-sm text-sm">
                        Simpan Perubahan
                    </button>
                </div>
                
                <div class="p-6">
                    <div class="space-y-6">
                        <!-- Modul Jadwal -->
                        <div>
                            <h3 class="font-bold text-slate-800 border-b border-slate-200 pb-2 mb-3">Manajemen Jadwal</h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                                <label class="flex items-start gap-2">
                                    <input type="checkbox" checked disabled class="mt-0.5 rounded border-slate-300 text-amber-600 focus:ring-amber-500">
                                    <span class="text-sm text-slate-700">Melihat Semua Jadwal</span>
                                </label>
                                <label class="flex items-start gap-2">
                                    <input type="checkbox" checked disabled class="mt-0.5 rounded border-slate-300 text-amber-600 focus:ring-amber-500">
                                    <span class="text-sm text-slate-700">Membuat Jadwal Baru</span>
                                </label>
                                <label class="flex items-start gap-2">
                                    <input type="checkbox" checked disabled class="mt-0.5 rounded border-slate-300 text-amber-600 focus:ring-amber-500">
                                    <span class="text-sm text-slate-700">Mengedit/Menghapus Jadwal</span>
                                </label>
                            </div>
                        </div>
                        
                        <!-- Modul Data Master -->
                        <div>
                            <h3 class="font-bold text-slate-800 border-b border-slate-200 pb-2 mb-3">Data Master</h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                                <label class="flex items-start gap-2">
                                    <input type="checkbox" checked disabled class="mt-0.5 rounded border-slate-300 text-amber-600 focus:ring-amber-500">
                                    <span class="text-sm text-slate-700">Kelola Ruang & Laboratorium</span>
                                </label>
                                <label class="flex items-start gap-2">
                                    <input type="checkbox" checked disabled class="mt-0.5 rounded border-slate-300 text-amber-600 focus:ring-amber-500">
                                    <span class="text-sm text-slate-700">Kelola Dosen & Mahasiswa</span>
                                </label>
                                <label class="flex items-start gap-2">
                                    <input type="checkbox" checked disabled class="mt-0.5 rounded border-slate-300 text-amber-600 focus:ring-amber-500">
                                    <span class="text-sm text-slate-700">Kelola Mata Kuliah & Kelas</span>
                                </label>
                            </div>
                        </div>
                        
                        <!-- Modul Sistem & Keamanan -->
                        <div>
                            <h3 class="font-bold text-slate-800 border-b border-slate-200 pb-2 mb-3">Sistem & Keamanan (Eksklusif)</h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                                <label class="flex items-start gap-2">
                                    <input type="checkbox" checked disabled class="mt-0.5 rounded border-slate-300 text-amber-600 focus:ring-amber-500">
                                    <span class="text-sm text-slate-700 font-semibold">User Management</span>
                                </label>
                                <label class="flex items-start gap-2">
                                    <input type="checkbox" checked disabled class="mt-0.5 rounded border-slate-300 text-amber-600 focus:ring-amber-500">
                                    <span class="text-sm text-slate-700 font-semibold">Role & Permissions</span>
                                </label>
                            </div>
                            <p class="text-xs text-slate-400 mt-2 italic">*Hanya Super Admin yang secara default diwajibkan memiliki akses ini.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@endsection
