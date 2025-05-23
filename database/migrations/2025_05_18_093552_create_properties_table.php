<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
             $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Seller
                $table->string('title');
                $table->text('description');
                $table->decimal('price', 15, 2);
                $table->string('type'); // e.g., House, Land, Apartment
                $table->string('status')->default('available'); // e.g., available, sold, pending
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
