<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_warranties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->string('warranty_type'); // 'manufacturer', 'extended', 'seller'
            $table->integer('duration_months');
            $table->text('coverage_details');
            $table->text('exclusions')->nullable();
            $table->decimal('price', 10, 2)->default(0); // For extended warranties
            $table->boolean('is_default')->default(false);
            $table->timestamps();

            $table->index('product_id');
            $table->index('warranty_type');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_variants');
    }
};
