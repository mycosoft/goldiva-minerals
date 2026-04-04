<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            'view blogs',
            'create blogs',
            'edit blogs',
            'delete blogs',
            'view services',
            'create services',
            'edit services',
            'delete services',
            'view galleries',
            'create galleries',
            'edit galleries',
            'delete galleries',
            'view contacts',
            'delete contacts',
            'view users',
            'create users',
            'edit users',
            'delete users',
            'view roles',
            'manage roles',
            'view products',
            'create products',
            'edit products',
            'delete products',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $adminRole->syncPermissions(Permission::all());

        $siteManagerRole = Role::firstOrCreate(['name' => 'site manager']);
        $siteManagerRole->syncPermissions([
            'view blogs',
            'create blogs',
            'edit blogs',
            'delete blogs',
            'view services',
            'create services',
            'edit services',
            'delete services',
            'view galleries',
            'create galleries',
            'edit galleries',
            'delete galleries',
            'view contacts',
            'delete contacts',
            'view products',
            'create products',
            'edit products',
            'delete products',
        ]);
    }
}
