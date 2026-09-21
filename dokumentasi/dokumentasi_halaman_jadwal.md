# Dokumentasi Penambahan Halaman Jadwal Praktikum

Halaman Jadwal Praktikum telah ditambahkan untuk memenuhi kebutuhan sistem informasi jadwal. Halaman ini dirancang untuk memberikan informasi jadwal yang detail dan terstruktur bagi mahasiswa dan dosen.

## Fitur Utama

1. **Pencarian Kata Kunci**: Pengguna dapat mencari jadwal berdasarkan nama mata kuliah, nama dosen, atau nama ruang.
2. **Filter Multidimensi**:
   - **Fakultas**: Memfilter jadwal berdasarkan fakultas penyelenggara (FITK, FASYA, dll).
   - **Program Studi**: Memfilter jadwal lebih spesifik berdasarkan program studi.
   - **Hari**: Memfilter jadwal berdasarkan hari pelaksanaan (Senin - Sabtu).
3. **Tabel Jadwal Responsif**: 
   - Pada layar besar (Desktop/Tablet), jadwal ditampilkan dalam format tabel konvensional yang mudah dibaca.
   - Pada layar kecil (Mobile), tabel berubah wujud menjadi format *Card* (kartu bersusun ke bawah) untuk menghindari *scroll horizontal* yang mengganggu kenyamanan pengguna.
4. **Indikator Status**: Setiap jadwal memiliki indikator status berwarna (seperti "Aktif", "Terjadwal", atau "Dibatalkan") untuk kemudahan identifikasi visual.

## Struktur File Terkait

- **View**: `resources/views/jadwal.blade.php` - Berisi antarmuka pengguna (UI) lengkap dari halaman jadwal.
- **Route**: Didaftarkan pada `routes/web.php` sebagai `/jadwal`.

## Catatan UI/UX

Halaman ini didesain menggunakan framework Tailwind CSS dengan tema *Indigo & Slate* yang bersih dan minimalis. Tidak ada dependensi JavaScript tambahan berat yang digunakan dalam fitur antarmuka awal ini.
