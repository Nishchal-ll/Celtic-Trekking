<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('itineraries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trek_id')->constrained()->onDelete('cascade');
            $table->integer('day');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('accommodation')->nullable();
            $table->string('meals')->nullable();
            $table->integer('altitude')->nullable();
            $table->string('walking_time')->nullable();
            $table->timestamps();

            $table->index(['trek_id', 'day']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('itineraries');
    }
};
