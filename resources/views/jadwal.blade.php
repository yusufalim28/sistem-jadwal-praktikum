<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jadwal Praktikum - SJP</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts / Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased min-h-screen flex flex-col">

    <x-nav></x-nav>
    
    <!-- Main Content -->
    <main class="flex-grow w-full max-w-7xl mx-auto px-6 py-8 mt-15">
        
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-slate-900 mb-2">Jadwal Praktikum</h1>
            <p class="text-slate-600">Cari dan pantau jadwal praktikum untuk semua program studi.</p>
        </div>

        <!-- Search & Filter Card -->
        <div class="bg-white p-5 rounded-2xl shadow-sm border border-slate-200 mb-8">
            <div class="flex flex-col space-y-4">
                <!-- Search -->
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Cari Mata Kuliah / Dosen / Ruang</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </div>
                        <input type="text" placeholder="Ketik kata kunci pencarian..." class="w-full pl-10 pr-4 py-2.5 rounded-xl border-slate-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500/20 transition">
                    </div>
                </div>
                
                <!-- Filters -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <!-- Filter Fakultas -->
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Fakultas</label>
                        <select class="w-full rounded-xl border-slate-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500/20 py-2.5 px-3 transition bg-white text-slate-700">
                            <option>Semua Fakultas</option>
                            <option>FITK</option>
                            <option>FASYA</option>
                            <option>FDKI</option>
                            <option>FUA</option>
                            <option>FEBI</option>
                            <option>FASTIH</option>
                        </select>
                    </div>

                    <!-- Filter Prodi -->
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Program Studi</label>
                        <select class="w-full rounded-xl border-slate-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500/20 py-2.5 px-3 transition bg-white text-slate-700">
                            <option>Semua Program Studi</option>
                            <option>Teknik Informatika</option>
                            <option>Sistem Informasi</option>
                            <option>Ilmu Komputer</option>
                        </select>
                    </div>

                    <!-- Filter Hari -->
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Hari</label>
                        <select class="w-full rounded-xl border-slate-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500/20 py-2.5 px-3 transition bg-white text-slate-700">
                            <option>Semua Hari</option>
                            <option>Senin</option>
                            <option>Selasa</option>
                            <option>Rabu</option>
                            <option>Kamis</option>
                            <option>Jumat</option>
                            <option>Sabtu</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="mt-6 flex justify-end gap-3">
                <button class="px-5 py-2 text-slate-600 bg-slate-100 hover:bg-slate-200 rounded-xl font-medium transition">Reset</button>
                <button class="px-6 py-2 bg-indigo-600 text-white rounded-xl font-medium hover:bg-indigo-700 transition shadow-sm shadow-indigo-600/20">Terapkan Filter</button>
            </div>
        </div>

        <!-- Table Schedule -->
        <div class="bg-transparent md:bg-white rounded-none md:rounded-2xl shadow-none md:shadow-sm border-0 md:border border-slate-200">
            <table class="w-full text-left border-collapse block md:table">
                <thead class="hidden md:table-header-group">
                    <tr class="bg-slate-50 border-b border-slate-200 text-sm font-semibold text-slate-600 uppercase tracking-wider">
                        <th class="px-6 py-4">Hari & Waktu</th>
                        <th class="px-6 py-4">Mata Kuliah</th>
                        <th class="px-6 py-4">Kelas</th>
                        <th class="px-6 py-4">Ruang</th>
                        <th class="px-6 py-4">Dosen & Asisten</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="block md:table-row-group text-sm">
                    <!-- Row 1 -->
                    <tr class="flex flex-col md:table-row bg-white md:hover:bg-slate-50 border border-slate-200 md:border-b md:border-t-0 md:border-l-0 md:border-r-0 rounded-2xl md:rounded-none mb-4 md:mb-0 transition group">
                        <td class="p-4 md:px-6 md:py-4 align-top border-b border-slate-100 md:border-0 flex justify-between md:table-cell items-start">
                            <span class="md:hidden text-xs font-bold text-slate-500 uppercase mt-0.5">Waktu</span>
                            <div class="text-right md:text-left">
                                <div class="font-bold text-slate-900">Senin</div>
                                <div class="text-slate-500 font-medium mt-0.5">08:00 - 10:30</div>
                            </div>
                        </td>
                        <td class="p-4 md:px-6 md:py-4 align-top border-b border-slate-100 md:border-0 flex justify-between md:table-cell items-start">
                            <span class="md:hidden text-xs font-bold text-slate-500 uppercase mt-0.5">Mata Kuliah</span>
                            <div class="text-right md:text-left max-w-[200px] md:max-w-none">
                                <div class="font-bold text-slate-900">Pemrograman Web Lanjut</div>
                                <div class="text-xs text-slate-500 mt-1">SKS: 3 • SMT: 5</div>
                            </div>
                        </td>
                        <td class="p-4 md:px-6 md:py-4 align-top border-b border-slate-100 md:border-0 flex justify-between md:table-cell items-center">
                            <span class="md:hidden text-xs font-bold text-slate-500 uppercase">Kelas</span>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-md text-xs font-medium bg-slate-100 text-slate-800 border border-slate-200">
                                TI-5A
                            </span>
                        </td>
                        <td class="p-4 md:px-6 md:py-4 align-top border-b border-slate-100 md:border-0 flex justify-between md:table-cell items-start">
                            <span class="md:hidden text-xs font-bold text-slate-500 uppercase mt-0.5">Ruang</span>
                            <div class="text-right md:text-left">
                                <div class="font-medium text-slate-900">Lab Komputer Dasar</div>
                                <div class="text-xs text-slate-500 mt-1">Lantai 2, Gd. FITK</div>
                            </div>
                        </td>
                        <td class="p-4 md:px-6 md:py-4 align-top border-b border-slate-100 md:border-0 flex justify-between md:table-cell items-start">
                            <span class="md:hidden text-xs font-bold text-slate-500 uppercase mt-0.5">Dosen</span>
                            <div class="text-right md:text-left">
                                <div class="font-medium text-slate-900">Budi Santoso, M.Kom.</div>
                                <div class="text-xs text-slate-500 mt-1">Asisten: Andi (TI-20)</div>
                            </div>
                        </td>
                        <td class="p-4 md:px-6 md:py-4 align-top border-b border-slate-100 md:border-0 flex justify-between md:table-cell items-center">
                            <span class="md:hidden text-xs font-bold text-slate-500 uppercase">Status</span>
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-green-50 text-green-700 border border-green-200">
                                <span class="w-1.5 h-1.5 rounded-full bg-green-500 mr-1.5"></span> Aktif
                            </span>
                        </td>
                        <td class="p-4 md:px-6 md:py-4 align-top text-center md:table-cell flex items-center justify-center">
                            <button class="w-full md:w-auto px-4 py-2 md:p-0 bg-indigo-50 md:bg-transparent text-indigo-700 md:text-indigo-600 rounded-lg hover:text-indigo-900 font-medium text-sm transition group-hover:underline">
                                Lihat Detail
                            </button>
                        </td>
                    </tr>

                    <!-- Row 2 -->
                    <tr class="flex flex-col md:table-row bg-white md:hover:bg-slate-50 border border-slate-200 md:border-b md:border-t-0 md:border-l-0 md:border-r-0 rounded-2xl md:rounded-none mb-4 md:mb-0 transition group">
                        <td class="p-4 md:px-6 md:py-4 align-top border-b border-slate-100 md:border-0 flex justify-between md:table-cell items-start">
                            <span class="md:hidden text-xs font-bold text-slate-500 uppercase mt-0.5">Waktu</span>
                            <div class="text-right md:text-left">
                                <div class="font-bold text-slate-900">Senin</div>
                                <div class="text-slate-500 font-medium mt-0.5">10:30 - 13:00</div>
                            </div>
                        </td>
                        <td class="p-4 md:px-6 md:py-4 align-top border-b border-slate-100 md:border-0 flex justify-between md:table-cell items-start">
                            <span class="md:hidden text-xs font-bold text-slate-500 uppercase mt-0.5">Mata Kuliah</span>
                            <div class="text-right md:text-left max-w-[200px] md:max-w-none">
                                <div class="font-bold text-slate-900">Jaringan Komputer Dasar</div>
                                <div class="text-xs text-slate-500 mt-1">SKS: 3 • SMT: 3</div>
                            </div>
                        </td>
                        <td class="p-4 md:px-6 md:py-4 align-top border-b border-slate-100 md:border-0 flex justify-between md:table-cell items-center">
                            <span class="md:hidden text-xs font-bold text-slate-500 uppercase">Kelas</span>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-md text-xs font-medium bg-slate-100 text-slate-800 border border-slate-200">
                                SI-3B
                            </span>
                        </td>
                        <td class="p-4 md:px-6 md:py-4 align-top border-b border-slate-100 md:border-0 flex justify-between md:table-cell items-start">
                            <span class="md:hidden text-xs font-bold text-slate-500 uppercase mt-0.5">Ruang</span>
                            <div class="text-right md:text-left">
                                <div class="font-medium text-slate-900">Lab Jaringan 1</div>
                                <div class="text-xs text-slate-500 mt-1">Lantai 3, Gd. Siber</div>
                            </div>
                        </td>
                        <td class="p-4 md:px-6 md:py-4 align-top border-b border-slate-100 md:border-0 flex justify-between md:table-cell items-start">
                            <span class="md:hidden text-xs font-bold text-slate-500 uppercase mt-0.5">Dosen</span>
                            <div class="text-right md:text-left">
                                <div class="font-medium text-slate-900">Andi Susanto, M.T.</div>
                                <div class="text-xs text-slate-500 mt-1">Asisten: Budi (SI-19)</div>
                            </div>
                        </td>
                        <td class="p-4 md:px-6 md:py-4 align-top border-b border-slate-100 md:border-0 flex justify-between md:table-cell items-center">
                            <span class="md:hidden text-xs font-bold text-slate-500 uppercase">Status</span>
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-slate-100 text-slate-700 border border-slate-200">
                                Terjadwal
                            </span>
                        </td>
                        <td class="p-4 md:px-6 md:py-4 align-top text-center md:table-cell flex items-center justify-center">
                            <button class="w-full md:w-auto px-4 py-2 md:p-0 bg-indigo-50 md:bg-transparent text-indigo-700 md:text-indigo-600 rounded-lg hover:text-indigo-900 font-medium text-sm transition group-hover:underline">
                                Lihat Detail
                            </button>
                        </td>
                    </tr>
                    
                    <!-- Row 3 -->
                    <tr class="flex flex-col md:table-row bg-white md:hover:bg-slate-50 border border-slate-200 md:border-b md:border-t-0 md:border-l-0 md:border-r-0 md:last:border-b-0 rounded-2xl md:rounded-none mb-4 md:mb-0 transition group">
                        <td class="p-4 md:px-6 md:py-4 align-top border-b border-slate-100 md:border-0 flex justify-between md:table-cell items-start">
                            <span class="md:hidden text-xs font-bold text-slate-500 uppercase mt-0.5">Waktu</span>
                            <div class="text-right md:text-left">
                                <div class="font-bold text-slate-900">Selasa</div>
                                <div class="text-slate-500 font-medium mt-0.5">08:00 - 10:30</div>
                            </div>
                        </td>
                        <td class="p-4 md:px-6 md:py-4 align-top border-b border-slate-100 md:border-0 flex justify-between md:table-cell items-start">
                            <span class="md:hidden text-xs font-bold text-slate-500 uppercase mt-0.5">Mata Kuliah</span>
                            <div class="text-right md:text-left max-w-[200px] md:max-w-none">
                                <div class="font-bold text-slate-900">Kecerdasan Buatan</div>
                                <div class="text-xs text-slate-500 mt-1">SKS: 3 • SMT: 5</div>
                            </div>
                        </td>
                        <td class="p-4 md:px-6 md:py-4 align-top border-b border-slate-100 md:border-0 flex justify-between md:table-cell items-center">
                            <span class="md:hidden text-xs font-bold text-slate-500 uppercase">Kelas</span>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-md text-xs font-medium bg-slate-100 text-slate-800 border border-slate-200">
                                TI-5B
                            </span>
                        </td>
                        <td class="p-4 md:px-6 md:py-4 align-top border-b border-slate-100 md:border-0 flex justify-between md:table-cell items-start">
                            <span class="md:hidden text-xs font-bold text-slate-500 uppercase mt-0.5">Ruang</span>
                            <div class="text-right md:text-left">
                                <div class="font-medium text-slate-900">Lab Multimedia</div>
                                <div class="text-xs text-slate-500 mt-1">Lantai 1, Gd. FITK</div>
                            </div>
                        </td>
                        <td class="p-4 md:px-6 md:py-4 align-top border-b border-slate-100 md:border-0 flex justify-between md:table-cell items-start">
                            <span class="md:hidden text-xs font-bold text-slate-500 uppercase mt-0.5">Dosen</span>
                            <div class="text-right md:text-left">
                                <div class="font-medium text-slate-900">Dr. Citra Lestari</div>
                                <div class="text-xs text-slate-500 mt-1">Asisten: Dian (TI-19)</div>
                            </div>
                        </td>
                        <td class="p-4 md:px-6 md:py-4 align-top border-b border-slate-100 md:border-0 flex justify-between md:table-cell items-center">
                            <span class="md:hidden text-xs font-bold text-slate-500 uppercase">Status</span>
                            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold bg-red-50 text-red-700 border border-red-200">
                                <span class="w-1.5 h-1.5 rounded-full bg-red-500 mr-1.5"></span> Dibatalkan
                            </span>
                        </td>
                        <td class="p-4 md:px-6 md:py-4 align-top text-center md:table-cell flex items-center justify-center">
                            <button class="w-full md:w-auto px-4 py-2 md:p-0 bg-indigo-50 md:bg-transparent text-indigo-700 md:text-indigo-600 rounded-lg hover:text-indigo-900 font-medium text-sm transition group-hover:underline">
                                Lihat Detail
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
            
            <!-- Pagination -->
            <div class="px-6 py-4 border-t border-slate-200 bg-slate-50 flex items-center justify-between">
                <div class="text-sm text-slate-500">
                    Menampilkan <span class="font-medium text-slate-900">1</span> hingga <span class="font-medium text-slate-900">3</span> dari <span class="font-medium text-slate-900">24</span> hasil
                </div>
                <div class="flex items-center gap-2">
                    <button class="px-3 py-1.5 border border-slate-300 rounded-lg text-slate-600 hover:bg-slate-100 text-sm font-medium transition disabled:opacity-50" disabled>
                        Sebelumnya
                    </button>
                    <button class="px-3 py-1.5 border border-slate-300 rounded-lg text-slate-600 hover:bg-slate-100 text-sm font-medium transition">
                        Berikutnya
                    </button>
                </div>
            </div>
        </div>
        
    </main>

</body>
</html>
