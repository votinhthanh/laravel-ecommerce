<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductRelationsSeeder extends Seeder
{
    public function run(): void
    {
        // Product Categories
        $productCategories = [
            // Samsung AC - Categories: Air Conditioners, Climate Control
            ['product_id' => 1, 'category_id' => 23, 'is_primary' => true], // Air Conditioners
            ['product_id' => 1, 'category_id' => 5, 'is_primary' => false], // Climate Control

            // Daikin AC
            ['product_id' => 2, 'category_id' => 23, 'is_primary' => true],
            ['product_id' => 2, 'category_id' => 5, 'is_primary' => false],

            // LG Washing Machine - Categories: Washing Machines, Home Appliances
            ['product_id' => 3, 'category_id' => 6, 'is_primary' => true], // Washing Machines
            ['product_id' => 3, 'category_id' => 1, 'is_primary' => false], // Home Appliances

            // Samsung Washing Machine
            ['product_id' => 4, 'category_id' => 6, 'is_primary' => true],
            ['product_id' => 4, 'category_id' => 1, 'is_primary' => false],

            // Samsung Refrigerator - Categories: Refrigerators, Home Appliances
            ['product_id' => 5, 'category_id' => 7, 'is_primary' => true],
            ['product_id' => 5, 'category_id' => 1, 'is_primary' => false],

            // LG Refrigerator
            ['product_id' => 6, 'category_id' => 7, 'is_primary' => true],
            ['product_id' => 6, 'category_id' => 1, 'is_primary' => false],

            // Sony TV - Categories: Televisions, Entertainment
            ['product_id' => 7, 'category_id' => 17, 'is_primary' => true],
            ['product_id' => 7, 'category_id' => 3, 'is_primary' => false],

            // Samsung TV
            ['product_id' => 8, 'category_id' => 17, 'is_primary' => true],
            ['product_id' => 8, 'category_id' => 3, 'is_primary' => false],

            // Dyson Vacuum - Categories: Vacuum Cleaners, Home Appliances
            ['product_id' => 9, 'category_id' => 8, 'is_primary' => true],
            ['product_id' => 9, 'category_id' => 1, 'is_primary' => false],

            // Samsung Microwave - Categories: Microwave Ovens, Kitchen Appliances
            ['product_id' => 10, 'category_id' => 11, 'is_primary' => true],
            ['product_id' => 10, 'category_id' => 2, 'is_primary' => false],

            // Philips Coffee Maker - Categories: Coffee Makers, Kitchen Appliances
            ['product_id' => 11, 'category_id' => 12, 'is_primary' => true],
            ['product_id' => 11, 'category_id' => 2, 'is_primary' => false],

            // Dyson Hair Dryer - Categories: Hair Dryers, Personal Care
            ['product_id' => 12, 'category_id' => 20, 'is_primary' => true],
            ['product_id' => 12, 'category_id' => 4, 'is_primary' => false],

            // Dyson Air Purifier - Categories: Air Purifiers, Climate Control
            ['product_id' => 13, 'category_id' => 24, 'is_primary' => true],
            ['product_id' => 13, 'category_id' => 5, 'is_primary' => false],

            // Philips Kettle - Categories: Electric Kettles, Kitchen Appliances
            ['product_id' => 14, 'category_id' => 15, 'is_primary' => true],
            ['product_id' => 14, 'category_id' => 2, 'is_primary' => false],
        ];

        foreach ($productCategories as &$pc) {
            $pc['created_at'] = now();
            $pc['updated_at'] = now();
        }
        DB::table('product_categories')->insert($productCategories);

        // Product Images
        $productImages = [
            // Samsung AC Images
            ['product_id' => 1, 'image_path' => 'products/samsung-ac-ar5500-main.jpg', 'alt_text' => 'Samsung WindFree AC Front View', 'is_primary' => true, 'sort_order' => 1],
            ['product_id' => 1, 'image_path' => 'products/samsung-ac-ar5500-side.jpg', 'alt_text' => 'Samsung WindFree AC Side View', 'is_primary' => false, 'sort_order' => 2],
            ['product_id' => 1, 'image_path' => 'products/samsung-ac-ar5500-remote.jpg', 'alt_text' => 'Samsung AC Remote Control', 'is_primary' => false, 'sort_order' => 3],

            // Add primary images for all products
            ['product_id' => 2, 'image_path' => 'products/daikin-ac-main.jpg', 'alt_text' => 'Daikin AC Front View', 'is_primary' => true, 'sort_order' => 1],
            ['product_id' => 3, 'image_path' => 'products/lg-washing-machine-main.jpg', 'alt_text' => 'LG Front Load Washing Machine', 'is_primary' => true, 'sort_order' => 1],
            ['product_id' => 4, 'image_path' => 'products/samsung-washing-machine-main.jpg', 'alt_text' => 'Samsung Top Load Washing Machine', 'is_primary' => true, 'sort_order' => 1],
            ['product_id' => 5, 'image_path' => 'products/samsung-refrigerator-main.jpg', 'alt_text' => 'Samsung Double Door Refrigerator', 'is_primary' => true, 'sort_order' => 1],
            ['product_id' => 6, 'image_path' => 'products/lg-refrigerator-main.jpg', 'alt_text' => 'LG Smart Inverter Refrigerator', 'is_primary' => true, 'sort_order' => 1],
            ['product_id' => 7, 'image_path' => 'products/sony-oled-tv-main.jpg', 'alt_text' => 'Sony BRAVIA OLED TV', 'is_primary' => true, 'sort_order' => 1],
            ['product_id' => 8, 'image_path' => 'products/samsung-neo-qled-main.jpg', 'alt_text' => 'Samsung Neo QLED TV', 'is_primary' => true, 'sort_order' => 1],
            ['product_id' => 9, 'image_path' => 'products/dyson-v15-main.jpg', 'alt_text' => 'Dyson V15 Detect Vacuum', 'is_primary' => true, 'sort_order' => 1],
            ['product_id' => 10, 'image_path' => 'products/samsung-microwave-main.jpg', 'alt_text' => 'Samsung Convection Microwave', 'is_primary' => true, 'sort_order' => 1],
            ['product_id' => 11, 'image_path' => 'products/philips-coffee-main.jpg', 'alt_text' => 'Philips Automatic Espresso Machine', 'is_primary' => true, 'sort_order' => 1],
            ['product_id' => 12, 'image_path' => 'products/dyson-hairdryer-main.jpg', 'alt_text' => 'Dyson Supersonic Hair Dryer', 'is_primary' => true, 'sort_order' => 1],
            ['product_id' => 13, 'image_path' => 'products/dyson-purifier-main.jpg', 'alt_text' => 'Dyson Pure Cool Air Purifier', 'is_primary' => true, 'sort_order' => 1],
            ['product_id' => 14, 'image_path' => 'products/philips-kettle-main.jpg', 'alt_text' => 'Philips Electric Kettle', 'is_primary' => true, 'sort_order' => 1],
        ];

        foreach ($productImages as &$image) {
            $image['created_at'] = now();
            $image['updated_at'] = now();
        }
        DB::table('product_images')->insert($productImages);

        // Product Specifications
        $specifications = [
            // Samsung AC Specifications
            ['product_id' => 1, 'spec_name' => 'Cooling Capacity', 'spec_value' => '5.1', 'spec_unit' => 'kW', 'spec_group' => 'Performance', 'sort_order' => 1],
            ['product_id' => 1, 'spec_name' => 'Annual Energy Consumption', 'spec_value' => '807.23', 'spec_unit' => 'kWh', 'spec_group' => 'Energy', 'sort_order' => 2],
            ['product_id' => 1, 'spec_name' => 'ISEER', 'spec_value' => '4.67', 'spec_unit' => null, 'spec_group' => 'Energy', 'sort_order' => 3],
            ['product_id' => 1, 'spec_name' => 'Noise Level (Indoor)', 'spec_value' => '39', 'spec_unit' => 'dB', 'spec_group' => 'Performance', 'sort_order' => 4],
            ['product_id' => 1, 'spec_name' => 'Refrigerant', 'spec_value' => 'R32', 'spec_unit' => null, 'spec_group' => 'Technical', 'sort_order' => 5],

            // LG Washing Machine Specifications
            ['product_id' => 3, 'spec_name' => 'Wash Programs', 'spec_value' => '14', 'spec_unit' => null, 'spec_group' => 'Features', 'sort_order' => 1],
            ['product_id' => 3, 'spec_name' => 'Maximum Spin Speed', 'spec_value' => '1400', 'spec_unit' => 'rpm', 'spec_group' => 'Performance', 'sort_order' => 2],
            ['product_id' => 3, 'spec_name' => 'Water Consumption', 'spec_value' => '48', 'spec_unit' => 'L/cycle', 'spec_group' => 'Efficiency', 'sort_order' => 3],
            ['product_id' => 3, 'spec_name' => 'Drum Volume', 'spec_value' => '55', 'spec_unit' => 'L', 'spec_group' => 'Capacity', 'sort_order' => 4],

            // Sony TV Specifications
            ['product_id' => 7, 'spec_name' => 'Screen Size', 'spec_value' => '55', 'spec_unit' => 'inches', 'spec_group' => 'Display', 'sort_order' => 1],
            ['product_id' => 7, 'spec_name' => 'Resolution', 'spec_value' => '3840 x 2160', 'spec_unit' => 'pixels', 'spec_group' => 'Display', 'sort_order' => 2],
            ['product_id' => 7, 'spec_name' => 'Display Type', 'spec_value' => 'OLED', 'spec_unit' => null, 'spec_group' => 'Display', 'sort_order' => 3],
            ['product_id' => 7, 'spec_name' => 'HDR Support', 'spec_value' => 'HDR10, Dolby Vision, HLG', 'spec_unit' => null, 'spec_group' => 'Display', 'sort_order' => 4],
            ['product_id' => 7, 'spec_name' => 'Refresh Rate', 'spec_value' => '120', 'spec_unit' => 'Hz', 'spec_group' => 'Display', 'sort_order' => 5],
            ['product_id' => 7, 'spec_name' => 'Audio Output', 'spec_value' => '30', 'spec_unit' => 'W', 'spec_group' => 'Audio', 'sort_order' => 6],

            // Dyson Vacuum Specifications
            ['product_id' => 9, 'spec_name' => 'Runtime', 'spec_value' => '60', 'spec_unit' => 'minutes', 'spec_group' => 'Battery', 'sort_order' => 1],
            ['product_id' => 9, 'spec_name' => 'Charge Time', 'spec_value' => '4.5', 'spec_unit' => 'hours', 'spec_group' => 'Battery', 'sort_order' => 2],
            ['product_id' => 9, 'spec_name' => 'Bin Capacity', 'spec_value' => '0.77', 'spec_unit' => 'L', 'spec_group' => 'Capacity', 'sort_order' => 3],
            ['product_id' => 9, 'spec_name' => 'Filtration', 'spec_value' => 'Whole-machine HEPA', 'spec_unit' => null, 'spec_group' => 'Features', 'sort_order' => 4],
        ];

        foreach ($specifications as &$spec) {
            $spec['created_at'] = now();
            $spec['updated_at'] = now();
        }
        DB::table('product_specifications')->insert($specifications);

        // Product Warranties
        $warranties = [
            // Samsung AC Warranties
            ['product_id' => 1, 'warranty_type' => 'manufacturer', 'duration_months' => 12, 'coverage_details' => '1 year comprehensive warranty on product', 'exclusions' => 'Physical damage, voltage fluctuations', 'price' => 0, 'is_default' => true],
            ['product_id' => 1, 'warranty_type' => 'extended', 'duration_months' => 36, 'coverage_details' => '3 years extended warranty including gas charging', 'exclusions' => 'Physical damage', 'price' => 3999, 'is_default' => true],
            ['product_id' => 1, 'warranty_type' => 'manufacturer', 'duration_months' => 60, 'coverage_details' => '5 years warranty on compressor', 'exclusions' => 'Gas charging, physical damage', 'price' => 0, 'is_default' => true],

            // LG Washing Machine Warranties
            ['product_id' => 3, 'warranty_type' => 'manufacturer', 'duration_months' => 24, 'coverage_details' => '2 years comprehensive warranty', 'exclusions' => 'Physical damage', 'price' => 0, 'is_default' => true],
            ['product_id' => 3, 'warranty_type' => 'manufacturer', 'duration_months' => 120, 'coverage_details' => '10 years warranty on motor', 'exclusions' => 'Physical damage', 'price' => 0, 'is_default' => true],

            // Sony TV Warranties
            ['product_id' => 7, 'warranty_type' => 'manufacturer', 'duration_months' => 36, 'coverage_details' => '3 years warranty on panel and parts', 'exclusions' => 'Physical damage', 'price' => 0, 'is_default' => true],
            ['product_id' => 7, 'warranty_type' => 'extended', 'duration_months' => 60, 'coverage_details' => '5 years comprehensive protection with accidental damage', 'exclusions' => 'Physical damage', 'price' => 14999, 'is_default' => true],

            // Dyson Vacuum Warranties
            ['product_id' => 9, 'warranty_type' => 'manufacturer', 'duration_months' => 24, 'coverage_details' => '2 years parts and labor warranty', 'exclusions' => 'Physical damage', 'price' => 0, 'is_default' => true],

            // Default warranties for other products
            ['product_id' => 2, 'warranty_type' => 'manufacturer', 'duration_months' => 12, 'coverage_details' => '1 year manufacturer warranty', 'exclusions' => 'Physical damage', 'price' => 0, 'is_default' => true],
            ['product_id' => 4, 'warranty_type' => 'manufacturer', 'duration_months' => 24, 'coverage_details' => '2 years comprehensive warranty', 'exclusions' => 'Physical damage', 'price' => 0, 'is_default' => true],
            ['product_id' => 5, 'warranty_type' => 'manufacturer', 'duration_months' => 12, 'coverage_details' => '1 year manufacturer warranty', 'exclusions' => 'Physical damage', 'price' => 0, 'is_default' => true],
            ['product_id' => 6, 'warranty_type' => 'manufacturer', 'duration_months' => 12, 'coverage_details' => '1 year manufacturer warranty', 'exclusions' => 'Physical damage', 'price' => 0, 'is_default' => true],
            ['product_id' => 8, 'warranty_type' => 'manufacturer', 'duration_months' => 12, 'coverage_details' => '1 year manufacturer warranty', 'exclusions' => 'Physical damage', 'price' => 0, 'is_default' => true],
            ['product_id' => 10, 'warranty_type' => 'manufacturer', 'duration_months' => 12, 'coverage_details' => '1 year manufacturer warranty', 'exclusions' => 'Physical damage', 'price' => 0, 'is_default' => true],
            ['product_id' => 11, 'warranty_type' => 'manufacturer', 'duration_months' => 24, 'coverage_details' => '2 years international warranty', 'exclusions' => 'Physical damage', 'price' => 0, 'is_default' => true],
            ['product_id' => 12, 'warranty_type' => 'manufacturer', 'duration_months' => 24, 'coverage_details' => '2 years parts and labor warranty', 'exclusions' => 'Physical damage', 'price' => 0, 'is_default' => true],
            ['product_id' => 13, 'warranty_type' => 'manufacturer', 'duration_months' => 24, 'coverage_details' => '2 years parts and labor warranty', 'exclusions' => 'Physical damage', 'price' => 0, 'is_default' => true],
            ['product_id' => 14, 'warranty_type' => 'manufacturer', 'duration_months' => 24, 'coverage_details' => '2 years international warranty', 'exclusions' => 'Physical damage', 'price' => 0, 'is_default' => true],
        ];

        foreach ($warranties as &$warranty) {
            $warranty['created_at'] = now();
            $warranty['updated_at'] = now();
        }
        DB::table('product_warranties')->insert($warranties);

        $this->command->info('Product relations seeded successfully!');
    }
}
