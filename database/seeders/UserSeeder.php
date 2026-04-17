<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@londonoffice.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
                'is_active' => true,
            ]
        );

        User::updateOrCreate(
            ['email' => 'client@test.com'],
            [
                'name' => 'Test Client',
                'password' => Hash::make('test123456'),
                'role' => 'client',
                'phone' => '+44 20 1234 5678',
                'company_name' => 'Test Company Ltd',
                'is_active' => true,
            ]
        );

        $this->command->info('Users seeded successfully!');
    }
}
