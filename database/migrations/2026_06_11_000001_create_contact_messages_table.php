<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contact_messages', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email_address');
            $table->string('phone')->nullable();
            $table->unsignedBigInteger('destination_id')->nullable();
            $table->integer('persons')->default(1);
            $table->text('message')->nullable();
            $table->timestamps();

            $table->foreign('destination_id')->references('id')->on('destinations')->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contact_messages');
    }
};
