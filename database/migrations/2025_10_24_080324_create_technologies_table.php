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
        Schema::create('technologies', function (Blueprint $table) {
            $table->id();
            $table->json('name'); // Multilingual name
            $table->string('category'); // frontend, backend, cloud, database, mobile, emerging
            $table->json('description')->nullable(); // Multilingual description
            $table->string('logo_url')->nullable();
            $table->integer('proficiency_level')->default(0); // 0-100
            $table->json('tags')->nullable(); // JSON array of related tags (multilingual)
            $table->boolean('is_featured')->default(false);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technologies');
    }
};
