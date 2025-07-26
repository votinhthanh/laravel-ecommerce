<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrdersSeeder extends Seeder
{
    public function run(): void
    {
        // Orders
        $orders = [
            [
                'id' => 1,
                'order_number' => 'ORD-20250115-ABC123',
                'user_id' => 2, // Nguyen Van An
                'shipping_address_id' => 3,
                'billing_address_id' => 3,
                'coupon_id' => 1, // WELCOME10
                'status' => 'delivered',
                'payment_status' => 'paid',
                'payment_method' => 'credit_card',
                'transaction_id' => 'TXN-CC-202501150001',
                'subtotal' => 45999.00,
                'tax_amount' => 7439.84,
                'shipping_amount' => 0.00,
                'discount_amount' => 4599.90,
                'total_amount' => 48838.94,
                'shipping_method' => 'standard',
                'tracking_number' => 'VN123456789',
                'shipped_at' => now()->subDays(8),
                'delivered_at' => now()->subDays(5),
                'admin_notes' => null,
                'notes' => 'First purchase',
                'shipping_address_snapshot' => json_encode([
                    'name' => 'Nguyen Van An',
                    'phone' => '+84912345678',
                    'address' => '456 Nguyen Van Linh, Ninh Kieu District, Can Tho'
                ]),
                'billing_address_snapshot' => json_encode([
                    'name' => 'Nguyen Van An',
                    'phone' => '+84912345678',
                    'address' => '456 Nguyen Van Linh, Ninh Kieu District, Can Tho'
                ]),
                'created_at' => now()->subDays(10),
                'updated_at' => now()->subDays(5),
            ],
            [
                'id' => 2,
                'order_number' => 'ORD-20250120-DEF456',
                'user_id' => 3, // Tran Thi Mai
                'shipping_address_id' => 5,
                'billing_address_id' => 5,
                'coupon_id' => null,
                'status' => 'shipped',
                'payment_status' => 'paid',
                'payment_method' => 'bank_transfer',
                'transaction_id' => 'TXN-BT-202501200001',
                'subtotal' => 189999.00,
                'tax_amount' => 34199.82,
                'shipping_amount' => 0.00,
                'discount_amount' => 0.00,
                'total_amount' => 224198.82,
                'shipping_method' => 'express',
                'tracking_number' => 'VN987654321',
                'shipped_at' => now()->subDays(2),
                'delivered_at' => null,
                'admin_notes' => null,
                'notes' => 'First purchase',
                'shipping_address_snapshot' => json_encode([
                    'name' => 'Tran Thi Mai',
                    'phone' => '+84923456789',
                    'address' => '321 30/4 Street, Apartment 5B, Can Tho'
                ]),
                'billing_address_snapshot' => json_encode([
                    'name' => 'Tran Thi Mai',
                    'phone' => '+84923456789',
                    'address' => '321 30/4 Street, Apartment 5B, Can Tho'
                ]),
                'created_at' => now()->subDays(4),
                'updated_at' => now()->subDays(2),
            ],
            [
                'id' => 3,
                'order_number' => 'ORD-20250122-GHI789',
                'user_id' => 4, // Le Hoang Nam
                'shipping_address_id' => 6,
                'billing_address_id' => 6,
                'coupon_id' => 2, // SUMMER2025
                'status' => 'processing',
                'payment_status' => 'paid',
                'payment_method' => 'cash_on_delivery',
                'transaction_id' => null,
                'subtotal' => 68998.00,
                'tax_amount' => 11879.64,
                'shipping_amount' => 99.00,
                'discount_amount' => 2000.00,
                'total_amount' => 78976.64,
                'shipping_method' => 'standard',
                'tracking_number' => 'VN123456789',
                'shipped_at' => now()->subDays(8),
                'delivered_at' => now()->subDays(5),
                'admin_notes' => null,
                'notes' => 'Please call before delivery',
                'shipping_address_snapshot' => json_encode([
                    'name' => 'Le Hoang Nam',
                    'phone' => '+84934567890',
                    'address' => '567 Vo Van Kiet, Can Tho'
                ]),
                'billing_address_snapshot' => json_encode([
                    'name' => 'Le Hoang Nam',
                    'phone' => '+84934567890',
                    'address' => '567 Vo Van Kiet, Can Tho'
                ]),
                'created_at' => now()->subDays(1),
                'updated_at' => now()->subDays(1),
            ],
            [
                'id' => 4,
                'order_number' => 'ORD-20241225-JKL012',
                'user_id' => 5, // Pham Thi Huong
                'shipping_address_id' => 7,
                'billing_address_id' => 8,
                'coupon_id' => null,
                'status' => 'delivered',
                'payment_status' => 'paid',
                'payment_method' => 'credit_card',
                'transaction_id' => 'TXN-CC-202412250001',
                'subtotal' => 49999.00,
                'tax_amount' => 8999.82,
                'shipping_amount' => 0.00,
                'discount_amount' => 0.00,
                'total_amount' => 58998.82,
                'shipping_method' => 'standard',
                'tracking_number' => 'VN456789123',
                'shipped_at' => now()->subDays(32),
                'delivered_at' => now()->subDays(30),
                'admin_notes' => null,
                'notes' => 'First purchase',
                'shipping_address_snapshot' => json_encode([
                    'name' => 'Pham Thi Huong',
                    'phone' => '+84945678901',
                    'address' => '234 Ba Thang Hai, Villa 12, Can Tho'
                ]),
                'billing_address_snapshot' => json_encode([
                    'name' => 'Pham Thi Huong',
                    'phone' => '+84945678901',
                    'address' => '234 Ba Thang Hai, Villa 12, Can Tho'
                ]),
                'created_at' => now()->subDays(35),
                'updated_at' => now()->subDays(30),
            ],
            [
                'id' => 5,
                'order_number' => 'ORD-20250110-MNO345',
                'user_id' => 1, // Admin
                'shipping_address_id' => 1,
                'billing_address_id' => 2,
                'coupon_id' => null,
                'status' => 'cancelled',
                'payment_status' => 'refunded',
                'payment_method' => 'credit_card',
                'transaction_id' => 'TXN-CC-202501100001',
                'subtotal' => 12999.00,
                'tax_amount' => 2339.82,
                'shipping_amount' => 99.00,
                'discount_amount' => 0.00,
                'total_amount' => 15437.82,
                'shipping_method' => 'standard',
                'tracking_number' => 'VN123456789',
                'shipped_at' => now()->subDays(8),
                'delivered_at' => now()->subDays(5),
                'admin_notes' => 'Customer requested cancellation - item out of stock',
                'notes' => 'First purchase',
                'shipping_address_snapshot' => json_encode([
                    'name' => 'Admin User',
                    'phone' => '+84901234567',
                    'address' => '123 Le Loi Street, Ward 1, Can Tho'
                ]),
                'billing_address_snapshot' => json_encode([
                    'name' => 'Admin User',
                    'phone' => '+84901234567',
                    'address' => '123 Le Loi Street, Ward 1, Can Tho'
                ]),
                'created_at' => now()->subDays(15),
                'updated_at' => now()->subDays(14),
            ],
        ];

        DB::table('orders')->insert($orders);

        // Order Items
        $orderItems = [
            // Order 1 - Samsung AC
            [
                'order_id' => 1,
                'product_id' => 1,
                'warranty_id' => 1,
                'product_name' => 'Samsung WindFree AR5500 1.5 Ton Inverter AC',
                'product_sku' => 'SAM-AC-AR5500-1.5T',
                'quantity' => 1,
                'price' => 45999.00,
                'tax_amount' => 8279.82,
                'discount_amount' => 4599.90,
                'total' => 49678.92,
                'product_snapshot' => json_encode([
                    'brand' => 'Samsung',
                    'model' => 'AR18CYECAWKNNA',
                    'color' => 'White',
                    'energy_rating' => '5 Star',
                    'warranty' => '1 year comprehensive'
                ]),
                'warranty_snapshot' => json_encode([
                    'type' => 'manufacturer',
                    'duration' => '12 months',
                    'coverage' => '1 year comprehensive warranty on product'
                ]),
                'created_at' => now()->subDays(10),
                'updated_at' => now()->subDays(10),
            ],

            // Order 2 - Samsung TV
            [
                'order_id' => 2,
                'product_id' => 8,
                'warranty_id' => 13,
                'product_name' => 'Samsung 65 inch Neo QLED 4K Smart TV',
                'product_sku' => 'SAM-TV-QN90A-65',
                'quantity' => 1,
                'price' => 189999.00,
                'tax_amount' => 53199.72,
                'discount_amount' => 0.00,
                'total' => 243198.72,
                'product_snapshot' => json_encode([
                    'brand' => 'Samsung',
                    'model' => 'QA65QN90AAKXXL',
                    'screen_size' => '65 inches',
                    'resolution' => '4K',
                    'display_type' => 'Neo QLED'
                ]),
                'warranty_snapshot' => json_encode([]),
                'created_at' => now()->subDays(4),
                'updated_at' => now()->subDays(4),
            ],

            // Order 3 - Multiple items
            [
                'order_id' => 3,
                'product_id' => 2, // Daikin AC
                'warranty_id' => 9,
                'product_name' => 'Daikin 1.5 Ton 3 Star Inverter Split AC',
                'product_sku' => 'DAI-AC-FTKM50-1.5T',
                'quantity' => 1,
                'price' => 36999.00,
                'tax_amount' => 6659.82,
                'discount_amount' => 1109.97,
                'total' => 42548.85,
                'product_snapshot' => json_encode([
                    'brand' => 'Daikin',
                    'model' => 'FTKM50TV',
                    'tonnage' => '1.5 Ton',
                    'energy_rating' => '3 Star'
                ]),
                'warranty_snapshot' => json_encode([]),
                'created_at' => now()->subDays(1),
                'updated_at' => now()->subDays(1),
            ],
            [
                'order_id' => 3,
                'product_id' => 5, // Samsung Refrigerator
                'warranty_id' => 11,
                'product_name' => 'Samsung 253L Double Door Refrigerator',
                'product_sku' => 'SAM-REF-RT28T-253L',
                'quantity' => 1,
                'price' => 25999.00,
                'tax_amount' => 4679.82,
                'discount_amount' => 779.97,
                'total' => 29898.85,
                'product_snapshot' => json_encode([
                    'brand' => 'Samsung',
                    'model' => 'RT28T3483S8',
                    'capacity' => '253L',
                    'type' => 'Double Door'
                ]),
                'warranty_snapshot' => json_encode([
                    'type' => 'manufacturer',
                    'duration' => '12 months',
                    'coverage' => '1 year comprehensive warranty on product'
                ]),
                'created_at' => now()->subDays(1),
                'updated_at' => now()->subDays(1),
            ],
            [
                'order_id' => 3,
                'product_id' => 14, // Philips Kettle
                'warranty_id' => 18,
                'product_name' => 'Philips Daily Collection Electric Kettle',
                'product_sku' => 'PHI-HD9306-1.5L',
                'quantity' => 3,
                'price' => 1999.00,
                'tax_amount' => 1078.29,
                'discount_amount' => 179.91,
                'total' => 6716.38,
                'product_snapshot' => json_encode([
                    'brand' => 'Philips',
                    'model' => 'HD9306/06',
                    'capacity' => '1.5L',
                    'power' => '1800W'
                ]),
                'warranty_snapshot' => json_encode([]),
                'created_at' => now()->subDays(1),
                'updated_at' => now()->subDays(1),
            ],

            // Order 4 - Philips Coffee Machine
            [
                'order_id' => 4,
                'product_id' => 11,
                'warranty_id' => 17,
                'product_name' => 'Philips 3200 Series Fully Automatic Espresso Machine',
                'product_sku' => 'PHI-EP3241-74',
                'quantity' => 1,
                'price' => 49999.00,
                'tax_amount' => 8999.82,
                'discount_amount' => 0.00,
                'total' => 58998.82,
                'product_snapshot' => json_encode([
                    'brand' => 'Philips',
                    'model' => 'EP3241/74',
                    'type' => 'Fully Automatic',
                    'milk_system' => 'LatteGo'
                ]),
                'warranty_snapshot' => json_encode([]),
                'created_at' => now()->subDays(35),
                'updated_at' => now()->subDays(35),
            ],

            // Order 5 - Cancelled order
            [
                'order_id' => 5,
                'product_id' => 10,
                'warranty_id' => 16,
                'product_name' => 'Samsung 28L Convection Microwave Oven',
                'product_sku' => 'SAM-MW-MC28H-28L',
                'quantity' => 1,
                'price' => 12999.00,
                'tax_amount' => 2339.82,
                'discount_amount' => 0.00,
                'total' => 15338.82,
                'product_snapshot' => json_encode([
                    'brand' => 'Samsung',
                    'model' => 'MC28H5015VK',
                    'capacity' => '28L',
                    'type' => 'Convection'
                ]),
                'warranty_snapshot' => json_encode([]),
                'created_at' => now()->subDays(15),
                'updated_at' => now()->subDays(15),
            ],
        ];

        DB::table('order_items')->insert($orderItems);

        $this->command->info('Orders and order items seeded successfully!');
    }
}
