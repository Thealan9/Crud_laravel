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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->unsigned();
            $table->foreignId('product_id')->unsigned();
            $table->date('sale_date');

            $table->timestamps();
            $table->foreign('client_id')->references('id')->on('clients')->odDelete('cascade')->onUpdate('cascade');
            $table->foreign('product_id')->references('id')->on('products')->odDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
