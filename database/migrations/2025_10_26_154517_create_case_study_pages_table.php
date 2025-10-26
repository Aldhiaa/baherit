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
        Schema::create('case_study_pages', function (Blueprint $table) {
            $table->id();
            $table->string('page_name')->unique(); // To identify different case study pages
            $table->json('hero_title')->nullable();
            $table->json('hero_description')->nullable();
            $table->json('hero_button_primary')->nullable();
            $table->json('hero_button_secondary')->nullable();
            $table->json('search_placeholder')->nullable();
            $table->json('filter_all')->nullable();
            $table->json('filter_healthcare')->nullable();
            $table->json('filter_finance')->nullable();
            $table->json('filter_manufacturing')->nullable();
            $table->json('filter_retail')->nullable();
            $table->json('reset')->nullable();
            $table->json('featured_title')->nullable();
            $table->json('featured_subtitle')->nullable();
            $table->json('completed')->nullable();
            $table->json('view_full_case_study')->nullable();
            $table->json('start_similar_project')->nullable();
            $table->json('grid_title')->nullable();
            $table->json('grid_subtitle')->nullable();
            $table->json('view_case_study')->nullable();
            $table->json('load_more')->nullable();
            $table->json('metrics_title')->nullable();
            $table->json('metrics_subtitle')->nullable();
            $table->json('projects_delivered')->nullable();
            $table->json('client_satisfaction')->nullable();
            $table->json('avg_roi')->nullable();
            $table->json('years_experience')->nullable();
            $table->json('cta_title')->nullable();
            $table->json('cta_description')->nullable();
            $table->json('cta_button_primary')->nullable();
            $table->json('cta_button_secondary')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_study_pages');
    }
};
