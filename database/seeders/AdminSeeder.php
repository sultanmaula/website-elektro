<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'read setting']);
        Permission::create(['name' => 'read user']);
        Permission::create(['name' => 'edit user']);
        Permission::create(['name' => 'read role']);
        Permission::create(['name' => 'edit role']);
        Permission::create(['name' => 'read permission']);
        Permission::create(['name' => 'edit permission']);
        Permission::create(['name' => 'read all matkul']);
        Permission::create(['name' => 'read matkul']);
        Permission::create(['name' => 'edit matkul']);
        Permission::create(['name' => 'read all cpl']);
        Permission::create(['name' => 'read cpl']);
        Permission::create(['name' => 'edit cpl']);
        Permission::create(['name' => 'read indikator cpl']);
        Permission::create(['name' => 'edit indikator cpl']);
        Permission::create(['name' => 'read dosen']);

        Role::create(['name' => 'superadmin'])->givePermissionTo(Permission::all());
        Role::create(['name' => 'admin'])->givePermissionTo(['read dosen', 'read all matkul', 'read matkul', 'edit matkul', 'read all cpl', 'read cpl', 'edit cpl', 'read indikator cpl', 'edit indikator cpl']);
        Role::create(['name' => 'dosen'])->givePermissionTo(['read all matkul', 'read matkul', 'edit matkul', 'read all cpl', 'read cpl', 'edit cpl', 'read indikator cpl', 'edit indikator cpl']);
        
        $superadmin = User::create([
                    'name' => 'Sultan Maula Chamzah', 
                    'email' => 'sultanmaulachamzah@gmail.com', 
                    'email_verified_at' => now(),
                    'password' => \Hash::make('sult@n354'),
                ]);
        $superadmin->syncRoles('superadmin');
        
        $admin = User::create([
            'name' => 'Admin T. Elektro UMM', 
            'email' => 'admin@gmail.com', 
            'email_verified_at' => now(),
            'password' => \Hash::make('admin123'),
        ]);
        $admin->syncRoles('admin');
    }
}
