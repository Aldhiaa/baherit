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
        Schema::create('service_pages', function (Blueprint $table) {
            $table->id();
            $table->string('page_name')->unique(); // To identify different service pages
            $table->json('hero_title')->nullable();
            $table->json('hero_highlight')->nullable();
            $table->json('hero_description')->nullable();
            $table->json('hero_button_primary')->nullable();
            $table->json('hero_button_secondary')->nullable();
            $table->json('find_title')->nullable();
            $table->json('find_description')->nullable();
            $table->json('filter_all')->nullable();
            $table->json('filter_development')->nullable();
            $table->json('filter_cloud')->nullable();
            $table->json('filter_consulting')->nullable();
            $table->json('reset')->nullable();
            $table->json('technology_title')->nullable();
            $table->json('technology_description')->nullable();
            $table->json('frontend')->nullable();
            $table->json('backend')->nullable();
            $table->json('database')->nullable();
            $table->json('cloud')->nullable();
            $table->json('learn_more')->nullable();
            $table->json('process_title')->nullable();
            $table->json('process_description')->nullable();
            $table->json('process_discovery')->nullable();
            $table->json('process_discovery_desc')->nullable();
            $table->json('process_design')->nullable();
            $table->json('process_design_desc')->nullable();
            $table->json('process_development')->nullable();
            $table->json('process_development_desc')->nullable();
            $table->json('process_deployment')->nullable();
            $table->json('process_deployment_desc')->nullable();
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
        Schema::dropIfExists('service_pages');
    }
};
