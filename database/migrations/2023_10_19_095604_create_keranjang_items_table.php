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
        Schema::create('keranjang_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('keranjang_id');
            $table->unsignedBigInteger('produk_id');
            $table->integer('jumlah');
            $table->timestamps();

            $table->foreign('keranjang_id')->references('id')->on('Keranjangs')->onDelete('cascade');
            $table->foreign('produk_id')->references('id')->on('Produks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keranjang_items');
    }
};
