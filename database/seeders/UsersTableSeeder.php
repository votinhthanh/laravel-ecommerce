<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin User',
                'email' => 'admin@electricshop.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'phone' => '+84901234567',
                'date_of_birth' => '1985-06-15',
                'gender' => 'male',
                'is_admin' => true,
                'is_active' => true,
                'last_login_at' => now(),
                'preferences' => json_encode([
                    'newsletter' => true,
                    'notifications' => true,
                    'language' => 'en'
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nguyen Van An',
                'email' => 'nguyen.an@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'phone' => '+84912345678',
                'date_of_birth' => '1990-03-20',
                'gender' => 'male',
                'is_admin' => false,
                'is_active' => true,
                'last_login_at' => now()->subDays(1),
                'preferences' => json_encode([
                    'newsletter' => true,
                    'notifications' => false,
                    'language' => 'vi'
                ]),
                'created_at' => now()->subMonths(6),
                'updated_at' => now()->subDays(1),
            ],
            [
                'name' => 'Tran Thi Mai',
                'email' => 'tran.mai@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'phone' => '+84923456789',
                'date_of_birth' => '1992-08-10',
                'gender' => 'female',
                'is_admin' => false,
                'is_active' => true,
                'last_login_at' => now()->subDays(3),
                'preferences' => json_encode([
                    'newsletter' => true,
                    'notifications' => true,
                    'language' => 'vi'
                ]),
                'created_at' => now()->subMonths(3),
                'updated_at' => now()->subDays(3),
            ],
            [
                'name' => 'Le Hoang Nam',
                'email' => 'le.nam@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'phone' => '+84934567890',
                'date_of_birth' => '1988-12-25',
                'gender' => 'male',
                'is_admin' => false,
                'is_active' => true,
                'last_login_at' => now()->subWeeks(1),
                'preferences' => json_encode([
                    'newsletter' => true,
                    'notifications' => true,
                    'language' => 'vi'
                ]),
                'created_at' => now()->subMonths(8),
                'updated_at' => now()->subWeeks(1),
            ],
            [
                'name' => 'Pham Thi Huong',
                'email' => 'pham.huong@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'phone' => '+84945678901',
                'date_of_birth' => '1995-05-30',
                'gender' => 'female',
                'is_admin' => false,
                'is_active' => true,
                'last_login_at' => now()->subWeeks(1),
                'preferences' => json_encode([
                    'newsletter' => true,
                    'notifications' => true,
                    'language' => 'vi'
                ]),
                'created_at' => now()->subMonths(2),
                'updated_at' => now()->subDays(5),
            ],
            [
                'name' => 'Test User',
                'email' => 'test@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'phone' => '+84956789012',
                'date_of_birth' => '1995-05-30',
                'gender' => 'female',
                'is_admin' => false,
                'is_active' => true,
                'last_login_at' => now()->subWeeks(1),
                'preferences' => json_encode([
                    'newsletter' => true,
                    'notifications' => true,
                    'language' => 'vi'
                ]),
                'created_at' => now()->subMonth(),
                'updated_at' => now()->subWeek(),
            ],
        ];

        DB::table('users')->insert($users);

        $this->command->info('Users table seeded successfully!');
    }
}
