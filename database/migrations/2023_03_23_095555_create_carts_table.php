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
        Schema::create('carts', function (Blueprint $table) {
            $table->engine = 'innoDB';
            $table->id();
            $table->timestamps();
            $table->BigInteger('usersID')->unsigned();
            $table->foreign('usersId')->references('id')->on('users')->onDelete('cascade');
            $table->string('picture');
            $table->string('name');
            $table->string('price');
            $table->string('description');
            $table->bigInteger('productID')->unsigned();
            $table->foreign('productID')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart');
    }
};
