@extends('layouts.guest')

@section('title', 'Login - Sistem Jadwal Praktikum')

@section('content')
    <form action="{{ route('login') }}" method="POST" class="space-y-5">
        @csrf
        
        <!-- Email Input -->
        <div>
            <label for="email" class="block text-sm font-medium text-slate-700 mb-1.5">Email / Username</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path></svg>
                </div>
                <input id="email" type="email" name="email" required placeholder="nama@sjp.ac.id"
                    class="pl-10 w-full rounded-xl border-slate-300 shadow-sm focus:border-amber-500 focus:ring focus:ring-amber-500/20 py-2.5 px-4 transition text-sm">
            </div>
        </div>

        <!-- Password Input -->
        <div>
            <div class="flex items-center justify-between mb-1.5">
                <label for="password" class="block text-sm font-medium text-slate-700">Password</label>
                <a href="#" class="text-xs font-semibold text-amber-600 hover:text-amber-800 transition">Lupa password?</a>
            </div>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                </div>
                <input id="password" type="password" name="password" required placeholder="••••••••"
                    class="pl-10 w-full rounded-xl border-slate-300 shadow-sm focus:border-amber-500 focus:ring focus:ring-amber-500/20 py-2.5 px-4 transition text-sm">
            </div>
        </div>

        <!-- Remember Me -->
        <div class="flex items-center">
            <input id="remember_me" type="checkbox" class="rounded border-slate-300 text-amber-600 shadow-sm focus:border-amber-300 focus:ring focus:ring-amber-200 focus:ring-opacity-50 h-4 w-4">
            <label for="remember_me" class="ml-2 block text-sm text-slate-600">Ingat saya</label>
        </div>

        <!-- Credentials Note -->
        <div class="pt-2">
            <div class="bg-amber-50/50 p-3 rounded-lg border border-amber-100/50 text-xs text-slate-500 mb-2">
                <span class="font-semibold text-amber-700 block mb-1">Dummy Accounts:</span>
                • admin@sjp.ac.id<br>
                • operator@sjp.ac.id<br>
                • dosen@sjp.ac.id<br>
                • mahasiswa@sjp.ac.id<br>
                <span class="text-slate-400 mt-1 block">(Password: password)</span>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="pt-2">
            <button type="submit" class="w-full py-3 bg-amber-600 hover:bg-amber-700 text-white font-bold rounded-xl shadow-lg shadow-amber-600/30 transition transform hover:-translate-y-0.5">
                Masuk ke Sistem
            </button>
        </div>
        
    </form>
@endsection
