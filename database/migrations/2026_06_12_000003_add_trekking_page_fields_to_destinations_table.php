<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('destinations', function (Blueprint $table) {
            $table->string('hero_title')->nullable()->after('banner_image');
            $table->string('hero_subtitle')->nullable()->after('hero_title');
            $table->string('intro_title')->nullable()->after('hero_subtitle');
            $table->text('intro_content')->nullable()->after('intro_title');
            $table->json('intro_gallery')->nullable()->after('intro_content');
            $table->string('info_title')->nullable()->after('intro_gallery');
            $table->text('info_content')->nullable()->after('info_title');
        });
    }

    public function down(): void
    {
        Schema::table('destinations', function (Blueprint $table) {
            $table->dropColumn([
                'hero_title',
                'hero_subtitle',
                'intro_title',
                'intro_content',
                'intro_gallery',
                'info_title',
                'info_content',
            ]);
        });
    }
};
