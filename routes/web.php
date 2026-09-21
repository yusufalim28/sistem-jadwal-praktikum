<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/jadwal', 'jadwal')->name('jadwal');
Route::view('/kalender', 'kalender')->name('kalender');

// Route Dashboard dan Aplikasi (Dilindungi Auth)
Route::middleware(['auth'])->group(function () {
    
    // Redirect ke dashboard otomatis
    Route::get('/home', function() {
        return redirect()->route('dashboard');
    });

    Route::get('/dashboard', function () {
        $role = auth()->user()->roles->first()->name ?? 'mahasiswa';
        return view('dashboard', ['role' => $role]);
    })->name('dashboard');

    Route::get('/profile', function () {
        $role = auth()->user()->roles->first()->name ?? 'mahasiswa';
        return view('profile', ['role' => $role]);
    })->name('profile');

    Route::get('/kelola-jadwal', function () {
        $role = auth()->user()->roles->first()->name ?? 'mahasiswa';
        return view('kelola-jadwal', ['role' => $role]);
    })->name('kelola-jadwal');

    Route::get('/pengajuan-perubahan', function () {
        $role = auth()->user()->roles->first()->name ?? 'mahasiswa';
        return view('pengajuan-perubahan', ['role' => $role]);
    })->name('pengajuan-perubahan');

    Route::get('/informasi-ruang', function () {
        $role = auth()->user()->roles->first()->name ?? 'mahasiswa';
        return view('informasi-ruang', ['role' => $role]);
    })->name('informasi-ruang');

    Route::get('/data-master', function () {
        $role = auth()->user()->roles->first()->name ?? 'mahasiswa';
        return view('data-master', ['role' => $role]);
    })->name('data-master');

    Route::get('/jadwal-personal', function () {
        $role = auth()->user()->roles->first()->name ?? 'mahasiswa';
        return view('jadwal-personal', ['role' => $role]);
    })->name('jadwal-personal');

    Route::get('/detail-jadwal', function () {
        return view('detail-jadwal');
    })->name('detail-jadwal');

    Route::get('/user-management', function () {
        $role = auth()->user()->roles->first()->name ?? 'mahasiswa';
        return view('user-management', ['role' => $role]);
    })->name('user-management');

    Route::get('/role-permission', function () {
        $role = auth()->user()->roles->first()->name ?? 'mahasiswa';
        return view('role-permission', ['role' => $role]);
    })->name('role-permission');
});

// require __DIR__.'/settings.php'; // (Dikomentari sementara karena tidak digunakan)
