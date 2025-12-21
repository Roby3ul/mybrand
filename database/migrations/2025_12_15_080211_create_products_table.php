<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description');
            $table->decimal('price', 15, 2);
            $table->decimal('discounted_price', 15, 2)->nullable();
            $table->integer('stock')->default(0);
            $table->integer('weight')->default(0);
            $table->string('sku')->unique()->nullable();
            $table->enum('status', ['active', 'inactive', 'out_of_stock'])->default('active');
            $table->integer('Views')->default(0);
            $table->integer('sold')->default(0);
            $table->timestamps();

            //index
            $table->index('slug');
            $table->index('status');
            $table->index(['created_at', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
