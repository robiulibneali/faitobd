<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('market_verdor_parts_product', function (
            Blueprint $table
        ) {
            $table->unsignedBigInteger('market_verdor_id');
            $table->unsignedBigInteger('parts_product_id');
            $table->longText('link');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('market_verdor_parts_product');
    }
};
