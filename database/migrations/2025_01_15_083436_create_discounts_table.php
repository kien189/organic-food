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
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('type', 50)->default('fixed');
            $table->decimal('value')->nullable(false);
            $table->boolean('is_active')->default(true);
            $table->date('start_date')->nullable(false);
            $table->date('end_date')->nullable(false);
            $table->integer('limit')->nullable(false);
            $table->string('code',30)->nullable(false)->unique();
            //Xử lý sau
            // $table->foreignId('product_id')->nullable()->constrained('products')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discounts');
    }
};
