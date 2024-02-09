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
        Schema::create('parts_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('parts_brand_category_id');
            $table->text('title');
            $table->text('sub_title')->nullable();
            $table->longText('short_description')->nullable();
            $table->longText('long_description')->nullable();
            $table->longText('features')->nullable();
            $table->integer('view_count')->nullable();
            $table
                ->tinyInteger('status')
                ->default(1)
                ->nullable();
            $table->string('sku')->nullable();
            $table->text('main_image')->nullable();
            $table->longText('sub_images')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parts_products');
    }
};
