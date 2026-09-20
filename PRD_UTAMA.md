PRD UTAMA
Sistem Informasi Manajemen Jadwal Praktikum (SJP)

Versi: 1.0
Platform: Web Application
Framework: Laravel 13
Frontend: Blade + Livewire + Tailwind CSS
Database: MySQL
Build Tool: Vite
Repository: Git + GitHub
*anda bisa tools tambahan yang diperlukan tapi ntar kasih tau apa saja yg di tambahkan

1. Ringkasan Produk
Sistem Informasi Manajemen Jadwal Praktikum (SJP) adalah aplikasi berbasis web yang digunakan untuk mengelola, menampilkan, mencari, dan memantau jadwal perkuliahan/praktikum yang menggunakan berbagai ruang di lingkungan universitas.
Sistem dibuat untuk mengatasi permasalahan ketika jadwal perkuliahan/praktikum didistribusikan dalam bentuk dokumen atau PDF berukuran besar yang berisi jadwal berbagai program studi/fakultas.
Mahasiswa maupun pengguna lain harus mencari informasi secara manual berdasarkan mata kuliah, kelas, dosen, hari, jam, dan ruang.

SJP mengubah informasi tersebut menjadi data terstruktur sehingga pengguna dapat:

mencari jadwal;
melakukan filter;
melihat detail jadwal;
melihat jadwal dalam bentuk kalender;
melihat informasi ruang;
mahasiswa melihat jadwal pribadinya;
dosen mengajukan perubahan jadwal;
operator mengelola dan memvalidasi jadwal.
SJP bukan sistem akademik utama.


2. Permasalahan
Permasalahan utama:

2.1 Jadwal sulit dicari
Jadwal yang diberikan dalam bentuk PDF/dokumen besar membuat pengguna harus melakukan pencarian secara manual.

2.2 Informasi tidak terstruktur
Informasi seperti:
mata kuliah;
kelas;
dosen;
hari;
waktu;
ruang;
berada dalam satu dokumen sehingga sulit difilter berdasarkan kebutuhan pengguna.

2.3 Potensi bentrok jadwal
Pengelolaan jadwal secara manual dapat menyebabkan:
satu ruang digunakan dua kelas pada waktu yang sama;
dosen memiliki dua jadwal pada waktu yang sama;
kelas memiliki dua jadwal pada waktu yang sama.

2.4 Perubahan jadwal
Dosen membutuhkan mekanisme formal untuk mengajukan perubahan jadwal tanpa memberikan hak edit langsung terhadap jadwal.

2.5 Mahasiswa kesulitan menemukan jadwal sendiri
Mahasiswa membutuhkan tampilan khusus untuk melihat jadwal yang relevan dengan kelas/semester mereka.

3. Tujuan Sistem
SJP memiliki tujuan:
Mengubah data jadwal menjadi sistem yang terstruktur.
Mempermudah pencarian jadwal.
Menyediakan filter jadwal.
Menyediakan detail jadwal.
Menyediakan tampilan kalender.
Menyediakan informasi ruang.
Menyediakan jadwal pribadi mahasiswa.
Membantu operator mengelola jadwal.
Mencegah bentrok jadwal.
Menyediakan mekanisme pengajuan perubahan jadwal.
Menyediakan kontrol akses berdasarkan role.

4. Target Pengguna
Sistem memiliki 5 kelompok pengguna:
| Role             | Akses                                 |
| ---------------- | ------------------------------------- |
| Public           | Melihat jadwal umum                   |
| Mahasiswa        | Melihat jadwal umum + Jadwal Saya     |
| Dosen            | Melihat jadwal + mengajukan perubahan |
| Operator/Laboran | Mengelola operasional jadwal          |
| Super Admin      | Mengelola seluruh sistem              |


5. Hak Akses
5.1 Public
Tidak perlu login.

Dapat:
melihat jadwal;
mencari jadwal;
filter jadwal;
melihat detail;
melihat kalender;
melihat informasi ruang.

Tidak dapat:
mengubah data;
mengajukan perubahan;
melihat jadwal personal.

5.2 Mahasiswa
Dapat:
login;
melihat jadwal umum;
mencari jadwal;
filter;
melihat detail;
melihat kalender;
melihat Jadwal Saya;
melihat profil.

Tidak dapat:
mengubah jadwal;
menghapus jadwal;
mengajukan perubahan jadwal.

5.3 Dosen
Dapat:
login;
melihat jadwal;
mencari;
filter;
melihat detail;
melihat kalender;
melihat jadwal mengajar;
mengajukan perubahan jadwal;
melihat status pengajuan;
melihat profil.

Tidak dapat:
mengedit jadwal secara langsung;
menghapus jadwal.


5.3 Dosen
Dapat:
login;
melihat jadwal;
mencari;
filter;
melihat detail;
melihat kalender;
melihat jadwal mengajar;
mengajukan perubahan jadwal;
melihat status pengajuan;
melihat profil.

Tidak dapat:
mengedit jadwal secara langsung;
menghapus jadwal.


5.5 Super Admin
Memiliki seluruh akses Operator/Laboran serta:
mengelola pengguna;
mengelola role;
mengelola permission;
mengelola seluruh data master;
mengatur sistem.


6. Modul Sistem
SJP terdiri dari modul:
SJP
│
├── Public
│   ├── Home
│   ├── Jadwal
│   ├── Detail Jadwal
│   ├── Kalender
│   └── Informasi Ruang
│
├── Authentication
│   ├── Login
│   ├── Logout
│   └── Profil
│
├── Mahasiswa
│   └── Jadwal Saya
│
├── Dosen
│   ├── Jadwal Mengajar
│   ├── Pengajuan Perubahan
│   └── Status Pengajuan
│
├── Operator
│   ├── Dashboard
│   ├── Data Master
│   ├── Jadwal
│   ├── Pengajuan
│   ├── Ruang
│   └── Laporan
│
└── Super Admin
    ├── User Management
    ├── Role & Permission
    └── seluruh modul Operator



7. Modul Jadwal
Informasi jadwal minimal mencakup:
mata kuliah;
kelas;
program studi;
dosen;
asisten;
ruang;
hari;
jam mulai;
jam selesai;
semester;
tahun akademik;
status.

Status jadwal:
Terjadwal
Aktif
Dibatalkan
Status final dapat disesuaikan ketika struktur data resmi diperoleh.



8. Pencarian dan Filter
Pengguna dapat mencari berdasarkan:
nama mata kuliah;
kelas;
dosen;
asisten;
ruang.

Filter:
tahun akademik;
semester;
program studi;
hari;
ruang.
Fitur reset filter disediakan.



9. Validasi Bentrok
Sistem harus memvalidasi jadwal sebelum disimpan.
Bentrok diperiksa berdasarkan:

Ruang
Ruang tidak boleh digunakan oleh dua jadwal dalam waktu yang sama.

Kelas
Satu kelas tidak boleh memiliki dua jadwal pada waktu yang sama.

Dosen
Dosen tidak boleh mengajar dua jadwal pada waktu yang sama.

Asisten
Asisten tidak boleh memiliki dua jadwal pada waktu yang sama.
Contoh:
08:00 - 10:00
09:00 - 11:00
→ Bentrok.

Sedangkan:
08:00 - 10:00
10:00 - 12:00
→ Tidak bentrok.


10. Pengajuan Perubahan Jadwal
Dosen tidak mengubah jadwal secara langsung.
Alurnya:
Dosen
  ↓
Pilih Jadwal
  ↓
Ajukan Perubahan
  ↓
Isi perubahan
  ↓
Isi alasan
  ↓
Submit
  ↓
Menunggu
  ↓
Operator/Super Admin
  ↓
Validasi bentrok
  ↓
Approve / Reject

Status:
Menunggu
Disetujui
Ditolak
Jika ditolak, operator harus memberikan catatan/alasan.
Jika disetujui, data jadwal diperbarui berdasarkan pengajuan.



11. Jadwal Saya
Mahasiswa yang login mendapatkan halaman:
Jadwal Saya
Data ditampilkan berdasarkan data mahasiswa yang telah dikaitkan dengan:
program studi;
kelas;
semester;
tahun akademik.
Jadwal Saya tidak boleh menjadi halaman untuk mengedit jadwal.


12. Informasi Ruang
Sistem menyediakan informasi mengenai ruang yang digunakan untuk kegiatan akademik.
Jenis ruang dapat berupa:
Ruang Kelas;
Laboratorium;
Ruang Praktikum;
Ruang Khusus;
jenis lain sesuai data resmi kampus.
Detail atribut ruang belum dikunci sampai data resmi dari pihak terkait diperoleh.


13. Di Luar Scope
Sistem tidak mencakup:
pengumpulan tugas;
presensi;
penilaian;
booking ruangan;
peminjaman alat;
inventaris;
pembayaran;
KRS;
KHS;
e-learning;
chat/forum;
AI penjadwalan otomatis;
sistem akademik utama.
Integrasi API PUSTIKOM juga belum menjadi bagian implementasi saat ini dan dapat dipertimbangkan kemudian jika kebutuhan serta akses resminya sudah tersedia.

Livewire digunakan sebagai pendekatan interaktif frontend. Alpine.js tidak perlu dipasang secara manual untuk kebutuhan awal karena Livewire sudah membawa kebutuhan Alpine pada stack-nya.