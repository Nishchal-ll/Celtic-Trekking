<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('treks', function (Blueprint $table) {
            $table->boolean('is_fixed_departure')->default(false)->after('is_active');
            $table->string('fixed_departure_badge')->nullable()->after('is_fixed_departure');
            $table->unsignedInteger('fixed_departure_order')->default(0)->after('fixed_departure_badge');

            $table->index(['is_fixed_departure', 'fixed_departure_order']);
        });
    }

    public function down(): void
    {
        Schema::table('treks', function (Blueprint $table) {
            $table->dropIndex(['is_fixed_departure', 'fixed_departure_order']);
            $table->dropColumn([
                'is_fixed_departure',
                'fixed_departure_badge',
                'fixed_departure_order',
            ]);
        });
    }
};
