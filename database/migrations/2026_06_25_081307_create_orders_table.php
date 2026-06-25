<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up(): void
{
    Schema::create('orders', function (Blueprint $table) {
        $table->id(); // This creates your #ORD numbers
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->decimal('total_amount', 10, 2);
        $table->string('payment_status')->default('pending'); 
        $table->string('payment_method'); 
        $table->string('status')->default('Pending Fulfillment'); 
        $table->string('city'); 
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
