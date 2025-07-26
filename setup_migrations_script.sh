#!/bin/bash

# E-commerce Electric Devices - Migration Setup Script
# ====================================================

echo "🚀 Setting up E-commerce Electric Devices Database..."

# Function to create migration file with content
create_migration() {
    local name=$1
    local filename=$2

    echo "📝 Creating migration: $name"

    # Create the migration and capture the output to get the filename
    output=$(./docker-helper.sh artisan make:migration $name 2>&1)

    # Extract the created filename from the output
    created_file=$(echo "$output" | grep -oP '(?<=\[).*(?=\])')

    if [ -n "$created_file" ]; then
        echo "   ✓ Created: $created_file"
        # Note: You'll need to manually copy the PHP content to each file
        echo "   → Copy the content from artifact '$filename' to this file"
    else
        echo "   ✗ Failed to create migration"
    fi
}

# Create all migrations in order
echo ""
echo "Creating migration files..."
echo "=========================="

create_migration "create_brands_table" "001 - Create Brands Table Migration"
create_migration "create_categories_table" "002 - Create Categories Table Migration"
create_migration "create_products_table" "003 - Create Products Table Migration"
create_migration "create_product_categories_table" "004 - Create Product Categories Pivot Table Migration"
create_migration "create_product_images_table" "005 - Create Product Images Table Migration"
create_migration "create_product_specifications_table" "006 - Create Product Specifications Table Migration"
create_migration "create_product_warranties_table" "007 - Create Product Warranties Table Migration"
create_migration "create_user_addresses_table" "008 - Create User Addresses Table Migration"
create_migration "create_coupons_table" "009 - Create Coupons Table Migration"
create_migration "create_shopping_carts_table" "010 - Create Shopping Carts Table Migration"
create_migration "create_cart_items_table" "011 - Create Cart Items Table Migration"
create_migration "create_orders_table" "012 - Create Orders Table Migration"
create_migration "create_order_items_table" "013 - Create Order Items Table Migration"
create_migration "create_reviews_table" "014 - Create Reviews Table Migration"
create_migration "create_wishlists_table" "015 - Create Wishlists Table Migration"

echo ""
echo "📋 Next Steps:"
echo "============="
echo "1. Copy the PHP code from each artifact to the corresponding migration file"
echo "2. Run: ./docker-helper.sh artisan migrate"
echo "3. (Optional) Create the seeder file:"
echo "   ./docker-helper.sh artisan make:seeder ElectricDevicesSeeder"
echo "4. Copy the seeder content and run:"
echo "   ./docker-helper.sh artisan db:seed --class=ElectricDevicesSeeder"
echo ""
echo "🔧 Useful Commands:"
echo "=================="
echo "Check migration status:  ./docker-helper.sh artisan migrate:status"
echo "Rollback migrations:     ./docker-helper.sh artisan migrate:rollback"
echo "Fresh migration:         ./docker-helper.sh artisan migrate:fresh"
echo "Fresh with seed:         ./docker-helper.sh artisan migrate:fresh --seed"
