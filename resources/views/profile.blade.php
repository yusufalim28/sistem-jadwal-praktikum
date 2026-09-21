@extends('layouts.admin')

@section('title', 'Profil Pengguna - ' . ucfirst($role))
@section('header_title', 'Profil Saya')

@section('content')

    <div class="max-w-4xl">
        
        <!-- Profile Header Card -->
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden mb-8">
            <div class="h-32 bg-gradient-to-r from-amber-500 to-amber-600"></div>
            <div class="px-8 pb-8">
                <div class="relative flex justify-between items-end -mt-12 mb-6">
                    <div class="w-24 h-24 rounded-2xl bg-white p-1 shadow-md">
                        <div class="w-full h-full rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center text-3xl font-bold">
                            {{ strtoupper(substr($role, 0, 1)) }}
                        </div>
                    </div>
                    <button class="px-5 py-2 bg-amber-50 text-amber-600 hover:bg-amber-100 font-medium rounded-xl transition text-sm">Ubah Foto</button>
                </div>
                
                <div>
                    <h2 class="text-2xl font-bold text-slate-900">{{ ucfirst($role) }} SJP</h2>
                    <p class="text-slate-500 mb-4">{{ $role }}@sjp.ac.id</p>
                    <div class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-amber-50 text-amber-700 border border-amber-100 uppercase tracking-wider">
                        Role: {{ $role }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Settings Tabs -->
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
            
            <div class="border-b border-slate-200 flex overflow-x-auto hide-scrollbars">
                <button class="px-6 py-4 text-sm font-semibold text-amber-600 border-b-2 border-amber-600 whitespace-nowrap">Informasi Pribadi</button>
                <button class="px-6 py-4 text-sm font-medium text-slate-500 hover:text-slate-700 whitespace-nowrap">Keamanan & Password</button>
                <button class="px-6 py-4 text-sm font-medium text-slate-500 hover:text-slate-700 whitespace-nowrap">Notifikasi</button>
            </div>

            <div class="p-8">
                <form>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1.5">Nama Lengkap</label>
                            <input type="text" value="{{ ucfirst($role) }} SJP" class="w-full rounded-xl border-slate-300 shadow-sm focus:border-amber-500 focus:ring focus:ring-amber-500/20 py-2.5 px-4 transition">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1.5">Nomor Induk (NIM/NIP)</label>
                            <input type="text" value="1234567890" class="w-full rounded-xl border-slate-300 shadow-sm focus:border-amber-500 focus:ring focus:ring-amber-500/20 py-2.5 px-4 transition">
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-slate-700 mb-1.5">Email</label>
                            <input type="email" value="{{ $role }}@sjp.ac.id" class="w-full rounded-xl border-slate-300 shadow-sm focus:border-amber-500 focus:ring focus:ring-amber-500/20 py-2.5 px-4 transition">
                        </div>
                        
                        @if($role === 'mahasiswa')
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1.5">Program Studi</label>
                                <input type="text" value="Teknik Informatika" disabled class="w-full rounded-xl border-slate-200 bg-slate-50 text-slate-500 shadow-sm py-2.5 px-4 cursor-not-allowed">
                                <p class="text-xs text-slate-400 mt-1">Hanya admin yang dapat mengubah program studi.</p>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-1.5">Semester</label>
                                <input type="text" value="5" disabled class="w-full rounded-xl border-slate-200 bg-slate-50 text-slate-500 shadow-sm py-2.5 px-4 cursor-not-allowed">
                            </div>
                        @elseif($role === 'dosen')
                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-slate-700 mb-1.5">Bidang Keahlian</label>
                                <input type="text" value="Rekayasa Perangkat Lunak" class="w-full rounded-xl border-slate-300 shadow-sm focus:border-amber-500 focus:ring focus:ring-amber-500/20 py-2.5 px-4 transition">
                            </div>
                        @endif
                    </div>
                    
                    <div class="flex justify-end pt-4 border-t border-slate-100">
                        <button type="button" class="px-6 py-2.5 bg-amber-600 text-white rounded-xl font-medium hover:bg-amber-700 transition shadow-sm shadow-amber-600/20">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
            
        </div>

    </div>

@endsection
