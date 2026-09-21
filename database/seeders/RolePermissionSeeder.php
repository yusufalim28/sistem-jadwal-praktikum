<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create Roles
        $superAdmin = Role::create(['name' => 'super-admin']);
        $operator = Role::create(['name' => 'operator']);
        $dosen = Role::create(['name' => 'dosen']);
        $mahasiswa = Role::create(['name' => 'mahasiswa']);

        // Define permissions
        $permissions = [
            'view schedule',
            'create schedule',
            'update schedule',
            'delete schedule',
            
            'view master data',
            'create master data',
            'update master data',
            'delete master data',
            
            'view change request',
            'approve change request',
            'reject change request',
            
            'manage users',
            'manage roles',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Assign permissions to roles
        
        // Super Admin gets all permissions
        $superAdmin->givePermissionTo(Permission::all());
        
        // Operator gets schedule and master data permissions (and change request management)
        $operator->givePermissionTo([
            'view schedule', 'create schedule', 'update schedule', 'delete schedule',
            'view master data', 'create master data', 'update master data', 'delete master data',
            'view change request', 'approve change request', 'reject change request'
        ]);
        
        // Dosen gets view schedule and view change request
        $dosen->givePermissionTo([
            'view schedule',
            'view change request'
        ]);
        
        // Mahasiswa gets view schedule
        $mahasiswa->givePermissionTo([
            'view schedule'
        ]);
    }
}
