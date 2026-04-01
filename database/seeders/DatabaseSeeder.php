<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RolesAndPermissionsSeeder::class,
        ]);

        $admin = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
        ]);
        $admin->assignRole('admin');

        $manager = User::factory()->create([
            'name' => 'Site Manager',
            'email' => 'manager@example.com',
        ]);
        $manager->assignRole('site manager');
    }
}
