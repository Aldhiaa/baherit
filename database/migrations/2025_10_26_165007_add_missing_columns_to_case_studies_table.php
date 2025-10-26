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
        Schema::table('case_studies', function (Blueprint $table) {
            $table->json('features')->nullable()->after('results');
            $table->json('client_name')->nullable()->after('features');
            $table->string('client_logo')->nullable()->after('client_name');
            $table->json('gallery')->nullable()->after('client_logo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('case_studies', function (Blueprint $table) {
            $table->dropColumn(['features', 'client_name', 'client_logo', 'gallery']);
        });
    }
};
