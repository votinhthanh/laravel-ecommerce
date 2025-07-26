<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->command->info('Starting database seeding for Electric Devices E-commerce...');

        // Disable foreign key checks for seeding
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Truncate all tables to start fresh (optional - comment out if you want to keep existing data)
        $this->truncateTables();

        // Run seeders in proper order based on foreign key dependencies
        $this->call([
            UsersTableSeeder::class,          // No dependencies
            BrandsTableSeeder::class,         // No dependencies
            CategoriesTableSeeder::class,     // Self-referential only
            ProductsTableSeeder::class,       // Depends on brands
            ProductRelationsSeeder::class,    // Depends on products, categories
            CouponsAndAddressesSeeder::class, // Depends on users
            ShoppingCartsSeeder::class,       // Depends on users, products, coupons
            OrdersSeeder::class,              // Depends on users, addresses, products
            ReviewsAndWishlistsSeeder::class, // Depends on products, users, orders
        ]);

        // Re-enable foreign key checks
        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $this->command->info('Database seeding completed successfully!');
        $this->command->info('');
        $this->command->info('Test Accounts:');
        $this->command->info('Admin: admin@electricshop.com / password123');
        $this->command->info('Customer: nguyen.an@example.com / password123');
        $this->command->info('');
        $this->command->info('Sample Data Created:');
        $this->command->info('- 6 Users (1 admin, 5 customers)');
        $this->command->info('- 12 Brands');
        $this->command->info('- 26 Categories (5 parent, 21 subcategories)');
        $this->command->info('- 14 Products with images, specs, and warranties');
        $this->command->info('- 6 Coupons');
        $this->command->info('- 9 User addresses');
        $this->command->info('- 4 Shopping carts with items');
        $this->command->info('- 5 Orders with items');
        $this->command->info('- 10 Product reviews');
        $this->command->info('- 13 Wishlist items');
    }

    /**
     * Truncate all tables (optional - use with caution)
     */
    private function truncateTables(): void
    {
        $tables = [
            'wishlists',
            'reviews',
            'order_items',
            'orders',
            'cart_items',
            'shopping_carts',
            'user_addresses',
            'coupons',
            'product_warranties',
            'product_specifications',
            'product_images',
            'product_categories',
            'products',
            'categories',
            'brands',
            // Don't truncate users table if you want to keep existing users
            // 'users',
        ];

        foreach ($tables as $table) {
            \DB::table($table)->truncate();
        }

        $this->command->info('Tables truncated successfully.');
    }
}
