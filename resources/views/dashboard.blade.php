@extends('layouts.admin')

@section('title', 'Dashboard - ' . ucfirst($role))
@section('header_title', 'Dashboard')

@section('content')
    <!-- Statistik Berdasarkan Role -->
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
        
        @if($role === 'admin' || $role === 'operator')
            <!-- Admin Stats -->
            <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4 hover:shadow-md transition">
                <div class="w-10 h-10 bg-emerald-50 text-emerald-600 rounded-xl flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>
                <div>
                    <div class="text-xs sm:text-sm font-semibold text-slate-500 mb-0.5">Total Jadwal</div>
                    <div class="text-lg sm:text-2xl font-bold text-slate-900">1,248</div>
                </div>
            </div>
            <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4 hover:shadow-md transition">
                <div class="w-10 h-10 bg-emerald-50 text-emerald-600 rounded-xl flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
                <div>
                    <div class="text-xs sm:text-sm font-semibold text-slate-500 mb-0.5">Mahasiswa</div>
                    <div class="text-lg sm:text-2xl font-bold text-slate-900">4,532</div>
                </div>
            </div>
            <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4 hover:shadow-md transition">
                <div class="w-10 h-10 bg-emerald-50 text-emerald-600 rounded-xl flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                </div>
                <div>
                    <div class="text-xs sm:text-sm font-semibold text-slate-500 mb-0.5">Ruang/Lab</div>
                    <div class="text-lg sm:text-2xl font-bold text-slate-900">42</div>
                </div>
            </div>
            <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4 hover:shadow-md transition">
                <div class="w-10 h-10 bg-emerald-50 text-emerald-600 rounded-xl flex items-center justify-center shrink-0 relative">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    <span class="absolute -top-1 -right-1 w-2.5 h-2.5 bg-red-500 rounded-full border-2 border-white"></span>
                </div>
                <div>
                    <div class="text-xs sm:text-sm font-semibold text-slate-500 mb-0.5">Pengajuan</div>
                    <div class="text-lg sm:text-2xl font-bold text-slate-900">12</div>
                </div>
            </div>
        @elseif($role === 'dosen')
            <!-- Dosen Stats -->
            <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4 hover:shadow-md transition">
                <div class="w-10 h-10 bg-emerald-50 text-emerald-600 rounded-xl flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>
                <div>
                    <div class="text-xs sm:text-sm font-semibold text-slate-500 mb-0.5">Jadwal Ajar</div>
                    <div class="text-lg sm:text-2xl font-bold text-slate-900">8</div>
                </div>
            </div>
            <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4 hover:shadow-md transition">
                <div class="w-10 h-10 bg-emerald-50 text-emerald-600 rounded-xl flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
                <div>
                    <div class="text-xs sm:text-sm font-semibold text-slate-500 mb-0.5">Mhs Ajar</div>
                    <div class="text-lg sm:text-2xl font-bold text-slate-900">320</div>
                </div>
            </div>
            <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4 hover:shadow-md transition">
                <div class="w-10 h-10 bg-emerald-50 text-emerald-600 rounded-xl flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                </div>
                <div>
                    <div class="text-xs sm:text-sm font-semibold text-slate-500 mb-0.5">Disetujui</div>
                    <div class="text-lg sm:text-2xl font-bold text-slate-900">2</div>
                </div>
            </div>
        @elseif($role === 'mahasiswa')
            <!-- Mahasiswa Stats -->
            <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4 hover:shadow-md transition">
                <div class="w-10 h-10 bg-emerald-50 text-emerald-600 rounded-xl flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                </div>
                <div>
                    <div class="text-xs sm:text-sm font-semibold text-slate-500 mb-0.5">Mata Kuliah</div>
                    <div class="text-lg sm:text-2xl font-bold text-slate-900">8</div>
                </div>
            </div>
            <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4 hover:shadow-md transition">
                <div class="w-10 h-10 bg-emerald-50 text-emerald-600 rounded-xl flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>
                <div>
                    <div class="text-xs sm:text-sm font-semibold text-slate-500 mb-0.5">Jadwal Hari Ini</div>
                    <div class="text-lg sm:text-2xl font-bold text-slate-900">2</div>
                </div>
            </div>
        @endif
    </div>

    <!-- Quick Info Section -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        
        <!-- Jadwal Hari Ini / Aktivitas Terkini -->
        <div class="lg:col-span-2 bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
            <div class="px-6 py-4 border-b border-slate-200 flex justify-between items-center bg-slate-50/50">
                <h3 class="font-bold text-slate-800">
                    {{ $role === 'admin' ? 'Aktivitas Pengajuan Terkini' : 'Jadwal Hari Ini' }}
                </h3>
                <a href="#" class="text-sm font-medium text-amber-600 hover:text-amber-800">Lihat Semua</a>
            </div>
            <div class="p-0">
                @if($role === 'admin' || $role === 'operator')
                    <!-- Tabel Admin -->
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse text-sm">
                            <thead class="bg-slate-50 text-slate-500">
                                <tr>
                                    <th class="px-6 py-3 font-semibold">Dosen</th>
                                    <th class="px-6 py-3 font-semibold">Perubahan</th>
                                    <th class="px-6 py-3 font-semibold">Status</th>
                                    <th class="px-6 py-3 font-semibold text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                <tr class="hover:bg-slate-50/50">
                                    <td class="px-6 py-3">
                                        <div class="font-medium text-slate-900">Dr. Citra Lestari</div>
                                        <div class="text-xs text-slate-500">Kecerdasan Buatan</div>
                                    </td>
                                    <td class="px-6 py-3 text-slate-600">
                                        Pindah hari ke <span class="font-semibold text-slate-900">Rabu, 08:00</span>
                                    </td>
                                    <td class="px-6 py-3">
                                        <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-yellow-100 text-yellow-800">Menunggu</span>
                                    </td>
                                    <td class="px-6 py-3 text-right">
                                        <button class="text-amber-600 hover:text-amber-900 font-medium text-xs">Review</button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-slate-50/50">
                                    <td class="px-6 py-3">
                                        <div class="font-medium text-slate-900">Budi Santoso, M.Kom.</div>
                                        <div class="text-xs text-slate-500">Pemrograman Web</div>
                                    </td>
                                    <td class="px-6 py-3 text-slate-600">
                                        Pindah ruang ke <span class="font-semibold text-slate-900">Lab Komputer Dasar</span>
                                    </td>
                                    <td class="px-6 py-3">
                                        <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-green-100 text-green-800">Disetujui</span>
                                    </td>
                                    <td class="px-6 py-3 text-right">
                                        <button class="text-amber-600 hover:text-amber-900 font-medium text-xs">Detail</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                @else
                    <!-- List Jadwal User -->
                    <div class="divide-y divide-slate-100">
                        <div class="p-5 hover:bg-slate-50/50 transition flex items-start gap-4">
                            <div class="w-12 h-12 bg-amber-50 text-amber-600 rounded-xl flex flex-col items-center justify-center shrink-0">
                                <span class="text-xs font-bold">08:00</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900">Pemrograman Web Lanjut</h4>
                                <p class="text-sm text-slate-500 mt-1 flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                    Lab Komputer Dasar
                                </p>
                            </div>
                        </div>
                        <div class="p-5 hover:bg-slate-50/50 transition flex items-start gap-4">
                            <div class="w-12 h-12 bg-slate-50 text-slate-600 rounded-xl flex flex-col items-center justify-center shrink-0 border border-slate-200">
                                <span class="text-xs font-bold">13:00</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900">Jaringan Komputer Dasar</h4>
                                <p class="text-sm text-slate-500 mt-1 flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                    Lab Jaringan 1
                                </p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <!-- Info Card -->
        <div class="bg-gradient-to-br from-slate-900 to-slate-800 rounded-2xl shadow-sm overflow-hidden text-white p-6 relative">
            <h3 class="font-bold text-lg mb-2 relative z-10">Pengumuman Sistem</h3>
            <p class="text-sm text-slate-300 relative z-10 leading-relaxed">
                Jadwal Praktikum Semester Ganjil 2026/2027 telah dirilis. Harap periksa kembali jadwal Anda dan hubungi operator jika terdapat bentrok.
            </p>
            <div class="mt-6 relative z-10">
                <button class="px-4 py-2 bg-white/10 hover:bg-white/20 border border-white/20 rounded-lg text-sm font-medium transition backdrop-blur-sm">Lihat Detail</button>
            </div>
            
            <svg class="absolute bottom-0 right-0 w-32 h-32 text-slate-700/50 transform translate-x-8 translate-y-8" fill="currentColor" viewBox="0 0 24 24"><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 100-16 8 8 0 000 16zm-1-5h2v2h-2v-2zm0-8h2v6h-2V7z"></path></svg>
        </div>

    </div>

@endsection
