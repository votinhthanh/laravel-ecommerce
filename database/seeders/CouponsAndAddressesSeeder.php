<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CouponsAndAddressesSeeder extends Seeder
{
    public function run(): void
    {
        // Coupons
        $coupons = [
            [
                'code' => 'WELCOME10',
                'description' => '10% off on your first purchase',
                'type' => 'percentage',
                'value' => 10.00,
                'minimum_amount' => 5000.00,
                'usage_limit' => 100,
                'usage_limit_per_customer' => 1,
                'used_count' => 15,
                'is_active' => true,
                'valid_from' => now()->subDays(30),
                'valid_until' => now()->addDays(30),
                'created_at' => now()->subDays(30),
                'updated_at' => now()->subDays(30),
            ],
            [
                'code' => 'SUMMER2025',
                'description' => 'Summer Sale - Flat ₹2000 off on ACs',
                'type' => 'fixed',
                'value' => 2000.00,
                'minimum_amount' => 30000.00,
                'usage_limit' => 50,
                'usage_limit_per_customer' => 2,
                'used_count' => 8,
                'is_active' => true,
                'valid_from' => now()->subDays(15),
                'valid_until' => now()->addDays(45),
                'created_at' => now()->subDays(15),
                'updated_at' => now()->subDays(5),
            ],
            [
                'code' => 'ELECTRONICS15',
                'description' => '15% off on all electronics',
                'type' => 'percentage',
                'value' => 15.00,
                'minimum_amount' => 10000.00,
                'usage_limit' => 200,
                'usage_limit_per_customer' => 3,
                'used_count' => 45,
                'is_active' => true,
                'valid_from' => now()->subDays(20),
                'valid_until' => now()->addDays(40),
                'created_at' => now()->subDays(20),
                'updated_at' => now()->subDays(2),
            ],
            [
                'code' => 'FREESHIP',
                'description' => 'Free shipping on orders above ₹1000',
                'type' => 'fixed',
                'value' => 99.00,
                'minimum_amount' => 1000.00,
                'usage_limit' => null,
                'usage_limit_per_customer' => null,
                'used_count' => 125,
                'is_active' => true,
                'valid_from' => now()->subMonths(2),
                'valid_until' => null,
                'created_at' => now()->subMonths(2),
                'updated_at' => now()->subDays(1),
            ],
            [
                'code' => 'DIWALI2024',
                'description' => 'Diwali Special - 20% off',
                'type' => 'percentage',
                'value' => 20.00,
                'minimum_amount' => 15000.00,
                'usage_limit' => 100,
                'usage_limit_per_customer' => 1,
                'used_count' => 100,
                'is_active' => false,
                'valid_from' => now()->subMonths(3),
                'valid_until' => now()->subMonths(2),
                'created_at' => now()->subMonths(4),
                'updated_at' => now()->subMonths(2),
            ],
            [
                'code' => 'VIP20',
                'description' => 'VIP Customer - 20% off',
                'type' => 'percentage',
                'value' => 20.00,
                'minimum_amount' => 20000.00,
                'usage_limit' => 50,
                'usage_limit_per_customer' => 5,
                'used_count' => 12,
                'is_active' => true,
                'valid_from' => now()->subDays(10),
                'valid_until' => now()->addMonths(2),
                'created_at' => now()->subDays(10),
                'updated_at' => now()->subDays(3),
            ],
        ];

        DB::table('coupons')->insert($coupons);

        // User Addresses
        $addresses = [
            // Admin User addresses
            [
                'user_id' => 1,
                'type' => 'shipping',
                'name' => 'Admin User',
                'phone' => '+84901234567',
                'address_line_1' => '123 Le Loi Street',
                'address_line_2' => 'Ward 1',
                'city' => 'Can Tho',
                'state' => 'Can Tho',
                'country' => 'Vietnam',
                'postal_code' => '900000',
                'delivery_instructions' => 'Call upon arrival',
                'is_default' => true,
                'created_at' => now()->subMonths(6),
                'updated_at' => now()->subMonths(6),
            ],
            [
                'user_id' => 1,
                'type' => 'billing',
                'name' => 'Admin User',
                'phone' => '+84901234567',
                'address_line_1' => '123 Le Loi Street',
                'address_line_2' => 'Ward 1',
                'city' => 'Can Tho',
                'state' => 'Can Tho',
                'country' => 'Vietnam',
                'postal_code' => '900000',
                'delivery_instructions' => 'Call upon arrival',
                'is_default' => true,
                'created_at' => now()->subMonths(6),
                'updated_at' => now()->subMonths(6),
            ],

            // Nguyen Van An addresses
            [
                'user_id' => 2,
                'type' => 'shipping',
                'name' => 'Nguyen Van An',
                'phone' => '+84912345678',
                'address_line_1' => '456 Nguyen Van Linh',
                'address_line_2' => 'Ninh Kieu District',
                'city' => 'Can Tho',
                'state' => 'Can Tho',
                'country' => 'Vietnam',
                'postal_code' => '900000',
                'delivery_instructions' => 'Leave with security if not home',
                'is_default' => true,
                'created_at' => now()->subMonths(5),
                'updated_at' => now()->subMonths(5),
            ],
            [
                'user_id' => 2,
                'type' => 'shipping',
                'name' => 'Nguyen Van An',
                'phone' => '+84912345678',
                'address_line_1' => '789 Tran Hung Dao',
                'address_line_2' => 'Office Building B',
                'city' => 'Can Tho',
                'state' => 'Can Tho',
                'country' => 'Vietnam',
                'postal_code' => '900000',
                'delivery_instructions' => 'Office hours 9AM-5PM',
                'is_default' => false,
                'created_at' => now()->subMonths(3),
                'updated_at' => now()->subMonths(3),
            ],

            // Tran Thi Mai addresses
            [
                'user_id' => 3,
                'type' => 'shipping',
                'name' => 'Tran Thi Mai',
                'phone' => '+84923456789',
                'address_line_1' => '321 30/4 Street',
                'address_line_2' => 'Apartment 5B',
                'city' => 'Can Tho',
                'state' => 'Can Tho',
                'country' => 'Vietnam',
                'postal_code' => '900000',
                'delivery_instructions' => 'Call upon arrival',
                'is_default' => true,
                'created_at' => now()->subMonths(3),
                'updated_at' => now()->subMonths(3),
            ],

            // Le Hoang Nam addresses
            [
                'user_id' => 4,
                'type' => 'shipping',
                'name' => 'Le Hoang Nam',
                'phone' => '+84934567890',
                'address_line_1' => '567 Vo Van Kiet',
                'address_line_2' => null,
                'city' => 'Can Tho',
                'state' => 'Can Tho',
                'country' => 'Vietnam',
                'postal_code' => '900000',
                'delivery_instructions' => 'Ring doorbell twice',
                'is_default' => true,
                'created_at' => now()->subMonths(8),
                'updated_at' => now()->subMonths(8),
            ],

            // Pham Thi Huong addresses
            [
                'user_id' => 5,
                'type' => 'shipping',
                'name' => 'Pham Thi Huong',
                'phone' => '+84945678901',
                'address_line_1' => '234 Ba Thang Hai',
                'address_line_2' => 'Villa 12',
                'city' => 'Can Tho',
                'state' => 'Can Tho',
                'country' => 'Vietnam',
                'postal_code' => '900000',
                'delivery_instructions' => 'Call upon arrival',
                'is_default' => true,
                'created_at' => now()->subMonths(2),
                'updated_at' => now()->subMonths(2),
            ],
            [
                'user_id' => 5,
                'type' => 'billing',
                'name' => 'Pham Thi Huong',
                'phone' => '+84945678901',
                'address_line_1' => '234 Ba Thang Hai',
                'address_line_2' => 'Villa 12',
                'city' => 'Can Tho',
                'state' => 'Can Tho',
                'country' => 'Vietnam',
                'postal_code' => '900000',
                'delivery_instructions' => 'Call upon arrival',
                'is_default' => true,
                'created_at' => now()->subMonths(2),
                'updated_at' => now()->subMonths(2),
            ],
        ];

        DB::table('user_addresses')->insert($addresses);

        $this->command->info('Coupons and addresses seeded successfully!');
    }
}
