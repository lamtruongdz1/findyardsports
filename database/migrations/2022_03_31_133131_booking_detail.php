<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_details', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('booking_id');
            // $table->foreign('booking_id')->references('id')->on('bookings');
            // $table->unsignedBigInteger('yard_id');
            // $table->foreign('yard_id')->references('id')->on('yards');
            $table->BigInteger('booking_id');
            $table->string('price',150);
            $table->timestamps();
            // $table->foreignId('id')->references('id_districts')->on('yards');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_details');
    }
};
