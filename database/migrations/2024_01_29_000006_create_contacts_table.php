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
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table
                ->enum('contact_type', ['regular', 'reseller'])
                ->default('regular')
                ->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->unsignedBigInteger('bike_motor_type_id')->nullable();
            $table->longText('message')->nullable();
            $table->longText('workshop_info')->nullable();
            $table->string('workshop_outside_image')->nullable();
            $table->string('workshop_inside_image')->nullable();
            $table->string('workshop_selfie_image')->nullable();
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
        Schema::dropIfExists('contacts');
    }
};
