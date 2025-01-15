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
        Schema::create('product_statics', function (Blueprint $table) {
            $table->id();
            $table->decimal('total_sales')->nullable();
            $table->unsignedBigInteger('view_count')->default(0); // Đảm bảo view_count là một số nguyên không âm
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_statics');
    }
};
