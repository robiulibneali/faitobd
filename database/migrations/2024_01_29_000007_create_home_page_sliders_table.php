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
        Schema::create('home_page_sliders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table
                ->enum('slider_file_type', ['image', 'video'])
                ->default('image')
                ->nullable();
            $table->text('file')->nullable();
            $table->longText('file_url')->nullable();
            $table->string('file_type')->nullable();
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
        Schema::dropIfExists('home_page_sliders');
    }
};
