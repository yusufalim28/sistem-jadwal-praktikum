Frontend dikerjakan sebelum backend.
Semua data pada tahap awal menggunakan dummy/static data.

1. Tujuan
Membangun seluruh tampilan SJP sehingga:
seluruh halaman sudah dapat divisualisasikan;
navigasi sudah jelas;
komponen sudah konsisten;
responsive;
UX sudah dapat dievaluasi;

sebelum database dan business logic dibuat.

2. Struktur Frontend
Rekomendasi:
resources/
├── css/
│   └── app.css
│
├── js/
│   └── app.js
│
└── views/
    ├── layouts/
    │   ├── admin.blade.php
    │   ├── public.blade.php
    │   └── guest.blade.php
    │
    ├── components/
    │   └── ui/
    │       ├── button.blade.php
    │       ├── badge.blade.php
    │       ├── input.blade.php
    │       ├── select.blade.php
    │       └── modal.blade.php
    │
    └── livewire/
        ├── dashboard.blade.php
        ├── schedule.blade.php
        ├── schedule-detail.blade.php
        ├── calendar.blade.php
        ├── master-data.blade.php
        ├── change-request.blade.php
        ├── room.blade.php
        ├── my-schedule.blade.php
        └── profile.blade.php

Struktur tersebut dapat dirapikan kembali ketika jumlah halaman sudah bertambah.

3. Frontend Development Order
Urutan:
1. Design System
2. Struktur Folder
3. Admin Layout
4. Public Layout
5. Guest/Auth Layout
6. UI Components
7. Dashboard
8. Jadwal
9. Detail Jadwal
10. Kalender
11. Master Data
12. Pengajuan Perubahan
13. Informasi Ruang
14. Jadwal Saya
15. Profil
16. Login
17. Responsive
18. UI Polish


4. Dashboard
Dashboard admin menampilkan:
total jadwal;
total ruang;
total dosen;
total mahasiswa;
pengajuan menunggu;
jadwal hari ini;
ringkasan aktivitas.

5. Halaman Jadwal
Komponen:
Header
Search
Filter
Table
Status
Detail
Pagination

kolom:
Hari & Waktu
Mata Kuliah
Kelas
Ruang
Dosen & Asisten
Status
Aksi

6. Detail Jadwal
Menampilkan:
Mata Kuliah
Kode Mata Kuliah
Kelas
Program Studi
Dosen
Asisten
Hari
Jam
Ruang
Semester
Tahun Akademik
Status


7. Kalender
Tampilan jadwal berdasarkan:
hari;
minggu;
waktu.

Tujuannya memberikan alternatif visual terhadap tabel.

8. Master Data
Frontend menyediakan halaman untuk:
mahasiswa;
dosen;
asisten;
mata kuliah;
kelas;
program studi;
fakultas;
tahun akademik;
ruang.

Struktur final menyesuaikan database.


9. Pengajuan Perubahan
Dosen melihat:
Daftar Pengajuan
Status
Tanggal
Jadwal
Perubahan
Alasan

Form:
Hari baru, jam baru, Ruang baru, Alasan perubahan

Admin: 
Detail pengajuan, Validasi, Approve, Reject, Catatan

10. Jadwal Saya
Mahasiswa melihat:
Jadwal Hari Ini
Jadwal Mingguan
Mata Kuliah
Jam
Ruang
Dosen


11. State UI
Setiap halaman perlu mempertimbangkan:
Normal
Loading
Empty
Error
Success
Validation Error
No Result


12. Frontend Integration
Setelah seluruh desain selesai:
Dummy Data
     ↓
Livewire State
     ↓
Backend Data
     ↓
Database
Jangan langsung membuat query database pada tahap awal frontend.

