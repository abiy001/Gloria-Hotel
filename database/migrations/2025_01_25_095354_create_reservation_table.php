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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('room_id') -> nullable() ;
            // $table->unsignedBigInteger('hotel_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('room_type_id');
            $table->foreign('room_id')->references('id')->on('rooms') ;
            // $table->foreign('hotel_id')->references('id')->on('hotels'); ;
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('room_type_id')->references('id')->on('room_types');
            $table->date('checkin_date');
            $table->date('checkout_date');
            $table->string('payment_status') -> default('pending');
            $table->string('booking_status') -> default('pending');
            $table -> integer('guest_total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation');
    }
};
