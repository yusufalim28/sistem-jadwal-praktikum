# Dokumentasi Proses Implementasi Backend

Dokumen ini mencatat tahapan-tahapan pembuatan logika *backend* dan integrasi *database* Sistem Jadwal Praktikum (SJP).

## 1. Setup Awal & Autentikasi
* Waktu: 22 September 2026
* Status: **[In Progress]**
* Pekerjaan yang dilakukan:
  - Konfigurasi file `.env` untuk menggunakan MySQL dengan database `dbsjp_uinssc`.
  - Pembuatan dokumen catatan (*log*) dokumentasi ini.
  - Persiapan instalasi `laravel/fortify` (sebagai headless backend auth) dan `spatie/laravel-permission` (untuk manajemen peran).

## 2. Struktur Database Utama
* Waktu: -
* Status: **[Pending]**
* Rencana Pengerjaan:
  - Membuat *migration* untuk Master Data: Fakultas, Program Studi, Tahun Akademik, Mata Kuliah, Kelas, Ruang.
  - Membuat *migration* untuk Aktor: Dosen, Asisten, Mahasiswa.
  - Membuat *migration* untuk Transaksional: Jadwal (berelasi dengan mata_kuliah, kelas, ruang), Jadwal_Dosen, Pengajuan_Perubahan.

## 3. Role & User Seeder
* Waktu: -
* Status: **[Pending]**
* Rencana Pengerjaan:
  - Membuat *roles*: Super Admin, Operator, Dosen, Mahasiswa menggunakan paket Spatie.
  - Menyuntikkan *dummy accounts* (admin@sjp.ac.id, dll.) melalui `DatabaseSeeder` agar siap diujicobakan.

## 4. Integrasi Frontend Auth
* Waktu: -
* Status: **[Pending]**
* Rencana Pengerjaan:
  - Mengubah tautan tombol 'Log out' di `sidebar.blade.php` agar melakukan request `POST /logout`.
  - Menyesuaikan form pada `auth/login.blade.php` agar menggunakan metode `POST /login` yang disediakan oleh Fortify.
