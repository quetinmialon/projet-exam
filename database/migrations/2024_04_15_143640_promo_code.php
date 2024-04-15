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
        Schema::create('promoCode', function(Blueprint $table){
            $table->string('label')->primary();
            $table->integer('value');            
            $table->timestamps();
        });

        Schema::create('basket',function(Blueprint $table){
            $table->integer('userId');
            $table->string('promoCodeLabel')->nullable();
            $table->timestamps();
            $table->foreign('userId')->references('id')->on('users');
            $table->foreign('promoCodeLabel')->references('label')->on('promoCode');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('basket');
        Schema::dropIfExists('promoCode');
        
    }
};
