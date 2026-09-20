BACKEND & DATABASE

Backend dikerjakan setelah frontend sudah mendapatkan bentuk final.

1. Tujuan
Backend bertanggung jawab terhadap:
database;
autentikasi;
authorization;
CRUD;
validasi;
relasi;
conflict detection;
pengajuan perubahan;
data personal mahasiswa;
integrasi frontend.

2. Database Awal
Entitas utama yang kemungkinan dibutuhkan:
users
fakultas
program_studi
tahun_akademik
mata_kuliah
dosen
asisten
mahasiswa
kelas
ruang
jadwal
jadwal_dosen
jadwal_asisten
pengajuan_perubahan
kegiatan hanya dipertahankan apabila setelah validasi kebutuhan ternyata memang diperlukan.

3. Users
Menyimpan akun autentikasi.
contoh: 
id
name
email
password
timestamps
Role dikelola menggunakan Spatie Permission.

4. Mahasiswa
Relasi dengan:
users, program_studi, kelas
Data detail final mengikuti kebutuhan resmi sistem.

5. Dosen
Relasi dengan:
users
Dosen dapat memiliki banyak jadwal

6. Asisten
Relasi dengan:
users
atau struktur akun terpisah sesuai kebutuhan final.

Asisten dapat memiliki banyak jadwal.

7. Ruang
Konsep ruang dibuat general
Bukan:
Laboratorium
    ↓
Ruang Laboratorium
melainkan:
Ruang
├── Ruang Kelas
├── Laboratorium
├── Ruang Praktikum
└── Ruang lainnya
Hal ini penting karena sistem bukan hanya mengelola laboratorium.
Atribut final ruang akan ditentukan setelah data resmi diperoleh.


8. Jadwal
Entitas utama.
Minimal:
id
mata_kuliah_id
kelas_id
ruang_id
tahun_akademik_id
semester
hari
jam_mulai
jam_selesai
status
timestamps
Relasi dosen/asisten dapat menggunakan tabel pivot:
jadwal_dosen
jadwal_asisten
Tujuannya agar satu jadwal dapat memiliki lebih dari satu dosen/asisten jika diperlukan.


9. Pengajuan Perubahan
Minimal:
id
jadwal_id
dosen_id
hari_baru
jam_mulai_baru
jam_selesai_baru
ruang_baru_id
alasan
status
catatan_admin
diproses_oleh
diproses_at
timestamps
Struktur final akan divalidasi kembali sebelum migration dibuat.


10. Authorization
Spatie Laravel Permission:
Super Admin
Operator
Dosen
Mahasiswa

Permission dapat berupa:
view schedule
create schedule
update schedule
delete schedule

view master data
create master data
update master data
delete master data

view change request
approve change request
reject change request

manage users
manage roles


11. CRUD
Backend CRUD:
Master Data:
Fakultas
Program Studi
Tahun Akademik
Mata Kuliah
Dosen
Asisten
Mahasiswa
Kelas
Ruang

Jadwal:
Create, Read, Update, Delete


12. Conflict Detection
Algoritma backend harus memeriksa overlap.
Secara konsep:
new_start < existing_end
AND
new_end > existing_start
Jika kondisi terpenuhi pada hari dan resource yang sama, maka jadwal bentrok.

Resource: Ruang, Kelas, Dosen, Asisten


13. Pengajuan
Backend:
Dosen membuat pengajuan
        ↓
status = Menunggu
        ↓
Operator melihat
        ↓
Conflict validation
        ↓
Approve / Reject

Approve:
Update jadwal
Update status pengajuan
Simpan processor

Reject:
Status = Ditolak
Simpan catatan


14. Jadwal Saya
Backend mengambil data berdasarkan identitas mahasiswa yang login.

Alurnya:
User
 ↓
Mahasiswa
 ↓
Kelas / Program Studi / Semester
 ↓
Jadwal
 ↓
Jadwal Saya


15. Seeder
Seeder digunakan untuk development.

Dummy data:
Users
Roles
Fakultas
Prodi
Dosen
Asisten
Mahasiswa
Kelas
Mata Kuliah
Ruang
Tahun Akademik
Jadwal
Data dummy bukan data resmi kampus.


16. validation
Backend harus melakukan validasi:

Form
required;
format;
foreign key;
waktu;
status.
Jadwal
jam selesai > jam mulai;
ruang valid;
kelas valid;
dosen valid;
conflict detection.
Pengajuan
jadwal valid;
dosen berhak mengajukan jadwal tersebut;
perubahan valid;
tidak bentrok.


17. Testing Backend
Testing mencakup:
Authentication
Authorization
User
Role
Master Data
Schedule CRUD
Conflict Detection
Change Request
Approval
Rejection
My Schedule

18. Integration
Setelah backend selesai:
Frontend Dummy
      ↓
Livewire
      ↓
Controller / Action
      ↓
Service / Logic
      ↓
Model
      ↓
Database

Kita tidak perlu membuat arsitektur yang terlalu rumit sejak awal. Struktur kode harus tetap mudah dipahami untuk project KP.


19. Production
Tahapan:
Local Development
      ↓
Testing
      ↓
UAT
      ↓
Production Setup
      ↓
Production Database
      ↓
Environment Production
      ↓
Build
      ↓
Deployment
      ↓
Production Testing


20. Urutan Implementasi Keseluruhan
Dengan PRD ini, workflow kita berubah menjadi:
PHASE 1
PROJECT SETUP
        ↓
PHASE 2
DESIGN SYSTEM
        ↓
PHASE 3
FRONTEND
        ↓
UI APPROVAL
        ↓
PHASE 4
DATABASE DESIGN
        ↓
PHASE 5
BACKEND
        ↓
PHASE 6
INTEGRATION
        ↓
PHASE 7
TESTING
        ↓
PHASE 8
UAT
        ↓
PHASE 9
DEPLOYMENT


21. Hubungan dengan Trello
Jadi Card 9–26 yang sebelumnya kita buat tidak perlu dibuang. Sekarang card tersebut menjadi turunan dari PRD Design System + Frontend.

Kemudian:
Card 9–26
      ↓
PRD Design System
      +
PRD Frontend

Sedangkan:
Card 27–39
      ↓
PRD Backend

Dan:
Card 40–66
      ↓
Integration
Testing
UAT
Deployment