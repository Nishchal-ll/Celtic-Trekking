<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('treks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('destination_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('short_description')->nullable();
            $table->string('image')->nullable();
            $table->json('gallery')->nullable();
            $table->integer('duration_days');
            $table->tinyInteger('difficulty')->default(2); // 1-5 scale
            $table->integer('max_altitude')->nullable();
            $table->string('best_season')->nullable();
            $table->integer('group_size_min')->default(2);
            $table->integer('group_size_max')->default(12);
            $table->decimal('price', 10, 2);
            $table->json('included')->nullable();
            $table->json('not_included')->nullable();
            $table->boolean('is_active')->default(true);
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('treks');
    }
};
