<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->integer('stock')->default(0);
            $table->string('unit')->default('kg');
            $table->string('status')->default('active');
            $table->boolean('featured')->default(false);
            $table->string('image')->nullable(); 


            $table->string('producer_name');
            $table->unsignedInteger('ward_number');
            $table->string('village_name');
            $table->string('contact_link')->nullable(); 

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
