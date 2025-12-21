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
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->enum('type', ['percentage', 'fixed']);
            $table->decimal('discount', 15, 2)->nullable();

            $table->decimal('min_order', 15, 2)->nullable();
            $table->decimal('max_discount', 15, 2)->nullable();

            $table->integer('max_uses')->nullable();
            $table->integer('used_count')->default(0);
            $table->integer('max_uses_per_user')->default(1);

            $table->datetime('start_date');
            $table->datetime('end_date');
            $table->boolean('is_active')->default(true);

            $table->timestamps();

            //index
            $table->index('code');
            $table->index(['is_active', 'end_date']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};
