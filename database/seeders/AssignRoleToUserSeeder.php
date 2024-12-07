<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssignRoleToUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = \App\Models\User::where('username', 'superadmin')->first();
        $superAdmin->assignRole('Super Admin');

        $user = \App\Models\User::where('username', 'Duta')->first();
        $user->assignRole('User');
    }
}
