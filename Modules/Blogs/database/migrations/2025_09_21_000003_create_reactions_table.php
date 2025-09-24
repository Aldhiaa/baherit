<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('reactions', function (Blueprint $table) {
            $table->id();
            $table->morphs('reactable');
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->enum('type', ['like', 'dislike']);
            $table->timestamps();
            $table->unique(['reactable_type', 'reactable_id', 'user_id'], 'reactable_user_unique');
        });
    }

    public function down()
    {
        Schema::dropIfExists('reactions');
    }
};
