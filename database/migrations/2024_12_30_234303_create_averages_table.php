<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('averages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('clinic_id')->constrained()->cascadeOnDelete();
            $table->mediumInteger('month');
            $table->smallInteger('weekday');
            $table->string('shift', 1);
            $table->enum('group', ['G', 'P']);
            $table->integer('patients_quantity');
            $table->integer('waiting_time')->nullable();
            $table->string('situation', 1);
            $table->timestamps();
            $table->index(['month', 'weekday', 'shift']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('averages');
    }
};
