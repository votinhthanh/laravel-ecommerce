<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BrandsTableSeeder extends Seeder
{
    public function run(): void
    {
        $brands = [
            [
                'name' => 'Samsung',
                'slug' => 'samsung',
                'logo' => 'brands/samsung-logo.png',
                'description' => 'Samsung is a South Korean multinational conglomerate, known for its consumer electronics, including smartphones, televisions, and home appliances.',
                'website' => 'https://www.samsung.com',
                'country' => 'South Korea',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'LG',
                'slug' => 'lg',
                'logo' => 'brands/lg-logo.png',
                'description' => 'LG Electronics is a South Korean multinational electronics company that manufactures electronics, appliances and mobile devices.',
                'website' => 'https://www.lg.com',
                'country' => 'South Korea',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sony',
                'slug' => 'sony',
                'logo' => 'brands/sony-logo.png',
                'description' => 'Sony Corporation is a Japanese multinational conglomerate corporation known for consumer and professional electronics.',
                'website' => 'https://www.sony.com',
                'country' => 'Japan',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Panasonic',
                'slug' => 'panasonic',
                'logo' => 'brands/panasonic-logo.png',
                'description' => 'Panasonic Corporation is a major Japanese multinational electronics corporation, one of the largest in the world.',
                'website' => 'https://www.panasonic.com',
                'country' => 'Japan',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Philips',
                'slug' => 'philips',
                'logo' => 'brands/philips-logo.png',
                'description' => 'Philips is a Dutch multinational conglomerate corporation that focuses on healthcare and consumer lifestyle products.',
                'website' => 'https://www.philips.com',
                'country' => 'Netherlands',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bosch',
                'slug' => 'bosch',
                'logo' => 'brands/bosch-logo.png',
                'description' => 'Robert Bosch GmbH is a German multinational engineering and technology company, known for home appliances and power tools.',
                'website' => 'https://www.bosch.com',
                'country' => 'Germany',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dyson',
                'slug' => 'dyson',
                'logo' => 'brands/dyson-logo.png',
                'description' => 'Dyson is a British technology company that designs and manufactures household appliances such as vacuum cleaners, air purifiers, and hair dryers.',
                'website' => 'https://www.dyson.com',
                'country' => 'United Kingdom',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Toshiba',
                'slug' => 'toshiba',
                'logo' => 'brands/toshiba-logo.png',
                'description' => 'Toshiba Corporation is a Japanese multinational conglomerate headquartered in Tokyo, Japan.',
                'website' => 'https://www.toshiba.com',
                'country' => 'Japan',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sharp',
                'slug' => 'sharp',
                'logo' => 'brands/sharp-logo.png',
                'description' => 'Sharp Corporation is a Japanese multinational corporation that designs and manufactures electronic products.',
                'website' => 'https://www.sharp.com',
                'country' => 'Japan',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Electrolux',
                'slug' => 'electrolux',
                'logo' => 'brands/electrolux-logo.png',
                'description' => 'Electrolux is a Swedish multinational home appliance manufacturer, known for vacuum cleaners, kitchen appliances, and laundry appliances.',
                'website' => 'https://www.electrolux.com',
                'country' => 'Sweden',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Daikin',
                'slug' => 'daikin',
                'logo' => 'brands/daikin-logo.png',
                'description' => 'Daikin Industries is a Japanese multinational air conditioning manufacturing company.',
                'website' => 'https://www.daikin.com',
                'country' => 'Japan',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Midea',
                'slug' => 'midea',
                'logo' => 'brands/midea-logo.png',
                'description' => 'Midea Group is a Chinese electrical appliance manufacturer, offering products like air conditioning, refrigerators, and washing machines.',
                'website' => 'https://www.midea.com',
                'country' => 'China',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('brands')->insert($brands);

        $this->command->info('Brands table seeded successfully!');
    }
}
