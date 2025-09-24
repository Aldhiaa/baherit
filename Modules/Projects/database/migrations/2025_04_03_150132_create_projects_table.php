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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('project_categories')->onDelete('cascade');
            $table->string('slug')->unique();
            $table->json('title');
            $table->json('description');
            $table->json('features')->nullable();
            $table->json('client_name')->nullable();
            $table->date('completion_date')->nullable();
            $table->string('featured_image');
            $table->string('github_url')->nullable();
            $table->string('demo_url')->nullable();
            $table->string('video_url')->nullable();
            $table->string('client_logo')->nullable();
            $table->json('gallery')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
