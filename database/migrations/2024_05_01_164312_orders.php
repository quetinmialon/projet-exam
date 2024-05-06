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
        Schema::create('orders', function(Blueprint $table){
            $table ->uuid('id')->primary();
            $table->integer('userId');  
            $table->string('adress');  
            $table->string('paymentMethod');
            $table->integer('totalPrice');
            $table->string('status');          
            $table->timestamps();
        });

        Schema::create('productCommand',function(Blueprint $table){
            $table->string('orderId');
            $table->integer('quantity');
            $table->string('productId');
            $table->timestamps();
            $table->foreign('orderId')->references('id')->on('orders');
            $table->foreign('productId')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productCommand');
        Schema::dropIfExists('orders');
        
        //
    }
};
