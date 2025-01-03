<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('realtimes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('clinic_id')->constrained()->cascadeOnDelete();
            $table->enum('type', ['time','quantity']);
            $table->enum('group', ['G', 'P']);
            $table->integer('blue')->nullable();
            $table->integer('green')->nullable();
            $table->integer('yellow')->nullable();
            $table->integer('red')->nullable();
            $table->integer('total')->default(0);
            $table->enum('situation', ['T','M','L','S'])->nullable();
            $table->foreignId('updated_by_user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('realtimes');
    }
};
