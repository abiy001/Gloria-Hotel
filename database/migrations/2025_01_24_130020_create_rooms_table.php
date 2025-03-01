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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->integer('room_number') -> unique();
            $table->string('room_status') -> default('available'); ;
            $table->unsignedBigInteger('rooms_roomtype_id');
            $table->unsignedBigInteger('hotel_id');
            $table->foreign('rooms_roomtype_id')->references('id')->on('room_types');
            $table->foreign('hotel_id')->references('id')->on('hotels');
            $table -> date('checkin_date') -> nullable();
            $table -> date('checkout_date') -> nullable();
            $table->timestamps();
        });
    }       

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
        // Schema::drop('roomtype');
    }
};


