<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('clinics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('city_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->enum('type', ['UPA', 'PS'])->default('UPA');
            $table->string('address');
            $table->string('neighborhood');
            $table->decimal('latitude', 10, 8);
            $table->decimal('longitude', 11, 8);
            $table->boolean('active')->default(true);
            $table->boolean('fulltime')->default(true);
            $table->boolean('has_display');
            $table->boolean('multilevel');
            $table->integer('capacity');
            $table->decimal('rating', 2, 1)->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index(['city_id', 'name', 'active']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clinics');
    }
};
