<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DummyUserSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Super Admin
        $superAdmin = User::create([
            'name' => 'Super Admin',
            'email' => 'admin@sjp.ac.id',
            'password' => Hash::make('password'),
        ]);
        $superAdmin->assignRole('super-admin');

        // 2. Operator
        $operator = User::create([
            'name' => 'Operator / Laboran',
            'email' => 'operator@sjp.ac.id',
            'password' => Hash::make('password'),
        ]);
        $operator->assignRole('operator');

        // 3. Dosen
        $dosen = User::create([
            'name' => 'Dr. Budi Dosen',
            'email' => 'dosen@sjp.ac.id',
            'password' => Hash::make('password'),
        ]);
        $dosen->assignRole('dosen');

        // 4. Mahasiswa
        $mahasiswa = User::create([
            'name' => 'Andi Mahasiswa',
            'email' => 'mahasiswa@sjp.ac.id',
            'password' => Hash::make('password'),
        ]);
        $mahasiswa->assignRole('mahasiswa');
    }
}
