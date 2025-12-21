<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('invoice_number')->unique();

            //Amounts
            $table->decimal('subtotal', 15, 2);
            $table->decimal('discount', 15, 2)->default(0);
            $table->decimal('shipping_cost', 15, 2);
            $table->decimal('total', 15, 2);

            //Shipping
            $table->text('shipping_address');
            $table->string('recipient_name');
            $table->string('recipient_phone', 20);

            //Courier
            $table->string('courier')->nullable();
            $table->string('courier_service')->nullable();
            $table->string('tracking_number')->nullable();

            //Status
            $table->enum('status', [
                'pending',
                'paid',
                'packed',
                'shipped',
                'delivered',
                'cancelled'
            ])->default('pending');

            $table->text('notes')->nullable();

            $table->timestamps();

            //index
            $table->index('user_id');
            $table->index('invoice_number');
            $table->index(['status', 'created_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
