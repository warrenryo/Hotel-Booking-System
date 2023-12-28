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
        Schema::create('room', function (Blueprint $table) {
            $table->id();
            $table->integer('price');
            $table->integer('member_discount');
            $table->string('bed_type');
            $table->string('accomodation_type');
            $table->longText('bedding');
            $table->longText('room_feature');
            $table->longText('bathroom_features');
            $table->longText('furnitures');
            $table->longText('kitchen_features');
            $table->longText('internet_phones');
            $table->longText('entertainment');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('room');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
};
