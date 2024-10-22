<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('iletisim_infos', function (Blueprint $table) {
            $table->id();
            $table->text('map_code');
            $table->text('address');
            $table->text('phone_number');
            $table->text('mail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iletisim_infos');
    }
};
