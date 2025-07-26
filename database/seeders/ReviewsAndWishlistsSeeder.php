<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReviewsAndWishlistsSeeder extends Seeder
{
    public function run(): void
    {
        // Reviews
        $reviews = [
            // Samsung AC Reviews
            [
                'product_id' => 1,
                'user_id' => 2, // Nguyen Van An
                'order_item_id' => 1,
                'rating' => 5,
                'title' => 'Excellent cooling performance!',
                'comment' => 'The WindFree technology is amazing. No direct wind but still cools the room efficiently. Very happy with this purchase. Installation was professional and quick.',
                'is_verified_purchase' => true,
                'is_approved' => true,
                'helpful_count' => 15,
                'unhelpful_count' => 1,
                'quality_rating' => 5,
                'value_rating' => 4,
                'performance_rating' => 5,
                'created_at' => now()->subDays(4),
                'updated_at' => now()->subDays(4),
            ],
            [
                'product_id' => 1,
                'user_id' => 6, // Test User
                'order_item_id' => null,
                'rating' => 4,
                'title' => 'Good AC but a bit pricey',
                'comment' => 'Great features and energy efficient. The 5-star rating really shows in the electricity bill. Only concern is the initial cost.',
                'is_verified_purchase' => false,
                'is_approved' => true,
                'helpful_count' => 8,
                'unhelpful_count' => 2,
                'quality_rating' => 5,
                'value_rating' => 3,
                'performance_rating' => 4,
                'created_at' => now()->subDays(20),
                'updated_at' => now()->subDays(20),
            ],

            // Samsung TV Review
            [
                'product_id' => 8,
                'user_id' => 3, // Tran Thi Mai
                'order_item_id' => 2,
                'rating' => 5,
                'title' => 'Stunning picture quality',
                'comment' => 'The Neo QLED technology is incredible. Colors are vibrant, blacks are deep, and the 4K upscaling works great. Smart features are smooth and responsive.',
                'is_verified_purchase' => true,
                'is_approved' => true,
                'helpful_count' => 22,
                'unhelpful_count' => 0,
                'quality_rating' => 5,
                'value_rating' => 5,
                'performance_rating' => 5,
                'created_at' => now()->subDays(1),
                'updated_at' => now()->subDays(1),
            ],

            // LG Washing Machine Review
            [
                'product_id' => 3,
                'user_id' => 4, // Le Hoang Nam
                'order_item_id' => null,
                'rating' => 4,
                'title' => 'Quiet and efficient',
                'comment' => 'AI Direct Drive is really smart - adjusts washing patterns based on fabric. Very quiet operation. Steam wash feature is excellent for stubborn stains.',
                'is_verified_purchase' => false,
                'is_approved' => true,
                'helpful_count' => 12,
                'unhelpful_count' => 1,
                'quality_rating' => 4,
                'value_rating' => 4,
                'performance_rating' => 5,
                'created_at' => now()->subDays(15),
                'updated_at' => now()->subDays(15),
            ],

            // Dyson Vacuum Reviews
            [
                'product_id' => 9,
                'user_id' => 1, // Admin
                'order_item_id' => null,
                'rating' => 5,
                'title' => 'Best vacuum I\'ve ever owned',
                'comment' => 'The laser dust detection is a game changer. You can actually see the dust you\'re cleaning. Battery life is excellent and it\'s surprisingly lightweight.',
                'is_verified_purchase' => false,
                'is_approved' => true,
                'helpful_count' => 35,
                'unhelpful_count' => 3,
                'quality_rating' => 5,
                'value_rating' => 4,
                'performance_rating' => 5,
                'created_at' => now()->subDays(30),
                'updated_at' => now()->subDays(30),
            ],

            // Philips Coffee Machine Review
            [
                'product_id' => 11,
                'user_id' => 5, // Pham Thi Huong
                'order_item_id' => 6,
                'rating' => 5,
                'title' => 'Perfect coffee every time',
                'comment' => 'Makes excellent espresso and cappuccino. The LatteGo milk system is so easy to clean. Touch display is intuitive. Worth every penny!',
                'is_verified_purchase' => true,
                'is_approved' => true,
                'helpful_count' => 18,
                'unhelpful_count' => 0,
                'quality_rating' => 5,
                'value_rating' => 5,
                'performance_rating' => 5,
                'created_at' => now()->subDays(28),
                'updated_at' => now()->subDays(28),
            ],

            // Samsung Refrigerator Review
            [
                'product_id' => 5,
                'user_id' => 4, // Le Hoang Nam
                'order_item_id' => 4,
                'rating' => 4,
                'title' => 'Good refrigerator for small family',
                'comment' => 'Digital inverter is energy efficient. All round cooling keeps vegetables fresh longer. Only wish it had a water dispenser.',
                'is_verified_purchase' => true,
                'is_approved' => true,
                'helpful_count' => 10,
                'unhelpful_count' => 2,
                'quality_rating' => 4,
                'value_rating' => 4,
                'performance_rating' => 4,
                'created_at' => now()->subHours(12),
                'updated_at' => now()->subHours(12),
            ],

            // Dyson Hair Dryer Review
            [
                'product_id' => 12,
                'user_id' => 3, // Tran Thi Mai
                'order_item_id' => null,
                'rating' => 5,
                'title' => 'Professional results at home',
                'comment' => 'Dries hair super fast without extreme heat. My hair feels healthier and shinier. The magnetic attachments are brilliant.',
                'is_verified_purchase' => false,
                'is_approved' => true,
                'helpful_count' => 25,
                'unhelpful_count' => 4,
                'quality_rating' => 5,
                'value_rating' => 3,
                'performance_rating' => 5,
                'created_at' => now()->subDays(45),
                'updated_at' => now()->subDays(45),
            ],

            // Philips Kettle Reviews
            [
                'product_id' => 14,
                'user_id' => 4, // Le Hoang Nam
                'order_item_id' => 5,
                'rating' => 5,
                'title' => 'Simple and reliable',
                'comment' => 'Boils water quickly. Auto shut-off gives peace of mind. Good capacity for the price. Build quality is solid.',
                'is_verified_purchase' => true,
                'is_approved' => true,
                'helpful_count' => 5,
                'unhelpful_count' => 0,
                'quality_rating' => 4,
                'value_rating' => 5,
                'performance_rating' => 5,
                'created_at' => now()->subHours(8),
                'updated_at' => now()->subHours(8),
            ],

            // Pending review (not approved)
            [
                'product_id' => 2,
                'user_id' => 2,
                'order_item_id' => null,
                'rating' => 1,
                'title' => 'Disappointed',
                'comment' => 'This review contains inappropriate content that needs moderation...',
                'is_verified_purchase' => false,
                'is_approved' => false,
                'helpful_count' => 0,
                'unhelpful_count' => 0,
                'quality_rating' => 5,
                'value_rating' => 4,
                'performance_rating' => 5,
                'created_at' => now()->subHours(2),
                'updated_at' => now()->subHours(2),
            ],
        ];

        DB::table('reviews')->insert($reviews);

        // Wishlists
        $wishlists = [
            // Nguyen Van An's wishlist
            [
                'user_id' => 2,
                'product_id' => 7, // Sony TV
                'notes' => 'Want to upgrade my TV',
                'created_at' => now()->subDays(20),
                'updated_at' => now()->subDays(20),
            ],
            [
                'user_id' => 2,
                'product_id' => 9, // Dyson Vacuum
                'notes' => 'For new apartment',
                'created_at' => now()->subDays(15),
                'updated_at' => now()->subDays(15),
            ],
            [
                'user_id' => 2,
                'product_id' => 11, // Philips Coffee Machine
                'notes' => null,
                'created_at' => now()->subDays(10),
                'updated_at' => now()->subDays(10),
            ],

            // Tran Thi Mai's wishlist
            [
                'user_id' => 3,
                'product_id' => 12, // Dyson Hair Dryer
                'notes' => 'Birthday gift idea',
                'created_at' => now()->subDays(25),
                'updated_at' => now()->subDays(25),
            ],
            [
                'user_id' => 3,
                'product_id' => 13, // Dyson Air Purifier
                'notes' => 'For bedroom',
                'created_at' => now()->subDays(22),
                'updated_at' => now()->subDays(22),
            ],
            [
                'user_id' => 3,
                'product_id' => 6, // LG Refrigerator
                'notes' => 'Need bigger fridge',
                'created_at' => now()->subDays(18),
                'updated_at' => now()->subDays(18),
            ],

            // Le Hoang Nam's wishlist
            [
                'user_id' => 4,
                'product_id' => 8, // Samsung TV
                'notes' => 'For living room upgrade',
                'created_at' => now()->subDays(30),
                'updated_at' => now()->subDays(30),
            ],
            [
                'user_id' => 4,
                'product_id' => 1, // Samsung AC
                'notes' => 'Summer preparation',
                'created_at' => now()->subDays(5),
                'updated_at' => now()->subDays(5),
            ],

            // Pham Thi Huong's wishlist
            [
                'user_id' => 5,
                'product_id' => 3, // LG Washing Machine
                'notes' => 'Replace old machine',
                'created_at' => now()->subDays(40),
                'updated_at' => now()->subDays(40),
            ],
            [
                'user_id' => 5,
                'product_id' => 10, // Samsung Microwave
                'notes' => null,
                'created_at' => now()->subDays(35),
                'updated_at' => now()->subDays(35),
            ],
            [
                'user_id' => 5,
                'product_id' => 2, // Daikin AC
                'notes' => 'For guest room',
                'created_at' => now()->subDays(12),
                'updated_at' => now()->subDays(12),
            ],

            // Test User's wishlist
            [
                'user_id' => 6,
                'product_id' => 9, // Dyson Vacuum
                'notes' => 'Comparing vacuum options',
                'created_at' => now()->subDays(8),
                'updated_at' => now()->subDays(8),
            ],
            [
                'user_id' => 6,
                'product_id' => 7, // Sony TV
                'notes' => 'Dream TV!',
                'created_at' => now()->subDays(3),
                'updated_at' => now()->subDays(3),
            ],
        ];

        DB::table('wishlists')->insert($wishlists);

        $this->command->info('Reviews and wishlists seeded successfully!');
    }
}
