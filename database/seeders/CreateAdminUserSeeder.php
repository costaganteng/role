<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Buat pengguna admin
        $user = User::create([
            'name' => 'Hardik Savani', 
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456')
        ]);

        // Buat peran Admin
        $role = Role::create(['name' => 'Admin']);

        // Ambil semua ID permission
        $permissions = Permission::pluck('id')->all();

        // Sinkronisasi permissions dengan role
        $role->syncPermissions($permissions);

        // Assign role ke user
        $user->assignRole([$role->id]);
    }
}
