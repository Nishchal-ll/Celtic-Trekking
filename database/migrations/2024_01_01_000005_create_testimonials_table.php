<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trek_id')->nullable()->constrained()->onDelete('set null');
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('location')->nullable();
            $table->string('avatar')->nullable();
            $table->text('content');
            $table->tinyInteger('rating')->default(5);
            $table->date('trek_date')->nullable();
            $table->boolean('is_approved')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
