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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->string('name',50)->nullable(false);
            $table->string('email', 100)->nullable(false);
            $table->string('address',50)->nullable(false);
            $table->string('phone', 15)->nullable(false);
            $table->decimal('amount')->nullable(false);
            $table->string('note')->nullable();
            $table->enum('status', ['pending', 'confirmed', 'processing', 'shipping', 'completed', 'cancelled', 'refunded', 'failed'])->default('pending');
            $table->enum('payment_method', ['cash', 'vnapay', 'momo', 'paypal'])->default('cash');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('discount_id')->nullable()->constrained('discounts')->onDelete('set null');
            //Xử lý shipping sau
            // $table->foreignId('shipping_id')->constrained('ships')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
