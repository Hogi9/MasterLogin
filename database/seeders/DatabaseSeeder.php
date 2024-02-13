<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Role;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'guest'
        ]);

        Role::create([
            'name' => 'superadmin'
        ]);

        User::create([
            'username' => 'admin',
            'email' => 'hogi.pt@gmail.com',
            'password' => bcrypt('admin123'),
            'role_id' => 2,
        ]);
    }
}
