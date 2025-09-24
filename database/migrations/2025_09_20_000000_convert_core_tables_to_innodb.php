<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! in_array(DB::getDriverName(), ['mysql', 'mariadb'])) {
            return;
        }

        foreach (['users', 'password_reset_tokens', 'sessions'] as $table) {
            if (! Schema::hasTable($table)) {
                continue;
            }

            try {
                DB::statement("ALTER TABLE `{$table}` ENGINE=InnoDB");
            } catch (\Throwable $e) {
                // Swallow engine conversion failures to keep the migration idempotent on shared hosts
            }
        }
    }

    public function down(): void
    {
        // No down conversion: retaining InnoDB keeps foreign keys intact
    }
};
