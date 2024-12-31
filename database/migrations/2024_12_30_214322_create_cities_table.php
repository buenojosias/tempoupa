<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('metropolitan_region_id')->constrained()->cascadeOnDelete();
            $table->string('name', 90);
            $table->enum('status', ['Ativa', 'Pendente', 'Removida'])->default('Ativa');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
