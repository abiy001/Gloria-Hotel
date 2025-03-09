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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('hotel_name') -> unique();
            $table->string('hotel_image');
            $table->longText('hotel_description');
            $table -> unsignedBigInteger('city_id');
            $table -> integer('hotel_rating') -> default(0);
            $table -> integer('total_rating') -> default(0);
            $table->foreign('city_id')->references('id')->on('cities') ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
