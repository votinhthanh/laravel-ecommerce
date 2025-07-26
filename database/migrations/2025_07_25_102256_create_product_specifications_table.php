<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_specifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->string('spec_name'); // e.g., "Battery Life", "Screen Size", "Processor"
            $table->string('spec_value'); // e.g., "10 hours", "15.6 inches", "Intel i7"
            $table->string('spec_unit')->nullable(); // e.g., "hours", "inches", null
            $table->string('spec_group')->nullable(); // e.g., "Technical", "Physical", "Performance"
            $table->integer('sort_order')->default(0);
            $table->timestamps();

            $table->index('product_id');
            $table->index('spec_group');
            $table->index('sort_order');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_specifications');
    }
};
