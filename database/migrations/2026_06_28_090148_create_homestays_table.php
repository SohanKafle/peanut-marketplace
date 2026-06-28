<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('homestays', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('host_name');
        $table->string('location')->nullable();
        $table->integer('capacity');
        $table->decimal('price_per_night', 10, 2);
        $table->text('description')->nullable();
        $table->string('contact_url')->nullable();
        $table->string('image_path')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homestays');
    }
};
