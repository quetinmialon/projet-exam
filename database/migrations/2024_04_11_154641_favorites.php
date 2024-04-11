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
        Schema::create('favorites', function(Blueprint $table){

            $table ->integer('userId');
            $table ->integer('productId');
            $table->foreign('userId')->references('id')->on('users');
            $table->foreign('productId')->references('id')->on('products');

        });
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favorites');
    }
};
