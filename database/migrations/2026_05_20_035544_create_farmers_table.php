<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('farmers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cooperative_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('photo')->nullable();
            $table->text('bio');
            $table->string('municipality')->default('Machapuchhre');
            $table->integer('experience_years')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void { Schema::dropIfExists('farmers'); }
};