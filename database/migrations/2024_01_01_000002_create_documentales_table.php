<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('documentales', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->integer('duracion');
            $table->string('poster');
            $table->foreignId('director_id')->constrained('directores')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('documentales');
    }
};