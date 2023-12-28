<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dining', function (Blueprint $table) {
            $table->id();
            $table->string('dining_facility');
            $table->longText('description')->nullable();
            $table->string('date_available');
            $table->time('time_open');
            $table->time('time_close');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('dining');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
};
