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
        Schema::create('motor_bikes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('bike_brand_id');
            $table->unsignedBigInteger('bike_motor_type_id');
            $table->unsignedBigInteger('bike_engine_size_id');
            $table->unsignedBigInteger('bike_year_version_id');
            $table->string('model_name');
            $table->string('size')->nullable();
            $table->string('image')->nullable();
            $table->string('variant')->nullable();
            $table->string('sku')->nullable();
            $table->text('slug')->nullable();
            $table
                ->tinyInteger('status')
                ->default(1)
                ->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motor_bikes');
    }
};
