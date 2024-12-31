<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('metropolitan_regions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('state_id')->constrained();
            $table->string('name', 90);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('metropolitan_regions');
    }
};
