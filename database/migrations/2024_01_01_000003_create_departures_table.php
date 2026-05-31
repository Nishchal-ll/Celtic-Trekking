<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('departures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trek_id')->constrained()->onDelete('cascade');
            $table->date('departure_date');
            $table->date('return_date');
            $table->decimal('price', 10, 2);
            $table->integer('spots_total')->default(12);
            $table->integer('spots_available')->default(12);
            $table->enum('status', ['open', 'confirmed', 'full', 'cancelled'])->default('open');
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->index('departure_date');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('departures');
    }
};
