<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('technology_categories', function (Blueprint $table) {
            $table->id();
            $table->json('name'); // Multilingual name
            $table->json('description'); // Multilingual description
            $table->string('icon_svg_path'); // SVG path for the category icon
            $table->string('color_class'); // CSS color class (primary, accent, success, etc.)
            $table->integer('sort_order')->default(0); // Order for display
            $table->boolean('is_active')->default(true); // Whether the category is active
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technology_categories');
    }
};
