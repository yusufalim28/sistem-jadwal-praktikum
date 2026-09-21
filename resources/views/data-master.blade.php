@extends('layouts.admin')

@section('title', 'Data Master - SJP')
@section('header_title', 'Kelola Data Master')

@section('content')

    <div class="mb-6">
        <h1 class="text-2xl font-bold text-slate-900">Data Master</h1>
        <p class="text-sm text-slate-500 mt-1">Kelola entitas data utama seperti Mahasiswa, Dosen, Kelas, dan Mata Kuliah.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        
        <!-- Mata Kuliah -->
        <a href="#" class="bg-white rounded-2xl border border-slate-200 p-6 shadow-sm hover:shadow-md hover:border-amber-300 transition group block">
            <div class="w-14 h-14 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
            </div>
            <h3 class="font-bold text-lg text-slate-900 mb-1">Mata Kuliah Praktikum</h3>
            <p class="text-sm text-slate-500 mb-4">Kelola daftar mata kuliah, bobot SKS, dan prasyarat.</p>
            <div class="flex items-center text-amber-600 font-medium text-sm">
                <span>Kelola Data</span>
                <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </div>
        </a>

        <!-- Dosen -->
        <a href="#" class="bg-white rounded-2xl border border-slate-200 p-6 shadow-sm hover:shadow-md hover:border-amber-300 transition group block">
            <div class="w-14 h-14 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            </div>
            <h3 class="font-bold text-lg text-slate-900 mb-1">Dosen Pengampu</h3>
            <p class="text-sm text-slate-500 mb-4">Data dosen, NIP, serta mata kuliah yang diampu.</p>
            <div class="flex items-center text-amber-600 font-medium text-sm">
                <span>Kelola Data</span>
                <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </div>
        </a>

        <!-- Mahasiswa -->
        <a href="#" class="bg-white rounded-2xl border border-slate-200 p-6 shadow-sm hover:shadow-md hover:border-amber-300 transition group block">
            <div class="w-14 h-14 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
            </div>
            <h3 class="font-bold text-lg text-slate-900 mb-1">Mahasiswa</h3>
            <p class="text-sm text-slate-500 mb-4">Kelola data mahasiswa aktif, NIM, dan program studi.</p>
            <div class="flex items-center text-amber-600 font-medium text-sm">
                <span>Kelola Data</span>
                <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </div>
        </a>

        <!-- Asisten Praktikum -->
        <a href="#" class="bg-white rounded-2xl border border-slate-200 p-6 shadow-sm hover:shadow-md hover:border-amber-300 transition group block">
            <div class="w-14 h-14 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            </div>
            <h3 class="font-bold text-lg text-slate-900 mb-1">Asisten Praktikum</h3>
            <p class="text-sm text-slate-500 mb-4">Atur asisten yang ditugaskan pada setiap mata kuliah praktikum.</p>
            <div class="flex items-center text-amber-600 font-medium text-sm">
                <span>Kelola Data</span>
                <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </div>
        </a>

        <!-- Kelas Mahasiswa -->
        <a href="#" class="bg-white rounded-2xl border border-slate-200 p-6 shadow-sm hover:shadow-md hover:border-amber-300 transition group block">
            <div class="w-14 h-14 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
            </div>
            <h3 class="font-bold text-lg text-slate-900 mb-1">Data Kelas</h3>
            <p class="text-sm text-slate-500 mb-4">Kelola pembagian rombongan belajar (rombel) atau kelas mahasiswa.</p>
            <div class="flex items-center text-amber-600 font-medium text-sm">
                <span>Kelola Data</span>
                <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </div>
        </a>
        
        <!-- Kalender Akademik -->
        <a href="#" class="bg-white rounded-2xl border border-slate-200 p-6 shadow-sm hover:shadow-md hover:border-amber-300 transition group block">
            <div class="w-14 h-14 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            </div>
            <h3 class="font-bold text-lg text-slate-900 mb-1">Kalender Akademik</h3>
            <p class="text-sm text-slate-500 mb-4">Konfigurasi hari libur, masa ujian, dan batas perkuliahan.</p>
            <div class="flex items-center text-amber-600 font-medium text-sm">
                <span>Kelola Data</span>
                <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </div>
        </a>

    </div>

@endsection
