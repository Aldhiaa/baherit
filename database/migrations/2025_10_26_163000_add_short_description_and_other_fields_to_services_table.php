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
        Schema::table('services', function (Blueprint $table) {
            $table->string('slug')->after('title')->nullable();
            $table->text('short_description')->after('description')->nullable();
            $table->string('image')->nullable()->after('icon');
            $table->integer('order')->default(0)->after('image');
            $table->boolean('is_featured')->default(false)->after('order');
            $table->boolean('is_active')->default(true)->after('is_featured');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn(['slug', 'short_description', 'image', 'order', 'is_featured', 'is_active']);
        });
    }
};
