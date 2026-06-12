<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('agency_pages', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('The Celtic Trekking Agency');
            $table->longText('intro_content')->nullable();
            $table->longText('ethics_content')->nullable();
            $table->json('slider_images')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('agency_pages');
    }
};
