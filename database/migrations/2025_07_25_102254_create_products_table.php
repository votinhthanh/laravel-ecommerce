<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id')->constrained()->onDelete('restrict');
            $table->string('sku')->unique();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('short_description', 500)->nullable();

            // Electric device specific fields
            $table->string('model_number')->nullable();
            $table->string('power_consumption')->nullable(); // Watts
            $table->string('voltage')->nullable(); // Voltage requirements
            $table->string('frequency')->nullable(); // Hz
            $table->string('energy_rating')->nullable(); // A+, A++, etc.
            $table->string('dimensions')->nullable(); // LxWxH
            $table->decimal('weight', 10, 2)->nullable(); // in kg
            $table->string('color')->nullable();
            $table->string('material')->nullable();
            $table->string('country_of_origin')->nullable();

            // Pricing
            $table->decimal('price', 12, 2);
            $table->decimal('compare_price', 12, 2)->nullable(); // Original price
            $table->decimal('cost', 12, 2)->nullable(); // Cost price
            $table->decimal('tax_rate', 5, 2)->default(0);

            // Status
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->boolean('requires_shipping')->default(true);
            $table->integer('views_count')->default(0);

            // Stock management
            $table->boolean('track_stock')->default(true);
            $table->integer('stock_quantity')->default(0);
            $table->integer('low_stock_threshold')->default(5);

            $table->timestamps();

            $table->index('sku');
            $table->index('slug');
            $table->index('brand_id');
            $table->index('is_featured');
            $table->index('is_active');
            $table->index('price');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
