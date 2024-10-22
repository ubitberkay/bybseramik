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
        Schema::create('protiles_uruns', function (Blueprint $table) {
            $table->id();
            $table->json('boyuts')->nullable();
            $table->text('name')->nullable();
            $table->text('slug')->nullable();
            $table->text('description')->nullable();
            $table->json('types')->nullable();
            $table->string('color')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('protiles_uruns');
    }
};
