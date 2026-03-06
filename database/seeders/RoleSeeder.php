<?php
// database/seeders/RoleSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {

        Role::truncate(); // Удалит все записи и сбросит счетчик ID

        $roles = [
            [
                'name' => 'Administrator',
                'slug' => 'admin',
                'description' => 'Full system access'
            ],
            [
                'name' => 'Manager',
                'slug' => 'manager',
                'description' => 'Can manage content and users'
            ],
            [
                'name' => 'Editor',
                'slug' => 'editor',
                'description' => 'Can create and edit content'
            ],
            [
                'name' => 'User',
                'slug' => 'user',
                'description' => 'Regular user with basic access'
            ],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
