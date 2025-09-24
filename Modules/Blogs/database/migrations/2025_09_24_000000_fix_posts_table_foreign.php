<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        // Ensure tables use InnoDB engine (required for foreign keys on some MySQL setups)
        try {
            DB::statement('ALTER TABLE `users` ENGINE=InnoDB');
        } catch (\Throwable $e) {
            // ignore if cannot change (permissions/unsupported)
        }

        try {
            DB::statement('ALTER TABLE `posts` ENGINE=InnoDB');
        } catch (\Throwable $e) {
            // ignore
        }

        // Ensure user_id column is the correct type (unsignedBigInteger)
        try {
            DB::statement('ALTER TABLE `posts` MODIFY `user_id` BIGINT UNSIGNED NULL');
        } catch (\Throwable $e) {
            // ignore if modify not supported
        }

        // Add foreign key if not exists
        try {
            Schema::table('posts', function (Blueprint $table) {
                // Use raw foreign key add to avoid duplicate method checks
                $table->foreign('user_id', 'posts_user_id_foreign')
                    ->references('id')
                    ->on('users')
                    ->onDelete('set null');
            });
        } catch (\Throwable $e) {
            // A common reason for failure is existing FK or incompatible engines; abort silently
        }
    }

    public function down()
    {
        try {
            Schema::table('posts', function (Blueprint $table) {
                $table->dropForeign('posts_user_id_foreign');
            });
        } catch (\Throwable $e) {
            // ignore
        }
    }
};
