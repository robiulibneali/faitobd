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
        Schema::create('site_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->text('menu_logo')->nullable();
            $table->text('favicon')->nullable();
            $table->text('footer_logo')->nullable();
            $table->longText('default_seo_header')->nullable();
            $table->longText('default_seo_footer')->nullable();
            $table->longText('fb_link')->nullable();
            $table->longText('tiktok_link')->nullable();
            $table->longText('insta_link')->nullable();
            $table->longText('youtube_link')->nullable();
            $table->string('helpline_number')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
