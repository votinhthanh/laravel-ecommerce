<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ShoppingCartsSeeder extends Seeder
{
    public function run(): void
    {
        // Shopping Carts
        $carts = [
            [
                'id' => 1,
                'session_id' => null,
                'user_id' => 2, // Nguyen Van An
                'coupon_id' => null,
                'subtotal' => 38999.00,
                'tax_amount' => 7019.82,
                'discount_amount' => 0.00,
                'total' => 46018.82,
                'created_at' => now()->subDays(2),
                'updated_at' => now()->subHours(3),
            ],
            [
                'id' => 2,
                'session_id' => null,
                'user_id' => 3, // Tran Thi Mai
                'coupon_id' => 3, // ELECTRONICS15
                'subtotal' => 52999.00,
                'tax_amount' => 8084.85,
                'discount_amount' => 7949.85,
                'total' => 53134.00,
                'created_at' => now()->subDays(1),
                'updated_at' => now()->subHours(5),
            ],
            [
                'id' => 3,
                'session_id' => Str::random(40),
                'user_id' => null, // Guest cart
                'coupon_id' => null,
                'subtotal' => 1999.00,
                'tax_amount' => 359.82,
                'discount_amount' => 0.00,
                'total' => 2358.82,
                'created_at' => now()->subHours(2),
                'updated_at' => now()->subHours(2),
            ],
            [
                'id' => 4,
                'session_id' => null,
                'user_id' => 5, // Pham Thi Huong
                'coupon_id' => null,
                'subtotal' => 0.00,
                'tax_amount' => 0.00,
                'discount_amount' => 0.00,
                'total' => 0.00,
                'created_at' => now()->subDays(3),
                'updated_at' => now()->subDays(3),
            ],
        ];

        DB::table('shopping_carts')->insert($carts);

        // Cart Items
        $cartItems = [
            // Cart 1 - Nguyen Van An (LG Washing Machine)
            [
                'cart_id' => 1,
                'product_id' => 3, // LG Washing Machine
                'warranty_id' => 4, // 2 year warranty
                'quantity' => 1,
                'price' => 38999.00,
                'total' => 38999.00,
                'product_snapshot' => json_encode([
                    'name' => 'LG 8 Kg Front Load Washing Machine with AI Direct Drive',
                    'sku' => 'LG-WM-FHM1408-8KG',
                    'image' => 'products/lg-washing-machine-main.jpg'
                ]),
                'created_at' => now()->subDays(2),
                'updated_at' => now()->subDays(2),
            ],

            // Cart 2 - Tran Thi Mai (Dyson Vacuum)
            [
                'cart_id' => 2,
                'product_id' => 9, // Dyson V15 Vacuum
                'warranty_id' => 8, // Default warranty
                'quantity' => 1,
                'price' => 52999.00,
                'total' => 52999.00,
                'product_snapshot' => json_encode([
                    'name' => 'Dyson V15 Detect Absolute Cordless Vacuum',
                    'sku' => 'DYS-V15-DETECT',
                    'image' => 'products/dyson-v15-main.jpg'
                ]),
                'created_at' => now()->subDays(1),
                'updated_at' => now()->subDays(1),
            ],

            // Cart 3 - Guest (Philips Kettle)
            [
                'cart_id' => 3,
                'product_id' => 14, // Philips Kettle
                'warranty_id' => null,
                'quantity' => 1,
                'price' => 1999.00,
                'total' => 1999.00,
                'product_snapshot' => json_encode([
                    'name' => 'Philips Daily Collection Electric Kettle',
                    'sku' => 'PHI-HD9306-1.5L',
                    'image' => 'products/philips-kettle-main.jpg'
                ]),
                'created_at' => now()->subHours(2),
                'updated_at' => now()->subHours(2),
            ],
        ];

        DB::table('cart_items')->insert($cartItems);

        $this->command->info('Shopping carts and cart items seeded successfully!');
    }
}
