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
        Schema::create('case_studies', function (Blueprint $table) {
            $table->id();
            $table->json('title'); // Multilingual title
            $table->string('industry'); // healthcare, finance, manufacturing, retail
            $table->json('description'); // Multilingual description
            $table->json('challenge'); // Multilingual challenge
            $table->json('solution'); // Multilingual solution
            $table->json('results'); // Multilingual results
            $table->json('metrics')->nullable(); // JSON array of key metrics (multilingual)
            $table->string('image_url')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->date('completed_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_studies');
    }
};
