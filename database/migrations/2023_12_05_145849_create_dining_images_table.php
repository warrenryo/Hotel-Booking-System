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
        Schema::create('dining_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dining_id');
            $table->string('dining_images');
            $table->foreign('dining_id')->references('id')->on('dining')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dining_images');
    }
};
