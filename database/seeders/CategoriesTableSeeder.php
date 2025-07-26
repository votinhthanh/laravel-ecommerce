<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    public function run(): void
    {
        // Parent categories first
        $parentCategories = [
            [
                'id' => 1,
                'parent_id' => null,
                'name' => 'Home Appliances',
                'slug' => 'home-appliances',
                'description' => 'Essential appliances for modern home living',
                'icon' => 'home',
                'sort_order' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'parent_id' => null,
                'name' => 'Kitchen Appliances',
                'slug' => 'kitchen-appliances',
                'description' => 'Modern kitchen equipment and appliances',
                'icon' => 'kitchen',
                'sort_order' => 2,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'parent_id' => null,
                'name' => 'Entertainment',
                'slug' => 'entertainment',
                'description' => 'TVs, audio systems, and entertainment devices',
                'icon' => 'tv',
                'sort_order' => 3,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'parent_id' => null,
                'name' => 'Personal Care',
                'slug' => 'personal-care',
                'description' => 'Personal grooming and care appliances',
                'icon' => 'person',
                'sort_order' => 4,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'parent_id' => null,
                'name' => 'Climate Control',
                'slug' => 'climate-control',
                'description' => 'Air conditioning, heating, and ventilation',
                'icon' => 'air',
                'sort_order' => 5,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('categories')->insert($parentCategories);

        // Subcategories
        $subCategories = [
            // Home Appliances subcategories
            [
                'parent_id' => 1,
                'name' => 'Washing Machines',
                'slug' => 'washing-machines',
                'description' => 'Front load, top load, and washer dryer combos',
                'sort_order' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 1,
                'name' => 'Refrigerators',
                'slug' => 'refrigerators',
                'description' => 'Single door, double door, side-by-side refrigerators',
                'sort_order' => 2,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 1,
                'name' => 'Vacuum Cleaners',
                'slug' => 'vacuum-cleaners',
                'description' => 'Cordless, robot, and traditional vacuum cleaners',
                'sort_order' => 3,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 1,
                'name' => 'Water Heaters',
                'slug' => 'water-heaters',
                'description' => 'Electric and solar water heaters',
                'sort_order' => 4,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 1,
                'name' => 'Irons & Steamers',
                'slug' => 'irons-steamers',
                'description' => 'Steam irons and garment steamers',
                'sort_order' => 5,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Kitchen Appliances subcategories
            [
                'parent_id' => 2,
                'name' => 'Microwave Ovens',
                'slug' => 'microwave-ovens',
                'description' => 'Solo, grill, and convection microwave ovens',
                'sort_order' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 2,
                'name' => 'Coffee Makers',
                'slug' => 'coffee-makers',
                'description' => 'Espresso machines, drip coffee makers',
                'sort_order' => 2,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 2,
                'name' => 'Blenders & Mixers',
                'slug' => 'blenders-mixers',
                'description' => 'Hand blenders, stand mixers, food processors',
                'sort_order' => 3,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 2,
                'name' => 'Rice Cookers',
                'slug' => 'rice-cookers',
                'description' => 'Electric rice cookers and multi-cookers',
                'sort_order' => 4,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 2,
                'name' => 'Electric Kettles',
                'slug' => 'electric-kettles',
                'description' => 'Electric kettles and hot water dispensers',
                'sort_order' => 5,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 2,
                'name' => 'Air Fryers',
                'slug' => 'air-fryers',
                'description' => 'Digital air fryers and multi-cookers',
                'sort_order' => 6,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Entertainment subcategories
            [
                'parent_id' => 3,
                'name' => 'Televisions',
                'slug' => 'televisions',
                'description' => 'LED, OLED, QLED, and Smart TVs',
                'sort_order' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 3,
                'name' => 'Sound Systems',
                'slug' => 'sound-systems',
                'description' => 'Soundbars, home theaters, and speakers',
                'sort_order' => 2,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 3,
                'name' => 'Projectors',
                'slug' => 'projectors',
                'description' => 'Home theater and portable projectors',
                'sort_order' => 3,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Personal Care subcategories
            [
                'parent_id' => 4,
                'name' => 'Hair Dryers',
                'slug' => 'hair-dryers',
                'description' => 'Professional hair dryers and styling tools',
                'sort_order' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 4,
                'name' => 'Electric Shavers',
                'slug' => 'electric-shavers',
                'description' => 'Rotary and foil electric shavers',
                'sort_order' => 2,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 4,
                'name' => 'Trimmers',
                'slug' => 'trimmers',
                'description' => 'Hair trimmers and grooming kits',
                'sort_order' => 3,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Climate Control subcategories
            [
                'parent_id' => 5,
                'name' => 'Air Conditioners',
                'slug' => 'air-conditioners',
                'description' => 'Split, window, and portable air conditioners',
                'sort_order' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 5,
                'name' => 'Air Purifiers',
                'slug' => 'air-purifiers',
                'description' => 'HEPA air purifiers and air cleaners',
                'sort_order' => 2,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 5,
                'name' => 'Fans',
                'slug' => 'fans',
                'description' => 'Ceiling fans, stand fans, and tower fans',
                'sort_order' => 3,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 5,
                'name' => 'Dehumidifiers',
                'slug' => 'dehumidifiers',
                'description' => 'Room dehumidifiers and moisture control',
                'sort_order' => 4,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('categories')->insert($subCategories);

        $this->command->info('Categories table seeded successfully!');
    }
}
