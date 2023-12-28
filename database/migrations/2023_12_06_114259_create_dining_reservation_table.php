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
        Schema::create('dining_reservation', function (Blueprint $table) {
            $table->id();
            $table->string('dining_facility');
            $table->string('first_name');
            $table->string('last_name');
            $table->bigInteger('phone_number');
            $table->string('email');
            $table->string('occasional')->nullable();
            $table->string('special_request')->nullable();
            $table->date('date');
            $table->string('time');
            $table->string('no_people');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dining_reservation');
    }
};
