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
        Schema::create('motor_bike_parts_product', function (Blueprint $table) {
            $table->unsignedBigInteger('motor_bike_id');
            $table->unsignedBigInteger('parts_product_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motor_bike_parts_product');
    }
};
