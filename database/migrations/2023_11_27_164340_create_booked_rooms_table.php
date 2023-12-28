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
        Schema::create('booked_rooms', function (Blueprint $table) {
            $table->id();
            $table->integer('book_request_code');
            $table->string('bed_type');
            $table->string('accomodation_type');
            $table->integer('amount');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('member_number')->nullable();
            $table->integer('adult_no');
            $table->integer('children_no');
            $table->integer('rooms');
            $table->date('check_in');
            $table->date('check_out');
            $table->string('requests')->nullable();
            $table->string('special_requests')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booked_rooms');
    }
};
